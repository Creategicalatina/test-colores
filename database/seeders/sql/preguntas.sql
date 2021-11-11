-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2021 at 10:57 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.25

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_de_colores`
--

--
-- Truncate table before insert `characteristics`
--

TRUNCATE TABLE `characteristics`;
--
-- Dumping data for table `characteristics`
--

INSERT INTO `characteristics` (`id`, `name`, `type`, `description`) VALUES
(1, 'Animado', 'SANGUINEO', NULL),
(2, 'Juguetón', 'SANGUINEO', NULL),
(3, 'Sociable', 'SANGUINEO', NULL),
(4, 'Convincente', 'SANGUINEO', NULL),
(5, 'Entusiasta', 'SANGUINEO', NULL),
(6, 'Enérgico', 'SANGUINEO', NULL),
(7, 'Activista', 'SANGUINEO', NULL),
(8, 'Espontaneo', 'SANGUINEO', NULL),
(9, 'Optimista', 'SANGUINEO', NULL),
(10, 'Chistoso', 'SANGUINEO', NULL),
(11, 'Encantador', 'SANGUINEO', NULL),
(12, 'Alegre', 'SANGUINEO', NULL),
(13, 'Inspirador', 'SANGUINEO', NULL),
(14, 'Calido', 'SANGUINEO', NULL),
(15, 'Cordial', 'SANGUINEO', NULL),
(16, 'Hablador', 'SANGUINEO', NULL),
(17, 'Vivaz', 'SANGUINEO', 'Agudo, vigoroso, sagaz'),
(18, 'Listo', 'SANGUINEO', NULL),
(19, 'Popular', 'SANGUINEO', NULL),
(20, 'Jovial', 'SANGUINEO', 'Alegre, festivo, desenfadado'),
(21, 'Estridente', 'SANGUINEO', 'Que produce ruido y estruendo / Que molesta por su violencia, su extravagancia o su exceso'),
(22, 'Indisciplinado', 'SANGUINEO', NULL),
(23, 'Repetidor', 'SANGUINEO', NULL),
(24, 'Olvidadizo', 'SANGUINEO', NULL),
(25, 'Interrumpe', 'SANGUINEO', NULL),
(26, 'Imprevisible', 'SANGUINEO', NULL),
(27, 'Descuidado', 'SANGUINEO', NULL),
(28, 'Tolerante', 'SANGUINEO', NULL),
(29, 'Iracundo', 'SANGUINEO', 'Propenso a la ira, colérico'),
(30, 'Ingenuo', 'SANGUINEO', NULL),
(31, 'Egocentrico', 'SANGUINEO', NULL),
(32, 'Hablador', 'SANGUINEO', NULL),
(33, 'Desorganizado', 'SANGUINEO', NULL),
(34, 'Inconsistente', 'SANGUINEO', NULL),
(35, 'Desordenado', 'SANGUINEO', NULL),
(36, 'Ostentoso', 'SANGUINEO', NULL),
(37, 'Emocional', 'SANGUINEO', NULL),
(38, 'Atolondrado', 'SANGUINEO', 'Que procede sin reflexión, atontado'),
(39, 'Inquieto', 'SANGUINEO', NULL),
(40, 'Variable', 'SANGUINEO', NULL),
(41, 'Aventurero', 'COLERICO', NULL),
(42, 'Persuasivo', 'COLERICO', 'Que tiene fuerza y paciencia para persuadir'),
(43, 'Decidido', 'COLERICO', NULL),
(44, 'Competitivo', 'COLERICO', NULL),
(45, 'Inventivo', 'COLERICO', 'Inventar'),
(46, 'Autosuficiente', 'COLERICO', NULL),
(47, 'Positivo', 'COLERICO', NULL),
(48, 'Seguro', 'COLERICO', NULL),
(49, 'Abierto', 'COLERICO', NULL),
(50, 'Dominante', 'COLERICO', NULL),
(51, 'Osado', 'COLERICO', NULL),
(52, 'Confiado', 'COLERICO', NULL),
(53, 'Independiente', 'COLERICO', NULL),
(54, 'Decisivo', 'COLERICO', NULL),
(55, 'Instigador', 'COLERICO', 'Incitar, inducir a alguien a hacer algo'),
(56, 'Tenaz', 'COLERICO', NULL),
(57, 'Lider', 'COLERICO', NULL),
(58, 'Jefe', 'COLERICO', NULL),
(59, 'Productivo', 'COLERICO', NULL),
(60, 'Atrevido', 'COLERICO', NULL),
(61, 'Mandón', 'COLERICO', NULL),
(62, 'Antipático', 'COLERICO', NULL),
(63, 'Resistente', 'COLERICO', NULL),
(64, 'Franco', 'COLERICO', NULL),
(65, 'Impaciente', 'COLERICO', NULL),
(66, 'Frío', 'COLERICO', NULL),
(67, 'Terco', 'COLERICO', NULL),
(68, 'Orgulloso', 'COLERICO', NULL),
(69, 'Argumentador', 'COLERICO', NULL),
(70, 'Nervioso', 'COLERICO', NULL),
(71, 'Adicto al trabajo', 'COLERICO', NULL),
(72, 'Indiscreto', 'COLERICO', NULL),
(73, 'Dominante', 'COLERICO', NULL),
(74, 'Intolerante', 'COLERICO', 'Que no tiene tolerancia'),
(75, 'Manipulador', 'COLERICO', NULL),
(76, 'Testarudo', 'COLERICO', NULL),
(77, 'Prepotente', 'COLERICO', NULL),
(78, 'Malgeniado', 'COLERICO', NULL),
(79, 'Precipitado', 'COLERICO', NULL),
(80, 'Astuto', 'COLERICO', NULL),
(81, 'Analítico', 'MELANCOLICO', NULL),
(82, 'Persistente', 'MELANCOLICO', NULL),
(83, 'Abnegado', 'MELANCOLICO', 'Sacrificio o renuncia voluntaria de una persona a pasiones, deseos o intereses en favor del prójimo'),
(84, 'Considerado', 'MELANCOLICO', NULL),
(85, 'Respetuoso', 'MELANCOLICO', NULL),
(86, 'Sensible', 'MELANCOLICO', NULL),
(87, 'Planificador', 'MELANCOLICO', NULL),
(88, 'Puntual', 'MELANCOLICO', NULL),
(89, 'Ordenado', 'MELANCOLICO', NULL),
(90, 'Fiel', 'MELANCOLICO', NULL),
(91, 'Detallista', 'MELANCOLICO', NULL),
(92, 'Culto', 'MELANCOLICO', NULL),
(93, 'Idealista', 'MELANCOLICO', NULL),
(94, 'Introspectivo', 'MELANCOLICO', 'Observación interna de los pensamientos, sentimientos o actos.'),
(95, 'Músico', 'MELANCOLICO', NULL),
(96, 'Considerado', 'MELANCOLICO', NULL),
(97, 'Leal', 'MELANCOLICO', NULL),
(98, 'Organizado', 'MELANCOLICO', NULL),
(99, 'Perfeccionista', 'MELANCOLICO', NULL),
(100, 'Se comporta bien', 'MELANCOLICO', NULL),
(101, 'Apocado', 'MELANCOLICO', 'De poco ánimo, abatido'),
(102, 'Sin entusiasmo', 'MELANCOLICO', NULL),
(103, 'Resentido', 'MELANCOLICO', NULL),
(104, 'Exigente', 'MELANCOLICO', NULL),
(105, 'Inseguro', 'MELANCOLICO', NULL),
(106, 'No comprometido', 'MELANCOLICO', NULL),
(107, 'Dificil contentar', 'MELANCOLICO', NULL),
(108, 'Pesimista', 'MELANCOLICO', NULL),
(109, 'Sin motivación', 'MELANCOLICO', NULL),
(110, 'Negativo', 'MELANCOLICO', NULL),
(111, 'Abstraído', 'MELANCOLICO', 'Ensimismado, muy concentrado en su pensamiento'),
(112, 'Susceptible', 'MELANCOLICO', NULL),
(113, 'Deprimido', 'MELANCOLICO', NULL),
(114, 'Introvertido', 'MELANCOLICO', NULL),
(115, 'Moroso', 'MELANCOLICO', 'Que se retrasa en el pago de una deuda / Que se desarrolla,transcurre o actúa con gran lentitud'),
(116, 'Esceptico', 'MELANCOLICO', 'Que duda o no cree en ciertas cosas'),
(117, 'Solitario', 'MELANCOLICO', NULL),
(118, 'Suspicaz', 'MELANCOLICO', 'Receloso,inclinado a la sospecha y la desconfianza'),
(119, 'Vengativo', 'MELANCOLICO', NULL),
(120, 'Comprometido', 'MELANCOLICO', NULL),
(121, 'Adaptable', 'FLEMATICO', NULL),
(122, 'Plácido', 'FLEMATICO', 'Quieto,tranquilo, Grato, apacible'),
(123, 'Sumiso', 'FLEMATICO', NULL),
(124, 'Controlado', 'FLEMATICO', NULL),
(125, 'Reservado', 'FLEMATICO', NULL),
(126, 'Contento', 'FLEMATICO', NULL),
(127, 'Paciente', 'FLEMATICO', NULL),
(128, 'Timido', 'FLEMATICO', NULL),
(129, 'Atento', 'FLEMATICO', NULL),
(130, 'Amigable', 'FLEMATICO', NULL),
(131, 'Diplomático', 'FLEMATICO', NULL),
(132, 'Constante', 'FLEMATICO', NULL),
(133, 'Inofensivo', 'FLEMATICO', NULL),
(134, 'Humor seco', 'FLEMATICO', NULL),
(135, 'Conciliador', 'FLEMATICO', 'Poner de acuerdo a los que estaban en desacuerdo'),
(136, 'Tolerante', 'FLEMATICO', NULL),
(137, 'Escucha', 'FLEMATICO', NULL),
(138, 'Contento', 'FLEMATICO', NULL),
(139, 'Tolerante', 'FLEMATICO', NULL),
(140, 'Equilibrado', 'FLEMATICO', NULL),
(141, 'Soso', 'FLEMATICO', 'Que no tiene sal o tiene poca / que carecen de gracia y viveza'),
(142, 'Implacable', 'FLEMATICO', 'Severo, inflexible'),
(143, 'Reticente', 'FLEMATICO', 'Que desconfía o sospecha de los demás'),
(144, 'Temeroso', 'FLEMATICO', NULL),
(145, 'Indeciso', 'FLEMATICO', NULL),
(146, 'Impopular', 'FLEMATICO', NULL),
(147, 'Vacilante', 'FLEMATICO', NULL),
(148, 'Insípido', 'FLEMATICO', NULL),
(149, 'Taciturno', 'FLEMATICO', 'Callado,silencioso / Triste,melancólico'),
(150, 'Desprendido', 'FLEMATICO', NULL),
(151, 'Ansioso', 'FLEMATICO', NULL),
(152, 'Tímido', 'FLEMATICO', NULL),
(153, 'Dudoso', 'FLEMATICO', NULL),
(154, 'Indiferente', 'FLEMATICO', NULL),
(155, 'Quejumbroso', 'FLEMATICO', NULL),
(156, 'Lento', 'FLEMATICO', NULL),
(157, 'Perezoso', 'FLEMATICO', NULL),
(158, 'Sin ambición', 'FLEMATICO', NULL),
(159, 'Poca Voluntad', 'FLEMATICO', NULL),
(160, 'Crítico', 'FLEMATICO', NULL);

--
-- Truncate table before insert `characteristics_groups`
--

TRUNCATE TABLE `characteristics_groups`;
--
-- Dumping data for table `characteristics_groups`
--

INSERT INTO `characteristics_groups` (`id`, `order`, `group_id`, `characteristic_id`) VALUES
(1, 0, 1, 1),
(2, 1, 1, 41),
(3, 2, 1, 81),
(4, 3, 1, 121),

(5, 1, 2, 2),
(6, 2, 2, 42),
(7, 0, 2, 82),
(8, 3, 2, 122),

(9, 2, 3, 3),
(10, 3, 3, 43),
(11, 1, 3, 83),
(12, 0, 3, 123),

(13, 3, 4, 4),
(14, 2, 4, 44),
(15, 0, 4, 84),
(16, 1, 4, 124),

(17, 0, 5, 5),
(18, 3, 5, 45),
(19, 1, 5, 85),
(20, 2, 5, 125),

(21, 3, 6, 6),
(22, 2, 6, 46),
(23, 1, 6, 86),
(24, 0, 6, 126),

(25, 3, 7, 7),
(26, 2, 7, 47),
(27, 0, 7, 87),
(28, 1, 7, 127),

(29, 1, 8, 8),
(30, 0, 8, 48),
(31, 2, 8, 88),
(32, 3, 8, 128),

(33, 3, 9, 9),
(34, 2, 9, 49),
(35, 0, 9, 89),
(36, 1, 9, 129),

(37, 2, 10, 10),
(38, 3, 10, 50),
(39, 1, 10, 90),
(40, 0, 10, 130),

(41, 1, 11, 11),
(42, 0, 11, 51),
(43, 3, 11, 91),
(44, 2, 11, 131),

(45, 0, 12, 12),
(46, 3, 12, 52),
(47, 2, 12, 92),
(48, 1, 12, 132),

(49, 3, 13, 13),
(50, 1, 13, 53),
(51, 0, 13, 93),
(52, 2, 13, 133),

(53, 0, 14, 14),
(54, 1, 14, 54),
(55, 3, 14, 94),
(56, 2, 14, 134),

(57, 3, 15, 15),
(58, 2, 15, 55),
(59, 1, 15, 95),
(60, 0, 15, 135),

(61, 2, 16, 16),
(62, 1, 16, 56),
(63, 0, 16, 96),
(64, 3, 16, 136),

(65, 3, 17, 17),
(66, 2, 17, 57),
(67, 1, 17, 97),
(68, 0, 17, 137),

(69, 3, 18, 18),
(70, 1, 18, 58),
(71, 2, 18, 98),
(72, 0, 18, 138),

(73, 3, 19, 19),
(74, 2, 19, 59),
(75, 0, 19, 99),
(76, 1, 19, 139),

(77, 0, 20, 20),
(78, 1, 20, 60),
(79, 2, 20, 100),
(80, 3, 20, 140),

(81, 0, 21, 21),
(82, 1, 21, 61),
(83, 2, 21, 101),
(84, 3, 21, 141),

(85, 0, 22, 22),
(86, 1, 22, 62),
(87, 2, 22, 102),
(88, 3, 22, 142),

(89, 3, 23, 23),
(90, 2, 23, 63),
(91, 1, 23, 103),
(92, 0, 23, 143),

(93, 2, 24, 24),
(94, 3, 24, 64),
(95, 0, 24, 104),
(96, 1, 24, 144),

(97, 3, 25, 25),
(98, 0, 25, 65),
(99, 1, 25, 105),
(100, 2, 25, 145),

(101, 2, 26, 26),
(102, 3, 26, 66),
(103, 1, 26, 106),
(104, 0, 26, 146),

(105, 1, 27, 27),
(106, 0, 27, 67),
(107, 2, 27, 107),
(108, 3, 27, 147),

(109, 3, 28, 28),
(110, 2, 28, 68),
(111, 1, 28, 108),
(112, 0, 28, 148),

(113, 0, 29, 29),
(114, 2, 29, 69),
(115, 1, 29, 109),
(116, 3, 29, 149),

(117, 0, 30, 30),
(118, 2, 30, 70),
(119, 1, 30, 110),
(120, 3, 30, 150),

(121, 3, 31, 31),
(122, 2, 31, 71),
(123, 1, 31, 111),
(124, 0, 31, 151),

(125, 3, 32, 32),
(126, 1, 32, 72),
(127, 0, 32, 112),
(128, 2, 32, 152),

(129, 1, 33, 33),
(130, 2, 33, 73),
(131, 3, 33, 113),
(132, 0, 33, 153),

(133, 0, 34, 34),
(134, 2, 34, 74),
(135, 1, 34, 114),
(136, 3, 34, 154),

(137, 0, 35, 35),
(138, 3, 35, 75),
(139, 1, 35, 115),
(140, 2, 35, 155),

(141, 2, 36, 36),
(142, 1, 36, 76),
(143, 3, 36, 116),
(144, 0, 36, 156),

(145, 3, 37, 37),
(146, 1, 37, 77),
(147, 0, 37, 117),
(148, 2, 37, 157),

(149, 3, 38, 38),
(150, 2, 38, 78),
(151, 1, 38, 118),
(152, 0, 38, 158),

(153, 1, 39, 39),
(154, 3, 39, 79),
(155, 0, 39, 119),
(156, 2, 39, 159),

(157, 3, 40, 40),
(158, 2, 40, 80),
(159, 0, 40, 120),
(160, 1, 40, 160);

--
-- Truncate table before insert `groups`
--

TRUNCATE TABLE `groups`;
--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `order`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
