-- KLUST Admin Panel Database Structure
-- Simple MySQL database design

-- Create database
CREATE DATABASE IF NOT EXISTS klust_db;
USE klust_db;

-- Admin Users Table
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Programs Table
CREATE TABLE programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    program_name VARCHAR(200) NOT NULL,
    level VARCHAR(50) NOT NULL,
    duration VARCHAR(50),
    description TEXT,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Campus News Table
CREATE TABLE campus_news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    image_url VARCHAR(255),
    content TEXT,
    date DATE NOT NULL,
    status VARCHAR(20) DEFAULT 'Draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Academic Calendar Table
CREATE TABLE calendar_events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Applications Table
CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    program VARCHAR(200),
    status VARCHAR(20) DEFAULT 'Pending',
    application_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample admin user
INSERT INTO admin_users (username, password, email) 
VALUES ('admin', 'admin123', 'admin@klust.edu.my');

-- Insert sample programs
INSERT INTO programs (program_name, level, duration, description, image_url) VALUES
('Bachelor of Business Administration', 'Undergraduate', '3 Years', 'Comprehensive business education program', 'undergraduate.jpg'),
('Diploma in Computer Science', 'Undergraduate', '2 Years', 'Foundation in computer science and programming', 'undergraduate.jpg'),
('Foundation in Arts', 'Pre-University', '1 Year', 'Preparatory program for university studies', 'pre-university.jpg');

-- Insert sample news
INSERT INTO campus_news (title, image_url, content, date, status) VALUES
('KLUST Partners with Pukyong University', 'klust-pukyong-partnership-1-685x388_c.jpg', 'KLUST has established a strategic partnership with Pukyong University.', '2025-01-15', 'Published'),
('ASEAN-China AI Convention', 'asean-china-ai-convention-teo-1-scaled-685x388_c.jpg', 'Representatives attended the ASEAN-China AI Convention.', '2025-01-10', 'Published'),
('Vocational Education Global Conference', 'klust-11th-wwec-vocational-education-global-10-685x388_c.jpg', 'KLUST participated in the 11th World Vocational Education Conference.', '2025-01-05', 'Draft');

-- Insert sample calendar events
INSERT INTO calendar_events (title, start_date, end_date, description) VALUES
('Registration for Semester 1', '2025-02-01', '2025-02-15', 'Registration period for new and returning students'),
('Mid-Semester Break', '2025-04-10', '2025-04-17', 'One week break for students'),
('Final Examinations', '2025-06-15', '2025-06-30', 'End of semester examinations');

-- Insert sample applications
INSERT INTO applications (student_name, email, phone, program, status, application_date) VALUES
('Ahmad Bin Ali', 'ahmad@email.com', '0123456789', 'Business Administration', 'Pending', '2025-01-20'),
('Siti Nurhaliza', 'siti@email.com', '0198765432', 'Computer Science', 'Approved', '2025-01-18'),
('Lee Wei Ming', 'leewei@email.com', '0167894561', 'Foundation in Arts', 'Rejected', '2025-01-15'),
('Tan Mei Ling', 'tanmei@email.com', '0145678912', 'Engineering', 'Pending', '2025-01-12');
