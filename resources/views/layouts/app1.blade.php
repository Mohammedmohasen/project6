<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <title>Document</title>
</head>
<body>
   @include('inc.navbar2')
  <div class="container">
    
      
          <div class="col-md-8 col-lg-8 "> 
            @include('inc.mass')                                    
            @yield('contact')
            
          
            
         
    </div>
</div>
</body>
</html>