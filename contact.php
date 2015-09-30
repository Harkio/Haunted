<!DOCTYPE HTML>

<head>

<title>haunted.ie</title>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">

<link rel="stylesheet" type="text/css" href="boxes/css/style6.css">

<!-- Google fonts -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

<!--JS FILES STARTS-->

<script src="js/jquery.min.js"></script>

<script src="js/custom.js"></script>

<script src="js/slides/slides.min.jquery.js"></script>

<script src="js/cycle-slider/cycle.js"></script>

<script src="js/nivo-slider/jquery.nivo.slider.js"></script>

<script src="js/tabify/jquery.tabify.js"></script>

<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>

<script src="js/twitter/jquery.tweet.js"></script>

<script src="js/scrolltop/scrolltopcontrol.js"></script>

<script src="js/portfolio/filterable.js"></script>

<script src="js/modernizr/modernizr-2.0.3.js"></script>

<script src="js/easing/jquery.easing.1.3.js"></script>

<script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>

<script src="js/swfobject/swfobject.js"></script>

<!-- get fancybox -->

<link rel="stylesheet" type="text/css" itemprop="javascript" href="js/fancybox/jquery.fancybox.css" media="all">

<script src="js/fancybox/jquery.easing.1.3.js"></script>

<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>



</head>

<body>





<div id="site_title">
<a href="index.php"><img src="img/logo.jpg" width="400" height="131" alt=""/></a>
<div class="site_title">
    <!-- Dynamic Menu -->
    <ol id="menu" class="simple_menu simple_menu_css horizontal black_menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="news.php">News</a></li>
<li><a href="#">Locations</a></li>
<li><a href="#">Directory</a></li>
<li><a href="#">Sightings</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Regsiter</a></li>
        <li><a href="/contact.php">Contact</a></li>
        
        
        

    </ol>
    <div class="clr"></div>
    <!-- menu 2 -->
    <div class="clr"></div>
  </div>
</div>
<!-- end header -->

<div id="container">

<div class="two-third">

    <div id="slider3" class="nivoSlider" style="width: 900px; height: 320px"> <a href="tabs.html"><img title="Ireland's Haunted Places" src="slideshow/slide_11.jpg" alt="" width="630" height="280"></a> <img src="slideshow/slide_21.jpg" alt="" width="630" height="280"> <img src="slideshow/slide_31.jpg" alt="" width="630" height="280"> </div>

  <div style="clear:both"></div>
    
    <div id="main">
    

 <form name="contactform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 
 </td>
 
</tr>
 
</table>
 
</form>
  
  
  </div>
  <p>
    
    <!-- close two third -->
    
  </p>
  <div id="main_side">
  <div class="sidebar_right">

    <ul id="tabify_menu" class="menu_tab" style="margin: 0;">

      <li class="active"><a href="#fane1">Articles</a></li>

      <li><a href="#fane2">Investigations</a></li>

      <li><a href="#fane3">Images</a></li>

    </ul>
    
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

   				<div id="fane1" class="tab_content">
    

			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
			
			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
			
			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
      
				<p style="text-align:right"><a href="#" class="button_small white">All Articles &raquo;</a></p>     

				</div>


  				

    <div id="fane2" class="tab_content">
    

			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
			
			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
			
			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
      
				<p style="text-align:right"><a href="#" class="button_small white">All Investigations &raquo;</a></p>     

				</div>

    <div id="fane3" class="tab_content">
    

			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
			
			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
			
			      <div class="tab_article"> <img src="http://haunted.ie/img/news/<?php echo $url; ?>" />
			
			        <p><?php echo $row['summary']; ?></p>
			
			      </div>
      
				<p style="text-align:right"><a href="#" class="button_small white">All Images &raquo;</a></p>     

				</div>
    
    
    
 <?php
	endwhile;
?>

    <div style="clear:both"></div>

    <h3>Sponsors</h3>

    <img src="img/demo_ad.png" alt="">

    <h3>More Information</h3>

    <ul class="sidebar_menu" style="margin:0">

      <li><a href="#">Medium & Psychic Directory</a></li>

      <li><a href="#">Group Directory</a></li>

      <li><a href="#">Recommended Reading</a></li>

      <li><a href="#">Become and Contributor</a></li>

      <li><a href="#">Archived Articles</a></li>

      <li><a href="#">Becoming and Investigator</a></li>

    </ul>

  </div>
  </div>

  <!-- end sidebar right -->

  <div style="clear:both; height: 300px"></div>

  <h2>More about the Paranormal Community in Ireland</h2>

  <ul class="ca-menu" style="margin:0">

    <li> <a href="#"> <span class="ca-icon">Q</span>

        <div class="ca-content">

        <h2 class="ca-main">Paranormal  <br>

          Groups</h2>

        <h3 class="ca-sub">What is a paranormal group</h3>

      </div>

      </a> </li>

    <li> <a href="#"> <span class="ca-icon">a</span>

        <div class="ca-content">

        <h2 class="ca-main">
        Paranormal  <br>
        
        Investigations</h2>

        <h3 class="ca-sub">Techniques and Technology</h3>

      </div>

      </a> </li>

    <li> <a href="#"> <span class="ca-icon">d</span>

        <div class="ca-content">

        <h2 class="ca-main">Contact <br>

          Us</h2>

        <h3 class="ca-sub">Get in Touch</h3>

      </div>

      </a> </li>

    <li> <a href="#"> <span class="ca-icon">U</span>

        <div class="ca-content">

        <h2 class="ca-main">Site <br>

          Contributors</h2>

        <h3 class="ca-sub">Whos Who of People who Do</h3>

      </div>

      </a> </li>

  </ul>

  <div style="clear:both; height: 40px"></div>

</div>
</div>














<!-- end container -->

<div id="footer">

  <div style="width:960px; margin: auto; padding-bottom: 30px">

    <div class="one-fourth">

      <h3>Useful Links</h3>

      <ul style="font-family: Georgia, 'Times New Roman'; margin: 0 15px 0 0">

        <li style="border-bottom: 1px dotted #737a84; border-top: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Boards.ie</li>

        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Paranormal.ie</li>

        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Abandoned Ireland</li>

        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Leinster Paranormal</li>

      </ul>

    </div>

    <div class="one-fourth">

      <h3>Terms and Conditions</h3>

      <ul style="font-family: Georgia, 'Times New Roman'; margin: 0 15px 0 0">

        <li style="border-bottom: 1px dotted #737a84; border-top: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Privacy</li>

        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Mobile</li>

        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Accessibility</li>

        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Disclaimer</li>

      </ul>

    </div>

    <div class="one-fourth">

      <h3>Information</h3>

      haunted.ie is a community driven page which invites contributions from anyone intersted in the Irish paranormal field. Please feel free to get in touch with any questions or queries you may have.

      <div id="social_icons">

       </div>

    </div>

    <div class="one-fourth last">

      <h3>Socialize</h3>

      <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>

    <div style="clear:both"></div>

  </div>

</div>

<div id="shadow"></div>

<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "graham.harkness@gmail.com";
 
    $email_subject = "Email From Haunted";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 

 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>

</body>

</html>