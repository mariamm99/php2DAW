<?php
// include("datos/datos.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <link href="css/screen.css" type="text/css" rel="stylesheet" />
    <link href="css/css.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body>
    <section id="wrapper">
        <header id="header">
            <div class="top">
                <nav>
                    <ul class="navigation">
                        <ul class="navigation">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_sb.php">About</a></li>
                            <li><a href="contact_sb.php">Contact</a></li>
                        </ul>
                </nav>
            </div>
            <hgroup>
                <h2><a href="index.php/">symblog</a></h2>
                <h3><a href="index.php/">creating a blog in Symfony2</a></h3>
            </hgroup>
        </header>
        <section class="main-col">

            <!-- <article class="blog">
                <div class="date">
                    <time datetime=" "> </time>
                </div>
                <header>
                    <h2><a href="show_sb.php?id=n"> Titulo blog </a></h2>
                </header>
                <img src="img/imagen" />
                <div class="snippet">
                    <p> blog </p>
                    <p class="continue"><a href="#">Continue reading...</a></p>
                </div>
                <footer class="meta">
                    <p>Comments: <a href="#"> Numero comentarios </a></p>
                    <p>Posted by <span class="highlight">dsyph3r</span> at 07:06PM</p>
                    <p>Tags: <span class="highlight">symfony2, php, paradise, symblog</span></p>
                </footer>
            </article> -->

            <!-- con php q muestre blog -->
            <?php 
           
         
            foreach ($blogs as $value) {
                $fecha=date_format($value->getCreated(),"Y-m-d H:i:s");
                // print_r($value);
                echo ' <article class="blog"> ';
                echo '<div class="date">';
                echo ' <time datetime="'.$fecha.'">'.$fecha.' </time>';
                echo '</div>';
                echo '<header>';
                echo '<h2><a href="show_sb.php?id='.$value->getId().'">'.$value->getTitle().' </a></h2>';
                echo '</header>';
                echo '<img src="img/'.$value->getImage().'" />';
                echo '<div class="snippet">';
                echo '<p> '.$value->getBlog().' </p>';
                echo '<p class="continue"><a href="#">Continue reading...</a></p>';
            echo '</div>';

            echo '<footer class="meta">';
            echo '<p>Comments: <a href="#">'.count($value->getArrComentarios()).'</a></p>';
            echo '<p>Posted by <span class="highlight">'.$value->getAuthor().'</span> at '.$fecha.'</p>';
            echo '<p>Tags: <span class="highlight">'.$value->getTags().'</span></p>';
            echo '</footer>';
            echo '</article>';
            }
            
            ?>


        </section>
        <aside class="sidebar">
            <section class="section">
                <header>
                    <h3>Tag Cloud</h3>
                </header>
                <p class="tags">
                    <span class="weight-1">magic</span>
                    <span class="weight-5">symblog</span>
                    <span class="weight-4">movie</span>
                </p>
            </section>
            <section class="section">
                <header>
                    <h3>Latest Comments</h3>
                </header>
                <article class="comment">
                    <header>
                        <p class="small"><span class="highlight">Carlos Aguilera</span> commented on
                            <a href="#">A day with Symfony2</a>
                        </p>
                    </header>
                    <p>Comentario Usuario</p>
                </article>
            </section>
        </aside>
        <div id="footer">
            dwes symblog - created by <a href="#">dwes</a>
        </div>
    </section>
</body>

</html>