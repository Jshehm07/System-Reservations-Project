<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/images/logo/businessLogo.png" type="image/png">
    <link rel="stylesheet" href="./page2.css">
    <title>Splashpoint Reservations</title>
</head>
<body>

    <header class="header">
        <div class="head">
            <img class="head-logo" src="../assets/images/logo/businessLogo.png" alt="">
            <img class="head-name" src="../assets/images/logo/busineessName.png" alt="">
            <img class="head-bg" src="../assets/images/Page 2/header.png" alt="">
        </div>
    </header>
	
	<hr>

    <div class="reservation">
        <h1>Reservations</h1>

        <form class="entries" action="submit_reservation.php" method="post">
            <div class="r-name">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" placeholder="Name" name="full_name">
            </div>

            <div class="r-contact">
                <label for="contactNumber">Contact Number:</label>
                <input type="tel" id="contactNumber" placeholder="Enter number" name="contact_num">
            </div>
			
			<div class="r-people">
                <label for="no"># No. of People:</label>
                <input type="number" id="no" placeholder="Max of 10" name="num_participants">
            </div>

            <div class="r-guest">
                <label for="guest">Guest:</label>
                <select id="guest" name="guest_type">
                    <option value="">Select type</option>
                    <option value="Students">Student</option>
                    <option value="Adults">Adult</option>
                    <option value="Children">Children</option>
                </select>
            </div>

            <div class="r-day">
                <label for="day">Select Day:</label>
                <input type="date" class="day" name="date_time" id="dateTime" required>
            </div>

            <div class="r-time">
                <label for="time">Select Time:</label>
                <select name="time" id="">
                    <option value="10-12">10 - 12 NN</option>
                    <option value="12-2">12 - 2 PM</option>
                    <option value="2-4">2 - 4 PM</option>
                    <option value="4-6">4 - 6 PM</option>
                    <option value="6-8">6 - 8 PM</option>
                </select>
            </div>

            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
    

    <footer class="footer">
        <p>© 2025 Splashpoint. All rights reserved.</p>
    </footer>

    <script src="./page2.js"></script>
</body>
</html>
