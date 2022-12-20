<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php include("boilerplate/favicon.php") ?>

 </head>
 <style>

   #about-container{

     display: inline-grid;
     grid-template-columns: 1fr;
     justify-items: center;
     align-items: center;
     width: 96%;
     row-gap: 30px;
     margin-left: auto;
     margin-right: auto;
     margin-top: 20px;
     justify-self:center;
     line-height: 1.1;

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
  background-color:#fcb205;
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
  height:auto;
  color: white;
  font-size: 17px;
}


.container {
  display: inline-grid;
 	width: auto;
  height: 50vh;
  grid-template-columns: 1fr 1fr 1fr;
  align-items: center;
}

.social {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 5px;
  margin-right: 5px;
  overflow: hidden;
  height: 100%;
}

.image-in-grid{
  min-width: 100%;
  min-height: 100%;
  object-fit: cover;
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

    <div id="about-container">


        <div class="container">
          <div class="social">
            <img src="img/aboutMe/hike.jpeg" class="image-in-grid"/>
          </div>

          <div class="social">
            <img src="img/aboutMe/guitar.JPEG" class="image-in-grid"/>
          </div>

          <div class="social">
            <img src="img/aboutMe/paint.JPEG" class="image-in-grid"/>
          </div>
        </div>

        <div id = "about-text">

             Hello! Thanks for checking out my site. I don't get a lot of visitors so it's nice that you're here.<br><br>I got my Bachelor's in electrical engineering at UC San Diego and minored in studio arts. I currently work at <a href="https://www.quartus.com/">Quartus Engineering</a>. If I'm not home playing guitar, tending my garden, admiring my tarantulas, or decorating fish tanks, I'm probably somewhere really far away with my portable easle, painting nature in front of me.<br><br>If you want to see how I made this website (hosted on a Raspberry Pi underneath my couch), visit its repo on <a href="https://github.com/anhhao135/website.git">GitHub.</a> If you want to find out more on my background, or contact me, take a look at my <a href="resume.pdf">résumé.</a><br>

            <nav id="links">
                <li><a href="https://www.linkedin.com/in/hao-le-07b726132/" class="fa fa-linkedin"></a></li>
            </nav>

        </div>

    </div>

  </main>



  <?php include("boilerplate/footer.php") ?>

</body>

</html>