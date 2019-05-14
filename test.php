<?php
	require('connect.php');
    
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
				$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jenny Hamborg Software Developer</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
	
	<body>
		
		<header>
    <nav class="navbar navbar-default navbar-fixed-top text-center">
      <div class="container-fluid">

        <!-- mobile menu button -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron text-center">
      <div class="container">
        <h2>Jenny Hamborg</h>
        <p class="lead">Software Developer</p>
      </div>
    </div>
  </header>
		
		 <section id="register">
   		 <div class="container">
						 <div class = "row">
									 <div class="col-md-3">
									<h2>Register</h2>
									</div>
							 		
					<div class = "col-md-9">
						
							<form class="form-signin" method="POST">
								      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
     								 <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
											<div class="input-group">
													<span class="input-group-addon" id="basic-addon1"></span>
														<input type="text" name="username" class="form-control" placeholder="Username" required></div>
																<label for="inputEmail" class="sr-only">Email address</label>
																<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
																<label for="inputPassword" class="sr-only">Password</label>
																<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
																<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
																<a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
									</form>
								

							 		</div>
						</div>
				 </div>
			 </div>
		</section>
				 <footer>
        <div class="container text-center">
          <small>&copy; 2017 Jenny Hamborg</small>
        </div>
   			</footer>
		
		  <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
        $('body').scrollspy({ target: '#navbar', offset: 0 });
      </script>
		
	
</body>
</html>