-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.31 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para ditech_reservas
CREATE DATABASE IF NOT EXISTS `ditech_reservas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ditech_reservas`;

-- Copiando estrutura para tabela ditech_reservas.reserva
CREATE TABLE IF NOT EXISTS `reserva` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(50) DEFAULT NULL,
  `hora_final` varchar(50) DEFAULT NULL,
  `cpf_usuario` int(13) DEFAULT NULL,
  `data_reserva` varchar(50) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_sala` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ditech_reservas.reserva: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` (`id_reserva`, `horario`, `hora_final`, `cpf_usuario`, `data_reserva`, `status`, `id_sala`) VALUES
	(73, '15:42', '16:42', 8970050, '28/12/2020', '0', 8);
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;

-- Copiando estrutura para tabela ditech_reservas.sala
CREATE TABLE IF NOT EXISTS `sala` (
  `id_sala` int(11) NOT NULL AUTO_INCREMENT,
  `nome_sala` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Livre',
  PRIMARY KEY (`id_sala`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ditech_reservas.sala: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sala` DISABLE KEYS */;
INSERT INTO `sala` (`id_sala`, `nome_sala`, `numero`, `descricao`, `status`) VALUES
	(8, 'reuniÃ£o1', 1, 'sdsdsad', 'Livre'),
	(9, 'reuniÃ£o2', 2, 'sdsdsad', 'Livre'),
	(10, 'reuniÃ£o3', 3, 'sdsdsad', 'Livre');
/*!40000 ALTER TABLE `sala` ENABLE KEYS */;

-- Copiando estrutura para tabela ditech_reservas.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` int(11) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ditech_reservas.usuarios: 1 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_user`, `cpf`, `senha`, `nome`, `email`, `fone`) VALUES
	(26, 766616010, '12345', 'infomarcossartori@gmail.com', 'infomarcossartori@gmail.com', '5195732708'),
	(27, 8970050, '1234', 'root', 'root@gmail.com', '515132613289');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
