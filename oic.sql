-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2024 a las 00:59:04
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
  `estatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `actividad`, `responsable`, `descripcion`, `medio_verificacion`, `porcentaje`, `porcentaje2`, `porcentaje3`, `porcentaje4`, `fecha_inicio`, `fecha_final`, `fecha_inicio2`, `fecha_final2`, `fecha_inicio3`, `fecha_final3`, `fecha_inicio4`, `fecha_final4`, `trimestre`, `annio`, `hora_registro`, `observaciones`, `observaciones2`, `observaciones3`, `observaciones4`, `estatus`) VALUES
(1, 'CURSO DE INDUCCIÓN', 9, 'CURSO DE INDUCCIÓN', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-01', '2023-06-30', NULL, 2023, '2024-02-13 17:10:14', NULL, NULL, NULL, NULL, 1),
(2, 'CURSO DE INTEGRACIÓN DEL PERSONAL', 9, 'CURSO DE INTEGRACIÓN DEL PERSONAL', 14, 0, NULL, NULL, NULL, '2023-01-01', '2023-03-31', NULL, NULL, NULL, NULL, '2023-04-01', '2023-12-15', NULL, 2023, '2024-02-13 17:13:27', NULL, NULL, NULL, NULL, 1),
(3, 'REALIZAR DIAGNÓSTICO SOBRE LAS NECESIDADES DE CAPACITACIÓN', 9, 'REALIZAR DIAGNÓSTICO SOBRE LAS NECESIDADES DE CAPACITACIÓN', 9, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-01', '2023-12-15', NULL, 2023, '2024-02-13 17:14:33', NULL, NULL, NULL, NULL, 1),
(4, 'DIAGNÓSTICO DE LA COMPILACIÓN DE DOCUMENTOS JURÍDICOS QUE AMPAREN  LOS PROCESOS OPERATIVOS Y ADMINISTRATIVOS.', 11, 'DIAGNÓSTICO DE LA COMPILACIÓN DE DOCUMENTOS JURÍDICOS QUE AMPAREN  LOS PROCESOS OPERATIVOS Y ADMINISTRATIVOS.', 8, 0, NULL, NULL, NULL, '2024-05-06', '2024-05-12', '2024-05-15', '2024-05-08', '2024-05-07', '2024-05-13', '2024-05-20', '2024-05-21', NULL, 2023, '2024-02-13 17:15:06', NULL, NULL, NULL, NULL, 1),
(5, 'AGENDA PARQUE VEHICULAR', 19, 'AGENDA PARQUE VEHICULAR', 16, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:21:54', NULL, NULL, NULL, NULL, 1),
(6, 'SISTEMA ELECTRÓNICO DE ALMACÉN', 19, 'SISTEMA ELECTRÓNICO DE ALMACÉN', 17, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:22:53', NULL, NULL, NULL, NULL, 1),
(7, 'MECANISMOS DE COMUNICACIÓN INTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 6, 'MECANISMOS DE COMUNICACIÓN INTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 18, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:24:04', NULL, NULL, NULL, 'otra calificación', 1),
(8, 'MECANISMOS DE COMUNICACIÓN EXTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 6, 'MECANISMOS DE COMUNICACIÓN EXTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 19, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:25:39', NULL, NULL, NULL, NULL, 1),
(9, 'DIAGNÓSTICO A LOS EVENTOS PÚBLICOS DEL INSTITUTO DE MANERA PREVIA Y POSTERIOR EN CUANTO A SU RESULTADOS DE OPERACIÓN', 11, 'DIAGNÓSTICO A LOS EVENTOS PÚBLICOS DEL INSTITUTO DE MANERA PREVIA Y POSTERIOR EN CUANTO A SU RESULTADOS DE OPERACIÓN', 8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-01', '2023-12-16', NULL, 2023, '2024-02-13 17:26:14', NULL, NULL, NULL, NULL, 1),
(10, 'REUNIÓN OPERATIVA SEMANAL DE LAS ACTIVIDADES A REALIZAR DENTRO DE LA DIRECCIÓN', 11, 'REUNIÓN OPERATIVA SEMANAL DE LAS ACTIVIDADES A REALIZAR DENTRO DE LA DIRECCIÓN', 20, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-01', '2023-12-16', NULL, 2023, '2024-02-13 17:27:13', NULL, NULL, NULL, NULL, 1),
(11, 'SISTEMA ELECTRÓNICO DE PROVEEDORES', 19, 'SISTEMA ELECTRÓNICO DE PROVEEDORES', 17, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-20 14:31:57', NULL, NULL, NULL, NULL, 1),
(12, 'CARÁTULA DE DOCUMENTOS PARA BENEFICIARIOS DE PROGRAMAS SOCIALES', 7, 'CARÁTULA DE DOCUMENTOS PARA BENEFICIARIOS DE PROGRAMAS SOCIALES', 15, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-20 14:32:40', NULL, NULL, NULL, NULL, 1),
(13, 'ss', 9, 'sss', 15, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2024, '2024-05-16 13:26:27', NULL, NULL, NULL, NULL, 1);

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
(9, 'Secretaría técnica', 12),
(13, 'Recursos materiales', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(500) COLLATE utf16_unicode_ci NOT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `url_doc` varchar(300) COLLATE utf16_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `trimestre` int(11) NOT NULL,
  `annio` varchar(6) COLLATE utf16_unicode_ci NOT NULL,
  `usr_vinculado` int(11) NOT NULL,
  `actividad_vinculada` int(11) NOT NULL,
  `cuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `descripcion`, `fecha_ini`, `fecha_fin`, `url_doc`, `fecha`, `trimestre`, `annio`, `usr_vinculado`, `actividad_vinculada`, `cuenta`) VALUES
(3, 'ENCUESTA ORGANIZACIONAL DEL PRIMER TRIMESTRE', '2023-01-01', '2023-03-31', 'files/bitacora_evidencia_9_trimestre_1.pdf', '2024-02-16 11:06:45', 1, '', 9, 2, 0),
(4, '1ER. TRIMESTRE.- Se adjunta como evidencia del primer trimestre, el documento donde se solicitó la aprobación de las planillas a utilizarse en las evaluaciones de los procesos operativos y administrativos de la dependencia de manera mensual. ', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 09:53:55', 4, '', 11, 4, 1),
(5, '1ER. TRIMESTRE.- Se adjunta como evidencia el documento mediante el cual se solicitó la aprobación de las planillas a utilizar para la evaluación de los eventos públicos de la dependencia. ', '2023-02-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 09:56:55', 4, '', 11, 9, 2),
(7, '2DO. TRIMESTRE.- Se adjunta como evidencia del segundo trimestre, dos diagnósticos elaborados a dos áreas de la dependencia, correspondientes al mes de abril de 2023. ', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 10:05:33', 4, '', 11, 4, 1),
(8, '2DO. TRIMESTRE.- Se adjunta como evidencia del segundo trimestre, el diagnóstico elaborado al evento denominado \"De la calle a la cancha: Street Soccer\", realizado el 06 y 07 de mayo de 2023.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 10:13:54', 4, '', 11, 9, 2),
(9, '2 TRIMESTRE.- Se adjunta como evidencia correspondiente al primer trimestre, lista de asistencia de reunión semanal de trabajo.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 10:16:13', 4, '', 11, 10, 3),
(10, '3ER. TRIMESTRE.- Se adjunta como evidencia del tercer trimestre, los diagnósticos elaborados a dos áreas de la dependencia correspondientes al mes de agosto de 2023.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 10:19:56', 4, '', 11, 4, 1),
(11, '3ER. TRIMESTRE.- Se adjunta como evidencia del tercer trimestre, el diagnóstico elaborado al evento denominado \"Premio Estatal de la Juventud 2023\", realizado en el mes de agosto de 2023. ', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 10:22:07', 4, '', 11, 9, 2),
(12, '3 TRIMESTRE.- Se adjunta como evidencia correspondiente al primer trimestre, lista de asistencia de reunión semanal de trabajo.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 10:24:23', 4, '', 11, 10, 4),
(13, 'EVIDENCIA FOTOGRÁFICA DE LOS CURSOS DE INDUCCIÓN HACIA EL PERSONAL DE LA DEPENDENCIA', '2023-04-01', '2023-06-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 13:02:48', 4, '', 9, 1, 0),
(14, 'PRESENTACIÓN REALIZADA PARA EL CURSO DE INDUCCIÓN DE LA DEPENDENCIA', '2023-04-01', '2023-06-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 13:03:38', 4, '', 9, 1, 0),
(15, 'EVIDENCIA FOTOGRÁFICA DEL PRIMER TRIMESTRE QUE REFUERZAN LA INTEGRACIÓN DEL PERSONAL', '2023-01-01', '2023-03-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 13:08:53', 4, '', 9, 2, 0),
(16, 'PRESENTACIÓN REALIZADA PARA CURSO DE INDUCCIÓN ', '2023-04-01', '2023-06-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 13:11:46', 4, '', 9, 1, 0),
(17, '4TO. TRIMESTRE.- Se adjunta como evidencia del cuarto trimestre, los diagnósticos realizados a dos de las áreas de la dependencia, correspondientes al mes de noviembre de 2023.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 13:47:09', 4, '', 11, 4, 1),
(18, '4TO. TRIMESTRE.- Se adjunta como evidencia del cuarto trimestre, el diagnóstico elaborado al evento denominado \"Inauguración Transformando Espacios por las Juventudes\", realizado en el mes de noviembre de 2023 en el municipio de Loreto, Zacatecas.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 13:49:35', 4, '', 11, 9, 2),
(19, '4 TRIMESTRE.- Se adjunta como evidencia correspondiente al primer trimestre, lista de asistencia de reunión semanal de trabajo.', '2023-04-01', '2023-12-16', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-21 13:50:29', 4, '', 11, 10, 5),
(20, 'ENCUESTA ORGANIZACIONAL DEL PRIMER TRIMESTRE', '2023-01-01', '2023-03-31', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:39:26', 4, '', 9, 2, 0),
(21, 'EVIDENCIA FOTOGRÁFICA DEL SEGUNDO TRIMESTRE QUE REFUERZAN LA INTEGRACIÓN DEL PERSONAL', '2023-04-01', '2023-06-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:41:31', 4, '', 9, 2, 0),
(22, 'ENCUESTA ORGANIZACIONAL SEGUNDO TRIMESTRE', '2023-04-01', '2023-06-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:42:14', 4, '', 9, 2, 0),
(23, 'EVIDENCIA FOTOGRÁFICA DEL TERCER TRIMESTRE QUE REFUERZAN LA INTEGRACIÓN DEL PERSONAL', '2023-07-01', '2023-09-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:43:22', 4, '', 9, 2, 0),
(24, 'ENCUESTA ORGANIZACIONAL TERCER TRIMESTRE', '2023-07-01', '2023-09-30', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:44:22', 4, '', 9, 2, 0),
(25, 'EVIDENCIA FOTOGRÁFICA DEL CUARTO TRIMESTRE QUE REFUERZAN LA INTEGRACIÓN DEL PERSONAL', '2023-10-01', '2023-12-15', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:45:07', 4, '', 9, 2, 0),
(26, 'ENCUESTA ORGANIZACIONAL CUARTO TRIMESTRE', '2023-10-01', '2023-12-15', 'files/bitacora_evidencia_9_trimestre_4.pdf', '2024-02-21 14:45:42', 4, '', 9, 2, 0),
(29, '5 TRIMESTRE.- Se adjunta como evidencia correspondiente al primer trimestre, lista de asistencia de reunión semanal de trabajo.', '2024-02-21', '2024-02-21', 'files/bitacora_evidencia_11_trimestre_4.pdf', '2024-02-26 16:32:51', 4, '', 11, 10, 7),
(30, 'www', '2024-02-11', '2024-02-13', 'files/bitacora_evidencia_11_trimestre_3.pdf', '2024-02-26 16:33:13', 3, '', 11, 4, 1),
(34, '1', '2024-03-13', '2024-03-13', 'files/bitacora_5_evidencia_11_trimestre_4.pdf', '2024-03-13 13:55:49', 4, '', 11, 10, 5),
(35, 'dsdsd', NULL, NULL, 'bitacora_1_evidencia_11_trimestre_1.pdf', '2024-05-16 16:52:54', 1, '', 11, 4, 1),
(37, '3', NULL, NULL, 'bitacora_3_evidencia_11_trimestre_1.pdf', '2024-05-16 17:31:10', 1, '2023', 11, 4, 3),
(38, '4', NULL, NULL, 'bitacora_4_evidencia_11_trimestre_1.pdf', '2024-05-16 17:31:22', 1, '2023', 11, 4, 4),
(39, '5', NULL, NULL, 'bitacora_5_evidencia_11_trimestre_1.pdf', '2024-05-16 17:32:46', 1, '2023', 11, 4, 5),
(40, '6', NULL, NULL, 'bitacora_6_evidencia_11_trimestre_1.pdf', '2024-05-16 17:32:59', 1, '2023', 11, 4, 6),
(41, '7', NULL, NULL, 'bitacora_7_evidencia_11_trimestre_1.pdf', '2024-05-16 17:34:49', 1, '2023', 11, 4, 7),
(42, '8', NULL, NULL, 'bitacora_8_evidencia_11_trimestre_1.pdf', '2024-05-16 17:45:45', 1, '2023', 11, 4, 8),
(43, '9', NULL, NULL, 'bitacora_9_evidencia_11_trimestre_1.pdf', '2024-05-16 17:48:20', 1, '2023', 11, 4, 9),
(44, '10', NULL, NULL, 'bitacora_10_evidencia_11_trimestre_1.pdf', '2024-05-16 17:48:31', 1, '2023', 11, 4, 10),
(45, '11', NULL, NULL, 'bitacora_11_evidencia_11_trimestre_1.pdf', '2024-05-16 17:49:06', 1, '2023', 11, 4, 11),
(46, '11', NULL, NULL, 'bitacora_12_evidencia_11_trimestre_1.pdf', '2024-05-16 17:49:13', 1, '2023', 11, 4, 12),
(47, '12', NULL, NULL, 'bitacora_13_evidencia_11_trimestre_1.pdf', '2024-05-16 17:49:34', 1, '2023', 11, 4, 13),
(48, '13', NULL, NULL, 'bitacora_14_evidencia_11_trimestre_1.pdf', '2024-05-16 18:24:05', 1, '2023', 11, 4, 14),
(49, '14', NULL, NULL, 'bitacora_15_evidencia_11_trimestre_1.pdf', '2024-05-16 18:24:26', 1, '2023', 11, 4, 15),
(50, '14', NULL, NULL, 'bitacora_16_evidencia_11_trimestre_1.pdf', '2024-05-16 18:24:35', 1, '2023', 11, 4, 16),
(51, '14', NULL, NULL, 'bitacora_17_evidencia_11_trimestre_1.pdf', '2024-05-16 18:24:56', 1, '2023', 11, 4, 17),
(52, '15', NULL, NULL, 'bitacora_18_evidencia_11_trimestre_1.pdf', '2024-05-16 18:26:20', 1, '2023', 11, 4, 18),
(53, '16', NULL, NULL, 'bitacora_19_evidencia_11_trimestre_1.pdf', '2024-05-16 18:27:16', 1, '2023', 11, 4, 19),
(54, '16', NULL, NULL, 'bitacora_20_evidencia_11_trimestre_1.pdf', '2024-05-16 18:28:29', 1, '2023', 11, 4, 20),
(64, 'a', NULL, NULL, 'bitacora_20_evidencia_11_trimestre_1.pdf', '2024-05-17 17:19:54', 1, '2023', 11, 4, 20),
(65, 'a', NULL, NULL, 'bitacora_21_evidencia_11_trimestre_1.pdf', '2024-05-17 17:20:58', 1, '2023', 11, 4, 21),
(66, 's', NULL, NULL, 'bitacora_22_evidencia_11_trimestre_1.pdf', '2024-05-17 17:21:14', 1, '2023', 11, 4, 22),
(67, '2', NULL, NULL, 'bitacora_23_evidencia_11_trimestre_1.pdf', '2024-05-17 17:22:49', 1, '2023', 11, 4, 23),
(68, '22', NULL, NULL, 'bitacora_24_evidencia_11_trimestre_1.pdf', '2024-05-17 17:23:17', 1, '2023', 11, 4, 24),
(69, '2221', NULL, NULL, 'bitacora_25_evidencia_11_trimestre_1.pdf', '2024-05-17 17:23:45', 1, '2023', 11, 4, 25),
(70, '3w32', NULL, NULL, 'bitacora_26_evidencia_11_trimestre_1.pdf', '2024-05-17 17:26:36', 1, '2023', 11, 4, 26),
(71, '32323', NULL, NULL, 'bitacora_27_evidencia_11_trimestre_1.pdf', '2024-05-17 17:28:38', 1, '2023', 11, 4, 27),
(72, 'e32323', NULL, NULL, 'bitacora_28_evidencia_11_trimestre_1.pdf', '2024-05-17 17:29:30', 1, '2023', 11, 4, 28);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_verificacion`
--

CREATE TABLE `medio_verificacion` (
  `id` int(11) NOT NULL,
  `medio` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `annio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `medio_verificacion`
--

INSERT INTO `medio_verificacion` (`id`, `medio`, `descripcion`, `annio`) VALUES
(1, 'Diagnóstico sobre el marco operativo de la institución. Objetivos. Misión, visión y valores.', 'Diagnóstico sobre el marco operativo de la institución. Objetivos. Misión, visión y valores.', 0),
(2, 'Memorándum de notificación de movimientos del personal del instituto.', 'Memorándum de notificación de movimientos del personal del instituto.', 0),
(3, 'Los reportes que contenga información de las mediciones correspondientes por acciones de control.', 'Los reportes que contenga información de las mediciones correspondientes por acciones de control.', 0),
(4, 'Manual aprobado por la Secretaría de la Función Pública y Junta de Gobierno.', 'Manual aprobado por la Secretaría de la Función Pública y Junta de Gobierno.', 0),
(5, 'Diagnóstico emitido según procesos correspondientes para determinar curso y acciones.', 'Diagnóstico emitido según procesos correspondientes para determinar curso y acciones.', 0),
(6, 'Estados de movimiento presupuestal y las modificaciones al mismo', 'Estados de movimiento presupuestal y las modificaciones al mismo', 0),
(7, 'Boletín medio digital', 'Boletín medio digital', 0),
(8, 'Generación del índice a través de planillas elaboradas', 'Generación del índice a través de planillas elaboradas', 0),
(9, 'Con base en resultados, la elaboración de plan de capacitaciones', 'Con base en resultados, la elaboración de plan de capacitaciones', 0),
(10, 'Generación del índice a través de planillas elaboradas', 'Generación del índice a través de planillas elaboradas', 0),
(11, 'Resultados acorde al diagnóstico para la toma de decisiones.', 'Resultados acorde al diagnóstico para la toma de decisiones.', 0),
(14, 'EVIDENCIA FOTOGRÁFICA DE LAS ACTIVIDADES QUE REFUERCEN LA INTEGRACIÓN Y UNA ENCUESTA ORGANIZACIONAL', 'EVIDENCIA FOTOGRÁFICA DE LAS ACTIVIDADES QUE REFUERCEN LA INTEGRACIÓN Y UNA ENCUESTA ORGANIZACIONAL', 0),
(15, 'FORMATO EN LISTA ELABORADO, REQUISITADO, FIRMADO Y SELLADO, CON EL CUMPLIMIENTO DE EXPEDIENTE COMPLETO, ANTES DE LIBERACIÓN DE APOYO.', 'FORMATO EN LISTA ELABORADO, REQUISITADO, FIRMADO Y SELLADO, CON EL CUMPLIMIENTO DE EXPEDIENTE COMPLETO, ANTES DE LIBERACIÓN DE APOYO.', 0),
(16, 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA LA SOLICITUD Y USO DE VEHÍCULOS.', 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA LA SOLICITUD Y USO DE VEHÍCULOS.', 0),
(17, 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA ENTRADAS, SALIDAS, COSTEO, INVENTARIO, REQUISICIONES, APROBACIONES Y ENTREGAS CON FIRMA ELECTRÓNICA AUTORIZADA.', 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA ENTRADAS, SALIDAS, COSTEO, INVENTARIO, REQUISICIONES, APROBACIONES Y ENTREGAS CON FIRMA ELECTRÓNICA AUTORIZADA.', 0),
(18, 'BOLETÍN EN MEDIO DIGITAL,MEMORÁNDUM, PERIÓDICO MURAL, REUNIONES, CIRCULARES, Y ANÁLOGOS.', 'BOLETÍN EN MEDIO DIGITAL,MEMORÁNDUM, PERIÓDICO MURAL, REUNIONES, CIRCULARES, Y ANÁLOGOS.', 0),
(19, 'SISTEMAS, CONVENIOS, GUÍAS, PROCEDIMIENTOS O CÓDIGOS ELECTRÓNICOS Y FÍSICOS VALIDADOS POR LA DIRECCIÓN GENERAL', 'SISTEMAS, CONVENIOS, GUÍAS, PROCEDIMIENTOS O CÓDIGOS ELECTRÓNICOS Y FÍSICOS VALIDADOS POR LA DIRECCIÓN GENERAL', 0),
(20, 'LISTA DE ASISTENCIA Y CALENDARIO ELECTRÓNICO IMPLEMENTADO', 'LISTA DE ASISTENCIA Y CALENDARIO ELECTRÓNICO IMPLEMENTADO', 0);

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
(6, 'Ucomunicacion', 'Unidad de comunicación social e imagen', 'UCom01', 7, 1),
(7, 'Rfinancieros', 'Recursos Financieros', 'Rfinan01', 6, 1),
(9, 'RHumanos', 'Recursos Humanos', 'RHum01', 1, 1),
(10, 'Inf', 'Informática Jesusrlcv', '123456789', 3, 1),
(11, 'STecnica', 'Secretaría Técnica', 'STecn01', 9, 1),
(12, 'CAdmin', 'Coordinación Administrativa', 'CAdmin01', 2, 1),
(14, 'Admin', 'Administrador del sistema', '123456789', 0, 2),
(19, 'RecMateriales', 'Recursos Materiales', 'RMat01', 13, 1),
(20, 'OIC', 'Órgano Interno de Control', 'OIC01', 4, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `annio`
--
ALTER TABLE `annio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medio_verificacion`
--
ALTER TABLE `medio_verificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
