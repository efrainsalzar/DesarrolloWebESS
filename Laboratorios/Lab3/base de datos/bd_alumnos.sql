-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2024 a las 04:32:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cu` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `codigocarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `fotografia`, `nombre`, `apellido`, `cu`, `sexo`, `codigocarrera`) VALUES
(78, '6629bfdc85b52.png', 'Sapiente', 'Temporibus labore ', '40-9874', 'M', 35156),
(79, '6629bfdc861a5.png', 'Illo', 'Provident itaque ', '56-6442', 'F', 78574),
(80, '6629bfdc86866.png', 'Voluptas', 'Dolore cillum ', '32-8441', 'M', 35156),
(81, '6629bfdc8dd11.png', 'Alias', 'Nisi ex ullam ', '85-6541', 'F', 78574),
(82, '6629bfdc8eac3.png', 'Ut', 'Et ut ', '35-6544', 'M', 78574),
(83, '6629c0120e555.png', 'Sapiente', 'Temporibus labore ', '40-9874', 'M', 35156),
(84, '6629c0120eae3.png', 'Illo', 'Provident itaque ', '56-6442', 'F', 78574),
(85, '6629c0120f01e.png', 'Voluptas', 'Dolore cillum ', '32-8441', 'M', 35156),
(86, '6629c0120f4de.png', 'Alias', 'Nisi ex ullam ', '85-6541', 'F', 78574),
(87, '6629c0120fba1.png', 'Ut', 'Et ut ', '35-6544', 'M', 78574);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `carrera`) VALUES
(35156, 'Sistemas'),
(78574, 'Computacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigocarrera` (`codigocarrera`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`codigocarrera`) REFERENCES `carrera` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
