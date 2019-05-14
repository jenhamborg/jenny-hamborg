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
            <li><a href="welcome.php">Software Development</a></li>
            <li><a href="design.html">Design</a></li>
            <li><a href="photography.html">Photography</a></li>
            <li><a href="logout.php">Logout</a></li>
						
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron text-center">
      <div class="container">
				<img src = "images/logo.jpg" alt="logo" height= "100px" width = "100px">
        <h1>Jenny Hamborg</h1>
        <p class="lead">Software Developer</p>
      </div>
    </div>
  </header>

    <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Software Development</h2>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-sm-4">
              <div class="thumbnail text-center">
                <img src="images/ios1.jpg" alt="ios development image" class="img-responsive">
                <h4>Project</h4>
                <h5>iOS Development</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail text-center">
                <img src="images/ios2.jpg" alt="ios development image" class="img-responsive">
                <h4>Project</h4>
                <h5>iOS Development</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail text-center">
                <img src="images/responsive.jpg" alt="newsletter ad image" class="img-responsive">
                <h4>Project</h4>
                <h5>HTML, CSS, &amp; JQuery</h5>
              </div>
            </div>
          </div>
         
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
