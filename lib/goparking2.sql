/*
 Navicat MySQL Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100331
 Source Host           : 127.0.0.1:3306
 Source Schema         : goparking2

 Target Server Type    : MariaDB
 Target Server Version : 100331
 File Encoding         : 65001

 Date: 15/11/2021 15:42:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `fecha_actualizar` datetime DEFAULT NULL,
  `recuperar_clave` tinyint(1) DEFAULT 0,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `tipo_documento` (`id_tipo_documento`),
  KEY `rol` (`id_rol`),
  CONSTRAINT `rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  CONSTRAINT `tipo_documento` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cliente
-- ----------------------------
BEGIN;
INSERT INTO `cliente` VALUES (1, '233223', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 22:59:43', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (2, '233223', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 23:01:32', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (3, '233223', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 23:02:26', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (4, '233223', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 23:12:29', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (5, '233223', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 23:12:55', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (6, '233225', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 23:13:03', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (7, '233225', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 22:03:16', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (8, '2332256', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 22:14:47', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (9, '8', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 22:21:43', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (10, '2332256433', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 23:17:20', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (11, '23', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 23:18:08', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (12, '111111', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 23:19:31', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (13, '1111112', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 23:20:11', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (14, '11111189', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 23:20:46', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (15, '333366', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-29 23:22:40', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (16, '3333663', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-02 19:23:10', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (17, '33336632', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-02 19:23:37', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (18, '2332253432', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-02 19:25:31', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (19, '1458745', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-02 19:34:17', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (20, '123456789', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-02 19:42:44', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (21, '123456', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-02 20:14:19', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (22, '98745', 'Aadad', 'Adadad', 'ad@dasd.com', '2312321', 1, 1, '2021-11-02 20:43:47', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (23, '1025874544', 'Jorge', 'Rangel', 'jorge@jorge.com', '1236313', 1, 3, '2021-11-03 18:07:38', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (24, '456456465', 'Prueba', 'Prueba', 'prueba@prueba.com', '41546465', 1, 1, '2021-11-03 18:13:28', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (25, '45784578', 'Pepa', 'Pepa', 'pepa@pepa.com', '464569645645', 1, 3, '2021-11-03 18:43:16', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (26, '102247847', 'Pepu', 'Pupe', 'pepe@pepe.com', '4545454545', 1, 3, '2021-11-03 18:55:31', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (27, '1128', 'Prueba', 'Prueba', '10287978', '23123213', 1, 1, '2021-11-03 19:58:20', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (28, '123345432', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-11 20:09:23', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (29, '10222', 'Prueba', 'Prueba', 'jddh@jdddh.com', '123322', 1, 1, '2021-11-11 20:11:58', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (30, '1234566', 'Pepe', 'Pepe', 'jojo@jojo.com', '234556', 1, 1, '2021-11-11 20:35:34', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (31, '9999', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-11 22:05:21', NULL, NULL, 0, 2);
INSERT INTO `cliente` VALUES (32, '1022923', 'jorge', 'rangel', 'jorge.rangel@goparking.com', '3012784321', 1, 1, '2021-11-13 16:36:10', 'Nacngo1kro', '2021-11-14 15:41:42', 0, 1);
INSERT INTO `cliente` VALUES (33, '11231312', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-13 16:58:46', '', NULL, 0, 2);
INSERT INTO `cliente` VALUES (34, '2131313131', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-13 17:00:10', 'gQdl2V5t1D', NULL, 0, 2);
INSERT INTO `cliente` VALUES (35, '21313', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-13 17:01:19', 'Nacngo1kro', NULL, 0, 2);
COMMIT;

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of log
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for registro_tiempo
-- ----------------------------
DROP TABLE IF EXISTS `registro_tiempo`;
CREATE TABLE `registro_tiempo` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `tiempo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_registro`),
  KEY `cliente` (`id_cliente`),
  KEY `vehiculo` (`id_vehiculo`),
  CONSTRAINT `cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `vehiculo` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of registro_tiempo
-- ----------------------------
BEGIN;
INSERT INTO `registro_tiempo` VALUES (1, 3, NULL, '2021-10-28 23:45:08', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (2, 3, NULL, '2021-10-28 23:51:46', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (3, 3, NULL, '2021-10-28 23:52:08', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (4, 8, NULL, '2021-10-29 22:39:12', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (5, 8, NULL, '2021-10-29 22:39:52', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (6, 8, NULL, '2021-10-29 23:02:12', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (7, 8, NULL, '2021-10-29 23:02:34', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (8, 8, NULL, '2021-10-29 23:02:52', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (9, 8, NULL, '2021-10-29 23:02:57', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (10, 8, NULL, '2021-10-29 23:04:27', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (11, 8, NULL, '2021-10-29 23:05:21', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (12, 8, NULL, '2021-10-29 23:05:48', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (13, 8, NULL, '2021-10-29 23:06:07', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (14, 8, NULL, '2021-10-29 23:08:12', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (16, 12, NULL, '2021-10-29 23:19:31', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (17, 13, NULL, '2021-10-29 23:20:11', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (18, 14, NULL, '2021-10-29 23:20:46', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (19, 15, NULL, '2021-10-29 23:22:40', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (20, 16, NULL, '2021-11-02 19:23:10', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (21, 17, NULL, '2021-11-02 19:23:37', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (22, 18, NULL, '2021-11-02 19:25:31', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (23, 19, NULL, '2021-11-02 19:34:17', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (24, 20, NULL, '2021-11-02 19:42:44', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (25, 21, NULL, '2021-11-02 20:14:19', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (26, 22, NULL, '2021-11-02 20:43:47', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (27, 23, NULL, '2021-11-03 18:07:38', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (28, 24, NULL, '2021-11-03 18:13:28', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (29, 25, 6, '2021-11-03 18:43:16', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (30, 26, 7, '2021-11-03 18:55:31', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (31, 27, 8, '2021-11-03 19:58:20', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (32, 28, NULL, '2021-11-11 20:09:23', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (33, 29, 9, '2021-11-11 20:11:58', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (34, 30, 10, '2021-11-11 20:35:34', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (35, 31, NULL, '2021-11-11 22:05:21', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (36, 33, NULL, '2021-11-13 16:58:46', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (37, 34, NULL, '2021-11-13 17:00:10', NULL, NULL);
INSERT INTO `registro_tiempo` VALUES (38, 35, NULL, '2021-11-13 17:01:19', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of rol
-- ----------------------------
BEGIN;
INSERT INTO `rol` VALUES (1, 'admin', 1);
INSERT INTO `rol` VALUES (2, 'cliente', 1);
COMMIT;

-- ----------------------------
-- Table structure for tipo_documento
-- ----------------------------
DROP TABLE IF EXISTS `tipo_documento`;
CREATE TABLE `tipo_documento` (
  `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `activo` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tipo_documento
-- ----------------------------
BEGIN;
INSERT INTO `tipo_documento` VALUES (1, 'Cedula', 1);
INSERT INTO `tipo_documento` VALUES (2, 'Pasaporte', 1);
INSERT INTO `tipo_documento` VALUES (3, 'Extranjero', 1);
COMMIT;

-- ----------------------------
-- Table structure for tipo_vehiculo
-- ----------------------------
DROP TABLE IF EXISTS `tipo_vehiculo`;
CREATE TABLE `tipo_vehiculo` (
  `id_tipo_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tipo_vehiculo
-- ----------------------------
BEGIN;
INSERT INTO `tipo_vehiculo` VALUES (1, 'carro');
INSERT INTO `tipo_vehiculo` VALUES (2, 'camioneta');
COMMIT;

-- ----------------------------
-- Table structure for vehiculo
-- ----------------------------
DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `id_tipo_vehiculo` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  PRIMARY KEY (`id_vehiculo`),
  KEY `tipo_vehiculo` (`id_tipo_vehiculo`),
  CONSTRAINT `tipo_vehiculo` FOREIGN KEY (`id_tipo_vehiculo`) REFERENCES `tipo_vehiculo` (`id_tipo_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of vehiculo
-- ----------------------------
BEGIN;
INSERT INTO `vehiculo` VALUES (1, 24, 'bfhg', 1, 'rojo', 'adasd', '2021-11-03 18:37:23');
INSERT INTO `vehiculo` VALUES (2, 25, 'hghr', 2, 'negro', 'negro', '2021-11-03 18:43:42');
INSERT INTO `vehiculo` VALUES (3, 25, 'hghr', 2, 'negro', 'negro', '2021-11-03 18:44:43');
INSERT INTO `vehiculo` VALUES (4, 25, 'hghr', 2, 'negro', 'negro', '2021-11-03 18:46:13');
INSERT INTO `vehiculo` VALUES (5, 25, 'hghr', 2, 'negro', 'negro', '2021-11-03 18:46:42');
INSERT INTO `vehiculo` VALUES (6, 25, 'hghr', 2, 'negro', 'negro', '2021-11-03 18:47:18');
INSERT INTO `vehiculo` VALUES (7, 26, 'prpe1212', 1, 'dadad', 'adad', '2021-11-03 18:56:00');
INSERT INTO `vehiculo` VALUES (8, 27, 'aedewq', 2, 'adad', 'adadad', '2021-11-03 20:05:16');
INSERT INTO `vehiculo` VALUES (9, 29, 'cde221', 2, 'rojo', 'bmw', '2021-11-11 20:13:01');
INSERT INTO `vehiculo` VALUES (10, 30, 'ghj343', 2, 'rojo', 'bmw', '2021-11-11 20:36:14');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
