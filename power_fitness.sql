-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 01:39 AM
-- Server version: 8.0.32
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power_fitness`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActivarUsuario` (IN `pUsuarioId` INT)   UPDATE usuarios
SET estado = 1
WHERE UsuarioId = pUsuarioId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarUsuarioMembresia` (IN `pUsuarioId` INT, IN `pMembresiaId` INT, IN `pFechaInicio` DATE, IN `pFechaExpiracion` DATE)   BEGIN

INSERT INTO usuariomembresias (
    FechaInicio,
    FechaExpiracion,
    UsuarioId,
    MembresiaId
    ) 
    VALUES
    (
    pFechaInicio,
    pFechaExpiracion,
    pUsuarioId,
    pMembresiaId
    );
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearBlog` (IN `pFechaCreacion` DATE, IN `pTitulo` VARCHAR(75), IN `pContenido` VARCHAR(500), IN `pUsuarioId` INT)   BEGIN 

INSERT INTO blogs 
(
    FechaCreacion,
    Titulo,
    Contenido,
    UsuarioId
)

Values (
    pFechaCreacion,
    pTitulo,
    pContenido,
    pUsuarioId
);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearEstadisticas` (IN `pAltura` DECIMAL, IN `pPeso` DECIMAL, IN `pFecha` DATE, IN `pUsuarioId` INT)   BEGIN
INSERT INTO estadisticas
(
Altura,
Peso,
Fecha,
UsuarioId
)
VALUES
(
pAltura,
pPeso,
pFecha,
pUsuarioId
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearMembresia` (IN `pNombre` VARCHAR(50), IN `pDescripcion` VARCHAR(100), IN `pPrecio` DOUBLE)   BEGIN 

INSERT INTO membresia 
(   
    Nombre,
    Descripcion,
    Precio
)

Values (
    pNombre,
    pDescripcion,
    pPrecio
);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearRol` (IN `pNombre` VARCHAR(15), IN `pDescripcion` VARCHAR(35))   BEGIN 

INSERT INTO roles (Nombre, Descripcion)
Values (pNombre, pDescripcion);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearUsuario` (IN `pPrimerNombre` VARCHAR(15), IN `pPrimerApellido` VARCHAR(25), IN `pSegundoApellido` VARCHAR(25), IN `pFechaNacimiento` DATE, IN `pGenero` CHAR(1), IN `pCelular` INT(8), IN `pDireccion` VARCHAR(350), IN `pCorreo` VARCHAR(45), IN `pContrasenna` VARCHAR(20), IN `pRolId` INT)   BEGIN 

INSERT INTO usuarios 
(
    PrimerNombre,
    PrimerApellido,
    SegundoApellido,
    FechaNacimiento,
    Genero,
    Celular,
    Direccion,
    Correo,
    Contrasenna,
    Estado,
    RolId
)

Values (
    pPrimerNombre,
    pPrimerApellido,
    pSegundoApellido,
    pFechaNacimiento,
    pGenero,
    pCelular,
    pDireccion,
    pCorreo,
    pContrasenna,
    1,
    pRolId
);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarBlog` (IN `pBlogId` INT, IN `pTitulo` VARCHAR(75), IN `pContenido` VARCHAR(500))   BEGIN 

UPDATE blogs SET Titulo = pTitulo, Contenido = pContenido
WHERE BlogId = pBlogId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarEstadisticas` (IN `pAltura` DECIMAL, IN `pPeso` DECIMAL, IN `pFecha` DATE, IN `pEstadisticasId` INT)   BEGIN
UPDATE estadisticas SET
Altura = pAltura,
Peso = pPeso,
Fecha = pFecha
   WHERE EstadisticasId = pEstadisticasId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarMembresia` (IN `pMembresiaId` INT, IN `pNombre` VARCHAR(50), IN `pDescripcion` VARCHAR(100), IN `pPrecio` DOUBLE)   BEGIN 
    UPDATE membresia SET
        Descripcion = pDescripcion,
        Nombre = pNombre,
        Precio = pPrecio
    WHERE MembresiaId = pMembresiaId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarRol` (IN `pRolId` INT, IN `pNuevoNombre` VARCHAR(15), IN `pDescripcion` VARCHAR(35))   BEGIN 

UPDATE roles SET
Nombre = pNuevoNombre,
Descripcion = pDescripcion
WHERE RolId = pRolId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarUsuarioAdmin` (IN `pPrimerNombre` VARCHAR(15), IN `pPrimerApellido` VARCHAR(25), IN `pSegundoApellido` VARCHAR(25), IN `pFechaNacimiento` DATE, IN `pGenero` CHAR(1), IN `pCelular` INT(8), IN `pDireccion` VARCHAR(350), IN `pContrasenna` INT(20), IN `pUsuarioId` INT)   BEGIN 

    UPDATE usuarios SET
        PrimerNombre = pPrimerNombre,
        PrimerApellido = pPrimerApellido,
        SegundoApellido = pSegundoApellido,
        FechaNacimiento = pFechaNacimiento,
        Genero = pGenero,
        Celular = pCelular,
        Direccion = pDireccion,
        Contrasenna = pContrasenna
    WHERE UsuarioId = pUsuarioId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarUsuarioCliente` (IN `pPrimerNombre` VARCHAR(15), IN `pPrimerApellido` VARCHAR(25), IN `pSegundoApellido` VARCHAR(25), IN `pFechaNacimiento` DATE, IN `pGenero` CHAR(1), IN `pCelular` INT(8), IN `pDireccion` VARCHAR(350), IN `pUsuarioId` INT)   BEGIN 

    UPDATE usuarios SET
        PrimerNombre = pPrimerNombre,
        PrimerApellido = pPrimerApellido,
        SegundoApellido = pSegundoApellido,
        FechaNacimiento = pFechaNacimiento,
        Genero = pGenero,
        Celular = pCelular,
        Direccion = pDireccion
    WHERE UsuarioId = pUsuarioId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarBlog` (IN `pBlogId` INT)   BEGIN 

DELETE FROM blogs WHERE BlogId = pBlogId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarEstadisticas` (IN `pEstadisticasId` INT)   BEGIN 

DELETE FROM estadisticas WHERE EstadisticasId = pEstadisticasId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarMembresia` (IN `pMembresiaId` INT(11))   BEGIN

DELETE FROM membresia WHERE MembresiaId = pMembresiaId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarRol` (IN `pRolId` INT)   BEGIN 

DELETE FROM roles WHERE RolId = pRolId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InactivarUsuario` (IN `pUsuarioId` INT)   UPDATE usuarios
SET estado = 0
WHERE UsuarioId = pUsuarioId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerBlog` (IN `pBlogId` INT)   BEGIN 

    SELECT B.BlogId, B.Titulo, B.Contenido, B.FechaCreacion, 
    U.UsuarioId, U.PrimerNombre, U.PrimerApellido, U.SegundoApellido
    FROM blogs B
    INNER JOIN usuarios U ON B.UsuarioId = U.UsuarioId
    WHERE B.BlogId = pBlogId;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerBlogPorUsuario` (IN `pUsuarioId` INT)   BEGIN 

    SELECT B.BlogId, B.Titulo, B.Contenido, B.FechaCreacion, 
    U.UsuarioId, U.PrimerNombre, U.PrimerApellido, U.SegundoApellido
    FROM blogs B
    INNER JOIN usuarios U ON B.UsuarioId = U.UsuarioId
    WHERE B.UsuarioId = pUsuarioId;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerBlogs` ()   BEGIN 

    SELECT B.BlogId, B.Titulo, B.Contenido, B.FechaCreacion, 
    U.UsuarioId, U.PrimerNombre, U.PrimerApellido, U.SegundoApellido
    FROM blogs B
    INNER JOIN usuarios U ON B.UsuarioId = U.UsuarioId;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerEstadistica` (IN `pEstadisticasId` INT)   BEGIN
SELECT EstadisticasId, Altura, Peso, Fecha
FROM estadisticas
WHERE EstadisticasId = pEstadisticasId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerEstadisticas` ()   BEGIN
SELECT E.EstadisticasId, E.Altura, E.Peso, E.Fecha, E.UsuarioId, U.PrimerNombre, U.PrimerApellido, U.SegundoApellido
FROM estadisticas E
INNER JOIN usuarios U ON E.UsuarioId = U.UsuarioId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerEstadisticasUsuario` (IN `pUsuarioId` INT)   BEGIN
SELECT EstadisticasId, Altura, Peso, Fecha
FROM estadisticas
WHERE UsuarioId = pUsuarioId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerMembresia` (IN `pMembresiaId` INT)   BEGIN 
    SELECT MembresiaId, Nombre, Descripcion, Precio 
    FROM membresia WHERE MembresiaId = pMembresiaId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerMembresias` ()   BEGIN 
    SELECT MembresiaId, Nombre, Descripcion, Precio FROM membresia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerRol` (IN `pRolId` INT)   BEGIN

SELECT * FROM roles WHERE RolId = pRolId;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerRoles` ()   BEGIN 

SELECT * FROM Roles;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerUsuario` (IN `pUsuarioId` INT)   BEGIN 

    SELECT U.UsuarioId, U.PrimerNombre, U.PrimerApellido, U.SegundoApellido, U.FechaNacimiento, U.Genero, 
    U.Celular, U.Direccion, U.Correo, U.Estado, CASE WHEN U.Estado = 1 THEN 'Activo' ELSE 'Inactivo' END 'DescEstado', 
    U.RolId, R.Nombre
    FROM usuarios U
    INNER JOIN roles R ON U.RolId = R.RolId
    WHERE U.UsuarioId = pUsuarioId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerUsuarios` ()   BEGIN 

    SELECT U.UsuarioId, U.PrimerNombre, U.PrimerApellido, U.SegundoApellido, U.FechaNacimiento, U.Genero, U.Correo,
    U.Celular, U.Direccion, U.Estado, CASE WHEN U.Estado = 1 THEN 'Activo' ELSE 'Inactivo' END 'DescEstado', 
    U.RolId, R.Nombre
    FROM usuarios U
    INNER JOIN roles R ON U.RolId = R.RolId;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerUsuariosMembresias` (IN `pUsuarioId` INT)   BEGIN
	SELECT U.UsuarioMembresiasId, U.FechaInicio,
    U.FechaExpiracion, M.Nombre
    FROM usuariomembresias U
    INNER JOIN membresia M ON U.MembresiaId = M.MembresiaId
    WHERE UsuarioId = pUsuarioId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarCorreo` (IN `pCorreo` VARCHAR(45))   BEGIN 

    SELECT usuarioId, correo, contrasenna FROM usuarios
    WHERE correo = pCorreo;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarInicioSesion` (IN `pCorreo` VARCHAR(45), IN `pContrasenna` VARCHAR(20))   BEGIN

	SELECT 	UsuarioId,
    		PrimerNombre,
    		PrimerApellido,
    		SegundoApellido,
            Genero,
    		Correo,
            Estado,
            U.RolId,
            R.Nombre
  	FROM 	usuarios U
    INNER JOIN roles R ON U.RolId = R.RolId
    WHERE 	Correo 			  = pCorreo
    	AND Contrasenna       = pContrasenna
        AND Estado            = 1;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `BlogId` int NOT NULL,
  `FechaCreacion` date NOT NULL,
  `Titulo` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Contenido` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UsuarioId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`BlogId`, `FechaCreacion`, `Titulo`, `Contenido`, `UsuarioId`) VALUES
(3, '2023-04-23', 'Plan de entrenamiento semanal: Rutina Weider y Full-Body', 'Esta rutina es especialmente adecuada para quienes entrenan fuerza, disfrutan entrenando y ya tienen un buen estado de forma. ¿La razón? Al entrenar distintos grupos musculares cada día de forma muy intensa y completa puedes trabajar incluso los músculos más pequeños que suelen quedar olvidados.', 12),
(4, '2023-04-23', '¿Cómo acelerar el metabolismo? Trucos y técnicas que funcionarán', 'El metabolismo es el proceso que afecta al comportamiento de los alimentos en tu organismo. Normalmente, si tienes un metabolismo lento tardarás más en procesar los alimentos y engordarás más fácilmente, por le contrario, si lo tienes rápido, transformarás los alimentos en nutrientes de una manera más rápida y te será más fácil conservar la línea.', 12),
(5, '2023-04-29', 'Entrenamiento elíptica: ¿Cómo usar la elíptica para adelgazar?', 'La bicicleta elíptica es uno de los productos más utilizados en el gimnasio. Sin embargo, muchas veces se usa mal y no se aprovechan todos sus beneficios, como puede ser usar la elíptica para adelgazar barriga y perder peso. Si bien la cantidad de calorías quemadas en cualquier sesión, dependen de la optimización de la máquina, el nivel de resistencia o la velocidad utilizada, por lo general se pueden quemar alrededor de 270 y 400 calorías en sólo 30 minutos.', 12),
(6, '2023-04-29', 'Cardio antes o después de entrenar', 'Combinar entrenamiento cardio y de fuerza es algo cada vez más frecuente. Y es una buena idea, porque un cuerpo saludable necesita de ambos. Pero es habitual preguntarse por si es mejor hacer practicar cardio antes o después de entrenar. Una duda que no tiene una respuesta inmediata por la sencilla razón de que hacer cardio antes o después es mejor según el objetivo que desees alcanzar. Así que en primer lugar debes definir bien tus objetivos.', 12),
(7, '2023-04-29', 'Mejores ejercicios para bajar de peso rápido', 'Hay un montón de maneras de quemar calorías rápido, y hoy nos vamos a centrar en exponer los que son para nosotros los mejores ejercicios para bajar de peso rápido. Una cosa que tienen en común todos los ejercicios para quemar calorías que presentamos a continuación es que son grandes rutinas de cuerpo entero que desafían, de la cabeza a los pies. Al incorporar tanto el trabajo cardiovascular como de fuerza, se logra cumplir e incluso superar el umbral de las 700 calorías.', 12),
(8, '2023-04-29', '¿Qué es AMRAP? Descubre sus ejemplos de ejercicios', 'Probablemente ya hayas escuchado hablar del AMRAP en muchas ocasiones, sobre todo si eres una persona deportista y más aún si te has animado a probar el cross-fitness. ¿Cuál es el significado de AMRAP? El significado de esta palabra viene de las siglas “As Many Rounds/Reps As Possible”, es decir, cuantas más repeticiones posibles.', 12);

-- --------------------------------------------------------

--
-- Table structure for table `estadisticas`
--

CREATE TABLE `estadisticas` (
  `EstadisticasId` int NOT NULL,
  `Altura` decimal(4,1) NOT NULL,
  `Peso` decimal(5,2) NOT NULL,
  `Fecha` date NOT NULL,
  `UsuarioId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estadisticas`
--

INSERT INTO `estadisticas` (`EstadisticasId`, `Altura`, `Peso`, `Fecha`, `UsuarioId`) VALUES
(5, '127.0', '135.00', '2023-04-27', 12),
(7, '154.0', '50.00', '2023-04-28', 13);

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `FacturaId` bigint NOT NULL,
  `Total` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha` date NOT NULL,
  `MembresiaId` int NOT NULL,
  `UsuarioId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membresia`
--

CREATE TABLE `membresia` (
  `MembresiaId` int NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membresia`
--

INSERT INTO `membresia` (`MembresiaId`, `Nombre`, `Descripcion`, `Precio`) VALUES
(3, '3 Meses', 'Área de cardio\r\nÁrea de peso libre e integrado\r\nLockers y duchas', 30),
(4, '6 Meses', 'Área de cardio Área de peso libre e integrado Lockers y duchas', 50),
(5, '12 Meses', 'Área de cardio Área de peso libre e integrado Lockers y duchas', 62);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RolId` int NOT NULL,
  `Nombre` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RolId`, `Nombre`, `Descripcion`) VALUES
(4, 'Administrador', 'Rol para administradores'),
(5, 'Usuarios', 'Roles para usuarios clientes');

-- --------------------------------------------------------

--
-- Table structure for table `telefonos`
--

CREATE TABLE `telefonos` (
  `TelefonoId` int NOT NULL,
  `Telefono` int NOT NULL,
  `UsuarioId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `telefonos`
--

INSERT INTO `telefonos` (`TelefonoId`, `Telefono`, `UsuarioId`) VALUES
(1, 55555554, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuariomembresias`
--

CREATE TABLE `usuariomembresias` (
  `UsuarioMembresiasId` int NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaExpiracion` date NOT NULL,
  `UsuarioId` int NOT NULL,
  `MembresiaId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuariomembresias`
--

INSERT INTO `usuariomembresias` (`UsuarioMembresiasId`, `FechaInicio`, `FechaExpiracion`, `UsuarioId`, `MembresiaId`) VALUES
(6, '2023-04-29', '2024-04-29', 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` int NOT NULL,
  `PrimerNombre` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PrimerApellido` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `SegundoApellido` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `PuestoTrabajo` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DescripcionTrabajo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Genero` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Celular` int NOT NULL,
  `Direccion` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Correo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Contrasenna` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Estado` bit(1) NOT NULL,
  `RolId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `PrimerNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `PuestoTrabajo`, `DescripcionTrabajo`, `Genero`, `Celular`, `Direccion`, `Correo`, `Contrasenna`, `Estado`, `RolId`) VALUES
(12, 'Roberto', 'Gonzales', 'Mora', '2023-04-11', NULL, NULL, '', 80808080, ', bleh, bleh', 'admin01@gmail.com', '1234', b'1', 4),
(13, 'Valeria', 'Morales', 'Gamboa', '2023-04-20', NULL, NULL, 'F', 80565511, 'Alajuela, Alajuela, El roble', 'valek2920@gmail.com', '1234', b'1', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`BlogId`),
  ADD KEY `fk_user_blog` (`UsuarioId`);

--
-- Indexes for table `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`EstadisticasId`),
  ADD KEY `fkUsuario` (`UsuarioId`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`FacturaId`),
  ADD UNIQUE KEY `Membrecia` (`MembresiaId`),
  ADD KEY `fk_usr_fac` (`UsuarioId`);

--
-- Indexes for table `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`MembresiaId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RolId`);

--
-- Indexes for table `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`TelefonoId`),
  ADD UNIQUE KEY `TelefonoId` (`TelefonoId`,`Telefono`),
  ADD KEY `fk_telefonos_ususarios` (`UsuarioId`);

--
-- Indexes for table `usuariomembresias`
--
ALTER TABLE `usuariomembresias`
  ADD PRIMARY KEY (`UsuarioMembresiasId`),
  ADD KEY `fk_usermem_user` (`UsuarioId`),
  ADD KEY `fk_usermem_mem` (`MembresiaId`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD KEY `fk_usuario_roles` (`RolId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `BlogId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `EstadisticasId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `FacturaId` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membresia`
--
ALTER TABLE `membresia`
  MODIFY `MembresiaId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RolId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `TelefonoId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuariomembresias`
--
ALTER TABLE `usuariomembresias`
  MODIFY `UsuarioMembresiasId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_user_blog` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD CONSTRAINT `fkUsuario` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`);

--
-- Constraints for table `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_mem_fac` FOREIGN KEY (`MembresiaId`) REFERENCES `membresia` (`MembresiaId`),
  ADD CONSTRAINT `fk_usr_fac` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`);

--
-- Constraints for table `usuariomembresias`
--
ALTER TABLE `usuariomembresias`
  ADD CONSTRAINT `fk_usermem_mem` FOREIGN KEY (`MembresiaId`) REFERENCES `membresia` (`MembresiaId`),
  ADD CONSTRAINT `fk_usermem_user` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_roles` FOREIGN KEY (`RolId`) REFERENCES `roles` (`RolId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
