CREATE DATABASE bluejays_db;

USE bluejays_db;

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    batting_avg DECIMAL(5,3) NOT NULL,
    home_runs INT DEFAULT 0,
    rbi INT DEFAULT 0,
    birth_date DATE NOT NULL
);

INSERT INTO players (name, position, batting_avg, home_runs, rbi, birth_date)
VALUES
('Bo Bichette', 'SS', 0.298, 25, 75, '1998-03-05'),
('Vladimir Guerrero Jr.', '1B', 0.285, 32, 102, '1999-03-16'),
('George Springer', 'OF', 0.270, 28, 76, '1989-09-19');
('Sonia Serrano', 'OF', 0.280, 29, 76, '1986-02-02' )