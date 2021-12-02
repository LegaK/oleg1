CREATE DATABASE oleg_test CHARACTER SET utf8 COLLATE utf8_general_ci;
USE oleg_test;

CREATE TABLE IF NOT EXISTS `thread_first` (
  `ID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COMMENT` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `DATE_TIME_CHANGED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
);

DELIMITER $$

CREATE  PROCEDURE `insert_proc` ()  BEGIN
DECLARE i INT;
SET i = 0;
WHILE i < 10000 DO
INSERT INTO thread_first(COMMENT) VALUE(concat('Запись №: ', CEIL(RAND()*1000)));

    SET i = i + 1;
END WHILE;

END$$

DELIMITER ;

CALL  `insert_proc` ();

CREATE TABLE thread_second LIKE thread_first; 
INSERT thread_second SELECT * FROM thread_first;

CREATE TABLE thread_third LIKE thread_first; 
INSERT thread_third SELECT * FROM thread_first;

CREATE TABLE thread_fourth LIKE thread_first; 
INSERT thread_fourth SELECT * FROM thread_first;

CREATE TABLE thread_fifth LIKE thread_first; 
INSERT thread_fifth SELECT * FROM thread_first;
