-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 01:36:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `identificacion` varchar(20) NOT NULL,
  `es_extranjero` int(11) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Edad` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `idrepresentante` int(11) DEFAULT NULL,
  `idcontacto` int(11) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL,
  `idsexo` int(11) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `Nombres`, `Apellidos`, `identificacion`, `es_extranjero`, `Fecha_nacimiento`, `Edad`, `Celular`, `Correo`, `idrepresentante`, `idcontacto`, `idcurso`, `idsexo`, `direccion`) VALUES
(41, 'John Marcos', 'Davis', '1234567890', 0, '1999-11-30', 0, 962141172, 'jdyglol123@gmail.com', 11, NULL, NULL, 1, '10 de agosto'),
(42, 'Luis', 'Hernandez', '5321976523', 0, '2008-05-15', 14, 2147483647, 'luis.hernandez@email.com', 27, 0, 0, 1, 'Av. Principal #123'),
(43, 'Juan', 'Pérez', '5632147896', 0, '2007-07-23', 15, 2147483647, 'juan.perez@email.com', 51, 0, 0, 1, 'Calle 4 #567'),
(44, 'Miguel', 'García', '5197632145', 0, '2009-02-03', 13, 2147483647, 'miguel.garcia@email.com', 38, 0, 0, 1, 'Calle 8 #876'),
(45, 'Fernanda', 'López', '5197632145', 0, '2006-11-30', 16, 2147483647, 'correo.correo@email.com', 18, 0, 0, 2, 'Av. 5 de Mayo #345'),
(46, 'Ana', 'Martínez', '5234987651', 0, '2008-09-28', 13, 2147483647, 'correo.correo@email.com', 9, 0, 0, 2, 'Av. Principal #456'),
(47, 'Pedro', 'Vargas', '5067369124', 0, '2007-12-05', 15, 2147483647, 'correo.correo@email.com', 14, 0, 0, 1, 'Calle 3 #678'),
(48, 'Eduardo', 'Guzmán', '5613498702', 0, '2009-06-12', 12, 2147483647, 'correo.correo@email.com', 41, 0, 0, 1, 'Calle 9 #234'),
(49, 'Sofía', 'Sánchez', '5724913650', 0, '2006-03-21', 16, 2147483647, 'correo.correo@email.com', 7, 0, 0, 2, 'Calle 2 #789'),
(50, 'Carla', 'Fernández', '5102739461', 0, '2007-01-19', 15, 2147483647, 'correo.correo@email.com', 12, 0, 0, 2, 'Av. Principal #567'),
(51, 'Roberto', 'Rivera', '5213478965', 0, '2006-08-14', 16, 2147483647, 'correo.correo@email.com', 59, 0, 0, 1, 'Av. 10 de Mayo #123'),
(52, 'Luisa', 'Martinez', '7312435869', 0, '2009-03-14', 14, 2147483647, 'luisa.martinez@example.com', 23, 0, 0, 2, 'Calle 8 #15-20'),
(53, 'Carlos', 'Gomez', '7598364501', 0, '2010-01-29', 13, 2147483647, 'carlos.gomez@example.com', 44, 0, 0, 1, 'Carrera 11 #25-45'),
(54, 'Ana', 'Ramirez', '7198046382', 0, '2009-07-02', 12, 2147483647, 'ana.ramirez@example.com', 9, 0, 0, 2, 'Calle 12 #18-15'),
(55, 'David', 'Perez', '7895623018', 0, '2011-02-10', 10, 2147483647, 'david.perez@example.com', 31, 0, 0, 1, 'Carrera 5 #22-12'),
(56, 'Pedrito', 'Rivera', '7283649102', 0, '2010-11-05', 11, 2147483647, 'alejandra.castro@example.com', 56, 0, 0, 2, 'Calle 16 #24-33'),
(57, 'Mario', 'Rojas', '7630915284', 0, '2009-06-20', 12, 2147483647, 'mario.rojas@example.com', 37, 0, 0, 1, 'Carrera 20 #14-23'),
(58, 'Isabella', 'Fernandez', '7012453890', 0, '2012-04-02', 9, 2147483647, 'isabella.fernandez@example.com', 14, 0, 0, 2, 'Calle 10 #8-50'),
(59, 'Juan', 'Gutierrez', '7286345019', 0, '2010-10-25', 11, 2147483647, 'juan.gutierrez@example.com', 62, 0, 0, 1, 'Carrera 15 #19-08'),
(60, 'Sofia', 'Santos', '7569012384', 0, '2009-05-18', 12, 2147483647, 'sofia.santos@example.com', 16, 0, 0, 2, 'Calle 22 #18-13'),
(61, 'Javier', 'Hernandez', '7298364501', 0, '2011-11-30', 10, 2147483647, 'javier.hernandez@example.com', 47, 0, 0, 1, 'Carrera 12 #26-19'),
(62, 'Sofía', 'García', '3489572134', 0, '2014-09-12', 8, 2147483647, 'sofia.garcia@email.com', 44, 0, 0, 2, 'Calle 5 #23-45'),
(63, 'Dave', 'Santos', '9980765432', 0, '2016-05-17', 6, 2147483647, 'juan.santos@email.com', 49, 0, 0, 1, 'Carrera 10 #12-34'),
(64, 'Carolina', 'López', '4567382910', 0, '2012-11-21', 9, 2147483647, 'carolina.lopez@email.com', 61, 0, 0, 2, 'Calle 12 #14-56'),
(65, 'Andrés', 'Hernández', '7082145698', 0, '2015-02-03', 7, 2147483647, 'andres.hernandez@email.com', 16, 0, 0, 1, 'Carrera 5 #9-87'),
(66, 'Valentina', 'Torres', '9876543210', 0, '2013-08-06', 8, 2147483647, 'valentina.torres@email.com', 31, 0, 0, 2, 'Calle 8 #16-32'),
(67, 'Gabriel', 'Gómez', '5678904321', 0, '2015-06-20', 6, 2147483647, 'gabriel.gomez@email.com', 27, 0, 0, 1, 'Carrera 7 #11-09'),
(68, 'María', 'Pérez', '1245783690', 0, '2014-03-29', 7, 2147483647, 'maria.perez@email.com', 57, 0, 0, 2, 'Calle 10 #17-25'),
(69, 'José', 'Mendoza', '5467890123', 0, '2013-12-10', 8, 2147483647, 'jose.mendoza@email.com', 12, 0, 0, 1, 'Carrera 12 #14-54'),
(70, 'Laura', 'Guzmán', '9823471560', 0, '2012-09-08', 9, 2147483647, 'laura.guzman@email.com', 23, 0, 0, 2, 'Calle 11 #18-46'),
(71, 'David', 'Sánchez', '3498701265', 0, '2014-01-24', 8, 2147483647, 'david.sanchez@email.com', 65, 0, 0, 1, 'Carrera 9 #13-37'),
(72, 'Ana', 'García', '1234567890', 0, '2006-03-12', 17, 1234567890, 'ana.garcia@example.com', 32, 0, 0, 2, 'Calle 10 #15-20'),
(73, 'Lucas', 'Diaz', '2345678901', 0, '2005-11-20', 16, 2147483647, 'lucas.fernandez@example.com', 12, 0, 0, 1, 'Calle 5 #12-25'),
(74, 'María', 'Martínez', '3456789012', 0, '2007-07-03', 14, 2147483647, 'maria.martinez@example.com', 54, 0, 0, 2, 'Calle 8 #14-18'),
(75, 'Jorge', 'Gómez', '4567890123', 0, '2005-05-10', 16, 2147483647, 'jorge.gomez@example.com', 43, 0, 0, 1, 'Calle 12 #18-15'),
(76, 'Sofía', 'Hernández', '5678901234', 0, '2006-12-08', 15, 2147483647, 'sofia.hernandez@example.com', 9, 0, 0, 2, 'Calle 11 #17-22'),
(77, 'Andrés', 'López', '6789012345', 0, '2006-01-21', 15, 2147483647, 'andres.lopez@example.com', 61, 0, 0, 1, 'Calle 9 #13-21'),
(78, 'Carla', 'González', '7890123456', 0, '2007-09-28', 14, 2147483647, 'carla.gonzalez@example.com', 24, 0, 0, 2, 'Calle 6 #11-19'),
(79, 'Pablo', 'Sánchez', '8901234567', 0, '2005-08-15', 16, 2147483647, 'pablo.sanchez@example.com', 37, 0, 0, 1, 'Calle 7 #12-18'),
(80, 'Isabel', 'Pérez', '9012345678', 0, '2006-04-05', 15, 2147483647, 'isabel.perez@example.com', 14, 0, 0, 2, 'Calle 8 #13-17'),
(81, 'Juan', 'Rivera', '0123456789', 0, '2007-02-16', 14, 123456789, 'juan.rivera@example.com', 49, 0, 0, 1, 'Calle 10 #14-16'),
(82, 'Bertha', 'Carrion', '9106342453', 0, '2008-06-22', 13, 2147483647, 'ana.martinez@email.com', 25, 0, 0, 2, 'Calle 10 # 23-45'),
(83, 'Benito', 'Garcia', '8801592389', 0, '2009-09-11', 12, 2147483647, 'juan.garcia@email.com', 42, 0, 0, 1, 'Carrera 12 # 5-67'),
(84, 'Sofia', 'Torres', '7001827594', 0, '2007-04-16', 14, 2147483647, 'sofia.torres@email.com', 63, 0, 0, 2, 'Calle 6 # 18-30'),
(85, 'Mateo', 'Rodriguez', '7701263897', 0, '2006-10-09', 15, 2147483647, 'mateo.rodriguez@email.com', 58, 0, 0, 1, 'Carrera 8 # 13-56'),
(86, 'Isabella', 'Sanchez', '9501862415', 0, '2005-01-30', 17, 2147483647, 'isabella.hernandez@email.com', 41, 0, 0, 2, 'Calle 14 # 19-20'),
(87, 'Lucas', 'Perez', '6603619384', 0, '2009-11-25', 12, 2147483647, 'lucas.perez@email.com', 17, 0, 0, 1, 'Carrera 5 # 7-43'),
(88, 'Valentina', 'Ruiz', '6002791047', 0, '2010-02-15', 11, 2147483647, 'valentina.ruiz@email.com', 12, 0, 0, 2, 'Calle 18 # 22-33'),
(89, 'Alejandro', 'Castro', '9101729083', 0, '2008-05-02', 13, 2147483647, 'alejandro.castro@email.com', 55, 0, 0, 1, 'Carrera 15 # 10-65'),
(90, 'Camila', 'Diaz', '8807860234', 0, '2006-09-07', 15, 2147483647, 'camila.diaz@email.com', 18, 0, 0, 2, 'Calle 22 # 14-56'),
(91, 'Daniel', 'Sanchez', '9902018731', 0, '2004-03-28', 17, 2147483647, 'daniel.sanchez@email.com', 34, 0, 0, 1, 'Carrera 3 # 8-23'),
(92, 'Luis', 'González', '9876543210', 0, '2005-05-23', 16, 2147483647, 'lgonzalez@gmail.com', 23, 0, 0, 1, 'Cra. 23 # 45-67'),
(93, 'Carla', 'Sánchez', '3456789012', 0, '2006-03-12', 15, 2147483647, 'csanchez@hotmail.com', 50, 0, 0, 2, 'Calle 12 # 34-56'),
(94, 'Jorge', 'López', '1234567890', 0, '2007-12-05', 14, 2147483647, 'jlopez@gmail.com', 40, 0, 0, 1, 'Av. 7 # 45-67'),
(95, 'Sheyla', 'Martínez', '4567890123', 0, '2005-07-16', 16, 2147483647, 'amartinez@hotmail.com', 31, 0, 0, 2, 'Cra. 11 # 22-33'),
(96, 'Pablo', 'Pérez', '2345678901', 0, '2006-09-20', 15, 2147483647, 'pperez@gmail.com', 57, 0, 0, 1, 'Cra. 45 # 56-78'),
(97, 'María', 'García', '8901234567', 0, '2007-02-10', 14, 2147483647, 'mgarcia@hotmail.com', 61, 0, 0, 2, 'Calle 8 # 9-10'),
(98, 'Santiago', 'Torres', '5678901234', 0, '2005-11-30', 16, 2147483647, 'storres@gmail.com', 65, 0, 0, 1, 'Av. 10 # 20-30'),
(99, 'Cristina', 'Díaz', '3412567890', 0, '2006-06-15', 15, 2147483647, 'cdiaz@hotmail.com', 38, 0, 0, 2, 'Calle 45 # 56-67'),
(100, 'Juan', 'Gómez', '5678901231', 0, '2007-09-17', 14, 2147483647, 'jgomez@gmail.com', 19, 0, 0, 1, 'Cra. 32 # 43-54'),
(101, 'Laura', 'Fernández', '7890123456', 0, '2005-01-08', 16, 2147483647, 'lfernandez@hotmail.com', 44, 0, 0, 2, 'Av. 11 # 22-33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `idgrado` int(11) DEFAULT NULL,
  `idparalelo` varchar(2) DEFAULT NULL,
  `iddocente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `idgrado`, `idparalelo`, `iddocente`) VALUES
(37, 1, '3', 167),
(45, 4, '1', 164),
(47, 10, '2', 187),
(48, 10, '4', 187);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `es_extranjero` int(11) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `celular` int(11) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `idsexo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `nombres`, `apellidos`, `identificacion`, `es_extranjero`, `direccion`, `fecha_nacimiento`, `celular`, `correo`, `id_rol`, `idsexo`) VALUES
(159, 'Luisa', 'Gómez', '1234567890', 0, 'Calle 7 # 23-11', '1985-04-15', 2147483647, 'luisa.gomez@gmail.com', 0, 2),
(160, 'Andrés', 'Martínez', '2345678901', 0, 'Carrera 21 # 33-45', '1978-12-07', 2147483647, 'andres.martinez@gmail.com', 0, 1),
(161, 'Mariana', 'Álvarez', '3456789012', 0, 'Avenida 15 # 11-09', '1990-05-02', 2147483647, 'mariana.alvarez@hotmail.com', 0, 2),
(162, 'Diego', 'Pérez', '4567890123', 0, 'Calle 43 # 21-33', '1982-09-10', 2147483647, 'diego.perez@yahoo.com', 0, 1),
(163, 'Carolina', 'Ramírez', '5678901234', 0, 'Carrera 10 # 15-20', '1976-06-22', 2147483647, 'carolina.ramirez@gmail.com', 0, 2),
(164, 'Felipe', 'Hernández', '6789012345', 0, 'Avenida 8 # 7-12', '1988-01-14', 2147483647, 'felipe.hernandez@yahoo.com', 0, 1),
(165, 'Laura', 'Suárez', '7890123456', 0, 'Calle 24 # 45-67', '1992-08-23', 2147483647, 'laura.suarez@hotmail.com', 0, 2),
(166, 'Javier', 'García', '8901234567', 0, 'Avenida 11 # 12-15', '1980-11-30', 2147483647, 'javier.garcia@gmail.com', 0, 1),
(167, 'Isabel', 'González', '9012345678', 0, 'Carrera 35 # 56-78', '1975-07-17', 2147483647, 'isabel.gonzalez@yahoo.com', 0, 2),
(168, 'José', 'Rojas', '0123456789', 0, 'Calle 13 # 14-16', '1987-03-29', 2147483647, 'jose.rojas@hotmail.com', 0, 1),
(169, 'María', 'Vélez', '2345678901', 0, 'Avenida 7 # 8-9', '1984-09-12', 2147483647, 'maria.velez@gmail.com', 0, 2),
(170, 'Luisa', 'Vargas', '1567892431', 0, 'Calle 34 #10-10', '1987-06-25', 2147483647, 'lvargas@email.com', 0, 2),
(171, 'Felipe', 'González', '3749201835', 0, 'Carrera 23 #14-23', '1975-09-12', 2147483647, 'fgonzalez@email.com', 0, 1),
(172, 'Carmen', 'Hernández', '8354720169', 0, 'Calle 17 #7-32', '1980-02-03', 2147483647, 'chernandez@email.com', 0, 2),
(173, 'Javier', 'López', '4762946182', 0, 'Carrera 5 #22-03', '1990-11-17', 2147483647, 'jlopez@email.com', 0, 1),
(174, 'Diana', 'Sánchez', '1385923764', 0, 'Calle 47 #11-21', '1978-03-28', 2147483647, 'dsanchez@email.com', 0, 2),
(175, 'Santiago', 'Torres', '5240896234', 0, 'Carrera 10 #7-30', '1985-07-14', 2147483647, 'storres@email.com', 0, 1),
(176, 'Camila', 'Castro', '9918372645', 0, 'Calle 12 #5-12', '1983-01-22', 2147483647, 'ccastro@email.com', 0, 2),
(177, 'Mauricio', 'Ortiz', '6729341853', 0, 'Carrera 8 #12-11', '1976-04-30', 2147483647, 'mortiz@email.com', 0, 1),
(178, 'Laura', 'García', '9124738294', 0, 'Calle 23 #14-24', '1988-09-05', 2147483647, 'lgarcia@email.com', 0, 2),
(179, 'Andrés', 'Rojas', '5274309184', 0, 'Carrera 4 #19-30', '1981-02-20', 2147483647, 'arojas@email.com', 0, 1),
(180, 'Lorena', 'Bautista', '7583921011', 0, 'Calle Luna Calle Sol', '1987-03-15', 2147483647, 'lorena.bautista@example.com', 0, 2),
(181, 'Daniel', 'Barrera', '6824627799', 0, 'Carrera 23 # 45 - 67', '1990-05-22', 2147483647, 'daniel.barrera@example.com', 0, 1),
(182, 'Lucia', 'Estrada', '3048753265', 0, 'Carrera 12 # 8-9', '1985-12-03', 2147483647, 'lucia.estrada@example.com', 0, 2),
(183, 'Miguel', 'Bello', '7345896478', 0, 'Carrera 30 # 40-55', '1991-08-11', 2147483647, 'miguel.bello@example.com', 0, 1),
(184, 'Diana', 'Gomez', '1874352196', 0, 'Carrera 7 # 4-21', '1989-02-20', 2147483647, 'diana.gomez@example.com', 0, 2),
(185, 'Cesar', 'Toro', '7123456890', 0, 'Calle 45 # 23-10', '1992-11-28', 2147483647, 'cesar.toro@example.com', 0, 1),
(186, 'Sara', 'Lopez', '9256781325', 0, 'Carrera 9 # 15-18', '1984-06-14', 2147483647, 'sara.lopez@example.com', 0, 2),
(187, 'Jorge', 'Velasco', '2365874190', 0, 'Calle 67 # 45-32', '1988-01-08', 2147483647, 'jorge.velasco@example.com', 0, 1),
(188, 'Elena', 'Paz', '5069782413', 0, 'Carrera 6 # 12-15', '1993-09-29', 2147483647, 'elena.paz@example.com', 0, 2),
(189, 'Luis', 'Garcia', '6498012375', 0, 'Carrera 22 # 30-45', '1983-04-16', 2147483647, 'luis.garcia@example.com', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `nombre`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id`, `nombre`) VALUES
(1, 'xd'),
(2, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_alumnos`
--

CREATE TABLE `lista_alumnos` (
  `id` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lista_alumnos`
--

INSERT INTO `lista_alumnos` (`id`, `idalumno`, `idcurso`) VALUES
(2, 96, 38),
(3, 88, 38),
(4, 94, 37),
(6, 56, 37),
(7, 89, 45),
(8, 46, 45),
(9, 87, 45),
(10, 89, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_curso`
--

CREATE TABLE `lista_curso` (
  `id` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_materias`
--

CREATE TABLE `lista_materias` (
  `id` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lista_materias`
--

INSERT INTO `lista_materias` (`id`, `idmateria`, `idcurso`) VALUES
(18, 12, 33),
(19, 10, 32),
(20, 10, 32),
(22, 10, 32),
(23, 12, 32),
(24, 7, 32),
(36, 69, 38),
(39, 18, 38),
(41, 68, 37),
(42, 64, 37),
(43, 59, 37),
(44, 68, 45),
(45, 67, 45),
(46, 17, 45),
(47, 15, 45),
(48, 65, 38),
(49, 62, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `iddocente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `codigo`, `iddocente`) VALUES
(13, 'Matemáticas', 'MAT101', 172),
(14, 'Física', 'FIS102', 167),
(15, 'Química', 'QUI103', 161),
(16, 'Historia', 'HIS104', 175),
(17, 'Geografía', 'GEO105', 173),
(18, 'Biología', 'BIO106', 179),
(19, 'Literatura', 'LIT107', 160),
(20, 'Inglés', 'ING108', 164),
(21, 'Educación física', 'EDF109', 180),
(22, 'Arte', 'ART110', 170),
(23, 'Música', 'MUS111', 179),
(24, 'Programación', 'PRO112', 176),
(25, 'Redes', 'RED113', 181),
(26, 'Sistemas operativos', 'SIS114', 187),
(27, 'Bases de datos', 'BD115', 162),
(28, 'Álgebra', 'ALG101', 168),
(29, 'Cálculo', 'CAL201', 183),
(30, 'Historia', 'HIS105', 178),
(31, 'Biología', 'BIO102', 161),
(32, 'Física', 'FIS103', 184),
(33, 'Literatura', 'LIT202', 171),
(34, 'Inglés', 'ING101', 175),
(35, 'Programación', 'PRO301', 176),
(36, 'Química', 'QUI201', 165),
(37, 'Geografía', 'GEO102', 180),
(38, 'Filosofía', 'FIL205', 166),
(39, 'Arte', 'ART103', 179),
(40, 'Economía', 'ECO201', 187),
(41, 'Derecho', 'DER302', 163),
(42, 'Psicología', 'PSI101', 181),
(43, 'Ciencias Naturales', 'CNAT001', 167),
(44, 'Matemáticas', 'MATE002', 159),
(45, 'Historia', 'HIST003', 184),
(46, 'Educación Física', 'EFIS004', 171),
(47, 'Geografía', 'GEOG005', 177),
(48, 'Inglés', 'INGL006', 166),
(49, 'Arte', 'ARTE007', 162),
(50, 'Lengua y Literatura', 'LENG008', 186),
(51, 'Música', 'MUSI009', 179),
(52, 'Civismo', 'CIVI010', 172),
(53, 'Programación', 'PROG011', 163),
(54, 'Dibujo Técnico', 'DIBU012', 181),
(55, 'Química', 'QUIM013', 175),
(56, 'Física', 'FISI014', 180),
(57, 'Biología', 'BIO015', 168),
(58, 'Matemáticas', 'MAT001', 164),
(59, 'Historia', 'HIS001', 163),
(60, 'Geografía', 'GEO001', 166),
(61, 'Física', 'FIS001', 167),
(62, 'Biología', 'BIO001', 182),
(63, 'Química', 'QUI001', 173),
(64, 'Lenguaje', 'LEN001', 171),
(65, 'Inglés', 'ING001', 185),
(66, 'Artes', 'ART001', 159),
(67, 'Educación Física', 'EDF001', 178),
(68, 'Informática', 'INF001', 162),
(69, 'Economía', 'ECO001', 176),
(70, 'Filosofía', 'FIL001', 184),
(71, 'Psicología', 'PSI001', 159),
(72, 'Sociología', 'SOC001', 187);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paralelo`
--

CREATE TABLE `paralelo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paralelo`
--

INSERT INTO `paralelo` (`id`, `nombre`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `es_extranjero` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `celular` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `idsexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`id`, `nombres`, `apellidos`, `identificacion`, `es_extranjero`, `direccion`, `fecha_nacimiento`, `celular`, `correo`, `idsexo`) VALUES
(6, 'Sofía', 'Martínez', '7534682901', 0, 'Calle 17 # 23-45', '1991-07-12', '3101234567', 'sofia.martinez@example.com', 2),
(7, 'Sebastián', 'García', '8529367410', 0, 'Carrera 18 # 34-56', '1986-02-19', '3112345678', 'sebastian.garcia@example.com', 1),
(8, 'Carolina', 'Vargas', '9435781246', 0, 'Avenida 5 # 12-34', '1993-05-30', '3123456789', 'carolina.vargas@example.com', 2),
(9, 'Camilo alvarez', 'Pérez', '1364857290', 0, 'Calle 24 # 15-67', '1990-01-01', '3134567890', 'camilo.perez@example.com', 1),
(10, 'Valentina', 'Castro', '7695213840', 0, 'Carrera 8 # 29-54', '1988-08-08', '3145678901', 'valentina.castro@example.com', 2),
(11, 'Juan', 'Gutiérrez', '6582391740', 0, 'Calle 56 # 7-89', '1995-10-25', '3156789012', 'juan.gutierrez@example.com', 1),
(12, 'Daniela', 'Herrera', '3284910657', 0, 'Avenida 12 # 8-23', '1992-03-16', '3167890123', 'daniela.herrera@example.com', 2),
(13, 'Pedro', 'Díaz', '9256178430', 0, 'Carrera 7 # 13-21', '1987-12-10', '3178901234', 'pedro.diaz@example.com', 1),
(14, 'María', 'López', '6548973210', 0, 'Calle 33 # 12-43', '1993-02-14', '3189012345', 'maria.lopez@example.com', 2),
(15, 'Andrés', 'Ramírez', '1674938502', 0, 'Carrera 23 # 9-87', '1994-09-23', '3201234567', 'andres.ramirez@example.com', 1),
(16, 'Laura', 'Gómez', '8751392460', 0, 'Avenida 8 # 19-42', '1989-07-31', '3212345678', 'laura.gomez@example.com', 2),
(17, 'Felipe', 'Castillo', '6943827501', 0, 'Calle 45 # 21-43', '1991-04-28', '3223456789', 'felipe.castillo@example.com', 1),
(18, 'Ana', 'García', '0123456789', 0, 'Calle 1, Ciudad 1', '2000-05-12', '555-1234', 'ana.garcia@example.com', 2),
(19, 'Juan', 'López', '2345678901', 0, 'Calle 2, Ciudad 2', '1995-10-22', '555-5678', 'juan.lopez@example.com', 1),
(20, 'María', 'Martínez', '3456789012', 0, 'Calle 3, Ciudad 3', '1990-08-08', '555-9012', 'maria.martinez@example.com', 2),
(21, 'Pedro', 'González', '4567890123', 0, 'Calle 4, Ciudad 4', '1985-04-15', '555-3456', 'pedro.gonzalez@example.com', 1),
(22, 'Laura', 'Hernández', '5678901234', 0, 'Calle 5, Ciudad 5', '1999-01-03', '555-7890', 'laura.hernandez@example.com', 2),
(23, 'Luis', 'Pérez', '6789012345', 0, 'Calle 6, Ciudad 6', '2002-11-11', '555-2345', 'luis.perez@example.com', 1),
(24, 'Carla', 'Ramírez', '7890123456', 0, 'Calle 7, Ciudad 7', '1988-06-21', '555-6789', 'carla.ramirez@example.com', 2),
(25, 'Mario', 'Díaz', '8901234567', 0, 'Calle 8, Ciudad 8', '1996-09-29', '555-0123', 'mario.diaz@example.com', 1),
(26, 'Sofía', 'Castro', '9012345678', 0, 'Calle 9, Ciudad 9', '1992-12-24', '555-4567', 'sofia.castro@example.com', 2),
(27, 'Jorge', 'Sánchez', '1234567890', 0, 'Calle 10, Ciudad 10', '1980-03-07', '555-8901', 'jorge.sanchez@example.com', 1),
(28, 'Gabriela', 'Fernández', '2345678901', 0, 'Calle 11, Ciudad 11', '1997-07-13', '555-1234', 'gabriela.fernandez@example.com', 2),
(29, 'Roberto', 'Gómez', '3456789012', 0, 'Calle 12, Ciudad 12', '1982-05-06', '555-5678', 'roberto.gomez@example.com', 1),
(30, 'Carolina', 'Paz', '4567890123', 0, 'Calle 13, Ciudad 13', '1991-12-10', '555-9012', 'carolina.paz@example.com', 2),
(31, 'Fernando', 'Chávez', '5678901234', 0, 'Calle 14, Ciudad 14', '1994-02-19', '555-3456', 'fernando.chavez@example.com', 1),
(32, 'Marta', 'Vega', '6789012345', 0, 'Calle 15, Ciudad 15', '1987-11-28', '555-7890', 'marta.vega@example.com', 2),
(33, 'Alberto', 'Alonso', '7890123456', 0, 'Calle 16, Ciudad 16', '1998-08-04', '555-2345', 'alberto.alonso@example.com', 1),
(34, 'Silvia', 'Ortiz', '8901234567', 0, 'Calle 17, Ciudad 17', '1993-06-17', '555-6789', 'silvia.ortiz@example.com', 2),
(35, 'Ricardo', 'Ruiz', '9012345678', 0, 'Calle 18, Ciudad 18', '1986-04-30', '555-0123', 'ricardo.ruiz@example.com', 1),
(36, 'Andrea', 'Ramos', '1234567890', 0, 'Calle 19, Ciudad 19', '2001-09-08', '555-4567', 'andrea.ramos@example.com', 2),
(37, 'Pedro', 'Santos', '2345678901', 0, 'Calle 20, Ciudad 20', '1979-01-25', '555-8901', 'pedro.santos@example.com', 1),
(38, 'Luisa', 'García', '3456789012', 0, 'Calle 21, Ciudad 21', '1992-09-30', '555-1234', 'luisa.garcia@example.com', 2),
(39, 'Jorge', 'Soto', '4567890123', 0, 'Calle 22, Ciudad 22', '1980-03-14', '555-5678', 'jorge.soto@example.com', 1),
(40, 'María', 'Mendoza', '5678901234', 0, 'Calle 23, Ciudad 23', '1999-05-22', '555-9012', 'maria.mendoza@example.com', 2),
(41, 'Pedro', 'Velasco', '6789012345', 0, 'Calle 24, Ciudad 24', '1985-12-01', '555-3456', 'pedro.velasco@example.com', 1),
(42, 'Carmen', 'Jiménez', '7890123456', 0, 'Calle 25, Ciudad 25', '1991-08-17', '555-7890', 'carmen.jimenez@example.com', 2),
(43, 'Rafael', 'Guzmán', '8901234567', 0, 'Calle 26, Ciudad 26', '1996-11-11', '555-2345', 'rafael.guzman@example.com', 1),
(44, 'Ana', 'López Davis', '9012345678', 0, 'Calle 27, Ciudad 27', '1988-02-07', '555-6789', 'ana.lopez@example.com', 2),
(45, 'Juan', 'Hernández', '1234567890', 0, 'Calle 28, Ciudad 28', '2002-04-12', '555-0123', 'juan.hernandez@example.com', 1),
(46, 'Esther', 'Castillo', '2345678901', 0, 'Calle 29, Ciudad 29', '1977-10-28', '555-4567', 'esther.castillo@example.com', 2),
(47, 'Ricardo', 'Pérez', '3456789012', 0, 'Calle 30, Ciudad 30', '1983-07-02', '555-8901', 'ricardo.perez@example.com', 1),
(48, 'Paola', 'Ortiz', '4567890123', 0, 'Calle 31, Ciudad 31', '1990-01-12', '555-1234', 'paola.ortiz@example.com', 2),
(49, 'Andrés', 'Gómez', '5678901234', 0, 'Calle 32, Ciudad 32', '1982-06-19', '555-5678', 'andres.gomez@example.com', 1),
(50, 'Valeria', 'Herrera', '6789012345', 0, 'Calle 33, Ciudad 33', '1997-09-25', '555-9012', 'valeria.herrera@example.com', 2),
(51, 'Fabián', 'Ramírez', '7890123456', 0, 'Calle 34, Ciudad 34', '1984-05-07', '555-3456', 'fabian.ramirez@example.com', 1),
(52, 'Catalina', 'Luna', '8901234567', 0, 'Calle 35, Ciudad 35', '2001-02-28', '555-7890', 'catalina.luna@example.com', 2),
(53, 'Julio', 'Moreno', '9012345678', 0, 'Calle 36, Ciudad 36', '1979-12-22', '555-2345', 'julio.moreno@example.com', 1),
(54, 'Gabriela', 'Castro', '1234567890', 0, 'Calle 37, Ciudad 37', '1995-03-11', '555-6789', 'gabriela.castro@example.com', 2),
(55, 'Mario', 'Fernández', '2345678901', 0, 'Calle 38, Ciudad 38', '1987-11-06', '555-0123', 'mario.fernandez@example.com', 1),
(56, 'Elena', 'Sánchez', '3456789012', 0, 'Calle 39, Ciudad 39', '1993-04-18', '555-4567', 'elena.sanchez@example.com', 2),
(57, 'Carlos', 'Lara', '4567890123', 0, 'Calle 40, Ciudad 40', '1981-08-15', '555-8901', 'carlos.lara@example.com', 1),
(58, 'Sofía', 'Vásquez', '5678901234', 0, 'Calle 41, Ciudad 41', '1999-08-07', '555-1234', 'sofia.vasquez@example.com', 2),
(59, 'Javier', 'Hernández', '6789012345', 0, 'Calle 42, Ciudad 42', '1977-02-14', '555-5678', 'javier.hernandez@example.com', 1),
(60, 'Diana', 'García', '7890123456', 0, 'Calle 43, Ciudad 43', '1989-11-19', '555-9012', 'diana.garcia@example.com', 2),
(61, 'Hugo', 'Vargas', '8901234567', 0, 'Calle 44, Ciudad 44', '1992-05-01', '555-3456', 'hugo.vargas@example.com', 1),
(62, 'Florencia', 'Torres', '9012345678', 0, 'Calle 45, Ciudad 45', '1998-12-18', '555-7890', 'florencia.torres@example.com', 2),
(63, 'Daniel', 'Rojas', '1234567890', 0, 'Calle 46, Ciudad 46', '1985-07-30', '555-2345', 'daniel.rojas@example.com', 1),
(64, 'Mariana', 'Bustamante', '2345678901', 0, 'Calle 47, Ciudad 47', '1996-04-25', '555-6789', 'mariana.bustamante@example.com', 2),
(65, 'Juan', 'Pérez', '3456789012', 0, 'Calle 48, Ciudad 48', '1980-09-11', '555-0123', 'juan.perez@example.com', 1),
(66, 'Camila', 'Guzmán', '4567890123', 0, 'Calle 49, Ciudad 49', '1997-11-03', '555-4567', 'camila.guzman@example.com', 2),
(67, 'Pablo', 'Góngora', '5678901234', 0, 'Calle 50, Ciudad 50', '1978-06-08', '555-8901', 'pablo.gongora@example.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Alumno'),
(2, 'Representante'),
(4, 'Familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Amongus'),
(4, 'Todos los dias'),
(5, 'Virgen');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_alumnos`
--
ALTER TABLE `lista_alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_curso`
--
ALTER TABLE `lista_curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_materias`
--
ALTER TABLE `lista_materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paralelo`
--
ALTER TABLE `paralelo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lista_alumnos`
--
ALTER TABLE `lista_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lista_curso`
--
ALTER TABLE `lista_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_materias`
--
ALTER TABLE `lista_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `paralelo`
--
ALTER TABLE `paralelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
