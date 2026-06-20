CREATE DATABASE IF NOT EXISTS abel_company;

USE abel_company;

CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(255) NOT NULL,
    company_name VARCHAR(255),
    tagline VARCHAR(255),

    email VARCHAR(255),
    phone VARCHAR(100),
    address VARCHAR(255),
    website VARCHAR(255),

    facebook VARCHAR(255),
    instagram VARCHAR(255),
    linkedin VARCHAR(255),

    description TEXT,
    services TEXT,
    mission TEXT,

    primary_color VARCHAR(20),
    secondary_color VARCHAR(20),

    logo VARCHAR(255),
    model VARCHAR(50),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);