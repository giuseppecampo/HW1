<?php

    session_start();

    if(isset($_SESSION["Username"])){

    header("Location: HW1.php");
    exit;
}

if(isset($_POST["Username"]) && isset($_POST["Password"]))
{    $conn = mysqli_connect("localhost","root","","agenzia");
    $query = "SELECT * FROM users WHERE Username = '".$_POST['Username']."' 
    AND Password = '".$_POST['Password']."'";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res)>0){

            $_SESSION["Username"]= $_POST["Username"];

            header("Location: HW1.php");
            exit;
        }
        else{
            $errore =true;
        }
}
?>

<html>
    <head>
    <link rel='stylesheet' href="mhw2.css">
    <script src='login.js' defer></script>
    </head>
    <body>
    <?php
            if(isset($errore))
            {
                echo "<p class='errore'>";
                echo "Credenziali non valide.";
                echo "</p>";
            }
        ?>

<header>      
        <nav>
            <div id="logo">TravelSecurity</div>
            <div id="link">
                <a class="button"> Home</a>
                <a class="button">About us</a>
                <a class="button">Prenota il tuo viaggio</a>
                <a class="button">Gestisci la tua prenotazione </a>
                <a class="button">Newsletter </a>
            </div>
            <div id="menu">
                <div></div>
                <div></div>
                <div></div>                
                <div></div>
              </div>
        </nav>
      <h2>  <p>Effettua il login</p>
          
       
    </header>
        <main> <section>
        <div class="container1">
            <form name='user_form' method='post'>
                <p>
                    <label>Username <input type='text' name='Username'></label>
                </p>
                <p>
                    <label>Password <input type='password' name='Password'></label>
                </p>
                <p>
                    <label>&nbsp;<input type='submit'></label>
                    <a href="registrazione.php"> Effettua la registrazione</a>
                </p>
            </form>
        </div>
        </section>
        </main>
        <footer>
        <p>TravelSecurity</p>
        <em>Created by Giuseppe Campo, O46002154</em>
    </footer>
</body>
</html>
