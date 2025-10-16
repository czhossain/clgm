<?php
include 'backend/dashboard-stats.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - KLUST Admin</title>
    <link rel="stylesheet" href="css/admin-style.css">
</head>
<body>
    <header>
        <h1>KLUST Admin Panel</h1>
        <a href="index.html">Logout</a>
    </header>
    
    <nav>
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href="manage-news.html">Campus News</a>
        <a href="manage-programs.html">Programs</a>
        <a href="manage-applications.html">Applications</a>
    </nav>
    
    <main>
        <h2>Dashboard</h2>
        
        <section class="stats">
            <div class="stat-box">
                <h3><?php echo $total_programs; ?></h3>
                <p>Total Programs</p>
            </div>
            <div class="stat-box">
                <h3><?php echo $total_news; ?></h3>
                <p>News Articles</p>
            </div>
            <div class="stat-box">
                <h3><?php echo $total_applications; ?></h3>
                <p>Applications</p>
            </div>
        </section>
        
        <section class="recent">
            <h3>Recent Activity</h3>
            <p>Activity logs will appear here</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 KLUST Admin Panel</p>
    </footer>
</body>
</html>
