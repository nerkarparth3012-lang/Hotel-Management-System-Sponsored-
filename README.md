# Atithi Hotel Management System (HMS)
A complete, feature-rich, and premium Hotel Management System designed to handle hotel operations, reservations, guest bookings, employee tracking, and services.
---
## ✨ Features
### 🏨 Guest Front-End
* **Interactive Homepage:** Premium room showcase, service descriptions (spa, bar, restaurant, pool), and local attraction guides.
* **Online Booking System:** Easy room category exploration (Single, Double, Triple, King Sized, Master Suite, Murphy, etc.) and reservation forms.
* **Special Services:** Integrated information for premium guest services (such as babysitting and banquet booking).
### 📊 Staff & Admin Dashboard
* **Room Management:** Real-time room status updates, category categorization, pricing modifications, and vacancy checking.
* **Reservation Tracking:** Check-in and check-out tracking, transaction logging, payment statuses, and automatic balance calculation.
* **Staff Management:** Employee registration, job type classification, shift timing assignments, and work history logs.
* **Complain Center:** Complain logging, resolve status updates, and budget allocation tracking for maintenance tasks.
* **Operational Stats:** Aggregated financial and reservation performance metrics.
---
## 🛠️ Technology Stack
* **Backend:** PHP 7.x / 8.x
* **Database:** MySQL / MariaDB
* **Frontend:** Bootstrap 4, HSL CSS Gradients, Vanilla JS, jQuery, SlickNav, OwlCarousel2
---
## 🚀 Setup & Launch Instructions
### 1. Database Setup
1. Start your local MySQL/MariaDB server (such as the XAMPP MariaDB service).
2. Create two MySQL databases:
   * `hotel_atithi` (Frontend client database)
   * `hotelms` (Dashboard administrative database)
3. Import the SQL schema and data dump file into both databases:
   ```bash
   mysql -u root -D hotel_atithi < path/to/hotelms.sql
   mysql -u root -D hotelms < path/to/hotelms.sql
2. Connection Settings
Ensure that your database connection credentials are configured in both files:

Frontend database settings: ./db.php
Staff Dashboard settings: ./Dashboard/db.php
3. Running the Server
You can serve the project using XAMPP's Apache web server or launch a quick built-in PHP development server from the project's root folder:

bash
php -S localhost:8000
🔑 Default Credentials
Use the following administrator accounts to log in to the Dashboard:

Username	Email	Password	Role
christine	christine@gmail.com	201452064	Administrator
harryden	harryden@gmail.com	201452030	Senior Staff / Admin
Dashboard URL: http://localhost:8000/Dashboard/login.php
Customer Website URL: http://localhost:8000

📂 Project Directory Structure
text
├── Dashboard/              # Administrative dashboard files (rooms, staff, complaints)
│   ├── css/                # Dashboard stylesheets
│   ├── js/                 # Dashboard scripts
│   ├── db.php              # Administrative database config (hotelms)
│   ├── ajax.php            # Core backend logic & API handlers
│   └── *.php               # Individual management panels
├── Food Module/            # Restaurant and cafeteria menu files
├── Source/                 # Zipped static libraries and packages
├── css/                    # Frontend client stylesheets
├── js/                     # Frontend client scripts
├── img/                    # Image assets (rooms, services, sliders)
├── db.php                  # Client-side database config (hotel_atithi)
├── index.php               # Customer homepage
├── login.php               # Customer login portal
├── signup.php              # Customer registration portal
├── rooms.php               # Room details and booking page
└── Roombookingform.php     # Booking submission portal
