<html>
<head>
<title>Data Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>

</style>
<body>
    <style>
        body
        {
            background-color: #FFF8DC;
        }
        .heading
        {
            margin-top:20px;
            color: crimson;
            font-family: "Times New Roman", Times, serif;
        }
        .container
        {
            margin-top:20px;
            font-family: "Times New Roman", Times, serif;
        }
    </style>
<div class="heading">
	<h2 >
		<center><b><u>Project Report Submition Data</u></b></center>
	</h2>
    <div class="container mt-0">
        <table class="table table-stripped table-primary">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Project Tiltle</th>
                <th>Brief Description About Project</th>
                <th>Project Report (PDF)</th>
                <th>Project PPT</th>
                <th>Github URL</th>
            </tr>
            <?php
                error_reporting(0);
                include 'connection.php';
                $que="SELECT * FROM `details`";
                $res=mysqli_query($con,$que);
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['First_Name']; ?>
                            </td>
                            <td>
                                <?php echo $row['Last_Name']; ?>
                            </td>
                            <td>
                                <?php echo $row['Email']; ?>
                            </td>
                            <td>
                                <?php echo $row['Project_Title']; ?>
                            </td>
                            <td>
                                <?php echo $row['Introduction']; ?>
                            </td>
                            <td>
                                <a href="<?php echo $row['pdf']; ?>">Project Report PDF</a>
                            </td>
                            <br>
                            <td>
                                <a href="<?php echo $row['ppt']; ?>">Project PPT</a>
                            </td>
                            <td>
                                <a href="<?php echo $row['github']; ?>">Gitub Link</a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>
</html>