<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
 <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
 
<body style="background:url('images/5.jpg'); background-size: cover;">
<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
          	<center>
            <img src="images/9.jpg" class="card-img-top">
            <div class="card-body">
              <center>	 

	    <h3>User Signup</h3><br>
		<form class="form-group" action="includes/signup.inc.php" method="POST">
			 <div class="row">
                  <div class="col-md-4"><label>Firstname: </label></div>
		    <div class="col-md-8"><input type="text" name="first" class="form-control" placeholder="firstname" required=""></div><br><br>
		    <div class="col-md-4"><label>Lastname: </label></div>
			<div class="col-md-8"><input type="text" name="last" class="form-control" placeholder="lastname" required=""></div><br><br>
			<div class="col-md-4"><label>Email: </label></div>
			<div class="col-md-8"><input type="text" name="email" class="form-control" placeholder="e-mail" required=""></div><br><br>
      <div class="col-md-4"><label>Gender: </label></div>
      <div class="col-md-8"><input type="text" name="gender" class="form-control" placeholder="gender" required=""></div><br><br>
      <div class="col-md-4"><label>Phone: </label></div>
      <div class="col-md-8"><input type="text" name="phone" class="form-control" placeholder="phone" required=""></div><br><br>
      
			<div class="col-md-4"><label>Username: </label></div>
			<div class="col-md-8"><input type="text" name="uid" class="form-control" placeholder="username" required=""></div><br><br>
			<div class="col-md-4"><label>Password: </label></div>
			<div class="col-md-8"><input type="password" name="pwd" class="form-control" placeholder="password" required=""></div><br><br> <br>
		</div>
	 	    <input type="submit" id="inputbtn" name="submit" value="signup" class="btn btn-primary">

	    </form>
	 </center>
            </div>
        </center>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
	 