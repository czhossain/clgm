<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Online - KLUST</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/application-forms.css">
    <style>
        .application-form-section {
            background: #fff;
            padding: 60px 0;
        }
        .application-form-section .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .form-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-container h2 {
            color: #0b2242;
            margin-bottom: 10px;
        }
        .form-container p {
            color: #666;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0b2242;
        }
        .submit-btn {
            background: #0b2242;
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            font-weight: 600;
        }
        .submit-btn:hover {
            background: #1a3a6e;
        }
        .required {
            color: red;
        }
    </style>
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
            <h2>APPLY ONLINE</h2>
        </div>
    </section>

    <section class="application-form-section">
        <div class="container">
            <div class="form-container">
                <h2>Online Application Form</h2>
                <p>Complete the form below to submit your application to KLUST. All fields marked with <span class="required">*</span> are required.</p>
                
                <form action="klust-admin/backend/submit-application.php" method="POST">
                    <div class="form-group">
                        <label for="student_name">Full Name <span class="required">*</span></label>
                        <input type="text" id="student_name" name="student_name" required placeholder="Enter your full name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="your.email@example.com">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" required placeholder="+60 12-345 6789">
                    </div>

                    <div class="form-group">
                        <label for="program">Program <span class="required">*</span></label>
                        <select id="program" name="program" required>
                            <option value="">-- Select a Program --</option>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "klust_db";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if ($conn) {
                                $sql = "SELECT program_name FROM programs ORDER BY program_name";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . htmlspecialchars($row["program_name"]) . "'>" . htmlspecialchars($row["program_name"]) . "</option>";
                                    }
                                }
                                mysqli_close($conn);
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="submit-btn">Submit Application</button>
                </form>
            </div>
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
                    <li><a href="program.php">Programs</a></li>
                    <li><a href="admissions.html">Admissions</a></li>
                    <li><a href="scholarship.html">Scholarships</a></li>
                    <li><a href="campus-news.php">Campus News</a></li>
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
