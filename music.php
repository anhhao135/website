<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
 </head>

 <style>
   @import url('https://fonts.googleapis.com/css2?family=Inconsolata&display=swap');

    body {

      /* Smoothly transition the background color */
      transition: background-color .5s;
      color: white;


    }

    .player {
      height: 100%;
      display: flex;
      align-items: center;
      flex-direction: column;
      text-shadow: 1px 1px #000000;
      background-image: url('maybe-sometimes-music-dir/diana-booklet-dark.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding-bottom: 60px;
      padding-top: 45px;


    }

    #avatar{
      max-width: 80%;
      max-height: 60vh;
      margin-bottom: 25px;
    }

    .details {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      margin-top: 15px;
    }

    .track-art {
      margin: 25px;
      height: 300px;
      width: 300px;
      background-image: url("https://images.pexels.com/photos/262034/pexels-photo-262034.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
      background-size: cover;
      border-radius: 5%;
    }

    .now-playing {
      font-size: 1rem;
    }

    .track-name {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      text-align: center;
      height: 10vh;
      margin-bottom: 20px;
      width: 90vw;

    }

    .track-artist {
      font-size: 1.5rem;
    }

    .buttons {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .playpause-track,
    .prev-track,
    .next-track {
      padding: 25px;
      opacity: 0.8;

      /* Smoothly transition the opacity */
      transition: opacity .2s;
    }

    .playpause-track:hover,
    .prev-track:hover,
    .next-track:hover {
      opacity: 1.0;
    }

    .slider_container {
      width: 75%;
      max-width: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Modify the appearance of the slider */
    .seek_slider,
    .volume_slider {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      height: 5px;
      background: black;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    /* Modify the appearance of the slider thumb */
    .seek_slider::-webkit-slider-thumb,
    .volume_slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 15px;
      height: 15px;
      background: white;
      cursor: pointer;
      border-radius: 50%;
    }

    .seek_slider:hover,
    .volume_slider:hover {
      opacity: 1.0;
    }

    .seek_slider {
      width: 60%;
    }

    .volume_slider {
      width: 30%;
    }

    .current-time,
    .total-duration {
      padding: 10px;
    }

    i.fa-volume-down,
    i.fa-volume-up {
      padding: 10px;
    }

    i.fa-play-circle,
    i.fa-pause-circle,
    i.fa-step-forward,
    i.fa-step-backward {
      cursor: pointer;
    }


    @media screen and (max-width: 1000px){

      .track-name {
        font-size: 2rem;
      }
      .track-artist {
        font-size: 1rem;
      }

    }

    @media screen and (max-width: 500px){

      .track-name {
        font-size: 1.5rem;
      }
      .track-artist {
        font-size: 1rem;
      }

    }



    .container {
      display: inline-grid;
      width: auto;
      height: 50vh;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 40px;
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

  </style>

 <body>

  <?php include("boilerplate/header.php") ?> 

  
  <main style="display:flex; flex-direction:column; align-items:center; margin-bottom:50px; ">

    <div style="color:white; width:80%; margin:30px;">
      <p>Music I make from time to time.</p>
    </div>


    <div class="container">
      <div align="center;" class="social">
        <img src="img\aboutMe\DSC00860.jpeg" class="image-in-grid"/>
      </div>

      <div align="center;" class="social">
        <img src="img\aboutMe\music-cover.jpeg" class="image-in-grid"/>
      </div>

    </div>
  
    <iframe style="height:80vh;" width="95%" scrolling="yes" frameborder="yes" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/125148176&color=%23f7584d&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>


  </main>

</body>

</html>
