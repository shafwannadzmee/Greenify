<?php
require 'connection.php';

if(isset($_POST["back"])){
    echo
    "
    <script>
        document.location.href = 'home.php';
    </script>
    "
    ;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" contents="width=device-width, initial-scale=1.0">
    <title>Waste Management System</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body onload = "getLocation();">
    <section class = "location-module">
        <div class = "location">
            <h1>LOCATIONS MODULE</h1>
        </div>
        <div class = "location-form">
            <form class = "myForm" action = "#" method = "post">
                <dic class = "input-box">
                    <input type="hidden" name="latitude" value="">
                    <input type="hidden" name="longitude" value="">
                </dic>
                
            </form>
            <form action = "#" method = "post">
                <dic class = "other" >
                    <button type="back" class = "btn2" name="back">Back</button>
                    <a href = "data.php">Get Location</a>
                </dic>
            </form>
        </div>
        <script type="text/javascript">
            function getLocation(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(showPosition,showError);
                }
            }
            function showPosition(position){
                document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
            }
            function showError(error){
                switch(error.code){
                    case error.PERMISSION_DENIED:
                    alert("Access Denied");
                    location.reload();
                    break;
                }
            }
        </script>
    </section>
</body>
</html>