<?php
    $conn = mysqli_connect("localhost","root","","agenzia");
    $search = "SELECT * FROM hotel";
    $servizi =  mysqli_query($conn,$search);
    if(mysqli_num_rows($servizi)>0){
        $list = array();
        while($row = $servizi->fetch_assoc()) {
            $list[] = array(
                'titolo' => $row["Nome"],
                'immagine'=> $row["Immagine"],
            );
        }
        $jsonStr = json_encode($list);
        echo ($jsonStr);
    }
?>