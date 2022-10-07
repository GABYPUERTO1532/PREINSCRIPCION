-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2022 a las 05:14:51
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
  `id` int(11) NOT NULL COMMENT 'Codigo Registro',
  `act_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre actor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `act_nam`) VALUES
(3, 'Acudiente'),
(9, 'Administrador'),
(4, 'Coodinacion Convivencial'),
(5, 'Coordinacion Academica'),
(6, 'Docente'),
(1, 'Madre'),
(2, 'Padre'),
(10, 'Rectoria'),
(8, 'Refrigerios'),
(7, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blo_grp`
--

CREATE TABLE `blo_grp` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
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
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `cit_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de la ciudad',
  `cit_dep` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Departmento perteneciente la ciudad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `cit_nam`, `cit_dep`) VALUES
(1, 'Leticia', 'Amazonas'),
(2, 'Medellin', 'Antioquia'),
(3, 'Rionegro', 'Antioquia'),
(4, 'Apartado', 'Antioquia'),
(5, 'Turbo', 'Antioquia'),
(6, 'Caucasia', 'Antioquia'),
(7, 'Arauca', 'Arauca'),
(8, 'Barranquilla', 'Atlantico'),
(9, 'Sabanalarga', 'Atlantico'),
(10, 'Girardot', 'Cundinamarca'),
(11, 'Fusagasuga', 'Cundinamarca'),
(12, 'Zipaquira', 'Cundinamarca'),
(13, 'Facatativa', 'Cundinamarca'),
(14, 'Cartagena', 'Bolivar'),
(15, 'Magangue', 'Bolivar'),
(16, 'El Carmen De Bolivar', 'Bolivar'),
(17, 'Bogota', 'Bogota'),
(18, 'Tunja', 'Boyaca'),
(19, 'Duitama', 'Boyaca'),
(20, 'Sogamoso', 'Boyaca'),
(21, 'Manizales', 'Caldas'),
(22, 'Florencia', 'Caqueta'),
(23, 'Yopal', 'Casanare'),
(24, 'Popayan', 'Cauca'),
(25, 'Santander De Quilichao', 'Cauca'),
(26, 'Valledupar', 'Cesar'),
(27, 'Aguachica', 'Cesar'),
(28, 'Quibdo', 'Choco'),
(29, 'Monteria', 'Cordoba'),
(30, 'Lorica', 'Cordoba'),
(31, 'Montelibano', 'Cordoba'),
(32, 'Inirida', 'Guainia'),
(33, 'San Jose Del Guaviare', 'Guaviare'),
(34, 'Neiva', 'Hulia'),
(35, 'Pitalito', 'Hulia'),
(36, 'Riohacha', 'La Guajira'),
(37, 'Maicao', 'La Guajira'),
(38, 'Santa Marta', 'Magdalena'),
(39, 'Cienaga', 'Magdalena'),
(40, 'Villavicencio', 'Meta'),
(41, 'Pasto', 'Nariño'),
(42, 'Ipiales', 'Nariño'),
(43, 'Tumaco', 'Nariño'),
(44, 'Cucuta', 'Norte De Santander'),
(45, 'Ocaña', 'Norte De Santander'),
(46, 'Pamplona', 'Norte De Santander'),
(47, 'Mocoa', 'Putumayo'),
(48, 'Puerto Asis', 'Putumayo'),
(49, 'Armenia', 'Quindio'),
(50, 'Pereira', 'Risaralda'),
(51, 'San Andres Isla', 'San Andres Y Providencia'),
(52, 'Bucaramanga', 'Santander'),
(53, 'Barrancabermeja', 'Santander'),
(54, 'San Gil', 'Santander'),
(55, 'Sincelejo', 'Sucre'),
(56, 'Ibague', 'Tolima'),
(57, 'El Espinal', 'Tolima'),
(58, 'Cali', 'Valle del Cauca'),
(59, 'Tulua', 'Valle del Cauca'),
(60, 'Palmira', 'Valle del Cauca'),
(61, 'Buenaventura', 'Valle del Cauca'),
(62, 'Cartago', 'Valle del Cauca'),
(63, 'Buga', 'Valle del Cauca'),
(64, 'Mitu', 'Vaupes'),
(65, 'Puerto Carreño', 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

CREATE TABLE `departaments` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `dep_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Departamento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `departaments`
--

INSERT INTO `departaments` (`id`, `dep_nam`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlantico'),
(5, 'Bogota'),
(6, 'Bolivar'),
(7, 'Boyaca'),
(8, 'Caldas'),
(9, 'Caqueta'),
(10, 'Casanare'),
(11, 'Cauca'),
(12, 'Cesar'),
(14, 'Cordoba'),
(15, 'Cundinamarca'),
(13, 'Choco'),
(16, 'Guainia'),
(17, 'Guaviare'),
(18, 'Hulia'),
(19, 'La Guajira'),
(20, 'Magdalena'),
(21, 'Meta'),
(22, 'Nariño'),
(23, 'Norte De Santander'),
(24, 'Putumayo'),
(25, 'Quindio'),
(26, 'Risaralda'),
(27, 'San Andres Y Providencia'),
(28, 'Santander'),
(29, 'Sucre'),
(30, 'Tolima'),
(31, 'Valle del Cauca'),
(32, 'Vaupes'),
(33, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_typ`
--

CREATE TABLE `doc_typ` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `doc_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `doc_typ`
--

INSERT INTO `doc_typ` (`id`, `doc_typ`) VALUES
(2, 'Cedula de ciudadania'),
(3, 'No. de Identificacion Personal'),
(7, 'No. Unico de Identificación personal'),
(5, 'Pasaporte'),
(6, 'Registro Civil'),
(1, 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edu_inf`
--

CREATE TABLE `edu_inf` (
  `id` int(11) NOT NULL COMMENT 'Codigo Registro',
  `stu_doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de documento Estudiante',
  `sch_grd` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Grado Cursado',
  `sch_yea` year(4) NOT NULL COMMENT 'Año cursado',
  `sch_cit` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad donde fue cursado',
  `sch_ins` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Instituto donde fue Cursado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `edu_inf`
--

INSERT INTO `edu_inf` (`id`, `stu_doc_num`, `sch_grd`, `sch_yea`, `sch_cit`, `sch_ins`) VALUES
(91, '1021393246', 'Sexto', 2017, 'Bogota', 'ITD JUAN DEL CORRAL'),
(92, '1021393246', 'Septimo', 2018, 'Bogota', 'ITD JUAN DEL CORRAL'),
(93, '1021393246', 'Octavo', 2019, 'Bogota', 'ITD JUAN DEL CORRAL'),
(94, '1021393246', 'Noveno', 2020, 'Bogota', 'ITD JUAN DEL CORRAL'),
(95, '1021393246', 'Decimo', 2021, 'Bogota', 'ITD JUAN DEL CORRAL'),
(96, '1021393246', 'Once', 2021, 'Bogota', 'ITD JUAN DEL CORRAL'),
(97, '1011083243', 'Sexto', 2017, 'Bogota', 'ITD JUAN DEL CORRAL'),
(98, '1011083243', 'Septimo', 2018, 'Bogota', 'ITD JUAN DEL CORRAL'),
(99, '1011083243', 'Octavo', 2019, 'Bogota', 'ITD JUAN DEL CORRAL'),
(100, '1011083243', 'Noveno', 2020, 'Bogota', 'ITD JUAN DEL CORRAL'),
(101, '1011083243', 'Decimo', 2021, 'Bogota', 'ITD JUAN DEL CORRAL'),
(102, '1011083243', 'Once', 2021, 'Bogota', 'ITD JUAN DEL CORRAL'),
(133, '1048710065', 'Quinto', 2016, 'Bogota', 'INSTITUCIóN FE Y ALEGRíA '),
(134, '1048710065', 'Sexto', 2017, 'Bogota', 'INSTITUCIóN FE Y ALEGRíA '),
(135, '1048710065', 'Septimo', 2018, 'Bogota', 'INSTITUCIóN LUIS MARIANO'),
(136, '1048710065', 'Octavo', 2019, 'Bogota', 'INSTITUCIóN LUIS MARIANO'),
(137, '1048710065', 'Noveno', 2020, 'Bogota', 'JUAN DEL CORRAL'),
(138, '1048710065', 'Decimo', 2021, 'Bogota', 'JUAN DEL CORRAL'),
(669, '1032937438', 'Quinto', 2016, 'Bogota', 'NIDIA QUINTERO DE TURBAR'),
(670, '1032937438', 'Sexto', 2017, 'Bogota', 'ITD JUAN DEL CORRAL'),
(671, '1032937438', 'Septimo', 2018, 'Bogota', 'ITD JUAN DEL CORRAL'),
(672, '1032937438', 'Octavo', 2019, 'Bogota', 'ITD JUAN DEL CORRAL'),
(673, '1032937438', 'Noveno', 2020, 'Bogota', 'ITD JUAN DEL CORRAL'),
(674, '1032937438', 'Decimo', 2021, 'Bogota', 'ITD JUAN DEL CORRAL'),
(883, '1019604622', 'Quinto', 2016, 'Bogota', 'ITD JUAN DEL CORRAL'),
(884, '1019604622', 'Sexto', 2017, 'Bogota', 'ITD JUAN DEL CORRAL'),
(885, '1019604622', 'Septimo', 2018, 'Bogota', 'ITD JUAN DEL CORRAL'),
(886, '1019604622', 'Octavo', 2019, 'Bogota', 'ITD JUAN DEL CORRAL'),
(887, '1019604622', 'Noveno', 2020, 'Bogota', 'ITD JUAN DEL CORRAL'),
(888, '1019604622', 'Decimo', 2021, 'Bogota', 'ITD JUAN DEL CORRAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `eps_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Eps'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`id`, `eps_nam`) VALUES
(1, 'Aliansalud Entidad Promotora De Salud SA'),
(2, 'Anaswayuu'),
(15, 'Asociacion Indigena Del Cauca'),
(22, 'Asociacion Indigena Del Cesar Y La Guajira Dusakawi'),
(3, 'Asociacion Indigena Del Cuaca'),
(4, 'Asociacion Mutual Ser Empresa Solidaria De Salud EPS'),
(16, 'Capital Salud'),
(18, 'Capresoca EPS'),
(19, 'Comfenalco Valle EPS'),
(5, 'Compensar EPS'),
(6, 'Cooperativa De Salud Y Desarrollo Integral Zona Sur Oriental De Cartagena '),
(20, 'EPS Convida'),
(7, 'EPS Famisanar LTDA'),
(8, 'EPS Sanitas SA'),
(9, 'EPS Servicio Occidental De Salud SA'),
(23, 'EPS SOS SA'),
(10, 'EPS Y Medicina Prepagada Suramericana SA'),
(11, 'Fundacion Salud Mia EPS'),
(17, 'Mallamas'),
(12, 'Nueva EPS SA'),
(21, 'Pijaos Salud EPSI'),
(13, 'Salud Total SA EPS'),
(14, 'Savia Salud EPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiars`
--

CREATE TABLE `familiars` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `fam_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre  Completo Familiar',
  `doc_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de documento',
  `doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de identificación familiar',
  `fam_land` varchar(10) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono fijo familiar',
  `mob_pho` varchar(13) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono móvil Familiar',
  `fam_add` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda familiar',
  `fam_ocu` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ocupación familiar',
  `fam_ema` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico Familiar',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificacion Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `familiars`
--

INSERT INTO `familiars` (`id`, `fam_nam`, `doc_typ`, `doc_num`, `fam_land`, `mob_pho`, `fam_add`, `fam_ocu`, `fam_ema`, `cre_dat`, `upd_dat`) VALUES
(34, 'INGRID PATRICIA DE LA ROSA SANDON ', 'Cedula de ciudadania', '52088430', '4401450', '3017914528', 'CALLE76D#110-14', 'EMPLEADA', 'ingridpatricia52@hotmail.com', '2022-10-03 21:43:15', '2022-10-03 21:57:42'),
(35, 'JULIO MARIN BENITEZ MOSQUERA', 'Cedula de ciudadania', '1016816650', '4401450', '3017888078', 'CALLE76#110-14', 'EMPLEADO', 'ninguno@gmail.com', '2022-10-03 21:43:15', '2022-10-03 21:57:42'),
(36, 'INGRID PATRICIA DE LA ROSA SANDON ', 'Cedula de ciudadania', '52088430', '4401450', '3017914528', 'CALLE76D#110-14', 'EMPLEADA', 'ingridpatricia52@hotmail.com', '2022-10-03 21:43:15', '2022-10-03 21:57:42'),
(37, 'KAREN ANDREA CASTELLANOS RODRIGUEZ', 'Cedula de ciudadania', '1032425802', '3007682027', '3007682027', 'KR112C#72C-15', 'EMPLEADA', 'mihija20@hotmail.com', '2022-10-03 21:54:38', '2022-10-03 21:56:31'),
(38, 'DEIVIS JOSE HOSTIA VILLALOBOS', 'Cedula de ciudadania', '77104279', '3146512231', '3146512231', 'KR112C#72C-15', 'EMPLEADO', 'deivis281976@hotmail.com', '2022-10-03 21:54:38', '2022-10-03 21:56:31'),
(39, 'KAREN ANDREA CASTELLANOS RODRIGUEZ', 'Cedula de ciudadania', '1032425802', '3007682027', '3007682027', 'KR112C#72C-15', 'EMPLEADA', 'mihija20@hotmail.com', '2022-10-03 21:54:38', '2022-10-03 21:56:31'),
(40, 'SANDRA PATRICIA BORBON CLAVIJO', 'Cedula de ciudadania', '51937136', '4301574', '3102604427', 'CRA90BIS#76-51', 'EMPLEADA', '123456789@gmail.com', '2022-10-03 22:28:00', '2022-10-06 12:48:26'),
(41, 'GABRIEL', 'Cedula de ciudadania', '123456789', '4301574', '1234567890', 'CRA90BIS#76-51', 'N/A', '123456789@gmail.com', '2022-10-03 22:28:00', '2022-10-06 12:48:26'),
(42, 'LUZ ESTELA CLAVIJO DE BORBON', 'Cedula de ciudadania', '41347352', '4301574', '3102604427', 'CRA90BIS76-51', 'PENSIONADA', '123456789@gmail.com', '2022-10-03 22:28:00', '2022-10-06 12:48:26'),
(43, 'LUZ MIRIAM CAMACHO GAMBA', 'Cedula de ciudadania', '52692365', '12345678', '3134888841', 'CALLE64#125a17', 'COMERCIANTE', 'Miryamcamacho264@gamil.com', '2022-10-03 22:59:33', '2022-10-03 23:00:55'),
(44, 'JAIRO GABRIEL ALFONSO GAMEZ', 'Cedula de ciudadania', ' 4071391', '12345678', '3212329193', 'Calle64#125a17', 'COMERCIANTE', 'Jairogabriel1913@gmail.com', '2022-10-03 22:59:33', '2022-10-03 23:00:55'),
(45, 'JAIRO GABRIEL ALFONSO GAMEZ', 'Cedula de ciudadania', ' 4071391', '12345678', '3212329193', 'Calle64#125a17', 'COMERCIANTE', 'Jairogabriel1913@gmail.com', '2022-10-03 22:59:33', '2022-10-03 23:00:55'),
(49, 'ANA PATRICIA ROJAS RODRIGUEZ', 'Cedula de ciudadania', '39546537', '6013874710', '3213842028', 'CLL8295C-14INT311', 'EMPLEADA', 'aprojasrodriguez69@gmail.com', '2022-10-06 20:56:38', '2022-10-06 21:35:49'),
(50, 'GABRIEL PUERTO GRANDOS', 'Cedula de ciudadania', '4190747', '3104191064', '3104191064', 'CLL8295C-14INT311', 'PENSIONADO', 'gabo.0747@hotmail.com', '2022-10-06 20:56:38', '2022-10-06 21:35:49'),
(51, 'JUAN SEBASTIAN GUTIERREZ ROJAS', 'Cedula de ciudadania', '1014222352', '6013874710', '3132165438', 'CLL82#95C-14APT311', 'INDEPENDIENTE', 'ing.sgut2352@gmail.com', '2022-10-06 20:56:38', '2022-10-06 21:35:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL COMMENT 'Codigo Registro',
  `gra_nam` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Grado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `grades`
--

INSERT INTO `grades` (`id`, `gra_nam`) VALUES
(6, 'Cuarto'),
(12, 'Decimo'),
(11, 'Noveno'),
(10, 'Octavo'),
(13, 'Once'),
(1, 'Preescolar'),
(3, 'Primero'),
(7, 'Quinto'),
(4, 'Segundo'),
(9, 'Septimo'),
(8, 'Sexto'),
(5, 'Tercero'),
(2, 'Transicion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `loc_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre localidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `loc_nam`) VALUES
(15, 'Antonio Nariño'),
(12, 'Barrios Unidos'),
(7, 'Bosa'),
(17, 'Candelaria'),
(19, 'Ciudad Bolivar'),
(2, 'Chapinero'),
(10, 'Engativa'),
(9, 'Fontibon'),
(8, 'Kennedy'),
(14, 'Los Martires'),
(16, 'Puente Aranda'),
(18, 'Rafael Uribe Uribe'),
(4, 'San Cristobal'),
(3, 'Santa Fe'),
(11, 'Suba'),
(20, 'Sumapaz'),
(13, 'Teusaquillo'),
(6, 'Tunjuelito'),
(1, 'Usaquen'),
(5, 'Usme');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `other_inf`
--

CREATE TABLE `other_inf` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `stu_doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Codigo Estudiante',
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

INSERT INTO `other_inf` (`id`, `stu_doc_num`, `conf_vic`, `dis_sit`, `dis_arm_grp`, `dem_son`, `lim_stu`, `exp_cap`, `iq_sco`, `ass_tes`) VALUES
(12, '1011083243', 'No', 'No', 'No', 'No', 'NINGUNA', 'NINGUNA', 'N/A', 'No'),
(13, '1021393246', 'No', 'No', 'No', 'No', 'NINGUNA', 'NINGUNA', 'N/A', 'No'),
(14, '1032937438', 'No', 'No', 'No', 'No', 'N/A', 'N/A', 'N/A', 'No'),
(15, '1048710065', 'No', 'No', 'No', 'No', 'N/A', 'N/A', 'N/A', 'No'),
(17, '1019604622', 'Si', 'Si', 'Si', 'Si', 'NINGUNA', 'NINGUNA', 'N/A', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pob_typ`
--

CREATE TABLE `pob_typ` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `pob_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del tipo de población'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pob_typ`
--

INSERT INTO `pob_typ` (`id`, `pob_typ`) VALUES
(5, 'N/A'),
(4, 'No Vulnerable'),
(2, 'Pobreza Extrema'),
(3, 'Pobreza Moderada'),
(1, 'Vulnerable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_stu`
--

CREATE TABLE `pre_stu` (
  `id` int(11) NOT NULL COMMENT 'Codigo Registro',
  `stu_doc_typ` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de documento estudiante',
  `stu_doc_num` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de documento Estudiante',
  `stu_typ` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de estudiante',
  `dat_pre` datetime NOT NULL COMMENT 'Fecha de preinscripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pre_stu`
--

INSERT INTO `pre_stu` (`id`, `stu_doc_typ`, `stu_doc_num`, `stu_typ`, `dat_pre`) VALUES
(166, 'Tarjeta de Identidad', '1019604622', 'Nuevo', '2022-10-06 22:10:08'),
(167, 'Tarjeta de Identidad', '1019604622', 'Nuevo', '2022-10-06 22:10:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relations`
--

CREATE TABLE `relations` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `fam_doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Identificador Familiar',
  `rel_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de relación con el estudiante',
  `stu_doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Identificador Estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `relations`
--

INSERT INTO `relations` (`id`, `fam_doc_num`, `rel_typ`, `stu_doc_num`) VALUES
(34, '52088430', 'Madre', '1011083243'),
(35, '1016816650', 'Padre', '1011083243'),
(36, '52088430', 'Acudiente', '1011083243'),
(37, '1032425802', 'Madre', '1021393246'),
(38, '77104279', 'Padre', '1021393246'),
(39, '1032425802', 'Acudiente', '1021393246'),
(40, '51937136', 'Madre', '1032937438'),
(41, '123456789', 'Padre', '1032937438'),
(42, '41347352', 'Acudiente', '1032937438'),
(43, '52692365', 'Madre', '1048710065'),
(44, ' 4071391', 'Padre', '1048710065'),
(45, ' 4071391', 'Acudiente', '1048710065'),
(49, '39546537', 'Madre', '1019604622'),
(50, '4190747', 'Padre', '1019604622'),
(51, '1014222352', 'Acudiente', '1019604622');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rh_fact`
--

CREATE TABLE `rh_fact` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `fac_nam` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Factor RH',
  `sym_fact` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Simbolo Factor RH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rh_fact`
--

INSERT INTO `rh_fact` (`id`, `fac_nam`, `sym_fact`) VALUES
(1, 'Positivo', '+'),
(2, 'Negativo', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisb_cat`
--

CREATE TABLE `sisb_cat` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `cat_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre categoría Sisbén',
  `pob_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de población perteneciente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sisb_cat`
--

INSERT INTO `sisb_cat` (`id`, `cat_nam`, `pob_nam`) VALUES
(1, 'A1', 'Pobreza Extrema'),
(2, 'A2', 'Pobreza Extrema'),
(3, 'A3', 'Pobreza Extrema'),
(4, 'A4', 'Pobreza Extrema'),
(5, 'A5', 'Pobreza Extrema'),
(6, 'B1', 'Pobreza Moderada'),
(7, 'B2', 'Pobreza Moderada'),
(8, 'B3', 'Pobreza Moderada'),
(9, 'B4', 'Pobreza Moderada'),
(10, 'B5', 'Pobreza Moderada'),
(11, 'B6', 'Pobreza Extrema'),
(12, 'B7', 'Pobreza Moderada'),
(13, 'C1', 'Vulnerable'),
(14, 'C1', 'Vulnerable'),
(15, 'C2', 'Vulnerable'),
(16, 'C3', 'Vulnerable'),
(17, 'C4', 'Vulnerable'),
(18, 'C5', 'Vulnerable'),
(19, 'C6', 'Vulnerable'),
(20, 'C7', 'Vulnerable'),
(21, 'C8', 'Vulnerable'),
(22, 'C9', 'Vulnerable'),
(23, 'C10', 'Vulnerable'),
(24, 'C11', 'Vulnerable'),
(25, 'C12', 'Vulnerable'),
(26, 'C13', 'Vulnerable'),
(27, 'C14', 'Vulnerable'),
(28, 'C15', 'Vulnerable'),
(29, 'C16', 'Vulnerable'),
(30, 'C17', 'Vulnerable'),
(31, 'C18', 'Vulnerable'),
(32, 'D1', 'No Vulnerable'),
(33, 'D2', 'No Vulnerable'),
(34, 'D3', 'No Vulnerable'),
(35, 'D4', 'No Vulnerable'),
(36, 'D5', 'No Vulnerable'),
(37, 'D6', 'No Vulnerable'),
(38, 'D7', 'No Vulnerable'),
(39, 'D8', 'No Vulnerable'),
(40, 'D9', 'No Vulnerable'),
(41, 'D10', 'No Vulnerable'),
(42, 'D11', 'No Vulnerable'),
(43, 'D12', 'No Vulnerable'),
(44, 'D13', 'No Vulnerable'),
(45, 'D14', 'No Vulnerable'),
(46, 'D15', 'No Vulnerable'),
(47, 'D16', 'No Vulnerable'),
(48, 'D17', 'No Vulnerable'),
(49, 'D18', 'No Vulnerable'),
(50, 'D19', 'No Vulnerable'),
(51, 'D20', 'No Vulnerable'),
(52, 'D21', 'No Vulnerable'),
(53, 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `firs_sur` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Primer apellido Estudiante',
  `sec_sur` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Segundo apellido estudiante',
  `firs_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Primer nombre Estudiante',
  `sec_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Segundo nombre Estudiante',
  `dat_bir` date NOT NULL COMMENT 'Fecha de nacimiento Estudiante',
  `stu_cit` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad de nacimiento Estudiante',
  `stu_dep` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Departamento de origen estudiante',
  `doc_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de documento estudiante',
  `doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de documento estudiante',
  `exp_cit` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad de expedición',
  `stu_add` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda Estudiante',
  `stu_nei` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Barrio de vivienda estudiante',
  `stu_loc` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Localidad de vivienda Estudiante',
  `stu_est` int(11) NOT NULL COMMENT 'Estrato estudiante',
  `stu_cat` varchar(4) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Categoría Sisbén estudiante',
  `stu_tel` varchar(10) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono personal estudiante',
  `stu_hob` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hobbies o pasatiempos del estudiante',
  `stu_enf` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Enfermedades o fracturas estudiante',
  `stu_eps` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Eps Estudiante',
  `stu_ars` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ars Estudiante',
  `stu_ips` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ips Estudiante',
  `b_grp` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Grupo sanguíneo estudiante',
  `rh_fact` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Factor Rh estudiante',
  `pre_stu` tinyint(1) DEFAULT NULL COMMENT 'Estado preinscripción ',
  `stu_typ` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de Estudiante',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificación Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `firs_sur`, `sec_sur`, `firs_nam`, `sec_nam`, `dat_bir`, `stu_cit`, `stu_dep`, `doc_typ`, `doc_num`, `exp_cit`, `stu_add`, `stu_nei`, `stu_loc`, `stu_est`, `stu_cat`, `stu_tel`, `stu_hob`, `stu_enf`, `stu_eps`, `stu_ars`, `stu_ips`, `b_grp`, `rh_fact`, `pre_stu`, `stu_typ`, `cre_dat`, `upd_dat`) VALUES
(12, 'ANGOLA', 'DE LA ROSA', 'FELIPE', 'ANDRES', '2005-03-22', 'Bogota', 'Bogota', 'Tarjeta de Identidad', '1011083243', 'Bogota', 'CALLE76D#110-14', 'VILLAS DE GRANADA', 'Engativa', 3, 'N/A', '3045202364', 'LEER', 'NINGUNA', 'Nueva EPS SA', 'NUEVA EPS SA', 'PRIMAVERA NORTE', 'B', 'Positivo', 1, 'Nuevo', '2022-10-03 21:43:15', '2022-10-03 21:57:42'),
(13, 'CASTELLANOS', 'RODRIGUEZ', 'LAURA', 'VALENTINA', '2004-07-20', 'Bogota', 'Bogota', 'Tarjeta de Identidad', '1021393246', 'Bogota', 'KR112C#72C-15', 'LA PERLA', 'Engativa', 3, 'N/A', '3204135823', 'MUSICA, DIBUJAR', 'NINGUNA', 'Nueva EPS SA', 'NUEVA EPS SA', 'PRIMAVERA NORTE', 'O', 'Positivo', 1, 'Nuevo', '2022-10-03 21:54:38', '2022-10-03 21:56:31'),
(14, 'BORBON', 'CLAVIJO', 'MIGUEL', 'ANGEL', '2004-09-16', 'Bogota', 'Bogota', 'Tarjeta de Identidad', '1032937438', 'Bogota', 'CRA 90 BIS # 76-51', 'FLORENCIA', 'Engativa', 3, 'B1', '3045373058', 'PROGRAMAR', 'NINGUNA', 'Salud Total SA EPS', 'SALUD TOTAL', 'CENTRO COMERCIAL PRIMAVERA', 'B', 'Positivo', 1, 'Nuevo', '2022-10-03 22:28:00', '2022-10-06 12:48:26'),
(15, 'ALFONSO ', 'CAMACHO', 'CAMILA', 'ALEXANDRA', '2004-07-05', 'Villavicencio', 'Meta', 'Tarjeta de Identidad', '1048710065', 'Bogota', 'CALLE 64 #125A17', 'TORQUIGUA', 'Engativa', 2, 'A2', '3132685023', 'N/A', 'N/A', 'EPS Sanitas SA', 'EPS SANITAS SA', 'C.C PRIMAVERA', 'O', 'Positivo', 1, 'Nuevo', '2022-10-03 22:59:33', '2022-10-03 23:00:55'),
(17, 'PUERTO', 'ROJAS', 'GABRIEL', 'SANTIAGO', '2006-02-03', 'Bogota', 'Bogota', 'Tarjeta de Identidad', '1019604622', 'Bogota', 'CLL 82 95 C-14 INT 311', 'BACHUE II', 'Engativa', 3, 'C16', '3007410404', 'VOLEY, PROGRAMACION', 'ASMA, RINITIS, DERMATITIS', 'EPS Famisanar LTDA', 'FAMISANAR', 'CM TIERRA GRATA', 'A', 'Positivo', 1, 'Nuevo', '2022-10-06 20:56:38', '2022-10-06 22:10:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `emp_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Completo Empleado',
  `doc_typ` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de Documento Trabajador',
  `doc_num` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de identificación Empleado',
  `emp_land` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono fijo Empleado',
  `emp_pho` varchar(13) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono móvil Empleado',
  `emp_add` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda Empleado',
  `emp_char` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Cargo del Empleado',
  `emp_ema` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico del empleado',
  `emp_hash` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hash de contraseña empleado',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificación Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `workers`
--

INSERT INTO `workers` (`id`, `emp_nam`, `doc_typ`, `doc_num`, `emp_land`, `emp_pho`, `emp_add`, `emp_char`, `emp_ema`, `emp_hash`, `cre_dat`, `upd_dat`) VALUES
(24, 'GABRIEL SANTIAGO PUERTO ROJAS', 'Cedula de ciudadania', '1019604622', '6013874710', '3007410404', 'CLL 82 #95 C-14 INT 311', 'Rectoria', 'gabrielspuertor57@gmail.com', '$2y$10$m73bZSroueWNbBQr0jUd6.JeCs9xLTBVNCvOR6.A0/kw1Dens.lgK', '2022-10-06 03:20:12', '2022-10-06 02:27:17'),
(28, 'FERNANDO RAMOS MARTINEZ', 'Cedula de ciudadania', '123456789', '6010000000', '0000000000', 'DIRECCION', 'Coordinacion Academica', 'academico@juandelcorral.edu.co', '$2y$10$Dk4/7qYvXmGQM7SHNQjZ4OKhqsuozfrS2bY9ToLhQpCCMnoSNHO/G', '2022-10-06 07:11:15', '2022-10-06 07:11:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `act_nam` (`act_nam`);

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
  ADD KEY `doc_typ` (`doc_typ`);

--
-- Indices de la tabla `edu_inf`
--
ALTER TABLE `edu_inf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_id` (`stu_doc_num`),
  ADD KEY `sch_cit` (`sch_cit`),
  ADD KEY `sch_grd` (`sch_grd`);

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
-- Indices de la tabla `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gra_nam` (`gra_nam`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc_nam` (`loc_nam`);

--
-- Indices de la tabla `other_inf`
--
ALTER TABLE `other_inf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_doc_num` (`stu_doc_num`);

--
-- Indices de la tabla `pob_typ`
--
ALTER TABLE `pob_typ`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pob_typ` (`pob_typ`);

--
-- Indices de la tabla `pre_stu`
--
ALTER TABLE `pre_stu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_doc_typ` (`stu_doc_typ`),
  ADD KEY `stu_doc_num` (`stu_doc_num`),
  ADD KEY `stu_typ` (`stu_typ`);

--
-- Indices de la tabla `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_typ` (`rel_typ`),
  ADD KEY `fam_id` (`fam_doc_num`),
  ADD KEY `stu_id` (`stu_doc_num`);

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
  ADD KEY `doc_num` (`doc_num`),
  ADD KEY `doc_num_2` (`doc_num`),
  ADD KEY `stu_typ` (`stu_typ`);

--
-- Indices de la tabla `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `per_char` (`emp_char`),
  ADD KEY `emp_doc_typ` (`doc_typ`),
  ADD KEY `doc_typ` (`doc_typ`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `blo_grp`
--
ALTER TABLE `blo_grp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `departaments`
--
ALTER TABLE `departaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `doc_typ`
--
ALTER TABLE `doc_typ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `edu_inf`
--
ALTER TABLE `edu_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `familiars`
--
ALTER TABLE `familiars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `other_inf`
--
ALTER TABLE `other_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pob_typ`
--
ALTER TABLE `pob_typ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pre_stu`
--
ALTER TABLE `pre_stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT de la tabla `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `rh_fact`
--
ALTER TABLE `rh_fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sisb_cat`
--
ALTER TABLE `sisb_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=29;

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
  ADD CONSTRAINT `edu_inf_ibfk_2` FOREIGN KEY (`sch_cit`) REFERENCES `cities` (`cit_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `edu_inf_ibfk_3` FOREIGN KEY (`sch_grd`) REFERENCES `grades` (`gra_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `edu_inf_ibfk_4` FOREIGN KEY (`stu_doc_num`) REFERENCES `students` (`doc_num`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `familiars`
--
ALTER TABLE `familiars`
  ADD CONSTRAINT `familiars_ibfk_1` FOREIGN KEY (`doc_typ`) REFERENCES `doc_typ` (`doc_typ`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `other_inf`
--
ALTER TABLE `other_inf`
  ADD CONSTRAINT `other_inf_ibfk_1` FOREIGN KEY (`stu_doc_num`) REFERENCES `students` (`doc_num`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pre_stu`
--
ALTER TABLE `pre_stu`
  ADD CONSTRAINT `pre_stu_ibfk_1` FOREIGN KEY (`stu_doc_num`) REFERENCES `students` (`doc_num`),
  ADD CONSTRAINT `pre_stu_ibfk_2` FOREIGN KEY (`stu_doc_typ`) REFERENCES `doc_typ` (`doc_typ`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pre_stu_ibfk_3` FOREIGN KEY (`stu_typ`) REFERENCES `students` (`stu_typ`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_ibfk_2` FOREIGN KEY (`fam_doc_num`) REFERENCES `familiars` (`doc_num`) ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_ibfk_4` FOREIGN KEY (`rel_typ`) REFERENCES `actors` (`act_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_ibfk_5` FOREIGN KEY (`stu_doc_num`) REFERENCES `students` (`doc_num`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sisb_cat`
--
ALTER TABLE `sisb_cat`
  ADD CONSTRAINT `sisb_cat_ibfk_1` FOREIGN KEY (`pob_nam`) REFERENCES `pob_typ` (`pob_typ`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_13` FOREIGN KEY (`rh_fact`) REFERENCES `rh_fact` (`fac_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_14` FOREIGN KEY (`stu_loc`) REFERENCES `locations` (`loc_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_15` FOREIGN KEY (`stu_dep`) REFERENCES `departaments` (`dep_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_18` FOREIGN KEY (`stu_cit`) REFERENCES `cities` (`cit_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_19` FOREIGN KEY (`exp_cit`) REFERENCES `cities` (`cit_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_20` FOREIGN KEY (`doc_typ`) REFERENCES `doc_typ` (`doc_typ`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_6` FOREIGN KEY (`stu_eps`) REFERENCES `eps` (`eps_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_7` FOREIGN KEY (`b_grp`) REFERENCES `blo_grp` (`gro_nam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_9` FOREIGN KEY (`stu_cat`) REFERENCES `sisb_cat` (`cat_nam`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`emp_char`) REFERENCES `actors` (`act_nam`),
  ADD CONSTRAINT `workers_ibfk_2` FOREIGN KEY (`doc_typ`) REFERENCES `doc_typ` (`doc_typ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
