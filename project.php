<!DOCTYPE html>
<?php
    //Database Connection Include
	include 'connection.php';
	

    if(isset($_POST['submit']))
    {
        
        $name=$_POST['name1'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
		$title=$_POST['Title'];
		$intro=$_POST['intro'];
		$github=$_POST['url'];
		$file = $_FILES["uploadfile"]["name"];
		//For PDF
		$len=strlen($file);//size Of File
		$pos=strrpos($file,".");//Position of last dot
		$ext=substr($file,$pos+1,$len);//cut extension
		$low=strtolower($ext);//convert to Lower case
		//For PPT
		$file1 = $_FILES["ppt"]["name"];
		$len1=strlen($file1);//size Of File
		$pos1=strrpos($file1,".");//Position of last dot
		$ext1=substr($file1,$pos1+1,$len1);//cut extension
		$low1=strtolower($ext1);//convert to Lower case
		
		$allow=array('ppt','pptx');
		if(in_array($low1,$allow))
		{ 
            
			$filename1 = $_FILES["ppt"]["name"];
		$tempname1 = $_FILES["ppt"]["tmp_name"];    
        $folder1 = "image/".$filename1;
		// move_uploaded_file($tempname, $folder);
    	move_uploaded_file($tempname1, $folder1);
		

		if('pdf'==$low)
		{
			 $filename = $_FILES["uploadfile"]["name"];
			$tempname = $_FILES["uploadfile"]["tmp_name"];    
			$folder = "image/".$filename;
			
		move_uploaded_file($tempname, $folder); ?>
		<div class="alert alert-success" role="alert">
  <h5><b>Data Uploaded Succussfully<b><h5>
</div>
<?php
		
		
		$query="INSERT INTO `details`(`First_Name`, `Last_Name`, `Email`, `Project_Title`, `Introduction`, `pdf`, `ppt`, `github`) VALUES ('$name','$lastname','$email','$title','$intro','$folder','$folder1','$github')";
		$run=mysqli_query($con,$query) or die (mysqli_error());

		}else{
			?><div class="alert alert-warning" role="alert">
   <b>Please check the "Upload Project Report (PDF)" section , You have uploaded Wrong data. You have allowed to upload PDF file only. Your Data is not submited !!!!<b>
</div><?php
		} }else{?>
		<div class="alert alert-warning" role="alert">
  <b>Please check the "Upload Project PPT" section , You have uploaded Wrong data. You have allowed to upload PPT file only. Your Data is not submited !!!<b>
</div> <?php 




			
		}
		

		
	}
    


?>
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
    background-color:#FAF0E6;
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
		<center><b><u>Project Report Submition Form</u></b></center>
		
	</h2>
</div>
<div class="form1 fw-bold fs-5">
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col">
				<label class="required">First Name</label>
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
    		<input type="Text" class="form-control" id="inputEmail4"  name="Title" required>
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
  			<label for="formFile" class="form-label"><label class="required">Upload Project PPT</label></label>
  			<input class="form-control" type="file" id="formFile" name="ppt" required>
		</div>
		<label for="basic-url" class="form-label"><label class="required">Upload Your Github URL</label></label>
		<div class="input-group mb-3">
			<input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="url" required>
		</div>
		<div class="col-12" >
    		<center>
				<button class="btn btn-primary" type="submit" name="submit">Submit form</button>
			</center>
  		</div>
	</div>
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>