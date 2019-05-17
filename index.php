<?php 
include ("dbconn.php");
include ("createdb.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="css/index.css?v=<?php echo time(); ?>" />

<script type="text/javascript">

function ajax() {
	var xhttp=new XMLHttpRequest();   //for sending ajax request

	xhttp.onreadystatechange = function() {

		if(xhttp.readyState == 4 && xhttp.status == 200) {

			document.getElementById('chat').innerHTML=xhttp.responseText;
		}
	}

	xhttp.open('GET','chat.php',true);
	xhttp.send();
}

setInterval(function(){ajax()},1000);

</script>

</head>
<body onload="ajax();">
<div id="container">

	<div id="chat">
	</div>
	<div id="message">
	<form action="index.php" method="POST" autocomplete="off">
		<input type="text" name="name" placeholder="enter name" required="required"><br>
		<textarea name="message" placeholder="enter message"></textarea><br>
		<input type="submit" value="SUBMIT" name="submit">
	</form>
	</div>
</div>
</body>
</html>

<?php 

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$message=$_POST['message'];

		$query="INSERT INTO `ChatDemo`.`data`(`name`, `message`) VALUES ('$name','$message')";
		$run=mysqli_query($conn,$query);

		if($run)
		{
			echo "<embed loop='false' src='alert.wav' hidden='true' autoplay='true' />";
		}

	}

?>