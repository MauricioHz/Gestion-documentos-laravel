-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2018 a las 20:57:49
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pipelinedoc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id` int(8) NOT NULL,
  `actividadId` int(8) NOT NULL,
  `userId` int(11) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `vigente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(8) NOT NULL,
  `documentoId` int(8) NOT NULL,
  `userId` int(11) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `vigente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id` int(8) NOT NULL,
  `uuid` varchar(60) NOT NULL,
  `proyectoId` varchar(60) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `extencion` varchar(10) NOT NULL,
  `talla` int(8) NOT NULL,
  `ruta` varchar(400) NOT NULL,
  `usuarioId` int(11) NOT NULL,
  `vigente` int(11) NOT NULL,
  `fechaSistema` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `uuid`, `proyectoId`, `nombre`, `tipo`, `extencion`, `talla`, `ruta`, `usuarioId`, `vigente`, `fechaSistema`) VALUES
(1, '5b646939abc93', '5b8ed036b6459', 'INFORME DE MANTENCION', 'Doc', 'Doc', 120, '', 1, 1, '2018-08-03 14:40:12'),
(2, '5b6469b4e93de', '5b8ed036b6459', 'Otro informe', 'PDF', 'PDF', 25, '', 1, 1, '2018-08-03 14:41:42'),
(3, '5b6469d2dfc7b', '5b8ed036b6459', 'Informe alfa', 'XLS', 'XLS', 30, '1', 1, 1, '2018-08-03 14:41:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `uuid` varchar(60) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `grupoId` int(6) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `usuarioId` int(11) NOT NULL,
  `vigente` int(11) NOT NULL,
  `fechaSistema` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `uuid`, `nombre`, `descripcion`, `grupoId`, `fechaInicio`, `fechaVencimiento`, `usuarioId`, `vigente`, `fechaSistema`) VALUES
(1, '5b607dd16aad3', 'Gestión interna', 'Documentos para gestionar el área interna de la empresa.', 1, '2018-07-01', '2018-08-09', 1, 1, '2018-07-01'),
(2, '5b607de2acf7d', 'Auditoria departamento mantención', 'Documentos parar realizar el proceso de mantención.', 1, '2018-07-01', '2018-09-01', 1, 1, '2018-07-31'),
(3, '5b607e3949e6e', 'Revisión proceso compras', 'Documentos para revisar con el equipo de compras.', 1, '2018-07-31', '2018-09-29', 1, 1, '2018-07-31'),
(4, '5b60d54d68d2f', 'dsdasd', 'asdasdasd', 0, '2018-07-31', '2018-07-31', 0, 1, '2018-07-31'),
(5, '5b6dff17929b9', 'PROYECTO DE EJEMPLO', 'UNA BREVE DESCRIPCION', 0, '2018-08-10', '2018-08-31', 0, 1, '2018-08-10'),
(6, '5b6dff7880fef', 'PROYECTO DE EJEMPLO', 'UNA BREVE DESCRIPCION', 0, '2018-08-10', '2018-08-31', 0, 1, '2018-08-10'),
(7, '5b6e00e46e72f', 'xxx', 'www', 0, '2018-08-10', '2018-08-11', 0, 1, '2018-08-10'),
(8, '5b6e01030a823', 'xxs', 'www', 0, '2018-08-10', '2018-09-01', 0, 1, '2018-08-10'),
(9, '5b8ed036b6459', 'martes', 'algo!', 0, '2018-09-04', '2018-09-04', 0, 1, '2018-09-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id` int(8) NOT NULL,
  `documentoId` int(8) NOT NULL,
  `userId` int(11) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `estado` int(11) NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `vigente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mauricio', 'mauriciohz2002@gmail.com', '$2y$10$ycv7xXHjonL6ktxJeKpR0.kJpCXH4XUVxvvKLxsuDCSptWxv6K66q', 'MIURaQZFJEfy2RVrnffwUY6xAJG06kqNmugBbd2PE3hGqJiL6zya57umiye9', '2018-07-31 18:09:02', '2018-07-31 18:09:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
