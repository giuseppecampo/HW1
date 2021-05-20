<?php
    $conn = mysqli_connect("localhost","root","","agenzia");
    $search = "SELECT * FROM servizi";
    $servizi =  mysqli_query($conn,$search);
    if(mysqli_num_rows($servizi)>0){
        $list = array();
        while($row = $servizi->fetch_assoc()) {
            $list[] = array(
                'titolo' => $row["Tipo"],
                'immagine'=> $row["Immagine"],
                'descrizione'=> $row["Descrizione"],
                'urls'=>$row["URL"]
            );
        }
        $jsonStr = json_encode($list);
        echo ($jsonStr);
    }
?>