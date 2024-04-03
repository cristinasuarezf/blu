-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 18:31:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `numControl` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `correoInstitucional` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `carrera` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Disparadores `alumno`
--
DELIMITER $$
CREATE TRIGGER `tr_insertarAlum` BEFORE INSERT ON `alumno` FOR EACH ROW begin
insert into bitacora(usuario, actividad, fecha, ID, nombre, apellidoP, apellidoM, correo, telefono)
	values(user(), 'Alta', now(), new.numControl, new.nombre, new.apellido1, new.apellido2, new.correoInstitucional, new.celular); 
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `usuario` varchar(45) DEFAULT NULL,
  `actividad` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoP` varchar(45) DEFAULT NULL,
  `apellidoM` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `nom_ant` varchar(45) DEFAULT NULL,
  `apellidoP_ant` varchar(45) DEFAULT NULL,
  `apellidoM_ant` varchar(45) DEFAULT NULL,
  `correo_ant` varchar(45) DEFAULT NULL,
  `tel_ant` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idconsulta` int(11) NOT NULL,
  `NumControl` int(11) NOT NULL,
  `idPsicologo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_alumno`
--

CREATE TABLE `cuenta_alumno` (
  `idCuentaA` int(11) NOT NULL,
  `numcontrol` int(11) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_psicologo`
--

CREATE TABLE `cuenta_psicologo` (
  `idCuentaP` int(11) NOT NULL,
  `idPsicologo` int(11) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuenta_psicologo`
--

INSERT INTO `cuenta_psicologo` (`idCuentaP`, `idPsicologo`, `pass`) VALUES
(1, 36223552, 12345),
(2, 45678945, 123456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `idejercicio` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `nombreEjercicio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`idejercicio`, `tipo`, `nombreEjercicio`) VALUES
(50005, 'Respiración', 'Respiración con globo'),
(50006, 'Interactivo', 'Colores alrededor'),
(50007, 'Meditación', 'Meditación guiada'),
(50008, 'Físico', 'Estiramientos'),
(50009, 'Mental', 'Gimnasia cerebral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `cve` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`cve`, `fecha`) VALUES
(1, '2022-11-25 08:20:30'),
(2, '2022-11-25 08:20:40'),
(3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologo`
--

CREATE TABLE `psicologo` (
  `idpsicologo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `psicologo`
--

INSERT INTO `psicologo` (`idpsicologo`, `nombre`, `apellido1`, `apellido2`, `correo`, `telefono`) VALUES
(36223552, 'Romina', 'Corral', 'Gómez', 'RoCoGo@gmail.com', '6144207415'),
(45678945, 'Isabel', 'Franco', 'Díaz', 'lsaFDiaz@gmail.com', '4789621');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporteejercicios`
--

CREATE TABLE `reporteejercicios` (
  `idAlumnoEjercicio` int(11) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `idEjercicio` int(11) DEFAULT NULL,
  `NumControl` int(11) DEFAULT NULL,
  `comentario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `idtest` int(11) NOT NULL,
  `resultados` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `numControl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`numControl`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idconsulta`),
  ADD KEY `fk_numControl` (`NumControl`),
  ADD KEY `fk_idPsicologo` (`idPsicologo`);

--
-- Indices de la tabla `cuenta_alumno`
--
ALTER TABLE `cuenta_alumno`
  ADD PRIMARY KEY (`idCuentaA`),
  ADD KEY `numcontrol` (`numcontrol`);

--
-- Indices de la tabla `cuenta_psicologo`
--
ALTER TABLE `cuenta_psicologo`
  ADD PRIMARY KEY (`idCuentaP`),
  ADD KEY `idPsicologo` (`idPsicologo`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`idejercicio`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`cve`);

--
-- Indices de la tabla `psicologo`
--
ALTER TABLE `psicologo`
  ADD PRIMARY KEY (`idpsicologo`);

--
-- Indices de la tabla `reporteejercicios`
--
ALTER TABLE `reporteejercicios`
  ADD PRIMARY KEY (`idAlumnoEjercicio`),
  ADD KEY `NumControl` (`NumControl`),
  ADD KEY `fk_id_Ejercicio` (`idEjercicio`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`idtest`),
  ADD KEY `fk_numControlT` (`numControl`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idconsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `cuenta_alumno`
--
ALTER TABLE `cuenta_alumno`
  MODIFY `idCuentaA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `cuenta_psicologo`
--
ALTER TABLE `cuenta_psicologo`
  MODIFY `idCuentaP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `cve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `psicologo`
--
ALTER TABLE `psicologo`
  MODIFY `idpsicologo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45678974;

--
-- AUTO_INCREMENT de la tabla `reporteejercicios`
--
ALTER TABLE `reporteejercicios`
  MODIFY `idAlumnoEjercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1041;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `idtest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_idPsicologo` FOREIGN KEY (`idPsicologo`) REFERENCES `psicologo` (`idpsicologo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_numControl` FOREIGN KEY (`NumControl`) REFERENCES `alumno` (`numControl`);

--
-- Filtros para la tabla `cuenta_alumno`
--
ALTER TABLE `cuenta_alumno`
  ADD CONSTRAINT `cuenta_alumno_ibfk_1` FOREIGN KEY (`numcontrol`) REFERENCES `alumno` (`numControl`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuenta_psicologo`
--
ALTER TABLE `cuenta_psicologo`
  ADD CONSTRAINT `cuenta_psicologo_ibfk_1` FOREIGN KEY (`idPsicologo`) REFERENCES `psicologo` (`idpsicologo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporteejercicios`
--
ALTER TABLE `reporteejercicios`
  ADD CONSTRAINT `NumControl` FOREIGN KEY (`NumControl`) REFERENCES `alumno` (`numControl`),
  ADD CONSTRAINT `fk_id_Ejercicio` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idejercicio`);

--
-- Filtros para la tabla `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fk_numControlT` FOREIGN KEY (`numControl`) REFERENCES `alumno` (`numControl`),
  ADD CONSTRAINT `fk_numCoontrol` FOREIGN KEY (`numControl`) REFERENCES `alumno` (`numControl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
