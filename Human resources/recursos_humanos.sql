-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2018 a las 21:28:03
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recursos_humanos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombres` tinytext NOT NULL,
  `apellidos` tinytext NOT NULL,
  `telefono` tinyint(20) NOT NULL,
  `direccion` char(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contratos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error leyendo datos: (#1064 - Algo está equivocado en su sintax cerca 'FROM `recursos_humanos`.`administrador`' en la linea 1)

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `doc_identidad` int(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `estado` char(8) NOT NULL,
  `privilegio` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombres`, `primer_apellido`, `segundo_apellido`, `doc_identidad`, `telefono`, `direccion`, `email`, `usuario`, `contrasenia`, `estado`, `privilegio`) VALUES
(9, 'helmer', 'patiÃ±o', 'quintero', 1193090526, 2147483647, 'abejorral', 'elmerp1193090526@gmail.com', 'helmer12', '12345', 'Activo', 'Super_administrador'),
(10, 'Mariana', 'Valejo', 'Loaiza', 10078384, 312865767, 'Abejorral', 'mariavallo@gmail.com', 'Helmer', '12345', 'Activo', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliciaciones`
--

CREATE TABLE `afiliciaciones` (
  `tipo_afiliacion` int(11) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `tipo` varchar(62) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afiliciaciones`
--

INSERT INTO `afiliciaciones` (`tipo_afiliacion`, `empresa`, `tipo`) VALUES
(1, 'Sura S.A', 'eps'),
(2, 'Medimas', 'eps'),
(4, 'Riesgos S.A', 'arl'),
(8, 'Colpensiones', 'pensiones'),
(9, 'Porvenir', 'pensiones'),
(10, 'Sura', 'eps'),
(11, 'Riesgos', 'riesgos'),
(12, 'Porvenir', 'pensiones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombre` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre`) VALUES
(1, 'Area de direccion general'),
(2, 'Area administrativa y de operaciones '),
(3, 'Area contable y financiera '),
(4, 'Area de comercializacion (marketing)'),
(5, 'Area de produccion '),
(6, 'Area de apectos legales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_psicologica`
--

CREATE TABLE `calificacion_psicologica` (
  `id_calificacionpsicologica` int(11) NOT NULL,
  `adaptacion_cambio` varchar(60) NOT NULL,
  `actitud_conflictos` varchar(60) NOT NULL,
  `dedicacion` varchar(60) NOT NULL,
  `escucha_activa` varchar(60) NOT NULL,
  `automotivacion` varchar(60) NOT NULL,
  `actitud_a_responsable` varchar(60) NOT NULL,
  `actitud_tarea` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion_psicologica`
--

INSERT INTO `calificacion_psicologica` (`id_calificacionpsicologica`, `adaptacion_cambio`, `actitud_conflictos`, `dedicacion`, `escucha_activa`, `automotivacion`, `actitud_a_responsable`, `actitud_tarea`) VALUES
(1, 'Adaptación al cambio', 'Actitud en los conlictos', 'Dedicación, contancia, entrega', 'Escucha activa', 'Capacidad de automotivación', 'Actitud hacia su responsable', 'Actitud hacia la tarea formativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_tecnica`
--

CREATE TABLE `calificacion_tecnica` (
  `id_calificaciontecnica` int(11) NOT NULL,
  `Conocimiento_producto` varchar(60) NOT NULL,
  `Conocimiento_servicio` varchar(60) NOT NULL,
  `Gestion_tiempo` varchar(60) NOT NULL,
  `Capacidad_analisis` varchar(60) NOT NULL,
  `Resolucion_problemas` varchar(60) NOT NULL,
  `Asumir_responsabilidades` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion_tecnica`
--

INSERT INTO `calificacion_tecnica` (`id_calificaciontecnica`, `Conocimiento_producto`, `Conocimiento_servicio`, `Gestion_tiempo`, `Capacidad_analisis`, `Resolucion_problemas`, `Asumir_responsabilidades`) VALUES
(1, 'Conocimiento del producto', 'Conocimiento del servicio', 'Gestión del tiempo', 'Capacidad de análisis', 'Resolución de problemas', 'Asumir responsabilidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `cargo` tinytext,
  `administrador_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo`
--

CREATE TABLE `consumo` (
  `id` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `consumo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consumo`
--

INSERT INTO `consumo` (`id`, `mes`, `consumo`) VALUES
(1, '2018-01-10', 'alto'),
(2, '2018-02-10', 'medio'),
(28, '2018-03-10', 'bajo'),
(29, '2018-04-10', 'medio'),
(32, '2018-05-10', 'alto'),
(33, '2018-06-10', 'bajo'),
(36, '2018-07-10', 'alto'),
(37, '2018-08-10', 'medio'),
(40, '2018-09-10', 'alto'),
(42, '2018-10-10', 'medio'),
(45, '2018-11-10', 'bajo'),
(46, '2018-12-10', 'alto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `profesion_trabajador` text NOT NULL,
  `grupo_profesional` varchar(11) NOT NULL,
  `funciones` text NOT NULL,
  `direccion_centro` varchar(50) NOT NULL,
  `actividad_trabajador` varchar(50) NOT NULL,
  `actividad` varchar(60) NOT NULL,
  `duracion_actividad` varchar(100) NOT NULL,
  `duracion_estimada` varchar(20) NOT NULL,
  `convenio` varchar(50) NOT NULL,
  `jornada_actividad` varchar(50) NOT NULL,
  `distribucion_horaria` varchar(50) NOT NULL,
  `tiempo_parcial` varchar(50) NOT NULL,
  `jornada_completa` varchar(50) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `jornada_parcial` int(10) NOT NULL,
  `tiempo` text NOT NULL,
  `distribucion_tiempo` varchar(50) NOT NULL,
  `extras` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `periodo_prueba` varchar(50) NOT NULL,
  `salario` int(10) NOT NULL,
  `concepto_salarial` varchar(50) NOT NULL,
  `duracion_vacaciones` int(11) NOT NULL,
  `convenio_colectivo` varchar(60) NOT NULL,
  `contrato_relevo` varchar(50) NOT NULL,
  `desempleado` varchar(50) NOT NULL,
  `numero_contrato` int(50) NOT NULL,
  `fecha_contrato` date NOT NULL,
  `nombre_trabajador` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `grupo_laboral` varchar(50) NOT NULL,
  `salario_jubilacion` int(11) NOT NULL,
  `fecha_decreto` date NOT NULL,
  `fecha_final_decreto` date NOT NULL,
  `num_contrato` int(11) NOT NULL,
  `fecha_finaldecreto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id`, `profesion_trabajador`, `grupo_profesional`, `funciones`, `direccion_centro`, `actividad_trabajador`, `actividad`, `duracion_actividad`, `duracion_estimada`, `convenio`, `jornada_actividad`, `distribucion_horaria`, `tiempo_parcial`, `jornada_completa`, `hora_inicio`, `hora_final`, `jornada_parcial`, `tiempo`, `distribucion_tiempo`, `extras`, `fecha_inicio`, `periodo_prueba`, `salario`, `concepto_salarial`, `duracion_vacaciones`, `convenio_colectivo`, `contrato_relevo`, `desempleado`, `numero_contrato`, `fecha_contrato`, `nombre_trabajador`, `fecha_nacimiento`, `direccion`, `grupo_laboral`, `salario_jubilacion`, `fecha_decreto`, `fecha_final_decreto`, `num_contrato`, `fecha_finaldecreto`) VALUES
(4, 'gerente', 'magister', 'gerente administrativo', 'Crr 55 #46-22', '3 meses', '1 mes', '90 dias ', '90 dias', 'Labinde', '90 dias', '8 horas', 'si', '8', '07:00:00', '15:20:00', 8, 'al dia', '8 horas', 'si', '2018-10-08', '15', 1500000, '750000 mensual', 15, 'Labinde', 'Si', 'gerente', 566, '2018-10-16', 'Ana Maria', '2018-10-15', 'Carrera 55 # 47 - 22', 'magister', 25, '2018-10-10', '2018-10-23', 566, '2018-10-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `primer_apellido` text NOT NULL,
  `segundo_apellido` text NOT NULL,
  `identidad` int(12) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `contrasenia` varchar(60) NOT NULL,
  `confirmar_contrasenia` varchar(50) NOT NULL,
  `estado` text NOT NULL,
  `privilegio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombres`, `primer_apellido`, `segundo_apellido`, `identidad`, `telefono`, `direccion`, `email`, `usuario`, `contrasenia`, `confirmar_contrasenia`, `estado`, `privilegio`) VALUES
(14, 'Ana', 'Soto ', 'Soto', 1000308362, '31132564585', 'Abejorral', 'ana@gmail.com', 'Ana12', '123', '123', 'Activo', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_afiliadoras`
--

CREATE TABLE `empresas_afiliadoras` (
  `id` int(11) NOT NULL,
  `empleado` varchar(50) NOT NULL,
  `eps` varchar(50) NOT NULL,
  `saldo_eps` int(20) NOT NULL,
  `arl` varchar(50) NOT NULL,
  `saldo_riesgos` int(20) NOT NULL,
  `pensiones` varchar(50) NOT NULL,
  `saldo_pensiones` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas_afiliadoras`
--

INSERT INTO `empresas_afiliadoras` (`id`, `empleado`, `eps`, `saldo_eps`, `arl`, `saldo_riesgos`, `pensiones`, `saldo_pensiones`) VALUES
(4, '100308362', 'Sura S.A', 200, 'Riesgos S.A', 150, 'Colpensiones', 100),
(5, '745415', 'Medimas', 200, 'Riesgos S.A', 150, 'Colpensiones', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_salud`
--

CREATE TABLE `empresas_salud` (
  `id` int(11) NOT NULL,
  `eps` varchar(60) NOT NULL,
  `saldo_eps` int(60) NOT NULL,
  `empleado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas_salud`
--

INSERT INTO `empresas_salud` (`id`, `eps`, `saldo_eps`, `empleado`) VALUES
(15, 'Sura S.A', 200, '100308362'),
(16, 'Sura S.A', 200, '100308362');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evalu`
--

CREATE TABLE `evalu` (
  `id` int(11) NOT NULL,
  `mes` text NOT NULL,
  `evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evalu`
--

INSERT INTO `evalu` (`id`, `mes`, `evaluacion`) VALUES
(1, 'Enero', 5),
(2, 'Marzo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_desempeno`
--

CREATE TABLE `evaluacion_desempeno` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `evaluacion` int(1) NOT NULL,
  `comentarios_adicionales` tinytext NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_psicologica`
--

CREATE TABLE `evaluacion_psicologica` (
  `id` int(11) NOT NULL,
  `empleado` varchar(60) NOT NULL,
  `admin` varchar(60) NOT NULL,
  `componente` varchar(60) NOT NULL,
  `calificacion` tinytext NOT NULL,
  `area` varchar(60) NOT NULL,
  `periodo_evaluado` varchar(60) NOT NULL,
  `cargo_empleado` varchar(60) NOT NULL,
  `tiempo_servicio` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `pregunta1` varchar(80) NOT NULL,
  `pregunta_nueva` varchar(2) NOT NULL,
  `justificacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluacion_psicologica`
--

INSERT INTO `evaluacion_psicologica` (`id`, `empleado`, `admin`, `componente`, `calificacion`, `area`, `periodo_evaluado`, `cargo_empleado`, `tiempo_servicio`, `fecha`, `pregunta1`, `pregunta_nueva`, `justificacion`) VALUES
(7, 'Mariana', 'Helmer', 'Adaptaciï¿½n al cambio', 'Alto', 'Area administrativa y de operaciones ', '219-1', 'Gerente', 'Administrativo', '2018-11-07', 'Eficiencia', 'Si', 'Buen desempeÃ±o'),
(8, 'mariana', 'Helmer', 'Adaptaciï¿½n al cambio', 'Medio', 'Area administrativa y de operaciones ', '2115', 'f', 'rdc', '2018-11-23', 'Produccion', 'Si', 'Disminuye produccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_tecnica`
--

CREATE TABLE `evaluacion_tecnica` (
  `id` int(5) NOT NULL,
  `empleado` varchar(60) NOT NULL,
  `admin` varchar(60) NOT NULL,
  `componente` tinytext NOT NULL,
  `calificacion` tinytext NOT NULL,
  `area` varchar(60) NOT NULL,
  `periodo_evaluado` varchar(60) NOT NULL,
  `cargo_empleado` varchar(60) NOT NULL,
  `tiempo_servicio` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `pregunta1` varchar(80) NOT NULL,
  `pregunta2` varchar(2) NOT NULL,
  `justificacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluacion_tecnica`
--

INSERT INTO `evaluacion_tecnica` (`id`, `empleado`, `admin`, `componente`, `calificacion`, `area`, `periodo_evaluado`, `cargo_empleado`, `tiempo_servicio`, `fecha`, `pregunta1`, `pregunta2`, `justificacion`) VALUES
(7, 'Maria', '', 'Conocimiento del producto', 'Medio', '', '', '', '', '0000-00-00', '', '', ''),
(9, 'Tu ', 'me', 'Conocimiento del servicio', 'Medio', 'Area de direccion general', '', '', '', '0000-00-00', '', '', ''),
(10, 'Guga', 'goga', 'Gestiï¿½n del tiempo', 'Alto', 'Area administrativa y de operaciones', '3 aÃ±os', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(5) NOT NULL,
  `title` tinytext NOT NULL,
  `body` tinytext NOT NULL,
  `url` varchar(150) NOT NULL,
  `class` varchar(100) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `inicio_normal` date NOT NULL,
  `final_normal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(1, 'Cita medica', 'Cita medica', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=1', 'event-success', '1540983840000', '1540638240000', '0000-00-00', '0000-00-00'),
(2, 'Cita', 'Cita medica', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=2', 'event-success', '1540551840000', '1540724640000', '0000-00-00', '0000-00-00'),
(4, 'cita', 'cita medica', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=4', 'event-success', '1540901400000', '1540987800000', '0000-00-00', '0000-00-00'),
(5, 'CongestiÃ³n nasal', 'Gripa', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=5', 'event-success', '1544586060000', '1560487320000', '0000-00-00', '0000-00-00'),
(6, 'CongestiÃ³n nasal', 'Gripa', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=6', 'event-success', '1545363720000', '1545968520000', '0000-00-00', '0000-00-00'),
(7, 'CongestiÃ³n nasal', 'Gripa', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=7', 'event-success', '1541821380000', '1542858180000', '0000-00-00', '0000-00-00'),
(8, 'CongestiÃ³n nasal', 'Gripa', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=8', 'event-success', '1541821380000', '1542944640000', '0000-00-00', '0000-00-00'),
(9, 'CongestiÃ³n nasal', 'Gripa', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=9', 'event-success', '1542253560000', '1542944760000', '0000-00-00', '0000-00-00'),
(10, 'CongestiÃ³n nasal', 'Gripa', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=10', 'event-success', '1542253560000', '1542944760000', '0000-00-00', '0000-00-00'),
(11, ',.', 'fghj', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=11', 'event-info', '1542472560000', '1543077360000', '0000-00-00', '0000-00-00'),
(12, 'Fiiebre', 'fiebre', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=12', 'event-success', '1542386160000', '1542990960000', '0000-00-00', '0000-00-00'),
(13, 'Fiiebre', 'fiebre', 'http://localhost/recursos_humanos/calendario/descripcion_evento.php?id=13', 'event-success', '1542386160000', '1542990960000', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondo_pensiones`
--

CREATE TABLE `fondo_pensiones` (
  `id` int(11) NOT NULL,
  `pensiones` varchar(60) NOT NULL,
  `saldo_pensiones` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fondo_pensiones`
--

INSERT INTO `fondo_pensiones` (`id`, `pensiones`, `saldo_pensiones`) VALUES
(12, 'Colpensiones', 100),
(13, 'Colpensiones', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `area1` varchar(50) NOT NULL,
  `area2` varchar(50) NOT NULL,
  `area3` varchar(50) NOT NULL,
  `area4` varchar(50) NOT NULL,
  `area5` varchar(50) NOT NULL,
  `area6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `area1`, `area2`, `area3`, `area4`, `area5`, `area6`) VALUES
(1, 'Area de direccion general', 'Area administrativa y de operaciones ', 'Area contable y financiera ', 'Area de comercializacion (marketing)', 'Area de produccion ', 'Area de apectos legales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_prueba`
--

CREATE TABLE `periodo_prueba` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `lugar_trabajo` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `horario` varchar(50) NOT NULL,
  `duracion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodo_prueba`
--

INSERT INTO `periodo_prueba` (`id`, `nombre`, `apellidos`, `lugar_trabajo`, `fecha_inicio`, `horario`, `duracion`) VALUES
(4, 'Helmer', '', 'Abejorral', '0000-00-00', '', '3 meses'),
(5, 'VICTOR', ' VALLEJO LOAIZA', 'Abejorral', '2018-07-13', 'Lunes-Viernes', '3 meses'),
(6, '', '', '', '0000-00-00', '', ''),
(7, '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `purchasesid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`purchasesid`, `amount`, `purchase_date`) VALUES
(1, 50, '2018-01-17'),
(2, 60, '2018-02-09'),
(3, 5, '2018-08-15'),
(4, 5, '0000-00-00'),
(5, 10, '2018-10-18'),
(6, 65, '2018-11-13'),
(7, 65, '2018-12-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_contrato`
--

CREATE TABLE `registro_contrato` (
  `id` int(11) NOT NULL,
  `nit` int(50) NOT NULL,
  `dna_empresa` varchar(50) NOT NULL,
  `nif_empresa` int(50) NOT NULL,
  `concepto_empresa` varchar(50) NOT NULL,
  `razon_social` varchar(70) NOT NULL,
  `domicilio_empresa` text NOT NULL,
  `pais_empresa` text NOT NULL,
  `municipio_empresa` text NOT NULL,
  `codigo_postal` int(50) NOT NULL,
  `regimen` varchar(50) NOT NULL,
  `cod_prov` varchar(50) NOT NULL,
  `numero_cotizacion` int(50) NOT NULL,
  `digito_contrato` varchar(50) NOT NULL,
  `actividad_economica` varchar(70) NOT NULL,
  `pais_centro` text NOT NULL,
  `municipio_centro` text NOT NULL,
  `nombre_trabajador` text NOT NULL,
  `identificacion` int(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `num_afiliacion` int(50) NOT NULL,
  `nivel_formativo` text NOT NULL,
  `nacionalidad` text NOT NULL,
  `domicilio_trabajador` text NOT NULL,
  `pais_trabajador` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_contrato`
--

INSERT INTO `registro_contrato` (`id`, `nit`, `dna_empresa`, `nif_empresa`, `concepto_empresa`, `razon_social`, `domicilio_empresa`, `pais_empresa`, `municipio_empresa`, `codigo_postal`, `regimen`, `cod_prov`, `numero_cotizacion`, `digito_contrato`, `actividad_economica`, `pais_centro`, `municipio_centro`, `nombre_trabajador`, `identificacion`, `fecha_nacimiento`, `num_afiliacion`, `nivel_formativo`, `nacionalidad`, `domicilio_trabajador`, `pais_trabajador`) VALUES
(10, 1252152436, 'Mariana Vallejo Loaiza', 45854524, 'EconÃ³mico', 'EconÃ³mica', 'Medellin', 'Colombia', 'Medellin', 4585, 'S.A.S', '4525', 1454245, '45552', 'EconÃ³mica', 'Colombia', 'Medellin', 'Alejandra Torres', 1000566492, '2018-10-22', 454, 'Bachiller', 'Colombiana', 'Medellin', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `replica`
--

CREATE TABLE `replica` (
  `id` int(11) NOT NULL,
  `empleado` text NOT NULL,
  `disconcormidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `replica`
--

INSERT INTO `replica` (`id`, `empleado`, `disconcormidad`) VALUES
(1, 'Mariana', 'putos todos los que me califiquen mal, maricas. Renuncio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgos`
--

CREATE TABLE `riesgos` (
  `id` int(11) NOT NULL,
  `arl` varchar(100) NOT NULL,
  `saldo_riesgos` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `riesgos`
--

INSERT INTO `riesgos` (`id`, `arl`, `saldo_riesgos`) VALUES
(11, 'Riesgos S.A', 150),
(12, 'Riesgos S.A', 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`salesid`, `amount`, `sales_date`) VALUES
(1, 25, '2018-01-17'),
(2, 35, '2018-02-02'),
(3, 5, '2018-07-24'),
(4, 5, '2018-07-12'),
(5, 12, '2018-01-01'),
(6, 10, '2018-02-10'),
(7, 10, '2018-04-10'),
(8, 5, '2018-08-17'),
(9, 5, '2018-08-03'),
(10, 5, '2018-08-23'),
(11, 10, '2018-08-29'),
(12, 10, '2018-08-09'),
(13, 5, '0000-00-00'),
(14, 5, '0000-00-00'),
(15, 10, '0000-00-00'),
(16, 5, '0000-00-00'),
(17, 10, '0000-00-00'),
(18, 5, '2018-12-18'),
(19, 65, '2018-10-16'),
(20, 65, '2018-10-17'),
(21, 65, '2018-10-10'),
(22, 5, '2018-10-19'),
(23, 65, '2018-11-12'),
(24, 10, '2018-10-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `id` int(11) NOT NULL,
  `area` varchar(60) NOT NULL,
  `correspondencia` varchar(60) NOT NULL,
  `motivo` text NOT NULL,
  `perfil` text NOT NULL,
  `funciones` text NOT NULL,
  `fecha` date NOT NULL,
  `sueldo` int(11) NOT NULL,
  `prestaciones` text NOT NULL,
  `jornada_laboral` text NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`id`, `area`, `correspondencia`, `motivo`, `perfil`, `funciones`, `fecha`, `sueldo`, `prestaciones`, `jornada_laboral`, `cantidad`) VALUES
(11, 'Area', 'Corresponde a...', 'Reemplazo', '', '', '0000-00-00', 0, '', '', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_administrador_contratos1_idx` (`contratos_id`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doc_identidad` (`doc_identidad`);

--
-- Indices de la tabla `afiliciaciones`
--
ALTER TABLE `afiliciaciones`
  ADD PRIMARY KEY (`tipo_afiliacion`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificacion_psicologica`
--
ALTER TABLE `calificacion_psicologica`
  ADD PRIMARY KEY (`id_calificacionpsicologica`);

--
-- Indices de la tabla `calificacion_tecnica`
--
ALTER TABLE `calificacion_tecnica`
  ADD PRIMARY KEY (`id_calificaciontecnica`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cargo_administrador1_idx` (`administrador_id`);

--
-- Indices de la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas_afiliadoras`
--
ALTER TABLE `empresas_afiliadoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas_salud`
--
ALTER TABLE `empresas_salud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evalu`
--
ALTER TABLE `evalu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_desempeno`
--
ALTER TABLE `evaluacion_desempeno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evaluacion_desempeno_usuario_idx` (`usuario_id`);

--
-- Indices de la tabla `evaluacion_psicologica`
--
ALTER TABLE `evaluacion_psicologica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_tecnica`
--
ALTER TABLE `evaluacion_tecnica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fondo_pensiones`
--
ALTER TABLE `fondo_pensiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo_prueba`
--
ALTER TABLE `periodo_prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchasesid`);

--
-- Indices de la tabla `registro_contrato`
--
ALTER TABLE `registro_contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `replica`
--
ALTER TABLE `replica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `riesgos`
--
ALTER TABLE `riesgos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `afiliciaciones`
--
ALTER TABLE `afiliciaciones`
  MODIFY `tipo_afiliacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `calificacion_psicologica`
--
ALTER TABLE `calificacion_psicologica`
  MODIFY `id_calificacionpsicologica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `calificacion_tecnica`
--
ALTER TABLE `calificacion_tecnica`
  MODIFY `id_calificaciontecnica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `consumo`
--
ALTER TABLE `consumo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `empresas_afiliadoras`
--
ALTER TABLE `empresas_afiliadoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresas_salud`
--
ALTER TABLE `empresas_salud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `evalu`
--
ALTER TABLE `evalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `evaluacion_desempeno`
--
ALTER TABLE `evaluacion_desempeno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evaluacion_psicologica`
--
ALTER TABLE `evaluacion_psicologica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `evaluacion_tecnica`
--
ALTER TABLE `evaluacion_tecnica`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `fondo_pensiones`
--
ALTER TABLE `fondo_pensiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `periodo_prueba`
--
ALTER TABLE `periodo_prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchasesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `registro_contrato`
--
ALTER TABLE `registro_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `replica`
--
ALTER TABLE `replica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `riesgos`
--
ALTER TABLE `riesgos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id`) REFERENCES `evaluacion_desempeno` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_administrador_contratos1` FOREIGN KEY (`contratos_id`) REFERENCES `contratos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `fk_cargo_administrador1` FOREIGN KEY (`administrador_id`) REFERENCES `administrador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evaluacion_desempeno`
--
ALTER TABLE `evaluacion_desempeno`
  ADD CONSTRAINT `fk_evaluacion_desempeno_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `empleados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
