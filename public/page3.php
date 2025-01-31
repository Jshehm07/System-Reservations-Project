<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/images/logo/businessLogo.png" type="image/png">
    <link rel="stylesheet" href="./page3.css">
    <title>Splashpoint Reservation</title>
</head>
<body>
    <header class="header">
        <img class="header-bg" src="../assets/images/Page 3/header-pg3.png" alt="">
        <img class="header-logo" src="../assets/images/logo/businessLogo.png" alt="">
        <img class="header-name" src="../assets/images/logo/busineessName.png" alt="">
    </header>

    <div class="container">
    <h1>Thank you for reserving your spot with Splash Point!</h1>
    
    <div class="reservation">
        <h2 class="box-title">Reservation Details</h2>
        <div class="reservation-details">
            <p><strong>Full Name:</strong> placeholder</p>
            <p><strong>Contact Number:</strong> placeholder</p>
            <p><strong>Number of Participants:</strong> placeholder</p>
            <p><strong>Guest:</strong> placeholder</p>
            <p><strong>Date:</strong> placeholder</p>
            <p><strong>Time:</strong> placeholder</p>                                                                                  
            <p><strong>Price:</strong> placeholder</p>
        </div>
    </div>
    
    <div class="bring">
        <h2 class="box-title">Proper Swimming Attire</h2>

        <div class="assets">
            <div class="item">
                <img src="../assets/images/Page 3/Swimwear/brief.png" alt="">
                <p>Brief</p>
            </div>

            <div class="item">
                <img src="../assets/images/Page 3/Swimwear/trunks.png" alt="">
                <p>Trunks</p>
            </div>

            <div class="item">
                <img src="../assets/images/Page 3/Swimwear/swimcap.png" alt="">
                <p>Swim Cap</p>
            </div>

            <div class="item">
                <img src="../assets/images/Page 3/Swimwear/Unibody.png" alt="">
                <p>Unibody Swimwear</p>
            </div>

            <div class="item">
                <img src="../assets/images/Page 3/Swimwear/m-rashguard.png" alt="">
                <p>Rashguard</p>
            </div>
        </div>

        <p class="note">
            Forgot something? No worries! Rental items are available at the pool for a minimal fee.
        </p>
    </div>
</div>

        <div class="emailinput">
            <h3>Enter email to confirm reservation</h3>
            <input placeholder="Email" type="email" id="email" name="email">
            <p id="error-message">*Email is required to proceed</p>
            <br>
            <button id="confirm">Confirm</button>
        </div>

        <div class="modal" id="modal">
        <div class="confirmation">
            <h1>
                An email has been sent to you with all your details
                please present the email when entering our premises
            </h1>

            <button class="close" id="close">Close</button>
        </div>
    </div>

        <footer class="footer">
            <p>© 2025 Splashpoint. All rights reserved.</p>
        </footer>
    </div>
    
    <script src="./page3.js"></script>
</body>
</html>
