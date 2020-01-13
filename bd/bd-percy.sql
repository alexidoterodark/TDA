-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2020 a las 00:49:14
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd-percy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacionesca`
--

CREATE TABLE `habitacionesca` (
  `id` varchar(8) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `pisoH` varchar(30) DEFAULT NULL,
  `numeroH` int(11) DEFAULT NULL,
  `preciohabitacion` double DEFAULT NULL,
  `imagen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitacionesca`
--

INSERT INTO `habitacionesca` (`id`, `nombre`, `lugar`, `descripcion`, `categoria`, `pisoH`, `numeroH`, `preciohabitacion`, `imagen`) VALUES
('65MU6305', 'HABITACION 111', 'PUNO', '1 ESTRELLA 1CAMA + TV + SS.HH. Privado', 'SIMPLE P', 'PRIMERO', 111, 499, '111.jpeg'),
('70UJ6580', 'HABITACION 118', 'PUNO', '1 ESTRELLA  1CAMA + TV + SS.HH. Privado', 'SIMPLE P', 'PRIMERO', 118, 999, '118.jpeg'),
('75CG1613', 'HABITACION 119', 'PIURA', '1 ESTRELLA  1CAMA + TV + SS.HH. Privado', 'SIMPLE P', 'PRIMERO', 119, 799, '119.jpeg'),
('49UJ6560', 'HABITACION 172', 'CUSCO', '1 ESTRELLA  3CAMAS + TV + SS.HH. Privado', 'SIMPLE C', 'PRIMERO', 172, 199, '172.jpeg'),
('50MU6105', 'HABITACION 123', 'LIMA', '1 ESTRELLA  1CAMA + TV + SS.HH. Privado', 'SIMPLE P', 'PRIMERO', 123, 399, '123.jpeg'),
('55MU6103', 'HABITACION 187', 'PIURA', '1 ESTRELLA  3CAMAS + TV + SS.HH. Privado', 'SIMPLE C', 'PRIMERO', 187, 399, '187.jpeg'),
('55B7P123', 'HABITACION 224', 'PIURA', '2 ESTRELLA  2CAMAS + TV + SS.HH. Privado', 'SIMPLE C', 'SEGUNDO', 224, 199, '224.jpeg'),
('49MU6303', 'HABITACION 225', 'CUSCO', '2 ESTRELLA 1CAMA + TV + SS.HH. Privado', 'SIMPLE P', 'SEGUNDO', 225, 599, '225.jpeg'),
('40MU6103', 'HABITACION 275', 'LIMA', '2 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado', 'SIMPLE M', 'SEGUNDO', 275, 399, 'jpeg'),
('55Q6FAMC', 'HABITACION 258', 'PUNO', '2 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado', 'SIMPLE M', 'SEGUNDO', 258, 599, 'jpeg'),
('LE5U7970', 'HABITACION 289', 'PIURA', '2 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado', 'SIMPLE M', 'SEGUNDO', 289, 299, '289.jpeg'),
('LE50U797', 'HABITACION 290', 'CUSCO', '4 ESTRELLA 1CAMA + TV + SS.HH. Privado + RESTAURANT', 'PERSONAL', 'SEGUNDO', 290, 899, '290.jpeg'),
('LE55U660', 'HABITACION 295', 'LIMA', '4 ESTRELLA 1CAMA + TV + SS.HH. Privado + RESTAURANT', 'PERSONAL', 'SEGUNDO', 295, 999, '295.jpeg'),
('KD55X725', 'HABITACION 300', 'PUNO', '4 ESTRELLA 3CAMAS + TV + SS.HH. Privado + PLAY', 'FAMILIAR', 'TERCERO', 300, 399, '300.jpeg'),
('75CJ7613', 'HABITACION 345', 'CUSCO', '4 ESTRELLA 2CAMAS + TV + SS.HH. Privado + PLAY', 'FAMILIAR', 'TERCERO', 345, 799, '345.Jjpeg'),
('78A83216', 'HABITACION 356', 'LIMA', '4 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + RESTAURANT', 'MATRIMONIAL', 'TERCERO', 356, 199, '356.jpeg'),
('57HY1632', 'HABITACION 375', 'PUNO', '4 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + RESTAURANT', 'MATRIMONIAL', 'TERCERO', 375, 699, '375.jpeg'),
('R3HG1613', 'HABITACION 380', 'PIURA', '4 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + RESTAURANT + PLAY', 'MATRIMONIAL', 'TERCERO', 380, 899, '380.jpeg'),
('P3HG1613', 'HABITACION 390', 'CUSCO', '4 ESTRELLA 1CAMA + TV + SS.HH. Privado + RESTAURANT + PISCINA', 'PERSONAL', 'TERCERO', 390, 799, '390.jpeg'),
('GT351632', 'HABITACION 398', 'LIMA', '4 ESTRELLA 1CAMA + TV + SS.HH. Privado + RESTAURANT + PISCINA', 'PERSONAL', 'TERCERO', 398, 999, '398.jpeg'),
('P1S56413', 'HABITACION 401', 'PUNO', '5 ESTRELLA 1CAMAS + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA', 'PERSONAL', 'CUARTO', 401, 219, '401.jpeg'),
('PH503212', 'HABITACION 413', 'PIURA', '5 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + RESTAURANT + PLAY', 'MATRIMONIAL', 'CUARTO', 413, 109, '413.jpeg'),
('SX551316', 'HABITACION 435', 'CUSCO', '5 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + RESTAURANT + PLAY', 'MATRIMONIAL', 'CUARTO', 435, 899, '435.jpeg'),
('GP051495', 'HABITACION 451', 'LIMA', '5 ESTRELLA 1CAMA + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA + ATENCION MEDICA', 'PERSONAL', 'CUARTO', 451, 1499, '451.jpeg'),
('GP061714', 'HABITACION 467', 'PUNO', '5 ESTRELLA 1CAMA + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA + ATENCION MEDICA', 'PERSONAL', 'CUARTO', 467, 1799, '467.jpeg'),
('GPSS8972', 'HABITACION 474', 'PIURA', '5 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA', 'MATRIMONIAL', 'CUARTO', 474, 899, '474.jpeg'),
('CN442417', 'HABITACION 483', 'CUSCO', '5 ESTRELLA CAMA MATRIMONIAL + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA', 'MATRIMONIAL', 'CUARTO', 483, 499, '483.jpeg'),
('CN40T618', 'HABITACION 490', 'LIMA', '5 ESTRELLA 2CAMAS + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA', 'FAMILIAR', 'CUARTO', 490, 109, '490.jpeg'),
('SY243424', 'HABITACION 497', 'PUNO', '5 ESTRELLA 3CAMAS + TV + SS.HH. Privado + PLAY + RESTAURANT + PISCINA', 'FAMILIAR', 'CUARTO', 497, 2499, '497.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
