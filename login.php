<?php
    session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "SELECT * FROM registration WHERE email = '$email' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location: home.php");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, inital-scale=1.0">
    <title>Waste Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="home.php"><img src="images/logo-removebg-preview.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick = "hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="">INFORMATIONS</a></li>
                    <li><a href="">LOCATIONS</a></li>
                    <li><a href="">CALENDAR</a></li>
                    <li><a href="">REWARDS</a></li>
                    <li class="btn">LOGIN</li>
            </div>
            <i class="fa fa-bars" onclick = "showMenu()"></i>
        </nav>   
        <div class="text-box">
            <h1>GREENIFY</h1>
            <p>RECYCLE FOR A SUSTAINABLE TOMORROW</p>
            <a href=""class="hero-btn">Visit Us to Know More</a>
        </div>
        <div class ="wrapper">
            <a href="home.php"><span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span></a>

            <div class="form-box login">
                <a href="home.php"><img src="images/logosec-removebg-preview.png"></a>
                <form action="#" method="post">
                    <dic class="input-box">
                        <input type="email" name="email" id="email" autocomplete="off" required>
                        <label>Email</label>
                    </dic>
                    <dic class="input-box">
                        <input type="password" name="password" id="password" autocomplete="off" required>
                        <label>Password</label>
                    </dic>
                    <button type="submit" class="btn2">Login</button>
                    <dic class="login-register">
                        <f>Don't have an account? <a href="register.php">Register</a>
                        </f>
                    </dic>
                </form>
            </div>
        </div>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>