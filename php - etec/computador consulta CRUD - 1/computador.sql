
CREATE TABLE IF NOT EXISTS `processador` (
  `id` int(5) NOT NULL,
  `marca` set('intel','amd') NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `cache` int(3) NOT NULL,
  `litografia` int(2) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `hyperT` tinyint(1) NOT NULL,
  `nucleos` int(2) NOT NULL,
  `plataforma` varchar(6) NOT NULL,
  `clock` decimal(2,1) NOT NULL,
  `turbo` tinyint(1) NOT NULL,
  `videoIntegrado` tinyint(1) NOT NULL,
  `uso` set('Desktop','Mobile') NOT NULL,
  `imagem` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `processador` (`marca`, `modelo`, `cache`, `litografia`, `numero`, `hyperT`, `nucleos`, `plataforma`, `clock`, `turbo`, `videoIntegrado`, `uso`, `imagem`) VALUES
('amd', 'ryzen 5', 4, 12, '3550H', 1, 4, '', '2.1', 1, 1, 'Mobile', 'ryzen5.png'),
('intel', 'core i3', 3, 22, '2100', 0, 4, '1155', '2.0', 0, 1, 'Desktop', 'corei3.png'),
('amd', 'Phenom', 6, 45, 'X6', 0, 4, 'AM3', '3.0', 0, 0, 'Desktop', 'phenom2.jpg'),
('intel', 'core i7', 12, 32, '3930k', 1, 6, '1155', '3.0', 1, 1, 'Desktop', 'corei7.png'),
('intel', 'core i3', 6, 14, '9100F', 0, 4, '1151', '3.6', 1, 0, 'Desktop', 'corei3_9100.png');


