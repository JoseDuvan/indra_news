-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-02-2019 a las 00:18:19
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indra_news`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contenido` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_publicacion` date NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `pais` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sede` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `categoria`, `titulo`, `autor`, `foto`, `cargo`, `contenido`, `imagen`, `fecha_publicacion`, `fecha_caducidad`, `pais`, `sede`) VALUES
(33, 'Innovación', 'Modelo de Innovación', 'Esteban Andrade', '../vista/images\\author-image2.jpg', 'Gerente de Innovación', 'En Indra contamos con un Modelo de Innovación abierto, ágil y flexible orientado a ampliar y acelerar de forma estratégica la capacidad de generación y captación de ideas potencialmente atractivas para ampliar nuestra oferta de futuro.\r\n\r\nEl Modelo de Innovación pretende ampliar y reforzar nuestra relación con el ecosistema de innovación a nivel global: startups, emprendedores, spinoffs, grupos de investigación de las universidades que están experimentando con tecnologías emergentes y los propios profesionales de Indra.', '../vista/images\\blog-image3.jpg', '2019-02-11', '2019-06-30', 'Colombia', 'Medellin'),
(34, 'Comunicaciones', 'Certificaciones', 'Luz Emilce Restrepo', '../vista/images\\author-image1.jpg', 'Director Sistemas Integrados', 'Nuestra principal responsabilidad y uno de los ejes de nuestra sostenibilidad es ofrecer a nuestros clientes soluciones y servicios innovadores y con unos altos estándares de calidad. Como muestra de garantía y confianza para nuestros clientes, Indra se somete periódicamente a auditorías independientes para la certificación de sus sistemas de gestión y producción de acuerdo a los principales estándares internacionales.', '../vista/images\\blog-image1.jpg', '2019-02-09', '2019-12-31', 'España', 'Madrid'),
(35, 'Comunicaciones', 'Alianzas', 'Mario Antonio Fernandez', '../vista/images\\author-image3.jpg', 'Gerente de Relaciones LATAM', 'Indra cuenta con una amplia experiencia en el establecimiento de colaboraciones y alianzas con los líderes tecnológicos más importantes del mercado. \r\n\r\nMantenemos con nuestro ecosistema global de Partners un modelo de innovación abierto y cooperativo que nos permite el desarrollo de iniciativas estratégicas conjuntas que trasladamos a nuestras soluciones y servicios.\r\n\r\nDe esta forma podemos ofrecer a nuestros clientes soluciones que les permitan alcanzar sus objetivos de negocio a través de la implantación de nuestras soluciones de forma competitiva, minimizando riesgos y plazos.\r\n\r\n En la actualidad Indra ha establecido relaciones contractuales con más de 287 compañías a nivel mundial de diferentes perfiles directamente relacionadas con nuestras diversas líneas de negocio.', '../vista/images\\blog-image2.jpg', '2019-02-10', '2019-12-31', 'Argentina', 'Buenos Aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`) VALUES
(15, 'Jose Duvan Valencia', '$2y$10$7XM729zVOait.9Khoq2Zi.OQDQS49VOaPFNK1qdtCD8gyeFYE1XEq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
