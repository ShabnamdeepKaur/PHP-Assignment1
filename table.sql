-- DATABASE TABLE

CREATE TABLE pizza (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pizza_type VARCHAR(50) NOT NULL,
    pizza_size VARCHAR(20) NOT NULL,
    dip VARCHAR(50) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
