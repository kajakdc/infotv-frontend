<html>
  <head>
    <title>KajakDC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
  
  <div class="w3-container w3-teal">
    <h1>KajakDC</h1>
  </div>

  <div class="w3-container w3-teal">
    <ul class="w3-ul w3-center">
      <li><h2>Motd</h2></li>
      <?php
        $json = file_get_contents('http://10.20.10.4/api/motd/');
        $obj = json_decode($json);
        $i = $obj->products;
        foreach ($i as $j) {
          echo "<li>$j</li>";
        }
      ?>
    </ul>
  </div>
  </body>
</html>
