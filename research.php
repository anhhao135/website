<!DOCTYPE html>
<html>




 <head>
    <meta charset="utf-8">
    <title>Hao Le | Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

 </head>


 <style>

 #main-body {
 	display:inline-grid;
 	width: auto-fit;
 	height: auto-fit;
 	padding: 20px;
  grid-template-columns: repeat(1, minmax(200px, 1fr));
  justify-items: center;
  align-items: center;
  row-gap: 10px;
  max-width: 90%;

 }

 #project-object{
 	display: inline-grid;
 	width: auto;
  height: 70vh;
  padding: 10px;

  grid-template-columns: 5fr 4fr;
  align-items: center;
 }

h1{
  font-size: 25px;
  font-weight: bold;
}


.project_image{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 30px;
  overflow: hidden;
  height: 90%;
}

.project_text{
  display: flex;
  padding: 10px;
  height: 100%;
  text-align: left;
  align-items: center;
  color: white;
}





@media (max-width: 1100px) {

  #project-object{
 	display: inline-grid;
 	width: auto;
  height: auto;
  padding: 0px;
  grid-template-columns: 1fr;
  align-items: center;
  justify-items: center;
 }


 .project_text{
  display: flex;
  padding: 10px;
  height: 100%;
  text-align: center;
  align-items: center;
  color: white;
  
}


.project_image{
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  height: 90%;
  width:100%;
  background-color: green;
  margin-left: 0px;
}

p{
  font-size:14px;
}





}


}

 </style>

 <body>


 <?php include("boilerplate/header.php") ?> 


 <main>
   <div id="main-body">
     <div id ="project-object">
       <div class="project_text">
         <div>
            <h1>Using Unity for Diverse Synthetic Data Generation</h1>
            <hr>
            <p>One of the heaviest impacting factors on resources when developing Advanced Driver Assistance Systems is the process of real data collection. A fully-equipped data rig must be deployed on streets for extended periods; this proves to be expensive in areas of hardware maintenance, data post-processing, and manual annotation subject to human error. Moreover, diversity is constrained to geography - in other words, there is only so much that can be captured within the 24 hours of a day.</p>
            <br>
            <p>We propose an automated pipeline to leverage the scripting and physics capabilities of the Unity game engine to generate synthetic data sets cost-effectively. A wide range of data formats can be produced including RGB-D to Velodyne-like point clouds. Total control of the environment via generation parameters means synthetic augmentations such as lighting, weather, and scene context can be manipulated. The effects of these augmentations on neural network performance on crucial scene-understanding tasks like 2D/3D object detection or instance segmentation can therefore be rigorously studied. Preliminary results show that our synthetic data holds the potential to boost 2D object detection performance and model robustness.</p>
            <br>
            <p>Aside from being a means of data generation, our Unity platform can serve as a safe testbed for collaborative algorithms. A complex road network utilizing V2X techniques can be adequately simulated while taking into account bandwidth constraints.</p>
          </div>
       </div>

       <div class="project_image">
         <img src="img/synthetic_collage.png" style="flex-shrink:0; height:100%; width: 100%; object-fit: cover;"/>
       </div>
     </div>

    </div>
   </div>

</main>

<?php include("boilerplate/footer.php") ?> 

 </body>



</html>
