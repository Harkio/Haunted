<!DOCTYPE HTML>

<head>

<script> 


function popup() { 

am=" This website is a work in progress.A number of links are broken but please enjoy. Press Okay To Proceed.  "; 

alert(am); 
} 





</script>

<title>Haunted.ie</title>

<LINK REL="icon" HREF="img\favicon.ico">

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">

<link rel="stylesheet" type="text/css" href="boxes/css/style6.css">

<!-- Google fonts -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

<!--JS FILES STARTS-->

<?php include_once("scripts.php")?>



</head>

<body onLoad="popup()">

<body>





<?php include_once("header.php")?>

<div id="container">

<div class="two-third">

    <div id="slider3" class="nivoSlider" style="width: 630px; height: 280px"> <a href="locations.php"><img title="Haunted Irish Locations" src="slideshow/slide_11.jpg" alt="" width="630" height="280"></a> <img src="slideshow/slide_21.jpg" alt="" width="630" height="280"> <img src="slideshow/slide_31.jpg" alt="" width="630" height="280"> </div>
    

   <div id="welcome"> Welcome to Haunted.ie a community driven blog that encompases all interests in the Irish paranormal from ghosts and ghouls to UFO encounters and strange environmental phenomenon. Haunted.ie relies on the community to write articles of interest, post upcoming events as well as reported sightings. Check here for a directory of paranormal groups, mediums, contributors and sightings. </div>

  <div style="clear:both"></div>
    
    <div id="main">
    

  <div class="one-third">
    
<?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 

$query="SELECT * FROM main ORDER BY id DESC LIMIT 1";


$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$url = $row['image']

	
?>
     <h2><?php echo $row['title']; ?></h2>
    
  


<img src="http://haunted.ie/forms/upload/<?php echo $url; ?>" />


 <p><?php echo $row['summary']; ?></p>
  <p>Author: <?php echo $row['author']; ?></p>



       

      <p style="text-align:right"><a href="<?php echo $row['url']; ?>" class="button_small white" >More &raquo;</a></p>
      
      
      <!-- close -->
      
 <?php
	endwhile;
?>
  </div>
    
    
    <div class="one-third last">
    
    <?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 

$query="SELECT * FROM news ORDER BY id DESC LIMIT 1";


$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$url = $row['image']

	
?>
     

    

      <h2><?php echo $row['title']; ?></h2>

<img src="http://haunted.ie/forms/upload/<?php echo $url; ?>" />

 <p><?php echo $row['summary']; ?></p>
 
 <p>Author: <?php echo $row['author']; ?></p>

      <p style="text-align:right"><a href="<?php echo $row['url']; ?>" class="button_small white" >More &raquo;</a></p>
      
      <?php
	endwhile;
?>

    </div>
    
     <div class="one-third">
      <?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 

$query="SELECT * FROM events ORDER BY id DESC LIMIT 1";


$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$url = $row['image']

	
?>

    
      <h2><?php echo $row['title']; ?></h2>

<img src="http://haunted.ie/img/events/<?php echo $url; ?>" />

 <p><?php echo $row['summary']; ?></p>
 
 <p>Contact: <?php echo $row['contact']; ?></p>

      <p style="text-align:right"><a href="<?php echo $row['link']; ?>" class="button_small white" >More &raquo;</a></p>
      
      <?php
	endwhile;
?>

    </div>
    
  
  <div class="one-third last">
    
    <?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 

$query="SELECT * FROM news ORDER BY id DESC LIMIT 1, 1";


$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$url = $row['image']

	
?>
     

    

      <h2><?php echo $row['title']; ?></h2>

<img src="http://haunted.ie/forms/upload/<?php echo $url; ?>" />

 <p><?php echo $row['summary']; ?></p>
 
 <p>Author: <?php echo $row['author']; ?></p>

       <p style="text-align:right"><a href="<?php echo $row['url']; ?>" class="button_small white" >More &raquo;</a></p>
      
      <?php
	endwhile;
?>

    </div>
  
  
  </div>
  <p>
    
    <!-- close two third -->
    
  </p>

  
 <?php include_once("sidebar.php") ?>

 <?php include_once("container.php") ?>


<!-- end container -->

<?php include_once("footer.php")?>

</body>

</html>