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

$sql = "SELECT * FROM campus_news WHERE STATUS='Published'";
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
                                        <a href="academic-calendar.html">Academic Calendar</a>
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
                <a href="apply-online.php" class="apply-btn">APPLY NOW</a>
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

    <footer>
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon location-icon"></div>
                <h3>LOCATION</h3>
                <p>Kuala Lumpur University of<br>Science & Technology</p>
                <a href="location-map.html">View on Map</a>
            </div>
            <div class="contact-item">
                <div class="contact-icon phone-icon"></div>
                <h3>PHONE</h3>
                <p>+60 17 388 3435<br>General Enquiries</p>
                <a href="tel:+60173883435">Call Now</a>
            </div>
            <div class="contact-item">
                <div class="contact-icon mail-icon"></div>
                <h3>EMAIL</h3>
                <p>info@klust.edu.my<br>Admissions & Information</p>
                <a href="mailto:info@klust.edu.my">Send Email</a>
            </div>
        </div>

        <div class="contact-form">
            <h2>CONTACT FORM</h2>
            <form>
                <div class="form-row">
                    <input type="text" placeholder="FIRST NAME" required>
                    <input type="text" placeholder="LAST NAME" required>
                </div>
                <div class="form-row">
                    <input type="email" placeholder="EMAIL" required>
                    <input type="text" placeholder="SUBJECT" required>
                </div>
                <textarea placeholder="Description" rows="5" required></textarea>
                <button type="submit" class="send-btn">Send</button>
            </form>
        </div>

        <div class="footer-bottom">
            <div class="footer-info">
                <h3>Contact Information</h3>
                <p>+60 17 388 3435</p>
                <p>Kuala Lumpur, Malaysia</p>
            </div>
            <div class="footer-info">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link facebook"></a>
                    <a href="#" class="social-link twitter"></a>
                    <a href="#" class="social-link instagram"></a>
                    <a href="#" class="social-link linkedin"></a>
                </div>
            </div>
            <div class="footer-info">
                <h3>Quick Links</h3>
                <p><a href="about.html" style="color:#bdc3c7; text-decoration:none;">About Us</a><br>
                   <a href="program.php" style="color:#bdc3c7; text-decoration:none;">Programs</a><br>
                   <a href="admissions.html" style="color:#bdc3c7; text-decoration:none;">Admissions</a><br>
                   <a href="campus-news.php" style="color:#bdc3c7; text-decoration:none;">Campus News</a></p>
            </div>
            <div class="footer-info">
                <h3>Excellence Rating</h3>
                <div class="rating-icons">
                    <div class="star-icon"></div>
                    <div class="star-icon"></div>
                    <div class="star-icon"></div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2025 Kuala Lumpur University of Science & Technology (KLUST). All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
<?php
mysqli_close($conn);
?>
