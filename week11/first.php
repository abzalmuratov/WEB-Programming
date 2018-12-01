<?php
  $link = mysqli_connect("localhost", "root", "", "cars");
	if(!$link) die('Could not connect: ' .mysqli_error());
	$sql = "SELECT * FROM cars";
	$result = mysqli_query($link, $sql);
	$num_row = mysqli_num_rows($result);
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
    <div class="cars">
      	<?php 
        for ($i = 0; $i < $num_row; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo '<div class = "car">';
            echo '<img width="100" height="60" src="' .$row['url']. '"/>';
            echo '<div class="right">';
            echo '<div class="title">' .$row['maker']. ' ' .$row['model']. '</div>';
            echo '<div class="attributes">';
            echo '<div class="row"><div class="name">Year:</div><div>' .$row['year']. '</div></div>';
            echo '<div class="row"><div class="name">Price:</div><div>' .$row['price']. '</div></div></div></div></div>';
        }
        mysqli_close($link);
       	?>
    </div>
  </body>
</html>