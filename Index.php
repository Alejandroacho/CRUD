<?php
    echo " 
    <head>
        <meta charset='UTF-8'>
        <title>Dog Hotel</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='Style.css'>
        <link rel='icon' href='Media/favicon.ico'>
    </head>
    <body>
        <div class='contenedor'>
            <header>
                <div class='logo'>
                <img src='Media\LogoDescriptivo.png'/>
                </div>
            </header>
           
            <div class='imagenperro'>
                <img src='Media\Background dogs.png'/>
                </div>
            <div class='menu'>
            <p>Home | About Us | Contact</p>
            <img src='Media\menu.png'/>
            </div>
        
            <div class=h1>
                <hr>
                <h1>The Best Dog Hotel !</h1>
            </div>
        
            <div class='formulario'>
            
                <h2>Register Your Best friend:</h2>
                <form method='POST' action='src\Controller\GetData.php'>
                    <br>
                    <label for='ownername'>*Owner's name:</label>
                    <br>
                    <input type='text' id='ownername' name='ownername' placeholder='Sebastian H.' required>
                    <br><br>
                    <label for='dogname'>*Dog's name:</label>
                    <br> 
                    <input type='text' id='dogname' name='dogname' placeholder='Firulais' required>
                    <br><br>
                    <label for='dogname'>Second dog's name:</label>
                    <br> 
                    <input type='text' id='dogname' name='dogname2' placeholder='Firulais 2'>
                    <br><br>
                    <label for='dogname'>Third dog's name:</label>
                    <br> 
                    <input type='text' id='dogname' name='dogname3' placeholder='Firulais 3'>
                    <br><br>
                    <label for='others'>*Dog's description:</label>
                    <br>
                    <input type='text' id='others' name='others' placeholder='Pitbull, Shiba Inu ...' required>
                    <br><br>
                    <input type='submit' value='REGISTER NOW'>
                    <p>*Camp required.</p>
                </form>
            </div>
                
            <div class='list'>
                <h2>Our guest list:</h2><br> ";
                include ('src\View\ListView.php');
                echo"
            </div>
            
            <footer>
                <hr>
                <br>
                <h3>By: Alejandro & Sebastian ©</h3>
                <br>
            </footer>
        </div>
    </body>";
?>