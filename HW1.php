<?php
    session_start();
    if(!isset($_SESSION['Username']))
    {   
     header("Location: login.php");
        exit;

    }



?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel='stylesheet' href="mhw2.css">
        <script src="contents.js" defer></script>
        <script src="script.js" defer></script>
        <title>TravelSecurity</title>
    </head>
    <body>
    <header>       
        <nav>
            <div id="logo">TravelSecurity</div>
            <div id="link">
                <a class="button"> Home</a>
                <a class="button">About us</a>
                <a class="button">Prenota il tuo viaggio</a>
                <a href="gestione_prenotazione.php"class="button">Gestisci la tua prenotazione </a>
                <a class="button">Newsletter </a>
            </div>
            <div id="menu">
                <div></div>
                <div></div>
                <div></div>                
                <div></div>
              </div>
        </nav>
        <h2><p>Goditi le tue vacanze in totale relax!</p>
            <a class="button">Prenota adesso il tuo viaggio</a></h2>
       
    </header>
    <section id="preferito">
        
    </section>
    <section>  
        <div id="slogan">
            <h1>Torna a viaggiare con noi.</h1>
            <p> Seleziona o cerca un nostro servizio </p>
          </div>
         <div class="container">
            <div id="box"> </div>
           </div>
              
       <p><a href='logout.php'>Esci dall'account</a></p>
       </section>
    <footer>
        <p>TravelSecurity</p>
        <em>Created by Giuseppe Campo, O46002154</em>
    </footer>
    </body>
 </html>   