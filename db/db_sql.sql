-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.21 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para unefa_challenge
CREATE DATABASE IF NOT EXISTS `unefa_challenge` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `unefa_challenge`;

-- Volcando estructura para tabla unefa_challenge.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla unefa_challenge.categories: 4 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Informatica'),
	(2, 'Matematica'),
	(3, 'Fisica'),
	(4, 'Psicologia');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla unefa_challenge.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `answer` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla unefa_challenge.questions: 19 rows
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `category_id`, `question`, `answer`) VALUES
	(3, 1, 'POE es un dispositivo de almacenamiento en la red', 0),
	(4, 1, 'Ethernet es un protocolo avanzado para la recoleccion de datos en mysql', 0),
	(5, 1, 'SQL es un lenguaje estructurado para consultar datos', 1),
	(6, 1, 'PhpMyAdmin es un Sistema Manejador de Bases de Datos', 0),
	(7, 1, 'Javascript es un lenguaje basado en Java', 0),
	(8, 1, 'Java es un lenguaje de programacion orientado a objetos', 1),
	(9, 1, 'La resolucion 1080p tiene una dimension de pantalla de 1080x1820', 0),
	(10, 1, 'JSON es una tecnica propia de Javascript para crear arrays indexados', 0),
	(11, 1, 'PHP es un lenguaje compilado', 0),
	(12, 1, 'SQL Server es un lenguaje de programación', 0),
	(13, 1, 'Las redes son LAN redes de pequeña extensión', 1),
	(14, 1, 'Un punto de acceso es un dispositivo de red que interconecta equipos de comunicación inalámbricos', 1),
	(15, 1, 'El mouse es un dispositivo apuntador utilizado para facilitar el manejo de un entorno gráfico en una computadora', 1),
	(16, 1, 'Los Host virtuales son programas que permiten compartir recursos entre terminales', 0),
	(18, 1, 'Hola que tal soy el chico de las poesias ', 1),
	(25, 3, 'Para toda particula en movimiento se cumple Ec + Ep= constante', 1),
	(24, 3, 'La velocidad de la luz es la mas rapida mas del universo', 1),
	(26, 3, ' Si una particula describe trayectoria circular su aceleracion normal es constante ', 1),
	(27, 3, 'La física es la Ciencia que estudia la composición y las propiedades de la materia y de las transformaciones que esta experimenta sin que se alteren los elementos que la forman.', 0),
	(28, 3, 'Galileo Galilei fue un astrónomo, filósofo, ingeniero, matemático y físico italiano, relacionado estrechamente con la revolución científica. ', 1),
	(29, 3, 'La relatividad trata los procesos de transferencia de calor, que es una de las formas de energía, y cómo se puede realizar un trabajo con ella. En esta área se describe cómo la materia en cualquiera de sus fases (sólido, líquido, gaseoso) va transformándose.', 0),
	(30, 3, 'La relatividad es la teoría formulada principalmente por Albert Einstein a principios del siglo XX, y se divide en dos cuerpos de investigación: la relatividad especial y la relatividad general.', 1),
	(31, 3, 'La mecánica cuántica es la rama de la física que trata los sistemas atómicos y subatómicos, y sus interacciones con la radiación electromagnética, en términos de cantidades observables. ', 1),
	(32, 3, 'Louis-Victor de Broglie Fue galardonado en 1929 con el Premio Nobel de Física, por su descubrimiento de la naturaleza ondulatoria del electrón, conocida como hipótesis de Broglie. También recibió la Legión de Honor, en 1961 fue nombrado Caballero de la Gran Cruz de la Legión de Honor.', 1),
	(33, 3, 'En la mecánica clásica en general se tienen tres aspectos invariantes: el tiempo es absoluto, la naturaleza realiza de forma espontánea la mínima acción y la concepción de un universo determinado.', 1),
	(34, 3, 'El electromagnetismo es una formulación matemática abstracta sobre la mecánica; nos permite desligarnos de esos sistemas de referencia privilegiados y tener conceptos más generales al momento de describir un movimiento con el uso del cálculo de variaciones.', 0),
	(35, 3, 'La astrofísica y la astronomía son ciencias que aplican las teorías y métodos de otras ramas de la física al estudio de los objetos que componen nuestro variado universo, tales como estrellas, planetas, galaxias y agujeros negros. ', 1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Volcando estructura para tabla unefa_challenge.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla unefa_challenge.users: 5 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `score`) VALUES
	(1, 'administrador', 0),
	(17, 'russianVEX', 0),
	(18, 'Arentus', 0),
	(19, 'Himself', 0),
	(20, 'are', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
