-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2018 a las 02:58:14
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `networkfcc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `idx` int(4) NOT NULL,
  `idP` int(4) NOT NULL,
  `idE` int(4) NOT NULL,
  `IdM` int(4) NOT NULL,
  `calificacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`idx`, `idP`, `idE`, `IdM`, `calificacion`) VALUES
(1, 0, 4, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(4) NOT NULL,
  `idE` int(4) NOT NULL,
  `idC` int(4) NOT NULL,
  `idP` int(4) NOT NULL,
  `idT` int(4) NOT NULL,
  `calificacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventomedio`
--

CREATE TABLE `eventomedio` (
  `InEvent` int(4) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Tutor` int(4) NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventomedio`
--

INSERT INTO `eventomedio` (`InEvent`, `Nombre`, `Fecha`, `Imagen`, `Descripcion`, `Tipo`, `Tutor`, `intro`) VALUES
(1, 'Tarea 1', '2018-06-29', 'https://www.youtube.com/watch?v=sqM4E2mHxUg', 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado', '1', 1, 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado'),
(2, 'Tarea Final', '2018-06-28', 'https://www.youtube.com/watch?v=sqM4E2mHxUg', 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado', '3', 2, 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado'),
(3, 'Tarea 1', '2018-07-27', 'https://www.youtube.com/watch?v=sqM4E2mHxUg', 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado', '1', 4, 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `InEvent` int(4) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Fecha` date NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Tutor` int(4) NOT NULL,
  `intro` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`InEvent`, `Nombre`, `Fecha`, `Imagen`, `Descripcion`, `Tipo`, `Tutor`, `intro`) VALUES
(4, 'Sistemas en tiempo real', '2018-09-20', 'Sistemas.png', 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado', '3', 2, 'Un sistema de tiempo real es un sistema informÃ¡tico que interacciona con su entorno fÃ­sico y responde a los estÃ­mulos del entorno dentro de un plazo de tiempo determinado. No basta con que las acciones del sistema sean correctas, sino que, ademÃ¡s, tienen que ejecutarse dentro de un intervalo de tiempo determinado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(4) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `nombre` text NOT NULL,
  `apellido1` text NOT NULL,
  `apellido2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `matricula`, `nombre`, `apellido1`, `apellido2`) VALUES
(2, '201322304', 'Alan Yair', 'Solano', 'Cuevas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE `quiz` (
  `idQ` int(4) NOT NULL,
  `idT` int(4) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  `A1` text NOT NULL,
  `A2` text NOT NULL,
  `A3` text NOT NULL,
  `A4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`idQ`, `idT`, `pregunta`, `respuesta`, `A1`, `A2`, `A3`, `A4`) VALUES
(1, 1, 'Cual es mejor', '1', 'LOL', 'LEL', 'LAL', 'LUL'),
(2, 1, 'Cual es peor', '1', 'LOL', 'LEL', 'LAL', 'LUL'),
(3, 2, 'Cual es indiferente', '2', 'LOL', 'LEL', 'LAL', 'LUL'),
(4, 2, 'Cual es malo', '1', 'LOL', 'LEL', '', ''),
(5, 3, 'Que es un sistema en tiempo real', '2', 'Cualquier sistema', ' Algo que interacciona con su entorno fÃ­sico', 'Un servidor', 'Una bases de datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `cargo`) VALUES
(1, 'michael yara', 'codigoadsi@gmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'alan yair', 'alan_yair_00@hotmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(3, 'mario', 'mario@gmail.com', '202cb962ac59075b964b07152d234b70', '2'),
(4, '201322304', 'alan_yair_11@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2'),
(5, 'guillermo', 'memo@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`idx`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventomedio`
--
ALTER TABLE `eventomedio`
  ADD PRIMARY KEY (`InEvent`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`InEvent`);

--
-- Indices de la tabla `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`idQ`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `idx` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventomedio`
--
ALTER TABLE `eventomedio`
  MODIFY `InEvent` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `InEvent` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `quiz`
--
ALTER TABLE `quiz`
  MODIFY `idQ` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
