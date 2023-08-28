<?php
    session_start();

    if (!isset($_SESSION("loggedin"))){
        echo('you need to login first');
        header('refresh:2;url=login.php');
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dream.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KatemboNet</title>   
</head>
<body>
    <header>
        <h1>Dreamers Home School</h1>
    </header>
        <div class="menu-bar">   
            <ul>
                <li class="active"><a href="#">Dreamers</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="dreamers.html">Mission</a></li>
                            <li><a href="#"></a>Vision</li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Computer</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#">Computer Basic</a></li>
                            <li><a href="#">Computer Maintainance</a></li>
                            <li><a href="#">Computer Networking</a></li>
                            <li><a href="#">Cyber</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Entrepreneurship</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#"></a>Kilimo</li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Ufugaji</a></li>
                            <li><a href="#">Ushonaji</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Arduino</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#">Home Kit</a></li>
                        </ul>
                    </div>
                </li>
                <button class="SignIn"><a href="signi.html">SignIn</a></button>
                <button class="SignIn"><a href="log.html">SignUp</a></button>
                </ul>
        </div>
    <div class="searchbox">
    <form> 
    <input type="text" placeholder=" Search...." name="search" required> 
    <button type="submit">Search</button> 
    </form>
    </div><br>
    <h1>Dreamers</h1>
    <h2><a href="dreamers.html">Timiza Ndoto na Dreamers</a></h2><br>
    <h1>Learn Computer</h1><br>
    <h1>Learn Entrepreneurship</h1><br>
    <h1>Learn Arduino</h1><br>
</body>
<footer>
    <a href="#"><i class="fa fa-home"></i>Home</a>
    <a href="#">Setting</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="#">Help</a>
    
   <a href="#">DreamersCo&copy2023</a>
</footer>
</html>