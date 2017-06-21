SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Base de datos: `budastore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `budastore`.`juego` (
  `id_game` int(11) NOT NULL,
  `name_game` varchar(50) COLLATE utf8_bin NOT NULL,
  `category` varchar(100) COLLATE utf8_bin NOT NULL,
  `fabricator` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(10000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `budastore`.`juego` (`id_game`, `name_game`, `category`, `fabricator`, `description`) VALUES
(2, 'FIFA 17', 'Deporte', 'Origin', 'FIFA 17 es un videojuego de fÃºtbol desarrollado por EA Electronic publicado por EA Sports EA. y Es el 24Âº de la serie y saliÃ³ a la venta el 28 de septiembre del 2016 en NorteamÃ©rica y el 29 de septiembre para el resto del mundo.2 Este serÃ¡ el primer juego de la FIFA en la serie en emplear el motor de juego Frostbite. AdemÃ¡s, este serÃ¡ el primer videojuego de la serie que tendrÃ¡ la apariciÃ³n e interacciÃ³n de entrenadores de fÃºtbol. TambiÃ©n la incorporaciÃ³n del modo historia con Alex Hunter.'),
(4, 'Diablo3', 'ROL', 'BATTLENET', 'asdbasdgasdgasduyasdasudasds'),
(8, 'CS GO', 'FPS', 'STEAM', 'alto juego papu, +10 recomendado'),
(9, 'DISHONORED', 'Action', 'STEAM', 'alto juego papu, +10 recomendado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `budastore`.`sugerencia` (
  `idSuggest` int(11) NOT NULL,
  `tagUsr` varchar(30) COLLATE utf8_bin NOT NULL,
  `typeSuggest` varchar(60) COLLATE utf8_bin NOT NULL,
  `textSuggest` text COLLATE utf8_bin NOT NULL,
  `dateSuggest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `budastore`.`usuario` (
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `tagUsr` varchar(30) COLLATE utf8_bin NOT NULL,
  `passwd` varchar(128) COLLATE utf8_bin NOT NULL,
  `fullNameUsr` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `version`
--

CREATE TABLE `budastore`.`version` (
  `id_version` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `nameVersion` varchar(40) COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `players` int(11) NOT NULL,
  `freeCoins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `version`
--

INSERT INTO `budastore`.`version` (`id_version`, `id_game`, `nameVersion`, `price`, `online`, `players`, `freeCoins`) VALUES
(3, 2, 'Standar', 40, 0, 4, 0),
(4, 2, 'Deluxe', 50, 1, 6, 2000),
(11, 2, 'Ultimate', 60, 1, 8, 20000);

--
-- Ãndices para tablas volcadas
--

--
-- Indices de la tabla `juego`
--
ALTER TABLE `budastore`.`juego`
  ADD PRIMARY KEY (`id_game`),
  ADD KEY `FK_JUEGO` (`id_game`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `budastore`.`sugerencia`
  ADD PRIMARY KEY (`idSuggest`),
  ADD KEY `FK_sugerenciaXusuario` (`tagUsr`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `budastore`.`usuario`
  ADD PRIMARY KEY (`tagUsr`);

--
-- Indices de la tabla `version`
--
ALTER TABLE `budastore`.`version`
  ADD PRIMARY KEY (`id_version`),
  ADD KEY `FK_JUEGO` (`id_game`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `budastore`.`juego`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `sugerencia`
--
ALTER TABLE `budastore`.`sugerencia`
  MODIFY `idSuggest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `version`
--
ALTER TABLE `budastore`.`version`
  MODIFY `id_version` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sugerencia`
--
ALTER TABLE `budastore`.`sugerencia`
  ADD CONSTRAINT `FK_sugerenciaXusuario` FOREIGN KEY (`tagUsr`) REFERENCES `usuario` (`tagUsr`);

--
-- Filtros para la tabla `version`
--
ALTER TABLE `budastore`.`version`
  ADD CONSTRAINT `FK_JUEGO` FOREIGN KEY (`id_game`) REFERENCES `juego` (`id_game`);
--ENDOFFILE
