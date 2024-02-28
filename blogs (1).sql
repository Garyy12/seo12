-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 21:05:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `contenido` text NOT NULL,
  `urls` text NOT NULL,
  `palabra` text NOT NULL,
  `imagen` text NOT NULL,
  `descripcionImg` text DEFAULT NULL,
  `keywords` text NOT NULL,
  `autor` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `titulo`, `descripcion`, `contenido`, `urls`, `palabra`, `imagen`, `descripcionImg`, `keywords`, `autor`, `estado`) VALUES
(70, '11111', '1111', '<div>1<a href=\" + url + \">1</a></div>', '', '', '175496196-día-de-prevención-de-desastres-naturales-con-niños-explicando-guía-de-seguridad.jpg', '1111', 'Estudios, porque, ing', 'wqw', 'Tijuana'),
(71, '2222', '2222', '<div><a href=\" + url + \">2</a><br></div>', '', '', 'Dulcero.jpg', '2222', '2', '2', 'Puebla'),
(72, 'Las tumbas', 'qwqwqwqw', '<div><br></div>', '', '', 'Dulcero.jpg', 'wqwqwqwqw', 'Estudios, porque, ing', 'Ryan goslin', 'Puebla'),
(73, 'Prueba11111', 'ewqwqwqw', '<div>wqwqwqw</div>', 'http://localhost/seo/subirBlog.php', 'aqui', 'Dulcero.jpg', 'wqwqwqwq', '', 'Victor Luna', 'Puebla'),
(74, 'qwqwqwqwqw', 'qwqwqwqwqw', '<div>wqwqwqwq</div>', 'http://localhost/seo/subirBlog.php', 'qqqqqqq', 'Dulcero.jpg', 'qwqwqwqwqw', '', 'Yo', 'Puebla'),
(75, 'qqqqqqqqqqqqqqqq', '11111111111111', '<div>1111111111111111111</div>', 'http://localhost/seo/subirBlog.php', 'qwqwqwq', 'Dulcero.jpg', '111111111111111111', '', 'Ryan goslin', 'CDMX'),
(76, '1212121', '2121212', '<div>12121212</div>', 'http://localhost/seo/subirBlog.php', 'hola', 'Dulcero.jpg', '212121212122', '', 'ja', 'CDMX'),
(77, 'jahajhajhajha', 'jkahjahjahjha', '<div>kajhkjaha</div>', 'http://localhost/seo/subirBlog.php', 'hola', 'Captura de pantalla 2024-02-22 024627.png', 'kjlahkljahjkla', '', 'Yo xd', 'CDMX'),
(78, 'hola', 'hola', '<div>holakekekeke</div>', 'http://localhost/seo/subirBlog.php', 'keeeeee', 'Ea.png', 'hola', '', 'Yo', 'CDMX'),
(79, 'hhhhhh', 'hhhhhh', '<div>hhhhh</div>', 'http://localhost/seo/subirBlog.php', 'nose', 'Ea.png', 'hhhhhh', '', 'Yo', 'CDMX'),
(80, 'gary', 'gary', '<div>ea</div>', 'http://localhost/seo/subirBlog.php', 'esta', 'Ea.png', 'ea', '', 'Yo', 'CDMX'),
(81, 'Prueba 100000000000', 'prueba', '<div>equi</div>', 'https://www.twitch.tv/', 'copetito', 'Ea.png', 'ya nose ', '', 'Victor Luna', 'CDMX'),
(82, 'Hola 12', 'Hola', '<div>hola</div>', 'https://sistemas.comecyt.edomex.gob.mx/becas/#/', 'Palabra', 'thumb_8202_640_360_0_0_crop.jpeg', 'hola', 'hola, palabra', 'Yo', 'Tijuana'),
(83, 'Canelita buchota es lore', '12121212', '<div>1212121</div>', 'https://sistemas.comecyt.edomex.gob.mx/becas/#/', 'Porfin', 'daos.png', '12121212', 'por, fin', 'Victor Luna', 'CDMX');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
