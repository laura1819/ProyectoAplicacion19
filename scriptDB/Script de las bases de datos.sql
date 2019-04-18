
--
-- Base de datos: `DAW210DBProyectoAplicacion1819`
--
CREATE DATABASE IF NOT EXISTS `DAW210DBProyectoAplicacion1819` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `DAW210DBProyectoAplicacion1819`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_Usuarios`
--

CREATE TABLE `T01_Usuarios` (
  `T01_CodUsuario` varchar(15) NOT NULL,
  `T01_Password` varchar(250) NOT NULL,
  `T01_DescUsuario` varchar(255) NOT NULL,
  `T01_NumAccesos` int(11) DEFAULT '0',
  `T01_FechaHoraUltimaConexion` int(11) DEFAULT NULL,
  `T01_Perfil` enum('Administrador','Usuario') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_Usuarios`
--

INSERT INTO `T01_Usuarios` (`T01_CodUsuario`, `T01_Password`, `T01_DescUsuario`, `T01_NumAccesos`, `T01_FechaHoraUltimaConexion`, `T01_Perfil`) VALUES
('admin', '4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944', 'Administrador', 58, 1555531665, 'Administrador'),
('laura', '4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944', 'Laura', 10, 1555517422, 'Usuario'),
('maria', '4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944', 'pringada', 2, 1555431787, 'Usuario'),
('natalia', '4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944', 'puta', 5, 1555431528, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T02_Departamentos`
--

CREATE TABLE `T02_Departamentos` (
  `T02_CodDepartamento` varchar(15) NOT NULL,
  `T02_DescDepartamento` varchar(250) NOT NULL,
  `T02_FechaCreacionDepartamento` int(11) DEFAULT NULL,
  `T02_VolumenDeNegocio` float DEFAULT '0',
  `T02_FechaBajaDepartamento` date NOT NULL DEFAULT '0001-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T02_Departamentos`
--

INSERT INTO `T02_Departamentos` (`T02_CodDepartamento`, `T02_DescDepartamento`, `T02_FechaCreacionDepartamento`, `T02_VolumenDeNegocio`, `T02_FechaBajaDepartamento`) VALUES
('DAL', 'Departamento de alumnos', NULL, 0, '0001-01-01'),
('DCP', 'Departamento compras', NULL, 0, '0001-01-01'),
('DIN', 'Departamento de Informatica', NULL, 0, '0001-01-01'),
('DPF', 'Departamento de Profesores', NULL, 0, '0001-01-01'),
('DVN', 'Departamento ventas', NULL, 0, '0001-01-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `T01_Usuarios`
--
ALTER TABLE `T01_Usuarios`
  ADD PRIMARY KEY (`T01_CodUsuario`);

--
-- Indices de la tabla `T02_Departamentos`
--
ALTER TABLE `T02_Departamentos`
  ADD PRIMARY KEY (`T02_CodDepartamento`);
--
-- Base de datos: `DAW210_DBDepartamentos`
--
CREATE DATABASE IF NOT EXISTS `DAW210_DBDepartamentos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `DAW210_DBDepartamentos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento`
--

CREATE TABLE `Departamento` (
  `CodDepartamento` varchar(3) NOT NULL,
  `DescDepartamento` varchar(100) NOT NULL,
  `FechaDeBaja` date NOT NULL DEFAULT '0001-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Departamento`
--

INSERT INTO `Departamento` (`CodDepartamento`, `DescDepartamento`, `FechaDeBaja`) VALUES
('DAL', 'Departamento de alumnos', '2019-04-08'),
('DCP', 'Departamento compras', '0001-01-01'),
('DOR', 'Departamento de Ordenadores', '0001-01-01'),
('DPF', 'Departamento de Profesores', '0001-01-01'),
('DVN', 'Departamento ventas', '0001-01-01');
