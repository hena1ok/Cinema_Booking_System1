<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cinema Booking System</title>
    <link rel="stylesheet" href="Dashbord.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/main.css">
</head>
<body>
    <?php include("../Add/Adminheader.php");?>

    <main>
        <section id="dashboard" class="section dashboard">
            <h1>Welcome, Admin</h1>
            <p>Manage your cinema bookings efficiently and effectively</p>
            <div class="stats-container">
                <div class="stat-box">
                    <h3>Total Movies</h3>
                    <p>120</p>
                </div>
                <div class="stat-box">
                    <h3>Total Screens</h3>
                    <p>8</p>
                </div>
                <div class="stat-box">
                    <h3>Total Schedules</h3>
                    <p>450</p>
                </div>
                <div class="stat-box">
                    <h3>Tickets Sold</h3>
                    <p>3,500</p>
                </div>
                <div class="stat-box">
                    <h3>Registered Users</h3>
                    <p>1,200</p>
                </div>
                <div class="stat-box">
                    <h3>Revenue</h3>
                    <p>$50,000</p>
                </div>
            </div>
            <div class="charts-container">
                <div class="chart-box">
                    <h3>Revenue Over Time</h3>
                    <canvas id="revenueChart"></canvas>
                </div>
                <div class="chart-box">
                    <h3>Ticket Sales Over Time</h3>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
            <div class="alerts-container">
                <h3>Upcoming Schedules</h3>
                <ul>
                    <li>Movie A - Screen 1 - 2024-06-15 18:30</li>
                    <li>Movie B - Screen 2 - 2024-06-15 20:00</li>
                </ul>
                <h3>Low Occupancy Alerts</h3>
                <ul>
                    <li>Movie C - Screen 3 - 2024-06-15 16:00 - 10% occupancy</li>
                </ul>
            </div>
        </section>

        <!-- Other sections like movies, schedules, tickets, users, reports, settings -->
    </main>

   <?php include("../Add/footer.php");
          
          
          ?>

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample data for charts
        const revenueData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Revenue',
                data: [12000, 15000, 18000, 22000, 24000, 30000],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        const salesData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Ticket Sales',
                data: [150, 200, 250, 300, 350, 400],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        };

        // Config for charts
        const configRevenue = {
            type: 'line',
            data: revenueData,
        };

        const configSales = {
            type: 'line',
            data: salesData,
        };

        // Render charts
        window.onload = function() {
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(revenueCtx, configRevenue);
            new Chart(salesCtx, configSales);
        }
    </script>
   
</body>
</html>
