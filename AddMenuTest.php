<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .form-group label {
    display: inline-block;
    width: 200px;
    text-align: left;
    margin-left: 30px;
    margin-bottom: 10px;
    }

    .form-group input {
    display: inline-block;
    width: 500px;
    margin-left: 10px;
    text-align: left;
    margin-left: 30px;
    margin-bottom: 10px;
    }

    .btn-container {
    display: flex;
    justify-content: left;
    margin-top: 20px;
    margin-left: 30px;
    margin-bottom: 10px;
    }

  </style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CORDOVA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Manage</a></li>
        <li><a href="#">Menu</a></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container">
    <h1>Create Menu</h1>      
  </div>
</div>

<div class="form-group">
  <label for="Mname">Menu Name:</label>
  <input type="text" class="form-control" id="Mname">
</div>

<div class="form-group">
  <label for="Mdesc">Menu Description:</label>
  <input type="text" class="form-control" id="Mdesc">
</div>

<div class="btn-container">
  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Submit</a>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Menu</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this menu?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>

</body>
</html>
