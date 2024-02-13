-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-02-2024 a las 00:27:54
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
(1, 'CURSO DE INDUCCIÓN', 9, 'CURSO DE INDUCCIÓN', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:10:14', NULL, NULL, NULL, NULL, 1),
(2, 'CURSO DE INTEGRACIÓN DEL PERSONAL', 9, 'CURSO DE INTEGRACIÓN DEL PERSONAL', 14, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:13:27', NULL, NULL, NULL, NULL, 1),
(3, 'REALIZAR DIAGNÓSTICO SOBRE LAS NECESIDADES DE CAPACITACIÓN', 7, 'REALIZAR DIAGNÓSTICO SOBRE LAS NECESIDADES DE CAPACITACIÓN', 15, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:14:33', NULL, NULL, NULL, NULL, 1),
(4, 'DIAGNÓSTICO DE LA COMPILACIÓN DE DOCUMENTOS JURÍDICOS QUE AMPAREN  LOS PROCESOS OPERATIVOS Y ADMINISTRATIVOS.', 11, 'DIAGNÓSTICO DE LA COMPILACIÓN DE DOCUMENTOS JURÍDICOS QUE AMPAREN  LOS PROCESOS OPERATIVOS Y ADMINISTRATIVOS.', 8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:15:06', NULL, NULL, NULL, NULL, 1),
(5, 'AGENDA PARQUE VEHICULAR', 19, 'AGENDA PARQUE VEHICULAR', 16, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:21:54', NULL, NULL, NULL, NULL, 1),
(6, 'SISTEMA ELECTRÓNICO DE ALMACÉN', 19, 'SISTEMA ELECTRÓNICO DE ALMACÉN', 17, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:22:53', NULL, NULL, NULL, NULL, 1),
(7, 'MECANISMOS DE COMUNICACIÓN INTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 6, 'MECANISMOS DE COMUNICACIÓN INTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 18, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:24:04', NULL, NULL, NULL, NULL, 1),
(8, 'MECANISMOS DE COMUNICACIÓN EXTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 7, 'MECANISMOS DE COMUNICACIÓN EXTERNA DE LA INFORMACIÓN RELEVANTE Y DE CALIDAD.', 19, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:25:39', NULL, NULL, NULL, NULL, 1),
(9, 'DIAGNÓSTICO A LOS EVENTOS PÚBLICOS DEL INSTITUTO DE MANERA PREVIA Y POSTERIOR EN CUANTO A SU RESULTADOS DE OPERACIÓN', 11, 'DIAGNÓSTICO A LOS EVENTOS PÚBLICOS DEL INSTITUTO DE MANERA PREVIA Y POSTERIOR EN CUANTO A SU RESULTADOS DE OPERACIÓN', 8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:26:14', NULL, NULL, NULL, NULL, 1),
(10, 'REUNIÓN OPERATIVA SEMANAL DE LAS ACTIVIDADES A REALIZAR DENTRO DE LA DIRECCIÓN', 11, 'REUNIÓN OPERATIVA SEMANAL DE LAS ACTIVIDADES A REALIZAR DENTRO DE LA DIRECCIÓN', 20, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2023, '2024-02-13 17:27:13', NULL, NULL, NULL, NULL, 1);

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
(12, 'Recursos materiales', 19);

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
(11, 'Resultados acorde al diagnóstico para la toma de decisiones.', 'Resultados acorde al diagnóstico para la toma de decisiones.'),
(14, 'EVIDENCIA FOTOGRÁFICA DE LAS ACTIVIDADES QUE REFUERCEN LA INTEGRACIÓN Y UNA ENCUESTA ORGANIZACIONAL', 'EVIDENCIA FOTOGRÁFICA DE LAS ACTIVIDADES QUE REFUERCEN LA INTEGRACIÓN Y UNA ENCUESTA ORGANIZACIONAL'),
(15, 'FORMATO EN LISTA ELABORADO, REQUISITADO, FIRMADO Y SELLADO, CON EL CUMPLIMIENTO DE EXPEDIENTE COMPLETO, ANTES DE LIBERACIÓN DE APOYO.', 'FORMATO EN LISTA ELABORADO, REQUISITADO, FIRMADO Y SELLADO, CON EL CUMPLIMIENTO DE EXPEDIENTE COMPLETO, ANTES DE LIBERACIÓN DE APOYO.'),
(16, 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA LA SOLICITUD Y USO DE VEHÍCULOS.', 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA LA SOLICITUD Y USO DE VEHÍCULOS.'),
(17, 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA ENTRADAS, SALIDAS, COSTEO, INVENTARIO, REQUISICIONES, APROBACIONES Y ENTREGAS CON FIRMA ELECTRÓNICA AUTORIZADA.', 'A TRAVÉS DEL SISTEMA ELECTRÓNICO IMPLEMENTADO Y SU CAPACITACIÓN PARA ENTRADAS, SALIDAS, COSTEO, INVENTARIO, REQUISICIONES, APROBACIONES Y ENTREGAS CON FIRMA ELECTRÓNICA AUTORIZADA.'),
(18, 'BOLETÍN EN MEDIO DIGITAL,MEMORÁNDUM, PERIÓDICO MURAL, REUNIONES, CIRCULARES, Y ANÁLOGOS.', 'BOLETÍN EN MEDIO DIGITAL,MEMORÁNDUM, PERIÓDICO MURAL, REUNIONES, CIRCULARES, Y ANÁLOGOS.'),
(19, 'SISTEMAS, CONVENIOS, GUÍAS, PROCEDIMIENTOS O CÓDIGOS ELECTRÓNICOS Y FÍSICOS VALIDADOS POR LA DIRECCIÓN GENERAL', 'SISTEMAS, CONVENIOS, GUÍAS, PROCEDIMIENTOS O CÓDIGOS ELECTRÓNICOS Y FÍSICOS VALIDADOS POR LA DIRECCIÓN GENERAL'),
(20, 'LISTA DE ASISTENCIA Y CALENDARIO ELECTRÓNICO IMPLEMENTADO', 'LISTA DE ASISTENCIA Y CALENDARIO ELECTRÓNICO IMPLEMENTADO');

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
(6, 'UIC', 'Unidad de comunicación social e imagen', '123456789', 7, 1),
(7, 'Rfinancieros', 'Recursos Financieros', '123456789', 6, 1),
(8, 'OIC', 'Órgano Interno de Control', '123456789', 4, 1),
(9, 'RHumanos', 'Recursos Humanos', '123456789', 1, 1),
(10, 'Inf', 'Informática', '123456789', 3, 1),
(11, 'STecnica', 'Secretaría Técnica', '123456789', 9, 1),
(12, 'CAdmin', 'Coordinación Administrativa', '123456789', 2, 1),
(14, 'Admin', 'Administrador del sistema', '123456789', 0, 2),
(19, 'RecMateriales', 'Recursos Materiales', '123456789', 12, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `annio`
--
ALTER TABLE `annio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
