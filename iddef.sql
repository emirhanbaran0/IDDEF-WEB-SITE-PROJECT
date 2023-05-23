SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dhrs`
-- Tablo için tablo yapısı `kayitol`
--

CREATE TABLE `kayitol` (
				`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
				 `isim` VARCHAR(70) NOT NULL ,
				 `soyisim` VARCHAR(70) NOT NULL ,
				 `dogumTarihi` DATE NOT NULL ,
				 `cinsiyet` CHAR(5) NOT NULL ,
				 `email` VARCHAR(140) NOT NULL ,
				 `sifre` VARCHAR(64) NOT NULL ,
				 PRIMARY KEY (`id`),UNIQUE (`email``)) ENGINE = InnoDB; ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- Tablo döküm verisi `kayitol`

INSERT INTO `kayitol` ( `isim`, `soyisim`, `dogumTarihi`, `cinsiyet`, `email`,`sifre`) VALUES
 ( 'Emre', 'Sönmez', '2007-05-21', 'Erkek', 'emresonmez@gmail.com', '123emre' ),
 ( 'Derya', 'Kaya', '2000-06-12', 'Kadın', 'deryakaya@gmail.com', '321derya' ),
 ( 'Gülten', 'Sökücü', '1999-10-15', 'Kadın', 'gultensokucu@gmail.com', '123sokucu'),
 ( 'Kemal', 'Yapmaz', '2006-07-14', 'Erkek', 'kemalyapmaz@gmail.com', '321yapmaz' ),
 ( 'Erhan', 'Sarı', '2005-08-24', 'Erkek', 'erhansari@gmail.com', '123erhansari' ),
 ( 'Kerem', 'Yılmaz', '1998-12-21', 'Erkek', 'keremyilmaz@gmail.com', '123keremyilmaz' ),
 ( 'İrem', 'Tekin', '2002-11-20', 'Kadın', 'iremtekin@gmail.com',  '1234'),
 ( 'Yağmur', 'Yılmaz', '2003-01-09', 'Kadın', 'yagmuryilmaz@gmail.com', '123123' ),
 ( 'Dilan', 'Saran', '2002-02-07', 'Kadın', 'dilansaran@gmail.com',  'asdfgh'),
 ( 'Ayhan', 'Akman', '2004-07-03', 'Erkek', 'ayhanakman@gmail.com', 'asd123');

-- --------------------------------------------------------

-- Tablo için tablo yapısı `bagislarim`

CREATE TABLE `bagislarim` (
				`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
				 `projeAdi` VARCHAR(140) NOT NULL ,
				 `bagisTarihi` DATE NOT NULL ,
				 `bagisMiktari` DECIMAL NOT NULL ,
				 `userId` BIGINT UNSIGNED NOT NULL ,
				 PRIMARY KEY (`id`)) ENGINE = InnoDB; ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


-- Tablo döküm verisi `bagislarim`

INSERT INTO `bagislarim` ( `projeAdi`, `bagisTarihi`, `bagisMiktari`, `userId`) VALUES
('Gazze Acil Yardım','2023-05-12','100','1'),
('Yemen  Acil Yardım','2022-01-09','200','3'),
('Deprem - Sıcak Yemek','2023-03-21','300','4'),
('Afet Acil Yardım Çadırı','2022-10-15','300','2'),
('Briket Ev Projesi','2023-11-03','150','1'),
('Gazze Acil Yardım','2022-02-05','1510','1'),
('Yemen Acil Yardım','2023-03-27','110','1');


-- Tablo için tablo yapısı `iletisimmail`

CREATE TABLE `iletisimmail` (
`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
 `isim` VARCHAR(70) NOT NULL ,
 `email` VARCHAR(140) NOT NULL ,
 `konu` VARCHAR(100) NOT NULL ,
 `mesaj` TEXT UNSIGNED NOT NULL , PRIMARY KEY (`id`))ENGINE = InnoDB; ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
 
-- Tablo döküm verisi `iletisimmail`

INSERT INTO `iletisimmail` ( `isim`, `email`, `konu`, `mesaj`) VALUES
 ( 'Emirhan Baran ', 'emir.baran@gmail.com', 'Bağış Sorunu', 'Merhaba Bağış Yaparken Bir hatayla karşılaştım Detaylar....'),
 ( 'Emrah Alan ', 'emrah.alan@gmail.com', 'Bağış Sorunu', 'eeeeee'),
 ( 'İbrahim Özer ', 'ibrahim.ozer@gmail.com', 'Tebrikler', 'Yaptığınız uygulama çok güzel olmuş teşekkürler'),
 ( 'Ayhan Akman ', 'ibrahim.akman@gmail.com', 'Teşekkürler', 'Yaptığınız uygulama çok güzel olmuş teşekkürler'),
 ( 'Mercan Çelik ', 'mercan.celik@gmail.com', 'Bağış Sorunu', 'Merhaba Bağış Yaparken Bir hatayla karşılaştım Detaylar....'),
 ( 'Ersin Aylanç ', 'ersin.aylanc@gmail.com', 'Bağış Sorunu', 'Merhaba Bağış Yaparken Bir hatayla karşılaştım Detaylar....'),
 ( 'Muhammed Aktan ', 'muhammed.aktan@gmail.com', 'Bağış Sorunu', 'Merhaba Bağış Yaparken Bir hatayla karşılaştım Detaylar....');
