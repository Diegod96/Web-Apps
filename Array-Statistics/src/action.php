
<html>
<head>
  <title>Title</title>
</head>

<body>
  <?php
  $choice=$_GET['choice'];
  $size=$_GET['size'];


  for($i = 0; $i < $size; $i++) {
    $A[$i] = mt_rand(1, 10);
    echo $A[$i]."&nbsp;&nbsp;&nbsp;&nbsp";
  }

  switch ($choice) {

    case "Mean":

      $sum = 0;

      for ($i = 0; $i < $size; $i++) {
        $sum += $A[$i];
      }

      $mean = $sum / $size;
      echo "<h3>Mean = $mean</h3>";
    break;
    }
  ?>
</body>

</html>
