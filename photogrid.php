<!DOCTYPE HTML>
<head>
<title>Haunted.ie | Images</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<!--JS FILES STARTS-->
<?php include_once("scripts.php")?>
</head>
<body>
<!-- top menu -->
<?php include_once("header.php")?>
<!-- end header -->


      <?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_admin", "A05bf311", "g559168_events") or die(mysqli_connect_error());
 

 ?>
<div id="container">
  <div class="content">
    <div id="grid">
    
<?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 
$query="SELECT * FROM sightings";


$results = mysqli_query($con, $query);

$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$img = $row['image']
	
?>


    
      <div class="one-third">
        <div class="item-hover">
          <div class="portfolio-thumbnail">
            <div class="thumb-text">
              <h4> <?php echo $row['title']; ?></h4>
              <p><?php echo $row['summary']; ?></p>
              <a href="<?php echo $row['url']; ?>">Read More</a>
            </div>
          </div>
          <img class="portfolio-item" src="/img/sightings/<?php echo $img; ?>" alt="" width="300" height="150">
        </div>
       </div>
     
       
       
      <?php
	endwhile;
?>
      
      
     
  
  <div style="clear:both"></div>
  
</div>
<!-- close container -->
<div style="clear:both; height: 40px"></div>
<?php include_once("footer.php")?>
</body>
</html>