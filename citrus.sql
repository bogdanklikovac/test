-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `name` varchar(55) NOT NULL,
                            `email` varchar(55) NOT NULL,
                            `comment` text NOT NULL,
                            `status` tinyint(4) NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `title` varchar(55) NOT NULL,
                            `description` text NOT NULL,
                            `image` varchar(55) NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `title`, `description`, `image`) VALUES
(1,	'Lemon',	'The lemon, Citrus limon, is a species of small evergreen tree in the flowering plant family Rutaceae, native to South Asia, primarily North eastern India.\r\n\r\n',	'lemon.jpeg'),
(2,	'Pomelo',	'The Pomelo (Citrus maxima or Citrus grandis), is a citrus fruit from South East Asia. It is pale green or yellow when ripe. Its flesh is sweet and white. The rind is very thick and spongy.',	'pomelo.jpg'),
(3,	'Mandarin',	'The mandarin orange (Citrus reticulata), also known as the mandarin or mandarine, is a small citrus tree with fruit resembling other oranges, usually eaten plain or in fruit salads. The tangerine is a group of orange-coloured citrus fruit consisting of hybrids of mandarin orange. ',	'mandarin.jpg'),
(4,	'Oro Blanco',	'Oroblanco was developed as a cross between a diploid acidless pomelo and a seedy white tetraploid grapefruit, resulting in a triploid seedless fruit that is less acidic and less bitter than the grapefruit.[2]\r\n\r\nThe oroblanco was patented by the University of California in 1981 after its development by Robert Soost and James W. Cameron[3][4][5][6][7] at that university\'s citrus experiment station in Riverside, California.[8] The nine-year project began in 1958 and led to a series of test plantings before a successful variation was refined.[',	'oroblanco.jpg'),
(5,	'Yuzu',	'The fruit looks somewhat like a small grapefruit with an uneven skin, and can be either yellow or green depending on the degree of ripeness. Yuzu fruits, which are very aromatic, typically range between 5.5 cm (2.16 in) and 7.5 cm (2.95 in) in diameter, but can be as large as a regular grapefruit (up to 10 cm (3.93 in) or larger). ',	'yuzu.jpeg'),
(6,	'Volkamer',	'The Volkamer Lemon is thought to be a hybrid between the lemon and the sour orange, though some citrus specialists believe it to be a variety of mandarin lime.',	'volkamer.jpeg'),
(7,	'itrumelo',	'Citrumelo or Citromelo is also called Swingle citrumelo trifoliate hybrid, because it is a cold hardy citrus hybrid between a \'Duncan\' grapefruit and a trifoliate orange, developed by Walter Tennyson Swingle. ',	'citrumelo.jpg'),
(8,	'Australian limes',	'Australian limes are species of the plant genus Citrus that are native to Australia and Papua New Guinea.',	'australian_lime.jpg'),
(9,	'Ksffir Lime',	'In South Africa, \"kaffir\" is an ethnic slur for black African people. Consequently, some authors favour switching from \"kaffir lime\" to \"makrut lime\", a name less well established in English, while in South Africa it is usually referred to as \"Thai lime\".',	'ksffir_lime.jpg');

 DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `username` varchar(55) NOT NULL,
                         `email` varchar(55) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2020-12-06 22:18:51
