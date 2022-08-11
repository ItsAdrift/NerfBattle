<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
<html>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">

    <head>
        <div class="topnav">
            <div id="login">Login</div>
            <div href="#about">About</div>
            <div href="#news">News</div>
            <div class="active" href="#home">Home</div>
        </div>

        <h1>Nerf Battle</h1>

        
    </head>

    <body>
    <div id="loginModal">
        <span onclick="document.getElementById('loginModal').style.display='none'"
            class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!--<div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>-->

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label class="remember">
              <input type="checkbox" checked="checked" name="remember">Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('loginModal').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['username'] = $_POST["uname"];
            $_SESSION['password'] = $_POST["psw"];

            include("login.php");
            handleLogin();
        }
    ?>

    </body>

    <script src="main.js" type="text/javascript"></script>
</html>

