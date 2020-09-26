<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route ('products.index') }}">Product<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('categories.index') }}">Category</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" type="get"  action="{{ url ('products.search')}}">
            <input class="form-control mr-sm-2" name="query" type="search" placeholder="search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
      </div>
    </nav>
    <!-- <div class="container"></div>
    @if($errors->any())
      @foreach($erros->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error}}
        </div>
      @endforeach
    @endif  
  </div> -->

  <div class="container"></div>
    @if(session ()->exists('message'))
        <div class="alert alert-successr" role="alert">
          {{ session ('message')}}
        </div>
    @endif  
  </div>
        <div class="container">
          <main class="py-4">
            @yield('content')
          </main>
        </div>
    
</body>
</html>