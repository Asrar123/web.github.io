<!DOCTYPE html>
<html>
<head>
	<title> website page</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style >


 div.card {
  width: 400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
   border-radius: 50px;
}

div.card-body {
  padding: 10px;


}
body{
  background-color:black;
}




</style>

</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style=" color:white;"  href="#">AAM CAR INDUSTRIES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Menu
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.php">Login</a>
        <a class="dropdown-item" href="about.php">About us</a>
        <a class="dropdown-item" href="#">Contact</a>
      </div>
    </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/w4.jpg" alt="Los Angeles" >
      <div class="carousel-caption">
        <h3>Bugatti</h3>
        <p>Bugatti is great car!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/w5.jpg" alt="Chicago" >
      <div class="carousel-caption">
        <h3>Ferrari</h3>
        <p>Ferrari is graet car!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/w6.jpg" alt="New York" >
      <div class="carousel-caption">
        <h3>Ferrari</h3>
        <p>Ferrari is graet car</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
	<div class="py-5">
		<h3 class="text-center text-white">About Us</h3>
	</div>
	<div class="container-fluid">
		 <div class="row">
	 		<div class="col-lg-6  col-md-6" col-12>
	 			<img src="images/c13.jpg"  class="img-fluid aboutimg">
	 		</div>
	 		<div class="col-lg-6  col-md-6" col-12>
	 			<h1 class="display-4 text-white">IT IS AAM CAR INDUSRTIES</h1></be>
	 			<a href="about.php" class="btn btn-success">ckeck me</a>
	 		</div>
	 	
	 	</div>
	</div>
</section>


<section class="my-5">
        <div class="py-5">
            <h3 class="text-center text-white">Our Gallary</h3>
        </div>
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-4  col-md-4" col-12>
                  <div class="card">
          <img class="card-img-top" src="images/c6.jfif" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Beatuful Car</h4>
                           <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
              </div>
              <div class="col-lg-4  col-md-4" col-12>
                  <div class="card">
          <img class="card-img-top" src="images/c3.jfif" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Beatuful Car</h4>
                           <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
                </div>
                <div class="col-lg-4  col-md-4" col-12>
                  <div class="card">
          <img class="card-img-top" src="images/c4.jfif" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Beatuful Car</h4>
                           <p class="card-text" >Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
              </div>
          </div>
        </div>
  </section>









<section class="my-5">
        <div class="py-5">
            <h3 class="text-center text-white" >CAR BOOKING</h3>
        </div>
          <div class="w-25 m-auto">
          
           <form action="insert.php" method="post">
              <div class="form-group">
                <label class=" text-white">Select Brand</label>
                <input type="text" name="brand"  required="Select Brand" autocomplete="off" class="form-control">
              </div>
            

               <div class="form-group">
                <label class=" text-white">Select Modal</label>
                <input type="text" name="modal"  required="Select Modal" autocomplete="off" class="form-control">
              </div>
             
               <div class="form-group">
                <label class=" text-white">Select Variant</label>
                <input type="text" name="variant" required="Select Variant" autocomplete="off" class="form-control">
              </div>
             
             
              <div class="form-group">
                <label class=" text-white">Email Id</label>
                <input type="text" name="email" required="Email Id" autocomplete="off" class="form-control">
              </div>
            
              
               <div class="form-group">
                <label class=" text-white">Mobile</label>
                <input type="text" name="mobile" required="Mobile" autocomplete="off" class="form-control">
              </div>
             
              
               <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>
          </div>  

         
</section>



          <footer>
            <p class="p-3 bg-dark text-white text-center">@AAM INDUSTRIES</p>
          </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

             
</body>
</html>