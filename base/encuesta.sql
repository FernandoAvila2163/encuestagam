-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2020 a las 21:22:50
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `induccion`
--

CREATE TABLE `induccion` (
  `id_persona` int(11) NOT NULL,
  `P1` int(11) NOT NULL,
  `P3` varchar(10) NOT NULL,
  `P3P` text NOT NULL,
  `P4` varchar(10) NOT NULL,
  `P4P` text NOT NULL,
  `P5` int(11) NOT NULL,
  `P5P` text NOT NULL,
  `P6` text NOT NULL,
  `escala` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `induccion`
--

INSERT INTO `induccion` (`id_persona`, `P1`, `P3`, `P3P`, `P4`, `P4P`, `P5`, `P5P`, `P6`, `escala`, `fecha`) VALUES
(1, 5, 'si', '', 'si4', '', 4, '', 'PLATICAS', 5, '2020-04-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juntas`
--

CREATE TABLE `juntas` (
  `id_persona` int(11) NOT NULL,
  `nombreAgen` text NOT NULL,
  `tiempoA` text NOT NULL,
  `P3` int(11) NOT NULL,
  `P5` varchar(10) NOT NULL,
  `P5P` text NOT NULL,
  `P6` varchar(10) NOT NULL,
  `P6P` varchar(200) NOT NULL,
  `P7` text NOT NULL,
  `P8` text NOT NULL,
  `P9` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juntas`
--

INSERT INTO `juntas` (`id_persona`, `nombreAgen`, `tiempoA`, `P3`, `P5`, `P5P`, `P6`, `P6P`, `P7`, `P8`, `P9`, `fecha`) VALUES
(1, 'FERNANDO AVILA ARCHUNDIA', '3-4', 5, 'si', '', '5', 'PRUEBAS', 'MEJORAR LAS VENTAS', 'PUNTIALIDAD', 10, '2020-04-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrizinduccion`
--

CREATE TABLE `matrizinduccion` (
  `id_persona` int(11) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` int(11) NOT NULL,
  `m3` int(11) NOT NULL,
  `m4` int(11) NOT NULL,
  `m5` int(11) NOT NULL,
  `m6` int(11) NOT NULL,
  `m7` int(11) NOT NULL,
  `m8` int(11) NOT NULL,
  `m9` int(11) NOT NULL,
  `m10` int(11) NOT NULL,
  `m11` int(11) NOT NULL,
  `m12` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matrizinduccion`
--

INSERT INTO `matrizinduccion` (`id_persona`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `fecha`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2020-04-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrizjuntas`
--

CREATE TABLE `matrizjuntas` (
  `id_persona` int(11) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` int(11) NOT NULL,
  `m3` int(11) NOT NULL,
  `m4` int(11) NOT NULL,
  `m5` int(11) NOT NULL,
  `m6` int(11) NOT NULL,
  `m7` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matrizjuntas`
--

INSERT INTO `matrizjuntas` (`id_persona`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `fecha`) VALUES
(1, 1, 1, 2, 2, 2, 2, 2, '2020-04-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrizplaticas`
--

CREATE TABLE `matrizplaticas` (
  `id_persona` int(11) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` int(11) NOT NULL,
  `m3` int(11) NOT NULL,
  `m4` int(11) NOT NULL,
  `m5` int(11) NOT NULL,
  `m6` int(11) NOT NULL,
  `m7` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matrizplaticas`
--

INSERT INTO `matrizplaticas` (`id_persona`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `fecha`) VALUES
(1, 3, 3, 3, 4, 4, 4, 4, '2020-04-29'),
(2, 1, 1, 1, 1, 1, 1, 1, '2020-04-30'),
(3, 3, 3, 3, 3, 2, 3, 5, '2020-04-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platicas`
--

CREATE TABLE `platicas` (
  `id_persona` int(11) NOT NULL,
  `P1` text NOT NULL,
  `P2` varchar(10) NOT NULL,
  `P3` int(10) NOT NULL,
  `P4` varchar(10) NOT NULL,
  `P4P` text NOT NULL,
  `P5` int(10) NOT NULL,
  `P5P` text NOT NULL,
  `P6` text NOT NULL,
  `P7` text NOT NULL,
  `escala` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platicas`
--

INSERT INTO `platicas` (`id_persona`, `P1`, `P2`, `P3`, `P4`, `P4P`, `P5`, `P5P`, `P6`, `P7`, `escala`, `fecha`) VALUES
(1, 'FERNANDO AVILA ARCHUNDIA', 'reciente', 4, 'si', '', 3, 'PRUEAS', 'SEGUROS DE AUTOS', 'PUNTUALIDAD', 10, '2020-04-29'),
(2, 'MICHAEL CORLEONE', '3-4', 5, 'si', '', 4, 'SON MUY CLARAS', 'COACHING', 'PUNTUALIDAD', 7, '2020-04-30'),
(3, 'ENZO FERRARI DE LA ROSA', '+4', 4, 'no', 'ES MUY COMPLEJO', 2, '', '', '', 9, '2020-04-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `induccion`
--
ALTER TABLE `induccion`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `juntas`
--
ALTER TABLE `juntas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `matrizinduccion`
--
ALTER TABLE `matrizinduccion`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `matrizjuntas`
--
ALTER TABLE `matrizjuntas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `matrizplaticas`
--
ALTER TABLE `matrizplaticas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `platicas`
--
ALTER TABLE `platicas`
  ADD PRIMARY KEY (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `induccion`
--
ALTER TABLE `induccion`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `juntas`
--
ALTER TABLE `juntas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `matrizinduccion`
--
ALTER TABLE `matrizinduccion`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `matrizjuntas`
--
ALTER TABLE `matrizjuntas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `matrizplaticas`
--
ALTER TABLE `matrizplaticas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `platicas`
--
ALTER TABLE `platicas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
