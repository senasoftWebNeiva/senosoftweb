-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 05:25:35
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juego_bug`
--
CREATE DATABASE IF NOT EXISTS `juego_bug` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `juego_bug`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acusacion`
--

CREATE TABLE `acusacion` (
  `id` int(11) NOT NULL,
  `contenido` text NOT NULL,
  `partida_jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria` enum('Programador','Modulo','Error') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartasasignadas`
--

CREATE TABLE `cartasasignadas` (
  `id` int(11) NOT NULL,
  `jugador` int(11) NOT NULL,
  `cartas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidajugador`
--

CREATE TABLE `partidajugador` (
  `id` int(11) NOT NULL,
  `partida` int(11) NOT NULL,
  `cartas_jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

CREATE TABLE `partidas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(5) NOT NULL,
  `estado` enum('Curso','Terminada') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`id`, `codigo`, `estado`) VALUES
(2, 'c1BAa', 'Terminada'),
(4, '57e1F', 'Curso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `contenido` text NOT NULL,
  `partida_jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acusacion`
--
ALTER TABLE `acusacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_acusacion_partidajugador_idx` (`partida_jugador`);

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cartasasignadas`
--
ALTER TABLE `cartasasignadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cartas_asignadas_idx` (`jugador`),
  ADD KEY `fk_cartas_jugador_idx` (`cartas`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidajugador`
--
ALTER TABLE `partidajugador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_partidajugador_cartasasignadas_idx` (`cartas_jugador`),
  ADD KEY `fk_partidajugador_partida_idx` (`partida`);

--
-- Indices de la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_preguntas_partidajugador_idx` (`partida_jugador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acusacion`
--
ALTER TABLE `acusacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cartasasignadas`
--
ALTER TABLE `cartasasignadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partidajugador`
--
ALTER TABLE `partidajugador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partidas`
--
ALTER TABLE `partidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acusacion`
--
ALTER TABLE `acusacion`
  ADD CONSTRAINT `fk_acusacion_partidajugador` FOREIGN KEY (`partida_jugador`) REFERENCES `partidajugador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cartasasignadas`
--
ALTER TABLE `cartasasignadas`
  ADD CONSTRAINT `fk_cartas_asignadas` FOREIGN KEY (`jugador`) REFERENCES `jugador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cartas_jugador` FOREIGN KEY (`cartas`) REFERENCES `cartas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `partidajugador`
--
ALTER TABLE `partidajugador`
  ADD CONSTRAINT `fk_partidajugador_cartasasignadas` FOREIGN KEY (`cartas_jugador`) REFERENCES `cartasasignadas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_partidajugador_partida` FOREIGN KEY (`partida`) REFERENCES `partidas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `fk_preguntas_partidajugador` FOREIGN KEY (`partida_jugador`) REFERENCES `partidajugador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
