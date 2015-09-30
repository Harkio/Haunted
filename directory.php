<!DOCTYPE HTML>
<head>
<title>Haunted.ie | Groups</title>
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


<!-- connection -->

<?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_admin", "A05bf311", "g559168_events") or die(mysqli_connect_error());
 

 ?>
 
<!-- top menu -->
<?php include_once("header.php")?>
<!-- end header -->



<div id="portfolio">
  
  
  <!--END filtering-nav-->
 
  
  <?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 
$query="SELECT * FROM groups ORDER BY name";


$results = mysqli_query($con, $query);

$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$url = $row['image']
	 
?>

<div class="portfolio-container" id="columns">

    <ul>
      <li class="one-fourth web">
        <p> <a title="Caption Text" href="<?php echo $row['website']; ?>" class="<?php echo $row['province']; ?>" data-rel="prettyPhoto"><img src="http://haunted.ie/img/Groups/<?php echo $url; ?>" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
        <h4><a href="<?php echo $row['website']; ?>"><?php echo $row['name']; ?></a></h4>
        <p align="justify"> <?php echo $row['summary']; ?> </p>
        <p> <?php echo $row['county']; ?> </p>
      </li>
  </ul>
      </div>
     
    <?php
	endwhile;
?>


 </div>
 </div>
    <!--END ul-->
    
   

  <!--END portfolio-wrap-->
  <div style="clear:both"></div>
</div>
<!-- close container -->
<div style="clear:both; height: 40px"></div>

<?php include_once("footer.php")?>

</body>
</html>