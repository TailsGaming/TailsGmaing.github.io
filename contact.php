<?php
if ($_POST){
$content = wordwrap($text, 60, "\n", false);
echo "$content\n";
$name = $_POST['name'];
$content = $_POST['commentContent'];
$handle = fopen("comments.html","a");
fwrite ($handle,"<b><font color='#00FF00'>  $name: </font></b></br><font color='#00FF00'>  $content  </font></br></br>");
fclose ($handle);}
?>


<!DOCTYPE html> 

<html>



<head>

<script>
function validateForm() {
    var x = document.forms["comment"]["commentContent"].value;
    if (x == null || x == "") {
        alert("Must have a message");
        return false;
    }
}
</script>



  <title>Tails Contact</title>

  <meta name="description" content="website description" />

  <meta name="keywords" content="website keywords, website keywords" />

  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <!-- modernizr enables HTML5 elements and feature detects -->


</head>



<body>

  <div id="main">		



    <header>

	  <div id="strapline">

	    <div id="welcome_slogan">

	      <h3>Welcome To <span>Tails Gaming</span></h3>

	    </div><!--close welcome_slogan-->

      </div><!--close strapline-->	  

	  <nav>

	    <div id="menubar">

          <ul id="nav">

            <li><a href="index.html">Home</a></li>

            <li><a href="about.html">About</a></li>

            <li><a href="highlight.html">highlight</a></li>

            <li><a href="downloads.html">downloads</a></li>

            <li class="current"><a href="contact.php">Contact</a></li>
			
			<li><a href="donate.html">Donate</a></li>

          </ul>

        </div><!--close menubar-->	

      </nav>

    </header>

    

	<div id="site_content">		

	  

	  <div class="sidebar_container">       

		<div class="sidebar">

          <div class="sidebar_item">

            <h2>New Website</h2>

            <p>Welcome to my new website. Please have a look around, any feedback is appreciated.</p>

          </div><!--close sidebar_item--> 

        </div><!--close sidebar-->     		

		<div class="sidebar">

          <div class="sidebar_item">

            <h2>Latest Update</h2>

            <h3>February 2016</h3>

            <p>Have been working on YouTube channel</p>         

		  </div><!--close sidebar_item--> 

        </div><!--close sidebar-->

		<div class="sidebar">

          <div class="sidebar_item">

            <h3>February 2016</h3>

            <p>Made this website</p>         

		  </div><!--close sidebar_item--> 

        </div><!--close sidebar-->  		

        <div class="sidebar">

          <div class="sidebar_item">

            <h2>Contact</h2>

            <p>Email: tails@tailsgaming.com</p>

            <p> </p>

          </div><!--close sidebar_item--> 

        </div><!--close sidebar-->
		
		<div class="sidebar">

          <div class="sidebar_item">

            <h2>Teamspeak 3 info</h2>

            <p>Ip: stateofchaos.us</p>

            <p> </p>

          </div><!--close sidebar_item--> 

        </div><!--close sidebar-->

       </div><!--close sidebar_container-->	



      <div class="slideshow">

	    <ul class="slideshow">

          <li class="show"><img width="680" height="250" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>

          <li><img width="680" height="250" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>

        </ul> 

	  </div>

	   

	  <div id="content">

        <div class="content_item">
		
			<h1>Welcome to the contact page</h1>
			<p>Please leava a message</p>
		
			<form name="comment" action="" method="POST" onsubmit="return validateForm()">
			<p style="color:#00FF00">Name:</p> <input type = "text" name = "name" value="Anonymous"></br>
			<p style="color:#00FF00">Message:</p> <textarea rows ="10" cols ="30" name="commentContent"></textarea></br>
			<div class="button_small">
		      <input type="submit" > </input>
			</div><!--close button_small-->
			</form>
			<br></br><br></br>
			<div style="height:200px;width:650px;overflow:auto;background-color:black;color:white;scrollbar-base-color:gold;font-family:sans-serif;padding:10px;">
			<?php include "comments.html"; ?> 
			</div>
	  
		  <div class="content_container">

		    <p></p>

			
		  </div><!--close content_container-->

          <div class="content_container">

			<p></p>
			

		  </div><!--close content_container-->

		  

		</div><!--close content_item-->

      </div><!--close content-->   

	</div><!--close site_content-->  	



    <footer>

	  <a href="index.html">Home</a> | <a href="about.html">About</a> | <a href="highlight.html">Highlight</a> | <a href="downloads.html">Downloads</a> | <a href="contact.php">Contact</a> | <a href="donate.html">Donate</a><br/><br/>

	  <a href="https://www.youtube.com/channel/UCF4PmC4ugV3jMcir4NrX9rA" target="_blank">YouTube</a> |  <a href="http://www.twitch.tv/Tailss77" target="_blank">Twitch</a>  |  My Sponsors <a href="http://constructpc.com/" target="_blank">Website</a>

    </footer>

	

  </div><!--close main-->


</body>
</html>