<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "codetrek_forum";
$id=$_GET['title'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 



$sqlq="SELECT * FROM questions WHERE id='$id'";
		$resultq=mysqli_query($conn,$sqlq);
		$row=mysqli_fetch_assoc($resultq);
		$subtag=explode(",",$row['tags']);
		if ($resultq) {} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if(isset($_POST["ans"])){
$ans=$_POST["ans"];
$sql= "INSERT INTO answers(question_id,answer_text,created_at,updated_at) VALUES('$id','$ans',NOW(),NOW())";
 $result=mysqli_query($conn,$sql);
if ($result) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$sqla="SELECT * FROM answers WHERE question_id='$id'";
$resulta=mysqli_query($conn,$sqla);

if ($resulta) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

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
  <a class="navbar-brand" href="index.php" style="margin-left: 125px">Codetrek Forum</a>
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
          <a class="dropdown-item" href="#">My Profile</a>
         
          <a class="dropdown-item" href="#">Settings</a>
        </div>
      
  </div>
</nav>

<div class="container">
			<div class="card-body">
				<h4 class="card-title mb-1"><a class="text-body" href="answers.html"><?php echo $row['title']?></a></h4>
				<p class="card-text text-secondary mb-0">
					<?php echo $row['body']?>
				</p><br>
				
				<?php
				for($x=0;$x<count($subtag);$x++)
				{ 
				?>
				<a href=#><span class="badge badge-info"><?php echo $subtag[$x] ?></span></a>
				<?php
				}
				?>
				<br><br>
				<p>
					<a href="#" class="card-link"><small>Abhishek Pokhriyal</small></a>
					<small class="text-secondary">asked on</small>
					<small class="text-secondary"><?php echo $row['created_at'] ?></small>
				</p>
				<div class="d-flex text-secondary">
					<div class="mr-3">
						<i class="far fa-thumbs-up"  onclick="thumbL()" id="like"><?php echo $row['likes']?></i>
						
					</div>
					<div class="mr-3">
						<i class="far fa-thumbs-down" onclick="thumbD()" id="dlike"><?php echo $row['dislikes']?></i>
						
					</div>
					<div class="mr-3">
						<i class="far fa-comments"></i>
						<a href="answers.html" class="text-secondary"><small><?php echo mysqli_num_rows($resulta); ?> answers</small></a>
					</div>
				</div>
			</div>
		<?php 
		while($rowa=mysqli_fetch_assoc($resulta))
			{?>
		<div class="card" style="margin-left: 16px">
  <div class="card-body">
    <small class="card-title"><a href=#>Vikas Rinvi</a></small> answered on <?php echo $rowa['created_at']?>
    <span class="badge badge-success"style="float:right"><i class="fas fa-check"></i> Correct answer</span><br><br>
    <p class="card-text"><?php echo $rowa['answer_text']?></p>
  </div>
</div>
<br><?php
}
?>
<br>


<div class="card " style="margin-left: 16px;">
  <div class="card-body">
    <label><strong><h2>Your Answer</h2></strong></label>
<form action="answers.php?title=<?php echo $row['id'] ?>" method="POST">
  <div class="form-group">
    <input type="text" name="ans" class="form-control" style="height:200px"><br>
    <button type="submit" class="btn btn-primary">Post your answer</button>

  </div>
  
</form>
        </div>
</div>
</div>
</div>
<footer class="bg-light text-center py-2  mt-5">
		<span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
	</footer>

</body>
</html>