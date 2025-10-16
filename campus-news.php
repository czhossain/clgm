<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klust_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM campus_news WHERE status='Published'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus News - KLUST</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/campus-news.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
                <img src="assets/images/about/logo-klust.png" alt="KLUST Logo">
                <div class="logo-text">
                    <h1>KUALA LUMPUR UNIVERSITY</h1>
                    <p>OF SCIENCE AND TECHNOLOGY</p>
                    <span>Kuala Lumpur University of Science & Technology (KLUST)</span>
                </div>
                </a>
            </div>
            <nav class="nav">
                <a href="index.html">HOME</a>
                <a href="about.html">ABOUT US</a>
                <a href="program.php">PROGRAMS</a>
                <a href="admissions.html">ADMISSIONS</a>
                                <a href="contact.html">CONTACT US</a>
                                <details class="more-nav">
                                    <summary>More</summary>
                                    <div class="more-panel">
                                        <a href="campus-news.php">Campus News</a>
                                        <a href="academic-calendar.php">Academic Calendar</a>
                                        <a href="application-forms.html">Application Forms</a>
                                        <a href="bursary.html">Bursary</a>
                                        <a href="scholarship.html">Scholarships</a>
                                        <a href="facilities.html">Facilities</a>
                                        <a href="shuttle-bus-schedule.html">Shuttle Bus</a>
                                        <a href="location-map.html">Location Map</a>
                                    </div>
                                </details>
            </nav>
            <div class="header-right">
                <span class="phone">📞 : 019 388 3435</span>
                <a href="admissions.html" class="apply-btn">APPLY NOW</a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>CAMPUS NEWS</h2>
        </div>
    </section>

    <section class="news-intro">
        <div class="container">
            <p>Stay updated with the latest news, events, and achievements from KLUST. Discover what's happening on campus and our global partnerships.</p>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="news-grid">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<article class='news-card'>
                    <div class='news-image'>
                        <img src='" . $row["image_url"] . "' alt='" . $row["title"] . "'>
                    </div>
                    <div class='news-content'>
                        <h3>" . $row["title"] . "</h3>
                    </div>
                </article>";
                    }
                } else {
                    echo "<p>No news available</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter to receive the latest campus news and updates directly to your inbox.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit" class="subscribe-btn">Subscribe</button>
            </form>
        </div>
    </section>

        <footer class="site-footer">
            <div class="footer-content">
                <div class="footer-section contact-info">
                    <h3>Contact Us</h3>
                    <p>
                        KLUST College of Logistics and Green Manufacturing<br>
                        Jalan Ikram-Uniten, 43000 Kajang, Selangor, Malaysia
                    </p>
                    <p>
                        Phone: +60 3-1234 5678<br>
                        Email: info@klust.edu.my
                    </p>
                </div>
                <div class="footer-section quick-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="program.html">Programs</a></li>
                        <li><a href="admissions.html">Admissions</a></li>
                        <li><a href="scholarship.html">Scholarships</a></li>
                        <li><a href="campus-news.html">Campus News</a></li>
                    </ul>
                </div>
                <div class="footer-section contact-form">
                    <h3>Get in Touch</h3>
                    <form action="#" method="post" onsubmit="return false;">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 KLUST College of Logistics and Green Manufacturing</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">Fb</a>
                    <a href="#" aria-label="Twitter">Tw</a>
                    <a href="#" aria-label="LinkedIn">In</a>
                </div>
            </div>
        </footer>
</body>
</html>
<?php
mysqli_close($conn);
?>
