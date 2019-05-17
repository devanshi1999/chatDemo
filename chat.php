<?php 
		include ("dbconn.php");
		include ("createdb.php");

			$query="SELECT * FROM `ChatDemo`.`data` ORDER BY id DESC";
			$run=mysqli_query($conn,$query);
			$rows=mysqli_num_rows($run);

			if($rows>0)
			{	
				while($row = mysqli_fetch_assoc($run))
				{	

		?>
		<div id="data">
		<span style="color:pink;"> <?php echo $row['name']; ?>:  </span>
		<span style="color: lightgreen;"><?php echo $row['message']; ?></span>
		<span style="float: right;"><?php echo $row['time']; ?></span>
		</div> <?php } }?>