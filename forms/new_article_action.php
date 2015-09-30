<?php


$con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") or die(mysqli_connect_error());


$title = mysqli_real_escape_string($con, $_POST['title']);
$author = mysqli_real_escape_string($con, $_POST['author']);
$image = mysqli_real_escape_string($con, $_POST['image']);
$genre = mysqli_real_escape_string($con, $_POST['genre']);
$summary = mysqli_real_escape_string($con, $_POST['summary']);
$content = mysqli_real_escape_string($con, $_POST['content']);
$url = mysqli_real_escape_string($con, $_POST['url']);




$sql="INSERT INTO news (title, author, image, genre, summary, content, url)
VALUES ('$title','$author', '$image', '$genre','$summary','$content','$url')";

header( "refresh:2;url=http://www.haunted.ie/index.php" );

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));  
}

?>


Thanks for contentributing. Your event will be live shortly.Please wait to be redirected back to the site.

<?php
    exit();
?>