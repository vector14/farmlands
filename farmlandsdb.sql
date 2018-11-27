-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2018 a las 22:52:38
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
(100046352, 'EEWE', '3432R32', 'iwiwiwij', 277272, 12, 'twwt', 'ewqwqwq', 'ytwtwt');

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
  `NIVEL_DEL_MAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `cultivo`
--

TRUNCATE TABLE `cultivo`;
--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`ID_CULTIVO`, `TITULO`, `ESTADO`, `CLIMA_ACTUAL`, `AREA_CULTIVO`, `FECHA_INICIO`, `PRODUCTO`, `GRANJERO`, `ID_GRANJA`, `NIVEL_DEL_MAR`) VALUES
(1, 'PEO', 'EXECELENTE', 'CALIDA', 23, '2018-09-20', 1, 1000036633, 1, 0);

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
(1, 'esmeralda', 23, 'calido', 'neiva', 'zanahoria', 1000036633),
(2, 'ROJA', 26, 'calido', 'NEIVA', 'zanahoria', 1000036633);

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
(1000036633, 'hernando', 'ninco', 'cc', 'rivera', 'huila', 12);

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
  `SECCION_CULTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `muestra_prueba`
--

TRUNCATE TABLE `muestra_prueba`;
--
-- Volcado de datos para la tabla `muestra_prueba`
--

INSERT INTO `muestra_prueba` (`ID_MUESTRA`, `PH`, `TEMPERATURA_A`, `TEMPERATURA_M`, `HUMEDAD`, `PRESION_ATMOSFERICA`, `FECHA_MUESTRA`, `COLOR_HOJA`, `SECCION_CULTIVO`) VALUES
(1, 6.2, 18, 14, 56, 1029, '2018-10-31', '#008e10', 0),
(2, 7, 19, 10, 55, 1033, '2018-11-01', '#008e10', 0),
(3, 7.2, 16, 11, 57, 1032, '2018-11-02', '#008e10', 0),
(4, 7.3, 18, 12, 60, 1035, '2018-11-03', '#008e10', 0),
(5, 7, 17, 12, 59, 1039, '2018-11-03', '#008e10', 0);

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
(1, 'zanahoria', 'verdura', 'es naranja ', 23),
(2, 'Fresa', 'Fruta', 'pues nada es una fresa', 23),
(3, 'Coco', 'Fruta', 'Hola es un coco', 33);

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
  `ID_SECCION` int(11) NOT NULL,
  `DIMENSIONES` int(11) NOT NULL,
  `UBICACION` varchar(40) NOT NULL,
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
(0, 15, 'SUR', 1);

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
(1, 'hernando', '123', 'administadro', 1000036633),
(2, 'cano', '123', 'granjero', 100046352),
(3, 'hernando', '123', 'administadro', 1000036633),
(4, 'cano', '123', 'granjero', 100046352),
(5, 'javier', '123', 'administrador', 1000036633),
(6, 'javier', '123', 'administrador', 1000036633);

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
  MODIFY `ID_CULTIVO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `granja`
--
ALTER TABLE `granja`
  MODIFY `ID_GRANJA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `ID_MUESTRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Filtros para la tabla `oferta_para_subasta`
--
ALTER TABLE `oferta_para_subasta`
  ADD CONSTRAINT `oferta_para_subasta_ibfk_1` FOREIGN KEY (`DOCUMENTO_COMPRADOR`) REFERENCES `detalles_subasta_comprador` (`DOCUMENTO_COMPRADOR`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oferta_para_subasta_ibfk_2` FOREIGN KEY (`ID_SUBATA`) REFERENCES `subasta` (`ID_SUBASTA`) ON DELETE CASCADE ON UPDATE CASCADE;

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
