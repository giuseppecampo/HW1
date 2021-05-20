<?php
    $conn = mysqli_connect("localhost","root","","agenzia");

    $search = "SELECT * FROM prenotazione WHERE Nome= '".$_POST["name"]."'";
    $servizi =  mysqli_query($conn,$search);
    if(mysqli_num_rows($servizi)>0){
        $list = array();
        while($row = $servizi->fetch_assoc()) {
            $list[] = array(
                'nome' => $row["Nome"],
                'servizio'=> $row["Servizio"],
                'type'=> $row["Tipo"],
                'partenza'=> $row["Part_airoport"],
                'arrivo'=> $row["Dest_airport"],
            );
        }
        $jsonStr = json_encode($list);
        echo ($jsonStr);
    }
?>