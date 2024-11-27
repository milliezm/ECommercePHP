CREATE DATABASE lojaGuitarra

CREATE TABLE produto(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(40),
marca VARCHAR(40),
preco DECIMAL(7,2),
foto VARCHAR(50))

INSERT INTO produto(`nome`, `marca`, `preco`, `foto`) VALUES
('Fender Stratocaster Player II - Preta', 'Fender', 6999.99, 'stratoblack.jpg'),
('Gibson Les Paul Special - TV Yellow', 'Epiphone', 8999.99, 'lespaulspecial.jpg'),
('Yamaha Revstar Standard - Swift Blue', 'Yamaha', 7499.99, 'yamaharevstar.jpg'),
('Fender Telecaster Player - Polar White', 'Fender', 6999.99, 'telecasterwhite.jpg'),
('Tagima Rock in Rio - Preta', 'Tagima', 1599.99, 'tagimarockinrio.jpg')