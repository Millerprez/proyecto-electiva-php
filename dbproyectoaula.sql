-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 05:23:07
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyectoaula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblarticulo`
--

CREATE TABLE `tblarticulo` (
  `id` varchar(2) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(4000) NOT NULL,
  `fkidtitulo` varchar(1) NOT NULL,
  `fkidcapitulo` varchar(1) NOT NULL,
  `fkidseccion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblarticulo`
--

INSERT INTO `tblarticulo` (`id`, `nombre`, `descripcion`, `fkidtitulo`, `fkidcapitulo`, `fkidseccion`) VALUES
('1', 'Objeto', 'La presente resolución tiene como objeto establecer los parámetros de autoevaluación, verificación y evaluación de cada Una de las condiciones institucionales definidas en el Decreto 1075 de 2015, modificado por el Decreto 1330 de 2019, las cuales deben ser demostradas integralmente en el marco de los procesos de solicitud y renovación del registro calificado de programas \r\nacadémicos de educación superior.', '1', '0', '0'),
('10', 'Información cualitativa y cuantitativa para mejorar el bienestar, la permanencia y graduación de los estudiantes.', 'La institución deberá conocer de los estudiantes que son admitidos el rendimiento académico, el desempeño en el Examen de Estado de la Educación Media, ICFES - SABER 11”, aspectos socioeconómicos y demás aspectos culturales que puedan incidir en el mejoramiento del bienestar, en el acompañamiento del proceso formativo, en la permanencia y en la graduación oportuna.', '2', '1', '1'),
('11', 'Evaluación, seguimiento y retroalimentación de los estudiantes', 'La institución deberá contar con políticas para la evaluación, el seguimiento y la retroalimentación a los estudiantes, en coherencia con el proceso formativo, los niveles y las modalidades en los que se ofrecen los programas académicos. Esto implica que las unidades académicas, o lo que haga sus veces, al igual que las empresas, entidades, organizaciones y demás entes que estén involucrados en las actividades académicas y en el proceso formativo, adopten dichas políticas y sean responsables de la evaluación, seguimiento y retroalimentación de los estudiantes.', '2', '1', '1'),
('12', 'Comunicación con estudiantes.', 'La institución deberá demostrar la existencia de medios de comunicación de fácil acceso a los estudiantes, en los cuales esté disponible la información necesaria para desarrollar las actividades académicas del proceso formativo. Además, deberá garantizar que la información que se le brinde a quien aspira a ser admitido en la institución sea clara y contenga, por lo menos: ', '2', '1', '1'),
('13', 'Evidencias e indicadores de los mecanismos que soportan la selección y evaluación de estudiantes.', 'Teniendo en cuenta los artículos precedentes de esta sección, la institución deberá presentar para el proceso formativo, por lo menos: ', '2', '1', '1'),
('14', 'Mecanismos que soportan la selección y evaluación de profesores.', 'La institución deberá proporcionar los criterios y argumentos que indiquen la forma en que los mecanismos de selección y evaluación de profesores son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional. Dichos mecanismos deberán estar incorporados en la normativa institucional  vigente en el momento en que la institución inicie la etapa de Pre radicación de solicitud de registro calificado y deberán estar aprobados por las instancias del  gobiemo institucional correspondientes. ', '2', '1', '2'),
('15', 'Características del grupo institucional de profesores.', 'La institución \r\ndeberá describir el grupo de profesores con el que cuenta, grupo que, por su dedicación, vinculación y disponibilidad, deberá cubrir, de manera consistente y armónica con su naturaleza jurídica, tipología, identidad y misión institucional, todas las labores académicas, formativas, docentes, cientificas, culturales y de extensión que desarrolle la institución,definidas en su proyecto educativo institucional, O lo que haga sus veces. Dicha descripción deberá incluir, por lo menos: ', '2', '1', '2'),
('16', 'Reglamento profesoral o su equivalente.', 'El reglamento profesoral o su equivalente y los demás documentos debidamente aprobados por las autoridades o instancias competentes de la institución deberán considerar los niveles de formación, las modalidades y los lugares diferentes a la institución donde se realicen las actividades propias del desarrollo como profesor. En coherencia y consistencia con la naturaleza jurídica, tipología, identidad y misión, el reglamento deberá ser claro y expreso, y contemplar por lo menos:', '2', '1', '2'),
('17', 'Mecanismos para la implementación de los planes institucionales \r\ny el desarrollo de actividades académicas.', 'La institución deberá contar, por lo menos, con los siguientes mecanismos que faciliten la implementación de los planes institucionales y el desarrollo de las actividades académicas: ', '2', '1', '2'),
('18', 'Evidencias e indicadores de los mecanismos que soportan la selección y evaluación de profesores.', 'Teniendo en cuenta los artículos precedentes de esta sección, la institución deberá presentar, por lo menos: ', '2', '1', '2'),
('19', 'Gobierno institucional y rendición de cuentas.', 'La institución deberá proporcionar los criterios y argumentos que indican la forma en que el gobierno institucional y la rendición de cuentas son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional. Dichos mecanismos deberán estar incorporados en la normativa institucional vigente al momento en que la institución inicie la etapa de Pre radicación y deberán estar aprobados por las instancias de gobiemo correspondientes.', '2', '2', '0'),
('2', 'Ámbito de aplicación', 'La presente resolución aplica al Ministerio de Educación Nacional, a la Comisión Nacional Intersectorial de Aseguramiento de la Calidad de la Educación Superior - Conaces, a los pares académicos que participan en los procesos de registro calificado, a las instituciones de educación superior y aquellas habilitadas por la ley para ofrecer y desarrollar programas académicos de educación superior.', '1', '0', '0'),
('20', 'Gobierno institucional.', 'La institución deberá establecer y demostrar la existencia de un gobierno institucional atendiendo su naturaleza jurídica, identidad, tipología y misión. Para ello, la institución deberá, por lo menos: ', '2', '2', '0'),
('21', 'Rendición de cuentas institucional.', 'La institución deberá establecer sus mecanismos de rendición de cuentas atendiendo su naturaleza jurídica, identidad, tipología y misión. Para ello, deberá indicar, a quiénes rendirá cuentas sobre el desempeño institucional, la periodicidad y los medios de difusión a utilizar, entre otros aspectos, teniendo en cuenta lo previsto en el Acuerdo 02 de 2017 del Consejo Nacional de Educación Superior - CESU.', '2', '2', '0'),
('22', 'Participación de la comunidad académica en procesos de toma de decisiones. ', 'Desde su autonomía y modelo de gobierno, y en coherencia con la naturaleza jurídica, tipología, identidad, misión, estatutos y demás reglamentos, la institución deberá demostrar los espacios de participación de la comunidad académica en los procesos de toma de decisiones. ', '2', '2', '0'),
('23', 'Políticas institucionales.', 'Hace referencia al marco normativo complementario a los estatutos. La institución deberá exponer las instancias competentes y los procedimientos institucionales que se deben adelantar para la formulación, aprobación, comunicación y actualización de los reglamentos intemos, así como el seguimiento a su cumplimiento y los medios dispuestos para que la comunidad académica tenga claridad de dichas instancias y procedimientos.', '2', '2', '0'),
('24', 'Políticas académicas asociadas a currículo, resultados de aprendizaje, créditos y actividades.', 'Teniendo en cuenta los distintos niveles formativos y modalidades ofrecidas por la institución, y en coherencia con su naturaleza jurídica, identidad, tipología y misión, las políticas académicas deberán, por lo menos: ', '2', '2', '0'),
('25', 'Políticas de gestión institucional y bienestar.', 'Teniendo en cuenta los distintos niveles formativos y modalidades ofrecidas por la institución, en coherencia con su naturaleza jurídica, identidad, tipología y misión, las políticas de gestión institucional y bienestar deberán, orientar como mínimo los siguientes aspectos: ', '2', '2', '0'),
('26', 'Políticas de investigación, innovación, creación artística y cultural.', 'Teniendo en cuenta los distintos niveles formativos y modalidades ofrecidas por la institución, en coherencia con su naturaleza jurídica, identidad, tipología y misión, las políticas de investigación, innovación, creación artística y cultural estarán encaminadas a fomentar, fortalecer y desarrollar la ciencia, tecnología e innovación, contribuyendo así a la transformación social del país. En consecuencia, la institución deberá, por lo menos, indicar:', '2', '2', '0'),
('3', 'Condiciones institucionales de calidad.', 'De conformidad con las disposiciones de la Ley 1188 de 2008 y del Decreto 1075 de 2015, modificado por el Decreto 1330 de 2019, las condiciones de calidad institucionales establecidas para la obtención y renovación del registro calificado son:', '1', '0', '0'),
('4', 'Evidencias', 'Cada una de las condiciones institucionales que se \r\ndesarrolla en esta resolución, comprende un conjunto de evidencias que son el respaldo para la verificación y evaluación de las instituciones en el proceso de obtención y renovación del registro calificado, sirviendo así para el cumplimiento de las funciones de los pares académicos y de la Comisión Nacional Intersectorial de Aseguramiento de la Calidad de la Educación Superior - Conaces.', '1', '0', '0'),
('5', 'Autoevaluación', 'En los trámites asociados con el registro calificado, las instituciones deberán desarrollar, en el marco de su sistema interno de aseguramiento de la calidad, las estrategias que proporcionen los instrumentos, la información y los espacios de interacción con la comunidad académica, necesarios para soportar el cumplimiento de las condiciones institucionales y de programa', '1', '0', '0'),
('6', 'Mecanismos de selección y evaluación de estudiantes y profesores', 'De acuerdo con su naturaleza jurídica, tipología, identidad y misión, la institución deberá contar con políticas, normas, procesos, medios y demás componentes que considere necesarios para la selección y evaluación de estudiantes y profesores', '2', '1', '0'),
('7', 'Mecanismos de selección y evaluación de estudiantes', 'La institución deberá proporcionar los criterios y argumentos que indiquen la forma en que los mecanismos de selección y evaluación de estudiantes son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional. Dichos mecanismos deberán estar incorporados en la normativa institucional vigente en el momento en que la institución inicie la etapa de Pre radicación de solicitud de registro calificado y deberán estar aprobados por las instancias de gobierno correspondientes', '2', '1', '1'),
('8', 'Reglamento estudiantil o su equivalente', 'El reglamento estudiantil o su equivalente deberá considerar los niveles de formación y las modalidades en las que oferta sus programas. En coherencia y consistencia con la naturaleza jurídica, misión, identidad y tipología, el reglamento deberá ser claro y expreso, y contemplar por lo menos: ', '2', '1', '1'),
('9', 'Políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes.', 'La institución deberá definir las políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes, demostrando que están articuladas a los medios, procesos y acciones requeridos para tal fin.', '2', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblautor`
--

CREATE TABLE `tblautor` (
  `id` varchar(10) NOT NULL,
  `pkidpersona` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblautor`
--

INSERT INTO `tblautor` (`id`, `pkidpersona`) VALUES
('1', '10178548');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcapitulo`
--

CREATE TABLE `tblcapitulo` (
  `id` varchar(1) NOT NULL,
  `condicion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcapitulo`
--

INSERT INTO `tblcapitulo` (`id`, `condicion`) VALUES
('0', 'NA'),
('1', 'MECANISMOS DE SELECCIÓN Y EVALUACIÓN DE ESTUDIANTES Y PROFESORES'),
('2', 'ESTRUCTURA ADMINISTRATIVA Y ACADÉMICA'),
('3', 'CULTURA DE LA AUTOEVALUACIÓN'),
('4', 'PROGRAMA DE EGRESADOS'),
('5', 'MODELO DE BIENESTAR'),
('6', 'RECURSOS SUFICIENTES PARA GARANTIZAR EL CUMPLIMIENTO DE LAS METAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblevidencia`
--

CREATE TABLE `tblevidencia` (
  `id` varchar(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `CONDICION` varchar(1) NOT NULL,
  `fkidnumeral` varchar(4) NOT NULL,
  `fkidparagrafo` varchar(3) NOT NULL,
  `fkidautor` varchar(10) NOT NULL,
  `FECHA` varchar(50) NOT NULL,
  `CORDENADA_X` varchar(100) NOT NULL,
  `CORDENADA_Y` varchar(100) NOT NULL,
  `OBSERVACION` varchar(100) NOT NULL,
  `ESTADO` varchar(50) NOT NULL,
  `NOMBRE_EVIDENCIA` varchar(100) NOT NULL,
  `ESTADO_LOGICO` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblevidencia`
--

INSERT INTO `tblevidencia` (`id`, `titulo`, `CONDICION`, `fkidnumeral`, `fkidparagrafo`, `fkidautor`, `FECHA`, `CORDENADA_X`, `CORDENADA_Y`, `OBSERVACION`, `ESTADO`, `NOMBRE_EVIDENCIA`, `ESTADO_LOGICO`) VALUES
('123', 'Prueba Final', 'a', '4c13', '110', '10178548', '2022-10-29', '123', '123', 'Prueba Final', 'ACTIVA', '../archivos/10-29-22-06-12-01-Modelo_PesasBiomcanica.pdf', 'ACTIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblliteral`
--

CREATE TABLE `tblliteral` (
  `id` varchar(3) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fkidarticulo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblliteral`
--

INSERT INTO `tblliteral` (`id`, `descripcion`, `fkidarticulo`) VALUES
('a12', 'Deberes y derechos de los estudiantes.', '12'),
('a13', 'Documento(s) con los criterios y argumentos que identifican la forma en que los mecanismos de selección y evaluación de estudiantes son coherentes con la naturaleza jurídica, tipología, identidad y mi', '13'),
('a15', ' Los procesos institucionales para definir, evaluar y actualizar los perfiles institucionales de los profesores, acorde con los programas académicos, niveles y modalidades ofrecidos, y todas las labor', '15'),
('a16', 'Derechos, deberes y obligaciones de los profesores.', '16'),
('a17', 'Estrategias para la comunicación clara y oportuna sobre la forma de contratación, las condiciones de la vinculación(naturaleza y el plazo inicial) y la dedicación de los profesores y, cuando correspon', '17'),
('a18', 'Documento(s) con los criterios y argumentos que indican la forma en que los mecanismos de selección y evaluación de profesores son coherentes con la naturaleza jurídica, tipología, identidad y misión ', '18'),
('a20', 'Definir el modelo de gobierno institucional, que incluya:', '20'),
('a24', 'En cuanto al currículo: establecer las directrices que respondan a la misión institucional en las que señale, al menos: los principios básicos de diseño del contenido curricular y de las actividades a', '24'),
('a25', 'La gestión de la comunidad institucional.', '25'),
('a26', 'La declaración institucional expresa de su énfasis de investigación, iinovación o creación artística y cultural, y su relación con sus labores formativas, académicas, docentes, científicas, culturales', '26'),
('a3', 'Mecanismos de selección y evaluación de estudiantes y profesores', '3'),
('a8', 'Derechos y deberes de los estudiantes', '8'),
('b12', 'Costos asociados al proceso formativo que incluyan: el valor de la matrícula y los demás derechos pecuniarios que por razones académicas puedan ser cobrados por la institución.', '12'),
('b13', 'Reglamento estudiantil o su equivalente. ', '13'),
('b15', 'El plan vigente de vinculación y dedicación institucional de los profesores, soportado en los recursos financieros requeridos, de acuerdo con el desarrollo institucional previsto en términos de la cif', '15'),
('b16', 'Criterios, requisitos y procesos para la selección, vinculación, otorgamiento de distinciones y estímulos, evaluación de desempeño y desvinculación de los profesores, orientados bajo principios de tra', '16'),
('b17', 'Procesos para la inducción de los profesores a las labores académicas, docentes, formativas, científicas, culturales y de extensión, en coherencia con la naturaleza jurídica, tipología, identidad y mi', '17'),
('b18', 'Descripción de los procesos institucionales para definir, evaluar y actualizar los perfiles profesorales.', '18'),
('b20', 'Formular el proyecto educativo institucional o el que haga sus veces.', '20'),
('b24', 'En cuanto a resultados de aprendizaje: establecer las definiciones conceptuales y los procesos de validación y aprobación de los mismos, en donde se indique por lo menos, la forma en que la institució', '24'),
('b25', 'El alcance de los conceptos de equidad, diversidad e inclusión.', '25'),
('b26', 'Las directrices para la promoción de la ética de la investigación, innovación, o creación artística y cultural y su práctica responsable.', '26'),
('b3', 'Estructura administrativa y académica', '3'),
('b8', 'Condiciones para obtener distinciones e incentivos', '8'),
('c12', 'Las políticas sobre reingresos, retiros, cambios de programas u otros que impliquen alguna decisión institucional al respecto.', '12'),
('c13', 'Evidencia del cumplimiento del reglamento estudiantil o su equivalente, respecto a: ', '13'),
('c16', 'Criterios para establecer la dedicación, disponibilidad y permanencia de los profesores que desarrollen las labores formativas, académicas, docentes, científicas, culturales y de extensión, y para aqu', '16'),
('c17', 'Procesos de seguimiento al análisis y valoración periódica de la asignación de las actividades de los profesores a nivel institucional, con la posibilidad de poder ajustarlas a medida que cambien las ', '17'),
('c18', 'Perfiles institucionales de los profesores.', '18'),
('c20', 'Contar con procesos para la aprobación de cambios que tengan implicaciones en la identidad, tipología y misión institucional.', '20'),
('c24', 'En cuanto a créditos y actividades académicas: establecer las directrices a nivel institucional para la definición de la relación entre las horas de interacción con el profesor y las horas de trabajo ', '24'),
('c25', 'La gestión y asignación de los recursos institucionales para el desarrollo de políticas de bienestar.', '25'),
('c26', 'Las directrices para la promoción de un ambiente para el desarrollo de la ciencia, la tecnología, la innovación o la creación artística y cultural', '26'),
('c3', 'Cultura de la autoevaluación', '3'),
('c8', 'Políticas, criterios, requisitos y procesos de inscripción, admisión, ingreso, reingreso, transferencias, matrícula y evaluación', '8'),
('d12', 'Trabajo académico autónomo del estudiante y de interacción con el profesor, representado en créditos académicos.', '12'),
('d13', 'Políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes', '13'),
('d16', 'Condiciones para apropiar y desplegar la cultura de la autoevaluación.', '16'),
('d17', 'Programas de desarrollo de competencias pedagógicas, tecnológicas y de investigación, innovación y/o creación artística y cultural, de acuerdo con los niveles de formación y las modalidades ofertadas,', '17'),
('d18', 'Descripción del grupo profesoral vigente que incluya información de su composición respecto a dedicación, vinculación y disponibilidad.', '18'),
('d20', 'Contar con procesos para soportar el sistema interno de aseguramiento de la calidad y planeación institucional.', '20'),
('d25', 'El desarrollo de actividades culturales, deportivas, de salud mental y física, y demás dirigidas a toda la comunidad académica e institucional.', '25'),
('d26', 'Las directrices para la disposición de recursos humanos, tecnológicos y financieros en el dosarrollo de la investigación, innovación o la creación artística y cultural, en coherencia con los programas', '26'),
('d3', 'Programa de egresados', '3'),
('d8', 'Régimen disciplinario', '8'),
('e12', 'Políticas o lo que haga sus veces, sobre evaluación y permanencia.', '12'),
('e13', 'Evidencia de los requisitos y criterios para los procesos de inscripción, admisión, \r\ningreso, matrícula, evaluación y graduación de estudiantes.', '13'),
('e16', 'Trayectoria profesoral, o lo que haga sus veces, indicando los criterios para la vinculación, promoción, definición de categorías, retiro y demás situaciones administrativas.', '16'),
('e17', 'Sistema de seguimiento, evaluación y retroalimentación a los profesores, en coherencia con las labores formativas, docentes, académicas, científicas, culturales y de extensión, y con el nivel y las mo', '17'),
('e18', 'Proyecciones, para los próximos 7 años, del plan de vinculación y dedicación institucional de los profesores.', '18'),
('e25', 'El desarrollo de actividades de gestión necesarias para cumplir los propósitos institucionales. ', '25'),
('e26', 'La realamentación de propiedad intelectual.', '26'),
('e3', 'Modelo de bienestar', '3'),
('e8', 'Homologación y reconocimiento de aprendizajes entre programas de la misma institución o de otras instituciones (nacionales y/o extranjeras)', '8'),
('f12', 'Requisitos de grado.', '12'),
('f13', 'Información cualitativa y cuantitativa para mejorar el bienestar, la permanencia \r\ny la graduación de los estudiantes en la institución.', '13'),
('f16', 'Impedimentos, inhabilidades, incompatibilidades, conflicto de intereses y \r\nrégimen disciplinario.', '16'),
('f18', 'Reglamento profesoral o su equivalente.', '18'),
('f26', 'La roquiación de convenios y asociaciones relacionadas con el desarrollo de la investigación, innovación o creación artística y cultural.', '26'),
('f3', 'Recursos suficientes para garantizar el cumplimiento de las metas', '3'),
('f8', 'Requisitos de grado', '8'),
('g12', 'Estrategias de acompañamiento en su proceso formativo que involucre temas académicos u otros que la institución provea para el desarrollo de los estudiantes.', '12'),
('g13', 'Retroalimentación a los estudiantes e implementación de acciones basadas en \r\nlas evaluaciones establecidas.', '13'),
('g16', 'Todo aquello que, desde la naturaleza jurídica, tipología, identidad y misión \r\ninstitucional, tenga implicaciones en el desarrollo profesoral.', '16'),
('g18', 'Descripción de los procesos de selección, vinculación, desarrollo y desvinculación de los profesores.', '18'),
('g26', 'Las directrices generales para el registro de publicaciones y resultados de investigación, innovación o creación artistica y cultural, en los sistemas de información institucional, nacional e internac', '26'),
('h12', 'Servicios de apoyo al estudiante, en coherencia con los niveles y las modalidades ofrecidas, y otros que promuevan su permanencia y graduación.', '12'),
('h13', 'Estudios que permitan implementar acciones frente a la deserción por cohorte \r\ny por periodo.', '13'),
('h18', 'Evidencia del cumplimiento de las directrices del reglamento profesoral o su equivalente y los demás documentos debidamente aprobados por las autoridades o instancias competentes de la institución, re', '18'),
('i13', 'Descripción de los procesos para garantizar que la información entregada y \r\npublicada sea veraz, confiable, accesible y oportuna.', '13'),
('i18', 'Evidencia del uso de medios de comunicación con los profesores que les permita conocer sus deberes y derechos.', '18'),
('j13', 'Seguimiento a los resultados de los procesos de inscripción, admisión, ingreso, matrícula, evaluación y graduación de estudiantes, y análisis de los mismos a la luz de la naturaleza jurídica, tipologí', '13'),
('j18', 'Descripción de los procesos de inducción profesoral.', '18'),
('k13', 'Descripción de los mecanismos que permitan verificar y asegurar que la identidad de quien cursa el programa corresponda a la del estudiante matriculado.', '13'),
('k18', 'Descripción de los procesos de seguimiento al análisis y valoración periódica de la asignación a las actividades de los profesores.', '18'),
('l18', 'Descripción de los programas de desarrollo de competencias pedagógicas, tecnológicas y de investigación, innovación y/o creación artística y cultural.', '18'),
('m18', 'Resultados de la implementación de los programas de desarrollo profesoral.', '18'),
('n18', 'Descripción del sistema de seguimiento, evaluación y retroalimentación a los profesores', '18'),
('o18', 'Resultado de la última evaluación y retroalimentación realizada a los profesores.', '18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnumeral`
--

CREATE TABLE `tblnumeral` (
  `id` varchar(4) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fkidliteral` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblnumeral`
--

INSERT INTO `tblnumeral` (`id`, `descripcion`, `fkidliteral`) VALUES
('1a20', 'Definición de los órganos de gobierno y sus respectivas funciones.', 'a12'),
('1c13', 'Derechos y deberes de los estudiantes.', 'c13'),
('1h18', 'Deberes, derechos y obligaciones.', 'j13'),
('2a20', 'Definición de los demás órganos colegiados y sus atribuciones.', 'a12'),
('2c13', 'Condiciones para obtener distinciones e incentivos.', 'c13'),
('2h18', 'Criterios, requisitos y procesos para la selección, vinculación, otorgamiento de distinciones y estímulos, evaluación de desempeño y desvinculación.', 'j13'),
('3a20', 'Definición del quorum en los órganos decisorios.', 'a12'),
('3c13', 'Políticas, criterios, requisitos y procesos de inscripción, admisión, ingreso, reingreso, transferencias, matrícula y evaluación.', 'c13'),
('3h18', 'Criterios de dedicación, disponibilidad y permanencia.', 'j13'),
('4a20', 'Definición de las funciones, periodo y forma de elección del rector o rectores y vicerrectores, o los cargos equivalentes. ', 'a12'),
('4c13', 'Régimen disciplinario.', 'c13'),
('4h18', 'Participación en procesos de autoevaluación.', 'h18'),
('5a20', 'Delegaciones de funciones directivas, cuando aplique.', 'a12'),
('5c13', 'Homologación y reconocimiento de aprendizajes entre programas de misma institución o de otras instituciones (nacionales y/o extranjeras).', 'c13'),
('5h18', 'Trayectoria profesoral, o lo que haga sus veces.', 'h18'),
('6c13', 'Requisitos de grado.', 'c13'),
('6h18', 'impedimentos, inhabilidades, incompatibilidades y conflicto de intereses.', 'h18'),
('7h18', 'Régimen disciplinario.', 'h18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblparagrafo`
--

CREATE TABLE `tblparagrafo` (
  `id` varchar(3) NOT NULL,
  `descripcion` varchar(4000) NOT NULL,
  `fkidarticulo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblparagrafo`
--

INSERT INTO `tblparagrafo` (`id`, `descripcion`, `fkidarticulo`) VALUES
('110', 'La institución deberá establecer procesos y medios orientados a la mejora del desempeño académico y la formación integral del estudiante, que le permita el tránsito de la educación secundaria o media a la educación superior, tomando como insumo la información cualitativa y cuantitativa de los estudiantes.', '10'),
('111', 'La institución deberá contar con mecanismos que permitan verificar y asegurar que la identidad de quien cursa el programa corresponda a la del estudiante matriculado.', '11'),
('113', 'Las evidencias indicadas en los literales c), e), f), 9), h), y j) del presente artículo solo deberán ser presentadas por las instituciones que estén ofreciendo al menos un programa al momento de comenzar la etapa de Pre radicación de solicitud de registro calificado.', '13'),
('117', 'Cuando la modalidad del programa implique el desarrollo de actividades académicas, formativas y docentes a cargo de empresas, entidades, organizaciones u otros entes que se vinculan al proceso formativo, la institución eberá especificar la forma de seguimiento y evaluación de sus actividades.', '17'),
('118', 'Las evidencias indicadas en los literales d), g), i), m) y o) del presente artículo solo deberán ser presentadas por las instituciones que estén ofreciendo al menos un un programa académico al momento de iniciar la etapa de Pre radicación de solicitud de registro calificado.', '18'),
('12', 'Para todos los efectos de la presente resolución, se entiende por “institución” o “instituciones”, las instituciones de educación superior y aquellas habilitadas por la ley para la oferta y desarrollo de programas académicos de educación superior. ', '2'),
('124', 'Para la definición de la relación entre las horas de interacción con el profesor y las horas de trabajo independiente, la institución deberá considerar los niveles de formación, las modalidades de ofrecimiento y las semanas con las que cuentan los periodos académicos con el fin de establecer la equivalencia y cumplir las 48 horas establecidas en el artículo 2.5.3.2.4.1 del Decreto 1075 de 2015, modificado por el Decreto 1330 de 2019.', '24'),
('18', 'Cuando la institución desarrolle actividades con entidades, empresas, organizaciones u otros entes que participen en el plan de estudios o faciliten espacios de práctica requeridos en el mismo, el reglamento deberá definir las políticas y criterios de admisión, permanencia y evaluación, teniendo en consideración dicho asocio y de acuerdo con los resultados de aprendizaje esperados.', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpersona`
--

CREATE TABLE `tblpersona` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblpersona`
--

INSERT INTO `tblpersona` (`id`, `nombre`, `cedula`, `correo`, `estado`) VALUES
('1', 'Duvan Martinez', '10178548', 'duvan@gmail.com', 'ACTIVO'),
('2', 'Miller Perez', '85974', 'mill@gmail.com', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblseccion`
--

CREATE TABLE `tblseccion` (
  `id` varchar(1) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblseccion`
--

INSERT INTO `tblseccion` (`id`, `titulo`) VALUES
('0', 'NA'),
('1', 'MECANISMOS DE SELECCIÓN Y EVALUACIÓN DE ESTUDIANTES'),
('2', 'MECANISMOS DE SELECCIÓN Y EVALUACIÓN DE PROFESORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltitulo`
--

CREATE TABLE `tbltitulo` (
  `id` varchar(1) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltitulo`
--

INSERT INTO `tbltitulo` (`id`, `nombre`) VALUES
('1', 'OBJETO, ÁMBITO DE APLICACIÓN Y GENERALIDADES'),
('2', 'DE LAS CONDICIONES INSTITUCIONALES'),
('3', 'DE LA RENOVACIÓN DE CONDICIONES INSTITUCIONALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `id` varchar(50) NOT NULL,
  `fkidPersona` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`id`, `fkidPersona`, `clave`, `tipo_usuario`) VALUES
('1', '85974', '7895', '2'),
('2', '10178548', '123', '1'),
('3', '10178548', '123', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
('1', 'ADMIN'),
('2', 'Auditor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblarticulo`
--
ALTER TABLE `tblarticulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblarticulo_tbltiyulo1` (`fkidtitulo`),
  ADD KEY `fk_tblarticulo_tblcapitulo1` (`fkidcapitulo`),
  ADD KEY `fk_tblarticulo_tblseccion1` (`fkidseccion`);

--
-- Indices de la tabla `tblautor`
--
ALTER TABLE `tblautor`
  ADD PRIMARY KEY (`pkidpersona`);

--
-- Indices de la tabla `tblcapitulo`
--
ALTER TABLE `tblcapitulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblevidencia`
--
ALTER TABLE `tblevidencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblevidencia_tblnumeral` (`fkidnumeral`),
  ADD KEY `fk_tblevidencia_tblparagrafo` (`fkidparagrafo`),
  ADD KEY `fk_tblevidencia_tblautor` (`fkidautor`);

--
-- Indices de la tabla `tblliteral`
--
ALTER TABLE `tblliteral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblliteral_tblarticulo1` (`fkidarticulo`);

--
-- Indices de la tabla `tblnumeral`
--
ALTER TABLE `tblnumeral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblnumeral_tblliteral1` (`fkidliteral`);

--
-- Indices de la tabla `tblparagrafo`
--
ALTER TABLE `tblparagrafo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblparagrafo_tblarticulo1` (`fkidarticulo`);

--
-- Indices de la tabla `tblpersona`
--
ALTER TABLE `tblpersona`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `tblseccion`
--
ALTER TABLE `tblseccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbltitulo`
--
ALTER TABLE `tbltitulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblusuario_tblpersona` (`fkidPersona`),
  ADD KEY `fk_tblusuario_tipo_usuario` (`tipo_usuario`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblarticulo`
--
ALTER TABLE `tblarticulo`
  ADD CONSTRAINT `fk_tblarticulo_tblcapitulo1` FOREIGN KEY (`fkidcapitulo`) REFERENCES `tblcapitulo` (`id`),
  ADD CONSTRAINT `fk_tblarticulo_tblseccion1` FOREIGN KEY (`fkidseccion`) REFERENCES `tblseccion` (`id`),
  ADD CONSTRAINT `fk_tblarticulo_tbltiyulo1` FOREIGN KEY (`fkidtitulo`) REFERENCES `tbltitulo` (`id`);

--
-- Filtros para la tabla `tblautor`
--
ALTER TABLE `tblautor`
  ADD CONSTRAINT `fk_tblautor_tblpersona` FOREIGN KEY (`pkidpersona`) REFERENCES `tblpersona` (`cedula`);

--
-- Filtros para la tabla `tblevidencia`
--
ALTER TABLE `tblevidencia`
  ADD CONSTRAINT `fk_tblevidencia_tblautor` FOREIGN KEY (`fkidautor`) REFERENCES `tblautor` (`pkidpersona`),
  ADD CONSTRAINT `fk_tblevidencia_tblnumeral` FOREIGN KEY (`fkidnumeral`) REFERENCES `tblnumeral` (`id`),
  ADD CONSTRAINT `fk_tblevidencia_tblparagrafo` FOREIGN KEY (`fkidparagrafo`) REFERENCES `tblparagrafo` (`id`);

--
-- Filtros para la tabla `tblliteral`
--
ALTER TABLE `tblliteral`
  ADD CONSTRAINT `fk_tblliteral_tblarticulo1` FOREIGN KEY (`fkidarticulo`) REFERENCES `tblarticulo` (`id`);

--
-- Filtros para la tabla `tblnumeral`
--
ALTER TABLE `tblnumeral`
  ADD CONSTRAINT `fk_tblnumeral_tblliteral1` FOREIGN KEY (`fkidliteral`) REFERENCES `tblliteral` (`id`);

--
-- Filtros para la tabla `tblparagrafo`
--
ALTER TABLE `tblparagrafo`
  ADD CONSTRAINT `fk_tblparagrafo_tblarticulo1` FOREIGN KEY (`fkidarticulo`) REFERENCES `tblarticulo` (`id`);

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `fk_tblusuario_tblpersona` FOREIGN KEY (`fkidPersona`) REFERENCES `tblpersona` (`cedula`),
  ADD CONSTRAINT `fk_tblusuario_tipo_usuario` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
