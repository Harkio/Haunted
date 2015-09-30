
<?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 

$query="SELECT * FROM main ORDER BY id DESC LIMIT 1";


$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
	
?>

<tr>
  <td><?php echo $row['author']; ?></td>
  

</tr>
<?php
	endwhile;
?>
 