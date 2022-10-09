-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Mar 2021, 09:36:40
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `karefashion`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `beden`
--

CREATE TABLE IF NOT EXISTS `beden` (
`id` int(11) NOT NULL,
  `beden` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `beden`
--

INSERT INTO `beden` (`id`, `beden`) VALUES
(1, 'XL'),
(2, 'L');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
`kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `sifre`) VALUES
(1, 'a', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

CREATE TABLE IF NOT EXISTS `musteri` (
`id` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `sifre` text NOT NULL,
  `tel` varchar(11) NOT NULL,
  `il` int(11) NOT NULL,
  `ilce` int(11) NOT NULL,
  `mahalle` int(11) NOT NULL,
  `adres` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`id`, `ad`, `soyad`, `mail`, `sifre`, `tel`, `il`, `ilce`, `mahalle`, `adres`) VALUES
(14, 'Resul', 'Kut', 'ay.kut53@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '53513552', 0, 0, 0, 'Trakya'),
(15, 'aysegul', 'kut', 'aysegul@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '05355133585', 0, 0, 0, 'Rize'),
(16, 'sabri', 'kut', 'sabri@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '05355133585', 0, 0, 0, 'İstanbul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemetipi`
--

CREATE TABLE IF NOT EXISTS `odemetipi` (
`id` int(11) NOT NULL,
  `tip` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `odemetipi`
--

INSERT INTO `odemetipi` (`id`, `tip`) VALUES
(1, 'Havale'),
(2, 'Kapıda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `renk`
--

CREATE TABLE IF NOT EXISTS `renk` (
`id` int(11) NOT NULL,
  `renk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE IF NOT EXISTS `sepet` (
`id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `beden_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE IF NOT EXISTS `siparis` (
`id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `tarih_saat` datetime NOT NULL,
  `odemetipi_id` int(11) NOT NULL,
  `tutar` decimal(10,0) NOT NULL,
  `durum_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `musteri_id`, `tarih_saat`, `odemetipi_id`, `tutar`, `durum_id`) VALUES
(30, 14, '2020-12-16 17:53:48', 2, '50', 2),
(32, 14, '2021-03-09 18:56:18', 1, '60', 1),
(33, 15, '2021-03-09 18:57:44', 2, '100', 1),
(34, 15, '2021-03-09 19:02:39', 2, '10', 1),
(35, 15, '2021-03-11 10:00:30', 2, '80', 2),
(36, 15, '2021-03-17 07:38:45', 2, '90', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisdurum`
--

CREATE TABLE IF NOT EXISTS `siparisdurum` (
`id` int(11) NOT NULL,
  `durum` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisdurum`
--

INSERT INTO `siparisdurum` (`id`, `durum`) VALUES
(1, 'Bekliyor'),
(2, 'Kargoda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE IF NOT EXISTS `urun` (
`urun_id` int(11) NOT NULL,
  `urun_ad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `urun_ozellik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` decimal(10,0) NOT NULL,
  `urun_foto1` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_foto2` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_foto3` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_kategori` int(11) NOT NULL,
  `urun_renk` int(11) NOT NULL,
  `urun_beden` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_ad`, `urun_ozellik`, `urun_fiyat`, `urun_foto1`, `urun_foto2`, `urun_foto3`, `urun_kategori`, `urun_renk`, `urun_beden`) VALUES
(17, 'Zara Tişört', 'Pamuk V yaka', '10', 'fotograflar/as4380.jpg', 'fotograflar/ty16421.jpg', 'fotograflar/yu20019.jpg', 0, 0, 0),
(18, 'Zara Pantolon', 'Keten', '50', 'fotograflar/fg5675.jpg', 'fotograflar/yu19469.jpg', 'fotograflar/fg26636.jpg', 0, 0, 0),
(19, 'Mango Bluz', 'Polyester', '80', 'fotograflar/yu7825.jpg', 'fotograflar/rt10411.jpg', 'fotograflar/ty24602.jpg', 0, 0, 0),
(20, 'Mango Etek', 'Keten', '50', 'fotograflar/yu8346.jpg', 'fotograflar/yu15351.jpg', 'fotograflar/rt28707.jpg', 0, 0, 0),
(21, 'Zara Etek', 'Kadife', '90', 'fotograflar/as1308.jpg', 'fotograflar/fg14151.jpg', 'fotograflar/as25033.jpg', 0, 0, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `beden`
--
ALTER TABLE `beden`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
 ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `musteri`
--
ALTER TABLE `musteri`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odemetipi`
--
ALTER TABLE `odemetipi`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `renk`
--
ALTER TABLE `renk`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisdurum`
--
ALTER TABLE `siparisdurum`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
 ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `beden`
--
ALTER TABLE `beden`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `musteri`
--
ALTER TABLE `musteri`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Tablo için AUTO_INCREMENT değeri `odemetipi`
--
ALTER TABLE `odemetipi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `renk`
--
ALTER TABLE `renk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- Tablo için AUTO_INCREMENT değeri `siparisdurum`
--
ALTER TABLE `siparisdurum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
