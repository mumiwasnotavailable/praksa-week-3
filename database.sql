CREATE DATABASE IF NOT EXISTS sportbase_db;

USE sportbase_db;

CREATE TABLE IF NOT EXISTS sportasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(100) NOT NULL,
    sport VARCHAR(100) NOT NULL,
    drzava VARCHAR(100) NOT NULL,
    godina_rodjenja INT NOT NULL,
    uspjeh VARCHAR(255) NOT NULL
);

INSERT INTO sportasi (ime, sport, drzava, godina_rodjenja, uspjeh)
VALUES
('Cristiano Ronaldo', 'Fudbal', 'Portugal', 1985, 'Višestruki osvajač Lige prvaka'),
('Lionel Messi', 'Fudbal', 'Argentina', 1987, 'Svjetski prvak sa Argentinom'),
('Novak Đoković', 'Tenis', 'Srbija', 1987, 'Jedan od najtrofejnijih tenisera svih vremena'),
('Serena Williams', 'Tenis', 'SAD', 1981, 'Jedna od najuspješnijih teniserki svih vremena'),
('LeBron James', 'Košarka', 'SAD', 1984, 'Višestruki NBA prvak'),
('Usain Bolt', 'Atletika', 'Jamajka', 1986, 'Svjetski rekorder na 100m i 200m');