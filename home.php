<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, inital-scale=1.0">
    <title>Waste Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="home.php"><img src="images/logo-removebg-preview.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick = "hideMenu()"></i>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#informations">INFORMATIONS</a></li>
                        <li><a href="#location-module">LOCATIONS</a></li>
                        <li><a href="calendar.php">CALENDAR</a></li>
                        <li><a href="#reward">REWARDS</a></li>
                        <li class="btn"><a href="login.php">LOGIN</a></li>
                </div>
                <i class="fa fa-bars" onclick = "showMenu()"></i>
            </nav>   
            <div class="text-box">
                <h1>GREENIFY</h1>
                <p>RECYCLE FOR A SUSTAINABLE TOMORROW</p>
                <a href="#contact"class="hero-btn">Contact Us</a>
            </div>
            </div>
        </section>   

<!------------------About-------------------->

        <section class="about" id = "about">
            <h1>ABOUT US</h1>
            <p>TOGETHER WE CYCLE, TOGETHER WE STRIVE</p>
            <p>We serve simple features for all things recycling and sustainability.
                We are a passionate team dedicated to making the cities a cleaner and greener place. 
                Our mission is to empower people like you to take proactive steps towards a more sustainable future</p>
            <div class="row">
                <div class="course-col">
                    <h3>Locations</h3>
                    <p2>Update your current location and list of all the recycle centers nearby will be provided. Acknowledge where to handle specific waste at the specific place.</p2>
                </div>
                <div class="course-col">
                    <h3>Calendar</h3>
                    <p2>Plan your weekly waste management based on the recommended waste disposal for specific date and time. Request for the special collection for large quantities or dangerous waste.</p2>
                </div>
                <div class="course-col">
                    <h3>Rewards</h3>
                    <p2>Recycle more to earn more benefits! Collect points based on how heavy your waste disposal. Redeem your vouchers if the accumulated points already reach the requirements.</p2>
                </div>
            </div>
        </section>

<!-------------Information---------------->

        <section class = "informations" id = "informations">
            <h1>INFORMATIONS</h1>
            <p>Some of the several standards and guidelines of waste management</p>

            <div class = "guidelines-table-box">
                <div class = "guidelines-table-row table-head">
                    <div class="table-cell">
                        <p>Guideline Waste Management</p>
                    </div>
                    <div class="table-cell">
                        <p>Title</p>
                    </div>
                    <div class="table-cell">
                        <p>References</p>
                    </div>
                </div>
                <div class = "guidelines-table-row">
                    <div class="table-cell">
                        <p>1</p>
                    </div>
                    <div class="table-cell">
                        <p>Guidelines for Packaging, Labelling and Storage of Scheduled Wastes in Malaysia</p>
                    </div>
                    <div class="table-cell">
                        <p>More information: <a href="waste guidelines.pdf">guidelines</a></p>
                    </div>
                </div>
                <div class = "guidelines-table-row">
                    <div class="table-cell">
                        <p>2</p>
                    </div>
                    <div class="table-cell">
                        <p>Guidelines on Wastes Collected from Households</p>
                    </div>
                    <div class="table-cell">
                        <p>More information: <a href="waste guidelines 2.pdf">guidelines</a></p>
                    </div>
                </div>
                <div class = "guidelines-table-row">
                    <div class="table-cell">
                        <p>3</p>
                    </div>
                    <div class="table-cell">
                        <p>Guidelines for the Classification of Used Electrical and Electronic Equipment in Malaysia</p>
                    </div>
                    <div class="table-cell">
                        <p>More information: <a href="waste guidelines 3.pdf">guidelines</a></p>
                    </div>
                </div>
                <div class = "guidelines-table-row">
                    <div class="table-cell">
                        <p>4</p>
                    </div>
                    <div class="table-cell">
                        <p>Guidelines on Standard and Specification of Recovered Waster Oil in Malaysia</p>
                    </div>
                    <div class="table-cell">
                        <p>More information: <a href="waste guidelines 4.pdf">guidelines</a></p>
                    </div>
                </div>
                <div class = "guidelines-table-row">
                    <div class="table-cell">
                        <p>5</p>
                    </div>
                    <div class="table-cell">
                        <p>Guidelines on the Handling and Management of Clinical Wastes in Malaysia</p>
                    </div>
                    <div class="table-cell">
                        <p>More information: <a href="waste guidelines 5.pdf">guidelines</a></p>
                    </div>
                </div>
                
            </div>

        </section>
<!-------------Locations---------------->

        <section class = "location-module" id = "location-module" onload="getLocation();">
            <div class = "location">
                <h1>LOCATIONS</h1>
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
                        <button type="back" class = "btn3" name="back">Back</button>
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


<!-------------Rewards------------------->

        <section class="reward" id="reward">
            <h1>REWARDS</h1>
            <div class="container">
                <form action="#" method="post">
                    <div class="field-input">
                        <input type="text" class="input2" name="username" id="username" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="field-input">
                        <input type="text" class="input2" name="weight" id="weight" placeholder="Weight" autocomplete="off" required>
                    </div>
                    <label for="type">Type of Waste Categories:</label>
                    <select class="waste-categories" name="" id="type">
                        <option>Paper</option>
                        <option>Plastic</option>
                        <option>Metal</option>
                        <option>Electrical and Electronic</option>
                        <option>Computer Parts</option>
                        <option>Others</option>
                    </select>
                    <div class="field-input">
                        <input type="submit" class="submit" value="submit">
                    </div>
                    <a href = "table.php">Get Conversion</a>
                    <a href = "reward.php">Reward System</a>
                </form>
            </div>
        </section>

<!-------------Contact Us part---------------->

        <section class = "contact" id = "contact">
            <h1>CONTACT US</h1>
            <div class = "contact-wrapper">
                <div class = "contact-form">
                    <h2>Send us a feedback</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="feedback" placeholder="Your Feedback"></textarea>
                        </div>
                        <button type="submit">Submit Feedback</button>
                    </form>
                </div>
                <div class = "contact-info">
                    <h2>Contact Information</h2>
                    <p><i class="fas fa-phone"></i>+60175104660</p>
                    <p><i class="fas fa-envelope"></i>nadzmeeshafwan32@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i>University Sains Malaysia, 11700, Gelugor, Penang</p>
                </div>
            </div>
        </section>

<!-------------Footer part---------------->
        <footer>
            <ul class = "social-icon">
                <li><a href='https://www.facebook.com/shafwan.n.iwan/'><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href='https://twitter.com/Eewannnnnn'><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href='https://www.linkedin.com/in/muhamad-shafwan-nadzmee-mohd-zakiyuddin-799a63225/'><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li><a href='https://www.instagram.com/shafwnndzmee?igsh=a3lrdWUyamMzNHJi&utm_source=qr'><ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#informations">Informations</a></li>
                <li><a href="#location-module">Locations</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#reward">Rewards</a></li>
            </ul>
            <p>©2024 Greenify | All Rights Reserved</p>
        </footer>

<!---------JavaScript for Toggle Menu-------->
    <script src="script.js"></script>
    <script>

        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>