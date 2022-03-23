<?php
	include 'connection.php';

    if(isset($_POST['submit']))
    {
        $name=$_POST['name1'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
		$title=$_POST['Title'];
		$intro=$_POST['intro'];
		$filename = $_FILES["uploadfile"]["name"];
    	$tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
		$filename1 = $_FILES["ppt"]["name"];
		$tempname1 = $_FILES["ppt"]["tmp_name"];    
        $folder1 = "image/".$filename1;
		move_uploaded_file($tempname, $folder);
    	move_uploaded_file($tempname1, $folder1);
		$github=$_POST['url'];
		$query="INSERT INTO `details`(`First_Name`, `Last_Name`, `Email`, `Project_Title`, `Introduction`, `pdf`, `ppt`, `github`) VALUES ('$name','$lastname','$email','$title','$intro','$folder','$folder1','$github')";
		$run=mysqli_query($con,$query) or die (mysqli_error());
		if($run)
		{
			echo "<script> alert('Data enter Succussufully');</script>";
		}
		else
		{
            echo "<script> alert('Eroor !!!! ');</script>";			
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Project Report Details </title>
</head>
<style>
body	
{
    background-color:#FFF0F5;
}
.form1{

	/* margin-top: 50px;
	margin-left: 300px;
	margin-right: 300px; */
	max-width: 600px;
	margin: auto;
	margin-top:20px;
}

.required:after {
    content:" *";
    color: red;
}
.heading
        {
            margin-top:20px;
            color: crimson;
            font-family: "Times New Roman", Times, serif;
        }
</style>
<body >
<div class="heading">
	<h2>
		<center><b>Project Report Submition Form</b></center>
		
	</h2>
</div>
<div class="form1 fw-bold fs-5">
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col">
				<label class="required">First Name(Group Leader)</label>
				<input type="text" class="form-control" placeholder="First name" aria-label="First name" name="name1" required>
			</div>
			<div class="col">
				<label class="required">Last Name</label>
				<input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname" required >
			</div>
		</div>
		<div class="col" style="margin-top: 5px">
    		<label for="inputEmail4" class="form-label"><label class="required">Email</label></label>
    		<input type="email" class="form-control" id="inputEmail4" placeholder="xyz@gmail.com" name="email" required>
  		</div>
  		<div class="col" style="margin-top: 5px">
    		<label for="inputEmail4" class="form-label"><label class="required">Project Title</label></label>
    		<input type="Text" class="form-control" id="inputEmail4" placeholder="xyz" name="Title" required>
  		</div>
  		<div class="mb-3" style="margin-top: 5px ">
  			<label for="exampleFormControlTextarea1" class="form-label"><label class="required">Brief Introduction About Project</label></label>
  			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="intro" required></textarea>
		</div>
		<div class="mb-3" >
  			<label for="formFile" class="form-label"><label class="required">Upload Project Report(PDF)</label></label>
  			<input class="form-control" type="file" id="formFile" name="uploadfile" required>
		</div>
		<div class="mb-3">
  			<label for="formFile" class="form-label">Upload Project PPT</label>
  			<input class="form-control" type="file" id="formFile" name="ppt">
		</div>
		<label for="basic-url" class="form-label">Upload Your Github URL</label>
		<div class="input-group mb-3">
			<input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="url">
		</div>
		<div class="col-12" >
    		<center>
				<button class="btn btn-danger" type="submit" name="submit">Submit form</button>
			</center>
  		</div>
	</div>
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>