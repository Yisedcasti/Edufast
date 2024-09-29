-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2024 a las 02:12:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `edufast`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `create_actividad` (IN `p_actividad` VARCHAR(45), IN `p_descripcion_actividad` VARCHAR(100), IN `p_codigo_logro` INT)   BEGIN
    INSERT INTO actividad (actividad, descripcion_actividad, codigo_logro)
    VALUES (p_actividad, p_descripcion_actividad, p_codigo_logro);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_asignacion` (IN `p_registro_num_doc` INT, IN `p_regitro_rol_id_rol` INT, IN `p_registo_jornada_id_jornada` INT, IN `p_grado_id_grado` INT, IN `p_grado_jornada_id_jornada` INT, IN `p_curso_id_curso` INT, IN `p_curso_gradoo_id_grado` INT, IN `p_curso_grado_jornada_id_jornada` INT)   BEGIN
    INSERT INTO asignacion (
        registro_num_doc, 
        regitro_rol_id_rol, 
        registo_jornada_id_jornada, 
        grado_id_grado, 
        grado_jornada_id_jornada, 
        curso_id_curso, 
        curso_gradoo_id_grado, 
        curso_grado_jornada_id_jornada
    ) 
    VALUES (
        p_registro_num_doc, 
        p_regitro_rol_id_rol, 
        p_registo_jornada_id_jornada, 
        p_grado_id_grado, 
        p_grado_jornada_id_jornada, 
        p_curso_id_curso, 
        p_curso_gradoo_id_grado, 
        p_curso_grado_jornada_id_jornada
    );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_asistencia` (IN `p_fecha_asistencia` DATE, IN `p_asistencia` VARCHAR(45), IN `p_num_doc` INT, IN `p_rol_id` INT)   BEGIN
    INSERT INTO asistencia (fecha_asistencia, asistencia, num_doc, rol_id)
    VALUES (p_fecha_asistencia, p_asistencia, p_num_doc, p_rol_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_curso` (IN `p_curso` VARCHAR(45), IN `p_grado_id` INT, IN `p_jornada_id` INT, IN `p_asistencia_id` INT)   BEGIN
    INSERT INTO curso (curso, grado_id, jornada_id, asistencia_id)
    VALUES (p_curso, p_grado_id, p_jornada_id, p_asistencia_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_grado` (IN `p_nivel_educativo` VARCHAR(45), IN `p_grado` VARCHAR(45), IN `p_jornada_id` INT)   BEGIN
    INSERT INTO grado (nivel_educativo, grado, jornada_id)
    VALUES (p_nivel_educativo, p_grado, p_jornada_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_jornada` (IN `p_jornada` VARCHAR(45), IN `p_hora_inicio` TIME, IN `p_hora_final` TIME)   BEGIN
    INSERT INTO jornada (jornada, hora_inicio, hora_final)
    VALUES (p_jornada, p_hora_inicio, p_hora_final);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_logro` (IN `p_logro` VARCHAR(45), IN `p_descripcion_logro` VARCHAR(100), IN `p_id_materia` INT)   BEGIN
    INSERT INTO logro (logro, descripcion_logro,id_materia)
    VALUES (p_logro, p_descripcion_logro,p_id_materia);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_materia` (IN `p_materia` VARCHAR(45))   BEGIN
    INSERT INTO materia (materia)
    VALUES (p_materia);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_materia_curso` (IN `p_id_materia` INT, IN `p_id_curso` INT)   BEGIN
    INSERT INTO materia_curso (id_materia, id_curso)
    VALUES (p_id_materia, p_id_curso);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_materia_registro` (IN `p_id_materia` INT, IN `p_num_doc` INT, IN `p_id_rol` INT, IN `p_id_jornada` INT)   BEGIN
    INSERT INTO materia_registro (id_materia, num_doc, id_rol, id_jornada)
    VALUES (p_id_materia, p_num_doc, p_id_rol, p_id_jornada);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_nota` (IN `p_fecha_nota` DATE, IN `p_nota` VARCHAR(2), IN `p_num_doc` INT, IN `p_id_rol` INT, IN `p_id_jornada` INT, IN `p_codigo_logro` INT, IN `p_id_actividad` INT)   BEGIN
    INSERT INTO nota (fecha_nota, nota, num_doc, id_rol, id_jornada, codigo_logro, id_actividad)
    VALUES (p_fecha_nota, p_nota, p_num_doc, p_id_rol, p_id_jornada, p_codigo_logro, p_id_actividad);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_publicacion` (IN `p_imagen` LONGTEXT, IN `p_evento` VARCHAR(50), IN `p_fecha_evento` DATE, IN `p_informacion` VARCHAR(200))   BEGIN
    INSERT INTO publicacion (imagen, evento, fecha_evento, informacion)
    VALUES (p_imagen, p_evento, p_fecha_evento, p_informacion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_publicacion_registro` (IN `p_id_publicacion` INT, IN `p_num_doc` INT)   BEGIN
    INSERT INTO publicaion_registro (id_publicacion, num_doc)
    VALUES (p_id_publicacion, p_num_doc);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_registro` (IN `p_num_doc` INT, IN `p_nombre` VARCHAR(45), IN `p_apellido` VARCHAR(45), IN `p_tipo_doc` VARCHAR(15), IN `p_celular` VARCHAR(45), IN `p_correo` VARCHAR(45), IN `p_usuario` VARCHAR(45), IN `p_contraseña` VARCHAR(45), IN `p_rol_id` INT, IN `p_jornada_id` INT)   BEGIN
    INSERT INTO registro (num_doc, nombre, apellido, tipo_doc, celular, correo, usuario, contraseña, rol_id, jornada_id)
    VALUES (p_num_doc, p_nombre, p_apellido, p_tipo_doc, p_celular, p_correo, p_usuario, p_contraseña, p_rol_id, p_jornada_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_rol` (IN `p_rol` VARCHAR(45))   BEGIN
    INSERT INTO rol (rol)
    VALUES (p_rol);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_actividad` (IN `p_id_actividad` INT)   BEGIN
    DELETE FROM actividad WHERE id_actividad = p_id_actividad;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_asignacion` (IN `p_id_asignacion` INT)   BEGIN
    DELETE FROM asignacion WHERE id_asignacion = p_id_asignacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_asistencia` (IN `p_id_asistencia` INT)   BEGIN
    DELETE FROM asistencia WHERE id_asistencia = p_id_asistencia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_curso` (IN `p_id_curso` INT)   BEGIN
    DELETE FROM curso WHERE id_curso = p_id_curso;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_grado` (IN `p_id_grado` INT)   BEGIN
    DELETE FROM grado WHERE id_grado = p_id_grado;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_jornada` (IN `p_id_jornada` INT)   BEGIN
    DELETE FROM jornada WHERE id_jornada = p_id_jornada;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_logro` (IN `p_codigo_logro` INT)   BEGIN
    DELETE FROM logro WHERE codigo_logro = p_codigo_logro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_materia` (IN `p_id_materia` INT)   BEGIN
    DELETE FROM materia WHERE id_materia = p_id_materia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_materia_curso` (IN `p_id_materia` INT, IN `p_id_curso` INT)   BEGIN
    DELETE FROM materia_curso
    WHERE id_materia = p_id_materia AND id_curso = p_id_curso;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_materia_registro` (IN `p_id_materia` INT, IN `p_num_doc` INT, IN `p_id_rol` INT, IN `p_id_jornada` INT)   BEGIN
    DELETE FROM materia_registro
    WHERE id_materia = p_id_materia AND num_doc = p_num_doc AND id_rol = p_id_rol AND id_jornada = p_id_jornada;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_nota` (IN `p_id_nota` INT)   BEGIN
    DELETE FROM nota WHERE id_nota = p_id_nota;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_publicacion` (IN `p_id_publicacion` INT)   BEGIN
    DELETE FROM publicacion WHERE id_publicacion = p_id_publicacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_publicacion_registro` (IN `p_id_publicacion` INT, IN `p_num_doc` INT)   BEGIN
    DELETE FROM publicaion_registro 
    WHERE id_publicacion = p_id_publicacion AND num_doc = p_num_doc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_registro` (IN `p_num_doc` INT)   BEGIN
    DELETE FROM registro WHERE num_doc = p_num_doc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_rol` (IN `p_id_rol` INT)   BEGIN
    DELETE FROM rol WHERE id_rol = p_id_rol;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_actividad` (IN `p_id_actividad` INT, IN `p_actividad` VARCHAR(45), IN `p_descripcion_actividad` VARCHAR(100), IN `p_codigo_logro` INT)   BEGIN
    UPDATE actividad
    SET actividad = p_actividad, descripcion_actividad = p_descripcion_actividad, codigo_logro = p_codigo_logro
    WHERE id_actividad = p_id_actividad;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_asignacion` (IN `p_id_asignacion` INT, IN `p_registro_num_doc` INT, IN `p_regitro_rol_id_rol` INT, IN `p_registo_jornada_id_jornada` INT, IN `p_grado_id_grado` INT, IN `p_grado_jornada_id_jornada` INT, IN `p_curso_id_curso` INT, IN `p_curso_gradoo_id_grado` INT, IN `p_curso_grado_jornada_id_jornada` INT)   BEGIN
    UPDATE asignacion 
    SET 
        registro_num_doc = p_registro_num_doc, 
        regitro_rol_id_rol = p_regitro_rol_id_rol, 
        registo_jornada_id_jornada = p_registo_jornada_id_jornada, 
        grado_id_grado = p_grado_id_grado, 
        grado_jornada_id_jornada = p_grado_jornada_id_jornada, 
        curso_id_curso = p_curso_id_curso, 
        curso_gradoo_id_grado = p_curso_gradoo_id_grado, 
        curso_grado_jornada_id_jornada = p_curso_grado_jornada_id_jornada
    WHERE id_asignacion = p_id_asignacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_asistencia` (IN `p_id_asistencia` INT, IN `p_fecha_asistencia` DATE, IN `p_asistencia` VARCHAR(45), IN `p_num_doc` INT, IN `p_rol_id` INT)   BEGIN
    UPDATE asistencia
    SET fecha_asistencia = p_fecha_asistencia, asistencia = p_asistencia, num_doc = p_num_doc, rol_id = p_rol_id
    WHERE id_asistencia = p_id_asistencia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_curso` (IN `p_id_curso` INT, IN `p_curso` VARCHAR(45), IN `p_grado_id` INT, IN `p_jornada_id` INT, IN `p_asistencia_id` INT)   BEGIN
    UPDATE curso
    SET curso = p_curso, grado_id = p_grado_id, jornada_id = p_jornada_id, asistencia_id = p_asistencia_id
    WHERE id_curso = p_id_curso;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_grado` (IN `p_id_grado` INT, IN `p_nivel_educativo` VARCHAR(45), IN `p_grado` VARCHAR(45), IN `p_jornada_id` INT)   BEGIN
    UPDATE grado
    SET nivel_educativo = p_nivel_educativo, grado = p_grado, jornada_id = p_jornada_id
    WHERE id_grado = p_id_grado;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_jornada` (IN `p_id_jornada` INT, IN `p_jornada` VARCHAR(45), IN `p_hora_inicio` TIME, IN `p_hora_final` TIME)   BEGIN
    UPDATE jornada
    SET jornada = p_jornada, hora_inicio = p_hora_inicio, hora_final = p_hora_final
    WHERE id_jornada = p_id_jornada;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_logro` (IN `p_codigo_logro` INT, IN `p_logro` VARCHAR(45), IN `p_descripcion_logro` VARCHAR(100), IN `p_id_materia` INT)   BEGIN
    UPDATE logro
    SET logro = p_logro, descripcion_logro = p_descripcion_logro, id_materia = p_id_materia
    WHERE codigo_logro = p_codigo_logro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_materia` (IN `p_id_materia` INT, IN `p_materia` VARCHAR(45))   BEGIN
    UPDATE materia
    SET materia = p_materia
    WHERE id_materia = p_id_materia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_materia_curso` (IN `p_id_materia` INT, IN `p_id_curso` INT, IN `p_new_id_materia` INT, IN `p_new_id_curso` INT)   BEGIN
    UPDATE materia_curso
    SET id_materia = p_new_id_materia, id_curso = p_new_id_curso
    WHERE id_materia = p_id_materia AND id_curso = p_id_curso;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_nota` (IN `p_id_nota` INT, IN `p_fecha_nota` DATE, IN `p_nota` VARCHAR(2), IN `p_num_doc` INT, IN `p_id_rol` INT, IN `p_id_jornada` INT, IN `p_codigo_logro` INT, IN `p_id_actividad` INT)   BEGIN
    UPDATE nota
    SET fecha_nota = p_fecha_nota, nota = p_nota, num_doc = p_num_doc, id_rol = p_id_rol, id_jornada = p_id_jornada, codigo_logro = p_codigo_logro, id_actividad = p_id_actividad
    WHERE id_nota = p_id_nota;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_publicacion` (IN `p_id_publicacion` INT, IN `p_imagen` LONGTEXT, IN `p_evento` VARCHAR(50), IN `p_fecha_evento` DATE, IN `p_informacion` VARCHAR(200))   BEGIN
    UPDATE publicacion
    SET imagen = p_imagen, evento = p_evento, fecha_evento = p_fecha_evento, informacion = p_informacion
    WHERE id_publicacion = p_id_publicacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_publicacion_registro` (IN `p_id_publicacion` INT, IN `p_num_doc` INT, IN `p_new_id_publicacion` INT, IN `p_new_num_doc` INT)   BEGIN
    UPDATE publicaion_registro
    SET id_publicacion = p_new_id_publicacion, num_doc = p_new_num_doc
    WHERE id_publicacion = p_id_publicacion AND num_doc = p_num_doc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_registro` (IN `p_num_doc` INT, IN `p_nombre` VARCHAR(45), IN `p_apellido` VARCHAR(45), IN `p_tipo_doc` VARCHAR(15), IN `p_celular` VARCHAR(45), IN `p_correo` VARCHAR(45), IN `p_usuario` VARCHAR(45), IN `p_contraseña` VARCHAR(45), IN `p_rol_id` INT, IN `p_jornada_id` INT)   BEGIN
    UPDATE registro
    SET nombre = p_nombre, apellido = p_apellido, tipo_doc = p_tipo_doc, celular = p_celular, correo = p_correo, usuario = p_usuario, contraseña = p_contraseña, rol_id = p_rol_id, jornada_id = p_jornada_id
    WHERE num_doc = p_num_doc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_rol` (IN `p_id_rol` INT, IN `p_rol` VARCHAR(45))   BEGIN
    UPDATE rol
    SET rol = p_rol
    WHERE id_rol = p_id_rol;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_actividad` ()   BEGIN
    SELECT * FROM actividad;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_asignacion` ()   BEGIN
    SELECT * FROM asignacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_asistencia` ()   BEGIN
    SELECT * FROM asistencia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_curso` ()   BEGIN
    SELECT * FROM curso;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_grado` ()   BEGIN
    SELECT * FROM grado;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_jornada` ()   BEGIN
    SELECT * FROM jornada;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_logro` ()   BEGIN
    SELECT * FROM logro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_materia` ()   BEGIN
    SELECT * FROM materia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_materia_curso` ()   BEGIN
    SELECT * FROM materia_curso;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_nota` ()   BEGIN
    SELECT * FROM nota;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_publicacion` ()   BEGIN
    SELECT * FROM publicacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_publicacion_registro` ()   BEGIN
    SELECT * FROM publicaion_registro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_registro` ()   BEGIN
    SELECT * FROM registro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_rol` ()   BEGIN
    SELECT * FROM rol;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `nom_actividad` varchar(45) NOT NULL,
  `descrip_actividad` varchar(100) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `logro_Codigo_logro` int(11) NOT NULL,
  `logro_materia_id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `nom_actividad`, `descrip_actividad`, `fecha_entrega`, `logro_Codigo_logro`, `logro_materia_id_materia`) VALUES
(4, 'Sql', 'Cree una base de datos con dos tablas las cuales tengan una relaciòn de muchos a uno ', '2024-09-26', 8763, 1),
(5, ' php', 'Crear un archivo el cual mande los datos cuando se registras a otra pagina donde se van a mostrar', '2024-09-12', 8763, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL,
  `registro_num_doc` int(11) NOT NULL,
  `registro_rol_id_rol` int(11) NOT NULL,
  `registo_jornada_id_jornada` int(11) NOT NULL,
  `curso_id_curso` int(11) NOT NULL,
  `curso_grado_id_grado` int(11) NOT NULL,
  `curso_grado_jornada_id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `asistencia` varchar(45) NOT NULL,
  `registro_num_doc` int(11) NOT NULL,
  `registro_rol_id_rol` int(11) NOT NULL,
  `registro_jornada_id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `grado_id_grado` int(11) NOT NULL,
  `grado_jornada_id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL,
  `nivel_educativo` varchar(45) NOT NULL,
  `grado` varchar(45) NOT NULL,
  `jornada_id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `nivel_educativo`, `grado`, `jornada_id_jornada`) VALUES
(24, 'Bachillerato', '6°', 1),
(25, 'Bachillerato', '7°', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int(11) NOT NULL,
  `jornada` varchar(45) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `jornada`, `hora_inicio`, `hora_final`) VALUES
(1, 'Tarde', '07:30:00', '11:50:00'),
(6, 'Mañana', '06:00:00', '11:50:00'),
(7, 'Noche', '18:20:00', '22:22:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

CREATE TABLE `logro` (
  `codigo_logro` int(11) NOT NULL,
  `nombre_logro` varchar(45) NOT NULL,
  `descrip_logro` varchar(100) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logro`
--

INSERT INTO `logro` (`codigo_logro`, `nombre_logro`, `descrip_logro`, `id_materia`) VALUES
(8763, 'analisis', 'analizar las bases de datos', 1),
(8764, 'PHP', 'Analizar y saber como hacer php', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `materia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `materia`) VALUES
(1, 'Español');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_curso`
--

CREATE TABLE `materia_curso` (
  `id_materia` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_registro`
--

CREATE TABLE `materia_registro` (
  `id_materia` int(11) NOT NULL,
  `num_doc` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `fecha_nota` date NOT NULL,
  `nota` varchar(2) NOT NULL,
  `registro_num_doc` int(11) NOT NULL,
  `registro_rol_id_rol` int(11) NOT NULL,
  `registro_jornada_id_jornada` int(11) NOT NULL,
  `actividades_id_actividades` int(11) NOT NULL,
  `actividades_logro_Codigo_logro` int(11) NOT NULL,
  `actividades_logro_materia_id_materias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `imagen` longtext NOT NULL,
  `evento` varchar(50) NOT NULL,
  `fecha_evento` date NOT NULL,
  `informacion` varchar(200) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `escritoPor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaion_registro`
--

CREATE TABLE `publicaion_registro` (
  `num_doc` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `num_doc` int(11) NOT NULL,
  `tipo_doc` varchar(15) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`num_doc`, `tipo_doc`, `imagen`, `celular`, `nombre`, `apellido`, `correo`, `usuario`, `contraseña`, `id_rol`, `id_jornada`) VALUES
(109876542, 'TI', '', '3213675466', 'yised', 'castiblanco', 'alex@gmail.com', 'yised', '$2y$10$0QKOjgHeo2ssFK2uYvRzieMv.qdUIB6cMJSpVT', 2, 1),
(123456789, 'TI', '', '3213456788', 'Alan', 'Osuna', 'alex@gmail.com', 'profe123', '$2y$10$0Kc0JrFtrpmUMB8TrNsGxeZpiGcDfidA.GrsqR', 3, 1),
(1012897654, 'TI', '', '3213675466', 'cristiam', 'Cadena', 'cristiam@gmail.com', 'cris', '$2y$10$ww/WABMYLG1mkAM2pVs99.S8NM4c4G4NSebRT4', 4, 1),
(2147483647, 'TI', '', '3213675466', 'Alex', 'Osuna', 'alex@gmail.com', 'AlexOsuna', '$2y$10$lJLYD538jpeN3dIzCFBySurn/5j9Q2cyVIstEo', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Admin'),
(2, 'Coordinador'),
(3, 'Profesor'),
(4, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_actividad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_actividad` (
`id_actividad` int(11)
,`nom_actividad` varchar(45)
,`descrip_actividad` varchar(100)
,`fecha_entrega` date
,`logro_Codigo_logro` int(11)
,`logro_materia_id_materia` int(11)
);

-- --------------------------------------------------------


--
-- Estructura Stand-in para la vista `view_asistencia`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_asistencia` (
`id_asistencia` int(11)
,`fecha_asistencia` date
,`asistencia` varchar(45)
,`registro_num_doc` int(11)
,`registro_rol_id_rol` int(11)
,`registro_jornada_id_jornada` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_curso`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_curso` (
`id_curso` int(11)
,`curso` varchar(45)
,`grado_id_grado` int(11)
,`grado_jornada_id_jornada` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_grado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_grado` (
`id_grado` int(11)
,`nivel_educativo` varchar(45)
,`grado` varchar(45)
,`jornada_id_jornada` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_jornada`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_jornada` (
`id_jornada` int(11)
,`jornada` varchar(45)
,`hora_inicio` time
,`hora_final` time
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_logro`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_logro` (
`codigo_logro` int(11)
,`nombre_logro` varchar(45)
,`descrip_logro` varchar(100)
,`id_materia` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_materia`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_materia` (
`id_materia` int(11)
,`materia` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_materia_curso`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_materia_curso` (
`id_materia` int(11)
,`id_curso` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_materia_registro`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_materia_registro` (
`id_materia` int(11)
,`num_doc` int(11)
,`id_rol` int(11)
,`id_jornada` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_nota`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_nota` (
`id_nota` int(11)
,`fecha_nota` date
,`nota` varchar(2)
,`registro_num_doc` int(11)
,`registro_rol_id_rol` int(11)
,`registro_jornada_id_jornada` int(11)
,`actividades_id_actividades` int(11)
,`actividades_logro_Codigo_logro` int(11)
,`actividades_logro_materia_id_materias` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_publicacion`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_publicacion` (
`id_publicacion` int(11)
,`imagen` longtext
,`evento` varchar(50)
,`fecha_evento` date
,`informacion` varchar(200)
,`escritoPor` varchar(200)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_publicaion_registro`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_publicaion_registro` (
`id_publicacion` int(11)
,`num_doc` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_registro`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_registro` (
`num_doc` int(11)
,`tipo_doc` varchar(15)
,`imagen` varchar(1000)
,`celular` varchar(45)
,`nombre` varchar(45)
,`apellido` varchar(45)
,`correo` varchar(45)
,`usuario` varchar(45)
,`id_rol` int(11)
,`id_jornada` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_rol`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_rol` (
`id_rol` int(11)
,`rol` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `view_actividad`
--
DROP TABLE IF EXISTS `view_actividad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_actividad`  AS SELECT `actividad`.`id_actividad` AS `id_actividad`, `actividad`.`nom_actividad` AS `nom_actividad`, `actividad`.`descrip_actividad` AS `descrip_actividad`, `actividad`.`fecha_entrega` AS `fecha_entrega`, `actividad`.`logro_Codigo_logro` AS `logro_Codigo_logro`, `actividad`.`logro_materia_id_materia` AS `logro_materia_id_materia` FROM `actividad` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_asignacion`
--
DROP TABLE IF EXISTS `view_asignacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_asignacion`  AS SELECT `asignacion`.`id_asignacion` AS `id_asignacion`, `asignacion`.`registro_num_doc` AS `registro_num_doc`, `asignacion`.`registro_rol_id_rol` AS `registro_rol_id_rol`, `asignacion`.`registo_jornada_id_jornada` AS `registo_jornada_id_jornada`, `asignacion`.`grado_id_grado` AS `grado_id_grado`, `asignacion`.`grado_jornada_id_jornada` AS `grado_jornada_id_jornada`, `asignacion`.`curso_id_curso` AS `curso_id_curso`, `asignacion`.`curso_grado_id_grado` AS `curso_grado_id_grado`, `asignacion`.`curso_grado_jornada_id_jornada` AS `curso_grado_jornada_id_jornada` FROM `asignacion` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_asistencia`
--
DROP TABLE IF EXISTS `view_asistencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_asistencia`  AS SELECT `asistencia`.`id_asistencia` AS `id_asistencia`, `asistencia`.`fecha_asistencia` AS `fecha_asistencia`, `asistencia`.`asistencia` AS `asistencia`, `asistencia`.`registro_num_doc` AS `registro_num_doc`, `asistencia`.`registro_rol_id_rol` AS `registro_rol_id_rol`, `asistencia`.`registro_jornada_id_jornada` AS `registro_jornada_id_jornada` FROM `asistencia` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_curso`
--
DROP TABLE IF EXISTS `view_curso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_curso`  AS SELECT `curso`.`id_curso` AS `id_curso`, `curso`.`curso` AS `curso`, `curso`.`grado_id_grado` AS `grado_id_grado`, `curso`.`grado_jornada_id_jornada` AS `grado_jornada_id_jornada` FROM `curso` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_grado`
--
DROP TABLE IF EXISTS `view_grado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_grado`  AS SELECT `grado`.`id_grado` AS `id_grado`, `grado`.`nivel_educativo` AS `nivel_educativo`, `grado`.`grado` AS `grado`, `grado`.`jornada_id_jornada` AS `jornada_id_jornada` FROM `grado` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_jornada`
--
DROP TABLE IF EXISTS `view_jornada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jornada`  AS SELECT `jornada`.`id_jornada` AS `id_jornada`, `jornada`.`jornada` AS `jornada`, `jornada`.`hora_inicio` AS `hora_inicio`, `jornada`.`hora_final` AS `hora_final` FROM `jornada` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_logro`
--
DROP TABLE IF EXISTS `view_logro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_logro`  AS SELECT `logro`.`codigo_logro` AS `codigo_logro`, `logro`.`nombre_logro` AS `nombre_logro`, `logro`.`descrip_logro` AS `descrip_logro`, `logro`.`id_materia` AS `id_materia` FROM `logro` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_materia`
--
DROP TABLE IF EXISTS `view_materia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_materia`  AS SELECT `materia`.`id_materia` AS `id_materia`, `materia`.`materia` AS `materia` FROM `materia` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_materia_curso`
--
DROP TABLE IF EXISTS `view_materia_curso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_materia_curso`  AS SELECT `materia_curso`.`id_materia` AS `id_materia`, `materia_curso`.`id_curso` AS `id_curso` FROM `materia_curso` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_materia_registro`
--
DROP TABLE IF EXISTS `view_materia_registro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_materia_registro`  AS SELECT `materia_registro`.`id_materia` AS `id_materia`, `materia_registro`.`num_doc` AS `num_doc`, `materia_registro`.`id_rol` AS `id_rol`, `materia_registro`.`id_jornada` AS `id_jornada` FROM `materia_registro` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_nota`
--
DROP TABLE IF EXISTS `view_nota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_nota`  AS SELECT `nota`.`id_nota` AS `id_nota`, `nota`.`fecha_nota` AS `fecha_nota`, `nota`.`nota` AS `nota`, `nota`.`registro_num_doc` AS `registro_num_doc`, `nota`.`registro_rol_id_rol` AS `registro_rol_id_rol`, `nota`.`registro_jornada_id_jornada` AS `registro_jornada_id_jornada`, `nota`.`actividades_id_actividades` AS `actividades_id_actividades`, `nota`.`actividades_logro_Codigo_logro` AS `actividades_logro_Codigo_logro`, `nota`.`actividades_logro_materia_id_materias` AS `actividades_logro_materia_id_materias` FROM `nota` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_publicacion`
--
DROP TABLE IF EXISTS `view_publicacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_publicacion`  AS SELECT `publicacion`.`id_publicacion` AS `id_publicacion`, `publicacion`.`imagen` AS `imagen`, `publicacion`.`evento` AS `evento`, `publicacion`.`fecha_evento` AS `fecha_evento`, `publicacion`.`informacion` AS `informacion`, `publicacion`.`escritoPor` AS `escritoPor` FROM `publicacion` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_publicaion_registro`
--
DROP TABLE IF EXISTS `view_publicaion_registro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_publicaion_registro`  AS SELECT `publicaion_registro`.`id_publicacion` AS `id_publicacion`, `publicaion_registro`.`num_doc` AS `num_doc` FROM `publicaion_registro` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_registro`
--
DROP TABLE IF EXISTS `view_registro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_registro`  AS SELECT `registro`.`num_doc` AS `num_doc`, `registro`.`tipo_doc` AS `tipo_doc`, `registro`.`imagen` AS `imagen`, `registro`.`celular` AS `celular`, `registro`.`nombre` AS `nombre`, `registro`.`apellido` AS `apellido`, `registro`.`correo` AS `correo`, `registro`.`usuario` AS `usuario`, `registro`.`id_rol` AS `id_rol`, `registro`.`id_jornada` AS `id_jornada` FROM `registro` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_rol`
--
DROP TABLE IF EXISTS `view_rol`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rol`  AS SELECT `rol`.`id_rol` AS `id_rol`, `rol`.`rol` AS `rol` FROM `rol` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `logro_materia_id_materia` (`logro_materia_id_materia`),
  ADD KEY `fk_lo` (`logro_Codigo_logro`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD UNIQUE KEY `registo_jornada_id_jornada` (`registo_jornada_id_jornada`),
  ADD KEY `registro_num_doc` (`registro_num_doc`),
  ADD KEY `registro_rol_id_rol` (`registro_rol_id_rol`),
  ADD KEY `curso_id_curso` (`curso_id_curso`),
  ADD KEY `curso_grado_jornada_id_jornada` (`curso_grado_jornada_id_jornada`),
  ADD KEY `curso_grado_id_grado` (`curso_grado_id_grado`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `registro_jornada_id_jornada` (`registro_jornada_id_jornada`),
  ADD KEY `fk_r` (`registro_num_doc`),
  ADD KEY `fk_rol2` (`registro_rol_id_rol`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_grado` (`grado_id_grado`),
  ADD KEY `fk_jornada2` (`grado_jornada_id_jornada`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`),
  ADD KEY `fk_jor` (`jornada_id_jornada`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indices de la tabla `logro`
--
ALTER TABLE `logro`
  ADD PRIMARY KEY (`codigo_logro`),
  ADD KEY `fk_materia_logro` (`id_materia`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `materia_curso`
--
ALTER TABLE `materia_curso`
  ADD KEY `materia_curso_ibfk_1` (`id_materia`),
  ADD KEY `materia_curso_ibfk_2` (`id_curso`);

--
-- Indices de la tabla `materia_registro`
--
ALTER TABLE `materia_registro`
  ADD KEY `materia_registro_ibfk_1` (`id_materia`),
  ADD KEY `materia_registro_ibfk_2` (`num_doc`),
  ADD KEY `materia_registro_ibfk_3` (`id_rol`),
  ADD KEY `materia_registro_ibfk_4` (`id_jornada`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `registro_jornada_id_jornada` (`registro_jornada_id_jornada`),
  ADD KEY `actividades_id_actividades` (`actividades_id_actividades`),
  ADD KEY `actividades_logro_Codigo_logro` (`actividades_logro_Codigo_logro`),
  ADD KEY `actividades_logro_materia_id_materias` (`actividades_logro_materia_id_materias`),
  ADD KEY `fk_ol` (`registro_rol_id_rol`),
  ADD KEY `fk_regis` (`registro_num_doc`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`);

--
-- Indices de la tabla `publicaion_registro`
--
ALTER TABLE `publicaion_registro`
  ADD KEY `publicaion_registro_ibfk_1` (`num_doc`),
  ADD KEY `publicaion_registro_ibfk_2` (`id_publicacion`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`num_doc`),
  ADD KEY `fk_jornada` (`id_jornada`),
  ADD KEY `fk_rol` (`id_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
  MODIFY `codigo_logro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8765;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`logro_materia_id_materia`) REFERENCES `logro` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lo` FOREIGN KEY (`logro_Codigo_logro`) REFERENCES `logro` (`codigo_logro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`registro_num_doc`) REFERENCES `registro` (`num_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`registro_rol_id_rol`) REFERENCES `registro` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_4` FOREIGN KEY (`curso_id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_5` FOREIGN KEY (`curso_grado_jornada_id_jornada`) REFERENCES `curso` (`grado_jornada_id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_6` FOREIGN KEY (`curso_grado_id_grado`) REFERENCES `curso` (`grado_id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_7` FOREIGN KEY (`registo_jornada_id_jornada`) REFERENCES `registro` (`id_jornada`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`registro_jornada_id_jornada`) REFERENCES `registro` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_r` FOREIGN KEY (`registro_num_doc`) REFERENCES `registro` (`num_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rol2` FOREIGN KEY (`registro_rol_id_rol`) REFERENCES `registro` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_grado` FOREIGN KEY (`grado_id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jornada2` FOREIGN KEY (`grado_jornada_id_jornada`) REFERENCES `grado` (`jornada_id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `fk_jor` FOREIGN KEY (`jornada_id_jornada`) REFERENCES `jornada` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `logro`
--
ALTER TABLE `logro`
  ADD CONSTRAINT `fk_materia_logro` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_curso`
--
ALTER TABLE `materia_curso`
  ADD CONSTRAINT `materia_curso_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_curso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_registro`
--
ALTER TABLE `materia_registro`
  ADD CONSTRAINT `materia_registro_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_registro_ibfk_2` FOREIGN KEY (`num_doc`) REFERENCES `registro` (`num_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_registro_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_registro_ibfk_4` FOREIGN KEY (`id_jornada`) REFERENCES `jornada` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_ol` FOREIGN KEY (`registro_rol_id_rol`) REFERENCES `registro` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_regis` FOREIGN KEY (`registro_num_doc`) REFERENCES `registro` (`num_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`registro_jornada_id_jornada`) REFERENCES `registro` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`actividades_id_actividades`) REFERENCES `actividad` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_3` FOREIGN KEY (`actividades_logro_Codigo_logro`) REFERENCES `actividad` (`logro_Codigo_logro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_4` FOREIGN KEY (`actividades_logro_materia_id_materias`) REFERENCES `actividad` (`logro_materia_id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicaion_registro`
--
ALTER TABLE `publicaion_registro`
  ADD CONSTRAINT `publicaion_registro_ibfk_1` FOREIGN KEY (`num_doc`) REFERENCES `registro` (`num_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publicaion_registro_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_jornada` FOREIGN KEY (`id_jornada`) REFERENCES `jornada` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
