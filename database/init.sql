-- Create HealthRwanda database
CREATE DATABASE IF NOT EXISTS group1_healthrwanda_db;

-- Use the database
USE group1_healthrwanda_db;

-- Create users table for patient registration
CREATE TABLE IF NOT EXISTS tbl_users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_firstname VARCHAR(100) NOT NULL,
    user_lastname VARCHAR(100) NOT NULL,
    user_gender ENUM('Male', 'Female') NOT NULL,
    user_email VARCHAR(255) UNIQUE NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample patient data
INSERT IGNORE INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password) VALUES
('Jean', 'Ndayisaba', 'Male', 'jean.ndayisaba@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('Marie', 'Uwase', 'Female', 'marie.uwase@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('Paul', 'Habarugira', 'Male', 'paul.habarugira@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
