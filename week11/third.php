<?php
	$link = mysqli_connect("localhost", "root", "", "cars");
	if(!$link) die('Could not connect: ' .mysqli_error());
?>
<html>
  <head>
	<style>
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.car img{
		  margin-right:10px;
		}
		.input{
			display: block;
		}
		label{
			display: inline-block;
			width: 100px;
		}
        .attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
	</style>
  </head>
  <body>
  	<div class="admin">
  		<form action="third.php" method="post">
	  		<div class="input"><label>Maker</label><input type="text" name="maker"></div>
	  		<div class="input"><label>Model</label><input type="text" name="model"></div>
	  		<div class="input"><label>Year</label><input type="text" name="year"></div>
	  		<div class="input"><label>Price</label><input type="text" name="price"></div>
	  		<div class="input"><label>Image</label><input type="text" name="image"></div>
	  		<div class="input"><input type="submit" name="submit" value="Add new"></div>
  		</form>
  	</div>	
    <div class="cars">
      	<?php 
      		if(isset($_POST['submit'])){
      			$maker = $_POST['maker'];
      			$model = $_POST['model'];
      			$year = $_POST['year'];
      			$price = $_POST['price'];
      			$image = $_POST['image'];
      			mysqli_query($link, "INSERT INTO cars(maker, model, price, year, url) VALUES ('$maker', '$model', '$year', '$price', '$image')");
      		}
      		if(isset($_GET['delete'])){
          		$id_delete = $_GET['delete'];
          		mysqli_query($link, "DELETE FROM cars WHERE id = $id_delete");
          	}
      		$sql = "SELECT * FROM cars";
			$result = mysqli_query($link, $sql);
			$num_row = mysqli_num_rows($result);
      		for ($i = 0; $i < $num_row; $i++) {
            	$row = mysqli_fetch_assoc($result);
            	echo '<div class = "car">';
            	echo '<img width="100" height="60" src="' .$row['url']. '"/>';
            	echo '<div class="right">';
            	echo '<div class="title">' .$row['maker']. ' ' .$row['model']. '</div>';
            	echo '<div class="attributes">';
            	echo '<div class="row"><div class="name">Year:</div><div>' .$row['year']. '</div></div>';
          		echo '<div class="row"><div class="name">Price:</div><div>' .$row['price']. '</div></div>';
          		echo '<div class="row"><a href="task3.php?delete=' .$row['id']. '">Delete</a></div></div></div></div>';
          	}
          	mysqli_close($link);
       	?>
    </div>
  </body>
</html>