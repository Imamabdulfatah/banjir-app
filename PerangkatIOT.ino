#include <StepperMotor.h>
#include <Arduino.h>
#include <WiFi.h>
#include "HTTPClient.h"

#define led 13 // onboard led

// IN1, IN2, IN3, IN4
StepperMotor motor(14,27,26,25);
int motorSpeed = 1; // motor gets slower as this number increases
int motorSteps = 4076;

const int sensorWater = A0;
int Water = 0;
const int green = 13; // Pin untuk lampu hijau
const int red = 12; // Pin untuk lampu merah

const int trigPin = 2;  // Pin trigger (output)
const int echoPin = 15; // Pin echo (input)

int aktif = 0;
int nonaktif = 0;
int a = 0;
int b = 0;

unsigned long previousMillis = 0;  // variabel untuk menyimpan waktu sejak blok kode terakhir dijalankan
const long interval = 60000;       // interval waktu dalam milidetik (1 menit)

const char* ssid = "IA";
const char* pass = "03030303";
const char* host = "192.168.12.200";


void setup() {
  Serial.begin(115200);

  
  WiFi.begin(ssid, pass);
  Serial.println("Connecting...");
  while(WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(100);
  }
  
  // declare pin  to be an input:
  pinMode(echoPin, INPUT);
  pinMode(sensorWater, INPUT);

  // declare pin  to be an output:
  pinMode(led, OUTPUT);
  pinMode(green,OUTPUT);
  pinMode(red,OUTPUT);
  pinMode(trigPin, OUTPUT);

  digitalWrite(led, LOW); // turn off LED
  motor.setStepDuration(motorSpeed);
}

void loop() {
  // Memanggil fungsi untuk mengambil bacaan dari sensor ultrasonik dan sensor air
  int ultrasonikValue = ultrasonik();
  int waterValue = water();
  unsigned long currentMillis = millis();

  Serial.println("ultrasonik = " + String(ultrasonik()));
  Serial.println("water level = " + String(water()));
  Serial.println(a);
  Serial.println(b);
  Serial.println("============================================================");
  
  // Memeriksa kondisi untuk menentukan aksi motor
  if (ultrasonikValue <= 20) {
   while(a < 1) {
       
        motorHigh();
        delay(7000); 
        Serial.println("============================================================");
        Serial.println("dinding naik");
        Serial.println(a);
        Serial.println("============================================================");
        a++;
        b = 0;
        break;
    }
  } else if (ultrasonikValue >= 20) {
   while(b < 1)  {
        motorLow(); 
        delay(7000); 
        Serial.println("============================================================");
        Serial.println("dinding turun");
        Serial.println(b);
        Serial.println("============================================================");
        b++;
        a = 0;
        break;
    }
  } else {
    Serial.print("Motor Diam");
  }

   // cek apakah sudah 1 menit berlalu
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;  // simpan waktu saat ini

    database();
    // Tempatkan kode yang ingin dieksekusi setiap 1 menit disini
    Serial.println("1 menit telah berlalu, eksekusi kode!");
    Serial.println("============================================================"); 
  }

  
}



int ultrasonik() {
   // Kirimkan pulsa ultrasonik
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);

  // Baca waktu yang diperlukan untuk pulsa kembali
  long duration = pulseIn(echoPin, HIGH);

  // Ubah waktu menjadi jarak (dalam centimeter)
  // Menggunakan formula: jarak = waktu x kecepatan suara / 2
  // Kecepatan suara sekitar 343 m/s atau 0.0343 cm/microsecond
  float distance_cm = duration * 0.0343 / 2;

  delay(1000);
  return distance_cm; 
}

int water() {
   // Baca nilai dari sensor air
  int sensorValue = analogRead(sensorWater);

  // Tunggu sebentar sebelum membaca kembali
  delay(1000);
  return sensorValue; 
}

void motorHigh() {
  digitalWrite(led, HIGH); // shows forward rotation
  motor.step(motorSteps); 
}

void motorLow() {
  digitalWrite(led, LOW); // shows reverse rotation
  motor.step(-motorSteps);
}

void database(){
  WiFiClient client;
  const int httpPort = 80;
 
  int ultrasonikValue = ultrasonik();
  int waterValue = water();

  if (!client.connect(host, httpPort)) {
    Serial.println("Connection Failed");
    return;
  }

  HTTPClient http;
  String Link = "http://" + String(host)  + "/banjir-app/public/simpan/" + String(ultrasonikValue) + "/" + String(waterValue);

  http.begin(Link);
  int httpCode = http.GET();

  if (httpCode > 0) {
    String respon = http.getString();
    Serial.println(respon);
  } else {
    Serial.println("Error on HTTP request");
  }
  
  http.end();
  
  delay(1000);
}