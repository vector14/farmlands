-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2018 a las 14:43:38
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmlandsdb`
--
CREATE DATABASE IF NOT EXISTS `farmlandsdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `farmlandsdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `DOCUMENTO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `CIUDAD` varchar(30) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `TELEFONO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `administrador`
--

TRUNCATE TABLE `administrador`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biologo`
--

DROP TABLE IF EXISTS `biologo`;
CREATE TABLE `biologo` (
  `DOCUMENTO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `DIRECCION` varchar(40) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `EDAD` tinyint(4) NOT NULL,
  `CUIDAD` varchar(30) NOT NULL,
  `TIPO_DOCUMENTO` varchar(15) NOT NULL,
  `ENTIDAD_PROVENIENTE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `biologo`
--

TRUNCATE TABLE `biologo`;
--
-- Volcado de datos para la tabla `biologo`
--

INSERT INTO `biologo` (`DOCUMENTO`, `NOMBRE`, `APELLIDO`, `DIRECCION`, `TELEFONO`, `EDAD`, `CUIDAD`, `TIPO_DOCUMENTO`, `ENTIDAD_PROVENIENTE`) VALUES
(0, 'qqqq', 'qqqqq', '232', 333, 127, 'sdsds', 'cc', 'scsc'),
(111, 'juan', 'guayana', 'csaas', 3333, 33, 'Bogota', 'C.C', 'Micasa'),
(232323, 'sdsd', 'silva', '232', 343, 127, 'sdsds', 'cc', 'eere'),
(737337, 'jose', 'silva', 'erwee', 454, 23, 'dfd', 'cc', 'eere'),
(788283, 'buitrago', 'wew', '232', 232, 23, 'sdsds', 'cc', 'eere');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacioncomprador`
--

DROP TABLE IF EXISTS `calificacioncomprador`;
CREATE TABLE `calificacioncomprador` (
  `ID_CALIFICACION` int(11) NOT NULL,
  `PUNTUACION` tinyint(4) NOT NULL,
  `COMENTARIO` text NOT NULL,
  `GRANJERO` int(11) NOT NULL,
  `COMPRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `calificacioncomprador`
--

TRUNCATE TABLE `calificacioncomprador`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciongranjero`
--

DROP TABLE IF EXISTS `calificaciongranjero`;
CREATE TABLE `calificaciongranjero` (
  `ID_CALIFICACION` int(11) NOT NULL,
  `PUNTUACION` tinyint(4) NOT NULL,
  `COMENTARIO` text NOT NULL,
  `GRANJERO` int(11) NOT NULL,
  `COMPRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `calificaciongranjero`
--

TRUNCATE TABLE `calificaciongranjero`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador`
--

DROP TABLE IF EXISTS `comprador`;
CREATE TABLE `comprador` (
  `DOCUMENTO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `EDAD` tinyint(4) NOT NULL,
  `TIPO_DOCUMENTO` varchar(15) NOT NULL,
  `CIUDAD` varchar(30) NOT NULL,
  `DIRECCION` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `comprador`
--

TRUNCATE TABLE `comprador`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

DROP TABLE IF EXISTS `cultivo`;
CREATE TABLE `cultivo` (
  `ID_CULTIVO` int(11) NOT NULL,
  `TITULO` varchar(30) NOT NULL,
  `ESTADO` varchar(15) NOT NULL,
  `CLIMA_ACTUAL` varchar(15) NOT NULL,
  `AREA_CULTIVO` int(11) NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `PRODUCTO` int(11) NOT NULL,
  `GRANJERO` int(11) NOT NULL,
  `ID_GRANJA` int(11) NOT NULL,
  `NIVEL_DEL_MAR` int(11) NOT NULL,
  `SECCIONES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `cultivo`
--

TRUNCATE TABLE `cultivo`;
--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`ID_CULTIVO`, `TITULO`, `ESTADO`, `CLIMA_ACTUAL`, `AREA_CULTIVO`, `FECHA_INICIO`, `PRODUCTO`, `GRANJERO`, `ID_GRANJA`, `NIVEL_DEL_MAR`, `SECCIONES`) VALUES
(10, 'papapastusa', 'BUENO', 'calido', 4000, '2018-11-09', 6, 737337, 4, 232, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `id_depa` int(11) NOT NULL,
  `departamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `departamento`
--

TRUNCATE TABLE `departamento`;
--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depa`, `departamento`) VALUES
(5, 'ANTIOQUIA'),
(8, 'ATLANTICO'),
(11, 'BOGOTA, D.C.'),
(13, 'BOLIVAR'),
(15, 'BOYACA'),
(17, 'CALDAS'),
(18, 'CAQUETA'),
(19, 'CAUCA'),
(20, 'CESAR'),
(23, 'CORDOBA'),
(25, 'CUNDINAMARCA'),
(27, 'CHOCO'),
(41, 'HUILA'),
(44, 'LA GUAJIRA'),
(47, 'MAGDALENA'),
(50, 'META'),
(52, 'NARINO'),
(54, 'NORTE DE SANTANDER'),
(63, 'QUINDIO'),
(66, 'RISARALDA'),
(68, 'SANTANDER'),
(70, 'SUCRE'),
(73, 'TOLIMA'),
(76, 'VALLE DEL CAUCA'),
(81, 'ARAUCA'),
(85, 'CASANARE'),
(86, 'PUTUMAYO'),
(88, 'ARCHIPIELAGO DE SAN ANDRES, PROVIDENCIA Y SANTA CATALINA'),
(91, 'AMAZONAS'),
(94, 'GUAINIA'),
(95, 'GUAVIARE'),
(97, 'VAUPES'),
(99, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_administrador_biologo`
--

DROP TABLE IF EXISTS `detalles_administrador_biologo`;
CREATE TABLE `detalles_administrador_biologo` (
  `DOCUMENTO_BIOLOGO` int(11) NOT NULL,
  `DOCUMENTO_ADMINISTRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_administrador_biologo`
--

TRUNCATE TABLE `detalles_administrador_biologo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_administrador_comprador`
--

DROP TABLE IF EXISTS `detalles_administrador_comprador`;
CREATE TABLE `detalles_administrador_comprador` (
  `DOCUMENTO_COMPRADOR` int(11) NOT NULL,
  `DOCUMENTO_ADMINISTRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_administrador_comprador`
--

TRUNCATE TABLE `detalles_administrador_comprador`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_administrador_granjero`
--

DROP TABLE IF EXISTS `detalles_administrador_granjero`;
CREATE TABLE `detalles_administrador_granjero` (
  `DOCUMENTO_GRANJERO` int(11) NOT NULL,
  `DOCUMENTO_ADMINISTRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_administrador_granjero`
--

TRUNCATE TABLE `detalles_administrador_granjero`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_manipulacion_cultivo`
--

DROP TABLE IF EXISTS `detalles_manipulacion_cultivo`;
CREATE TABLE `detalles_manipulacion_cultivo` (
  `ID_CULTIVO` int(11) NOT NULL,
  `ID_MANIPULACION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_manipulacion_cultivo`
--

TRUNCATE TABLE `detalles_manipulacion_cultivo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_producto_cultivo`
--

DROP TABLE IF EXISTS `detalles_producto_cultivo`;
CREATE TABLE `detalles_producto_cultivo` (
  `ID_CULTIVO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_producto_cultivo`
--

TRUNCATE TABLE `detalles_producto_cultivo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_producto_granjero`
--

DROP TABLE IF EXISTS `detalles_producto_granjero`;
CREATE TABLE `detalles_producto_granjero` (
  `DOCUMENTO_GRANJERO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_producto_granjero`
--

TRUNCATE TABLE `detalles_producto_granjero`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_recurso_cultivo`
--

DROP TABLE IF EXISTS `detalles_recurso_cultivo`;
CREATE TABLE `detalles_recurso_cultivo` (
  `ID_RECURSO` int(11) NOT NULL,
  `ID_CULTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_recurso_cultivo`
--

TRUNCATE TABLE `detalles_recurso_cultivo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_recurso_granjero`
--

DROP TABLE IF EXISTS `detalles_recurso_granjero`;
CREATE TABLE `detalles_recurso_granjero` (
  `DOCUMENTO_GRANJERO` int(11) NOT NULL,
  `ID_RECURSO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_recurso_granjero`
--

TRUNCATE TABLE `detalles_recurso_granjero`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_subasta_comprador`
--

DROP TABLE IF EXISTS `detalles_subasta_comprador`;
CREATE TABLE `detalles_subasta_comprador` (
  `DOCUMENTO_COMPRADOR` int(11) NOT NULL,
  `ID_SUBASTA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_subasta_comprador`
--

TRUNCATE TABLE `detalles_subasta_comprador`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_variable_cultivo`
--

DROP TABLE IF EXISTS `detalles_variable_cultivo`;
CREATE TABLE `detalles_variable_cultivo` (
  `ID_CULTIVO` int(11) NOT NULL,
  `ID_VARIABLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `detalles_variable_cultivo`
--

TRUNCATE TABLE `detalles_variable_cultivo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `granja`
--

DROP TABLE IF EXISTS `granja`;
CREATE TABLE `granja` (
  `ID_GRANJA` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `TERRENO` int(11) NOT NULL,
  `PISO_TERMICO` varchar(20) NOT NULL,
  `UBICACION` varchar(50) NOT NULL,
  `PRODUCTO_ESPECIALIZADO` varchar(20) NOT NULL,
  `GRANJERO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `granja`
--

TRUNCATE TABLE `granja`;
--
-- Volcado de datos para la tabla `granja`
--

INSERT INTO `granja` (`ID_GRANJA`, `NOMBRE`, `TERRENO`, `PISO_TERMICO`, `UBICACION`, `PRODUCTO_ESPECIALIZADO`, `GRANJERO`) VALUES
(4, 'elpollito', 34, 'calido', 'neiva', 'papa', 737337);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `granjero`
--

DROP TABLE IF EXISTS `granjero`;
CREATE TABLE `granjero` (
  `DOCUMENTO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `TIPO_DOCUMENTO` varchar(15) NOT NULL,
  `MUNICIPIO` varchar(20) NOT NULL,
  `DEPARTAMENTO` varchar(20) NOT NULL,
  `EDAD` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `granjero`
--

TRUNCATE TABLE `granjero`;
--
-- Volcado de datos para la tabla `granjero`
--

INSERT INTO `granjero` (`DOCUMENTO`, `NOMBRE`, `APELLIDO`, `TIPO_DOCUMENTO`, `MUNICIPIO`, `DEPARTAMENTO`, `EDAD`) VALUES
(737337, 'jose', 'silva', 'cc', 'bo', 'cundinamarca', 23),
(987654324, 'qqqq', 'qqqqq', 'cc', 'eee', 'eee', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manipulacion_de_cultivo`
--

DROP TABLE IF EXISTS `manipulacion_de_cultivo`;
CREATE TABLE `manipulacion_de_cultivo` (
  `ID_MANIPULACION` int(11) NOT NULL,
  `TIPO_MANIPULACION` varchar(15) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `BIOLOGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `manipulacion_de_cultivo`
--

TRUNCATE TABLE `manipulacion_de_cultivo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra`
--

DROP TABLE IF EXISTS `muestra`;
CREATE TABLE `muestra` (
  `ID_MUESTRA` int(11) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `FECHA_MUESTRA` date NOT NULL,
  `SECCION_CULTIVO` int(11) NOT NULL,
  `PH` float(11,0) NOT NULL,
  `EXCAVACION` int(11) NOT NULL,
  `TEMPERATURA` int(11) NOT NULL,
  `HUMEDAD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `muestra`
--

TRUNCATE TABLE `muestra`;
--
-- Volcado de datos para la tabla `muestra`
--

INSERT INTO `muestra` (`ID_MUESTRA`, `DESCRIPCION`, `FECHA_MUESTRA`, `SECCION_CULTIVO`, `PH`, `EXCAVACION`, `TEMPERATURA`, `HUMEDAD`) VALUES
(14, 'nanaznn', '2018-10-20', 0, 2, 23, 23, 'humedo'),
(15, 'es narnaja se la comen los conejos', '2018-10-24', 0, 2, 3, 3, 'seco'),
(16, 'es narnaja se la comen los conejos', '2018-10-21', 0, 2, 3, 2, 'humedo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestrap`
--

DROP TABLE IF EXISTS `muestrap`;
CREATE TABLE `muestrap` (
  `ID_PLANTA` int(11) NOT NULL,
  `PERIODO` int(11) NOT NULL,
  `NUMERO_HOJAS` int(11) NOT NULL,
  `FLORES` int(11) NOT NULL,
  `ALTURA` int(11) NOT NULL,
  `GROSOR` int(11) NOT NULL,
  `TAMANO_TUBERCULO` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `DESCRIPCION` varchar(30) NOT NULL,
  `SECCION_CULTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `muestrap`
--

TRUNCATE TABLE `muestrap`;
--
-- Volcado de datos para la tabla `muestrap`
--

INSERT INTO `muestrap` (`ID_PLANTA`, `PERIODO`, `NUMERO_HOJAS`, `FLORES`, `ALTURA`, `GROSOR`, `TAMANO_TUBERCULO`, `FECHA`, `DESCRIPCION`, `SECCION_CULTIVO`) VALUES
(34, 0, 23, 23, 23, 23, 23, '2018-10-06', 'es narnaja se la comen los con', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra_prueba`
--

DROP TABLE IF EXISTS `muestra_prueba`;
CREATE TABLE `muestra_prueba` (
  `ID_MUESTRA` int(11) NOT NULL,
  `PH` float NOT NULL,
  `TEMPERATURA_A` int(11) NOT NULL,
  `TEMPERATURA_M` int(11) NOT NULL,
  `HUMEDAD` int(11) NOT NULL,
  `PRESION_ATMOSFERICA` int(11) NOT NULL,
  `FECHA_MUESTRA` date NOT NULL,
  `COLOR_HOJA` varchar(7) NOT NULL,
  `SECCION_CULTIVO` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `muestra_prueba`
--

TRUNCATE TABLE `muestra_prueba`;
--
-- Volcado de datos para la tabla `muestra_prueba`
--

INSERT INTO `muestra_prueba` (`ID_MUESTRA`, `PH`, `TEMPERATURA_A`, `TEMPERATURA_M`, `HUMEDAD`, `PRESION_ATMOSFERICA`, `FECHA_MUESTRA`, `COLOR_HOJA`, `SECCION_CULTIVO`) VALUES
(9, 3.7, 18, 18, 18, 76, '2018-11-09', '#e9ffe8', 'cu_10_2'),
(10, 3.7, 233, 32, 232, 232, '2018-11-08', '#e9feea', 'cu_10_5'),
(11, 3.7, 232, 232, 232, 232, '2018-11-15', '#eff8f0', 'cu_10_8'),
(12, 3.7, 34, 34, 34, 343, '2018-11-15', '#efffe8', 'cu_10_4'),
(13, 3.5, 45, 45, 45, 46, '2018-11-23', '#ebffe8', 'cu_10_9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

DROP TABLE IF EXISTS `municipio`;
CREATE TABLE `municipio` (
  `id_mun` int(11) NOT NULL,
  `id_depa` int(11) NOT NULL,
  `municipio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `municipio`
--

TRUNCATE TABLE `municipio`;
--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_mun`, `id_depa`, `municipio`) VALUES
(1, 5, 'Abriaquí'),
(2, 50, 'Acacías'),
(3, 27, 'Acandí'),
(4, 41, 'Acevedo'),
(5, 13, 'Achí'),
(6, 41, 'Agrado'),
(7, 25, 'Agua de Dios'),
(8, 20, 'Aguachica'),
(9, 68, 'Aguada'),
(10, 17, 'Aguadas'),
(11, 85, 'Aguazul'),
(12, 20, 'Agustín Codazzi'),
(13, 41, 'Aipe'),
(14, 18, 'Albania'),
(17, 25, 'Albán'),
(18, 52, 'Albán (San José)'),
(19, 76, 'Alcalá'),
(20, 5, 'Alejandria'),
(21, 47, 'Algarrobo'),
(22, 41, 'Algeciras'),
(23, 19, 'Almaguer'),
(24, 15, 'Almeida'),
(25, 73, 'Alpujarra'),
(26, 41, 'Altamira'),
(27, 27, 'Alto Baudó (Pie de Pato)'),
(28, 13, 'Altos del Rosario'),
(29, 73, 'Alvarado'),
(30, 5, 'Amagá'),
(31, 5, 'Amalfi'),
(32, 73, 'Ambalema'),
(33, 25, 'Anapoima'),
(34, 52, 'Ancuya'),
(35, 76, 'Andalucía'),
(36, 5, 'Andes'),
(37, 5, 'Angelópolis'),
(38, 5, 'Angostura'),
(39, 25, 'Anolaima'),
(40, 5, 'Anorí'),
(41, 17, 'Anserma'),
(42, 76, 'Ansermanuevo'),
(43, 73, 'Anzoátegui'),
(44, 5, 'Anzá'),
(45, 5, 'Apartadó'),
(46, 25, 'Apulo'),
(47, 66, 'Apía'),
(48, 15, 'Aquitania'),
(49, 47, 'Aracataca'),
(50, 17, 'Aranzazu'),
(51, 68, 'Aratoca'),
(52, 81, 'Arauca'),
(53, 81, 'Arauquita'),
(54, 25, 'Arbeláez'),
(55, 52, 'Arboleda (Berruecos)'),
(56, 54, 'Arboledas'),
(57, 5, 'Arboletes'),
(58, 15, 'Arcabuco'),
(59, 13, 'Arenal'),
(60, 5, 'Argelia'),
(63, 47, 'Ariguaní (El Difícil)'),
(64, 13, 'Arjona'),
(65, 5, 'Armenia'),
(67, 73, 'Armero (Guayabal)'),
(68, 13, 'Arroyohondo'),
(69, 20, 'Astrea'),
(70, 73, 'Ataco'),
(71, 27, 'Atrato (Yuto)'),
(72, 23, 'Ayapel'),
(73, 27, 'Bagadó'),
(74, 27, 'Bahía Solano (Mútis)'),
(75, 27, 'Bajo Baudó (Pizarro)'),
(76, 19, 'Balboa'),
(78, 8, 'Baranoa'),
(79, 41, 'Baraya'),
(80, 52, 'Barbacoas'),
(81, 5, 'Barbosa'),
(83, 68, 'Barichara'),
(84, 50, 'Barranca de Upía'),
(85, 68, 'Barrancabermeja'),
(86, 44, 'Barrancas'),
(87, 13, 'Barranco de Loba'),
(88, 8, 'Barranquilla'),
(89, 20, 'Becerríl'),
(90, 17, 'Belalcázar'),
(91, 5, 'Bello'),
(92, 5, 'Belmira'),
(93, 25, 'Beltrán'),
(94, 15, 'Belén'),
(96, 27, 'Belén de Bajirá'),
(97, 66, 'Belén de Umbría'),
(98, 18, 'Belén de los Andaquíes'),
(99, 15, 'Berbeo'),
(100, 5, 'Betania'),
(101, 15, 'Beteitiva'),
(102, 5, 'Betulia'),
(103, 68, 'Betulia'),
(104, 25, 'Bituima'),
(105, 15, 'Boavita'),
(106, 54, 'Bochalema'),
(107, 11, 'Bogotá D.C.'),
(108, 25, 'Bojacá'),
(109, 27, 'Bojayá (Bellavista)'),
(110, 5, 'Bolívar'),
(112, 68, 'Bolívar'),
(113, 76, 'Bolívar'),
(114, 20, 'Bosconia'),
(115, 15, 'Boyacá'),
(116, 5, 'Briceño'),
(117, 15, 'Briceño'),
(118, 68, 'Bucaramanga'),
(119, 54, 'Bucarasica'),
(120, 76, 'Buenaventura'),
(121, 15, 'Buenavista'),
(122, 23, 'Buenavista'),
(123, 63, 'Buenavista'),
(124, 70, 'Buenavista'),
(125, 19, 'Buenos Aires'),
(126, 52, 'Buesaco'),
(127, 76, 'Buga'),
(128, 76, 'Bugalagrande'),
(129, 5, 'Burítica'),
(130, 15, 'Busbanza'),
(131, 25, 'Cabrera'),
(132, 68, 'Cabrera'),
(133, 50, 'Cabuyaro'),
(134, 25, 'Cachipay'),
(135, 5, 'Caicedo'),
(136, 76, 'Caicedonia'),
(137, 70, 'Caimito'),
(138, 73, 'Cajamarca'),
(139, 19, 'Cajibío'),
(140, 25, 'Cajicá'),
(141, 13, 'Calamar'),
(142, 95, 'Calamar'),
(143, 63, 'Calarcá'),
(144, 5, 'Caldas'),
(145, 15, 'Caldas'),
(146, 19, 'Caldono'),
(147, 68, 'California'),
(148, 76, 'Calima (Darién)'),
(149, 19, 'Caloto'),
(150, 76, 'Calí'),
(151, 5, 'Campamento'),
(152, 8, 'Campo de la Cruz'),
(153, 41, 'Campoalegre'),
(154, 15, 'Campohermoso'),
(155, 23, 'Canalete'),
(156, 8, 'Candelaria'),
(157, 76, 'Candelaria'),
(158, 13, 'Cantagallo'),
(159, 27, 'Cantón de San Pablo'),
(160, 25, 'Caparrapí'),
(161, 68, 'Capitanejo'),
(162, 5, 'Caracolí'),
(163, 5, 'Caramanta'),
(164, 68, 'Carcasí'),
(165, 5, 'Carepa'),
(166, 73, 'Carmen de Apicalá'),
(167, 25, 'Carmen de Carupa'),
(168, 5, 'Carmen de Viboral'),
(169, 27, 'Carmen del Darién (CURBARADÓ)'),
(170, 5, 'Carolina'),
(171, 13, 'Cartagena'),
(172, 18, 'Cartagena del Chairá'),
(173, 76, 'Cartago'),
(174, 97, 'Carurú'),
(175, 73, 'Casabianca'),
(176, 50, 'Castilla la Nueva'),
(177, 5, 'Caucasia'),
(178, 5, 'Cañasgordas'),
(179, 68, 'Cepita'),
(180, 23, 'Cereté'),
(181, 15, 'Cerinza'),
(182, 68, 'Cerrito'),
(183, 47, 'Cerro San Antonio'),
(184, 52, 'Chachaguí'),
(185, 25, 'Chaguaní'),
(186, 70, 'Chalán'),
(187, 73, 'Chaparral'),
(188, 68, 'Charalá'),
(189, 68, 'Charta'),
(190, 5, 'Chigorodó'),
(191, 68, 'Chima'),
(192, 20, 'Chimichagua'),
(193, 23, 'Chimá'),
(194, 15, 'Chinavita'),
(195, 17, 'Chinchiná'),
(196, 54, 'Chinácota'),
(197, 23, 'Chinú'),
(198, 25, 'Chipaque'),
(199, 68, 'Chipatá'),
(200, 15, 'Chiquinquirá'),
(201, 20, 'Chiriguaná'),
(202, 15, 'Chiscas'),
(203, 15, 'Chita'),
(204, 54, 'Chitagá'),
(205, 15, 'Chitaraque'),
(206, 15, 'Chivatá'),
(207, 47, 'Chivolo'),
(208, 25, 'Choachí'),
(209, 25, 'Chocontá'),
(210, 85, 'Chámeza'),
(211, 25, 'Chía'),
(212, 15, 'Chíquiza'),
(213, 15, 'Chívor'),
(214, 13, 'Cicuco'),
(215, 68, 'Cimitarra'),
(216, 63, 'Circasia'),
(217, 5, 'Cisneros'),
(218, 15, 'Ciénaga'),
(219, 47, 'Ciénaga'),
(220, 23, 'Ciénaga de Oro'),
(221, 13, 'Clemencia'),
(222, 5, 'Cocorná'),
(223, 73, 'Coello'),
(224, 25, 'Cogua'),
(225, 41, 'Colombia'),
(226, 70, 'Colosó (Ricaurte)'),
(227, 86, 'Colón'),
(228, 52, 'Colón (Génova)'),
(229, 5, 'Concepción'),
(230, 68, 'Concepción'),
(231, 5, 'Concordia'),
(232, 47, 'Concordia'),
(233, 27, 'Condoto'),
(234, 68, 'Confines'),
(235, 52, 'Consaca'),
(236, 52, 'Contadero'),
(237, 68, 'Contratación'),
(238, 54, 'Convención'),
(239, 5, 'Copacabana'),
(240, 15, 'Coper'),
(241, 63, 'Cordobá'),
(242, 19, 'Corinto'),
(243, 68, 'Coromoro'),
(244, 70, 'Corozal'),
(245, 15, 'Corrales'),
(246, 25, 'Cota'),
(247, 23, 'Cotorra'),
(248, 15, 'Covarachía'),
(249, 70, 'Coveñas'),
(250, 73, 'Coyaima'),
(251, 81, 'Cravo Norte'),
(252, 52, 'Cuaspud (Carlosama)'),
(253, 50, 'Cubarral'),
(254, 15, 'Cubará'),
(255, 15, 'Cucaita'),
(256, 25, 'Cucunubá'),
(257, 54, 'Cucutilla'),
(258, 15, 'Cuitiva'),
(259, 50, 'Cumaral'),
(260, 99, 'Cumaribo'),
(261, 52, 'Cumbal'),
(262, 52, 'Cumbitara'),
(263, 73, 'Cunday'),
(264, 18, 'Curillo'),
(265, 68, 'Curití'),
(266, 20, 'Curumaní'),
(267, 5, 'Cáceres'),
(268, 54, 'Cáchira'),
(269, 54, 'Cácota'),
(270, 25, 'Cáqueza'),
(271, 27, 'Cértegui'),
(272, 15, 'Cómbita'),
(273, 13, 'Córdoba'),
(274, 52, 'Córdoba'),
(275, 54, 'Cúcuta'),
(276, 5, 'Dabeiba'),
(277, 76, 'Dagua'),
(278, 44, 'Dibulla'),
(279, 44, 'Distracción'),
(280, 73, 'Dolores'),
(281, 5, 'Don Matías'),
(282, 66, 'Dos Quebradas'),
(283, 15, 'Duitama'),
(284, 54, 'Durania'),
(285, 5, 'Ebéjico'),
(286, 5, 'El Bagre'),
(287, 47, 'El Banco'),
(288, 76, 'El Cairo'),
(289, 50, 'El Calvario'),
(290, 54, 'El Carmen'),
(291, 68, 'El Carmen'),
(292, 27, 'El Carmen de Atrato'),
(293, 13, 'El Carmen de Bolívar'),
(294, 50, 'El Castillo'),
(295, 76, 'El Cerrito'),
(296, 52, 'El Charco'),
(297, 15, 'El Cocuy'),
(298, 25, 'El Colegio'),
(299, 20, 'El Copey'),
(300, 18, 'El Doncello'),
(301, 50, 'El Dorado'),
(302, 76, 'El Dovio'),
(303, 15, 'El Espino'),
(304, 68, 'El Guacamayo'),
(305, 13, 'El Guamo'),
(306, 44, 'El Molino'),
(307, 20, 'El Paso'),
(308, 18, 'El Paujil'),
(309, 52, 'El Peñol'),
(310, 13, 'El Peñon'),
(311, 68, 'El Peñon'),
(312, 25, 'El Peñón'),
(313, 47, 'El Piñon'),
(314, 68, 'El Playón'),
(315, 95, 'El Retorno'),
(316, 47, 'El Retén'),
(317, 70, 'El Roble'),
(318, 25, 'El Rosal'),
(319, 52, 'El Rosario'),
(320, 52, 'El Tablón de Gómez'),
(321, 19, 'El Tambo'),
(322, 52, 'El Tambo'),
(323, 54, 'El Tarra'),
(324, 54, 'El Zulia'),
(325, 76, 'El Águila'),
(326, 41, 'Elías'),
(327, 68, 'Encino'),
(328, 68, 'Enciso'),
(329, 5, 'Entrerríos'),
(330, 5, 'Envigado'),
(331, 73, 'Espinal'),
(332, 25, 'Facatativá'),
(333, 73, 'Falan'),
(334, 17, 'Filadelfia'),
(335, 63, 'Filandia'),
(336, 15, 'Firavitoba'),
(337, 73, 'Flandes'),
(338, 18, 'Florencia'),
(339, 19, 'Florencia'),
(340, 15, 'Floresta'),
(341, 76, 'Florida'),
(342, 68, 'Floridablanca'),
(343, 68, 'Florián'),
(344, 44, 'Fonseca'),
(345, 81, 'Fortúl'),
(346, 25, 'Fosca'),
(347, 52, 'Francisco Pizarro'),
(348, 5, 'Fredonia'),
(349, 73, 'Fresno'),
(350, 5, 'Frontino'),
(351, 50, 'Fuente de Oro'),
(352, 47, 'Fundación'),
(353, 52, 'Funes'),
(354, 25, 'Funza'),
(355, 25, 'Fusagasugá'),
(356, 25, 'Fómeque'),
(357, 25, 'Fúquene'),
(358, 25, 'Gachalá'),
(359, 25, 'Gachancipá'),
(360, 15, 'Gachantivá'),
(361, 25, 'Gachetá'),
(362, 8, 'Galapa'),
(363, 70, 'Galeras (Nueva Granada)'),
(364, 68, 'Galán'),
(365, 25, 'Gama'),
(366, 20, 'Gamarra'),
(367, 15, 'Garagoa'),
(368, 41, 'Garzón'),
(369, 41, 'Gigante'),
(370, 76, 'Ginebra'),
(371, 5, 'Giraldo'),
(372, 25, 'Girardot'),
(373, 5, 'Girardota'),
(374, 68, 'Girón'),
(375, 20, 'Gonzalez'),
(376, 54, 'Gramalote'),
(377, 5, 'Granada'),
(378, 25, 'Granada'),
(379, 50, 'Granada'),
(380, 68, 'Guaca'),
(381, 15, 'Guacamayas'),
(382, 76, 'Guacarí'),
(383, 52, 'Guachavés'),
(384, 19, 'Guachené'),
(385, 25, 'Guachetá'),
(386, 52, 'Guachucal'),
(387, 5, 'Guadalupe'),
(388, 41, 'Guadalupe'),
(389, 68, 'Guadalupe'),
(390, 25, 'Guaduas'),
(391, 52, 'Guaitarilla'),
(392, 52, 'Gualmatán'),
(393, 47, 'Guamal'),
(394, 50, 'Guamal'),
(395, 73, 'Guamo'),
(396, 68, 'Guapota'),
(397, 19, 'Guapí'),
(398, 70, 'Guaranda'),
(399, 5, 'Guarne'),
(400, 25, 'Guasca'),
(401, 5, 'Guatapé'),
(402, 25, 'Guataquí'),
(403, 25, 'Guatavita'),
(404, 15, 'Guateque'),
(405, 68, 'Guavatá'),
(406, 25, 'Guayabal de Siquima'),
(407, 25, 'Guayabetal'),
(408, 15, 'Guayatá'),
(409, 68, 'Guepsa'),
(410, 15, 'Guicán'),
(411, 25, 'Gutiérrez'),
(412, 66, 'Guática'),
(413, 68, 'Gámbita'),
(414, 15, 'Gámeza'),
(415, 63, 'Génova'),
(416, 5, 'Gómez Plata'),
(417, 54, 'Hacarí'),
(418, 13, 'Hatillo de Loba'),
(419, 68, 'Hato'),
(420, 85, 'Hato Corozal'),
(421, 44, 'Hatonuevo'),
(422, 5, 'Heliconia'),
(423, 54, 'Herrán'),
(424, 73, 'Herveo'),
(425, 5, 'Hispania'),
(426, 41, 'Hobo'),
(427, 73, 'Honda'),
(428, 73, 'Ibagué'),
(429, 73, 'Icononzo'),
(430, 52, 'Iles'),
(431, 52, 'Imúes'),
(432, 19, 'Inzá'),
(433, 94, 'Inírida'),
(434, 52, 'Ipiales'),
(435, 41, 'Isnos'),
(436, 27, 'Istmina'),
(437, 5, 'Itagüí'),
(438, 5, 'Ituango'),
(439, 15, 'Izá'),
(440, 19, 'Jambaló'),
(441, 76, 'Jamundí'),
(442, 5, 'Jardín'),
(443, 15, 'Jenesano'),
(444, 5, 'Jericó'),
(445, 15, 'Jericó'),
(446, 25, 'Jerusalén'),
(447, 68, 'Jesús María'),
(448, 68, 'Jordán'),
(449, 8, 'Juan de Acosta'),
(450, 25, 'Junín'),
(451, 27, 'Juradó'),
(452, 23, 'La Apartada y La Frontera'),
(453, 41, 'La Argentina'),
(454, 68, 'La Belleza'),
(455, 25, 'La Calera'),
(456, 15, 'La Capilla'),
(457, 5, 'La Ceja'),
(458, 66, 'La Celia'),
(459, 52, 'La Cruz'),
(460, 76, 'La Cumbre'),
(461, 17, 'La Dorada'),
(462, 54, 'La Esperanza'),
(463, 5, 'La Estrella'),
(464, 52, 'La Florida'),
(465, 20, 'La Gloria'),
(466, 20, 'La Jagua de Ibirico'),
(467, 44, 'La Jagua del Pilar'),
(468, 52, 'La Llanada'),
(469, 50, 'La Macarena'),
(470, 17, 'La Merced'),
(471, 25, 'La Mesa'),
(472, 18, 'La Montañita'),
(473, 25, 'La Palma'),
(474, 68, 'La Paz'),
(475, 20, 'La Paz (Robles)'),
(476, 25, 'La Peña'),
(477, 5, 'La Pintada'),
(478, 41, 'La Plata'),
(479, 54, 'La Playa'),
(480, 99, 'La Primavera'),
(481, 85, 'La Salina'),
(482, 19, 'La Sierra'),
(483, 63, 'La Tebaida'),
(484, 52, 'La Tola'),
(485, 5, 'La Unión'),
(486, 52, 'La Unión'),
(487, 70, 'La Unión'),
(488, 76, 'La Unión'),
(489, 15, 'La Uvita'),
(490, 19, 'La Vega'),
(491, 25, 'La Vega'),
(492, 15, 'La Victoria'),
(493, 17, 'La Victoria'),
(494, 76, 'La Victoria'),
(495, 66, 'La Virginia'),
(496, 54, 'Labateca'),
(497, 15, 'Labranzagrande'),
(498, 68, 'Landázuri'),
(499, 68, 'Lebrija'),
(500, 52, 'Leiva'),
(501, 50, 'Lejanías'),
(502, 25, 'Lenguazaque'),
(503, 91, 'Leticia'),
(504, 5, 'Liborina'),
(505, 52, 'Linares'),
(506, 27, 'Lloró'),
(507, 23, 'Lorica'),
(508, 23, 'Los Córdobas'),
(509, 70, 'Los Palmitos'),
(510, 54, 'Los Patios'),
(511, 68, 'Los Santos'),
(512, 54, 'Lourdes'),
(513, 8, 'Luruaco'),
(514, 73, 'Lérida'),
(515, 73, 'Líbano'),
(516, 19, 'López (Micay)'),
(517, 15, 'Macanal'),
(518, 68, 'Macaravita'),
(519, 5, 'Maceo'),
(520, 25, 'Machetá'),
(521, 25, 'Madrid'),
(522, 13, 'Magangué'),
(523, 52, 'Magüi (Payán)'),
(524, 13, 'Mahates'),
(525, 44, 'Maicao'),
(526, 70, 'Majagual'),
(527, 8, 'Malambo'),
(528, 52, 'Mallama (Piedrancha)'),
(529, 8, 'Manatí'),
(530, 44, 'Manaure'),
(531, 20, 'Manaure Balcón del Cesar'),
(532, 17, 'Manizales'),
(533, 25, 'Manta'),
(534, 17, 'Manzanares'),
(535, 85, 'Maní'),
(536, 50, 'Mapiripan'),
(537, 13, 'Margarita'),
(538, 5, 'Marinilla'),
(539, 15, 'Maripí'),
(540, 73, 'Mariquita'),
(541, 17, 'Marmato'),
(542, 17, 'Marquetalia'),
(543, 66, 'Marsella'),
(544, 17, 'Marulanda'),
(545, 13, 'María la Baja'),
(546, 68, 'Matanza'),
(547, 5, 'Medellín'),
(548, 25, 'Medina'),
(549, 27, 'Medio Atrato'),
(550, 27, 'Medio Baudó'),
(551, 27, 'Medio San Juan (ANDAGOYA)'),
(552, 73, 'Melgar'),
(553, 19, 'Mercaderes'),
(554, 50, 'Mesetas'),
(555, 18, 'Milán'),
(556, 15, 'Miraflores'),
(557, 95, 'Miraflores'),
(558, 19, 'Miranda'),
(559, 66, 'Mistrató'),
(560, 97, 'Mitú'),
(561, 86, 'Mocoa'),
(562, 68, 'Mogotes'),
(563, 68, 'Molagavita'),
(564, 23, 'Momil'),
(565, 13, 'Mompós'),
(566, 15, 'Mongua'),
(567, 15, 'Monguí'),
(568, 15, 'Moniquirá'),
(569, 5, 'Montebello'),
(570, 13, 'Montecristo'),
(571, 23, 'Montelíbano'),
(572, 63, 'Montenegro'),
(573, 23, 'Monteria'),
(574, 85, 'Monterrey'),
(575, 13, 'Morales'),
(576, 19, 'Morales'),
(577, 18, 'Morelia'),
(578, 70, 'Morroa'),
(579, 25, 'Mosquera'),
(580, 52, 'Mosquera'),
(581, 15, 'Motavita'),
(582, 23, 'Moñitos'),
(583, 73, 'Murillo'),
(584, 5, 'Murindó'),
(585, 5, 'Mutatá'),
(586, 54, 'Mutiscua'),
(587, 15, 'Muzo'),
(588, 68, 'Málaga'),
(589, 5, 'Nariño'),
(590, 25, 'Nariño'),
(591, 52, 'Nariño'),
(592, 73, 'Natagaima'),
(593, 5, 'Nechí'),
(594, 5, 'Necoclí'),
(595, 17, 'Neira'),
(596, 41, 'Neiva'),
(597, 25, 'Nemocón'),
(598, 25, 'Nilo'),
(599, 25, 'Nimaima'),
(600, 15, 'Nobsa'),
(601, 25, 'Nocaima'),
(602, 17, 'Norcasia'),
(603, 13, 'Norosí'),
(604, 27, 'Novita'),
(605, 47, 'Nueva Granada'),
(606, 15, 'Nuevo Colón'),
(607, 85, 'Nunchía'),
(608, 27, 'Nuquí'),
(609, 41, 'Nátaga'),
(610, 76, 'Obando'),
(611, 68, 'Ocamonte'),
(612, 54, 'Ocaña'),
(613, 68, 'Oiba'),
(614, 15, 'Oicatá'),
(615, 5, 'Olaya'),
(616, 52, 'Olaya Herrera'),
(617, 68, 'Onzaga'),
(618, 41, 'Oporapa'),
(619, 86, 'Orito'),
(620, 85, 'Orocué'),
(621, 73, 'Ortega'),
(622, 52, 'Ospina'),
(623, 15, 'Otanche'),
(624, 70, 'Ovejas'),
(625, 15, 'Pachavita'),
(626, 25, 'Pacho'),
(627, 19, 'Padilla'),
(628, 41, 'Paicol'),
(629, 20, 'Pailitas'),
(630, 25, 'Paime'),
(631, 15, 'Paipa'),
(632, 15, 'Pajarito'),
(633, 41, 'Palermo'),
(634, 17, 'Palestina'),
(635, 41, 'Palestina'),
(636, 68, 'Palmar'),
(637, 8, 'Palmar de Varela'),
(638, 68, 'Palmas del Socorro'),
(639, 76, 'Palmira'),
(640, 70, 'Palmito'),
(641, 73, 'Palocabildo'),
(642, 54, 'Pamplona'),
(643, 54, 'Pamplonita'),
(644, 25, 'Pandi'),
(645, 15, 'Panqueba'),
(646, 25, 'Paratebueno'),
(647, 25, 'Pasca'),
(648, 19, 'Patía (El Bordo)'),
(649, 15, 'Pauna'),
(650, 15, 'Paya'),
(651, 85, 'Paz de Ariporo'),
(652, 15, 'Paz de Río'),
(653, 47, 'Pedraza'),
(654, 20, 'Pelaya'),
(655, 17, 'Pensilvania'),
(656, 5, 'Peque'),
(657, 66, 'Pereira'),
(658, 15, 'Pesca'),
(659, 5, 'Peñol'),
(660, 19, 'Piamonte'),
(661, 68, 'Pie de Cuesta'),
(662, 73, 'Piedras'),
(663, 19, 'Piendamó'),
(664, 63, 'Pijao'),
(665, 47, 'Pijiño'),
(666, 68, 'Pinchote'),
(667, 13, 'Pinillos'),
(668, 8, 'Piojo'),
(669, 15, 'Pisva'),
(670, 41, 'Pital'),
(671, 41, 'Pitalito'),
(672, 47, 'Pivijay'),
(673, 73, 'Planadas'),
(674, 23, 'Planeta Rica'),
(675, 47, 'Plato'),
(676, 52, 'Policarpa'),
(677, 8, 'Polonuevo'),
(678, 8, 'Ponedera'),
(679, 19, 'Popayán'),
(680, 85, 'Pore'),
(681, 52, 'Potosí'),
(682, 76, 'Pradera'),
(683, 73, 'Prado'),
(684, 52, 'Providencia'),
(685, 88, 'Providencia'),
(686, 20, 'Pueblo Bello'),
(687, 23, 'Pueblo Nuevo'),
(688, 66, 'Pueblo Rico'),
(689, 5, 'Pueblorrico'),
(690, 47, 'Puebloviejo'),
(691, 68, 'Puente Nacional'),
(692, 52, 'Puerres'),
(693, 86, 'Puerto Asís'),
(694, 5, 'Puerto Berrío'),
(695, 15, 'Puerto Boyacá'),
(696, 86, 'Puerto Caicedo'),
(697, 99, 'Puerto Carreño'),
(698, 8, 'Puerto Colombia'),
(699, 50, 'Puerto Concordia'),
(700, 23, 'Puerto Escondido'),
(701, 50, 'Puerto Gaitán'),
(702, 86, 'Puerto Guzmán'),
(703, 86, 'Puerto Leguízamo'),
(704, 23, 'Puerto Libertador'),
(705, 50, 'Puerto Lleras'),
(706, 50, 'Puerto López'),
(707, 5, 'Puerto Nare'),
(708, 91, 'Puerto Nariño'),
(709, 68, 'Puerto Parra'),
(710, 18, 'Puerto Rico'),
(711, 50, 'Puerto Rico'),
(712, 81, 'Puerto Rondón'),
(713, 25, 'Puerto Salgar'),
(714, 54, 'Puerto Santander'),
(715, 19, 'Puerto Tejada'),
(716, 5, 'Puerto Triunfo'),
(717, 68, 'Puerto Wilches'),
(718, 25, 'Pulí'),
(719, 52, 'Pupiales'),
(720, 19, 'Puracé (Coconuco)'),
(721, 73, 'Purificación'),
(722, 23, 'Purísima'),
(723, 17, 'Pácora'),
(724, 15, 'Páez'),
(725, 19, 'Páez (Belalcazar)'),
(726, 68, 'Páramo'),
(727, 25, 'Quebradanegra'),
(728, 25, 'Quetame'),
(729, 27, 'Quibdó'),
(730, 63, 'Quimbaya'),
(731, 66, 'Quinchía'),
(732, 15, 'Quipama'),
(733, 25, 'Quipile'),
(734, 54, 'Ragonvalia'),
(735, 15, 'Ramiriquí'),
(736, 85, 'Recetor'),
(737, 13, 'Regidor'),
(738, 5, 'Remedios'),
(739, 47, 'Remolino'),
(740, 8, 'Repelón'),
(741, 50, 'Restrepo'),
(742, 76, 'Restrepo'),
(743, 5, 'Retiro'),
(744, 25, 'Ricaurte'),
(745, 52, 'Ricaurte'),
(746, 68, 'Rio Negro'),
(747, 73, 'Rioblanco'),
(748, 76, 'Riofrío'),
(749, 44, 'Riohacha'),
(750, 17, 'Risaralda'),
(751, 41, 'Rivera'),
(752, 52, 'Roberto Payán (San José)'),
(753, 76, 'Roldanillo'),
(754, 73, 'Roncesvalles'),
(755, 15, 'Rondón'),
(756, 19, 'Rosas'),
(757, 73, 'Rovira'),
(758, 15, 'Ráquira'),
(759, 27, 'Río Iró'),
(760, 27, 'Río Quito'),
(761, 17, 'Río Sucio'),
(762, 13, 'Río Viejo'),
(763, 20, 'Río de oro'),
(764, 5, 'Ríonegro'),
(765, 27, 'Ríosucio'),
(766, 68, 'Sabana de Torres'),
(767, 8, 'Sabanagrande'),
(768, 5, 'Sabanalarga'),
(769, 8, 'Sabanalarga'),
(770, 85, 'Sabanalarga'),
(771, 47, 'Sabanas de San Angel (SAN ANGEL)'),
(772, 5, 'Sabaneta'),
(773, 15, 'Saboyá'),
(774, 23, 'Sahagún'),
(775, 41, 'Saladoblanco'),
(776, 17, 'Salamina'),
(777, 47, 'Salamina'),
(778, 54, 'Salazar'),
(779, 73, 'Saldaña'),
(780, 63, 'Salento'),
(781, 5, 'Salgar'),
(782, 15, 'Samacá'),
(783, 52, 'Samaniego'),
(784, 17, 'Samaná'),
(785, 70, 'Sampués'),
(786, 41, 'San Agustín'),
(787, 20, 'San Alberto'),
(788, 68, 'San Andrés'),
(789, 23, 'San Andrés Sotavento'),
(790, 5, 'San Andrés de Cuerquía'),
(791, 23, 'San Antero'),
(792, 73, 'San Antonio'),
(793, 25, 'San Antonio de Tequendama'),
(794, 68, 'San Benito'),
(795, 70, 'San Benito Abad'),
(796, 25, 'San Bernardo'),
(797, 52, 'San Bernardo'),
(798, 23, 'San Bernardo del Viento'),
(799, 54, 'San Calixto'),
(800, 5, 'San Carlos'),
(801, 23, 'San Carlos'),
(802, 50, 'San Carlos de Guaroa'),
(803, 25, 'San Cayetano'),
(804, 54, 'San Cayetano'),
(805, 13, 'San Cristobal'),
(806, 20, 'San Diego'),
(807, 15, 'San Eduardo'),
(808, 13, 'San Estanislao'),
(809, 13, 'San Fernando'),
(810, 5, 'San Francisco'),
(811, 25, 'San Francisco'),
(812, 86, 'San Francisco'),
(813, 68, 'San Gíl'),
(814, 13, 'San Jacinto'),
(815, 13, 'San Jacinto del Cauca'),
(816, 5, 'San Jerónimo'),
(817, 68, 'San Joaquín'),
(818, 17, 'San José'),
(819, 68, 'San José de Miranda'),
(820, 5, 'San José de Montaña'),
(821, 15, 'San José de Pare'),
(822, 23, 'San José de Uré'),
(823, 18, 'San José del Fragua'),
(824, 95, 'San José del Guaviare'),
(825, 27, 'San José del Palmar'),
(826, 50, 'San Juan de Arama'),
(827, 70, 'San Juan de Betulia'),
(828, 13, 'San Juan de Nepomuceno'),
(829, 52, 'San Juan de Pasto'),
(830, 25, 'San Juan de Río Seco'),
(831, 5, 'San Juan de Urabá'),
(832, 44, 'San Juan del Cesar'),
(833, 50, 'San Juanito'),
(834, 52, 'San Lorenzo'),
(835, 73, 'San Luis'),
(836, 5, 'San Luís'),
(837, 15, 'San Luís de Gaceno'),
(838, 85, 'San Luís de Palenque'),
(839, 70, 'San Marcos'),
(840, 20, 'San Martín'),
(841, 50, 'San Martín'),
(842, 13, 'San Martín de Loba'),
(843, 15, 'San Mateo'),
(844, 68, 'San Miguel'),
(845, 86, 'San Miguel'),
(846, 15, 'San Miguel de Sema'),
(847, 70, 'San Onofre'),
(848, 13, 'San Pablo'),
(849, 52, 'San Pablo'),
(850, 15, 'San Pablo de Borbur'),
(851, 5, 'San Pedro'),
(852, 70, 'San Pedro'),
(853, 76, 'San Pedro'),
(854, 52, 'San Pedro de Cartago'),
(855, 5, 'San Pedro de Urabá'),
(856, 23, 'San Pelayo'),
(857, 5, 'San Rafael'),
(858, 5, 'San Roque'),
(859, 19, 'San Sebastián'),
(860, 47, 'San Sebastián de Buenavista'),
(861, 5, 'San Vicente'),
(862, 18, 'San Vicente del Caguán'),
(863, 68, 'San Vicente del Chucurí'),
(864, 47, 'San Zenón'),
(865, 52, 'Sandoná'),
(866, 47, 'Santa Ana'),
(867, 5, 'Santa Bárbara'),
(868, 68, 'Santa Bárbara'),
(869, 52, 'Santa Bárbara (Iscuandé)'),
(870, 47, 'Santa Bárbara de Pinto'),
(871, 13, 'Santa Catalina'),
(872, 5, 'Santa Fé de Antioquia'),
(873, 27, 'Santa Genoveva de Docorodó'),
(874, 68, 'Santa Helena del Opón'),
(875, 73, 'Santa Isabel'),
(876, 8, 'Santa Lucía'),
(877, 47, 'Santa Marta'),
(878, 15, 'Santa María'),
(879, 41, 'Santa María'),
(880, 13, 'Santa Rosa'),
(881, 19, 'Santa Rosa'),
(882, 66, 'Santa Rosa de Cabal'),
(883, 5, 'Santa Rosa de Osos'),
(884, 15, 'Santa Rosa de Viterbo'),
(885, 13, 'Santa Rosa del Sur'),
(886, 99, 'Santa Rosalía'),
(887, 15, 'Santa Sofía'),
(888, 15, 'Santana'),
(889, 19, 'Santander de Quilichao'),
(890, 54, 'Santiago'),
(891, 86, 'Santiago'),
(892, 5, 'Santo Domingo'),
(893, 8, 'Santo Tomás'),
(894, 5, 'Santuario'),
(895, 66, 'Santuario'),
(896, 52, 'Sapuyes'),
(897, 81, 'Saravena'),
(898, 54, 'Sardinata'),
(899, 25, 'Sasaima'),
(900, 15, 'Sativanorte'),
(901, 15, 'Sativasur'),
(902, 5, 'Segovia'),
(903, 25, 'Sesquilé'),
(904, 76, 'Sevilla'),
(905, 15, 'Siachoque'),
(906, 25, 'Sibaté'),
(907, 86, 'Sibundoy'),
(908, 54, 'Silos'),
(909, 25, 'Silvania'),
(910, 19, 'Silvia'),
(911, 68, 'Simacota'),
(912, 25, 'Simijaca'),
(913, 13, 'Simití'),
(914, 70, 'Sincelejo'),
(915, 70, 'Sincé'),
(916, 27, 'Sipí'),
(917, 47, 'Sitionuevo'),
(918, 25, 'Soacha'),
(919, 15, 'Soatá'),
(920, 15, 'Socha'),
(921, 68, 'Socorro'),
(922, 15, 'Socotá'),
(923, 15, 'Sogamoso'),
(924, 18, 'Solano'),
(925, 8, 'Soledad'),
(926, 18, 'Solita'),
(927, 15, 'Somondoco'),
(928, 5, 'Sonsón'),
(929, 5, 'Sopetrán'),
(930, 13, 'Soplaviento'),
(931, 25, 'Sopó'),
(932, 15, 'Sora'),
(933, 15, 'Soracá'),
(934, 15, 'Sotaquirá'),
(935, 19, 'Sotara (Paispamba)'),
(936, 52, 'Sotomayor (Los Andes)'),
(937, 68, 'Suaita'),
(938, 8, 'Suan'),
(939, 41, 'Suaza'),
(940, 25, 'Subachoque'),
(941, 19, 'Sucre'),
(942, 68, 'Sucre'),
(943, 70, 'Sucre'),
(944, 25, 'Suesca'),
(945, 25, 'Supatá'),
(946, 17, 'Supía'),
(947, 68, 'Suratá'),
(948, 25, 'Susa'),
(949, 15, 'Susacón'),
(950, 15, 'Sutamarchán'),
(951, 25, 'Sutatausa'),
(952, 15, 'Sutatenza'),
(953, 19, 'Suárez'),
(954, 73, 'Suárez'),
(955, 85, 'Sácama'),
(956, 15, 'Sáchica'),
(957, 25, 'Tabio'),
(958, 27, 'Tadó'),
(959, 13, 'Talaigua Nuevo'),
(960, 20, 'Tamalameque'),
(961, 81, 'Tame'),
(962, 52, 'Taminango'),
(963, 52, 'Tangua'),
(964, 97, 'Taraira'),
(965, 5, 'Tarazá'),
(966, 41, 'Tarqui'),
(967, 5, 'Tarso'),
(968, 15, 'Tasco'),
(969, 85, 'Tauramena'),
(970, 25, 'Tausa'),
(971, 41, 'Tello'),
(972, 25, 'Tena'),
(973, 47, 'Tenerife'),
(974, 25, 'Tenjo'),
(975, 15, 'Tenza'),
(976, 54, 'Teorama'),
(977, 41, 'Teruel'),
(978, 41, 'Tesalia'),
(979, 25, 'Tibacuy'),
(980, 15, 'Tibaná'),
(981, 15, 'Tibasosa'),
(982, 25, 'Tibirita'),
(983, 54, 'Tibú'),
(984, 23, 'Tierralta'),
(985, 41, 'Timaná'),
(986, 19, 'Timbiquí'),
(987, 19, 'Timbío'),
(988, 15, 'Tinjacá'),
(989, 15, 'Tipacoque'),
(990, 13, 'Tiquisio (Puerto Rico)'),
(991, 5, 'Titiribí'),
(992, 15, 'Toca'),
(993, 25, 'Tocaima'),
(994, 25, 'Tocancipá'),
(995, 15, 'Toguí'),
(996, 5, 'Toledo'),
(997, 54, 'Toledo'),
(998, 70, 'Tolú'),
(999, 70, 'Tolú Viejo'),
(1000, 68, 'Tona'),
(1001, 15, 'Topagá'),
(1002, 25, 'Topaipí'),
(1003, 19, 'Toribío'),
(1004, 76, 'Toro'),
(1005, 15, 'Tota'),
(1006, 19, 'Totoró'),
(1007, 85, 'Trinidad'),
(1008, 76, 'Trujillo'),
(1009, 8, 'Tubará'),
(1010, 23, 'Tuchín'),
(1011, 76, 'Tulúa'),
(1012, 52, 'Tumaco'),
(1013, 15, 'Tunja'),
(1014, 15, 'Tunungua'),
(1015, 13, 'Turbaco'),
(1016, 13, 'Turbaná'),
(1017, 5, 'Turbo'),
(1018, 15, 'Turmequé'),
(1019, 15, 'Tuta'),
(1020, 15, 'Tutasá'),
(1021, 85, 'Támara'),
(1022, 5, 'Támesis'),
(1023, 52, 'Túquerres'),
(1024, 25, 'Ubalá'),
(1025, 25, 'Ubaque'),
(1026, 25, 'Ubaté'),
(1027, 76, 'Ulloa'),
(1028, 25, 'Une'),
(1029, 27, 'Unguía'),
(1030, 27, 'Unión Panamericana (ÁNIMAS)'),
(1031, 5, 'Uramita'),
(1032, 50, 'Uribe'),
(1033, 44, 'Uribia'),
(1034, 5, 'Urrao'),
(1035, 44, 'Urumita'),
(1036, 8, 'Usiacuri'),
(1037, 5, 'Valdivia'),
(1038, 23, 'Valencia'),
(1039, 68, 'Valle de San José'),
(1040, 73, 'Valle de San Juan'),
(1041, 86, 'Valle del Guamuez'),
(1042, 20, 'Valledupar'),
(1043, 5, 'Valparaiso'),
(1044, 18, 'Valparaiso'),
(1045, 5, 'Vegachí'),
(1046, 73, 'Venadillo'),
(1047, 5, 'Venecia'),
(1048, 25, 'Venecia (Ospina Pérez)'),
(1049, 15, 'Ventaquemada'),
(1050, 25, 'Vergara'),
(1051, 76, 'Versalles'),
(1052, 68, 'Vetas'),
(1053, 25, 'Viani'),
(1054, 5, 'Vigía del Fuerte'),
(1055, 76, 'Vijes'),
(1056, 54, 'Villa Caro'),
(1057, 19, 'Villa Rica'),
(1058, 15, 'Villa de Leiva'),
(1059, 54, 'Villa del Rosario'),
(1060, 86, 'Villagarzón'),
(1061, 25, 'Villagómez'),
(1062, 73, 'Villahermosa'),
(1063, 17, 'Villamaría'),
(1064, 13, 'Villanueva'),
(1065, 44, 'Villanueva'),
(1066, 68, 'Villanueva'),
(1067, 85, 'Villanueva'),
(1068, 25, 'Villapinzón'),
(1069, 73, 'Villarrica'),
(1070, 50, 'Villavicencio'),
(1071, 41, 'Villavieja'),
(1072, 25, 'Villeta'),
(1073, 25, 'Viotá'),
(1074, 15, 'Viracachá'),
(1075, 50, 'Vista Hermosa'),
(1076, 17, 'Viterbo'),
(1077, 68, 'Vélez'),
(1078, 25, 'Yacopí'),
(1079, 52, 'Yacuanquer'),
(1080, 41, 'Yaguará'),
(1081, 5, 'Yalí'),
(1082, 5, 'Yarumal'),
(1083, 5, 'Yolombó'),
(1084, 5, 'Yondó (Casabe)'),
(1085, 85, 'Yopal'),
(1086, 76, 'Yotoco'),
(1087, 76, 'Yumbo'),
(1088, 13, 'Zambrano'),
(1089, 68, 'Zapatoca'),
(1090, 47, 'Zapayán (PUNTA DE PIEDRAS)'),
(1091, 5, 'Zaragoza'),
(1092, 76, 'Zarzal'),
(1093, 15, 'Zetaquirá'),
(1094, 25, 'Zipacón'),
(1095, 25, 'Zipaquirá'),
(1096, 47, 'Zona Bananera (PRADO - SEVILLA)'),
(1097, 54, 'Ábrego'),
(1098, 41, 'Íquira'),
(1099, 15, 'Úmbita'),
(1100, 25, 'Útica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_para_subasta`
--

DROP TABLE IF EXISTS `oferta_para_subasta`;
CREATE TABLE `oferta_para_subasta` (
  `ID_OFERTA` int(11) NOT NULL,
  `MONTO` int(11) NOT NULL,
  `FECHA_HORA_REGISTRO` datetime NOT NULL,
  `ID_SUBATA` int(11) NOT NULL,
  `DOCUMENTO_COMPRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `oferta_para_subasta`
--

TRUNCATE TABLE `oferta_para_subasta`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `TIPO_PRODUCTO` varchar(15) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `CANTIDAD` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `producto`
--

TRUNCATE TABLE `producto`;
--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `NOMBRE`, `TIPO_PRODUCTO`, `DESCRIPCION`, `CANTIDAD`) VALUES
(1, 'zanahoria', 'verdura', 'es naranja ', 21),
(2, 'Fresa', 'Fruta', 'pues nada es una fresa', 13),
(3, 'Coco', 'Fruta', 'Hola es un coco', 33),
(4, 'MANZANA', 'Fruta', 'Manzana', 11),
(5, 'papa', 'tuberculo', 'esunapapaxdxd', 40),
(6, 'papapastusa', 'tuberculo', 'entemporada', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso`
--

DROP TABLE IF EXISTS `recurso`;
CREATE TABLE `recurso` (
  `ID_RECURSO` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `CANTIDAD` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `recurso`
--

TRUNCATE TABLE `recurso`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_de_cultivo`
--

DROP TABLE IF EXISTS `seccion_de_cultivo`;
CREATE TABLE `seccion_de_cultivo` (
  `ID_SECCION` varchar(11) NOT NULL,
  `DIMENSIONES` int(11) NOT NULL,
  `UBICACION` varchar(40) DEFAULT NULL,
  `ID_CULTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `seccion_de_cultivo`
--

TRUNCATE TABLE `seccion_de_cultivo`;
--
-- Volcado de datos para la tabla `seccion_de_cultivo`
--

INSERT INTO `seccion_de_cultivo` (`ID_SECCION`, `DIMENSIONES`, `UBICACION`, `ID_CULTIVO`) VALUES
('cu_10_1', 400, NULL, 10),
('cu_10_2', 400, NULL, 10),
('cu_10_3', 400, NULL, 10),
('cu_10_4', 400, NULL, 10),
('cu_10_5', 400, NULL, 10),
('cu_10_6', 400, NULL, 10),
('cu_10_7', 400, NULL, 10),
('cu_10_8', 400, NULL, 10),
('cu_10_9', 400, NULL, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta`
--

DROP TABLE IF EXISTS `subasta`;
CREATE TABLE `subasta` (
  `ID_SUBASTA` int(11) NOT NULL,
  `MONTO_INICIAL` bigint(20) NOT NULL,
  `FECHA_HORA_INICIO` datetime NOT NULL,
  `FECHA_HORA_FIN` datetime NOT NULL,
  `GANANCIA_MINIMA` int(11) NOT NULL,
  `TOPE_SUBASTA` int(11) NOT NULL,
  `OFERTA_FINAL` int(11) NOT NULL,
  `ID_CULTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `subasta`
--

TRUNCATE TABLE `subasta`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `ROL` varchar(13) NOT NULL,
  `DOCUMENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `USERNAME`, `PASSWORD`, `ROL`, `DOCUMENTO`) VALUES
(6, 'javier', '123', 'administrador', 1000036633),
(26, 'cris', 'cris', 'granjero', 5555555),
(27, 'juan', 'juan', 'biologo', 111),
(28, 'cris', 'cris', 'granjero', 33333),
(29, 'qqq', 'qqq', 'granjero', 333333333),
(30, 'eee', 'eee', 'granjero', 987654324),
(31, 'Hdvs', '1029', 'administrador', 8282746),
(32, 'CC', '1635', 'biologo', 8384646),
(33, 'qqq', 'qqq', 'granjero', 987654324),
(34, 'ddd', 'ddd', 'biologo', 0),
(35, 'ttt', 'ttt', 'granjero', 987654324),
(36, 'he', '123', 'granjero', 0),
(37, 'eee', '123', 'granjero', 23232),
(38, 'jose', '123', 'granjero', 737337),
(39, 'buitagro', '123', 'biologo', 788283),
(40, 'he', '123', 'biologo', 737337),
(41, 'ju', '123', 'biologo', 232323);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variable_de_cultivo`
--

DROP TABLE IF EXISTS `variable_de_cultivo`;
CREATE TABLE `variable_de_cultivo` (
  `ID_VARIABLE` int(11) NOT NULL,
  `TIPO_VARIABLE` varchar(15) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `BIOLOGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `variable_de_cultivo`
--

TRUNCATE TABLE `variable_de_cultivo`;
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indices de la tabla `biologo`
--
ALTER TABLE `biologo`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indices de la tabla `calificacioncomprador`
--
ALTER TABLE `calificacioncomprador`
  ADD PRIMARY KEY (`ID_CALIFICACION`),
  ADD KEY `GRANJERO` (`GRANJERO`),
  ADD KEY `COMPRADOR` (`COMPRADOR`);

--
-- Indices de la tabla `calificaciongranjero`
--
ALTER TABLE `calificaciongranjero`
  ADD PRIMARY KEY (`ID_CALIFICACION`),
  ADD KEY `GRANJERO` (`GRANJERO`),
  ADD KEY `COMPRADOR` (`COMPRADOR`);

--
-- Indices de la tabla `comprador`
--
ALTER TABLE `comprador`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`ID_CULTIVO`),
  ADD KEY `PRODUCTO` (`PRODUCTO`),
  ADD KEY `GRANJERO` (`GRANJERO`),
  ADD KEY `RECURSO` (`ID_GRANJA`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_depa`);

--
-- Indices de la tabla `detalles_administrador_biologo`
--
ALTER TABLE `detalles_administrador_biologo`
  ADD KEY `DOCUMENTO_BIOLOGO` (`DOCUMENTO_BIOLOGO`),
  ADD KEY `DOCUMENTO_ADMINISTRADOR` (`DOCUMENTO_ADMINISTRADOR`);

--
-- Indices de la tabla `detalles_administrador_comprador`
--
ALTER TABLE `detalles_administrador_comprador`
  ADD KEY `DOCUMENTO_COMPRADOR` (`DOCUMENTO_COMPRADOR`),
  ADD KEY `DOCUMENTO_ADMINISTRADOR` (`DOCUMENTO_ADMINISTRADOR`);

--
-- Indices de la tabla `detalles_administrador_granjero`
--
ALTER TABLE `detalles_administrador_granjero`
  ADD KEY `DOCUMENTO_GRANJERO` (`DOCUMENTO_GRANJERO`),
  ADD KEY `DOCUMENTO_ADMINISTRADOR` (`DOCUMENTO_ADMINISTRADOR`);

--
-- Indices de la tabla `detalles_manipulacion_cultivo`
--
ALTER TABLE `detalles_manipulacion_cultivo`
  ADD KEY `ID_CULTIVO` (`ID_CULTIVO`),
  ADD KEY `ID_MANIPULACION` (`ID_MANIPULACION`);

--
-- Indices de la tabla `detalles_producto_cultivo`
--
ALTER TABLE `detalles_producto_cultivo`
  ADD KEY `ID_CULTIVO` (`ID_CULTIVO`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`);

--
-- Indices de la tabla `detalles_producto_granjero`
--
ALTER TABLE `detalles_producto_granjero`
  ADD KEY `DOCUMENTO_GRANJERO` (`DOCUMENTO_GRANJERO`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`);

--
-- Indices de la tabla `detalles_recurso_cultivo`
--
ALTER TABLE `detalles_recurso_cultivo`
  ADD KEY `ID_CULTIVO` (`ID_CULTIVO`),
  ADD KEY `ID_RECURSO` (`ID_RECURSO`);

--
-- Indices de la tabla `detalles_recurso_granjero`
--
ALTER TABLE `detalles_recurso_granjero`
  ADD KEY `DOCUMENTO_GRANJERO` (`DOCUMENTO_GRANJERO`),
  ADD KEY `ID_RECURSO` (`ID_RECURSO`);

--
-- Indices de la tabla `detalles_subasta_comprador`
--
ALTER TABLE `detalles_subasta_comprador`
  ADD KEY `DOCUMENTO_COMPRADOR` (`DOCUMENTO_COMPRADOR`),
  ADD KEY `ID_SUBASTA` (`ID_SUBASTA`);

--
-- Indices de la tabla `detalles_variable_cultivo`
--
ALTER TABLE `detalles_variable_cultivo`
  ADD KEY `ID_CULTIVO` (`ID_CULTIVO`),
  ADD KEY `ID_VARIABLE` (`ID_VARIABLE`);

--
-- Indices de la tabla `granja`
--
ALTER TABLE `granja`
  ADD PRIMARY KEY (`ID_GRANJA`),
  ADD KEY `GRANJERO` (`GRANJERO`);

--
-- Indices de la tabla `granjero`
--
ALTER TABLE `granjero`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indices de la tabla `manipulacion_de_cultivo`
--
ALTER TABLE `manipulacion_de_cultivo`
  ADD PRIMARY KEY (`ID_MANIPULACION`),
  ADD KEY `BIOLOGO` (`BIOLOGO`);

--
-- Indices de la tabla `muestra`
--
ALTER TABLE `muestra`
  ADD PRIMARY KEY (`ID_MUESTRA`),
  ADD KEY `SECCION_CULTIVO` (`SECCION_CULTIVO`);

--
-- Indices de la tabla `muestrap`
--
ALTER TABLE `muestrap`
  ADD PRIMARY KEY (`ID_PLANTA`),
  ADD UNIQUE KEY `SECCION_CULTIVO` (`SECCION_CULTIVO`);

--
-- Indices de la tabla `muestra_prueba`
--
ALTER TABLE `muestra_prueba`
  ADD PRIMARY KEY (`ID_MUESTRA`),
  ADD KEY `SECCION_CULTIVO` (`SECCION_CULTIVO`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_mun`),
  ADD KEY `id_depa` (`id_depa`);

--
-- Indices de la tabla `oferta_para_subasta`
--
ALTER TABLE `oferta_para_subasta`
  ADD PRIMARY KEY (`ID_OFERTA`),
  ADD KEY `ID_CULTIVO` (`ID_SUBATA`),
  ADD KEY `DOCUMENTO_COMPRADOR` (`DOCUMENTO_COMPRADOR`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- Indices de la tabla `recurso`
--
ALTER TABLE `recurso`
  ADD PRIMARY KEY (`ID_RECURSO`);

--
-- Indices de la tabla `seccion_de_cultivo`
--
ALTER TABLE `seccion_de_cultivo`
  ADD PRIMARY KEY (`ID_SECCION`),
  ADD KEY `ID_CULTIVO` (`ID_CULTIVO`);

--
-- Indices de la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD PRIMARY KEY (`ID_SUBASTA`),
  ADD KEY `ID_CULTIVO` (`ID_CULTIVO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `DOCUMENTO` (`DOCUMENTO`);

--
-- Indices de la tabla `variable_de_cultivo`
--
ALTER TABLE `variable_de_cultivo`
  ADD PRIMARY KEY (`ID_VARIABLE`),
  ADD KEY `BIOLOGO` (`BIOLOGO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `ID_CULTIVO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_depa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `granja`
--
ALTER TABLE `granja`
  MODIFY `ID_GRANJA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `muestra`
--
ALTER TABLE `muestra`
  MODIFY `ID_MUESTRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `muestrap`
--
ALTER TABLE `muestrap`
  MODIFY `ID_PLANTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `muestra_prueba`
--
ALTER TABLE `muestra_prueba`
  MODIFY `ID_MUESTRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_mun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `recurso`
--
ALTER TABLE `recurso`
  MODIFY `ID_RECURSO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subasta`
--
ALTER TABLE `subasta`
  MODIFY `ID_SUBASTA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`DOCUMENTO`) REFERENCES `usuario` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `biologo`
--
ALTER TABLE `biologo`
  ADD CONSTRAINT `biologo_ibfk_1` FOREIGN KEY (`DOCUMENTO`) REFERENCES `usuario` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificacioncomprador`
--
ALTER TABLE `calificacioncomprador`
  ADD CONSTRAINT `calificacioncomprador_ibfk_1` FOREIGN KEY (`COMPRADOR`) REFERENCES `comprador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificaciongranjero`
--
ALTER TABLE `calificaciongranjero`
  ADD CONSTRAINT `calificaciongranjero_ibfk_1` FOREIGN KEY (`COMPRADOR`) REFERENCES `granjero` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comprador`
--
ALTER TABLE `comprador`
  ADD CONSTRAINT `comprador_ibfk_1` FOREIGN KEY (`DOCUMENTO`) REFERENCES `usuario` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD CONSTRAINT `cultivo_ibfk_2` FOREIGN KEY (`GRANJERO`) REFERENCES `granjero` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivo_ibfk_3` FOREIGN KEY (`PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivo_ibfk_4` FOREIGN KEY (`ID_GRANJA`) REFERENCES `granja` (`ID_GRANJA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_administrador_biologo`
--
ALTER TABLE `detalles_administrador_biologo`
  ADD CONSTRAINT `detalles_administrador_biologo_ibfk_1` FOREIGN KEY (`DOCUMENTO_ADMINISTRADOR`) REFERENCES `administrador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_administrador_biologo_ibfk_2` FOREIGN KEY (`DOCUMENTO_BIOLOGO`) REFERENCES `biologo` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_administrador_comprador`
--
ALTER TABLE `detalles_administrador_comprador`
  ADD CONSTRAINT `detalles_administrador_comprador_ibfk_1` FOREIGN KEY (`DOCUMENTO_ADMINISTRADOR`) REFERENCES `administrador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_administrador_comprador_ibfk_2` FOREIGN KEY (`DOCUMENTO_COMPRADOR`) REFERENCES `comprador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_administrador_granjero`
--
ALTER TABLE `detalles_administrador_granjero`
  ADD CONSTRAINT `detalles_administrador_granjero_ibfk_1` FOREIGN KEY (`DOCUMENTO_ADMINISTRADOR`) REFERENCES `administrador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_administrador_granjero_ibfk_2` FOREIGN KEY (`DOCUMENTO_GRANJERO`) REFERENCES `granjero` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_manipulacion_cultivo`
--
ALTER TABLE `detalles_manipulacion_cultivo`
  ADD CONSTRAINT `detalles_manipulacion_cultivo_ibfk_1` FOREIGN KEY (`ID_MANIPULACION`) REFERENCES `manipulacion_de_cultivo` (`ID_MANIPULACION`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_manipulacion_cultivo_ibfk_2` FOREIGN KEY (`ID_CULTIVO`) REFERENCES `cultivo` (`ID_CULTIVO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_producto_cultivo`
--
ALTER TABLE `detalles_producto_cultivo`
  ADD CONSTRAINT `detalles_producto_cultivo_ibfk_1` FOREIGN KEY (`ID_CULTIVO`) REFERENCES `cultivo` (`ID_CULTIVO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_producto_cultivo_ibfk_2` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_producto_granjero`
--
ALTER TABLE `detalles_producto_granjero`
  ADD CONSTRAINT `detalles_producto_granjero_ibfk_1` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_producto_granjero_ibfk_2` FOREIGN KEY (`DOCUMENTO_GRANJERO`) REFERENCES `granjero` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_recurso_cultivo`
--
ALTER TABLE `detalles_recurso_cultivo`
  ADD CONSTRAINT `detalles_recurso_cultivo_ibfk_1` FOREIGN KEY (`ID_RECURSO`) REFERENCES `recurso` (`ID_RECURSO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_recurso_cultivo_ibfk_2` FOREIGN KEY (`ID_CULTIVO`) REFERENCES `cultivo` (`ID_CULTIVO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_recurso_granjero`
--
ALTER TABLE `detalles_recurso_granjero`
  ADD CONSTRAINT `detalles_recurso_granjero_ibfk_1` FOREIGN KEY (`DOCUMENTO_GRANJERO`) REFERENCES `granjero` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_recurso_granjero_ibfk_2` FOREIGN KEY (`ID_RECURSO`) REFERENCES `recurso` (`ID_RECURSO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_subasta_comprador`
--
ALTER TABLE `detalles_subasta_comprador`
  ADD CONSTRAINT `detalles_subasta_comprador_ibfk_1` FOREIGN KEY (`DOCUMENTO_COMPRADOR`) REFERENCES `comprador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_subasta_comprador_ibfk_2` FOREIGN KEY (`ID_SUBASTA`) REFERENCES `subasta` (`ID_SUBASTA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_variable_cultivo`
--
ALTER TABLE `detalles_variable_cultivo`
  ADD CONSTRAINT `detalles_variable_cultivo_ibfk_1` FOREIGN KEY (`ID_VARIABLE`) REFERENCES `variable_de_cultivo` (`ID_VARIABLE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_variable_cultivo_ibfk_2` FOREIGN KEY (`ID_CULTIVO`) REFERENCES `cultivo` (`ID_CULTIVO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `granja`
--
ALTER TABLE `granja`
  ADD CONSTRAINT `granja_ibfk_1` FOREIGN KEY (`GRANJERO`) REFERENCES `granjero` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `granjero`
--
ALTER TABLE `granjero`
  ADD CONSTRAINT `granjero_ibfk_1` FOREIGN KEY (`DOCUMENTO`) REFERENCES `usuario` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manipulacion_de_cultivo`
--
ALTER TABLE `manipulacion_de_cultivo`
  ADD CONSTRAINT `manipulacion_de_cultivo_ibfk_1` FOREIGN KEY (`BIOLOGO`) REFERENCES `biologo` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `muestra_prueba`
--
ALTER TABLE `muestra_prueba`
  ADD CONSTRAINT `muestra_prueba_ibfk_1` FOREIGN KEY (`SECCION_CULTIVO`) REFERENCES `seccion_de_cultivo` (`ID_SECCION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`id_depa`) REFERENCES `departamento` (`id_depa`);

--
-- Filtros para la tabla `oferta_para_subasta`
--
ALTER TABLE `oferta_para_subasta`
  ADD CONSTRAINT `oferta_para_subasta_ibfk_2` FOREIGN KEY (`ID_SUBATA`) REFERENCES `subasta` (`ID_SUBASTA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oferta_para_subasta_ibfk_3` FOREIGN KEY (`DOCUMENTO_COMPRADOR`) REFERENCES `comprador` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion_de_cultivo`
--
ALTER TABLE `seccion_de_cultivo`
  ADD CONSTRAINT `seccion_de_cultivo_ibfk_1` FOREIGN KEY (`ID_CULTIVO`) REFERENCES `cultivo` (`ID_CULTIVO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD CONSTRAINT `subasta_ibfk_1` FOREIGN KEY (`ID_CULTIVO`) REFERENCES `cultivo` (`ID_CULTIVO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `variable_de_cultivo`
--
ALTER TABLE `variable_de_cultivo`
  ADD CONSTRAINT `variable_de_cultivo_ibfk_1` FOREIGN KEY (`BIOLOGO`) REFERENCES `biologo` (`DOCUMENTO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
