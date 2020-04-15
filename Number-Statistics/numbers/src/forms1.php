<html>
<title>Example One</title>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<center>
<table class="table table-bordered table-hover" style="width: 700px">
  <td>
    <div class="container">
      <form id="form1" name="form1" method="post" action="action.php">
        <div class="form-group">
          <label><h2>Enter a number:</h2></label>
          <input type="text" name="num" class="form-control" placeholder="Type an integer">
        </div>
        <div class="form-group">
          <label>Enter your choice</label>
          <h5 style="color: red">Find the factorial: <input type="radio" name="choice" value="fact" class="form-control"></h5>
          <h5 style="color: green">Generate prime numbers <input type="radio" name="choice" value="prime" class="form-control"></h5>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
      </form>
    </div>
  </td>
</table>
</center>
</body>
</html>
