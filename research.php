<!DOCTYPE html>
<html>




 <head>
    <meta charset="utf-8">
    <title>Hao Le | Projects</title>
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
  max-width: 80%;

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
  margin: 30px;
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
  height: 70vh;
  padding: 10px;

  grid-template-columns: 1fr;
  align-items: center;
 }


 .project_text{
  display: flex;
  padding: 10px;
  height: 100%;
  text-align: center;
  align-items: center;
  color: white;
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
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
       </div>

       <div class="project_image">
         <img src="img\67575624_2599020146774717_7906070739281772544_n.jpg" style="flex-shrink:0; height:100%"/>
       </div>
     </div>

    </div>
   </div>

</main>

<?php include("boilerplate/footer.php") ?> 

 </body>



</html>
