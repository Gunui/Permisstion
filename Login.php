<!DOCTYPE html>
<html lang="th">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form name="Login" method="post" action="Check_login.php">

<div class="container">
  <h1>Admin Page</h1>


<div class="form-group">
  <label for="usr">Host:</label>
  <select name="ddhost" id="ddhost">
    <option>- Select -</option>
    <option>31.170.164.246</option>
  </select>
</div>

<div class="form-group">
  <label for="usr">Name:</label>
  <input name="usr" type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input name="pwd" type="password" class="form-control" id="pwd">
</div>

  <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Login">

</div>
</form>
</body>
</html>

