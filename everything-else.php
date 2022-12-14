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
     width: 80%;
     row-gap: 30px;
     margin: 20px;
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

   @media (max-width: 1400px) {
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
  width: 90%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-content: stretch;
}

.social {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;

  flex: 1 1 calc(100% / 3);
  /*Start Run Code Snippet output CSS*/
  padding: 5px; 
  box-sizing: border-box;
  text-align: center;
  height: 500px;
}


.fade-text{
  opacity:0;
}

.image-in-grid{
  width: 100%;
  min-width: 100%;
  min-height: 100%;
  object-fit: cover;
}

 .social:hover .middle{
  opacity: 1;
 }

 .social:hover .image-in-grid{
  opacity: 0.4;
 }

 .middle {
   opacity: 0;
   position: absolute;
   overflow-wrap: break-word;
   background-color: white;
   padding: 5px;
 }

a:hover, a:active {
  color: #4dcaf7 ;
}

.fa:hover {
  color: white;
  background-color: #4dcaf7;
}


@media (max-width: 700px) {

.social {
display: flex;
justify-content: center;
align-items: center;
overflow: hidden;

flex: 1 1 calc(100% / 1);
/*Start Run Code Snippet output CSS*/
padding: 5px; 
box-sizing: border-box;
text-align: center;
}

}

 </style>

<body>

  <?php include("boilerplate/header.php") ?>

  <main style="text-align:center;">


        <div class="container">




        <div class="social">
            <img src="ECE164_Project\cover.png" class="image-in-grid"/>
            <div class="middle">
              <a href="op-amp-design.php">180nm CMOS Op-Amp Design</a>
            </div>
        </div>  
        
        <div class="social">
            <img src="img\synthetic_collage.png" class="image-in-grid"/>
            <div class="middle">
              <a href="synthetic-data-research.php">Synthetic Data Research</a>
            </div>
        </div>
        
        <div class="social">
            <img src="img\hao-ca-beat-it.png" class="image-in-grid"/>
            <div class="middle">
              <a href="https://youtube.com/404anhhao">My YouTube Channel</a>
            </div>
        </div>

        </div>

  </main>



  <?php include("boilerplate/footer.php") ?>

</body>

</html>