<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Articolo</h1>
   
    
     <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$articolo['titolo']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$articolo['categoria']}}</h6>
    <p class="card-text">{{$articolo['descrizione']}}</p>
    <a href="{{route('articoli')}}" class="card-link">Card link</a>
    
  </div>
</div>
    
    
    
</body>
</html>