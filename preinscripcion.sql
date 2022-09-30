-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 15:55:08
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
(4, 'Coodinacion Convivencial'),
(5, 'Coordinacion Academica'),
(6, 'Docente'),
(1, 'Madre'),
(2, 'Padre'),
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
(4, 'No. de Identificacion Tributaria'),
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
  `fam_land` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono fijo familiar',
  `mob_pho` varchar(13) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono móvil Familiar',
  `fam_add` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección de vivienda familiar',
  `fam_ocu` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ocupación familiar',
  `fam_ema` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico Familiar',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificacion Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
-- Estructura de tabla para la tabla `neigh`
--

CREATE TABLE `neigh` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `neig_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Barrio',
  `loc_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Localidad a la que pertenece el barrio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `neigh`
--

INSERT INTO `neigh` (`id`, `neig_nam`, `loc_nam`) VALUES
(1, 'Escuela de Caballeria I', 'Usaquen'),
(2, 'Escuela de Caballeria II', 'Usaquen'),
(3, 'Escuela de Infanteria   ', 'Usaquen'),
(4, 'Molinos Norte', 'Usaquen'),
(5, 'Paramo', 'Usaquen'),
(6, 'Paramo Urbano II', 'Usaquen'),
(7, 'Paramo Urbano IV', 'Usaquen'),
(8, 'Rincon del Chico', 'Usaquen'),
(9, 'San Patricio', 'Usaquen'),
(10, 'Santa Ana', 'Usaquen'),
(11, 'Santa Ana Occidental', 'Usaquen'),
(12, 'Santa Bibiana', 'Usaquen'),
(13, 'Santa Barbara Central', 'Usaquen'),
(14, 'Santa Barbara Occidental', 'Usaquen'),
(15, 'Acacias Usaquen', 'Usaquen'),
(16, 'Bella Suiza', 'Usaquen'),
(17, 'Bosque de Pinos I', 'Usaquen'),
(18, 'Cedritos', 'Usaquen'),
(19, 'Cedro Narvaez', 'Usaquen'),
(20, 'Country Club', 'Usaquen'),
(21, 'El Contador', 'Usaquen'),
(22, 'Ginebra', 'Usaquen'),
(23, 'La Calleja ', 'Usaquen'),
(24, 'La Carolina ', 'Usaquen'),
(25, 'Lisboa', 'Usaquen'),
(26, 'Los Cedros ', 'Usaquen'),
(27, 'Los Cedros Oriental ', 'Usaquen'),
(28, 'Paramo Urbano I', 'Usaquen'),
(29, 'San Gabriel Norte', 'Usaquen'),
(30, 'Barrancas Norte ', 'Usaquen'),
(31, 'Barrancas Oriental', 'Usaquen'),
(32, 'Bosque de Pinos', 'Usaquen'),
(33, 'Bosque de Pinos III', 'Usaquen'),
(34, 'Caobos Salazar', 'Usaquen'),
(35, 'Cedro Salazar', 'Usaquen'),
(36, 'El Toberin', 'Usaquen'),
(37, 'Estrella del Norte', 'Usaquen'),
(38, 'La Cita ', 'Usaquen'),
(39, 'La Liberia', 'Usaquen'),
(40, 'La Pradera Norte', 'Usaquen'),
(41, 'Las Margaritas', 'Usaquen'),
(42, 'Las Orquideas', 'Usaquen'),
(43, 'San Cristobal Norte', 'Usaquen'),
(44, 'Santa Cecilia N', 'Usaquen'),
(45, 'Buenavista', 'Usaquen'),
(46, 'Canaima', 'Usaquen'),
(47, 'El Cerezo', 'Usaquen'),
(48, 'El Redil', 'Usaquen'),
(49, 'El Rocío Norte', 'Usaquen'),
(50, 'El Vervenal', 'Usaquen'),
(51, 'Horizontes Norte', 'Usaquen'),
(52, 'La Estrellita', 'Usaquen'),
(53, 'La Estrellita I', 'Usaquen'),
(54, 'La Granja Norte', 'Usaquen'),
(55, 'La Uribe', 'Usaquen'),
(56, 'Mirador del Norte', 'Usaquen'),
(57, 'San Antonio Noroccidental', 'Usaquen'),
(58, 'San Antonio Norte', 'Usaquen'),
(59, 'San Jose de Usaquen', 'Usaquen'),
(60, 'Tibabita', 'Usaquen'),
(61, 'Tibabita I', 'Usaquen'),
(62, 'Torca I', 'Usaquen'),
(63, 'Torca II', 'Usaquen'),
(64, 'Torca Rural I', 'Usaquen'),
(65, 'Torca Rural II', 'Usaquen'),
(66, 'La Esperanza', 'Chapinero'),
(67, 'Paramo I', 'Chapinero'),
(68, 'Paramo II', 'Chapinero'),
(69, 'Paramo Urbano', 'Chapinero'),
(70, 'Paramo Urbano III', 'Chapinero'),
(71, 'San Isidro', 'Chapinero'),
(72, 'San Isidro Rural', 'Chapinero'),
(73, 'San Luis Alatos Del Cabo', 'Chapinero'),
(74, 'Antiguo Country', 'Chapinero'),
(75, 'Bellavista', 'Chapinero'),
(76, 'Chico Norte', 'Chapinero'),
(77, 'Chico Norte II Sector', 'Chapinero'),
(78, 'Chico Norte III Sector', 'Chapinero'),
(79, 'El Bagazal', 'Chapinero'),
(80, 'El Chico', 'Chapinero'),
(81, 'El Nogal', 'Chapinero'),
(82, 'El Refugio', 'Chapinero'),
(83, 'Espartillal', 'Chapinero'),
(84, 'La Cabrera', 'Chapinero'),
(85, 'Lago Gaitan', 'Chapinero'),
(86, 'Los Rosales', 'Chapinero'),
(87, 'Porciuncula', 'Chapinero'),
(88, 'Seminario', 'Chapinero'),
(89, 'Calderon', 'Chapinero'),
(90, 'Cataluña', 'Chapinero'),
(91, 'Chapinero Central', 'Chapinero'),
(92, 'Chapinero Norte', 'Chapinero'),
(93, 'El Paraiso', 'Chapinero'),
(94, 'Emaus', 'Chapinero'),
(95, 'Granada', 'Chapinero'),
(96, 'Hoya Teusaca', 'Chapinero'),
(97, 'Ingemar Oriental', 'Chapinero'),
(98, 'Ingemar Oriental I', 'Chapinero'),
(99, 'Ingemar Oriental Rural', 'Chapinero'),
(100, 'Juan XXIII', 'Chapinero'),
(101, 'La Salle', 'Chapinero'),
(102, 'Las Acacias', 'Chapinero'),
(103, 'Marly', 'Chapinero'),
(104, 'Maria Cristina', 'Chapinero'),
(105, 'Pardo Rubio', 'Chapinero'),
(106, 'Quinta Camacho', 'Chapinero'),
(107, 'Bosque Izquierdo', 'Santa Fe'),
(108, 'Hoya Teusaca', 'Santa Fe'),
(109, 'La Alameda', 'Santa Fe'),
(110, 'La Macarena', 'Santa Fe'),
(111, 'La Merced', 'Santa Fe'),
(112, 'La Perseverancia', 'Santa Fe'),
(113, 'Las Nieves', 'Santa Fe'),
(114, 'Parque Nacional', 'Santa Fe'),
(115, 'Parque Nacional Oriental', 'Santa Fe'),
(116, 'Parque Oriental Urbano', 'Santa Fe'),
(117, 'Sagrado Corazon', 'Santa Fe'),
(118, 'Samper', 'Santa Fe'),
(119, 'San Diego', 'Santa Fe'),
(120, 'San Martin', 'Santa Fe'),
(121, 'El Dorado', 'Santa Fe'),
(122, 'El Guavio', 'Santa Fe'),
(123, 'El Rocio', 'Santa Fe'),
(124, 'Girardot', 'Santa Fe'),
(125, 'La Capuchina', 'Santa Fe'),
(126, 'La Pena', 'Santa Fe'),
(127, 'La Pena Rural', 'Santa Fe'),
(128, 'Las Cruces', 'Santa Fe'),
(129, 'Los Lacehes', 'Santa Fe'),
(130, 'Loudres', 'Santa Fe'),
(131, 'Ramirez', 'Santa Fe'),
(132, 'San Bernardino', 'Santa Fe'),
(133, 'San Francisco Rural', 'Santa Fe'),
(134, 'Santa Ines', 'Santa Fe'),
(135, 'Veracruz', 'Santa Fe'),
(136, 'Aguas Claras', 'San Cristobal'),
(137, 'Buenos Aires', 'San Cristobal'),
(138, 'Calvo Sur', 'San Cristobal'),
(139, 'El Triangulo', 'San Cristobal'),
(140, 'Hoya San Cristobal', 'San Cristobal'),
(141, 'La Maria', 'San Cristobal'),
(142, 'Las Brisas', 'San Cristobal'),
(143, 'Los Lureles I', 'San Cristobal'),
(144, 'Modelo Sur', 'San Cristobal'),
(145, 'Molino Rural', 'San Cristobal'),
(146, 'Molinos De Oriente', 'San Cristobal'),
(147, 'Monte Carlo', 'San Cristobal'),
(148, 'Nariño Sur', 'San Cristobal'),
(149, 'Primera De Mayo', 'San Cristobal'),
(150, 'Quinta Ramos', 'San Cristobal'),
(151, 'San Cristobal Sur', 'San Cristobal'),
(152, 'San Javier', 'San Cristobal'),
(153, 'Santa Ana S', 'San Cristobal'),
(154, 'Atenas Sur', 'San Cristobal'),
(155, 'Bello Horizonte', 'San Cristobal'),
(156, 'Cordoba', 'San Cristobal'),
(157, 'Granada Sur', 'San Cristobal'),
(158, 'Las Mercedes', 'San Cristobal'),
(159, 'Los Alpes', 'San Cristobal'),
(160, 'Montebello', 'San Cristobal'),
(161, 'Ranajal', 'San Cristobal'),
(162, 'San Blas', 'San Cristobal'),
(163, 'San Blas II', 'San Cristobal'),
(164, 'San Isidro', 'San Cristobal'),
(165, 'San Pedro', 'San Cristobal'),
(166, 'San Vicente', 'San Cristobal'),
(167, 'Santa Ines Sur', 'San Cristobal'),
(168, 'Suramerica', 'San Cristobal'),
(169, 'Veinte De Julio', 'San Cristobal'),
(170, 'Villa De Los Alpes', 'San Cristobal'),
(171, 'Altamira', 'San Cristobal'),
(172, 'Altos Del Poblado', 'San Cristobal'),
(173, 'Altos Del Zipa', 'San Cristobal'),
(174, 'Altos Del Zuque', 'San Cristobal'),
(175, 'Barcelona Sur', 'San Cristobal'),
(176, 'Bellavista Sur', 'San Cristobal'),
(177, 'Bosque De Los Alpes', 'San Cristobal'),
(178, 'La Arboleda', 'San Cristobal'),
(179, 'La Gloria Occidental', 'San Cristobal'),
(180, 'La Gloria Oriental', 'San Cristobal'),
(181, 'La Victoria', 'San Cristobal'),
(182, 'Las Guacamayas', 'San Cristobal'),
(183, 'Las Lomas', 'San Cristobal'),
(184, 'Moralba', 'San Cristobal'),
(185, 'Puente Colorado', 'San Cristobal'),
(186, 'Quindio', 'San Cristobal'),
(187, 'San Jose Su', 'San Cristobal'),
(188, 'Canada O Guira', 'San Cristobal'),
(189, 'Chiguaza', 'San Cristobal'),
(190, 'Ciudad Londres I', 'San Cristobal'),
(191, 'El Paraiso', 'San Cristobal'),
(192, 'El Pinar', 'San Cristobal'),
(193, 'La Paz', 'San Cristobal'),
(194, 'La Belleza', 'San Cristobal'),
(195, 'Las Gaviotas', 'San Cristobal'),
(196, 'Los Libertadore', 'San Cristobal'),
(197, 'Nueva Delhi', 'San Cristobal'),
(198, 'Nueva Gloria', 'San Cristobal'),
(199, 'San Rafael Usme', 'San Cristobal'),
(200, 'Santa Rita Sur Oriental', 'San Cristobal'),
(201, 'Villabel', 'San Cristobal'),
(202, 'Yomasa', 'San Cristobal'),
(203, 'Moralba', 'San Cristobal'),
(204, 'Puente Colorado', 'San Cristobal'),
(205, 'Quindio', 'San Cristobal'),
(206, 'San Jose Su', 'San Cristobal'),
(207, 'Canada O Guira', 'San Cristobal'),
(208, 'Chiguaza', 'San Cristobal'),
(209, 'Ciudad Londres I', 'San Cristobal'),
(210, 'El Paraiso', 'San Cristobal'),
(211, 'El Pinar', 'San Cristobal'),
(212, 'La Paz', 'San Cristobal'),
(213, 'Granada Sur', 'Usme'),
(214, 'Maricuela', 'Usme'),
(215, 'Nuevo San Andres', 'Usme'),
(216, 'Santa Librada', 'Usme'),
(217, 'Tunjuelito', 'Usme'),
(218, 'Alaska', 'Usme'),
(219, 'Arrayanes I', 'Usme'),
(220, 'Arrayanes V', 'Usme'),
(221, 'Barranquillita', 'Usme'),
(222, 'Bolonia', 'Usme'),
(223, 'Bolonia I', 'Usme'),
(224, 'Ciudad Londres', 'Usme'),
(225, 'Ciudad Londres Rural', 'Usme'),
(226, 'Danubio', 'Usme'),
(227, 'Danubio II', 'Usme'),
(228, 'Doña Liliana', 'Usme'),
(229, 'Duitama', 'Usme'),
(230, 'El Curubo', 'Usme'),
(231, 'El Nevado', 'Usme'),
(232, 'El Nevado II', 'Usme'),
(233, 'El Pedregal', 'Usme'),
(234, 'Fiscala Alta', 'Usme'),
(235, 'Gran Yosama', 'Usme'),
(236, 'Jua', 'Usme'),
(237, 'Brisas del Llano', 'Usme'),
(238, 'Chapinerito', 'Usme'),
(239, 'El Bosque', 'Usme'),
(240, 'El Bosque Central ', 'Usme'),
(241, 'El Bosque Central I', 'Usme'),
(242, 'El Bosque Sur Oriental', 'Usme'),
(243, 'El Bosque Sur Oriental Rural I', 'Usme'),
(244, 'El Nuevo Portal', 'Usme'),
(245, 'El Nuevo Portal II', 'Usme'),
(246, 'El Nuevo Portal II Rural', 'Usme'),
(247, 'El Portal Del Divino', 'Usme'),
(248, 'Antonio Jose De Sucre', 'Usme'),
(249, 'Centro Usme', 'Usme'),
(250, 'Centro Usme Rural I', 'Usme'),
(251, 'Centro Usme Rural II', 'Usme'),
(252, 'Centro Usme Urbano', 'Usme'),
(253, 'Charala', 'Usme'),
(254, 'Chuniza', 'Usme'),
(255, 'Comuneros', 'Usme'),
(256, 'Desarrollo Brazuelos', 'Usme'),
(257, 'Desarrollo Brazuelos I', 'Usme'),
(258, 'El Tuno', 'Usme'),
(259, 'El Uval Rural', 'Usme'),
(260, 'El Vierrey', 'Usme'),
(261, 'La Esperanza De Usme', 'Usme'),
(262, 'La Re', 'Usme'),
(263, 'Olarte Y Las Veredas Caldera', 'Usme'),
(264, 'Calderitas', 'Usme'),
(265, 'Fruticas', 'Usme'),
(266, 'San Benito', 'Usme'),
(267, 'Curubital', 'Usme'),
(268, 'Chisaca', 'Usme'),
(269, 'Colorados Alto', 'Usme'),
(270, 'Corrales', 'Usme'),
(271, 'El Istmo', 'Usme'),
(272, 'La Cajita', 'Usme'),
(273, 'La Union', 'Usme'),
(274, 'Los Andes', 'Usme'),
(275, 'El Carmen', 'Tunjuelito'),
(276, 'Escuela General Santander', 'Tunjuelito'),
(277, 'Fatima', 'Tunjuelito'),
(278, 'Isla Del Sol', 'Tunjuelito'),
(279, 'Muzu', 'Tunjuelito'),
(280, 'Nuevo Muzu', 'Tunjuelito'),
(281, 'Samore', 'Tunjuelito'),
(282, 'San Vicente Ferrer', 'Tunjuelito'),
(283, 'Venecia', 'Tunjuelito'),
(284, 'Venecia Occidental', 'Tunjuelito'),
(285, 'Abraham Lincoln', 'Tunjuelito'),
(286, 'Area Aritilleria', 'Tunjuelito'),
(287, 'Parque El Tunal', 'Tunjuelito'),
(288, 'San Benito', 'Tunjuelito'),
(289, 'San Carlos', 'Tunjuelito'),
(290, 'Tunal Oriental', 'Tunjuelito'),
(291, 'Tunjuelito', 'Tunjuelito'),
(292, 'Betania', 'Bosa'),
(293, 'Brasil', 'Bosa'),
(294, 'Brasilia', 'Bosa'),
(295, 'Cañaveralejo', 'Bosa'),
(296, 'Cañaveralejo Rural', 'Bosa'),
(297, 'Chicala', 'Bosa'),
(298, 'El Corzo', 'Bosa'),
(299, 'El Corzo Rural', 'Bosa'),
(300, 'El Danibio Azul', 'Bosa'),
(301, 'El Portal Del Brasil', 'Bosa'),
(302, 'Escocia', 'Bosa'),
(303, 'La Cabaña', 'Bosa'),
(304, 'La Libertad', 'Bosa'),
(305, 'Osorio X', 'Bosa'),
(306, 'Osorio X Urbano', 'Bosa'),
(307, 'Osorio XXIII', 'Bosa'),
(308, 'Parcela El Porvenir', 'Bosa'),
(309, 'San Martin', 'Bosa'),
(310, 'Sant', 'Bosa'),
(311, 'Bosa Nova', 'Bosa'),
(312, 'Bosa Nova El Porvenir', 'Bosa'),
(313, 'Chico Sur', 'Bosa'),
(314, 'Ciudadela El Recreo I', 'Bosa'),
(315, 'Ciudadela El Recreo II', 'Bosa'),
(316, 'El Remanso', 'Bosa'),
(317, 'El Remanso I', 'Bosa'),
(318, 'La Independencia', 'Bosa'),
(319, 'La Paz Bosa', 'Bosa'),
(320, 'La Vega San Bernardino', 'Bosa'),
(321, 'Las Margaritas', 'Bosa'),
(322, 'Los Sauces', 'Bosa'),
(323, 'Remanso Urbano', 'Bosa'),
(324, 'San Antonio', 'Bosa'),
(325, 'San Bernardino II', 'Bosa'),
(326, 'San Be', 'Bosa'),
(327, 'Antonia Santos', 'Bosa'),
(328, 'Argelia II', 'Bosa'),
(329, 'Bosa', 'Bosa'),
(330, 'El Jardin', 'Bosa'),
(331, 'Gran Colombiano', 'Bosa'),
(332, 'Islandia', 'Bosa'),
(333, 'Jimenez De Quesada', 'Bosa'),
(334, 'Los Laureles', 'Bosa'),
(335, 'Paso Ancho', 'Bosa'),
(336, 'San Bernardino I', 'Bosa'),
(337, 'San Diego Bosa', 'Bosa'),
(338, 'Andalucia II', 'Bosa'),
(339, 'Cementerio Jardines Apogeo', 'Bosa'),
(340, 'Charles De Gaulle', 'Bosa'),
(341, 'El Retazo', 'Bosa'),
(342, 'Gualoche', 'Bosa'),
(343, 'Jose Antonio Galan', 'Bosa'),
(344, 'Jose Maria Carbonel', 'Bosa'),
(345, 'La Estacion Bosa', 'Bosa'),
(346, 'Nueva Granada Bosa', 'Bosa'),
(347, 'Olarte', 'Bosa'),
(348, 'San Pablo Bosa', 'Bosa'),
(349, 'Villa Anny I', 'Bosa'),
(350, 'Villa Anny II', 'Bosa'),
(351, 'Villa Del Rio', 'Bosa'),
(352, 'El Tintal III', 'Kennedy'),
(353, 'El Tintal IV', 'Kennedy'),
(354, 'La Magdalena', 'Kennedy'),
(355, 'Osorio II', 'Kennedy'),
(356, 'Tintala ', 'Kennedy'),
(357, 'Vereda El Tintal Rural', 'Kennedy'),
(358, 'Vereda El Tintal Urbano', 'Kennedy'),
(359, 'Bavaria', 'Kennedy'),
(360, 'Castilla', 'Kennedy'),
(361, 'Ciudad Kennedy', 'Kennedy'),
(362, 'Ciudad Techo II', 'Kennedy'),
(363, 'El Vergel Oriental', 'Kennedy'),
(364, 'La Pampa', 'Kennedy'),
(365, 'Las Dos Avenidas', 'Kennedy'),
(366, 'Mandalay', 'Kennedy'),
(367, 'Nuevo Techo', 'Kennedy'),
(368, 'Pio XII', 'Kennedy'),
(369, 'Valladolid', 'Kennedy'),
(370, 'Vergel Occidental', 'Kennedy'),
(371, 'Villa Alsacia II', 'Kennedy'),
(372, 'Vision De Oriente', 'Kennedy'),
(373, 'Cooperativa De Sub Oficiales', 'Kennedy'),
(374, 'Hipotecho', 'Kennedy'),
(375, 'Hipotecho Occiental', 'Kennedy'),
(376, 'Hipotecho Sur', 'Kennedy'),
(377, 'Lusitania', 'Kennedy'),
(378, 'Marsella', 'Kennedy'),
(379, 'Provivenda Oriental', 'Kennedy'),
(380, 'Villa Alsacia', 'Kennedy'),
(381, 'Alqueria La Fragua', 'Kennedy'),
(382, 'Alqueria La Fragua Norte', 'Kennedy'),
(383, 'Boita', 'Kennedy'),
(384, 'La Campiña', 'Kennedy'),
(385, 'Las Delicias', 'Kennedy'),
(386, 'Nueva York', 'Kennedy'),
(387, 'Provivienda', 'Kennedy'),
(388, 'Provivienda Occidental', 'Kennedy'),
(389, 'Renania Urapanes ', 'Kennedy'),
(390, 'Santa Catalina', 'Kennedy'),
(391, 'Tiniza', 'Kennedy'),
(392, 'Tiniza A', 'Kennedy'),
(393, 'Tiniza B', 'Kennedy'),
(394, 'Tiniza C', 'Kennedy'),
(395, 'Tundama', 'Kennedy'),
(396, 'Chucua De La Vaca I', 'Kennedy'),
(397, 'Chucua De La Vaca II', 'Kennedy'),
(398, 'Chucua De La Vaca III', 'Kennedy'),
(399, 'Ciudad Kennedy Central', 'Kennedy'),
(400, 'Ciudad Kennedy Norte', 'Kennedy'),
(401, 'Ciudad Kennedy Occiental', 'Kennedy'),
(402, 'Ciudad Kennedy Oriental', 'Kennedy'),
(403, 'Ciudad Kennedy Sur', 'Kennedy'),
(404, 'Corabastos', 'Kennedy'),
(405, 'Llano Grande', 'Kennedy'),
(406, 'Maria Paz', 'Kennedy'),
(407, 'Saucedal', 'Kennedy'),
(408, 'Techo', 'Kennedy'),
(409, 'Villa Nelly III S', 'Kennedy'),
(410, 'Casa Blanca Sur', 'Kennedy'),
(411, 'Casablanca', 'Kennedy'),
(412, 'Catalina', 'Kennedy'),
(413, 'Catalina II', 'Kennedy'),
(414, 'Class', 'Kennedy'),
(415, 'El Caramelo', 'Kennedy'),
(416, 'El Rubi', 'Kennedy'),
(417, 'Gran Britalia', 'Kennedy'),
(418, 'Gran Britalia I', 'Kennedy'),
(419, 'Jacqueline', 'Kennedy'),
(420, 'Jorge Uribe Botero', 'Kennedy'),
(421, 'La Cecilia', 'Kennedy'),
(422, 'Pastrana', 'Kennedy'),
(423, 'Roma', 'Kennedy'),
(424, 'Tocarema', 'Kennedy'),
(425, 'Calandaima', 'Kennedy'),
(426, 'Campo Hermoso', 'Kennedy'),
(427, 'El Paraiso', 'Kennedy'),
(428, 'El Paraiso Kennedy', 'Kennedy'),
(429, 'Galan', 'Kennedy'),
(430, 'Galan Rural', 'Kennedy'),
(431, 'Osorio III', 'Kennedy'),
(432, 'Patio Bonito', 'Kennedy'),
(433, 'Patio Bonito II', 'Kennedy'),
(434, 'Patio Bonito III', 'Kennedy'),
(435, 'Tairona', 'Kennedy'),
(436, 'Ciudad De Cali', 'Kennedy'),
(437, 'Dindalito', 'Kennedy'),
(438, 'El Jazmin', 'Kennedy'),
(439, 'El Jazmin Rural', 'Kennedy'),
(440, 'Las Acacias ', 'Kennedy'),
(441, 'Las Acacias Rural', 'Kennedy'),
(442, 'Los Almendros', 'Kennedy'),
(443, 'Osorio XII', 'Kennedy'),
(444, 'Tintalito', 'Kennedy'),
(445, 'Areopuerto El Dorado', 'Fontibon'),
(446, 'Atahualpa', 'Fontibon'),
(447, 'Brisas Aldea Fontibon', 'Fontibon'),
(448, 'Charco Rural', 'Fontibon'),
(449, 'El Refugio', 'Fontibon'),
(450, 'Ferrocaja Fontibon', 'Fontibon'),
(451, 'La Cabaña Fontibon', 'Fontibon'),
(452, 'Las Navetas', 'Fontibon'),
(453, 'Pueblo Viejo', 'Fontibon'),
(454, 'Puerta de Teja', 'Fontibon'),
(455, 'San Jose De Fontibon', 'Fontibon'),
(456, 'Varsalles Fontibon', 'Fontibon'),
(457, 'Belen Fontibon', 'Fontibon'),
(458, 'Centro Fontibon', 'Fontibon'),
(459, 'Charco Urbano', 'Fontibon'),
(460, 'El Carmen Fontibon', 'Fontibon'),
(461, 'El Chanco I', 'Fontibon'),
(462, 'El Chanco II', 'Fontibon'),
(463, 'El Chanco Rural II', 'Fontibon'),
(464, 'El Chanco Rural III', 'Fontibon'),
(465, 'El Charco', 'Fontibon'),
(466, 'El Tintal', 'Fontibon'),
(467, 'El Tintal Central', 'Fontibon'),
(468, 'El Tintal II', 'Fontibon'),
(469, 'Guadal Fontibon', 'Fontibon'),
(470, 'Kasandra', 'Fontibon'),
(471, 'La Laguna Fontibon', 'Fontibon'),
(472, 'Moravia', 'Fontibon'),
(473, 'Puente G', 'Fontibon'),
(474, 'Bosque De Modelia', 'Fontibon'),
(475, 'Capellania', 'Fontibon'),
(476, 'Ciudad Hayuelos', 'Fontibon'),
(477, 'El Vergel', 'Fontibon'),
(478, 'Franco', 'Fontibon'),
(479, 'Granjas De Techo', 'Fontibon'),
(480, 'Interindustrial', 'Fontibon'),
(481, 'La Esperanza Norte', 'Fontibon'),
(482, 'La Esperanza Sur', 'Fontibon'),
(483, 'Modelia', 'Fontibon'),
(484, 'Modelia Occiental', 'Fontibon'),
(485, 'Montevideo', 'Fontibon'),
(486, 'Salitre Occidental', 'Fontibon'),
(487, 'Santa Cecilia', 'Fontibon'),
(488, 'Terminal De transporte', 'Fontibon'),
(489, 'Bochica II', 'Engativa'),
(490, 'Bolivia', 'Engativa'),
(491, 'Bolivia Oriental', 'Engativa'),
(492, 'Ciudadela Colsubsidio', 'Engativa'),
(493, 'El Cortijo', 'Engativa'),
(494, 'El Dorado', 'Engativa'),
(495, 'Autopista Medellin', 'Engativa'),
(496, 'Bochica', 'Engativa'),
(497, 'Ciudad Bachue', 'Engativa'),
(498, 'Ciudad Bachue I Etapa', 'Engativa'),
(499, 'El Minuto De Dios', 'Engativa'),
(500, 'La Serena', 'Engativa'),
(501, 'Los Cerezos', 'Engativa'),
(502, 'Luis Carlos Galan', 'Engativa'),
(503, 'Paris Gaitan', 'Engativa'),
(504, 'Primavera', 'Engativa'),
(505, 'Quirigua', 'Engativa'),
(506, 'Quirigua Oriental', 'Engativa'),
(507, 'Bolivia', 'Engativa'),
(508, 'Centro Engativa II', 'Engativa'),
(509, 'El Cedro', 'Engativa'),
(510, 'El Dorado Industrial', 'Engativa'),
(511, 'El Gaco', 'Engativa'),
(512, 'El Pantano', 'Engativa'),
(513, 'Engativa El Dorado', 'Engativa'),
(514, 'Engativa Zona Urbana', 'Engativa'),
(515, 'Garces Navas Sur', 'Engativa'),
(516, 'Gran Granada', 'Engativa'),
(517, 'La Faena', 'Engativa'),
(518, 'La Riviera', 'Engativa'),
(519, 'Marandu', 'Engativa'),
(520, 'Sabana Del Dorado', 'Engativa'),
(521, 'San Antonio Urbano', 'Engativa'),
(522, 'Villa Gladis', 'Engativa'),
(523, 'Villas De Alcal', 'Engativa'),
(524, 'Alamos', 'Engativa'),
(525, 'El Madrigal', 'Engativa'),
(526, 'El Muelle', 'Engativa'),
(527, 'Garces Navas', 'Engativa'),
(528, 'Garces Navas Oriental', 'Engativa'),
(529, 'Los Angeles', 'Engativa'),
(530, 'San Antonio Engativa', 'Engativa'),
(531, 'Santa Monica', 'Engativa'),
(532, 'Villa Amalia', 'Engativa'),
(533, 'Villa del Mar', 'Engativa'),
(534, 'Villa Sagrario', 'Engativa'),
(535, 'Boyaca', 'Engativa'),
(536, 'Florencia', 'Engativa'),
(537, 'Florida Blanca', 'Engativa'),
(538, 'La Granja', 'Engativa'),
(539, 'La Soledad Norte', 'Engativa'),
(540, 'Los Alamos', 'Engativa'),
(541, 'Paris', 'Engativa'),
(542, 'Santa Helenita', 'Engativa'),
(543, 'Santa Maria', 'Engativa'),
(544, 'Tabora', 'Engativa'),
(545, 'Bellvista Occidental', 'Engativa'),
(546, 'Bonanza', 'Engativa'),
(547, 'Bosque Popular', 'Engativa'),
(548, 'EL Laurel', 'Engativa'),
(549, 'La Cabaña', 'Engativa'),
(550, 'La Estrada', 'Engativa'),
(551, 'La Estradita', 'Engativa'),
(552, 'Las Ferias', 'Engativa'),
(553, 'Las Ferias Occidental', 'Engativa'),
(554, 'Palo Blanco', 'Engativa'),
(555, 'San Joaquin', 'Engativa'),
(556, 'EL Encanto', 'Engativa'),
(557, 'El Real', 'Engativa'),
(558, 'Jardin Botanico', 'Engativa'),
(559, 'Normandia', 'Engativa'),
(560, 'Normandia Occidental', 'Engativa'),
(561, 'San Ignacio', 'Engativa'),
(562, 'Santa Cecilia', 'Engativa'),
(563, 'Villa Luz', 'Engativa'),
(564, 'Batan', 'Suba'),
(565, 'Canodromo', 'Suba'),
(566, 'Ciudad Jardin Norte', 'Suba'),
(567, 'Estoril', 'Suba'),
(568, 'Iberia', 'Suba'),
(569, 'Las VIllas', 'Suba'),
(570, 'Monaco', 'Suba'),
(571, 'Pasadena', 'Suba'),
(572, 'Prado Veraniego', 'Suba'),
(573, 'Prado Veraniego Norte ', 'Suba'),
(574, 'Prado Veraniego Sur', 'Suba'),
(575, 'Puente Largo', 'Suba'),
(576, 'San Jose Del Prado', 'Suba'),
(577, 'Almirante Colon', 'Suba'),
(578, 'Altos De Chozica', 'Suba'),
(579, 'Primavera', 'Suba'),
(580, 'Andes Norte', 'Suba'),
(581, 'Ciudad Hunza', 'Suba'),
(582, 'Club De Los Lagartos', 'Suba'),
(583, 'Julio Florez', 'Suba'),
(584, 'Los Naranjos', 'Suba'),
(585, 'Niza Norte', 'Suba'),
(586, 'Niza Suba', 'Suba'),
(587, 'Niza Sur', 'Suba'),
(588, 'Potosi', 'Suba'),
(589, 'Santa Rosa', 'Suba'),
(590, 'Vereda Suba Naranjos', 'Suba'),
(591, 'Aures', 'Suba'),
(592, 'Costa Azul', 'Suba'),
(593, 'El Poa', 'Suba'),
(594, 'El Rincon', 'Suba'),
(595, 'El Rincon Norte', 'Suba'),
(596, 'La Chucua', 'Suba'),
(597, 'Lago De Suba', 'Suba'),
(598, 'Potrerillo', 'Suba'),
(599, 'Rincon De Suba', 'Suba'),
(600, 'San Cayetano', 'Suba'),
(601, 'Santa Teresa De Suba', 'Suba'),
(602, 'Villa Elisa', 'Suba'),
(603, 'Aures II', 'Suba'),
(604, 'La Carolina De Suba', 'Suba'),
(605, 'La Gaitana', 'Suba'),
(606, 'Lech Walesa', 'Suba'),
(607, 'Lombardia', 'Suba'),
(608, 'Nueva Tibabuyes', 'Suba'),
(609, 'Puerta Del Sol', 'Suba'),
(610, 'Tibabuyes', 'Suba'),
(611, 'Villa Maria', 'Suba'),
(612, 'Berlin', 'Suba'),
(613, 'Bilbao', 'Suba'),
(614, 'Lisboa', 'Suba'),
(615, 'Sabana De Tibabuyes', 'Suba'),
(616, 'San Carlos De Suba', 'Suba'),
(617, 'San Pedro', 'Suba'),
(618, 'Santa Cecilia', 'Suba'),
(619, 'Santa Cecilia Rural', 'Suba'),
(620, 'Santa Rita De Suba', 'Suba'),
(621, 'Tibabuyes II', 'Suba'),
(622, 'Tibabuyes Occidental', 'Suba'),
(623, 'Tibabuyes Universal', 'Suba'),
(624, 'Toscana', 'Suba'),
(625, 'Altos De Suba', 'Suba'),
(626, 'Atenas', 'Suba'),
(627, 'Britalia', 'Suba'),
(628, 'Cantagallo', 'Suba'),
(629, 'Casa Blanca Suba I', 'Suba'),
(630, 'Casablanca Suba', 'Suba'),
(631, 'Delmonte', 'Suba'),
(632, 'El Plan', 'Suba'),
(633, 'Escuela De Carabineros', 'Suba'),
(634, 'Glimar', 'Suba'),
(635, 'Granada Norte', 'Suba'),
(636, 'Iragua', 'Suba'),
(637, 'Mazuren', 'Suba'),
(638, 'Portales Del Norte', 'Suba'),
(639, 'Prado Pinzon', 'Suba'),
(640, 'San Jose V Sector', 'Suba'),
(641, 'Santa Helena', 'Suba'),
(642, 'Suba Cerros', 'Suba'),
(643, 'Suba Urban', 'Suba'),
(644, 'Bosques San Jorge', 'Suba'),
(645, 'Campanella', 'Suba'),
(646, 'El Pino', 'Suba'),
(647, 'Las Flores', 'Suba'),
(648, 'Las Mercedes I', 'Suba'),
(649, 'Las Mercedes Suba', 'Suba'),
(650, 'Las Mercedes Suba Rural', 'Suba'),
(651, 'Pinos De Lombardia', 'Suba'),
(652, 'Rincon De Santa Ines', 'Suba'),
(653, 'Sabana De Tibabuyes Norte', 'Suba'),
(654, 'Salitre Suba', 'Suba'),
(655, 'Tuna', 'Suba'),
(656, 'Tuna Baja', 'Suba'),
(657, 'Tuna Rural', 'Suba'),
(658, 'Villa Hermosa', 'Suba'),
(659, 'Casablanca Suba', 'Suba'),
(660, 'Casablanca Suba I', 'Suba'),
(661, 'Casablanca Suba Urbano', 'Suba'),
(662, 'Casablanca Suba Urbano I', 'Suba'),
(663, 'Casablanca Suba Urbano II', 'Suba'),
(664, 'Mirandela', 'Suba'),
(665, 'Nueva Zelandia', 'Suba'),
(666, 'San Jose De Bavaria', 'Suba'),
(667, 'Villa Del Prado', 'Suba'),
(668, 'Barajas Norte', 'Suba'),
(669, 'Conejera', 'Suba'),
(670, 'La Candelaria', 'Suba'),
(671, 'La Lomita', 'Suba'),
(672, 'Nuestra Señora Del Rosario', 'Suba'),
(673, 'Casablanca Suba II', 'Suba'),
(674, 'Guaymaral', 'Suba'),
(675, 'Alcazares Norte', 'Barrios Unidos'),
(676, 'Doce De Octubre', 'Barrios Unidos'),
(677, 'Entrerrios', 'Barrios Unidos'),
(678, 'Escuela Militar', 'Barrios Unidos'),
(679, 'Jorge Eliecer Gaitan', 'Barrios Unidos'),
(680, 'Juan XXIII', 'Barrios Unidos'),
(681, 'La Aurora', 'Barrios Unidos'),
(682, 'La Castellana', 'Barrios Unidos'),
(683, 'La Libertad', 'Barrios Unidos'),
(684, 'La Patria', 'Barrios Unidos'),
(685, 'Los Andes', 'Barrios Unidos'),
(686, 'Metropolis ', 'Barrios Unidos'),
(687, 'Once De Noviembre', 'Barrios Unidos'),
(688, 'Polo Club', 'Barrios Unidos'),
(689, 'Rionegro', 'Barrios Unidos'),
(690, 'San Felipe', 'Barrios Unidos'),
(691, 'San Fernando Occidental', 'Barrios Unidos'),
(692, 'Santa So', 'Barrios Unidos'),
(693, 'Alcazares', 'Barrios Unidos'),
(694, 'Baquero', 'Barrios Unidos'),
(695, 'Benjamin Herrera', 'Barrios Unidos'),
(696, 'Colombia', 'Barrios Unidos'),
(697, 'Concepcion Norte', 'Barrios Unidos'),
(698, 'El Rosario', 'Barrios Unidos'),
(699, 'Jose Joaquin Vargas', 'Barrios Unidos'),
(700, 'La Ezperanza', 'Barrios Unidos'),
(701, 'La Merced Norte', 'Barrios Unidos'),
(702, 'La Paz', 'Barrios Unidos'),
(703, 'Muequeta', 'Barrios Unidos'),
(704, 'Parque Distrital Salitre', 'Barrios Unidos'),
(705, 'Parque Popular Salitre', 'Barrios Unidos'),
(706, 'Popular Modelo', 'Barrios Unidos'),
(707, 'Quinta Mutis', 'Barrios Unidos'),
(708, 'Rafael Uribe', 'Barrios Unidos'),
(709, 'San Fernando', 'Barrios Unidos'),
(710, 'Alfonso Lopez', 'Teusaquillo'),
(711, 'Armenia', 'Teusaquillo'),
(712, 'Banco Central', 'Teusaquillo'),
(713, 'Belalcazar', 'Teusaquillo'),
(714, 'Campin', 'Teusaquillo'),
(715, 'Chapinero Occidental', 'Teusaquillo'),
(716, 'Estrella', 'Teusaquillo'),
(717, 'Galerias', 'Teusaquillo'),
(718, 'La Magdalena', 'Teusaquillo'),
(719, 'La Soledad', 'Teusaquillo'),
(720, 'Las Americas', 'Teusaquillo'),
(721, 'Palermo', 'Teusaquillo'),
(722, 'Quesada', 'Teusaquillo'),
(723, 'San Luis', 'Teusaquillo'),
(724, 'Santa Teresita', 'Teusaquillo'),
(725, 'Teusaquillo', 'Teusaquillo'),
(726, 'Acevedo Tejada', 'Teusaquillo'),
(727, 'Campo Eucaristico', 'Teusaquillo'),
(728, 'Campin Occidental', 'Teusaquillo'),
(729, 'Cantro Administrativo Occidental', 'Teusaquillo'),
(730, 'Centro Nariño', 'Teusaquillo'),
(731, 'Ciudad Salitre Nor Oriental', 'Teusaquillo'),
(732, 'Ciudad Salitre Sur Oriental', 'Teusaquillo'),
(733, 'Ciudad Universitaria', 'Teusaquillo'),
(734, 'El Recuerdo', 'Teusaquillo'),
(735, 'El Salitre', 'Teusaquillo'),
(736, 'Gran America', 'Teusaquillo'),
(737, 'La Esmeralda', 'Teusaquillo'),
(738, 'Nicolas De Federman', 'Teusaquillo'),
(739, 'Pablo VI', 'Teusaquillo'),
(740, 'Colseguros', 'Los Martires'),
(741, 'Eduardo Santos', 'Los Martires'),
(742, 'El Liston', 'Los Martires'),
(743, 'El Progreso', 'Los Martires'),
(744, 'El Vergel', 'Los Martires'),
(745, 'Florida', 'Los Martires'),
(746, 'La Estanzuela', 'Los Martires'),
(747, 'La Favorita', 'Los Martires'),
(748, 'La Pepita', 'Los Martires'),
(749, 'La Sabana', 'Los Martires'),
(750, 'Paloquemao', 'Los Martires'),
(751, 'Ricaurte', 'Los Martires'),
(752, 'Samper Mendoza', 'Los Martires'),
(753, 'San Victorino', 'Los Martires'),
(754, 'Santa Fe', 'Los Martires'),
(755, 'Santa Isabel', 'Los Martires'),
(756, 'Santa Isabel Sur', 'Los Martires'),
(757, 'Usatama', 'Los Martires'),
(758, 'Veraguas', 'Los Martires'),
(759, 'Voto Nacional', 'Los Martires'),
(760, 'Caracas', 'Antonio Nariño'),
(761, 'Ciudad Berna', 'Antonio Nariño'),
(762, 'Ciudad Jardin Sur', 'Antonio Nariño'),
(763, 'Eduardo Frey', 'Antonio Nariño'),
(764, 'La Fragua', 'Antonio Nariño'),
(765, 'La Faguita', 'Antonio Nariño'),
(766, 'La Hortua', 'Antonio Nariño'),
(767, 'Policarpa', 'Antonio Nariño'),
(768, 'Restrepo', 'Antonio Nariño'),
(769, 'Restrepo Occidental', 'Antonio Nariño'),
(770, 'San Antonio', 'Antonio Nariño'),
(771, 'Santander', 'Antonio Nariño'),
(772, 'Santander Sur', 'Antonio Nariño'),
(773, 'Sena', 'Antonio Nariño'),
(774, 'Sevilla', 'Antonio Nariño'),
(775, 'Villa Mayor Oriental', 'Antonio Nariño'),
(776, 'Barcelona', 'Puente Aranda'),
(777, 'Batallon Caldas', 'Puente Aranda'),
(778, 'Centro Industrial', 'Puente Aranda'),
(779, 'Colon', 'Puente Aranda'),
(780, 'Comineros', 'Puente Aranda'),
(781, 'Cundinamarca', 'Puente Aranda'),
(782, 'El Elijo', 'Puente Aranda'),
(783, 'Estacion', 'Puente Aranda'),
(784, 'Central', 'Puente Aranda'),
(785, 'Gordonzola', 'Puente Aranda'),
(786, 'Industrial Centenario', 'Puente Aranda'),
(787, 'La Florida Occiental', 'Puente Aranda'),
(788, 'La Pradera', 'Puente Aranda'),
(789, 'La Trinidad', 'Puente Aranda'),
(790, 'Los Ejidos', 'Puente Aranda'),
(791, 'Ortezal', 'Puente Aranda'),
(792, 'Pensilvania', 'Puente Aranda'),
(793, 'Primavera Occiedental', 'Puente Aranda'),
(794, 'Puente Ar', 'Puente Aranda'),
(795, 'Alcala', 'Puente Aranda'),
(796, 'ALqueria', 'Puente Aranda'),
(797, 'Autopista Sur', 'Puente Aranda'),
(798, 'Galan', 'Puente Aranda'),
(799, 'La Camelia', 'Puente Aranda'),
(800, 'Ospina Perez', 'Puente Aranda'),
(801, 'Ospina Perez Sur', 'Puente Aranda'),
(802, 'Provivienda Norte', 'Puente Aranda'),
(803, 'San Eusabio', 'Puente Aranda'),
(804, 'Tejar', 'Puente Aranda'),
(805, 'Muzu', 'Puente Aranda'),
(806, 'Autopista Muzu Oriental', 'Puente Aranda'),
(807, 'Bochica', 'Puente Aranda'),
(808, 'Jorge Gaitan Cortes', 'Puente Aranda'),
(809, 'La Asuncion', 'Puente Aranda'),
(810, 'Montes', 'Puente Aranda'),
(811, 'Remaso', 'Puente Aranda'),
(812, 'Remaso Sur', 'Puente Aranda'),
(813, 'Santa Matilde', 'Puente Aranda'),
(828, 'Belen', 'Candelaria'),
(829, 'Centro Administrativo', 'Candelaria'),
(830, 'La Catedral', 'Candelaria'),
(831, 'La Concordia', 'Candelaria'),
(832, 'Las Aguas', 'Candelaria'),
(833, 'Parque Nacional Urbano', 'Candelaria'),
(834, 'Santa Barbara', 'Candelaria'),
(835, 'Bravo Paez', 'Rafael Uribe Uribe'),
(836, 'Centenario', 'Rafael Uribe Uribe'),
(837, 'Claret', 'Rafael Uribe Uribe'),
(838, 'Ingles', 'Rafael Uribe Uribe'),
(839, 'Libertador', 'Rafael Uribe Uribe'),
(840, 'Murillo Toro', 'Rafael Uribe Uribe'),
(841, 'Olaya', 'Rafael Uribe Uribe'),
(842, 'Quiroga', 'Rafael Uribe Uribe'),
(843, 'Quiroga Central', 'Rafael Uribe Uribe'),
(844, 'Quiroga Sur', 'Rafael Uribe Uribe'),
(845, 'Santa Lucia', 'Rafael Uribe Uribe'),
(846, 'Santiago Paez', 'Rafael Uribe Uribe'),
(847, 'Villa Mayor', 'Rafael Uribe Uribe'),
(848, 'Granja De Santa Sofia', 'Rafael Uribe Uribe'),
(849, 'Granja San Pablo', 'Rafael Uribe Uribe'),
(850, 'Gustavo Restrepo', 'Rafael Uribe Uribe'),
(851, 'Hospital San Carlos', 'Rafael Uribe Uribe'),
(852, 'La Resurreccion', 'Rafael Uribe Uribe'),
(853, 'La Resurreccion I', 'Rafael Uribe Uribe'),
(854, 'Marco Fidel Suarez', 'Rafael Uribe Uribe'),
(855, 'San Jorge Sur', 'Rafael Uribe Uribe'),
(856, 'San Jose Sur', 'Rafael Uribe Uribe'),
(857, 'San Luis', 'Rafael Uribe Uribe'),
(858, 'Sosiego Sur', 'Rafael Uribe Uribe'),
(859, 'Arboleda Sur', 'Rafael Uribe Uribe'),
(860, 'Callejon Santa Barbara', 'Rafael Uribe Uribe'),
(861, 'Carmen Del Sol ', 'Rafael Uribe Uribe'),
(862, 'Cerros De Oriente', 'Rafael Uribe Uribe'),
(863, 'El Playon', 'Rafael Uribe Uribe'),
(864, 'Guiparma', 'Rafael Uribe Uribe'),
(865, 'Los Molinos', 'Rafael Uribe Uribe'),
(866, 'Marco Fidel Suarez I', 'Rafael Uribe Uribe'),
(867, 'Marruecos', 'Rafael Uribe Uribe'),
(868, 'Molinos Del Sur', 'Rafael Uribe Uribe'),
(869, 'Puerto Rico', 'Rafael Uribe Uribe'),
(870, 'Arrayanes III', 'Rafael Uribe Uribe'),
(871, 'Arrayanes IV', 'Rafael Uribe Uribe'),
(872, 'Diana Turbay', 'Rafael Uribe Uribe'),
(873, 'Diana Turbay Arrayanes', 'Rafael Uribe Uribe'),
(874, 'Diana Turbay Cultivos', 'Rafael Uribe Uribe'),
(875, 'La Paz', 'Rafael Uribe Uribe'),
(876, 'La Picota', 'Rafael Uribe Uribe'),
(877, 'La Picota Oriental', 'Rafael Uribe Uribe'),
(878, 'Los Arrayanes II', 'Rafael Uribe Uribe'),
(879, 'Palermo Sur', 'Rafael Uribe Uribe'),
(880, 'Rincon Del Valle', 'Rafael Uribe Uribe'),
(881, 'San Agustin', 'Rafael Uribe Uribe'),
(882, 'Arborizadora Baja', 'Ciudad Bolivar'),
(883, 'Atalnta', 'Ciudad Bolivar'),
(884, 'El Chircal Sur', 'Ciudad Bolivar'),
(885, 'Guadalupe', 'Ciudad Bolivar'),
(886, 'La Coruña', 'Ciudad Bolivar'),
(887, 'Madelena', 'Ciudad Bolivar'),
(888, 'Rafael Escamilla', 'Ciudad Bolivar'),
(889, 'Barlovento', 'Ciudad Bolivar'),
(890, 'El Ensueño', 'Ciudad Bolivar'),
(891, 'El Mirador De La Estancia ', 'Ciudad Bolivar'),
(892, 'El Peñon Del Cortijo', 'Ciudad Bolivar'),
(893, 'Espino', 'Ciudad Bolivar'),
(894, 'Espino I', 'Ciudad Bolivar'),
(895, 'Galicia', 'Ciudad Bolivar'),
(896, 'Ismael Perdomo', 'Ciudad Bolivar'),
(897, 'La Estancia', 'Ciudad Bolivar'),
(898, 'La Primavera I', 'Ciudad Bolivar'),
(899, 'Los Tres Reyes', 'Ciudad Bolivar'),
(900, 'Los Tres Reyes I', 'Ciudad Bolivar'),
(901, 'Maria Cano', 'Ciudad Bolivar'),
(902, 'Perdomo Alto', 'Ciudad Bolivar'),
(903, 'Primavera II', 'Ciudad Bolivar'),
(904, 'Rincon De Galicia', 'Ciudad Bolivar'),
(905, 'Rincon De La Valv', 'Ciudad Bolivar'),
(906, 'Bellavista', 'Ciudad Bolivar'),
(907, 'Caracoli', 'Ciudad Bolivar'),
(908, 'Jerusalen', 'Ciudad Bolivar'),
(909, 'La Pradera', 'Ciudad Bolivar'),
(910, 'Las Brisas', 'Ciudad Bolivar'),
(911, 'Potosi', 'Ciudad Bolivar'),
(912, 'Santa Viviana', 'Ciudad Bolivar'),
(913, 'Sierra Morena', 'Ciudad Bolivar'),
(914, 'Sierra Morena II', 'Ciudad Bolivar'),
(915, 'Verona', 'Ciudad Bolivar'),
(916, 'Arborizadora Alta', 'Ciudad Bolivar'),
(917, 'Candelaria La Nueva', 'Ciudad Bolivar'),
(918, 'Cerro Colorado', 'Ciudad Bolivar'),
(919, 'Ciudad Bolivar', 'Ciudad Bolivar'),
(920, 'Ciudad Bolivar Rural III', 'Ciudad Bolivar'),
(921, 'El Satelite', 'Ciudad Bolivar'),
(922, 'Juan Jose Rondon', 'Ciudad Bolivar'),
(923, 'Las Acacias', 'Ciudad Bolivar'),
(924, 'Las Manas', 'Ciudad Bolivar'),
(925, 'Los Laureles II', 'Ciudad Bolivar'),
(926, 'Ronda', 'Ciudad Bolivar'),
(927, 'San Francisco', 'Ciudad Bolivar'),
(928, 'Villa', 'Ciudad Bolivar'),
(929, 'Bella Flor', 'Ciudad Bolivar'),
(930, 'Bella Flor Sur', 'Ciudad Bolivar'),
(931, 'Bella Flor Sur Rural', 'Ciudad Bolivar'),
(932, 'Brisas Del Volador', 'Ciudad Bolivar'),
(933, 'Ciudad Bolivar Rural I', 'Ciudad Bolivar'),
(934, 'Ciudad Bolivar Rural II', 'Ciudad Bolivar'),
(935, 'Compartir', 'Ciudad Bolivar'),
(936, 'Cordillera Del Sur', 'Ciudad Bolivar'),
(937, 'El Mirador', 'Ciudad Bolivar'),
(938, 'Gibraltar Sur', 'Ciudad Bolivar'),
(939, 'Juan Pablo II', 'Ciudad Bolivar'),
(940, 'La Torre', 'Ciudad Bolivar'),
(941, 'Los Alpes Sur', 'Ciudad Bolivar'),
(942, 'Lucero ALto', 'Ciudad Bolivar'),
(943, 'Meissen', 'Ciudad Bolivar'),
(944, 'Millan', 'Ciudad Bolivar'),
(945, 'Nueva Es', 'Ciudad Bolivar'),
(946, 'Arabia', 'Ciudad Bolivar'),
(947, 'Bellavista Lucero Alto', 'Ciudad Bolivar'),
(948, 'Casa De Teja', 'Ciudad Bolivar'),
(949, 'Cedritos Del Sur', 'Ciudad Bolivar'),
(950, 'Central De Mezclas', 'Ciudad Bolivar'),
(951, 'EL Minuto De Maria', 'Ciudad Bolivar'),
(952, 'El Mochuelo', 'Ciudad Bolivar'),
(953, 'EL Mochuelo II', 'Ciudad Bolivar'),
(954, 'El Mochuelo II Norte', 'Ciudad Bolivar'),
(955, 'El Mochuelo II Urbano', 'Ciudad Bolivar'),
(956, 'EL Mochuelo III', 'Ciudad Bolivar'),
(957, 'El Mochuelo III Urbano', 'Ciudad Bolivar'),
(958, 'El Mochuelo IV', 'Ciudad Bolivar'),
(959, 'El Mochuelo Oriental', 'Ciudad Bolivar'),
(960, 'Brazuelos Occidental', 'Ciudad Bolivar'),
(961, 'Brazuelos Occidental Rural', 'Ciudad Bolivar'),
(962, 'Mochuelo Alto', 'Ciudad Bolivar'),
(963, 'Mochuelo Alto Rural', 'Ciudad Bolivar'),
(964, 'Quiba Alto Y Las Veredas Cabecera Municipal', 'Ciudad Bolivar'),
(965, 'San Jorqe', 'Ciudad Bolivar'),
(966, 'Alto Del Cabra', 'Ciudad Bolivar'),
(967, 'El Hato', 'Ciudad Bolivar'),
(968, 'Hungria', 'Ciudad Bolivar'),
(969, 'La regadera', 'Ciudad Bolivar'),
(970, 'Las Margaritas', 'Ciudad Bolivar'),
(971, 'Las Mercedes', 'Ciudad Bolivar'),
(972, 'Los Arrayanes', 'Ciudad Bolivar'),
(973, 'Pasquilla', 'Ciudad Bolivar'),
(974, 'Pasquillita', 'Ciudad Bolivar'),
(975, 'Romeral', 'Ciudad Bolivar'),
(976, 'Sanra Barbara', 'Ciudad Bolivar'),
(977, 'Sanra Rosa', 'Ciudad Bolivar'),
(978, 'Arrayan', 'Sumapaz'),
(979, 'Betania', 'Sumapaz'),
(980, 'El Pilar', 'Sumapaz'),
(981, 'Laguna Verde', 'Sumapaz'),
(982, 'Quebradas', 'Sumapaz'),
(983, 'Santa Rosa Alta', 'Sumapaz'),
(984, 'Santa Rosa Baja', 'Sumapaz'),
(985, 'Area En Conflicto', 'Sumapaz'),
(986, 'El Dorado', 'Sumapaz'),
(987, 'Las Animas', 'Sumapaz'),
(988, 'Las Auras', 'Sumapaz'),
(989, 'Las Palmas', 'Sumapaz'),
(990, 'Las Sopas', 'Sumapaz'),
(991, 'Las Vegas', 'Sumapaz'),
(992, 'Los Medios', 'Sumapaz'),
(993, 'Los Rios', 'Sumapaz'),
(994, 'Nazareth', 'Sumapaz'),
(995, 'Parque Sumapaz', 'Sumapaz'),
(996, 'Penalista', 'Sumapaz'),
(997, 'Raizal', 'Sumapaz'),
(998, 'San Gil', 'Sumapaz'),
(999, 'Taquecitos', 'Sumapaz'),
(1000, 'Zona De Proteccion Y Conservación Ambiental', 'Sumapaz'),
(1001, 'Chorreras', 'Sumapaz'),
(1002, 'Lagunitas', 'Sumapaz'),
(1003, 'San Juan', 'Sumapaz'),
(1004, 'Santo Domingo', 'Sumapaz');

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
  `dat_pre` datetime NOT NULL COMMENT 'Fecha de preinscripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(52, 'D21', 'No Vulnerable');

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
  `stu_tel` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono personal estudiante',
  `stu_hob` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hobbies o pasatiempos del estudiante',
  `stu_enf` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Enfermedades o fracturas estudiante',
  `stu_eps` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Eps Estudiante',
  `stu_ars` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ars Estudiante',
  `stu_ips` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ips Estudiante',
  `b_grp` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Grupo sanguíneo estudiante',
  `rh_fact` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Factor Rh estudiante',
  `pre_stu` tinyint(1) DEFAULT NULL COMMENT 'Estado preinscripción ',
  `cre_dat` datetime NOT NULL COMMENT 'Fecha de creación Registro',
  `upd_dat` datetime NOT NULL COMMENT 'Ultima fecha de modificación Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL COMMENT 'Codigo registro',
  `per_nam` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Completo Empleado',
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
  ADD KEY `stu_doc_num` (`stu_doc_num`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro', AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro';

--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `familiars`
--
ALTER TABLE `familiars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro';

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
-- AUTO_INCREMENT de la tabla `neigh`
--
ALTER TABLE `neigh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT de la tabla `other_inf`
--
ALTER TABLE `other_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro';

--
-- AUTO_INCREMENT de la tabla `pob_typ`
--
ALTER TABLE `pob_typ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pre_stu`
--
ALTER TABLE `pre_stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo Registro';

--
-- AUTO_INCREMENT de la tabla `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro';

--
-- AUTO_INCREMENT de la tabla `rh_fact`
--
ALTER TABLE `rh_fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sisb_cat`
--
ALTER TABLE `sisb_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro';

--
-- AUTO_INCREMENT de la tabla `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo registro', AUTO_INCREMENT=3;

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
-- Filtros para la tabla `neigh`
--
ALTER TABLE `neigh`
  ADD CONSTRAINT `neigh_ibfk_1` FOREIGN KEY (`loc_nam`) REFERENCES `locations` (`loc_nam`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `other_inf`
--
ALTER TABLE `other_inf`
  ADD CONSTRAINT `other_inf_ibfk_1` FOREIGN KEY (`stu_doc_num`) REFERENCES `students` (`doc_num`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pre_stu`
--
ALTER TABLE `pre_stu`
  ADD CONSTRAINT `pre_stu_ibfk_1` FOREIGN KEY (`stu_doc_num`) REFERENCES `students` (`doc_num`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pre_stu_ibfk_2` FOREIGN KEY (`stu_doc_typ`) REFERENCES `doc_typ` (`doc_typ`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `students_ibfk_13` FOREIGN KEY (`rh_fact`) REFERENCES `rh_fact` (`fac_nam`),
  ADD CONSTRAINT `students_ibfk_14` FOREIGN KEY (`stu_loc`) REFERENCES `locations` (`loc_nam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_15` FOREIGN KEY (`stu_dep`) REFERENCES `departaments` (`dep_nam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_16` FOREIGN KEY (`stu_nei`) REFERENCES `neigh` (`neig_nam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_18` FOREIGN KEY (`stu_cit`) REFERENCES `cities` (`cit_nam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_19` FOREIGN KEY (`exp_cit`) REFERENCES `cities` (`cit_nam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_20` FOREIGN KEY (`doc_typ`) REFERENCES `doc_typ` (`doc_typ`) ON DELETE CASCADE ON UPDATE CASCADE,
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
