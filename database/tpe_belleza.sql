-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 02:09:18
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
-- Base de datos: `tpe_belleza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Maquillaje'),
(2, 'Uñas'),
(3, 'Peluqueria'),
(4, 'Skin care'),
(5, 'Materiales de trabajo'),
(6, 'Electronica'),
(7, 'Pestañas'),
(8, 'Podologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `marca` varchar(45) NOT NULL,
  `precio` float NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `marca`, `precio`, `id_categoria`) VALUES
(4, 'Labial en barra', 'Labial en barra matte color rojo.', 'Mac', 320, 1),
(5, 'Delineador liquido', 'Delineador liquido color negro con punta fina.', 'Ruby Rose', 780, 1),
(6, 'Esmalte semipermanente', 'Esmalte color amarillo tono 004.', 'Meline', 1200, 2),
(7, 'Quitaesmalte', 'Especial para uñas debiles.', 'Xulu', 200, 2),
(8, 'Broches para remover', 'Broches para remover el esmalte semipermanente.', 'Cherimoya', 1600, 2),
(9, 'Crema de tratamiento', 'Tratamiento para cabellos ondulados. Super hidratante.', 'Skala', 780, 3),
(10, 'Shampoo', 'Para cabellos teñidos/secos.', 'Sedal', 600, 3),
(11, 'Acondicionador', 'Para cabellos con frizz.', 'Pantene', 750, 3),
(12, 'Shock de keratina', 'Exclusivo solo para uso profesional. 500ml.', 'Kasdy', 1800, 3),
(13, 'Gel de limpieza', 'Desmaquillante en gel de frutos rojos. Pieles normales a secas. 90ml.', 'Tulpo', 480, 4),
(14, 'Crema exfoliante', 'Apto para todo el cuerpo, con aceite de coco. Limpia y nutre.', 'Thelma y Louise', 900, 4),
(15, 'Crema hidratante', 'Crema para pieles secas. Aplicar 2 o 3 veces por dia.', 'Vedo', 996, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
