-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2025 a las 18:45:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuadrado_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadrados`
--

CREATE TABLE `cuadrados` (
  `id_cuadrado` int(11) NOT NULL,
  `lado` float NOT NULL,
  `area` float NOT NULL,
  `perimetro` float NOT NULL,
  `detalle` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cuadrados`
--

INSERT INTO `cuadrados` (`id_cuadrado`, `lado`, `area`, `perimetro`, `detalle`, `created_at`) VALUES
(1, 2, 4, 4, '2025-10-16', '2025-10-16 14:43:30'),
(2, 24, 576, 96, '2025-10-16', '2025-10-16 14:43:30'),
(3, 29, 4, 4, '2025-10-16', '2025-10-16 14:43:30'),
(4, 24, 841, 116, '2025-10-16', '2025-10-16 14:43:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuadrados`
--
ALTER TABLE `cuadrados`
  ADD PRIMARY KEY (`id_cuadrado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuadrados`
--
ALTER TABLE `cuadrados`
  MODIFY `id_cuadrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
