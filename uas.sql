CREATE SCHEMA `ujian_mysql_230103`;


CREATE TABLE `ujian_mysql_230103`.`mahasiswa` (
  `NIM` INT NOT NULL,
  `NamaMhs` VARCHAR(45) NULL,
  `AlamatMhs` VARCHAR(45) NULL,
  PRIMARY KEY (`NIM`));

CREATE TABLE `ujian_mysql_230103`.`mata_kuliah` (
  `NoMk` VARCHAR(5) NOT NULL,
  `NamaMk` VARCHAR(45) NULL,
  `SKS` INT(1) NULL,
  PRIMARY KEY (`NoMk`));

CREATE TABLE `ujian_mysql_230103`.`dosen` (
  `KDDosen` VARCHAR(5) NOT NULL,
  `NamaDosen` VARCHAR(45) NULL,
  `Alumni` VARCHAR(45) NULL,
  PRIMARY KEY (`KDDosen`));

CREATE TABLE `ujian_mysql_230103`.`MHSMK` (
  `NIM` INT NOT NULL,
  `NoMk` VARCHAR(45) NOT NULL,
  `Nilai` FLOAT NULL,
  PRIMARY KEY (`NIM`,`NoMk`));

CREATE TABLE `ujian_mysql_230103`.`MKDosen` (
  `NoMk` VARCHAR(45) NOT NULL,
  `KDDosen` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`NoMk`,`KDDosen`));



INSERT INTO `ujian_mysql_230103`.`mahasiswa` (`NIM`, `NamaMhs`, `AlamatMhs`) VALUES
('960112345', 'Emilia Makmur', 'Jl kemanggisan 101 '),
('960123456', 'Freddy Vergo', 'Jl kesehatan 102'),
('960134567', 'Bambang Bactiar', 'Jl rambutan 501'),
('960145678', 'Sugeng Sulaima ', 'Jl mangga 222'),
('960156789', 'Denny Sukanto', 'Jl Tomang raya 215')
;

INSERT INTO `ujian_mysql_230103`.`mata_kuliah` (`NoMk`, `NamaMk`, `SKS`) VALUES
('CS301', 'Sistem Basis Data', '4'),
('CS401', 'Intelegensia Semu', '2'),
('CS225', 'Struktur Data', '4'),
('CS450', 'Grafik Komputer', '4')
;

INSERT INTO `ujian_mysql_230103`.`dosen` (`KDDosen`, `NamaDosen`, `Alumni`) VALUES
('0131', 'Usman Siregar', 'Universitas Indonesia'),
('0156', 'Handy Darmawan', 'Universitas Diponogoro'),
('0122', 'Hendra Lukman', 'Universitas Veteran'),
('0189', 'Susanto Hamid', 'ITB')
;

INSERT INTO `ujian_mysql_230103`.`MHSMK` (`NIM`, `NoMk`, `Nilai`) VALUES
('960112345', 'CS301', '85'),
('960123456', 'CS301', '75'),
('960134567', 'CS301', '65'),
('960123456', 'CS401', '70'),
('960134567', 'CS401', '68'),
('960145678', 'CS401', '75'),
('960134567', 'CS450', '50'),
('960145678', 'CS450', '60'),
('960156789', 'CS450', '65')
;

INSERT INTO `ujian_mysql_230103`.`MKDOSEN` (`NoMk`, `KDDosen`) VALUES
('CS301', '0122'),
('CS401', '0131'),
('CS225', '0131'),
('CS450', '0156')
;

-- ('', '', ''),



SELECT * FROM dosen WHERE Alumni = 'Universitas Indonesia';

SELECT * FROM MHSMK where NIM = '960112345';
UPDATE `MHSMK` SET `Nilai` = '80' WHERE (`NIM` = '960112345') and (`NoMk` = 'CS301');

SELECT mahasiswa.NIM, mahasiswa.NamaMhs
,SUM(mata_kuliah.SKS) as Total_SKS
,AVG(MHSMK.Nilai) as Nilai_Rata_Rata
FROM MHSMK
INNER JOIN mahasiswa ON MHSMK.NIM = mahasiswa.NIM
INNER JOIN mata_kuliah ON MHSMK.NoMk = mata_kuliah.NoMk
GROUP BY mahasiswa.NIM
;

SELECT mata_kuliah.NoMk, mata_kuliah.NamaMk, MAX(MHSMK.Nilai) as nilai_tertinggi
FROM MHSMK
INNER JOIN mata_kuliah ON MHSMK.NoMk = mata_kuliah.NoMk
WHERE MHSMK.NoMk = 'CS401';

SELECT dosen.NamaDosen, mata_kuliah.NamaMk, mata_kuliah.SKS
FROM MKDosen
INNER JOIN dosen ON MKDosen.KDDosen = dosen.KDDosen
INNER JOIN mata_kuliah ON MKDosen.NoMk = mata_kuliah.NoMk
;



