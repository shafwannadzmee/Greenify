
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reward System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Reward System</h1>
    <div id="userSection" class="hidden">
      <span id="loggedInUser"></span>
    </div>
    <div id="authSection">
      <input type="text" id="usernameInput" placeholder="Enter Username">
      <button onclick="loginUser()">Login</button>
      <div class="balance">Balance: <span id="points">2000</span></div>
    </div>
  </header>
  <main class="container">
    <section class="rewards">
      <div class="reward-item">
        <img src="https://play-lh.googleusercontent.com/Ca4l5x9t9-5-m0EqIu44boxGJrcN3gl43SOxMVqDETEWn6ReskzGMC47KicS15e5uQg" alt="RM5 TnG Credit" class="reward-image">
        <button onclick="claimReward(500)">RM5 TnG Credit (500 Points)</button>
      </div>
      <div class="reward-item">
        <img src="https://play-lh.googleusercontent.com/Ca4l5x9t9-5-m0EqIu44boxGJrcN3gl43SOxMVqDETEWn6ReskzGMC47KicS15e5uQg" alt="RM10 TnG Credit" class="reward-image">
        <button onclick="claimReward(950)">RM10 TnG Credit (950 Points)</button>
      </div>
      <div class="reward-item">
        <img src="https://play-lh.googleusercontent.com/Ca4l5x9t9-5-m0EqIu44boxGJrcN3gl43SOxMVqDETEWn6ReskzGMC47KicS15e5uQg" alt="RM20 TnG Credit" class="reward-image">
        <button onclick="claimReward(1850)">RM20 TnG Credit (1850 Points)</button>
      </div>
      <div class="reward-item">
        <img src="https://lzd-img-global.slatic.net/g/p/1137564c0a9262a3ce8fa62e01060cd3.png_720x720q80.png" alt="RM5 Grab Voucher" class="reward-image">
        <button onclick="claimReward(450)">RM5 Grab Voucher (450 Points)</button>
      </div>
      <div class="reward-item">
        <img src="https://manilacafe.ph/wp-content/uploads/2021/06/FoodPanda-Logo-copy.png" alt="RM5 FoodPanda Voucher" class="reward-image">
        <button onclick="claimReward(1000)">RM5 FoodPanda Voucher (1000 Points)</button>
      </div>
    </section>
  </main>
  <script>
    function claimReward(reductionValue) {
      // Get the current points
      var currentPoints = parseInt(document.getElementById('points').innerHTML);

      // Check if there are enough points to claim the reward
      if (currentPoints >= reductionValue) {
        // Reduce the points
        var newPoints = currentPoints - reductionValue;
        document.getElementById('points').innerHTML = newPoints;

        // Generate a random code
        var randomCode = generateRandomCode();

        // Show success message with the generated code
        alert("You successfully claimed the reward!\nGenerated Code: " + randomCode);
      } else {
        // Not enough points, show an error message
        alert("Not enough points to claim the reward!");
      }
    }

    function generateRandomCode() {
      // Implement your logic to generate a random code here
      // For simplicity, let's generate a random 6-digit number
      return Math.floor(100000 + Math.random() * 900000);
    }
  </script>
</body>
</html>
