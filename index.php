<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Hao Le | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    

    <?php include("boilerplate/favicon.php") ?> 

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
    $(function(){
        $('.fadein img:gt(0)').hide();
        setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 5000);
    });
    </script>

    </head>

    <style>

        #page_container{
            width: 100%;
            height: 100vh;
            display: flex;                  /*  <-------------- required               */
		    flex-direction: column;         /*  <-------------- required               */
		    justify-content: center;
            position: fixed;
            z-index: 99; 
        }

        #front_image_dummy{

            object-fit: cover;
            width: 100%;
            height: 100%;

        }


        header{
            position: fixed;
            z-index: 100;
        }


        header .header-brand{
            font-size: 20vw;
        }

        header nav ul li a{
            font-size: 25px;
        }

        header nav{
            padding: 15px;
        }

        .fadein { 
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: 0;
        }
        .fadein img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 0;
            filter: brightness(0.95);    
        }



        @media (max-width: 1000px) {


            header nav ul li a{
                font-size: 15px;
            }

            header nav{
                padding: 10px;
            }


            header .header-brand{
                font-size: 22vw;
            }
        
        }

    </style>


    <body>
        


        

        <div class="fadein">
            <?php 
            // display images from directory
            // directory path
            $dir = "./index-slideshow/";
            
            $scan_dir = scandir($dir);
            shuffle($scan_dir);
            foreach($scan_dir as $img):
                if(in_array($img,array('.','..')))
                continue;
            ?>

            <img src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>">
            <?php endforeach; ?>

        </div>

        <div id="page_container">
            <?php include("boilerplate/header.php") ?> 
        </div>

        



    </body>



</html>
