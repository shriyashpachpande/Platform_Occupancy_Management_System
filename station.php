<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maharashtra Train Platforms</title>
    <link rel="stylesheet" href="station.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .ticket {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        #filter {
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Train Stations in Maharashtra</h1>
        <input type="text" id="filter" placeholder="Filter by station name...">

        <div class="ticket">
            <h2>Chhatrapati Shivaji Maharaj Terminus</h2>
            <p><strong>Number of Platforms:</strong> 18</p>
            <p><strong>District:</strong> Mumbai</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Pune Junction</h2>
            <p><strong>Number of Platforms:</strong> 7</p>
            <p><strong>District:</strong> Pune</p>
            <p><strong>Facilities:</strong> Waiting room, food court, parking</p>
        </div>

        <div class="ticket">
            <h2>Nashik Road</h2>
            <p><strong>Number of Platforms:</strong> 4</p>
            <p><strong>District:</strong> Nashik</p>
            <p><strong>Facilities:</strong> Waiting area, shops, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Nagpur Junction</h2>
            <p><strong>Number of Platforms:</strong> 8</p>
            <p><strong>District:</strong> Nagpur</p>
            <p><strong>Facilities:</strong> Food stalls, waiting room, taxi service</p>
        </div>

        <div class="ticket">
            <h2>Thane Railway Station</h2>
            <p><strong>Number of Platforms:</strong> 5</p>
            <p><strong>District:</strong> Thane</p>
            <p><strong>Facilities:</strong> Waiting area, shops, food stalls</p>
        </div>

        <div class="ticket">
            <h2>Ahmednagar</h2>
            <p><strong>Number of Platforms:</strong> 4</p>
            <p><strong>District:</strong> Ahmednagar</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Akola</h2>
            <p><strong>Number of Platforms:</strong> 4</p>
            <p><strong>District:</strong> Akola</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Amravati</h2>
            <p><strong>Number of Platforms:</strong> 8</p>
            <p><strong>District:</strong> Amravati</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Chhatrapati Shambhaji Nagar</h2>
            <p><strong>Number of Platforms:</strong> 4</p>
            <p><strong>District:</strong> Chhatrapati Shambhaji Nagar</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Chandrapur</h2>
            <p><strong>Number of Platforms:</strong> 11</p>
            <p><strong>District:</strong> Chandrapur</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Hazur Sahib Nanded</h2>
            <p><strong>Number of Platforms:</strong> 4</p>
            <p><strong>District:</strong> Hazur Sahib Nanded</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Hingoli</h2>
            <p><strong>Number of Platforms:</strong> 2</p>
            <p><strong>District:</strong> Hingoli</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Parbhani</h2>
            <p><strong>Number of Platforms:</strong> 3</p>
            <p><strong>District:</strong> Parbhani</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Jalna</h2>
            <p><strong>Number of Platforms:</strong> 3</p>
            <p><strong>District:</strong> Jalna</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Washim</h2>
            <p><strong>Number of Platforms:</strong> 3</p>
            <p><strong>District:</strong> Washim</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

        <div class="ticket">
            <h2>Mudkhed Junction</h2>
            <p><strong>Number of Platforms:</strong> 4</p>
            <p><strong>District:</strong> Nanded</p>
            <p><strong>Facilities:</strong> Waiting room, food stalls, restrooms</p>
        </div>

    </div>

    <script>
        const filterInput = document.getElementById('filter');
        const tickets = document.querySelectorAll('.ticket');

        filterInput.addEventListener('input', function() {
            const filterValue = filterInput.value.toLowerCase();

            tickets.forEach(ticket => {
                const stationName = ticket.querySelector('h2').textContent.toLowerCase();
                if (stationName.includes(filterValue)) {
                    ticket.style.display = ''; // Show ticket
                } else {
                    ticket.style.display = 'none'; // Hide ticket
                }
            });
        });
    </script>
</body>
</html>
