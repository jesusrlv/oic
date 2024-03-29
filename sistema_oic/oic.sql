-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-01-2024 a las 20:11:27
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `descripcion` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `medio_verificacion` int(11) NOT NULL,
  `porcentaje` int(11) DEFAULT NULL,
  `porcentaje2` int(11) DEFAULT NULL,
  `porcentaje3` int(11) DEFAULT NULL,
  `porcentaje4` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `fecha_inicio2` date DEFAULT NULL,
  `fecha_final2` date DEFAULT NULL,
  `fecha_inicio3` date DEFAULT NULL,
  `fecha_final3` date DEFAULT NULL,
  `fecha_inicio4` date DEFAULT NULL,
  `fecha_final4` date DEFAULT NULL,
  `trimestre` int(11) DEFAULT NULL,
  `annio` int(11) NOT NULL,
  `hora_registro` datetime NOT NULL,
  `observaciones` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones2` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones3` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones4` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `actividad`, `responsable`, `descripcion`, `medio_verificacion`, `porcentaje`, `porcentaje2`, `porcentaje3`, `porcentaje4`, `fecha_inicio`, `fecha_final`, `fecha_inicio2`, `fecha_final2`, `fecha_inicio3`, `fecha_final3`, `fecha_inicio4`, `fecha_final4`, `trimestre`, `annio`, `hora_registro`, `observaciones`, `observaciones2`, `observaciones3`, `observaciones4`, `estatus`) VALUES
(1, 'Curso informativos de inducción', 5, 'Curso informativos de inducción', 1, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 1),
(2, 'Notificación oficial al empleado y al área correspondiente sobre los movimientos generados en el personal del instituto.', 6, 'Notificación oficial al empleado y al área correspondiente sobre los movimientos generados en el personal del instituto.', 2, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(3, 'Creación de software para el seguimiento de control operativo y financiero de las actividades del instituto.', 7, 'Creación de software para el seguimiento de control operativo y financiero de las actividades del instituto.', 3, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 1, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(4, 'Actualización del manual de procedimientos conforme a la operatividad financiera de las actividades del instituto.', 6, 'Actualización del manual de procedimientos conforme a la operatividad financiera de las actividades del instituto.', 4, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(5, 'Diagnóstico al personal sonre el manual de procedimientos.', 8, 'Diagnóstico al personal sonre el manual de procedimientos.', 11, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(6, 'Método de control y seguimiento a programas sociales vulnerables a la corrupción interna y externa.', 9, 'Método de control y seguimiento a programas sociales vulnerables a la corrupción interna y externa.', 5, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(7, 'Reporte presupuestal mensual para toma de decisiones.', 10, 'Reporte presupuestal mensual para toma de decisiones.', 6, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '2024-01-04', '2024-01-04', '2024-01-09', '2024-01-24', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(8, 'Emisión de boletín mensual anticipando las convocatorias y actividades relevantes.', 11, 'Emisión de boletín mensual anticipando las convocatorias y actividades relevantes.', 7, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(9, 'Encuesta de clima organizacional', 5, 'Encuesta de clima organizacional', 8, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(10, 'Realizar diagnóstico sobre las necesidades de capacitación', 5, 'Realizar diagnóstico sobre las necesidades de capacitación', 9, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(11, 'Diagnóstico a los eventos públicos del instituto de manera previa y posterior en cuanto a su resultado de operación', 12, 'Diagnóstico a los eventos públicos del instituto de manera previa y posterior en cuanto a su resultado de operación', 10, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 2, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(25, 'Nombre de actividad de prueba', 3, 'Una actividad de grupo', 7, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '0000-00-00 00:00:00', '', NULL, NULL, NULL, 0),
(27, 'Una actividad', 7, 'ddd', 11, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 4, '2023-12-28 18:21:12', NULL, NULL, NULL, NULL, 0),
(28, 'Elaboración de estados financieros', 7, 'Plan anual', 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2023, '2024-01-01 19:33:23', NULL, NULL, NULL, NULL, 0),
(29, 'xxxxx', 10, 'xxxxxx', 7, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2020, '2024-01-03 00:45:50', NULL, NULL, NULL, NULL, 0),
(30, 'Desarrollo web', 10, 'Programación', 8, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2021, '2024-01-03 00:46:34', NULL, NULL, NULL, NULL, 0),
(31, 'sdads', 7, 'd', 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, '2024-01-03 13:53:24', NULL, NULL, NULL, NULL, 0),
(32, 'Actividad en municipios', 6, 'Envío de boletines', 7, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2024, '2024-01-03 13:54:12', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `annio`
--

CREATE TABLE `annio` (
  `id` int(11) NOT NULL,
  `annio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `annio`
--

INSERT INTO `annio` (`id`, `annio`) VALUES
(1, 2020),
(2, 2021),
(3, 2022),
(4, 2023),
(5, 2024);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `resp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `area`, `resp`) VALUES
(1, 'Recursos humanos', 5),
(2, 'Coordinación administrativa', 6),
(3, 'Informática', 7),
(4, 'Órgano interno de control', 8),
(5, 'Comité de contraloría social', 9),
(6, 'Recursos financieros', 10),
(7, 'Unidad de comunicación social e imagen', 11),
(9, 'Secretaría técnica', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(500) COLLATE utf16_unicode_ci NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `url_doc` varchar(300) COLLATE utf16_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `trimestre` int(11) NOT NULL,
  `usr_vinculado` int(11) NOT NULL,
  `actividad_vinculada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `descripcion`, `fecha_ini`, `fecha_fin`, `url_doc`, `fecha`, `trimestre`, `usr_vinculado`, `actividad_vinculada`) VALUES
(1, 'DescripciÃ³n 2', '2021-01-14 00:00:00', '2021-01-15 00:00:00', './files/bitacora_pz5tw37k4_2882.pdf', '2021-01-14 16:05:20', 1, 7, 2),
(2, 'DescripciÃ³n 2', '2021-01-14 00:00:00', '2021-01-15 00:00:00', './files/bitacora_0d7pp187d_2882.pdf', '2021-01-14 16:05:44', 4, 7, 3),
(3, 'DescripciÃ³n 2', '2021-01-14 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_kvl3hg75d_2882.pdf', '2021-01-14 16:06:35', 1, 7, 2),
(4, 'DescripciÃ³n bitÃ¡cora 15012021', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_0y5krzpyh_Acuse.pdf', '2021-01-15 14:11:36', 4, 7, 3),
(5, 'Evidencia #4', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_4p6cont9n_evidencia_7_trimestre_4', '2021-01-15 14:14:15', 4, 7, 3),
(6, 'Evidencia #5', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_cq6xoes0i_evidencia_7_trimestre_4', '2021-01-15 14:18:32', 4, 7, 3),
(7, 'Evidencia #5', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_7z2bbmdmz_evidencia_7_trimestre_4', '2021-01-15 14:19:00', 4, 7, 3),
(8, 'ExtensiÃ³n', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_kznga4d7b_evidencia_7_trimestre_4', '2021-01-15 14:23:59', 4, 7, 3),
(9, 'ExtensiÃ³n 2', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_duopu91e7_evidencia_7_trimestre_4_pdf', '2021-01-15 14:24:43', 4, 7, 3),
(10, 'ExtensiÃ³n 3', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_t6w1ghv2y_evidencia_7_trimestre_4.pdf', '2021-01-15 14:25:22', 4, 7, 3),
(11, 'Evidencia #5', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_oplo5qv66_evidencia_7_trimestre_4.pdf', '2021-01-15 15:34:25', 4, 7, 3),
(12, 'Evidencia 1', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_dt0pkbalh_evidencia_6_trimestre_4.pdf', '2021-01-15 15:35:41', 4, 6, 0),
(13, 'Evidencia con actividad', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_dabg10kn5_evidencia_6_trimestre_4.pdf', '2021-01-15 15:44:29', 4, 6, 2),
(14, 'Actividad', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_d2ivfoeno_evidencia_6_trimestre_4.pdf', '2021-01-15 15:45:24', 4, 6, 4),
(15, 'Act 2', '2021-01-21 00:00:00', '2021-01-27 00:00:00', 'files/bitacora_dd5128tbj_evidencia_6_trimestre_4.pdf', '2021-01-15 15:48:16', 4, 6, 2),
(16, 'Actividad nueva INJUVENTUD', '2021-01-02 00:00:00', '2021-01-30 00:00:00', 'files/bitacora_l76zdfu1s_evidencia_6_trimestre_4.pdf', '2021-01-15 15:50:03', 4, 6, 2),
(17, 'ComitÃ© 1', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_d7frgdxdx_evidencia_9_trimestre_4.pdf', '2021-01-15 15:54:17', 4, 9, 6),
(18, 'Evidencia 1 trimestre', '2021-01-15 00:00:00', '2021-01-22 00:00:00', 'files/bitacora_nnoxsp5bd_evidencia_7_trimestre_1.pdf', '2021-01-15 17:00:50', 1, 7, 3),
(19, 'evidencia 2', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_f4xunkpm0_evidencia_7_trimestre_2.pdf', '2021-01-15 17:01:32', 2, 7, 3),
(20, 'Tercer trimestre evidencia', '2021-01-15 00:00:00', '2021-01-17 00:00:00', 'files/bitacora_t5gg8ut4p_evidencia_7_trimestre_3.pdf', '2021-01-15 17:03:06', 3, 7, 3),
(21, 'Evidencia 1', '2021-01-15 00:00:00', '2021-01-15 00:00:00', 'files/bitacora_t43mjja4f_evidencia_9_trimestre_1.pdf', '2021-01-15 18:09:13', 1, 9, 6),
(22, 'Evidencia', '2021-01-20 00:00:00', '2021-01-21 00:00:00', 'files/bitacora_20phu4p7i_evidencia_6_trimestre_1.pdf', '2021-01-20 13:18:11', 1, 6, 2),
(23, 'd', '2021-04-28 00:00:00', '2021-04-29 00:00:00', 'files/bitacora_ki0qdqc0r_evidencia_6_trimestre_1.pdf', '2021-04-28 14:21:49', 1, 6, 4);

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
-- Estructura de tabla para la tabla `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `actividad` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `annio` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `medio_verificacion` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usr` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `nombre`, `pwd`, `area`, `perfil`) VALUES
(5, 'Stecnica', 'Secretaría Técnica', '123456789', 9, 1),
(6, 'UIC', 'Unidad de comunicación social e imagen', '123456789', 7, 1),
(7, 'Rfinancieros', 'Recursos Financieros', '123456789', 6, 1),
(8, 'OIC', 'Órgano Interno de Control', '123456789', 4, 1),
(9, 'RHumanos', 'Recursos Humanos', '123456789', 1, 1),
(10, 'Inf', 'Informática', '123456789', 3, 1),
(11, 'STecnica', 'Secretaría Técnica', '123456789', 9, 1),
(12, 'CAdmin', 'Coordinación Administrativa', '123456789', 2, 1),
(14, 'Admin', 'Administrador del sistema', '123456789', 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `annio`
--
ALTER TABLE `annio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
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
-- Indices de la tabla `principal`
--
ALTER TABLE `principal`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `annio`
--
ALTER TABLE `annio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medio_verificacion`
--
ALTER TABLE `medio_verificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
