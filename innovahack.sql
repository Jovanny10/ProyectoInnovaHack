-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2018 a las 22:39:22
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innovahack`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `Carrera` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `Carrera`) VALUES
(2, 'Ingeniería en Electromecánica'),
(1, 'Ingeniería en Sistemas Computacionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `E-mail` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Celular` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `Talla_Playera_idTalla_Playera` int(11) NOT NULL,
  `Carrera_id` int(11) NOT NULL,
  `Institucion_id` int(11) NOT NULL,
  `Facebook` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Twitter` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Habilidades` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hobbies` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rol_idRol` int(11) NOT NULL,
  `Genero_idSexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Celular`, `Talla_Playera_idTalla_Playera`, `Carrera_id`, `Institucion_id`, `Facebook`, `Twitter`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Rol_idRol`, `Genero_idSexo`) VALUES
(14, 'Isaax', 'Hernandez', 'lopezq@gmail.com', 'q', '99999999999', 4, 1, 2, 'dfdsfsdfsdfdsf', 'sdfdsfsfsdfsdfsdfs', '1111-01-01', '', '', 1, 1),
(15, 'Ian', 'Hernandez', 'lq@gmail.com', 'a', '339955555443', 3, 2, 3, 'asasasasasas', 'sdfdfdsfsdfdfds', '2222-02-02', '', '', 1, 1),
(16, 'Jovanny', 'Leobardo Salas', 'gmail@h.com.mx', 'x', '3343232345555', 2, 2, 3, 'sdsdfdsfdsf', 'sdfdsfdsfdsf', '1029-02-02', '', '', 1, 1),
(17, 'Ian Alejandro', 'Leobardo Hernandez', 'i@gmail.com', 'w', '333245778', 4, 1, 2, 'dsdfsdfdsfdsfdsfsdfsd', 'sdfsdfsdfdsfsdfdsfds', '2222-02-02', '', '', 1, 2),
(18, 'Juan', 'Leobardo', 'h@gmail.com', 'q', '3343443445775', 4, 2, 1, 'wwweeeee', 'dfdfdfdf', '2222-02-02', '', '', 1, 1),
(22, 'Juan', 'Leobardo', 'hew@gmail.com', 'q', '4577543', 4, 2, 1, 'wwweeeee', 'dfdfdfdf', '2222-02-02', '', '', 1, 1),
(23, 'Juan', 'Leobardo', 'hew2@gmail.com', 'q', '3457099999', 4, 2, 1, 'wwweeeee', 'dfdfdfdf', '2222-02-02', '', '', 1, 1),
(25, 'Sdfsdfsfsdfsd', 'Sdfdfsfsfsdf', 'labsol@gmail.com', 'q', '3333333333', 2, 2, 1, 'sdfdsfdsfsdfdsf', 'dfsdfdsfdsfdsfdsfsdf', '2222-02-02', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idNombre` int(11) NOT NULL,
  `NombreEquipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Proyecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `idEstatus` int(11) NOT NULL,
  `Estado` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `idCalf` int(11) NOT NULL,
  `comunidad_id` int(11) NOT NULL,
  `Proyecto_id` int(11) NOT NULL,
  `Fases_idFases` int(11) NOT NULL,
  `Rubricas_idPreguntas` int(11) NOT NULL,
  `calif` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fases`
--

CREATE TABLE `fases` (
  `idFases` int(11) NOT NULL,
  `pitch` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idSexo` int(11) NOT NULL,
  `Sexo` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idSexo`, `Sexo`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hackatonedicion`
--

CREATE TABLE `hackatonedicion` (
  `id` int(11) NOT NULL,
  `Edicion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `InicioHackaton` date DEFAULT NULL,
  `FechLimiteRegProy` date DEFAULT NULL,
  `TerminoHack` date DEFAULT NULL,
  `Imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infconfiguracion`
--

CREATE TABLE `infconfiguracion` (
  `Id` int(11) NOT NULL,
  `Vertical_id` int(11) NOT NULL,
  `Fases_idFases` int(11) NOT NULL,
  `EquiposLimite` int(11) NOT NULL,
  `Estatus_idEstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `Institucion` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `Institucion`) VALUES
(2, 'Ingeniería civil'),
(3, 'Ingeniería Electromecánica'),
(1, 'Ingeniería en Sistemas Computacionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueztemporal`
--

CREATE TABLE `jueztemporal` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `E-mail` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Celular` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Carrera_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Institucion_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Facebook` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Twitter` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Talla_Playera_idTalla_Playera` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Habilidades` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hobbies` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `NombreProyecto` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `FechaRegistro` date DEFAULT NULL,
  `Vertical_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `Rol` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Rol`) VALUES
(1, 'Hacker'),
(2, 'Juez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubricas`
--

CREATE TABLE `rubricas` (
  `idPreguntas` int(11) NOT NULL,
  `Pregunta` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `Vertical_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_playera`
--

CREATE TABLE `talla_playera` (
  `idTalla_Playera` int(11) NOT NULL,
  `Talla_Playeracol` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `talla_playera`
--

INSERT INTO `talla_playera` (`idTalla_Playera`, `Talla_Playeracol`) VALUES
(2, 'CH'),
(4, 'G'),
(3, 'M'),
(1, 'XCH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `comunidad_id` int(11) NOT NULL,
  `Equipo_idNombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vertical`
--

CREATE TABLE `vertical` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `InfAsesoria` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `HackatonEdicion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idCarrera_UNIQUE` (`id`),
  ADD UNIQUE KEY `Carrera_UNIQUE` (`Carrera`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `E-mail_UNIQUE` (`E-mail`),
  ADD UNIQUE KEY `Celular_UNIQUE` (`Celular`),
  ADD KEY `fk_Comunidad_Institucion1_idx` (`Institucion_id`),
  ADD KEY `fk_Comunidad_Carrera1_idx` (`Carrera_id`),
  ADD KEY `fk_Comunidad_Rol1_idx` (`Rol_idRol`),
  ADD KEY `fk_Comunidad_Talla_Playera1_idx` (`Talla_Playera_idTalla_Playera`),
  ADD KEY `fk_Comunidad_Genero1_idx` (`Genero_idSexo`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idNombre`),
  ADD UNIQUE KEY `NombreEquipo_UNIQUE` (`NombreEquipo`),
  ADD UNIQUE KEY `Proyecto_id_UNIQUE` (`Proyecto_id`),
  ADD KEY `fk_Equipo_Proyecto1_idx` (`Proyecto_id`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`idEstatus`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`idCalf`),
  ADD KEY `fk_Calificaciones_Proyecto1_idx` (`Proyecto_id`),
  ADD KEY `fk_Calificaciones_Rubricas1_idx` (`Rubricas_idPreguntas`),
  ADD KEY `fk_Calificaciones_Fases1_idx` (`Fases_idFases`),
  ADD KEY `fk_evaluacion_comunidad1_idx` (`comunidad_id`);

--
-- Indices de la tabla `fases`
--
ALTER TABLE `fases`
  ADD PRIMARY KEY (`idFases`),
  ADD UNIQUE KEY `idFases_UNIQUE` (`idFases`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idSexo`);

--
-- Indices de la tabla `hackatonedicion`
--
ALTER TABLE `hackatonedicion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Edicion_UNIQUE` (`Edicion`);

--
-- Indices de la tabla `infconfiguracion`
--
ALTER TABLE `infconfiguracion`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_INF_Vertical1_idx` (`Vertical_id`),
  ADD KEY `fk_INF_Fases1_idx` (`Fases_idFases`),
  ADD KEY `fk_LimiteEquipos_Estatus1_idx` (`Estatus_idEstatus`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Institucion_UNIQUE` (`Institucion`);

--
-- Indices de la tabla `jueztemporal`
--
ALTER TABLE `jueztemporal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `E-mail_UNIQUE` (`E-mail`),
  ADD UNIQUE KEY `Celular_UNIQUE` (`Celular`),
  ADD UNIQUE KEY `psw_UNIQUE` (`psw`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NombreProyecto_UNIQUE` (`NombreProyecto`),
  ADD KEY `fk_Proyecto_Vertical1_idx` (`Vertical_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`),
  ADD UNIQUE KEY `Rol_UNIQUE` (`Rol`);

--
-- Indices de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  ADD PRIMARY KEY (`idPreguntas`),
  ADD KEY `fk_Preguntas_Vertical1_idx` (`Vertical_id`);

--
-- Indices de la tabla `talla_playera`
--
ALTER TABLE `talla_playera`
  ADD PRIMARY KEY (`idTalla_Playera`),
  ADD UNIQUE KEY `Talla_Playeracol_UNIQUE` (`Talla_Playeracol`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Equipo_idNombre`),
  ADD KEY `fk_Team_Equipo1_idx` (`Equipo_idNombre`),
  ADD KEY `fk_Team_comunidad1_idx` (`comunidad_id`);

--
-- Indices de la tabla `vertical`
--
ALTER TABLE `vertical`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nombre_UNIQUE` (`Nombre`),
  ADD KEY `fk_Vertical_HackatonEdicion1_idx` (`HackatonEdicion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idNombre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `idEstatus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `idCalf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fases`
--
ALTER TABLE `fases`
  MODIFY `idFases` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idSexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hackatonedicion`
--
ALTER TABLE `hackatonedicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infconfiguracion`
--
ALTER TABLE `infconfiguracion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `jueztemporal`
--
ALTER TABLE `jueztemporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  MODIFY `idPreguntas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla_playera`
--
ALTER TABLE `talla_playera`
  MODIFY `idTalla_Playera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vertical`
--
ALTER TABLE `vertical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD CONSTRAINT `fk_Comunidad_Carrera1` FOREIGN KEY (`Carrera_id`) REFERENCES `carrera` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comunidad_Genero1` FOREIGN KEY (`Genero_idSexo`) REFERENCES `genero` (`idSexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comunidad_Institucion1` FOREIGN KEY (`Institucion_id`) REFERENCES `institucion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comunidad_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comunidad_Talla_Playera1` FOREIGN KEY (`Talla_Playera_idTalla_Playera`) REFERENCES `talla_playera` (`idTalla_Playera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_Equipo_Proyecto1` FOREIGN KEY (`Proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `fk_Calificaciones_Fases1` FOREIGN KEY (`Fases_idFases`) REFERENCES `fases` (`idFases`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Calificaciones_Proyecto1` FOREIGN KEY (`Proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Calificaciones_Rubricas1` FOREIGN KEY (`Rubricas_idPreguntas`) REFERENCES `rubricas` (`idPreguntas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacion_comunidad1` FOREIGN KEY (`comunidad_id`) REFERENCES `comunidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `infconfiguracion`
--
ALTER TABLE `infconfiguracion`
  ADD CONSTRAINT `fk_INF_Fases1` FOREIGN KEY (`Fases_idFases`) REFERENCES `fases` (`idFases`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_INF_Vertical1` FOREIGN KEY (`Vertical_id`) REFERENCES `vertical` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LimiteEquipos_Estatus1` FOREIGN KEY (`Estatus_idEstatus`) REFERENCES `estatus` (`idEstatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_Proyecto_Vertical1` FOREIGN KEY (`Vertical_id`) REFERENCES `vertical` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rubricas`
--
ALTER TABLE `rubricas`
  ADD CONSTRAINT `fk_Preguntas_Vertical1` FOREIGN KEY (`Vertical_id`) REFERENCES `vertical` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `fk_Team_Equipo1` FOREIGN KEY (`Equipo_idNombre`) REFERENCES `equipo` (`idNombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Team_comunidad1` FOREIGN KEY (`comunidad_id`) REFERENCES `comunidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vertical`
--
ALTER TABLE `vertical`
  ADD CONSTRAINT `fk_Vertical_HackatonEdicion1` FOREIGN KEY (`HackatonEdicion_id`) REFERENCES `hackatonedicion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
