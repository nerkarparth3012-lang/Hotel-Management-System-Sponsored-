<?php
require ("header.php");
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7e09c;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(./img/services/bg1.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .container {
            width: 90%; /* Responsive width */
            max-width: 600px; /* Maximum width */
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            background-image: url(./img/services/bb.png);
            
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 10px;
            text-align: left;
            background-color: #cb8080;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            border: 1px solid  #070707;
            border-radius: 5px;
            box-sizing: border-box;
            border-color: antiquewhite;
        }
        button {
            padding: 10px 20px;
            background-color: #c1b1b1;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #f5f1c8;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: #f0e2be;
            outline: none;
            box-shadow: 0 0 5px rgba(3, 3, 3, 0.5);
        }
        .form-group:nth-child(odd) {
            background-color: 0;
            padding: 10px;
            border-radius: 5px;
        }
        .form-group:nth-child(even) {
            background-color: 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Banquet Hall Booking</h1>
        <p>Transforming your special moments into cherished memories.</p>
        <form id="bookingFormBanquet">
            <div class="form-group">
                <label for="nameBanquet">Name:</label>
                <input type="text" id="nameBanquet" name="nameBanquet" required>
            </div>
            <div class="form-group">
                <label for="emailBanquet">Email:</label>
                <input type="email" id="emailBanquet" name="emailBanquet" required>
            </div>
            <div class="form-group">
                <label for="phoneBanquet">Phone:</label>
                <input type="tel" id="phoneBanquet" name="phoneBanquet" required>
            </div>
            <div class="form-group">
                <label for="dateBanquet">Date:</label>
                <input type="date" id="dateBanquet" name="dateBanquet" required>
            </div>
            <div class="form-group">
                <label for="timeBanquet">Time:</label>
                <input type="time" id="timeBanquet" name="timeBanquet" required>
            </div>
            <div class="form-group">
                <label for="durationBanquet">Duration (hours):</label>
                <input type="number" id="durationBanquet" name="durationBanquet" required>
            </div>
            <div class="form-group">
                <label for="eventType">Event Type:</label>
                <select id="eventType" name="eventType" required>
                    <option value="">Select Event Type</option>
                    <option value="wedding">Wedding</option>
                    <option value="birthday">Birthday Party</option>
                    <option value="corporate">Corporate Event</option>
                    <option value="anniversary">Anniversary</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numGuests">Number of Guests:</label>
                <select id="numGuests" name="numGuests" required>
                    <option value="">Select Number of Guests</option>
                    <option value="1-100">1-100</option>
                    <option value="101-200">101-200</option>
                    <option value="201-300">201-300</option>
                    <option value="301-400">301-400</option>
                    <option value="401-500">401-500</option>
                </select>
            </div>
            <div class="form-group">
                <label for="decorSpecifications">Decor Specifications:</label>
                <textarea id="decorSpecifications" name="decorSpecifications" placeholder="Describe your decor preferences"></textarea>
            </div>
            <div class="form-group">
                <label for="commentsBanquet">Additional Comments:</label>
                <textarea id="commentsBanquet" name="commentsBanquet"></textarea>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
    <script>
        document.getElementById('bookingFormBanquet').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Booking confirmed! We will contact you shortly.');
        });
    </script>
</body>
</html>
