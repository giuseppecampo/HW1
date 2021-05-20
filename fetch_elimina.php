<?php

      // Verifica dati GET
      if(isset($_GET["id_evento"]))
      {
            // Connessione al database
            $conn = mysqli_connect("localhost", "root", "", "agenzia");
            // Elimina evento
            $id_evento = mysqli_real_escape_string($conn, $_GET["id_evento"]);
            mysqli_query($conn, "DELETE FROM prenotazione WHERE tipo  = '".$id_evento."'");
            // Chiudi connessione
            mysqli_close($conn);
      }

?>