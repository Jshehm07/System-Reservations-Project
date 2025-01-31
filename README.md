HOW TO SETUP SYSTEM-RESERVATIONS-PROJECT

1. Download XAMPP

- Install MySQL and Apache from XAMPP
- Run XAMPP as Administrator

2. Relocating the project to Htdocs

- Place all the file of System-Reservation-Project in C:/xampp/htdocs


3. Start MySQL and Apache

- Go to Apache Admins on XAMPP
- Open phpMyAdmin on your web browser
- Then create a database called "splashpoint_db"
- Open "splashpoint_db" go to SQL 
- Enter the following command and execute

CREATE TABLE reservations (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    contact_num VARCHAR(15) NOT NULL,
    number_of_people INT NOT NULL,
    guest ENUM('Students', 'Adults', 'Children') NOT NULL,
    date DATE NOT NULL,
    time ENUM('10-12', '12-2', '2-4', '4-6', '6-8') NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    email VARCHAR(255) NOT NULL
);

4. Setup Complete
