<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php include("boilerplate/favicon.php") ?> 

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
     max-width: 100%;
     max-height: 80vh;
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
    font-size:15px;
  }
  
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

     <img id ="avatar" src="img/about-2.jpg">

      <div id = "about-text">Hello! Thanks for checking out my site. I don't get a lot of visitors so it's nice that you're here.<br><br>I'm a fourth year electrical engineering student at UC San Diego currently part of Dr. Truong Nguyen's Video Processing Lab. I minor in studio arts. If I'm not home tending my garden or fish tanks, I'm probably in my car driving to faraway places to paint. Occasionally, I write songs and play my guitar to get over my overthinking.</I><br><br>Contact me at:<br> anhhao135@gmail.com<br><br><a href="https://github.com/anhhao135/website.git">GitHub</a> for this whole site.<br><br>My <a href="resume.pdf">résumé</a>.<br>

        <nav id="links">
          <li><a href="https://www.linkedin.com/in/hao-le-07b726132/" class="fa fa-linkedin"></a></li>
          <li><a href="https://www.youtube.com/user/404anhhao" class="fa fa-youtube"></a></li>
        </nav>

</main>

<?php include("boilerplate/footer.php") ?> 

</body>

</html>