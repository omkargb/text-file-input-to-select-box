<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.txt file to select box</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.mi.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
</head>

<body>
    <div class="container">
	<br>
	 <div class="card">
		<div class="card-header bg-default text-center h5">
		Fetching select box values from a text file
		</div>
		
		<div class="card-body">
		<form class="" action="#" method="post">
		<?php
			$fileValues = file_get_contents("file.txt"); 
			$fileArray = explode ("\n", $fileValues); 
		?>
		
		<span class="h6"> Select district : </span>
		<select class=" form-control-sm mr-3" name="district" style="width:25%">
			<?php
				if(count($fileArray)) 
				{
				foreach ($fileArray as $value) 
					{
					echo '<option values="'.$value.'">'.$value.'</option>';
					}
				}
				?>
		</select>
		<button type="submit" name="submit" class="btn btn-sm btn-success"> Show </button>
		
		<br><hr><br>
		
		<?php
		if(isset ($_POST['submit']))
			{		$sel_val = $_POST['district'];	}
		?>	
		
		<h6> <?php 	echo " You have selected : " .$sel_val; ?> </h6>
		<br><hr>
		
		</form>
		</div>
	 </div>	
	</div>
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>