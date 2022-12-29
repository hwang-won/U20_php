<?php
    include_once 'db_con.php';
    $sql = "SELECT * FROM list_athlete ORDER BY list_athlete.athlete_id ASC;";
    $result = $con->query($sql);
    $row_num = mysqli_num_rows($result);
    $goldNum = $row_num;
    $silverNum = 0;
    $bronzeNum = 0;

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $silverNum = rand(0,$goldNum);
            $bronzeNum = rand(0,$silverNum);
            echo '<tr>';
            echo '<td scope="col">'."$row[athlete_id]".'</td>';
            echo '<td scope="col">'."$row[athlete_name]".'</td>';
            echo '<td scope="col">'.$goldNum.'</td>';
            echo '<td scope="col">'.$silverNum.'</td>';
            echo '<td scope="col">'.$bronzeNum.'</td>';
            echo '<td scope="col">'.$goldNum+$silverNum+$bronzeNum.'</td>';
            echo '</tr>';
            echo '<br>';
            $goldNum--;
        }
    }
?>