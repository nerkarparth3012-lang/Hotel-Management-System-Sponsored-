<?php
require ("header.php");
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(./img/services/bg2.jpg);
        }
        .container {
            width: 90%; /* Responsive width */
            max-width: 600px; /* Maximum width */
            margin: 20px auto;
            padding: 20px;
            background-color: #c0d2f0;
            box-shadow: 0 4px 8px rgba(159, 188, 234, 0.1);
            border-radius: 10px;
            text-align: center;
            background-image: url(./img/services/bg1.jpg);
        }
        h1 {
            color: #0a0a0a;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 10px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #090909;
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #04080c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .form-group:nth-child(odd) {
            background-color: #f3f1f2;
            padding: 10px;
            border-radius: 5px;
        }
        .form-group:nth-child(even) {
            background-color: #f8f3f3;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>


<body>
    <div class="container">
        <h1>Babysitter Booking Form</h1>
        <p>Trust our caring babysitting service at Atithi to keep your little ones happy and safe while you relax.</p>
        <form id="bookingForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration (hours):</label>
                <input type="number" id="duration" name="duration" required>
            </div>
            <div class="form-group">
                <label for="comments">Additional Comments:</label>
                <textarea id="comments" name="comments"></textarea>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
    <script>
        document.getElementById('bookingForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Booking confirmed! We will contact you shortly.');
        });
    </script>
</body>
</html>

