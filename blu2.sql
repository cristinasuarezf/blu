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
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`numControl`, `nombre`, `apellido1`, `apellido2`, `correoInstitucional`, `celular`, `genero`, `carrera`) VALUES
(4865, 'Venustiano', 'Carranza', 'Garza', 'lVenusCarr@chihuahua2.tecnm.mx', '6271520142', 'F', 'SISTEMAS'),
(12345, 'CRISTINA', 'FRANCO', 'TERRAZAS', 'cfrancosuarez@hotmail.com', '6141974031', 'F', 'SISTEMAS'),
(20550123, 'Lin', 'Zermeño', 'Betancourt', 'cizermeno@gmail.com', '6142737852', 'O', 'INFORMATICA'),
(20550359, 'Alexia', 'Mireles', 'Maldonado', 'alexia_elf@outlook.com', '6142813924', 'F', 'SISTEMAS'),
(20550387, 'Kaleb', 'Ruelas', 'Loo', '20550387@gmail.com', '6141301166', 'M', 'SISTEMAS'),
(20550395, 'Alan', 'Montes', 'Silva', 'alanjms15@gmail.com', '6143854835', 'M', 'SISTEMAS'),
(20550409, 'José Pablo', 'Aguirre', 'Rivera', 'josepabloaguirre02@gmail.com', '614 342 0338', 'M', 'SISTEMAS'),
(20550731, 'Cristina', 'Suárez', 'Franco', '20550731@gmail.com', '6143336699', 'F', 'INFORMATICA'),
(20550733, 'Adriana', 'Medina', 'Nuñez', '20550733@gmail.com', '6142754274', 'F', 'INFORMATICA'),
(20550748, 'Fernanda', 'Vázquez', 'Muñoz', '20550748@gmail.com', '6143575600', 'F', 'INFORMATICA'),
(20550789, 'Jimmy', 'Ortega', 'Razo', 'l20550789@mail.com', '6145236970', 'M', 'INFORMATICA'),
(69874587, 'Jazmin', 'Ramos', 'Terrazas', 'L69874587@chihuahua2.tecnm.mx', '6145879632', 'F', 'INFORMATICA'),
(96548736, 'Andrea', 'López', 'García', 'L96548736@chihuahua2.tecnm.mx', '6141876541', 'F', 'SISTEMAS');

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

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`usuario`, `actividad`, `fecha`, `ID`, `nombre`, `apellidoP`, `apellidoM`, `correo`, `telefono`, `nom_ant`, `apellidoP_ant`, `apellidoM_ant`, `correo_ant`, `tel_ant`) VALUES
('root@localhost', 'Alta', '2023-05-17 12:59:05', 4865, 'Venustiano', 'Carranza', 'Garza', 'lVenusCarr@chihuahua2.tecnm.mx', '6271520142', NULL, NULL, NULL, NULL, NULL);

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

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idconsulta`, `NumControl`, `idPsicologo`, `fecha`, `hora`) VALUES
(181, 20550748, 36223552, NULL, NULL),
(191, 20550748, 36223552, NULL, NULL),
(192, 20550731, 36223552, NULL, NULL),
(193, 20550395, 45678945, NULL, NULL),
(194, 20550748, 36223552, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_alumno`
--

CREATE TABLE `cuenta_alumno` (
  `idCuentaA` int(11) NOT NULL,
  `numcontrol` int(11) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuenta_alumno`
--

INSERT INTO `cuenta_alumno` (`idCuentaA`, `numcontrol`, `pass`) VALUES
(4, 20550748, '12345'),
(5, 20550733, '123456'),
(6, 20550731, '12345'),
(7, 20550387, '12345'),
(14, 20550789, '1245'),
(15, 96548736, '12345'),
(16, 69874587, '12345'),
(17, 12345, 'CARLOSELI23'),
(18, 20550123, 'Popipupe1234'),
(19, 20550409, 'Jp4gu1rr3'),
(20, 20550359, 'j@5h&tyl3r'),
(21, 20550395, 'a1234');

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

--
-- Volcado de datos para la tabla `reporteejercicios`
--

INSERT INTO `reporteejercicios` (`idAlumnoEjercicio`, `fecha`, `calificacion`, `idEjercicio`, `NumControl`, `comentario`) VALUES
(1006, '02/12/22', 2, 50005, 20550748, 'bien'),
(1007, '04/12/22', 1, 50006, 20550748, 'mal'),
(1008, '05/12/22', 5, 50007, 20550748, 'Chido'),
(1009, '06/12/22', 5, 50007, 20550748, 'Me siento mas tranquila'),
(1015, '06/12/22', 4, 50005, 20550748, 'Me siento mejor'),
(1017, '07/12/22', 2, 50005, 20550748, 'no me ayudó'),
(1018, '07/12/22', 5, 50005, 20550748, 'Mejor que ahorita'),
(1019, '08/12/22', 4, 50006, 20550387, 'Me siento mas tranquilo'),
(1021, '2023-01-01', 5, 50005, 20550748, 'pruab del insert'),
(1022, '21/04/23', 2, 50005, 20550748, 'prueba'),
(1023, '21/04/23', 2, 50005, 20550748, 'prueba2'),
(1024, '21/04/23', 3, 50005, 20550789, 'prueba3'),
(1027, '24/04/23', 2, 50005, 20550748, 'prueba'),
(1029, '24/04/23', 5, 50005, 12345, 'Mucho mejor'),
(1030, '24/04/23', 4, 50006, 12345, 'Mejor'),
(1031, '24/04/23', 3, 50007, 12345, 'Bien'),
(1033, '24/04/23', 2, 50007, 20550748, 'prueba'),
(1034, '24/04/23', 2, 50008, 12345, 'Más relajada'),
(1035, '24/04/23', 1, 50009, 12345, 'Bien bien'),
(1036, '24/04/23', 5, 50009, 20550731, 'bien'),
(1037, '27/04/23', 3, 50005, 20550733, 'aegjhjk'),
(1038, '27/04/23', 2, 50008, 20550733, 'dfloigfcv'),
(1039, '27/04/23', 5, 50005, 20550748, 'mejor'),
(1040, '17/05/23', 4, 50009, 20550748, 'bien');

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
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`idtest`, `resultados`, `fecha`, `numControl`) VALUES
(50, 25, '2022-12-06', 20550748),
(52, 35, '2022-12-07', 20550748),
(53, 18, '2022-12-07', 20550748),
(58, 33, '2022-12-08', 20550387),
(59, 21, '2023-04-21', 20550748),
(60, 21, '2023-04-21', 20550789),
(61, 6, '2023-04-24', 12345),
(62, 12, '2023-04-24', 20550731),
(63, 11, '2023-04-27', 20550733);

--
-- Índices para tablas volcadas
--

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
