<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CodeTrek Forum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="main.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php" style="margin-left: 107px">Codetrek Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: grey;"><strong>Questions</strong> <span class="sr-only">(current)</span></a>
      </li>
      
  
    </ul>
    <div class="dropdown mr-5">
        <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sachin</a>
          <a class="dropdown-item" href="profile.php">My Profile</a>
         
          <a class="dropdown-item" href="#">Settings</a>
        </div>
      
  </div>
</div>
</nav>
<div class="container"><br><br>
  
  <img src="IMG_20170423_123239.jpg" height="270" width="270" class="rounded-circle float-lg-left mr-5" >
  <div class="card mb-4" style="border:none">
      <div class="card-body">
<h3>   Sachin Saxena</h3><br>
<i class="fas fa-building "></i><span class="text-secondary"><strong> partime coder, unnamed corporation </strong></span>
<a class="btn btn-outline-primary badge-pill float-right" href="#"><i class="fas fa-edit">Edit Profile</i></a>
<br>
<i class="fas fa-map-marker-alt"></i> <span class="text-secondary"><strong> Tehri</strong></span>
      
<br><br>
<span class="text-muted"><h5>2 questions asked</h5></span>
<span class="text-muted"><h5>3 answers</h5></span>
<i class="fab fa-github fa-2x"></i>&nbsp &nbsp
<i class="fab fa-facebook fa-2x"></i>  &nbsp &nbsp <i class="fab fa-linkedin fa-2x"></i>  &nbsp &nbsp  <i class="fas fa-envelope fa-2x"></i>
</div>
    </div>

<h4> Your questions</h4>

<div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="answers.html">How do I use Git and GitHub?</a></h4>
        <p class="text-secondary mb-0">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit perspiciatis fuga laudantium dignissimos non recusandae id ducimus nobis dolores fugit, ipsa laboriosam eum exercitationem nesciunt laborum...
        </p>
        <a href=#><span class="badge badge-info">git</span></a>
        <a href=#><span class="badge badge-info">github</span></a>
        <a href=#><span class="badge badge-info">vcs</span></a>
        <br><br>
        <p>
          <a href="#" class="card-link"><small>Sachin</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Sep 27, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
            <i class="far fa-thumbs-up"  onclick="thumbL()" id="like">14</i>
          </div>
          <div class="mr-3">
            <i class="far fa-thumbs-down"  onclick="thumbD()" id="dlike">1</i>
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="answers.html" class="text-secondary"><small>2 answers</small></a>
          </div>
        </div>
      </div>
    </div>
<div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="#">What is FontAwesome? Where can I install them?</a></h4>
        <p class="text-secondary mb-0">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem odio temporibus unde corrupti? Mollitia consequatur, nobis aliquid ex natus exercitationem vel sit rem in voluptatum consectetur ad commodi ipsam sunt...
        </p>
        <a href=#><span class="badge badge-info">fontawesome</span></a>
        <a href=#><span class="badge badge-info">icons</span></a>
        <a href=#><span class="badge badge-info">frontend</span></a>
        <br><br>
        <p>
          <a href="#" class="card-link"><small>Sachin</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Sep 25, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
           <i class="far fa-thumbs-up"  onclick="thumbL()" id="like">10</i>
          </div>
          <div class="mr-3">
           <i class="far fa-thumbs-down"  onclick="thumbD()" id="dlike">15</i>
            
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="#" class="text-secondary"><small>2 answers</small></a>
          </div>
        </div>
      </div>
    </div>





</div>
<footer class="bg-light text-center py-2  mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
  </footer>
</body>
</html>