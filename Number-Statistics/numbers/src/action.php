
<html>
<head>
  <title>action.php</title>
</head>

<body>

<?php
echo '<head>';
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';
$num = $_POST["num"];
$choice = $_POST["choice"];

switch ($choice) {


  case "prime":
    echo "<center>";
    echo "<body class='bg-secondary'><h2 style='color: yellow'>Below are prime numbers for $num:</h2>";
    for ($j = 2; $j <= $num; $j++) {
      $flag = true;
      for ($i = 2; $i < $j; $i++) {

        if ($j % $i == 0) {
          $flag = false;
          break;
        }
      }
      if ($flag == true) {
        echo "<h3 style = 'color:white'>$j</h3>";
      }
    }



    echo "</body>";
    break;

  case "fact":
    $fact = 1;
    for($i = 1; $i <= $num; $i++) {
      $fact *= $i;
    }
    echo "<body class='bg-dark'><center><h2 style='color: white'><br><br>Factorial($num)= $fact</h2></body>";
}
echo "</center>";
echo "</body>";

?>

</body>
</html>
