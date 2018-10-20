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
  <a class="navbar-brand" href="index.php" style="margin-left: 107px;">Codetrek Forum</a>
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
</nav>

<div class="container mt-5">
	<h3 class="font-weight-light "><strong> Ask questions</strong></h3>
	<div class="card mb-4 shadow-sm">
			<div class="card-body">
				<form action="thankyou.php" name="form" method="post" onsubmit="return validate_form()">
  <div class="form-group">
    <label><strong>Title</strong><font color=F90E4D><sup>*</sup></font></label><br>
    <input type="text" name="Title" placeholder="  Enter a short and proper title for your question" class="form-control"></input>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Description</strong></label><font color=F90E4D><sup>*</sup></font>
    <textarea name ="Description" class="form-control" id="exampleInputPassword1" rows=8 placeholder="Enter a detailed description of what problems you are facing and steps to replicate"></textarea>
  </div>
  <label ><strong>Add tags</strong></label><br>
  <input type="text" name="tag"  placeholder="  tag1,tag2,tag3" class="form-control"></input>
  <small class="text-muted">Tags willl help others to find your questions faster. Add comma separated tags. for ex: <i>codetrek,bootstrap,frontend</i></small>
  <br><br>
  <button type="submit" class="btn btn-primary">Post your question</button>
</form>
			</div>
</div></div></div>
<footer class="bg-light text-center py-2  mt-5">
		<span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
	</footer>
	
</body>
</html>