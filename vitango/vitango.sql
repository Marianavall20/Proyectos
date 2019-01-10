-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2017 a las 02:08:49
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vitango`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` varchar(50) NOT NULL,
  `id_usuario_calificando` int(11) NOT NULL,
  `id_usuario_calificado` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `nota`, `id_usuario_calificando`, `id_usuario_calificado`, `id_item`) VALUES
(3, '', 1, 7, 0),
(4, '', 7, 9, 1),
(5, '6', 7, 6, 1),
(6, '9', 6, 7, 0),
(7, '7', 1, 6, 1),
(8, '10', 6, 7, 0),
(9, '5', 6, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE IF NOT EXISTS `clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `nombre`, `image`) VALUES
(7, 'BALLET', 'http://localhost/vitango/admin/images/clases/Tango-1508687404/54dfb2617192dbaa0a9cb6097da6e643.jpeg'),
(8, 'TANGO', 'http://localhost/vitango/admin/images/clases/TANGO-1508693302/ea6d49133acb8a1310dd305bb7dea389.jpeg'),
(9, 'BACHATA', 'http://localhost/vitango/admin/images/clases/BACHATA-1508693327/1cda6734509777ac7731b5c0c0070ef0.jpeg'),
(10, 'MERENGUE', 'http://localhost/vitango/admin/images/clases/BAILE URBANO-1508693354/167c0c5c1bb534bc077289e40c8ffd86.jpeg'),
(11, 'SALSA', 'http://localhost/vitango/admin/images/clases/SALSA-1508693378/9a492aaa9f50f817bb392f3b3c3398ed.jpeg'),
(12, 'BAILE URBANO', 'http://localhost/vitango/admin/images/clases/MERENGUE-1508693402/4f467f6aeabe1a6cdc67e2facd971936.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `horario` varchar(50) NOT NULL,
  `precio` varchar(100) NOT NULL,
  `precio2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `edad`, `horario`, `precio`, `precio2`) VALUES
(7, 'Pre-danza', ' ( 2 - 5 aÃ±os)', ' SÃ¡bado  12 m - 1 p.m ', '60000', '0'),
(8, 'Semillero pre-infantil', '( 6 - 8 aÃ±os )', ' Viernes 6 - 7 pm ', '60000', '0'),
(9, 'Semillero Infantil', '( 9 - 11 aÃ±os)', 'Viernes 7 - 8 pm', '55000', '0'),
(10, 'Grupo de IniciaciÃ³n', '(12 aÃ±os en adelante )', 'viernes 7 -9 pm ', '50000', '0'),
(11, 'Grupo de Adultos ', '( 4 personas )', '4 clases mensales ', '50000', '0'),
(12, 'Pareja ', '( Libre )', ' 8 clases mensuales  ', '115000', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edecanes`
--

CREATE TABLE IF NOT EXISTS `edecanes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `edecanes`
--

INSERT INTO `edecanes` (`id`, `titulo`, `descripcion`) VALUES
(7, 'Asesoria y AcompaÃ±amiento', 'Asesoria para el vals y protocolo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `descripcion`, `fecha`, `image`) VALUES
(4, 'ExposiciÃ³n de baile ', 'Cada aÃ±o celebramos la vida, celebramos la danza con este encuentro de talentos del municipio y la regiÃ³n. El DÃ­a Internacional de la Danza es memorable en La Ceja del Tambo.', '2017-11-04', 'http://localhost/vitango/admin/images/eventos/asdfghj-1508778765/0c3a68db415765a28e9ccbf3fe2c0cf8.jpeg'),
(5, 'Feria de baile ', 'Desde el 2011, se realiza la Gran Noche de Clausura al finalizar cada aÃ±o. Este evento se convirtiÃ³ en la muestra por excelencia de los talentos formados en los procesos de la CompaÃ±Ã­a. ', '2017-10-02', 'http://localhost/vitango/admin/images/eventos/Feria de baile -1508779045/b00b6e84c5f65fd3b125d66b2040a555.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `definicion` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `definicion`, `tipo`) VALUES
(0, 'Responsabilidad (disciplina, puntualidad, respeto, compromiso, sentido de pertenencia).', 1),
(1, 'Claridad y Tecnica', 2),
(2, 'Nivel de interpretacion de un montaje coreografico (actitud, expresion corporal, retentiva, fuerza escenica y ejecucion de la coreografia). ', 1),
(3, 'Tecnica en lineas de tango, salsa, ballet, danza urbana y danza tradicional', 1),
(4, 'Agilidad del bailarin (giros, figuras, resistencia, fuerza, velocidad, lanzamiento, equilibrio). ', 1),
(5, 'Elasticidad', 1),
(6, 'Logro de los objetivos de aprendizaje (enseñanza de los ritmos, secuencia y calidad de los contenidos impartidos).', 2),
(7, 'Metodologia utilizada para facilitar su aprendizaje.', 2),
(8, 'Tratamiento del profesor hacia los estudiantes.', 2),
(9, 'Horario asignado y duracion de la clase para el cumplimiento de los objetivos.', 2),
(10, 'Condiciones logisticas donde se realizo la actividad (locacion, iluminacion, sonido, mobiliario, espacios).', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE IF NOT EXISTS `testimonios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testigo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `testigo`, `descripcion`) VALUES
(2, 'Madre', 'Hacer parte de la compaÃ±Ã­a de baile Vitango es una experiencia   agradable!'),
(4, 'Padre', 'Amo VITANGO porque allÃ­ mi hija aprende a ser disciplinada, a cuidar su cuerpo y a fortalecer su mente.'),
(5, 'Madre', 'Â¿QuÃ© significa la danza para nosotros? Â¡Para nosotros la danza significa vida!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_video`
--

CREATE TABLE IF NOT EXISTS `user_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `observaciones` text,
  `link_video` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `user_video`
--

INSERT INTO `user_video` (`id`, `nombre`, `observaciones`, `link_video`, `id_usuario`) VALUES
(1, 'Elenco', 'Clase ', 'KRZutqWK4UQ', 6),
(2, 'Salsa', 'Clase ', '-OobQUjwY-k', 6),
(3, 'Tango', 'Clase', '-OobQUjwY-k', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `documento` double NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `genero` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(20) NOT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `documento`, `usuario`, `email`, `pass`, `genero`, `fecha_nacimiento`, `telefono`, `direccion`, `imagen`, `tipo_usuario`) VALUES
(1, 'Fernando', 'Correa', 4799925, 'admin', 'admin@gmail.com', '12345', 'Masculino', '25/06/2017', '3163324675', 'Bernardita', NULL, 1),
(6, 'Estefani', 'Ceballos', 1000189035, 'profesor@gmail.com', 'profesor@gmail.com', '123', 'Mujer', '2017-10-22', '3345678', 'fdghhjkl', 'http://localhost/vitango/admin/images/profesores/profesor_c-1508699654/8388c1896dab2ef3d10ebe786a141000.jpeg', 2),
(7, 'Erica', 'Villa', 1007459908, 'estudiante@gmail.com', 'ericabotero2000@gmail.com', '123', 'Mujer', '2000-08-10', '3135067176', 'los molinos ', 'http://localhost/vitango/admin/images/estudiantes/estudiante@gmail.com-1508704280/feb56c660303becf9d46675603121a96.jpeg', 3),
(10, '', 'Perez', 1001132560, 'luisa@gmail.com', 'luisa@gmail.com', '123', 'Mujer', '2017-04-12', '123', 'gfds', 'http://localhost/vitango/admin/images/estudiantes/luisa@gmail.com-1508788946/cfebc8f60df991d64643e39f6eabe815.jpeg', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
