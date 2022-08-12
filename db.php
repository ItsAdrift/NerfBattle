<html>
<?php 
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "nerfbattle";

    $GLOBALS['conn'] = new mysqli($servername, $username, $password, $database);
    $conn = $GLOBALS['conn'];
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        console_log("Databse Connected Successfully");
    }

    $sql = "CREATE TABLE IF NOT EXISTS Users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        pass VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
    if ($conn->query($sql) === TRUE) {
        console_log("Table Users created successfully");
    } else {
        console_log("Error creating table: " . $conn->error);
    }

    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
    ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
?>
</html>