<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="" style="background-color:#c1c7c9">
        <div style="padding: 10px 10px; background: #cbd4d2; color: black!important;">
    <ul class="nav justify-content-end">
        <li class="nav-item">
    <a class="nav-link active" style="color: black; font-weight: bold; position: absolute; left: 10%;" href="http://localhost/exampleapp/public/">Example name</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color: black;" href="http://localhost/exampleapp/public/">Bosh sahifa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color: black;" href="{{route('post')}}">Yangiliklar</a>
  </li>

</ul>        </div>
          
              
              <main>
                   @yield('content')
              </main> 

    </body>
</html>
