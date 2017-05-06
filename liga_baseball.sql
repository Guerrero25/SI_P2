-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2017 a las 19:07:05
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liga_baseball`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_models`
--

CREATE TABLE IF NOT EXISTS `equipo_models` (
  `nombre` varchar(15) NOT NULL,
  `p_win` int(11) NOT NULL,
  `p_loss` int(11) NOT NULL,
  `carreras` int(11) NOT NULL,
  `permitidas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `e_div` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo_models`
--

INSERT INTO `equipo_models` (`nombre`, `p_win`, `p_loss`, `carreras`, `permitidas`, `id`, `e_div`) VALUES
('Maracaibo', 0, 1, 2, 4, 1, 1),
('Cartagenitos', 1, 0, 4, 2, 2, 1),
('Barbaros', 1, 0, 4, 2, 3, 2),
('Vikingos', 0, 1, 2, 4, 4, 2),
('Kolichas', 0, 1, 1, 2, 5, 3),
('Barecas', 1, 0, 2, 1, 6, 3),
('Tuburones', 0, 1, 1, 2, 7, 4),
('Caimanes', 1, 0, 2, 1, 8, 4),
('Real Madrid', 1, 0, 3, 2, 9, 1),
('Barcelona', 0, 1, 2, 3, 10, 1),
('Radiadors', 1, 0, 4, 2, 11, 2),
('Falcons', 0, 1, 2, 4, 12, 2),
('Shiguin', 1, 0, 4, 1, 13, 3),
('Boars', 0, 1, 1, 4, 14, 3),
('Mugiwaras', 1, 0, 6, 2, 15, 4),
('Shirohiges', 0, 1, 2, 6, 16, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador_models`
--

CREATE TABLE IF NOT EXISTS `jugador_models` (
  `id` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `posicion` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `nacionalidad` varchar(10) NOT NULL,
  `t_bate` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `carreras_limpias` int(11) NOT NULL,
  `innings_lanzados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador_models`
--

INSERT INTO `jugador_models` (`id`, `id_equipo`, `nombre`, `posicion`, `edad`, `nacionalidad`, `t_bate`, `hits`, `carreras_limpias`, `innings_lanzados`) VALUES
(1, 2, 'Omar Guerrero', 'Lanzador', 20, 'Colombia', 20, 12, 3, 21),
(2, 3, 'David Jimenez', 'Bateador', 25, 'Colombia', 22, 9, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido_models`
--

CREATE TABLE IF NOT EXISTS `partido_models` (
  `local` text NOT NULL,
  `visita` text NOT NULL,
  `m_local` int(11) NOT NULL,
  `m_visita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partido_models`
--

INSERT INTO `partido_models` (`local`, `visita`, `m_local`, `m_visita`, `fecha`, `id`) VALUES
('Maracaibo', 'Cartagenitos', 2, 4, '2017-06-05', 7),
('Real Madrid', 'Barcelona', 3, 2, '2017-06-05', 8),
('Barbaros', 'Vikingos', 4, 2, '2017-06-05', 9),
('Radiadors', 'Falcons', 4, 2, '2017-06-05', 10),
('Kolichas', 'Barecas', 1, 2, '2017-06-05', 11),
('Shiguin', 'Boars', 4, 1, '2017-06-05', 12),
('Tuburones', 'Caimanes', 1, 2, '2017-06-05', 13),
('Mugiwaras', 'Shirohiges', 6, 2, '2017-06-05', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_models`
--

CREATE TABLE IF NOT EXISTS `usuario_models` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_models`
--

INSERT INTO `usuario_models` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo_models`
--
ALTER TABLE `equipo_models`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador_models`
--
ALTER TABLE `jugador_models`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partido_models`
--
ALTER TABLE `partido_models`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_models`
--
ALTER TABLE `usuario_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partido_models`
--
ALTER TABLE `partido_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
