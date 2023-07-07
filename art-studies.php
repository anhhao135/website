﻿<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | Art Studies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

    <?php include("boilerplate/favicon.php") ?> 

 </head>
 <style>


 .container {
   position: relative;
   width: 95%;
 }

 .image {
   opacity: 1;
   display: block;
   width: 100%;
   height: auto;
   transition: .5s ease;
   backface-visibility: hidden;
 }

 .middle {
   transition: .5s ease;
   opacity: 0;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
   text-align: center;
 }

 .text {
   background-color: #4CAF50;
   color: white;
   font-size: 16px;
   padding: 16px 32px;
 }

 #side-nav-container{
  display:inline-block;
  background-color:#e3b578;
  text-align:left;
  padding: 25px; 
  align-self:start;
  width:fit-content;
  justify-self:center;
  margin:20px;
  font-size: 30px;
 }

   #page-container{

     display: inline-grid;
     grid-template-columns: 1.2fr 9fr;
     width: auto;
     margin-top:20px;

   }

   #side-nav ul li a{

     color:white;


   }

   #side-nav ul li{

     display:block;
     padding:5px;



   }

   #side-nav{

     display:block;

   }


@media (max-width: 900px) {

#side-nav-container{
  font-size: 20px;
  padding: 15px;
}


#page-container{

 grid-template-columns: 2fr 9fr;

}

}

@media (max-width: 700px) {

#page-container{

 grid-template-columns: 1fr;

}

#side-nav ul li{

 display:inline;
 vertical-align: middle;
 text-align: center;
 
}

#page-container{

 margin-top:0px;

}

}


 #gallery-grid{
 	display: inline-grid;
 	grid-template-columns: repeat(4, minmax(200px, 1fr));
 	justify-items: center;
 	align-items: center;
 	width: auto-fit;
 	row-gap: 50px;


 }

 @media (max-width: 1200px) {
 		#gallery-grid{
 			display: inline-grid;
 			grid-template-columns: 1fr 1fr;
 			justify-items: center;
 			align-items: center;
 			width: auto-fit;
 			row-gap: 20px;

 	}
}

   </style>



 <body>


 <?php include("boilerplate/header.php") ?> 




 <main>
  <div id="page-container">

    <div id="side-nav-container">
      <nav id="side-nav">
        <ul>
            <li><a href="art.php">WORKS</a></li>
            <li><a href="art-studies.php" style="font-weight:bold; color:#4CAF50">STUDIES</a></li>
        </ul>
      </nav>
    </div>

    <div id="gallery">

      <div id="gallery-grid"> 


          <?php
            $directory = 'art-studies-dir';

            if (!is_dir($directory)) {
                exit('Invalid diretory path');
            }

            $dir_contents = scandir($directory);
            shuffle($dir_contents);

            foreach ($dir_contents as $file) {
                if ($file !== '.' && $file !== '..') {
                    
                  //files[] = $file;

                  $relative_path = $directory . '/' . $file;

                  echo '<div class="container"> <img src="' . $relative_path . '" class="image" style="width:100%"> </div>'; //construct image div by iterating through directory

                }
            }

            //var_dump($files); this will show structured info of the variable
          ?>

        </div>

      </div>
    </div>
</div>






</main>







<?php include("boilerplate/footer.php") ?> 

 </body>


</html>
