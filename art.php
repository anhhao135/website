<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | Artworks</title>
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

 .container:hover .image {
   opacity: 0.3;
 }

 .container:hover .middle {
   opacity: 1;
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





 </style>

 <body>

 <?php include("boilerplate/header.php") ?> 




 <main>

  <div id="page-container">


    <div  style="display:inline-block; background-color:#f7584d; text-align:left; padding: 10px ; align-self:start; width:fit-content; justify-self:center; margin-top:20px;">


    <nav id="side-nav">
       <ul>
           <li><a href="art.php" style="font-weight: bold">WORKS</a></li>
           <li><a href="art-studies.php">STUDIES</a></li>
       </ul>
    </nav>


  </div>

   <div id="gallery">

     <div id="gallery-grid">

       <div class="container">
         <img src="art/emigrate.jpg" alt="Emigrate" class="image" style="width:100%">
         <div class="middle">
           <div class="text">oil on canvas, 2021</div>
         </div>
       </div>



       <div class="container">
         <img src="art/not-seeing-is-a-flower.jpg" alt="Not Seeing is a Flower" class="image" style="width:100%">
         <div class="middle">
           <div class="text">dried flowers, oil on canvas, 2018</div>
         </div>
       </div>

       <div class="container">
         <img src="art\synthesize.jpg" alt="Synthesize" class="image" style="width:100%">
         <div class="middle">
           <div class="text">plywood, industrial paint, mounting brackets, wood screws, oil marker, pyrography, duct tape, 2020</div>
         </div>
       </div>


       <div class="container">
         <img src="art\pixels.jpg" alt="Interpolation" class="image" style="width:100%">
         <div class="middle">
           <div class="text">graphite on paper, 2020</div>
         </div>
       </div>


       <div class="container">
         <img src="art/self-portrait-in-garden.jpg" alt="Self-portrait in Garden" class="image" style="width:100%">
         <div class="middle">
           <div class="text">gold leaf, oil on canvas, 2019</div>
         </div>
       </div>

       <div class="container">
         <img src="art/study-of-structure-1.jpg" alt="Study of Structure 1" class="image" style="width:100%">
         <div class="middle">
           <div class="text">ink on paper, 2019</div>
         </div>
       </div>


       <div class="container">
         <img src="art/study-of-structure-2.jpg" alt="Study of Structure 2" class="image" style="width:100%">
         <div class="middle">
           <div class="text">ink on paper, 2019</div>
         </div>
       </div>

       <div class="container">
         <img src="art/novo-amor.jpg" alt="Novo Amor" class="image" style="width:100%">
         <div class="middle">
           <div class="text">watercolor on paper, 2018</div>
         </div>
       </div>






     </div>
  </div>

</div>





</main>







<?php include("boilerplate/footer.php") ?> 

 </body>


</html>
