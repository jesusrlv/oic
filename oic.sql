-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2020 a las 22:40:03
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id` int(11) NOT NULL,
  `actividad` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `responsable` int(11) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `actividad`, `responsable`, `descripcion`) VALUES
(1, 'Curso informativos de inducción', 1, 'Curso informativos de inducción'),
(2, 'Notificación oficial al empleado y al área correspondiente sobre los movimientos generados en el personal del instituto.', 1, 'Notificación oficial al empleado y al área correspondiente sobre los movimientos generados en el personal del instituto.'),
(3, 'Creación de software para el seguimiento de control operativo y financiero de las actividades del instituto.', 1, 'Creación de software para el seguimiento de control operativo y financiero de las actividades del instituto.'),
(4, 'Actualización del manual de procedimientos conforme a la operatividad financiera de las actividades del instituto.', 1, 'Actualización del manual de procedimientos conforme a la operatividad financiera de las actividades del instituto.'),
(5, 'Diagnóstico al personal sonre el manual de procedimientos.', 1, 'Diagnóstico al personal sonre el manual de procedimientos.'),
(6, 'Método de control y seguimiento a programas sociales vulnerables a la corrupción interna y externa.', 1, 'Método de control y seguimiento a programas sociales vulnerables a la corrupción interna y externa.'),
(7, 'Reporte presupuestal mensual para toma de decisiones.', 1, 'Reporte presupuestal mensual para toma de decisiones.'),
(8, 'Emisión de boletín mensual anticipando las convocatorias y actividades relevantes.', 1, 'Emisión de boletín mensual anticipando las convocatorias y actividades relevantes.'),
(9, 'Encuesta de clima organizacional', 1, 'Encuesta de clima organizacional'),
(10, 'Realizar diagnóstico sobre las necesidades de capacitación', 1, 'Realizar diagnóstico sobre las necesidades de capacitación'),
(11, 'Diagnóstico a los eventos públicos del instituto de manera previa y posterior en cuanto a su resultado de operación', 1, 'Diagnóstico a los eventos públicos del instituto de manera previa y posterior en cuanto a su resultado de operación'),
(12, '1', 2, '1'),
(13, '3', 2, '3'),
(14, 'Prueba agregar actividad', 1, 'Esta es una prueba para agregar actividad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area` varchar(100) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `responsable` int(11) NOT NULL,
  `medio_verificacion` int(11) NOT NULL,
  `actividad` int(11) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `annio` int(11) NOT NULL,
  `prioridad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `dashboard`
--

INSERT INTO `dashboard` (`id`, `fecha_ini`, `fecha_fin`, `responsable`, `medio_verificacion`, `actividad`, `porcentaje`, `trimestre`, `annio`, `prioridad`) VALUES
(1, '2020-11-09', '2020-11-18', 1, 1, 2, 12, 1, 2020, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_verificacion`
--

CREATE TABLE `medio_verificacion` (
  `id` int(11) NOT NULL,
  `medio` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `medio_verificacion`
--

INSERT INTO `medio_verificacion` (`id`, `medio`, `descripcion`) VALUES
(1, 'Diagnóstico sobre el marco operativo de la institución. Objetivos. Misión, visión y valores.', 'Diagnóstico sobre el marco operativo de la institución. Objetivos. Misión, visión y valores.'),
(2, 'Memorándum de notificación de movimientos del personal del instituto.', 'Memorándum de notificación de movimientos del personal del instituto.'),
(3, 'Los reportes que contenga información de las mediciones correspondientes por acciones de control.', 'Los reportes que contenga información de las mediciones correspondientes por acciones de control.'),
(4, 'Manual aprobado por la Secretaría de la Función Pública y Junta de Gobierno.', 'Manual aprobado por la Secretaría de la Función Pública y Junta de Gobierno.'),
(5, 'Diagnóstico emitido según procesos correspondientes para determinar curso y acciones.', 'Diagnóstico emitido según procesos correspondientes para determinar curso y acciones.'),
(6, 'Estados de movimiento presupuestal y las modificaciones al mismo', 'Estados de movimiento presupuestal y las modificaciones al mismo'),
(7, 'Boletín medio digital', 'Boletín medio digital'),
(8, 'Generación del índice a través de planillas elaboradas', 'Generación del índice a través de planillas elaboradas'),
(9, 'Con base en resultados, la elaboración de plan de capacitaciones', 'Con base en resultados, la elaboración de plan de capacitaciones'),
(10, 'Generación del índice a través de planillas elaboradas', 'Generación del índice a través de planillas elaboradas'),
(11, 'Resultados acorde al diagnóstico para la toma de decisiones.', 'Resultados acorde al diagnóstico para la toma de decisiones.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `nombre`, `pwd`, `perfil`) VALUES
(1, 'jesusrlv', 'rodolfo leaños', '123456789', 1),
(2, 'jesusrlv2', 'Rodolfo Leaños', '987654321', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medio_verificacion`
--
ALTER TABLE `medio_verificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medio_verificacion`
--
ALTER TABLE `medio_verificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
