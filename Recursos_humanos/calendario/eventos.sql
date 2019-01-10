

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `body` tinytext NOT NULL,
  `url` varchar(150) NOT NULL,
  `class` varchar(100) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `inicio_normal` date NOT NULL,
  `final_normal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(4, 'xcbhnjmk,', 'cfgvhbjnkml,.Ã±', 'http://localhost/calendario/descripcion_evento.php?id=4', 'event-success', '1522867320000', '1522953720000', '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
