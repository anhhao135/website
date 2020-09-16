<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | Art Studies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

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

   #page-container{

     display: inline-grid;
     grid-template-columns: 1.2fr 9fr;
     width: auto;
     margin:5px;

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
   		#side-nav ul li a{
        font-size:12px;
   	}

    #side-nav ul li{

      display:block;
      padding:3px;
   }


   #page-container{

     grid-template-columns: 2fr 9fr;

   }

 }

 @media (max-width: 550px) {

   #page-container{

     grid-template-columns: 1fr;

   }

   #side-nav ul li{

     display:block;
     vertical-align: middle;
     text-align: center;
   }



 }


 #gallery-grid{
 	display: inline-grid;
 	grid-template-columns: repeat(3, minmax(200px, 1fr));
 	justify-items: center;
 	align-items: center;
 	background-color: #132226;
 	width: auto-fit;
 	row-gap: 50px;


 }

 @media (max-width: 900px) {
 		#gallery-grid{
 			display: inline-grid;
 			grid-template-columns: 1fr;
 			justify-items: center;
 			align-items: center;
 	    background-color: #132226;
 			width: auto-fit;
 			row-gap: 20px;

 	}
}

   </style>



 <body>


 <?php include("boilerplate/header.php") ?> 




 <main>

  <div id="page-container">


    <div  style="display:inline-block; background-color:#f7584d; text-align:left; padding: 10px; align-self:start; width:fit-content; justify-self:center; margin-top:20px;">


    <nav id="side-nav">
       <ul>
           <li><a href="art.php">WORKS</a></li>
           <li><a href="art-studies.php" style="font-weight:bold;">STUDIES</a></li>
       </ul>
    </nav>


  </div>

   <div id="gallery">

     <div id="gallery-grid">


       <div class="container">
         <img src="art-studies\4_15__1.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\4_15__2.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\4_15__3.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\4_15__4.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\4_15__5.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\4_15__6.jpg" class="image" style="width:100%">
       </div>



       <div class="container">
         <img src="art-studies/2.jpg" class="image" style="width:100%">
       </div>



       <div class="container">
         <img src="art-studies/1.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/3.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/4.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/5.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/6.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/7.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/8.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/9.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/10.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/11.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/12.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/13.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/14.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/15.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/16.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/17.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/18.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/19.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/20.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/21.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/22.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/23.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/24.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/25.JPG" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies/26.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies/27.JPG" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Apr 18, 12 32 52 AM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Aug 04, 5 00 45 AM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Aug 12, 9 52 13 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Aug 29, 2 24 50 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Aug 31, 12 23 08 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Dec 02, 6 46 16 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Dec 25, 3 49 50 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Dec 29, 5 36 31 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Feb 01, 4 25 46 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Feb 01, 4 26 00 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Feb 01, 4 26 22 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Jan 01, 12 50 46 AM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Jul 17, 4 29 15 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Jul 19, 2 26 59 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Jul 19, 4 11 51 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Mar 14, 7 56 50 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Oct 02, 11 35 27 PM.jpg" class="image" style="width:100%">
       </div>

       <div class="container">
         <img src="art-studies\Photo Oct 21, 4 07 24 PM.jpg" class="image" style="width:100%">
       </div>


       <div class="container">
         <img src="art-studies\Photo Sep 18, 2 42 41 PM.jpg" class="image" style="width:100%">
       </div>



       </div>

     </div>
  </div>

</div>






</main>







<?php include("boilerplate/footer.php") ?> 

 </body>


</html>
