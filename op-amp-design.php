<!DOCTYPE html>
<html>




 <head>
    <meta charset="utf-8">
    <title>Hao Le | 180nm CMOS Op-Amp Design</title>
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
  line-height: 22px;
  grid-template-columns: 5fr 4fr;
  align-items: center;
 }

h1{
  font-size: 21px;
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

.project_text p{
    font-size: 18px;
  }


.center {
    margin-left: auto;
    margin-right: auto;
    display: block;
    width: 100%;
    height: auto;
}

.project-object-type-1{
  display:inline-grid;
  width:100%;
  height: 450px;
  grid-template-columns: 2fr 5fr;
}

.project-object-type-2{
  display:inline-grid;
  width:100%;
  height: 450px;
  grid-template-columns: 5fr 2fr;
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

  .project_text p{
    font-size: 16px;
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

  .project-object-type-1{
    display:inline-grid;
    width:100%;
    height: 100%;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;
    font-size:15px;
  }

  .project-object-type-2{
    display:inline-grid;
    width:100%;
    height: 100%;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;
    font-size:15px;
  }

  #seminar-video{
    width: 100%;
  }

}

</style>

<body>


 <?php include("boilerplate/header.php") ?> 


<main>


  <div id="main-body">


    <div style="line-height:200%; color:white">
      <h1><a href="ECE164_Project\ECE164_Project.pdf">Read my report!</a></h1?>
    </div>

    <div id ="project-object">
       <div class="project_text">
         <div>
            <h1 style="font-size: 22px">180nm CMOS Op-Amp Design</h1>
            <hr>
            <p>I design a 180nm CMOS technology operational amplifier capable of over 80dB of gain and 35MHz of bandwidth. Additionally, ample phase and gain margins ensure closed-loop stability. This project was part of UCSD's ECE 164 class during fall 2022.</p>
            <br>
            <p>The circuit combines a folded cascode and common source amplifier stage to realize high overall gain. Moreover, margin performance was tunable with a compensation resistor and capacitor. Lastly, all MOSFETs were biased with a constant-transconductance reference circuit whose output current was mirrored downstream. Gate voltages were biased with ratiometrically with stacked MOSFET arrangements. Design performance was verified in Cadence Virtuoso. </p>
            <br>
            <p>Six groups were chosen out of roughly 50 to present their designs in front of a panel of Apple engineers. I was awarded the 2nd place prize! Though my performance was not the absolute best, the judges saw merit in my design methodology.</p>
          </div>
       </div>

       <div class="project_image">
         <img src="ECE164_Project\cover.png" style="flex-shrink:0; height:100%; width: 100%; object-fit: cover; max-height: 600px"/>
       </div>
    </div>


    <iframe width="100%" height="400vh" src="https://www.youtube.com/embed/YIbez8hiVc0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


</main>

<?php include("boilerplate/footer.php") ?> 

</body>



</html>
