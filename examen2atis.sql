--
-- Base de datos: `examen2atis`
--
drop database if exists examen2atis;
create database examen2atis;
use examen2atis;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `horario` enum('9:00-9:30','9:30-10:00','10:00-10:30','10:30-11:00','13:00:13:30','13:30-14:00','14:00-14:30','14:30-15:00','15:00-15:30','15:30-16:00') NOT NULL,
  `motivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `idUsuario`, `fecha`, `horario`, `motivo`) VALUES
(1, 2, '2021-09-29', '9:00-9:30', 'Dolor de espalda baja'),
(2, 2, '2021-09-29', '9:30-10:00', 'Problemas para respirar'),
(23, 7, '2021-10-01', '15:30-16:00', 'Problema para mover la mano'),
(24, 8, '2021-10-01', '13:30-14:00', 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(3) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `password` varchar(258) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `password`, `correo`, `rol`) VALUES
(1, 'admin', '12345', 'admin@gmail.com', 'Administrador'),
(2, 'roberto', 'roberto1', 'roberto@gmail.com', 'Paciente'),
(5, 'natalia', 'natalia', 'natalia@gmail.com', 'Paciente'),
(7, 'leonel', 'leonel', 'leonel@gmail.com', 'Paciente'),
(8, 'nicole', 'nicole', 'nicole@gmail.com', 'Paciente');

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
