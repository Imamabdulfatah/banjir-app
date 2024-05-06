<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Monitoring Banjir</title>

    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(() => {
                $('#air').load("{{ url('bacaair')}}");
            }, 1000);
        })

        $(document).ready(function() {
            setInterval(() => {
                $('#berat').load("{{ url('bacaberat')}}");
            }, 1000);
        })
    </script>
  </head>
  <body>
        {{-- tampilan --}}
    
    <div class="container" style="text-align: center; margin-top: 80px;">
        <img src="{{ ('images/LaravelLogo.png')}}" alt="" style="width: 150px">
        <h2>Monitoring Nilai sensor secara realtime</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="text-align:center; background-color: red; color:white">
                      Ketinggian Air
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <span id="air">0</span>
                    </h3>
                     
                      
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="text-align:center; background-color: red; color:white">
                      Berat Sampah
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <span id="berat">0</span>
                      </h3>
                     
                      
                    </div>
                  </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>