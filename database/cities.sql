/*
SQLyog Community v10.2 
MySQL - 5.7.11 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `cities` (
	`id` int (10),
	`name` varchar (765),
	`country_id` int (10),
	`created_at` timestamp ,
	`updated_at` timestamp 
); 
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('1','Buenos Aires','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('2','Catamarca','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('3','Chaco','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('4','Chubut','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('5','Córdoba','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('6','Corrientes','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('7','Entre Ríos','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('8','Formosa','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('9','Jujuy','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('10','La Pampa','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('11','La Rioja','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('12','Mendoza','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('13','Misiones','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('14','Neuquén','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('15','Río Negro','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('16','Salta','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('17','San Juan','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('18','San Luis','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('19','Santa Cruz','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('20','Santa Fe','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('21','Santiago del Estero','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('22','Tierra del Fuego, Antártida e Isla del Atlántico Sur','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('23','Tucumán','1',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('24','Beni','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('25','Chuquisaca','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('26','Cochabamba','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('27','La Paz','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('28','Oruro','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('29','Pando','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('30','Potosí','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('31','Santa Cruz','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('32','Tarija','2',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('33','Acre','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('34','Alagoas','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('35','Amapá','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('36','Amazonas','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('37','Bahia','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('38','Brasilia','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('39','Ceará','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('40','Espírito Santo','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('41','Goiás','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('42','Maranhão','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('43','Mato Grosso','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('44','Mato Grosso do Sul','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('45','Minas Gerais','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('46','Pará','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('47','Paraíba','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('48','Paraná','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('49','Pernambuco','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('50','Piauí','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('51','Rio de Janeiro','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('52','Rio Grande do Norte','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('53','Rio Grande do Sul','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('54','Rondônia','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('55','Roraima','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('56','Santa Catarina','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('57','São Paulo','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('58','Sergipe','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('59','Tocantins','3',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('60','Newfoundland and Labrador','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('61','Nova Scotia','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('62','Prince Edward Island','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('63','New Brunswick','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('64','Quebec','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('65','Ontario','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('66','Manitoba','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('67','Saskatchewan','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('68','Alberta','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('69','British Columbia','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('70','Nunavut','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('71','Northwestern Territories','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('72','Yukon','4',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('73','Arica Parinacota','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('74','Región de Tarapacá','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('75','Región de Antofagasta','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('76','Región de Atacama','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('77','Región de Coquimbo','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('78','Región de Valparaíso','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('79','Región Metropolitana de Santiago','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('80','Región del Libertador General Bernardo OHiggins','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('81','Región del Maule','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('82','Región del Bío bío','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('83','Región de la Araucanía','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('84','Región de Los Ríos','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('85','Región de Los Lagos','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('86','Región de Aysén del general Carlos Ibáñez del Campo','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('87','Región de Magallanes y la Antártica Chilena','5',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('88','Amazonas','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('89','Antioquia','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('90','Arauca','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('91','Atlántico','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('92','Bolívar','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('93','Boyacá','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('94','Caldas','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('95','Caquetá','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('96','Casanare','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('97','Cauca','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('98','Cesar','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('99','Chocó','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('100','Córdoba','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('101','Cundinamarca','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('102','Guainía','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('103','Guaviare','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('104','Huila','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('105','La Guajira','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('106','Magdalena','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('107','Meta','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('108','Nariño','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('109','Norte de Santander','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('110','Putumayo','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('111','Quindio','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('112','Risaralda','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('113','San Andres y Providencia','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('114','Santander','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('115','Sucre','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('116','Tolima','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('117','Valle del Cauca','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('118','Vaupés','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('119','Vichada','6',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('120','San José','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('121','Alajuela','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('122','Cartago','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('123','Heredia','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('124','Guanacaste','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('125','Puntarenas','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('126','Limón','7',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('127','Willemstad','8',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('128','Quito','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('129','Machachi','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('130','Latacunga','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('131','Quijos','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('132','Esmeraldas','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('133','Ibarra','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('134','Otavalo ','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('135','Cotacachi','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('136','Cayambe','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('137','Riobamba','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('138','Ambato','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('139','Guano','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('140','Guaranda','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('141','Alausí','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('142','Macas','9',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('143','Ahuachapán','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('144','Santa Ana','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('145','Sonsonate','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('146','Usulután','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('147','San Miguel','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('148','Morazán','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('149','La Unión ','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('150','La Libertad','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('151','Chalatenango','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('152','Cuscatlán','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('153','San Salvador','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('154','La Paz','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('155','Cabañas','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('156','San Vicente','10',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('157','Alabama','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('158','Alaska','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('159','Arkansas','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('160','Arizona','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('161','California','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('162','Colorado','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('163','Connecticut','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('164','Dakota del Sur','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('165','Delaware','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('166','Florida','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('167','Georgia','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('168','Hawaii','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('169','Idaho','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('170','Illinois','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('171','Indiana','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('172','Iowa','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('173','Kansas','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('174','Kentucky','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('175','Louisiana','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('176','Maine','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('177','Maryland','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('178','Massachussetts','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('179','Michigan','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('180','Minnesota','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('181','Mississippi','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('182','Missouri','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('183','Montana','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('184','Nebraska','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('185','Nevada','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('186','New Hampshire','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('187','New Jersey','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('188','New Mexico','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('189','New York','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('190','North Carolina','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('191','North Dakota','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('192','Ohio','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('193','Oklahoma','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('194','Oregon','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('195','Pennsylvania','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('196','Rhode Island','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('197','South Carolina','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('198','Tennessee','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('199','Texas','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('200','Utah','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('201','Virginia','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('202','Vermont','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('203','Washington','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('204','West Virginia','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('205','Wisconsin','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('206','Wyoming','11',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('207','Alta Verapaz','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('208','Baja Verapaz','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('209','Chimaltenango','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('210','Chiquimula','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('211','Petén','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('212','El Progreso','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('213','Quiché','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('214','Escuintla','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('215','Guatemala','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('216','Huehuetenango','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('217','Izabal','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('218','Jalapa','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('219','Jutiapa','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('220','Quetzaltenango','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('221','Retalhuleu','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('222','Sacatepéquez','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('223','San Marcos','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('224','Santa Rosa','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('225','Sololá','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('226','Suchitepéquez','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('227','Totonicapán','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('228','Zacapa','12',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('229','Artibonito','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('230','Centro','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('231','Grand\'Anse','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('232','Nippes','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('233','Norte','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('234','Noreste','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('235','Noroeste','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('236','Oeste','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('237','Sudeste','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('238','Sur','13',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('239','Artibonito','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('240','Centro','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('241','Grand\'Anse','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('242','Nippes','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('243','Norte','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('244','Noreste','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('245','Noroeste','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('246','Oeste','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('247','Sudeste','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('248','Sur','14',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('249','Condado de Cornwall','15',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('250','Condado de Middlesex','15',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('251','Condado de Surrey','15',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('252','Aguascalientes','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('253','Baja California','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('254','Baja California Sur','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('255','Campeche','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('256','Coahuila','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('257','Colima','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('258','Chiapas','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('259','Chihuahua','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('260','Distrito Federal','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('261','Durango','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('262','Guanajuato','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('263','Guerrero','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('264','Hidalgo','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('265','Jalisco','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('266','México','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('267','Michoacán','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('268','Morelos','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('269','Nayarit','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('270','Nuevo León','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('271','Oaxaca','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('272','Puebla','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('273','Querétaro','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('274','Quintana Roo','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('275','San Luis Potosí','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('276','Sinaloa','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('277','Sonora','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('278','Tabasco','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('279','Tamaulipas','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('280','Tlaxcala','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('281','Veracruz','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('282','Yucatán','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('283','Zacatecas','16',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('284','Boaco','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('285','Carazo','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('286','Chinandega','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('287','Chontales','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('288','Estelí','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('289','Granada','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('290','Jinotega','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('291','León','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('292','Madriz','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('293','Managua','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('294','Masaya','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('295','Matagalpa','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('296','Nueva Segovia','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('297','Rivas','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('298','Río San Juan','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('299','Región Autónoma de la Costa Caribe Norte','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('300','Región Autónoma de la Costa Caribe Sur','17',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('301','Arraiján (corregimiento)','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('302','Alcaldediaz','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('303','Aguadulce (Sevilla)','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('304','Colon','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('305','Chitre','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('306','Chilibre','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('307','Chepo','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('308','Changuinola (ciudad)','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('309','Cativá','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('310','David','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('311','Las Cumbres (Panamá)','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('312','La Concepción','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('313','La Chorrera (Amazonas)','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('314','La Cabima','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('315','Nuevo Arraiján','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('316','Puerto Armuelles','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('317','Pedregal (Chiriquí)','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('318','Panamá','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('319','Pacora','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('320','Santiago de Veraguas','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('321','San Miguelito','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('322','Tocumen','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('323','Vista Alegre','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('324','Veracruz de Ignacio de la Llave','18',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('325','Asunción','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('326','Concepción','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('327','San Pedro','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('328','Cordillera','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('329','Guairá','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('330','Caaguazú','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('331','Caazapá','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('332','Itapúa','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('333','Misiones','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('334','Paraguarí','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('335','Alto Paraná','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('336','Central','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('337','Ñeembucú','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('338','Amambay','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('339','Canindeyú','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('340','Presidente Hayes','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('341','Boquerón','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('342','Alto Paraguay','19',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('343','Amazonas','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('344','Áncash','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('345','Apurímac','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('346','Arequipa','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('347','Ayacucho','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('348','Cajamarca','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('349','Callao','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('350','Cuzco','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('351','Huancavelica','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('352','Huánuco','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('353','Ica','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('354','Junín','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('355','La Libertad','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('356','Lambayeque','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('357','Lima','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('358','Loreto','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('359','Madre de Dios','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('360','Moquegua','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('361','Pasco','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('362','Piura','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('363','Puno','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('364','San Martín','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('365','Tacna','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('366','Tumbes','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('367','Ucayali','20',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('368','Distrito Nacional','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('369','Azua','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('370','Baoruco','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('371','Barahona','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('372','Dajabón','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('373','Duarte','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('374','Elías Piña','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('375','El Seibo','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('376','Espaillat','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('377','Hato Mayor','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('378','Independencia','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('379','La Altagracia','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('380','La Romana','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('381','La Vega','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('382','María Trinidad Sánchez','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('383','Monseñor Nouel','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('384','Monte Cristi','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('385','Monte Plata','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('386','Pedernales','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('387','Peravia','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('388','Puerto Plata','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('389','Salcedo','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('390','Samaná','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('391','Sánchez Ramírez','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('392','San Cristóbal','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('393','San José de Ocoa','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('394','San Juan','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('395','San Pedro de Macorís','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('396','Santiago','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('397','Santiago Rodríguez','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('398','Santo Domingo','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('399','Valverde','21',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('400','Artigas','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('401','Canelones','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('402','Cerro Largo','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('403','Colonia','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('404','Durazno','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('405','Flores','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('406','Florida','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('407','Lavalleja','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('408','Maldonado','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('409','Montevideo','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('410','Paysandú','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('411','Río Negro','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('412','Rivera','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('413','Rocha','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('414','Salto','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('415','San José','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('416','Soriano','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('417','Tacuarembó','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('418','Treinta y Tres','22',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('419','Amazonas','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('420','Anzoátegui','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('421','Apure','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('422','Aragua','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('423','Barinas','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('424','Bolívar','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('425','Carabobo','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('426','Cojedes','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('427','Delta Amacuro','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('428','Distrito Capital','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('429','Falcón','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('430','Guárico','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('431','Lara','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('432','Mérida','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('433','Miranda','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('434','Monagas','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('435','Nueva Esparta','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('436','Portuguesa','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('437','Sucre','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('438','Táchira','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('439','Trujillo','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('440','Vargas','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('441','Yaracuy','23',NULL,NULL);
insert into `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) values('442','Zulia','23',NULL,NULL);
