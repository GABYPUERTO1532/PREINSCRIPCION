-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 11:57:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preinscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL COMMENT 'Identificador Tipo Actor',
  `act_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre actor',
  `act_abb` varchar(5) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Abreviatura Nombre Actor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `act_nam`, `act_abb`) VALUES
(1, 'Madre', 'MD'),
(2, 'Padre', 'PD'),
(3, 'Acudiente', 'AC'),
(4, 'Coodinacion Convivencial', 'CC'),
(5, 'Coordinacion Academica', 'CA'),
(6, 'Docente', 'DC'),
(7, 'Secretaria', 'SE'),
(8, 'Refrigerios', 'RF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ars`
--

CREATE TABLE `ars` (
  `id` int(11) NOT NULL COMMENT 'Identificador ars',
  `ars_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Ars'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ars`
--

INSERT INTO `ars` (`id`, `ars_nam`) VALUES
(1, 'CAFAM'),
(2, 'NUEVA EPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blo_grp`
--

CREATE TABLE `blo_grp` (
  `id` int(11) NOT NULL COMMENT 'Identificador  nombre grupo sanguíneo',
  `gro_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre grupo Sanguíneo',
  `rh_fact` varchar(1) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Factor RH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `blo_grp`
--

INSERT INTO `blo_grp` (`id`, `gro_nam`, `rh_fact`) VALUES
(13, 'A', '+'),
(14, 'A', '-'),
(15, 'B', '+'),
(16, 'B', '-'),
(17, 'AB', '+'),
(18, 'AB', '-'),
(19, 'O', '+'),
(20, 'O', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL COMMENT 'Identificador Ciudad',
  `cit_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de la ciudad',
  `cit_dep` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Departmento perteneciente la ciudad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `cit_nam`, `cit_dep`) VALUES
(1, 'BOGOTA', 'CUNDINAMARCA'),
(2, 'SOACHA', 'CUNDINAMARCA'),
(3, 'FACATATIVA', 'CUNDINAMARCA'),
(4, 'FUSAGASUGA', 'CUNDINAMARCA'),
(5, 'ZIPAQUIRA', 'CUNDINAMARCA'),
(6, 'CHIA', 'CUNDINAMARCA'),
(7, 'GIRARDOT', 'CUNDINAMARCA'),
(8, 'MOSQUERA', 'CUNDINAMARCA'),
(9, 'MADRID', 'CUNDINAMARCA'),
(10, 'FUNZA', 'CUNDINAMARCA'),
(11, 'CAJICA', 'CUNDINAMARCA'),
(12, 'UBATE', 'CUNDINAMARCA'),
(13, 'GUADUAS', 'CUNDINAMARCA'),
(14, 'SIBATE', 'CUNDINAMARCA'),
(15, 'LA MESA', 'CUNDINAMARCA'),
(16, 'PACHO', 'CUNDINAMARCA'),
(17, 'TOCANCIPA', 'CUNDINAMARCA'),
(18, 'VILLETA', 'CUNDINAMARCA'),
(19, 'LA CALERA', 'CUNDINAMARCA'),
(20, 'SOPO', 'CUNDINAMARCA'),
(21, 'SILVANIA', 'CUNDINAMARCA'),
(22, 'TABIO', 'CUNDINAMARCA'),
(23, 'EL COLEGIO', 'CUNDINAMARCA'),
(24, 'COTA', 'CUNDINAMARCA'),
(25, 'CHOCONTA', 'CUNDINAMARCA'),
(26, 'COGUA', 'CUNDINAMARCA'),
(27, 'TENJO', 'CUNDINAMARCA'),
(28, 'VILLAPINZON', 'CUNDINAMARCA'),
(29, 'TOCAIMA', 'CUNDINAMARCA'),
(30, 'CAQUEZA', 'CUNDINAMARCA'),
(31, 'YACOPI', 'CUNDINAMARCA'),
(32, 'PUERTO SALGAR', 'CUNDINAMARCA'),
(33, 'NILO', 'CUNDINAMARCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

CREATE TABLE `departaments` (
  `id` int(11) NOT NULL COMMENT 'Identificador Departamento',
  `dep_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Departamento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `departaments`
--

INSERT INTO `departaments` (`id`, `dep_nam`) VALUES
(1, 'CUNDINAMARCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_typ`
--

CREATE TABLE `doc_typ` (
  `id` int(11) NOT NULL COMMENT 'Identificador Tipo documento',
  `doc_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo documento',
  `doc_abb` varchar(5) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Abreviatura documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `doc_typ`
--

INSERT INTO `doc_typ` (`id`, `doc_typ`, `doc_abb`) VALUES
(1, 'Tarjeta de Identidad', 'TI'),
(2, 'Cedula de ciudadania', 'CC'),
(3, 'No. de Identificacion Personal', 'NIP'),
(4, 'No. de Identificacion Tributaria', 'NIT'),
(5, 'Pasaporte', 'PAP'),
(6, 'Registro Civil', 'RC'),
(7, 'No. Único de Identificación personal', 'NUIP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edu_inf`
--

CREATE TABLE `edu_inf` (
  `id` int(11) NOT NULL COMMENT 'Codigo Registro',
  `stu_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de documento Estudiante',
  `sch_grd` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Grado Cursado',
  `sch_yea` year(4) NOT NULL COMMENT 'Año cursado',
  `sch_cit` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad donde fue cursado',
  `sch_ins` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Instituto donde fue Cursado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `edu_inf`
--

INSERT INTO `edu_inf` (`id`, `stu_id`, `sch_grd`, `sch_yea`, `sch_cit`, `sch_ins`) VALUES
(1, '1019604622', 'bogota', 2016, 'bogota', ''),
(2, '1019604622', 'bogota', 2017, 'bogota', ''),
(3, '1019604622', 'bogota', 2018, 'bogota', ''),
(4, '1019604622', 'bogota', 2019, 'bogota', ''),
(5, '1019604622', 'bogota', 2020, 'bogota', ''),
(6, '1019604622', 'bogota', 2021, 'bogota', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `id` int(11) NOT NULL COMMENT 'Identificador eps',
  `eps_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Eps'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`id`, `eps_nam`) VALUES
(1, 'FAMISANAR'),
(2, 'NUEVA EPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiars`
--

CREATE TABLE `familiars` (
  `id` int(11) NOT NULL COMMENT 'Identificador Padres',
  `fam_nam` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre  Completo Familiar',
  `doc_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de documento',
  `doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de identificación familiar',
  `fam_land` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono fijo familiar',
  `mob_pho` varchar(13) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono móvil Familiar',
  `fam_add` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda familiar',
  `fam_ocu` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ocupación familiar',
  `fam_ema` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico Familiar',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificacion Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `familiars`
--

INSERT INTO `familiars` (`id`, `fam_nam`, `doc_typ`, `doc_num`, `fam_land`, `mob_pho`, `fam_add`, `fam_ocu`, `fam_ema`, `cre_dat`, `upd_dat`) VALUES
(21, 'ANA PATRICIA ROJAS', 'CC', '39546537', '6013874710', '3213842028', 'CLL 82 #95 C-14 INT 311', 'EMPLEADA', 'aprojasrodriguez69@gmail.com', '2022-09-16 11:54:56', '2022-09-16 11:54:56'),
(22, 'GABRIEL PUERTO GRANADOS', 'CC', '140747', '3104191064', '3104191064', 'CLL 82 #95 C-14 INT 311', 'PENSIONADO', 'gabo.0747@hotmail.com', '2022-09-16 11:54:56', '2022-09-16 11:54:56'),
(23, 'JUAN SEBASTIAN GUTIERREZ ROJAS', 'CC', '1014222352', '3874710', '3213842028', 'CLL 82 #95 C-14 INT 311', 'EMPLEADO', 'ing.sgut2352@gmail.com', '2022-09-16 11:54:56', '2022-09-16 11:54:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL COMMENT 'Identificador localidad',
  `loc_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre localidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `loc_nam`) VALUES
(1, 'ENGATIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `neigh`
--

CREATE TABLE `neigh` (
  `id` int(11) NOT NULL COMMENT 'Identificador Barrio',
  `neig_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Barrio',
  `loc_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Localidad a la que pertenece el barrio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `neigh`
--

INSERT INTO `neigh` (`id`, `neig_nam`, `loc_nam`) VALUES
(1, 'BACHUE II', 'ENGATIVA'),
(2, 'VILLAS DE GRANADA', 'ENGATIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `other_inf`
--

CREATE TABLE `other_inf` (
  `id` int(11) NOT NULL COMMENT 'Codigo Registro',
  `stu_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Codigo Estudiante',
  `conf_vic` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Victima de Conflicto',
  `dis_sit` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Situacion de desplazamiento',
  `dis_arm_grp` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Desvinculado de grupos armados',
  `dem_son` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hijo de desmovilizado',
  `lim_stu` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Limitaciones',
  `exp_cap` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Capacidades Excepcionales',
  `iq_sco` varchar(8) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Puntaje CI',
  `ass_tes` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Examen de valoracion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `other_inf`
--

INSERT INTO `other_inf` (`id`, `stu_id`, `conf_vic`, `dis_sit`, `dis_arm_grp`, `dem_son`, `lim_stu`, `exp_cap`, `iq_sco`, `ass_tes`) VALUES
(1, '1019604622', 'NO', 'NO', 'NO', 'NO', 'Ninguna', 'Ninguna', 'N/A', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pob_typ`
--

CREATE TABLE `pob_typ` (
  `id` int(11) NOT NULL COMMENT 'Identificador tipo de población',
  `pob_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del tipo de población'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pob_typ`
--

INSERT INTO `pob_typ` (`id`, `pob_typ`) VALUES
(1, 'VULNERABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recov_op`
--

CREATE TABLE `recov_op` (
  `id` int(11) NOT NULL COMMENT 'Identificador Operación recuperación',
  `recov_op` datetime NOT NULL COMMENT 'Fecha recuperación',
  `user_id` int(11) NOT NULL COMMENT 'Identificador Usuario',
  `old_hash` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hash Anterior',
  `new_hash` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hash actualizado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relations`
--

CREATE TABLE `relations` (
  `id` int(11) NOT NULL COMMENT 'Identificador relación',
  `fam_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Identificador Familiar',
  `rel_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de relación con el estudiante',
  `stu_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Identificador Estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `relations`
--

INSERT INTO `relations` (`id`, `fam_id`, `rel_typ`, `stu_id`) VALUES
(21, '39546537', 'Madre', '1019604622'),
(22, '140747', 'Padre', '1019604622'),
(23, '1014222352', 'Acudiente', '1019604622');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rh_fact`
--

CREATE TABLE `rh_fact` (
  `id` int(11) NOT NULL COMMENT 'Codigo Factor',
  `fac_nam` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Factor RH',
  `sym_fact` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Simbolo Factor RH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rh_fact`
--

INSERT INTO `rh_fact` (`id`, `fac_nam`, `sym_fact`) VALUES
(1, 'POSITIVO', '+'),
(2, 'NEGATIVO', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisb_cat`
--

CREATE TABLE `sisb_cat` (
  `id` int(11) NOT NULL COMMENT 'Identificador categoría Sisbén',
  `cat_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre categoría Sisbén',
  `pob_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de población perteneciente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sisb_cat`
--

INSERT INTO `sisb_cat` (`id`, `cat_nam`, `pob_nam`) VALUES
(1, 'C16', 'VULNERABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL COMMENT 'Identificador Estudiante',
  `firs_sur` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Primer apellido Estudiante',
  `sec_sur` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Segundo apellido estudiante',
  `firs_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Primer nombre Estudiante',
  `sec_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Segundo nombre Estudiante',
  `dat_bir` date NOT NULL COMMENT 'Fecha de nacimiento Estudiante',
  `stu_cit` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad de nacimiento Estudiante',
  `stu_dep` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Departamento de origen estudiante',
  `doc_typ` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de documento estudiante',
  `doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de documento estudiante',
  `exp_cit` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad de expedición',
  `stu_add` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda Estudiante',
  `stu_nei` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Barrio de vivienda estudiante',
  `stu_loc` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Localidad de vivienda Estudiante',
  `stu_est` int(11) NOT NULL COMMENT 'Estrato estudiante',
  `stu_cat` varchar(4) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Categoría Sisbén estudiante',
  `stu_tel` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono personal estudiante',
  `stu_hob` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hobbies o pasatiempos del estudiante',
  `stu_enf` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Enfermedades o fracturas estudiante',
  `stu_eps` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Eps Estudiante',
  `stu_ars` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ars Estudiante',
  `stu_ips` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ips Estudiante',
  `b_grp` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Grupo sanguíneo estudiante',
  `rh_fact` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Factor Rh estudiante',
  `pre_stu` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Estado preinscripción ',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificación Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `firs_sur`, `sec_sur`, `firs_nam`, `sec_nam`, `dat_bir`, `stu_cit`, `stu_dep`, `doc_typ`, `doc_num`, `exp_cit`, `stu_add`, `stu_nei`, `stu_loc`, `stu_est`, `stu_cat`, `stu_tel`, `stu_hob`, `stu_enf`, `stu_eps`, `stu_ars`, `stu_ips`, `b_grp`, `rh_fact`, `pre_stu`, `cre_dat`, `upd_dat`) VALUES
(52, 'PUERTO', 'ROJAS', 'GABRIEL', 'SANTIAGO', '2006-02-03', 'BOGOTA', 'CUNDINAMARCA', 'TI', '1019604622', 'BOGOTA', 'CLL 82 #95 C-14 INT 311', 'BACHUE II', 'ENGATIVA', 3, 'C16', '3007410404', 'VOLEY', 'ASMA', 'NUEVA EPS', 'NUEVA EPS', 'TIERRA GRATA', 'A', 'POSITIVO', '1', '2022-09-16 11:54:56', '2022-09-16 11:54:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL COMMENT 'Identificador Empleado',
  `per_nam` varchar(600) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Completo Empleado',
  `doc_num` varchar(19) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de identificación Empleado',
  `per_land` int(11) NOT NULL COMMENT 'Teléfono fijo Empleado',
  `per_pho` varchar(13) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono móvil Empleado',
  `per_add` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda Empleado',
  `per_char` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Cargo del Empleado',
  `per_ema` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico del empleado',
  `per_hash` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hash de contraseña empleado',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificación Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `workers`
--

INSERT INTO `workers` (`id`, `per_nam`, `doc_num`, `per_land`, `per_pho`, `per_add`, `per_char`, `per_ema`, `per_hash`, `cre_dat`, `upd_dat`) VALUES
(1, 'GABRIEL SANTIAGO PUERTO ROJAS', '1019604622', 3874710, '3222325596', 'DIRECCION', 'Coordinacion Academica', 'gabrielspuertor57@gmail.com', '$2y$10$kPW2wLbmuKGMO6BzAoDdzu/nB02O3OOoKOrep/KgZ/w68p9RgnA.2', '2022-09-16 05:35:41', '2022-09-16 05:35:41'),
(2, 'SERGIO ALFONSO FORERO LOPEZ', '1111111', 222222, '555555', 'DIRECCION', 'Docente', 'sergioaforerol@juandelcorral.edu.co', '$2y$10$ttP5T6Dk1AtmmrhGGXSbn.2gJjku9bW459k.d4241KU2Pochy4FS2', '2022-09-16 06:10:09', '2022-09-16 06:10:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `act_nam` (`act_nam`),
  ADD KEY `act_abb` (`act_abb`);

--
-- Indices de la tabla `ars`
--
ALTER TABLE `ars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ars_nam` (`ars_nam`);

--
-- Indices de la tabla `blo_grp`
--
ALTER TABLE `blo_grp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gro_nam` (`gro_nam`),
  ADD KEY `rh_fact` (`rh_fact`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cit_nam` (`cit_nam`),
  ADD KEY `cit_dep` (`cit_dep`);

--
-- Indices de la tabla `departaments`
--
ALTER TABLE `departaments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dep_nam` (`dep_nam`);

--
-- Indices de la tabla `doc_typ`
--
ALTER TABLE `doc_typ`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_typ` (`doc_typ`),
  ADD KEY `doc_abb` (`doc_abb`);

--
-- Indices de la tabla `edu_inf`
--
ALTER TABLE `edu_inf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `sch_cit` (`sch_cit`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eps_nam` (`eps_nam`);

--
-- Indices de la tabla `familiars`
--
ALTER TABLE `familiars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_num` (`doc_num`),
  ADD KEY `doc_typ` (`doc_typ`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc_nam` (`loc_nam`);

--
-- Indices de la tabla `neigh`
--
ALTER TABLE `neigh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `neig_nam` (`neig_nam`),
  ADD KEY `loc_nam` (`loc_nam`);

--
-- Indices de la tabla `other_inf`
--
ALTER TABLE `other_inf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indices de la tabla `pob_typ`
--
ALTER TABLE `pob_typ`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pob_typ` (`pob_typ`);

--
-- Indices de la tabla `recov_op`
--
ALTER TABLE `recov_op`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_typ` (`rel_typ`),
  ADD KEY `fam_id` (`fam_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indices de la tabla `rh_fact`
--
ALTER TABLE `rh_fact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fac_nam` (`fac_nam`),
  ADD KEY `sym_fact` (`sym_fact`);

--
-- Indices de la tabla `sisb_cat`
--
ALTER TABLE `sisb_cat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_nam` (`cat_nam`),
  ADD KEY `pob_nam` (`pob_nam`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_cit` (`stu_cit`),
  ADD KEY `stu_dep` (`stu_dep`),
  ADD KEY `doc_typ` (`doc_typ`),
  ADD KEY `exp_loc` (`exp_cit`),
  ADD KEY `stu_neig` (`stu_nei`),
  ADD KEY `sisb_cat` (`stu_cat`),
  ADD KEY `stu_ars` (`stu_ars`),
  ADD KEY `stu_eps` (`stu_eps`),
  ADD KEY `rh_fact` (`rh_fact`),
  ADD KEY `b_grp` (`b_grp`),
  ADD KEY `stu_loc` (`stu_loc`),
  ADD KEY `doc_num` (`doc_num`);

--
-- Indices de la tabla `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `per_char` (`per_char`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Tipo Actor', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ars`
--
ALTER TABLE `ars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador ars', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `blo_grp`
--
ALTER TABLE `blo_grp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador  nombre grupo sanguíneo', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Ciudad', AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT de la tabla `departaments`
--
ALTER TABLE `departaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Departamento', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `doc_typ`
--
ALTER TABLE `doc_typ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Tipo documento', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `edu_inf`
--
ALTER TABLE `edu_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador eps', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `familiars`
--
ALTER TABLE `familiars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Padres', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador localidad', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `neigh`
--
ALTER TABLE `neigh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Barrio', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `other_inf`
--
ALTER TABLE `other_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pob_typ`
--
ALTER TABLE `pob_typ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador tipo de población', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recov_op`
--
ALTER TABLE `recov_op`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Operación recuperación';

--
-- AUTO_INCREMENT de la tabla `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador relación', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `rh_fact`
--
ALTER TABLE `rh_fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Factor', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sisb_cat`
--
ALTER TABLE `sisb_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador categoría Sisbén', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Estudiante', AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador Empleado', AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blo_grp`
--
ALTER TABLE `blo_grp`
  ADD CONSTRAINT `blo_grp_ibfk_1` FOREIGN KEY (`rh_fact`) REFERENCES `rh_fact` (`sym_fact`);

--
-- Filtros para la tabla `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`cit_dep`) REFERENCES `departaments` (`dep_nam`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `edu_inf`
--
ALTER TABLE `edu_inf`
  ADD CONSTRAINT `edu_inf_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`doc_num`) ON UPDATE CASCADE,
  ADD CONSTRAINT `edu_inf_ibfk_2` FOREIGN KEY (`sch_cit`) REFERENCES `cities` (`cit_nam`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `familiars`
--
ALTER TABLE `familiars`
  ADD CONSTRAINT `familiars_ibfk_1` FOREIGN KEY (`doc_typ`) REFERENCES `doc_typ` (`doc_abb`);

--
-- Filtros para la tabla `neigh`
--
ALTER TABLE `neigh`
  ADD CONSTRAINT `neigh_ibfk_1` FOREIGN KEY (`loc_nam`) REFERENCES `locations` (`loc_nam`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `other_inf`
--
ALTER TABLE `other_inf`
  ADD CONSTRAINT `other_inf_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`doc_num`);

--
-- Filtros para la tabla `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_ibfk_2` FOREIGN KEY (`fam_id`) REFERENCES `familiars` (`doc_num`) ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_ibfk_3` FOREIGN KEY (`stu_id`) REFERENCES `students` (`doc_num`) ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_ibfk_4` FOREIGN KEY (`rel_typ`) REFERENCES `actors` (`act_nam`);

--
-- Filtros para la tabla `sisb_cat`
--
ALTER TABLE `sisb_cat`
  ADD CONSTRAINT `sisb_cat_ibfk_1` FOREIGN KEY (`pob_nam`) REFERENCES `pob_typ` (`pob_typ`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_10` FOREIGN KEY (`stu_dep`) REFERENCES `departaments` (`dep_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_11` FOREIGN KEY (`exp_cit`) REFERENCES `cities` (`cit_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_12` FOREIGN KEY (`doc_typ`) REFERENCES `doc_typ` (`doc_abb`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_13` FOREIGN KEY (`rh_fact`) REFERENCES `rh_fact` (`fac_nam`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`stu_cit`) REFERENCES `cities` (`cit_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`stu_nei`) REFERENCES `neigh` (`neig_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`stu_loc`) REFERENCES `locations` (`loc_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_5` FOREIGN KEY (`stu_ars`) REFERENCES `ars` (`ars_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_6` FOREIGN KEY (`stu_eps`) REFERENCES `eps` (`eps_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_7` FOREIGN KEY (`b_grp`) REFERENCES `blo_grp` (`gro_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_9` FOREIGN KEY (`stu_cat`) REFERENCES `sisb_cat` (`cat_nam`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`per_char`) REFERENCES `actors` (`act_nam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
