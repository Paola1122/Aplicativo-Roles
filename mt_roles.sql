-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2024 a las 03:24:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mt_roles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `Id` int(10) NOT NULL,
  `nombre_area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`Id`, `nombre_area`) VALUES
(1, 'DIRECCION DE MEJORAMIENTO Y SEGUIMIENTO DE PROCESOS'),
(2, 'DIRECCION DE PARAFISCALES'),
(3, 'DIRECCION DE PENSIONES'),
(4, 'DIRECCION TECNOLOGIAS DE LA INFORMACION'),
(5, 'SUBDIRECCION DE GESTION HUMANA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(10) NOT NULL,
  `nombre_rol` varchar(150) NOT NULL,
  `rol` varchar(150) NOT NULL,
  `id_area` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre_rol`, `rol`, `id_area`) VALUES
(1, 'OFICIAL DE SEGURIDAD DE LA INFORMACION', 'AP-PRO-001-P-OFIS', 1),
(2, 'ANALISTA DE PROCESOS', 'AP-PRO-001-P-ANAP', 1),
(3, 'ANALISTA DE PROCESOS-GESTOR RAE', 'AP-PRO-001-P-APRA', 1),
(4, 'COORDINADOR PQRFSD PARAFISCALES', 'PF-PRO-002-003-CDP', 2),
(5, 'GESTOR DE RECURSOS', 'PF-SUB-012-P-GREC', 2),
(6, 'GESTOR DE CAPACITACION Y ENTES DE CONTROL', 'PF-SUB-012-P-GCYEC', 2),
(7, 'COORDINADOR CAPACITACION Y ENTES DE CONTROL', 'PF-MAC-001-P-CCEC', 2),
(8, 'DIRECCION DE PENSIONES', 'GP-PRO-001-P-DPEN', 3),
(9, 'SUSTANCIADOR DE APELACIONES', 'GP-SUB-003-P-SUSA', 3),
(10, 'SEGUIMIENTO PLANES Y CONTRATOS', 'GP-PRO-001-P-SPLC', 3),
(11, 'CORRESPONDENCIA PDC DIRECCION', 'GP-PRO-001-P-CPDD', 3),
(12, 'COORDINADOR OPERACION TI', 'TI-PRO-000-P-COTI', 4),
(13, 'GESTOR ANALISTA DESARROLLO', 'TI-PRO-000-P-GADTI', 4),
(14, 'GESTOR ARQUITECTURA APLICACIONES', 'TI-PRO-000-P-GAATI', 4),
(15, 'SOPORTE TECNICO ESPECIALIZADO', 'TI-PRO-000-P-STETI', 4),
(16, 'GESTOR DESEMPEÑO', 'GH-PRO-002-P-GDES', 5),
(17, 'ANALISTA NOMINA Y SEGURIDAD SOCIAL', 'GH-PRO-004-P-ANOM', 5),
(18, 'SOPORTE JURIDICO SGH', 'GH-PRO-001-P-GGHU', 5),
(19, 'SUBDIRECTOR GESTION HUMANA', 'GH-PRO-000-P-SGHU', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `id_area` int(10) NOT NULL,
  `id_rol` int(10) NOT NULL,
  `jefe` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `usuario`, `pass`, `id_area`, `id_rol`, `jefe`) VALUES
(1234567, 'Prtueba', 'pp', '', 4, 1, 0),
(15171421, 'ALBERTO MARIO SOLANO JIMENEZ', 'AMSOLANO', '1234', 1, 2, 1),
(18436082, 'MARIO ALBERTO LEAL MEJIA', 'MLEAL', '1234', 5, 18, 0),
(19482529, 'FRANCISCO JAVIER SANCHEZ SANCHEZ', 'FSANCHEZ', '1234', 4, 12, 0),
(36277428, 'ALICIA INES GUZMAN MOSQUERA', 'AGUZMAN', '1234', 3, 8, 1),
(39570825, 'CONSTANZA CRISTINA DIAZ ROMERO', 'CDIAZ', '1234', 1, 3, 0),
(40075336, 'CRISTOBALINA GARZON LOZADA', 'CGARZONL', '1234', 4, 12, 1),
(42684963, 'SANDRA MARIA PUERTA ARIAS', 'SPUERTA', '1234', 5, 16, 0),
(51807530, 'GLORIA CONSUELO SARMIENTO CASTAÑEDA', 'GSARMIENTO', '1234', 1, 2, 0),
(51961193, 'FLOR MARINA GOMEZ POSADA', 'FGOMEZP', '1234', 5, 17, 0),
(52347038, 'HERIETTE EMMY GARZON RODRIGUEZ', 'HGARZON', '1234', 1, 3, 0),
(52519971, 'MARTHA JEANNETH PERALTA CAMACHO', 'MPERALTAC\r\n', '1234', 2, 4, 0),
(52526682, 'DORIS ARIZA PUENTES', 'DARIZAP', '1234', 4, 12, 0),
(79411919, 'CARLOS DANIEL LEMUS GIRALDO', 'CLEMUSG', '1234', 3, 10, 0),
(79739541, 'CESAR AUGUSTO DURAN CAMACHO', 'CDURAN', '1234', 3, 11, 0),
(79792989, 'LUIS GABRIEL GONZALEZ CUELLAR', 'LGONZALEZC', '1234', 2, 4, 0),
(91233834, 'EDGAR COBOS PARRA', 'ECOBOS', '1234', 1, 2, 0),
(93385370, 'HECTOR HORACIO CABRERA GALINDO', 'HCABRERA', '1234', 2, 4, 0),
(987654321, 'Prueba 2', 'p2', '1234', 4, 14, 0),
(1010176069, 'ANDREA DEL PILAR MESA VARGAS', 'AMESA', '1234', 2, 4, 1),
(1012363471, 'YINETH KATHERINE HORMAZA RONCANCIO', 'YHORMAZA', '1234', 3, 8, 0),
(1018409720, 'CARLOS ANDRES NARANJO DIAZ', 'CNARANJO', '1234', 5, 18, 1),
(1023953634, 'ANGIE ALEXANDRA PEREZ BROCHERO', 'APEREZB', '1234', 2, 4, 0),
(1049636322, 'MONICA ALEXANDRA RAMIREZ HERNANDEZ', 'MARAMIREZF', '1234', 3, 10, 0),
(1052383647, 'LILIANA MARCELA PULIDO VASQUEZ', 'LPULIDO', '1234', 5, 19, 0),
(1054678670, 'FRANKIN ALEXANDER MEDINA GOMEZ', 'FMEDINAG', '1234', 4, 12, 0),
(1121873885, 'EDIXON ALEXANDER PE?UELA GUZMAN', 'EPENUELAG', '1234', 4, 12, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rol_area` (`id_area`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario_rol` (`id_rol`),
  ADD KEY `FK_usuario_area` (`id_area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `FK_rol_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`Id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`Id`),
  ADD CONSTRAINT `FK_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
