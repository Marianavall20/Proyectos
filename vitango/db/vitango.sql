-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2017 a las 16:25:00
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vitango`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `nota` varchar(50) NOT NULL,
  `id_usuario_calificando` int(11) NOT NULL,
  `id_usuario_calificado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `nota`, `id_usuario_calificando`, `id_usuario_calificado`) VALUES
(1, '3', 2, 5),
(2, '4', 5, 3),
(3, '4', 1, 5),
(4, '3', 1, 5),
(5, '5', 1, 2),
(6, '4', 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `nombre`, `image`) VALUES
(1, 'Ballet', ''),
(2, 'Tango', ''),
(3, 'Bachata', 'http://localhost/vitango/admin/images/clases/Bachata-1505069211/af94feb18d064348093cf64b96f31427.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `precio` varchar(100) NOT NULL,
  `precio2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `edad`, `horario`, `precio`, `precio2`) VALUES
(1, 'Pre-danza', 'SÃ¡bados 12 m. â€“ 1 p.m.', '(2 â€“ 5 aÃ±os)', '65000', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edecanes`
--

CREATE TABLE `edecanes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edecanes`
--

INSERT INTO `edecanes` (`id`, `titulo`, `descripcion`) VALUES
(1, 'AsesorÃ­a y acompaÃ±amiento', 'AsesorÃ­a para el vals y protocolo con la familia y/o amigos: $30.000 / hora.\r\n\r\nAcompaÃ±amiento en misa de 6 edecanes: $260.000.\r\n\r\n*Aplica descuento del 50% por la contrataciÃ³n de cualquiera de los paquetes adicionales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `descripcion`, `fecha`, `image`) VALUES
(1, 'Feria de Baile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fugit nihil nesciunt, vel esse numquam consequatur quasi quia ab obcaecati excepturi consectetur praesentium totam molestiae vitae, sapiente non expedita consequuntur!', '2017-09-15', 'http://localhost:90/desarrollos/proyectosCelia2017/vitango/admin/images/eventos/Feria de Baile-1505193374/8e0e9a3f45fad1fc2970a4e7dd60af80.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_textos`
--

CREATE TABLE `page_textos` (
  `id` int(11) NOT NULL,
  `titulo_quienes_somos` varchar(100) NOT NULL,
  `titulo_porque_elegir` varchar(100) NOT NULL,
  `texto_quienes_somos` text NOT NULL,
  `texto_porque_elegir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_video`
--

CREATE TABLE `page_video` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `link_video` varchar(200) NOT NULL,
  `parte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL,
  `testigo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `testigo`, `descripcion`) VALUES
(1, 'Juan Perez 123', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit distinctio consequatur soluta deleniti architecto nulla amet suscipit officia ullam quibusdam ipsum, maiores. Numquam eius iure odit, eligendi at deserunt.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_textos`
--

CREATE TABLE `user_textos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_video`
--

CREATE TABLE `user_video` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `observaciones` text,
  `link_video` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_video`
--

INSERT INTO `user_video` (`id`, `nombre`, `observaciones`, `link_video`, `id_usuario`) VALUES
(1, 'Francesco Rossi', 'Francesco Rossi, Ozark Henry - Godspeed You (Charming Horses Remix)', 'jOCkCNEd8wM', 1),
(2, 'Tom Day - Solace', 'Siucide Sheep', 'M1zFjJVXoME', 1),
(3, 'Golden Days', 'La Belle Mixtape | Golden Days | Deep House, Summer Mix 2017 | Joey Stux.\r\n..get ready to dance and enjoy the vibes! :)', 'O3XhhuR_maM', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
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
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `documento`, `usuario`, `email`, `pass`, `genero`, `fecha_nacimiento`, `telefono`, `direccion`, `imagen`, `tipo_usuario`) VALUES
(1, 'admin', 'vitango', 1262035281, 'admin', 'admin@vitango.com', 'admin', 'Masculino', '1996-05-18', '2927428923', 'calle sur', '', 1),
(2, 'Juan', 'Perez', 2342543, 'juaprez', 'juan.perez@vitango.com', '123', 'Hombre', '1988-07-12', '12334323', 'Callo abajo', 'http://localhost/vitango/admin/images/profesores/juaprez-1505200497/033ac8fe2e568af987776bc078b77b8b.jpeg', 2),
(3, 'Dios', 'Holita', 238234768, 'diespi', 'dego.s@vitango.com', '123456', 'Otro', '1995-07-07', '342545234', 'Calle Arriba', 'http://localhost/vitango/admin/images/profesores/diespi-1505200691/4cf3df220dec5e38488837c3e5b160b3.png', 2),
(5, 'Juan15', 'Algo', 651631, 'asdsa', 'asd@dsd.com', '123123', 'Hombre', '1995-02-08', '51651531', 'Calle ewewe', 'http://localhost/vitango/admin/images/profesores//99e025a848fee0abf58f1a545526bb95.png', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `edecanes`
--
ALTER TABLE `edecanes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page_textos`
--
ALTER TABLE `page_textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page_video`
--
ALTER TABLE `page_video`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_textos`
--
ALTER TABLE `user_textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_video`
--
ALTER TABLE `user_video`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `edecanes`
--
ALTER TABLE `edecanes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `page_textos`
--
ALTER TABLE `page_textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `page_video`
--
ALTER TABLE `page_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `user_textos`
--
ALTER TABLE `user_textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user_video`
--
ALTER TABLE `user_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
