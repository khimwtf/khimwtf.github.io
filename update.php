<?php
if(isset($_GET['sensor'])){
    $sensor_value = $_GET['sensor'];
    $file = fopen("data.txt", "w");
    fwrite($file, "Float Sensor State: " . $sensor_value);
    fclose($file);
    echo "Data received";
} else {
    echo "No data received";
}
?>