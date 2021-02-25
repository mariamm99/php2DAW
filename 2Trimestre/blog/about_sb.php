<?php
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
    <link href="css/sidebar.css" type="text/css" rel="stylesheet" />
    <link href="css/blog.css" type="text/css" rel="stylesheet" />
    <link href="css/web.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body>
    <section id="wrapper">
        <header id="header">
            <div class="top">
                <nav>
                    <ul class="navigation">
                    <ul class="navigation">
                            <li><a href="./">Home</a></li>
                            <li><a href="./add">Add blog</a></li>
                            <li><a href="./about">About</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                </nav>
            </div>
            <hgroup>
                <h2><a href="./">symblog</a></h2>
                <h3><a href="./">creating a blog in Symfony2</a></h3>
            </hgroup>
        </header>
        <section class="main-col">

            <article class="blog">
                <header>
                    <h2>About symblog</h2>
                </header>
               
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit voluptate eum rem ad. Amet consequuntur sit, perspiciatis in earum tenetur saepe! Non odit tempora animi aut commodi. Dignissimos, minima!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo deserunt eos delectus sequi asperiores vero minima cumque ullam rem recusandae, pariatur adipisci ratione nostrum, culpa laudantium. Tempore ad modi est. </p>
            </article>
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