<!DOCTYPE html>
<html>




 <head>
    <meta charset="utf-8">
    <title>Hao Le | Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

    <?php include("boilerplate/favicon.php") ?> 

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
  padding: 5px;
  margin-bottom: 5px;

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
  font-size: 20px;
}


.center {
    margin-left: auto;
    margin-right: auto;
    display: block;
    width: 100%;
    height: auto;
}





@media (max-width: 1200px) {

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


@media (max-width: 1100px) {
  .main-body{
    display: none;
  }

}

  

  





</style>

<body>


 <?php include("boilerplate/header.php") ?> 


<main>
   <div id="main-body" class="main-body">


    <div id ="project-object">
       <div class="project_text">
         <div>
            <h1 style="font-size: 23px">Unity3D Game Engine as a Versatile Synthetic Data Generation Platform</h1>
            <hr>
            <p>One of the heaviest impacting factors on resources when developing Advanced Driver Assistance Systems is the process of real data collection. A fully-equipped data rig must be deployed on streets for extended periods; this proves to be expensive in areas of hardware maintenance, data post-processing, and manual annotation subject to human error. Moreover, diversity is constrained to geography - in other words, there is only so much that can be captured within the 24 hours of a day.</p>
            <br>
            <p>We propose an automated pipeline to leverage the scripting and physics capabilities of the Unity game engine to generate synthetic data sets cost-effectively. A wide range of data formats can be produced including RGB-D to Velodyne-like point clouds. Total control of the environment via generation parameters means synthetic augmentations such as lighting, weather, and scene context can be manipulated. The effects of these augmentations on neural network performance on crucial scene-understanding tasks like 2D/3D object detection or instance segmentation can therefore be rigorously studied. Preliminary results show that our synthetic data holds the potential to boost 2D object detection performance and model robustness.</p>
            <br>
            <p>Aside from being a means of data generation, our Unity platform can serve as a safe testbed for collaborative algorithms. A complex road network utilizing V2X techniques can be adequately simulated while taking into account bandwidth constraints.</p>
          </div>
       </div>

       <div class="project_image">
         <img src="img/synthetic_collage.png" style="flex-shrink:0; height:100%; width: 100%; object-fit: cover; max-height: 600px"/>
       </div>
    </div>


    <iframe style="margin:30px" width="60%" height="500vh" src="https://www.youtube.com/embed/ptkTKS5itWw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <div style="display:inline-grid; ; width:100%; height: 450px; grid-template-columns: 2fr 5fr;">


      
      <div style="display:flex; width:100%; height: auto;">

        <div style="display:block;width:auto; height: auto; margin: auto; color: white; padding: 20px; text-align: left;">

          <h1>Powerful Unity3D Foundation</h1>
          <br>
          <p>Built on top of Unity3D, our platform operates within a virtual world rich with high-fidelity models and textures. Plus, Unity's C# scripting API enables the full automation of the data collection process. We can cost-effectively generate vast amounts of data with the added benefit of ensured variability. With a single RTX 2080 Ti, an image generation rate of 5 Hz is achievable.</p>


        </div>

      </div>

      
      <div style="display:inline-grid; width:100%; height:auto; grid-template-columns: 1fr 1fr">
        <div style="display: flex; ; height: auto;align-items: center;justify-items: center;padding: 5px">
        
          <video class="center" controls autoplay>
            <source src="research_unity\auto_data_collect.mp4" type="video/mp4">
          </video>
        
        </div>




        <div style="display: flex;height: auto;align-items: center;justify-items: center; padding: 5px; max-height: 500px">
          <img src="research_unity/windridge.png" style="height:100%; width: 100%; object-fit: cover;"/>
        
        </div>
      
      </div>
       
    
    </div>





    <div style="display:inline-grid; ; width:100%; height: 450px; grid-template-columns: 5fr 2fr">

      <div style="display:flex;; width:100%; height:auto;"> 
      

        <video class="center" controls autoplay>
          <source src="research_unity\multiview.mp4" type="video/mp4">
        </video>


      </div>

      
      <div style="display:flex;; width:100%; height: auto;">

        <div style="display:block; ; width:auto; height: auto; margin: auto; color: white; padding: 20px; text-align: right;">

          <h1>Accurate Ground Truth</h1>
          <br>
          <p>By using a simulation, we inherently have access to the variables that define the virtual world - every generated dataset comes with complementary ground truth accurate down to the pixel and virtually for free. Realtime ground truth can also be simulated, such as pseudo car odometry and camera ego-motion.</p>


        </div>

      </div>
    
    </div>




    <div style="display:inline-grid; ; width:100%; height: 450px; grid-template-columns: 2fr 5fr">


      
      <div style="display:flex; width:100%; height: auto;">

        <div style="display:block;width:auto; height: auto; margin: auto; color: white; padding: 20px; text-align: left;">

          <h1>Deterministic Control of Conditions</h1>
          <br>
          <p>A wide range of weather conditions can be simulated through techniques used in the game industry. From sunlight direction to harsh snow, the inclusion of adverse conditions serves as a deterministic method to benchmark neural network performance.</p>


        </div>

      </div>

      
      <div style="display:inline-grid; width:100%; height:auto; grid-template-columns: 1fr 1fr">
        <div style="display: flex; height: auto;align-items: center;justify-items: center;padding: 5px">
        
          <video class="center" controls autoplay>
            <source src="research_unity\cycle.mp4" type="video/mp4">
          </video>
        
        </div>


        <div style="display: flex; height: auto;align-items: center;justify-items: center;padding: 5px">
          <video class="center" controls autoplay>
            <source src="research_unity\foggy driving.mp4" type="video/mp4">
          </video>
        </div>
      
      </div>
       
    
    </div>

    <div style="display:inline-grid; ; width:100%; height: 450px; grid-template-columns: 5fr 2fr">




      
      <div style="display:inline-grid; width:100%; height:auto;grid-template-columns: 1fr 1fr">
        <div style="display: flex; height: auto;align-items: center;justify-items: center; padding: 5px; max-height: 500px">
          <img src="research_unity/diverse_datasets_1.png" style="height:100%; width: 100%; object-fit: cover;"/>
        
        </div>


        <div style="display: flex; height: auto;align-items: center;justify-items: center; padding: 5px; max-height: 500px">
          <img src="research_unity/bbox_1.png" style="height:100%; width: 100%; object-fit: cover;"/>
        
        </div>
      
      </div>


            
      <div style="display:flex; width:100%; height: auto;">

        <div style="display:block;width:auto; height: auto; margin: auto; color: white; padding: 20px; text-align: right;">

          <h1>Diverse Datasets</h1>
          <br>
          <p>Manipulation of conditions allows us to generate datasets of high variability to avoid data bias. Not only can diversity be applied stylistically, but ground truth such as 2D bounding boxes can also exhibit randomness through changing poses and/or occlusion amount. Preliminary experiments demonstrate that our synthetic data provides object detection boost when trained alongside real data. Moreover, our synthetic data alone holds the same generalizing capabilities as other real data sets.</p>


        </div>

      </div>


      
       
    
    </div>

    <div style="display:inline-grid; ; width:100%; height: 450px; grid-template-columns: 2fr 5fr">


      
      <div style="display:flex; width:100%; height: auto;">

        <div style="display:block;width:auto; height: auto; margin: auto; color: white; padding: 20px; text-align: left;">

          <h1>Collaborative Testbed</h1>
          <br>
          <p>The creation of a real collaborative dataset proves to be difficult because of technicalities. Our platform eliminates issues of inaccurate pose data, unstable hardware synchronization, and laborious point cloud annotation. We can generate collaborative data sets of 2D and 3D formats tailored for specific applications such as feature matching and V2X edge computing.</p>


        </div>

      </div>

      
      <div style="display:inline-grid; width:100%; height:auto; grid-template-columns: 1fr 1fr; padding: 20px">
        <div style="display: flex; height: auto;align-items: center;justify-items: center;padding: 5px">
        
          <video class="center" controls autoplay>
            <source src="research_unity\gizmo_intersection.mp4" type="video/mp4">
          </video>
        
        </div>


        <div style="display: flex; height: auto;align-items: center;justify-items: center;padding: 5px;">
          <video class="center" controls autoplay>
            <source src="research_unity\collaboration.mp4" type="video/mp4">
          </video>
        </div>
      
      </div>
       
    
    </div>


</main>

<?php include("boilerplate/footer.php") ?> 

</body>



</html>
