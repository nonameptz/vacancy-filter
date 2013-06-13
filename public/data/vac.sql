/*
-- Query: SELECT * FROM vacancies.vacancy
LIMIT 0, 1000

-- Date: 2013-06-13 16:25
*/
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (1,0,'PHP programmer','simple description','en',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (2,1,'PHP разработчик','скромное описание PHP разработчика','ru',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (3,1,'PHP programmeur','simple description de la PF Developer','fr',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (4,1,'PHP-utvecklare','enkel beskrivning för PHP-utvecklare','sw',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (5,0,'Web Designer','Web designer and simple description for him','en',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (6,5,'Web Designer','Webbdesigner för en beskrivning av det på svenska','sw',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (7,5,'Diseñador web','Diseñador web para una descripción del mismo en español','sp',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (8,5,'Web Designer','Description du concepteur de site Web pour elle','fr',1);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (9,0,'Manager','Simple descriptionfor manager','en',2);
INSERT INTO `vacancy` (`id`,`parentId`,`title`,`description`,`language`,`departmentId_id`) VALUES (10,9,'Менеджер','Описание для менеджера','ru',2);
