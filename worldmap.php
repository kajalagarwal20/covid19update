<!DOCTYPE html>
<html>
<head>
<title>Track Corona on World Map</title>
    <?php include 'link/links.php' ;?>
   <link rel="stylesheet" type="text/css" href="css/style.css">
    
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body>
    <h1>Go Corona Go</h1>
    <nav class="navbar navbar-expand-lg nav_style p-3 nav nav-tabs">
  <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-3">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">IndiaCoronaLive <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">WorldCoronaLive </a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="symptoms.php">Symptoms</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Should you get tested?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Prevention</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Useful Links </a>
      </li>
    
        <li class="nav-item">
        <a class="nav-link" href="#">Feeling Anxious?</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Lets connect & chill</a>
      </li>
      
    </ul>
  </div>
</nav>
    <div id='map'></div>
    
    </body>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    
<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoic3VwZXJub3Zha2FqYWwiLCJhIjoiY2s5NzU2MWw1MGJncjNudGE1enhvcGtiZSJ9.gLhO2-hfzY4yUBCPMBL8gg';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v10',
      zoom:1,
      center:[0,20]
  });
</script>

    <script src="map.js"></script>
</html>