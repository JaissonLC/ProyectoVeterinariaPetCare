-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 25-08-2023 a las 04:20:53
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
-- Base de datos: `veterinariapetcare`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarContraseña` (IN `paridUsuario` BIGINT, IN `parContraseña` VARCHAR(25))   BEGIN
   
   UPDATE usuarios
   SET Contraseña = parContraseña
   WHERE idUsuario = paridUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaDeDatos` (IN `parCorreo` VARCHAR(50))   BEGIN

SELECT Identificacion,
       NombreCompleto,
       NombreDeUsuario,
       Correo,
       Estado
FROM usuarios
WHERE Correo = parCorreo
   AND Estado = 1;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarDetalleCarrito` (IN `pidUsuario` BIGINT)   BEGIN

select 	CC.IdProductoCarrito,
		C.Nombre,
		C.Precio,
		IFNULL((Precio * 0.13),0) 'Impuesto',
       IFNULL((Precio + (C.Precio * 0.13)),0) 'Total'
from productocarrito CC
INNER JOIN productos C ON C.idProducto = CC.idProducto
where idUsuario = pidUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarDetalleProductos` (IN `pIdUsuario` BIGINT)   BEGIN

		SELECT 	CC.IdUsuarioProducto,
			C.Nombre,
			CC.PrecioFinal,
            IFNULL((CC.PrecioFinal * 0.13),0) 'Impuesto',
            IFNULL((CC.PrecioFinal + (CC.PrecioFinal * 0.13)),0) 'Total'
    FROM 	usuarioproducto CC
    INNER JOIN Productos C ON C.IdProducto = CC.IdProducto
    WHERE 	IdUsuario = pIdUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProductos` ()   BEGIN

select * from Productos;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarResumenCarrito` (IN `pidUsuario` BIGINT)   BEGIN

select COUNT(1) 'Cantidad', 
		IFNULL(SUM(Precio),0)'Subtotal',
		IFNULL(SUM(Precio +(Precio * 0.13)),0) 'Total'
from productocarrito CC
INNER JOIN productos C ON C.idProducto = CC.idProducto
where idUsuario = pidUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PagarCarrito` (IN `pIdUsuario` BIGINT)   BEGIN

	INSERT INTO `usuarioproducto`(`IdUsuario`,`IdProducto`,`Fecha`,`PrecioFinal`)
	SELECT 	CC.IdUsuario,CC.IdProducto,NOW(),C.Precio
    FROM 	productocarrito CC
    INNER JOIN productos C on CC.IdProducto = C.IdProducto
	WHERE CC.IdUsuario = pIdUsuario;
    
    DELETE FROM productocarrito 
    WHERE IdUsuario = pIdUsuario;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarProductoCarrito` (IN `pidUsuario` BIGINT, IN `pidProducto` BIGINT)   BEGIN
INSERT INTO `veterinariapetcare`.`productocarrito`
(`idUsuario`,`idProducto`,`Fecha`)
VALUES
(pidUsuario,pidProducto,NOW());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarProductoCarritoM` (IN `pidUsuario` BIGINT, IN `pidProducto` BIGINT)   BEGIN
INSERT INTO `veterinariapetcare`.`productocarrito`
(`idUsuario`,`idProducto`,`Fecha`)
VALUES
(pidUsuario,pidProducto,NOW());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarUsuario` (IN `parIdentificacion` VARCHAR(20), IN `parNombreCompleto` VARCHAR(100), IN `parNombreDeUsuario` VARCHAR(100), IN `parCorreo` VARCHAR(50), IN `parContraseña` VARCHAR(25))   BEGIN

INSERT INTO `veterinariapetcare`.`usuarios`(`Identificacion`,`NombreCompleto`,`NombreDeUsuario`,`Correo`,`Contraseña`,`Estado`,`idRol`)
VALUES
(parIdentificacion,parNombreCompleto,parNombreDeUsuario,parCorreo,parContraseña,1,1);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarSesion` (IN `parCorreo` VARCHAR(50), IN `parContraseña` VARCHAR(25))   BEGIN

SELECT Identificacion,
       NombreCompleto,
       NombreDeUsuario,
       Correo,
       Estado,
       u.idRol,
       r.NombreRol,
       idUsuario
FROM usuarios u
INNER JOIN rol r ON u.idRol = r.idRol
WHERE Correo = parCorreo
   AND Contraseña = parContraseña
   AND Estado = 1;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProductoCarrito`(IN `pIdProductoCarrito` BIGINT)
BEGIN

DELETE FROM `productocarrito`
WHERE IdProductoCarrito = pIdProductoCarrito;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productocarrito`
--

CREATE TABLE `productocarrito` (
  `idProductoCarrito` bigint(20) NOT NULL,
  `idUsuario` bigint(20) NOT NULL,
  `idProducto` bigint(20) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` bigint(20) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(8000) DEFAULT NULL,
  `Precio` decimal(18,2) NOT NULL,
  `RutaImagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `Nombre`, `Descripcion`, `Precio`, `RutaImagen`) VALUES
(1, 'Hill’s Prescription', 'Diet w/d, control de peso y de la glucosa, salud digestiva y de la vejiga, Alimento para Perro, 12.5kg.', '20.00', 'https://www.veterinariapetcitycr.com/wp-content/uploads/2021/06/be99c2b9-3538-4bcf-bf91-3adbed1bfac0.jpg'),
(2, 'Hill’s Prescription Diet u/d', 'Salud urinaria, Alimento para perro, 3.86kg.', '33.00', 'https://www.veterinariapetcitycr.com/wp-content/uploads/2022/07/048d7f24-9cc2-4907-9fdd-4da15045758a.jpg'),
(3, 'PROTELIV 15ML', '', '7.00', 'https://www.veterinariapetcitycr.com/wp-content/uploads/2022/07/7798042360871_hepaprotectorcolereticocolagogoproteliv_.jpg'),
(4, 'LABYDERM BIOFORCE', '100ML', '20.00', 'https://www.veterinariapetcitycr.com/wp-content/uploads/2022/07/Sin-titulo-1-Recuperado-Recuperado-Recuperado-Recuperado-Recuperado.jpg'),
(5, 'PRO PLAN SENSITIVE', 'SKIN ADULTO 13KG', '60.00', 'https://www.veterinariapetcitycr.com/wp-content/uploads/2022/07/b4facf495c22df52f3ca635379ebe613-5.jpeg');









-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `NombreRol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `NombreRol`) VALUES
(1, 'Usuario'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioproducto`
--

CREATE TABLE `usuarioproducto` (
  `idUsuarioProducto` bigint(20) NOT NULL,
  `idUsuario` bigint(20) NOT NULL,
  `idProducto` bigint(20) NOT NULL,
  `Fecha` datetime NOT NULL,
  `PrecioFinal` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarioproducto`
--

INSERT INTO `usuarioproducto` (`idUsuarioProducto`, `idUsuario`, `idProducto`, `Fecha`, `PrecioFinal`) VALUES
(1, 7, 1, '2023-08-06 19:01:45', '20.00'),
(2, 7, 1, '2023-08-06 19:02:08', '20.00'),
(3, 5, 1, '2023-08-24 20:07:48', '20.00'),
(4, 6, 1, '2023-08-24 20:17:33', '20.00'),
(5, 6, 2, '2023-08-24 20:17:33', '33.00'),
(6, 6, 3, '2023-08-24 20:17:33', '7.00');




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_contactos`
--

CREATE TABLE `tabla_contactos` (
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_contactos`
--

INSERT INTO `tabla_contactos` (`name`, `email`, `subject`, `message`) VALUES
('Ariel Berrocal Peñaranda', 'ariberro03@gmail.com', 'Cita', 'Cita para mi perro.');

-- --------------------------------------------------------




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Identificacion` varchar(20) NOT NULL,
  `NombreCompleto` varchar(100) NOT NULL,
  `NombreDeUsuario` varchar(100) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(25) NOT NULL,
  `Estado` bit(1) NOT NULL,
  `idUsuario` bigint(20) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Identificacion`, `NombreCompleto`, `NombreDeUsuario`, `Correo`, `Contraseña`, `Estado`, `idUsuario`, `idRol`) VALUES
('00000', 'Jeto', 'Jeto', 'jaissonlozadacastro919@gmail.com', '00000', b'1', 5, 2),
('1919', 'Ignacio', 'Ignacio', 'barqueroignacio@gmail.com', '1010', b'1', 6, 2);

--
-- Índices para tablas volcadas
--



CREATE TABLE `registrarCitaConsulta` (
  `idUsuarioCita` bigint(20) NOT NULL,
  `NombreCompleto` varchar(100) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` int NOT NULL,
  `FechaCita` date NOT NULL,
  `Departamento` varchar(200) NOT NULL,
  `Doctor` varchar(200) NOT NULL,
  `Mensaje` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





--
-- Indices de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  ADD PRIMARY KEY (`idProductoCarrito`),
  ADD KEY `fkProductosCarrito` (`idProducto`),
  ADD KEY `fkUsuariosCarrito` (`idUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarioproducto`
--
ALTER TABLE `usuarioproducto`
  ADD PRIMARY KEY (`idUsuarioProducto`),
  ADD KEY `fkProductos` (`idProducto`),
  ADD KEY `fkUsuarios` (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idx_usuarios_Correo` (`Correo`),
  ADD UNIQUE KEY `idx_usuarios_Identificacion` (`Identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--



ALTER TABLE `registrarCitaConsulta`
  ADD PRIMARY KEY (`idUsuarioCita`);


--
-- AUTO_INCREMENT de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  MODIFY `idProductoCarrito` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarioproducto`
--
ALTER TABLE `usuarioproducto`
  MODIFY `idUsuarioProducto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--





ALTER TABLE `registrarCitaConsulta`
  MODIFY `idUsuarioCita` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;





--
-- Filtros para la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  ADD CONSTRAINT `fkProductosCarrito` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  ADD CONSTRAINT `fkUsuariosCarrito` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
