<?php
if(isset($_POST['username']))
{
	$filename= $_POST['username'];
	echo $filename;
	$pyscript_video = 'video_convert.py';
	$pyscript_convert = 'convert2isl.py';
	$python='C:\Python27\python.exe';
	$cmd = "$python $pyscript_convert $filename";
    $isl = exec("$cmd");
	$cmd = "$python $pyscript_video $isl";
	exec("$cmd");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<style type="text/css">
		#main-header{
			text-align:center;
			background-color: black;
			color:red;
			padding:10px;
		}

		#main-footer{
			text-align:center;
			background-color: black
			font-size:18px;
		}
	</style>
</head>
<body>
	<header id="main-header">
		<h4>
			ISL Generator
		</h4>
	</header>
	<?php
	if (isset($filename)){
	echo	'<center>';
	echo	'<video width="1080" height="480" controls autoplay>';
	echo	'<source src="my_concatenation.mp4" type="video/mp4">';
	echo	'Your browser does not support the video tag.';
	echo	'</source></video>';
	echo	'</center>';
	}	?>
	
	</br>
	</br>
	</br>
	<form action="" method="post" name="myform" id="myform">
  <strong>Enter text:<strong>  <INPUT TYPE = "Text" NAME = "username" ><br>
  <label for="inputText">The text to animate:  <?php echo $isl;?> </label><br>
  <input type="submit" value="Generate Video" id="Video" width="50" height="50">
	</form>