<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <style>

   #about-container{

     display: inline-grid;
     grid-template-columns: 1fr;
     justify-items: center;
     align-items: center;
     width: 80%;
     row-gap: 30px;
     margin: 20px;
     justify-self:center;


   }

   #about-paragraph{
     display:block;
     color: white;
   }

   #avatar{
     max-width: 80%;
     max-height: 70vh;
   }


   @media (max-width: 900px) {
   		#about-container{
        display: inline-grid;
        grid-template-columns: 1fr;
   	}

      #avatar{
        width: 90%;
      }




  }

  .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
  color:white;
  background-color:#f7584d;
  display:block;
}


#links{
  display:inline-block;
  list-style-type: none;
  width: fit-content;
  text-align:center;
  justify-self: center;
  padding:20px;

}

#links li{
  display: inline-block;
  float: center;
  list-style: none;
  padding: 0 2px;

}

#about-text{
  width:70%; 
  height:auto; 
  color: white; 
  font-size: 20px;
}

@media (max-width: 1100px) {


  #about-text{
    font-size:15px;
    width:90%; 
  }


  .fa {
    padding: 15px;
    width:15px;
    font-size:15px;}}


    .form-style-6{
    	max-width: 400px;
    	margin: 10px auto;
    	padding: 16px;
    	background: #F7F7F7;
    }
    .form-style-6 h1{
    	background: #f7584d;
    	padding: 20px 0;
    	font-size: 140%;
    	font-weight: 300;
    	text-align: center;
    	color: #fff;
    	margin: -16px -16px 16px -16px;
    }
    .form-style-6 input[type="text"],
    .form-style-6 input[type="date"],
    .form-style-6 input[type="datetime"],
    .form-style-6 input[type="email"],
    .form-style-6 input[type="number"],
    .form-style-6 input[type="search"],
    .form-style-6 input[type="time"],
    .form-style-6 input[type="url"],
    .form-style-6 textarea,
    .form-style-6 select
    {
    	-webkit-transition: all 0.30s ease-in-out;
    	-moz-transition: all 0.30s ease-in-out;
    	-ms-transition: all 0.30s ease-in-out;
    	-o-transition: all 0.30s ease-in-out;
    	outline: none;
    	box-sizing: border-box;
    	-webkit-box-sizing: border-box;
    	-moz-box-sizing: border-box;
    	width: 100%;
    	background: #fff;
    	margin-bottom: 4%;
    	border: 1px solid #f7584d;
    	padding: 3%;
    	color: black;
    }
    .form-style-6 input[type="text"]:focus,
    .form-style-6 input[type="date"]:focus,
    .form-style-6 input[type="datetime"]:focus,
    .form-style-6 input[type="email"]:focus,
    .form-style-6 input[type="number"]:focus,
    .form-style-6 input[type="search"]:focus,
    .form-style-6 input[type="time"]:focus,
    .form-style-6 input[type="url"]:focus,
    .form-style-6 textarea:focus,
    .form-style-6 select:focus
    {
    	box-shadow: 0 0 5px #f7584d;
    	padding: 3%;
    	border: 1px solid #f7584d;
    }

    .form-style-6 input[type="submit"],
    .form-style-6 input[type="button"]{
    	box-sizing: border-box;
    	-webkit-box-sizing: border-box;
    	-moz-box-sizing: border-box;
    	width: 100%;
    	padding: 3%;
    	background: #f7584d;
    	border-bottom: 2px solid ##f7584d;
    	border-top-style: none;
    	border-right-style: none;
    	border-left-style: none;
    	color: #fff;
      font-family: Inconsolata;
    }
    .form-style-6 input[type="submit"]:hover,
    .form-style-6 input[type="button"]:hover{
    	background: #4dcaf7;
    }

input {
  font-family: Inconsolata;
}

a:hover, a:active {
  color: #4dcaf7 ;
}

.fa:hover {
  color: white;
  background-color: #4dcaf7;
}

 </style>

 <body>

 <?php include("boilerplate/header.php") ?> 






 <main style="text-align:center;">


   <div id="about-container" style = "height:auto;">

     <img id ="avatar" src="img\profile-pic.jpg">

      <div id = "about-text">Hello! Thanks for checking out my site. I don't get a lot of visitors so it's nice that you're here.<br><br>I'm a third year electrical engineering student at UC San Diego currently part of Dr. Truong Nguyen's Video Processing Lab. I minor in studio arts.<br><br>Contact me at:<br> anhhao135@gmail.com<br><br><a href="https://github.com/anhhao135/website.git">Github</a> for this whole site.<br><br>My <a href="resume.pdf">resume</a>.<br>

        <nav id="links">
          <li><a href="https://www.linkedin.com/in/hao-le-07b726132/" class="fa fa-linkedin"></a></li>
          <li><a href="https://www.youtube.com/user/404anhhao" class="fa fa-youtube"></a></li>
        </nav>



      <!--  <div class="form-style-6">
        <h1>Contact Me</h1>
        <form method="post" name="form" action="send_form_email.php">

        <input type="text" name="name" placeholder="Your Name" />
        <input type="email" name="email" placeholder="Email Address" />
        <textarea name="message" placeholder="Type your Message"></textarea>
        <input name "submit" type="submit" value="Send Form" />
        </form>
        </div>
<h3><?php include "send_form_email.php"?></h3>

-->

</main>

<?php include("boilerplate/footer.php") ?> 

 </body>


</html>
