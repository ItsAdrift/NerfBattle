<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    
    function handleLogin() {
        $username = $_SESSION['username'];
        console_log("$username");
    }
?>
<html></html>

<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
?>