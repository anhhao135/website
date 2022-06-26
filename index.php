<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Hao Le | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

    <?php include("boilerplate/favicon.php") ?> 

    </head>

    <style>

        #page_container{
            width: 100%;
            height: 100vh;
            background-image: url("art-dir/emigrate.jpg");
            background-position: center;
            background-size: cover;
            display: flex;                  /*  <-------------- required               */
		    flex-direction: column;         /*  <-------------- required               */
		    justify-content: center; 
        }

        #front_image_dummy{

            object-fit: cover;
            width: 100%;
            height: 100%;

        }


        header .header-brand{
            font-size: 20vw;
        }

        header nav ul li a{
            font-size: 30px;
        }

        header nav{
            padding: 20px;
        }



        @media (max-width: 1000px) {


            header nav ul li a{
                font-size: 15px;
            }

            header nav{
                padding: 10px;
            }
        
        }

    </style>


    <body>


        <div id = "page_container">
            <?php include("boilerplate/header.php") ?> 
        </div>


    </body>



</html>
