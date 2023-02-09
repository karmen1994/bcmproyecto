-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2023 a las 03:10:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bcmproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `grupo_id` bigint(20) UNSIGNED NOT NULL,
  `equipo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `grupo_id`, `equipo_id`, `created_at`, `updated_at`) VALUES
(1, 'Alejandro Alberola Gopar', 2, 2, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(2, 'Donovan Martín Hernández', 2, 3, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(3, 'Marco Antonio López Expósito', 2, 4, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(4, 'Jose Raimundo Concepción Ruiz', 2, 5, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(5, 'Jorge San Juan Francisco', 2, 6, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(6, 'Sara González Martín', 2, 10, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(7, 'Carmen Nieves Hernández González', 2, 11, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(8, 'Aram Hernández Rodríguez', 2, 12, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(9, 'Diego Rodríguez Jacinto', 2, 13, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(10, 'Diego Brito Sánchez', 2, 14, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(11, 'Brian Álvarez Bermúdez', 2, 15, '2023-02-09 00:41:17', '2023-02-09 00:41:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'D58', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(2, 'D59', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(3, 'D52', '2023-02-09 00:41:17', '2023-02-09 00:41:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `averiado` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `aula_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `averiado`, `numero`, `aula_id`, `created_at`, `updated_at`) VALUES
(1, '', 201, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(2, '', 202, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(3, '', 203, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(4, '', 204, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(5, '', 205, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(6, '', 206, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(7, '', 207, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(8, '', 208, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(9, '', 209, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(10, '', 210, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(11, '', 211, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(12, '', 212, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(13, '', 213, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(14, '', 214, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(15, '', 215, 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_periferico`
--

CREATE TABLE `equipo_periferico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipo_id` bigint(20) UNSIGNED NOT NULL,
  `periferico_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo_periferico`
--

INSERT INTO `equipo_periferico` (`id`, `equipo_id`, `periferico_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 2, 1, NULL, NULL),
(8, 2, 2, NULL, NULL),
(9, 2, 3, NULL, NULL),
(10, 2, 4, NULL, NULL),
(11, 2, 5, NULL, NULL),
(12, 2, 6, NULL, NULL),
(13, 3, 1, NULL, NULL),
(14, 3, 2, NULL, NULL),
(15, 3, 3, NULL, NULL),
(16, 3, 4, NULL, NULL),
(17, 3, 5, NULL, NULL),
(18, 3, 6, NULL, NULL),
(19, 4, 1, NULL, NULL),
(20, 4, 2, NULL, NULL),
(21, 4, 3, NULL, NULL),
(22, 4, 4, NULL, NULL),
(23, 4, 5, NULL, NULL),
(24, 4, 6, NULL, NULL),
(25, 5, 1, NULL, NULL),
(26, 5, 2, NULL, NULL),
(27, 5, 3, NULL, NULL),
(28, 5, 4, NULL, NULL),
(29, 5, 5, NULL, NULL),
(30, 5, 6, NULL, NULL),
(31, 6, 1, NULL, NULL),
(32, 6, 2, NULL, NULL),
(33, 6, 3, NULL, NULL),
(34, 6, 4, NULL, NULL),
(35, 6, 5, NULL, NULL),
(36, 6, 6, NULL, NULL),
(37, 7, 1, NULL, NULL),
(38, 7, 2, NULL, NULL),
(39, 7, 3, NULL, NULL),
(40, 7, 4, NULL, NULL),
(41, 7, 5, NULL, NULL),
(42, 7, 6, NULL, NULL),
(43, 8, 1, NULL, NULL),
(44, 8, 2, NULL, NULL),
(45, 8, 3, NULL, NULL),
(46, 8, 4, NULL, NULL),
(47, 8, 5, NULL, NULL),
(48, 8, 6, NULL, NULL),
(49, 9, 1, NULL, NULL),
(50, 9, 2, NULL, NULL),
(51, 9, 3, NULL, NULL),
(52, 9, 4, NULL, NULL),
(53, 9, 5, NULL, NULL),
(54, 9, 6, NULL, NULL),
(55, 10, 1, NULL, NULL),
(56, 10, 2, NULL, NULL),
(57, 10, 3, NULL, NULL),
(58, 10, 4, NULL, NULL),
(59, 10, 5, NULL, NULL),
(60, 10, 6, NULL, NULL),
(61, 11, 1, NULL, NULL),
(62, 11, 2, NULL, NULL),
(63, 11, 3, NULL, NULL),
(64, 11, 4, NULL, NULL),
(65, 11, 5, NULL, NULL),
(66, 11, 6, NULL, NULL),
(67, 12, 1, NULL, NULL),
(68, 12, 2, NULL, NULL),
(69, 12, 3, NULL, NULL),
(70, 12, 4, NULL, NULL),
(71, 12, 5, NULL, NULL),
(72, 12, 6, NULL, NULL),
(73, 13, 1, NULL, NULL),
(74, 13, 2, NULL, NULL),
(75, 13, 3, NULL, NULL),
(76, 13, 4, NULL, NULL),
(77, 13, 5, NULL, NULL),
(78, 13, 6, NULL, NULL),
(79, 14, 1, NULL, NULL),
(80, 14, 2, NULL, NULL),
(81, 14, 3, NULL, NULL),
(82, 14, 4, NULL, NULL),
(83, 14, 5, NULL, NULL),
(84, 14, 6, NULL, NULL),
(85, 15, 1, NULL, NULL),
(86, 15, 2, NULL, NULL),
(87, 15, 3, NULL, NULL),
(88, 15, 4, NULL, NULL),
(89, 15, 5, NULL, NULL),
(90, 15, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `aula_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `turno`, `aula_id`, `created_at`, `updated_at`) VALUES
(1, '1º DAW', 'Tarde', 2, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(2, '2º DAW', 'Tarde', 1, '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(3, '1º ASIR', 'Tarde', 3, '2023-02-09 00:41:17', '2023-02-09 00:41:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `equipo_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `detalles`, `turno`, `fecha`, `estado`, `equipo_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'No funciona el ratón. Se traba.', 'Tarde', '09/02/2023', 'pendiente', 4, 1, '2023-02-09 01:05:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_08_234451_create_sessions_table', 1),
(7, '2023_02_08_235554_create_perifericos_table', 1),
(8, '2023_02_08_235707_create_aulas_table', 1),
(9, '2023_02_08_235745_create_grupos_table', 1),
(10, '2023_02_08_235821_create_equipos_table', 1),
(11, '2023_02_08_235854_create_alumnos_table', 1),
(12, '2023_02_08_235943_create_incidencias_table', 1),
(13, '2023_02_09_000147_create_equipo_periferico_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perifericos`
--

CREATE TABLE `perifericos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perifericos`
--

INSERT INTO `perifericos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Pantalla 1', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(2, 'Pantalla 2', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(3, 'Teclado', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(4, 'Raton', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(5, 'Auriculares', '2023-02-09 00:41:17', '2023-02-09 00:41:17'),
(6, 'Silla', '2023-02-09 00:41:17', '2023-02-09 00:41:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NmjyrYV040ZBChwzb7Se9Fi4CGxhciDIoDKD7BoD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.78', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicEYyZlFRZjRybFV6WHpxVWpZR2UzUjdWcWs3Tkt6Y0dYV0VmZURLVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdWxhcy8zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1675908606),
('qdBSVH6bFl1i0BcN1ueQOJxllUdtb5CXKams3DaY', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.78', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnQ3c0NFemY1ZzJrQjVDMUpBRnpYNk0xMkt6WVE2QkcwMmFraG5aeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvYmNtcHJveWVjdG8vYmNtcHJveWVjdG8vcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1675908554);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npda` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `npda`, `name`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 8, 'Jorge Hernández Cabrera', '1234', NULL, NULL, NULL, 'WJqNEV0s7F', '2023-02-09 00:41:17', '2023-02-09 00:41:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_grupo_id_foreign` (`grupo_id`),
  ADD KEY `alumnos_equipo_id_foreign` (`equipo_id`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipos_aula_id_foreign` (`aula_id`);

--
-- Indices de la tabla `equipo_periferico`
--
ALTER TABLE `equipo_periferico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo_periferico_equipo_id_foreign` (`equipo_id`),
  ADD KEY `equipo_periferico_periferico_id_foreign` (`periferico_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupos_aula_id_foreign` (`aula_id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incidencias_equipo_id_foreign` (`equipo_id`),
  ADD KEY `incidencias_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `perifericos`
--
ALTER TABLE `perifericos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `equipo_periferico`
--
ALTER TABLE `equipo_periferico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `perifericos`
--
ALTER TABLE `perifericos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_equipo_id_foreign` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alumnos_grupo_id_foreign` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_aula_id_foreign` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `equipo_periferico`
--
ALTER TABLE `equipo_periferico`
  ADD CONSTRAINT `equipo_periferico_equipo_id_foreign` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `equipo_periferico_periferico_id_foreign` FOREIGN KEY (`periferico_id`) REFERENCES `perifericos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_aula_id_foreign` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_equipo_id_foreign` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `incidencias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
