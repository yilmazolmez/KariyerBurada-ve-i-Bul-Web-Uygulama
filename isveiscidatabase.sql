-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Eyl 2020, 12:25:14
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `isveiscidatabase`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyecvbilgi`
--

CREATE TABLE `uyecvbilgi` (
  `uyecvno` int(11) NOT NULL,
  `uyecvadisoyadi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvtcno` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecveposta` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uyecvsifre` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uyecvdogumyeri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvdogumtarihi` date DEFAULT NULL,
  `uyecvanaadi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvbabaadi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvadresi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsehir` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvtelefonno` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsonmezunokul` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsonmezunbolum` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsoncalisilanis1` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsoncalisilanis2` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvmeslekunvani` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'meslek',
  `uyercvesim1` longblob DEFAULT NULL,
  `uyecvresim2` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'images/kisiler/person.jpg',
  `uyeecvgitimseviye` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvozetbilgi1` varchar(300) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvozetbilgi2` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvaktiflik` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsonisayrilmasebebi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyecvsonisayrilmatarihi` date DEFAULT NULL,
  `uycvisaramaaktiflik` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'AKTIF',
  `uyecvgoruntulemesayisi` int(11) DEFAULT 0,
  `gizlisoru` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `yanit` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyecvbilgi`
--

INSERT INTO `uyecvbilgi` (`uyecvno`, `uyecvadisoyadi`, `uyecvtcno`, `uyecveposta`, `uyecvsifre`, `uyecvdogumyeri`, `uyecvdogumtarihi`, `uyecvanaadi`, `uyecvbabaadi`, `uyecvadresi`, `uyecvsehir`, `uyecvtelefonno`, `uyecvsonmezunokul`, `uyecvsonmezunbolum`, `uyecvsoncalisilanis1`, `uyecvsoncalisilanis2`, `uyecvmeslekunvani`, `uyercvesim1`, `uyecvresim2`, `uyeecvgitimseviye`, `uyecvozetbilgi1`, `uyecvozetbilgi2`, `uyecvaktiflik`, `uyecvsonisayrilmasebebi`, `uyecvsonisayrilmatarihi`, `uycvisaramaaktiflik`, `uyecvgoruntulemesayisi`, `gizlisoru`, `yanit`) VALUES
(1, 'Yılmaz  Ölmez', '11111111111', 'ylmaz_lmez@hotmail.com', '123', 'Mardin', '1996-04-04', 'hamdiye', 'osman', 'Merkez mah. Namık Kemal Cad. Kardeşler Ap.. Avcılar', 'İstanbul', '54551545454545', 'Sakarya Üniversitesi', 'Bilgisayar Programcılığı', 'Freelance web tasarım', '', 'Bilgisayar Mühendisi', NULL, 'images/kisiler/571059058CKJ81819e5cfa-7085-4da3-a7cb-a4e2471b0a6c.JPG', 'üniversite', 'Namık Kemal Üniversitesi Bilgisayar MÜhendisliği son sınıf öğrencisiyim. Kendimi yazılım sektöründe geliştirmek istiyorum.', NULL, NULL, 'Kendi daha iyi yerlerde geliştirmek.', '0000-00-00', 'AKTIF', 4, 'İlkokul Öğretmeniniz?', 'isa'),
(2, 'Furkan Ceylan', '21212121212', 'furkan@hotmail.com', '123', 'Sivas', '2020-08-18', 'Ayşe', 'Nazif', 'Avcılar Ambarlı siteler', 'İstanbul', '24124124124124', 'Kocaeli Üniversitesi', 'Bilgisayar Programcısı', 'Pars Servis', '', 'Bilgisayar Programcısı', NULL, 'images/kisiler/108627695309OUC1.jpg', 'üniversite', 'Bilgisayar Programcılığı mezunuyum. Kendimi Bu alanda geliştirmek için çabalamaktayım.', NULL, NULL, 'Kendi daha iyi yerlerde geliştirmek.', '0000-00-00', 'AKTIF', 0, 'İlk evcil hayvanınızın adı nedir?', 'köpek'),
(3, 'Doğuş Uz', '44444444444', 'dogus@hotmail.com', '123', 'Ordu', '1999-05-11', 'Ayşe', 'Nazif', 'Merkez mah. kandıra sokak Bağcılar', 'İstanbul', '41414141414141', 'Kocaeli Üniversitesi', 'Tekstil Mühendisi', 'Tekstil', '', 'Tekstil Mühendisi', NULL, 'images/kisiler/8261923055R4DH12.jpeg', 'üniversite', 'Tekstil mühendisliği mezunuyum. Bu alanda iş aramaktayım.', NULL, NULL, 'Kendi daha iyi yerlerde geliştirmek.', '0000-00-00', 'AKTIF', 0, 'Hangi şehirde doğdunuz?', 'istanbul'),
(4, 'İlhan Durmuş', '41415161615', 'ilhan@hotmail.com', '123', 'Samsun', '0000-00-00', 'Ayşe', 'Nazif', 'Talimhane sokak Avcılar İStanbul', 'İstanbul', '41414155555555', 'Namık Kemal Üniversitesi', 'Sosyoloji', 'İlhan Parke', '', 'Parkeci', NULL, 'images/kisiler/593805833PIMT1person.jpg', 'üniversite', 'Baba mesleği olan parke sektöründe 5 yıl tecrübem vardır. Parke alım satım işlerindede bulundum.', NULL, NULL, '', '0000-00-00', 'AKTIF', 0, 'İlk evcil hayvanınızın adı nedir?', 'kedi'),
(5, 'Hamdiye Ölmez', '51516171717', 'hamdiye@hotmail.com', '123', 'İstanbul', '1990-04-05', 'Şemsa', 'hamit', 'Merkez mah. fırın sokak Avcılar', 'İzmir', '51516161616161', 'Kocaeli Üniversitesi', 'Sekreter', 'Vakıfbank ', '', 'Sekreter', NULL, 'images/kisiler/1243107595ABHXG5b34e9455379ff10bc4d3e71.jpg', 'üniversite', 'Özel bir bankada 2 yıl sekreterlik yaptım. Tekrar bu alanda iş arıyorum.', NULL, NULL, 'Kendi daha iyi yerlerde geliştirmek.', '0000-00-00', 'AKTIF', 1, 'Babanızın ortanca ismi nedir?', 'hamit'),
(6, 'Gülizar demir', '74128966656', 'gulizar@gmail.com', '123', 'Bartın', '1985-01-01', 'Ayşe', 'mert', 'Şeyh Sinan mahallesi Karamel sokak', 'İzmir', '54545454545151', 'Sakarya Üniversitesi', 'Bilgisayar Mühendisliği', 'Yazılım Geliştirme', '', 'Yazılım Geliştirici', NULL, 'images/kisiler/6058431661RG8W5bf32b00bc2cb520b8b4f607_0.jpeg', 'üniversite', 'Yazılım sektöründe iş aramaktayım. 5 yıllık iş tecrübem mevcuttur.', NULL, NULL, 'Firma içinde tartışma', '0000-00-00', 'AKTIF', 1, 'İlk evcil hayvanınızın adı nedir?', 'kedi'),
(7, 'Mert Atay', '51515161617', 'mert@hotmail.com', '123', 'Adıyaman', '1985-01-01', 'Ayşe', 'Nazif', 'Merkez mah.  okul sokak', 'Adıyaman', '11111444441231', 'Namık Kemal Üniversitesi', 'Yazılım uzmanı', 'Yazılım uzmanı', '', 'Yazılım uzmanı', NULL, 'images/kisiler/102154653m11a.jpg', 'üniversite', 'Hızlı gelişen yazılım sektöründe bende hızlı yeni bilgiler öğrenip kendimi bu alanda geliştiriyorum.', NULL, NULL, 'Kendi daha iyi yerlerde geliştirmek.', '0000-00-00', 'AKTIF', 5, 'İlk evcil hayvanınızın adı nedir?', 'at'),
(8, 'Aslı Ataç', '77898946456', 'asli@hotmail.com', '123', 'Antalya', '1990-12-12', 'Nedime', 'Hakan', 'Merkez mah. sinan sokak avcılar', 'Artvin', '84545156315315', 'Namık Kemal Üniversitesi', 'Endüsti Mühendisi', 'Endüstri', '', 'Endüsti Mühendisi', NULL, 'images/kisiler/13697077052WZ74CV.jpg', 'üniversite', 'Endüstri alanın 2 yıl iş tecrübem mevcuttur. Kariyerimi bu alanda devam ettirmekteyim.', NULL, NULL, 'Kendi daha iyi yerlerde geliştirmek.', '0000-00-00', 'AKTIF', 7, 'Hangi şehirde doğdunuz?', 'istanbul'),
(22, 'yildiz sancar', '11111123123', 'yildizsancar@hotmail.com', '123', NULL, '1996-04-04', 'Hamdiye', 'osman', 'Okul sokak avcilar merkez', 'İstanbul', '454545 45 45 45', NULL, 'Tekstil', NULL, NULL, 'Tekstilci', NULL, 'images/kisiler/person.jpg', 'lise', 'Tekstil alanin 10 yillik tecrubem mevcuttur. Suanda Liseyi aciktan okumaktayim. Elimden geldigince yeni bilgiler ogrenip kendimi gelistirme asamasindayim. Bana ogretilenleri ne iyi sekilde ogrenebiliyorum. Ve bunlari aktarabiliyorum.', NULL, NULL, NULL, NULL, 'AKTIF', 2, 'İlk evcil hayvanınızın adı', 'kus');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyefirmabilgi`
--

CREATE TABLE `uyefirmabilgi` (
  `uyefirmano` int(11) NOT NULL,
  `uyefirmaunvani` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uyefirmaadres` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmaeposta` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uyefirmasifre` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uyefirmasehir` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmaisalani` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmavergino` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmavergidairesi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmaaktiflik` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmatelefonno` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmailgilisahis` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmacalismasekli` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmacalisansayisi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gizlisoru` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yanit` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmaresim2` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'images/firmalar/default.jpg',
  `uyefirmaozetbilgi1` varchar(300) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmaozetbilgi2` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyefirmaisciaramaaktiflik` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'AKTIF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyefirmabilgi`
--

INSERT INTO `uyefirmabilgi` (`uyefirmano`, `uyefirmaunvani`, `uyefirmaadres`, `uyefirmaeposta`, `uyefirmasifre`, `uyefirmasehir`, `uyefirmaisalani`, `uyefirmavergino`, `uyefirmavergidairesi`, `uyefirmaaktiflik`, `uyefirmatelefonno`, `uyefirmailgilisahis`, `uyefirmacalismasekli`, `uyefirmacalisansayisi`, `gizlisoru`, `yanit`, `uyefirmaresim2`, `uyefirmaozetbilgi1`, `uyefirmaozetbilgi2`, `uyefirmaisciaramaaktiflik`) VALUES
(1, 'Pepsico Bevera', 'Tekfen Tower Büyükdere Cad. No:209 A Blok D:3 34394 Levent / Şişli', 'pepsico@hotmail.com', '123456', 'İstanbul', NULL, '123123123', 'İnteraktif Vergi Dairesi', NULL, '0850 281 44 99', 'Pepsico', NULL, '1000', 'İlkokul Öğretmeniniz?', 'isa', 'images/firmalar/11271657977WJKRpepsico.jpg', 'PepsiCo için, \"Fayda Gözeten Performans\", toplum ve gezegenimiz için geleceğe daha sağlıklı yatırımlar yaparak sürdürülebilir büyümeyi sağlamak anlamına geliyor.', NULL, 'AKTIF'),
(2, 'QNB Finansbank', 'Saray Mah Ahmet Tevfik İleri Caddesi No:11 A-B Blok Ümraniye - İst', 'qnb@hotmail.com', '123456', 'İstanbul', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '0850 222 2 90', 'Qnb Finansbank', NULL, '1245', 'İlk evcil hayvanınızın adı nedir?', 'köpek', 'images/firmalar/695841190GU4CSqnb.png', 'Tüm bankacılık ihtiyaçlarınız için QNB Finansbank yanınızda...', NULL, 'AKTIF'),
(3, 'Aras Kargo', 'Rüzgarlıbahçe mahallesi Yavuz sultan selim caddesi aras plaza no:2', 'araskargo@hotmail.com', '123456', 'İstanbul', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '444 25 52', 'Aras Kargo', NULL, '506', 'Hangi şehirde doğdunuz?', 'Mardin', 'images/firmalar/16572268941RMBUaras.jpg', 'Aras Kargo, Türk Kargo sektöründe; hizmet kalitesi, ileri teknolojisi, standartlara uygunluğu, yaygın ve geniş ulaşım ağı ile öncü bir kuruluştur.', NULL, 'AKTIF'),
(4, 'Pegasus', 'Aeropark Yenişehir Mah. Osmanlı Bulvarı No:11/A 34912 - Kurtköy', 'pegasus@hotmail.com', '123456', 'İstanbul', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '0888 228 12 12', 'Pegasus', NULL, '5000', 'Babanızın ortanca ismi nedir?', 'hamit', 'images/firmalar/1252040068AQVCTpegasus.jpg', 'Pegasus Hava Yolları, Official Airline Guide (OAG) tarafından hazırlanan raporda 2011 ve 2012 yıllarında olduğu gibi 2013 yılında da koltuk kapasitesi açısından en iyisiyiz..', NULL, 'AKTIF'),
(5, 'Vakıf Bank', 'Saray Mahallesi Dr. Adnan Büyükdeniz Caddesi No:7/A-B 34768 ', 'vakifbank@gmail.com', '123', 'Ankara', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '0850 222 0 724', 'Vakıf Bank', NULL, '5656', 'Hangi şehirde doğdunuz?', 'İstanbul', 'images/firmalar/423068667W5QSAvakifbank.jpg', 'Temel hedefimiz, kurumsaldan bireysele çeşitlilik gösteren müşterilerimizin toplam finansal ihtiyaçlarını, özel bir yaklaşım ile karşılayabilmektir.', NULL, 'AKTIF'),
(6, 'EG Bilişim', 'Esentepe Mah. Matbuat Sok. Durukan Apt. No:17 D:2, 34394 Şişli/İst', 'egbilisim@gmail.com', '123', 'Ankara', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '90 212 233 41 ', 'EG Bilişim', NULL, '250', 'İlk evcil hayvanınızın adı nedir?', 'kuş', 'images/firmalar/21448803580afa1778fd9fd894c9965694fbd2aea6.jpg', 'Çözüm üreten ve iş dünyasının işleyişini kolaylaştıran bir ajans yapısına sahibiz. Biz dijital pazarlamaya kendini adamış ve problem çözmede uzmanlaşmış bir ekibiz.', NULL, 'AKTIF'),
(7, 'Toyota', 'Cumhuriyet Mah.Mustafa Kemal Bulv. 52200 - Ordu', 'toyota@hotmail.com', '123', 'Ordu', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '0212 354 0 354', 'Toyota', NULL, '5000', 'Çocukluk lakabınız nedir?', 'boğa', 'images/firmalar/114255790272JKZtoyota.jpg', 'HAFTANIN 7 GÜNÜ HİZMET VEREN TOYOTA İLETİŞİM MERKEZİ ARACILIĞIYLA, TOYOTA TARAFINDAN SATILAN TÜM ÜRÜNLERİN ÖZELLİKLERİNDEN TOYOTA BAYİLERİNE KADAR HER TÜRLÜ BİLGİYE ULAŞABİLİRSİNİ', NULL, 'AKTIF'),
(8, 'Setur Servis ', '	Saray Mahallesi Site Yolu Caddesi No: 4/1 34770 ', 'setur@hotmail.com', '123', 'Adana', NULL, '1231231231', 'İnteraktif Vergi Dairesi', NULL, '444 28 22', 'Setur Servis', NULL, '506', 'İlk aracınızın modeli nedir?', 'Q7', 'images/firmalar/1950454264JCSEUsetur.png', 'Setur, 1964 yılı ortalarında, gümrükten muaf mağazaların ülkemizde faaliyet göstermesine olanak tanıyan kararın çıkarılması üzerine Koç Holding tarafından kurulmuştur. ', NULL, 'AKTIF'),
(11, 'Orhan Dogan Spor Kulubu', 'Samli sokak avcilar merkez cami mahallesi Avcilar', 'orhandoganavcilar@hotmail.com', '123', 'İstanbul', NULL, '1241241231', 'avcilar hikmet vergi dairesi', NULL, '0555 522 54 56', 'orhan dogan', NULL, '15', 'İlk evcil hayvanınızın adı', 'kus', 'images/firmalar/default.jpg', 'Avcilarin en iyi kick box ve fitness salonlarina sahibiz. Her yasa uygun kick boks ve fitness programlarimiz mevcuttur. Her daim profesyonel hocalarimizla sizlerin yaninizdayiz. Avcilar istanbulda bulunan salonumuza herkes davetlidir.', NULL, 'AKTIF');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyefirmaisilanbasvurubilgi`
--

CREATE TABLE `uyefirmaisilanbasvurubilgi` (
  `isilanbasvuruno` int(11) NOT NULL,
  `isilanno` int(11) NOT NULL,
  `uyefirmaunvani` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uyecvno` int(11) DEFAULT NULL,
  `uyecvadisoyadi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isaciklamasi` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `basvurunotlari` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `basvurutarihi` date DEFAULT NULL,
  `uyefirmano` int(11) NOT NULL,
  `meslek` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyefirmaisilanbasvurubilgi`
--

INSERT INTO `uyefirmaisilanbasvurubilgi` (`isilanbasvuruno`, `isilanno`, `uyefirmaunvani`, `uyecvno`, `uyecvadisoyadi`, `isaciklamasi`, `basvurunotlari`, `basvurutarihi`, `uyefirmano`, `meslek`) VALUES
(37, 12, 'Pepsico Bevera', 1, 'Yılmaz  Ölmez', ' E-Ticaret sitemizde ürünlerimizin tamamını detaylı bir şekilde girişlerinin yapılması,\r\nÜrün görsellerinin uygun hale getirilerek siteye eklenmesi, 						', 'Web satış konusunda deneyimli olmak,\r\n\r\n·       Sistematik çalışmaya yatkın olmak,\r\n\r\n 								', '2020-08-29', 1, 'E-Ticaret Uzmanı'),
(41, 28, 'Orhan Dogan Spor Kulubu', 22, 'yildiz sancar', 'Avcilarda bulunan fitness salonumuzddda tecrubeli fitness egitimcisi aramaktayiz. Minimum 2 yil tecrubesi olmasi on kosuldur. Esnek calisma saatlerimiz vardir. Sigorta + yemek biz tarafindan ', 'onceligimiz lise mezunu ve esnek calisma saatlerini karsilayacak kisiler.', '2020-08-30', 11, 'Kisisel Fitnes Egitimcisi(Personel Training)'),
(45, 19, 'Toyota', 1, 'Yılmaz  Ölmez', 'Firmamizda calisacak kalite kontrolcusu aranmaktadir.', 'Tercihen 3 yil tecrube sahibi olunmasi gerekmektedir.', '2020-08-31', 7, 'Kalite Kontrol'),
(46, 19, 'Toyota', 5, 'Hamdiye Ölmez', 'Firmamizda calisacak kalite kontrolcusu aranmaktadir.', 'Tercihen 3 yil tecrube sahibi olunmasi gerekmektedir.', '2020-09-04', 7, 'Kalite Kontrol');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyefirmaisilanbilgi`
--

CREATE TABLE `uyefirmaisilanbilgi` (
  `uyefirmano` int(11) NOT NULL,
  `uyefirmaunvani` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `isilanno` int(11) NOT NULL,
  `isegitimdurum` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isaskerlikdurum` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `iscinsiyet` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isyassiniri` int(10) DEFAULT NULL,
  `issaatleri` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `islokasyonu` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `issehir` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meslek` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ismaasi` float DEFAULT NULL,
  `istecrubeyil` int(11) DEFAULT NULL,
  `isbasvurubaslamatarihi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isbasvurubitistarihi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isaciklamasi` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `isilannotlari` varchar(300) COLLATE utf8_turkish_ci DEFAULT '-',
  `resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `tur` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyefirmaisilanbilgi`
--

INSERT INTO `uyefirmaisilanbilgi` (`uyefirmano`, `uyefirmaunvani`, `isilanno`, `isegitimdurum`, `isaskerlikdurum`, `iscinsiyet`, `isyassiniri`, `issaatleri`, `islokasyonu`, `issehir`, `meslek`, `ismaasi`, `istecrubeyil`, `isbasvurubaslamatarihi`, `isbasvurubitistarihi`, `isaciklamasi`, `isilannotlari`, `resim`, `tur`) VALUES
(4, 'Pegasus', 1, 'üniversite', '+2 tecil', 'farketmez', 35, '09:00 ile 17:00', 'Maltepe', 'İstanbul', 'Bilgisayar Mühendisi', 3500, 2, '2020-08-21', '2020-09-30', 'Firmamızda çalışacak Bilgisayar Mühendisi aramaktayız. Minimum 2 yıl iş tecrübesi gerekmektedir.										', 'Başvuru yapanların CV lerinin dolu olması gerekmektedir.', 'images/firmalar/1252040068AQVCTpegasus.jpg', 'Acil İş İlanı'),
(7, 'Toyota', 2, 'lise', 'Boş', 'farketmez', 0, '8-5', 'Merkez mah seyhan', 'Adana', 'Aşçı', 3000, 2, '2020-08-23', '2020-09-30', 'Firmamızda çalışacak usta aşçı aramaktayız. Servis + yemek şirket tarafından karşılanacaktır.										', '-										', 'images/firmalar/114255790272JKZtoyota.jpg', 'Normal İş İlanı'),
(7, 'Toyota', 3, 'lise', 'askerliği bitirmiş', 'bay', 50, '8-5', 'Bekçi sokak yalnız mahallesi Ceyhan', 'İzmir', 'Şoför', 2500, 5, '2020-08-23', '2020-09-30', 'Tecrübeli şoför. En az 5 yıl şoförlük yapmış ve askerliğini bitirmiş Bay alımları vardır.										', '-							', 'images/firmalar/114255790272JKZtoyota.jpg', 'Normal İş İlanı'),
(4, 'Pegasus', 4, 'lise', 'Boş', 'farketmez', 50, '8-5', 'Sabiha Gökçen Havalimanı ', 'İstanbul', 'Temizlikçi', 3000, 2, '2020-08-23', '2020-10-14', 'Firmamızda çalışacak temizlikçi personeli aranmaktadır. Tercihen minimum 2 yıl iş tecrübesi.										', '-							', 'images/firmalar/1252040068AQVCTpegasus.jpg', 'Normal İş İlanı'),
(4, 'Pegasus', 5, 'üniversite', '+2 tecil', 'farketmez', 30, '8-5', 'Merkez mah. Şirinler sokak ', 'İstanbul', 'Stajyer', 2222, 0, '2020-08-24', '2020-09-30', 'Yetiştirilmek üzere stajyer eleman alınacaktık.										', '-										', 'images/firmalar/1252040068AQVCTpegasus.jpg', 'Staj İlan'),
(2, 'QNB Finansbank', 6, 'üniversite', 'Boş', 'farketmez', 35, '8-5', 'Merkez Mah. Namık Kemal Cad kardeşler Plaza ', 'Ankara', 'Stajyer', 2300, 0, '2020-08-24', '2020-09-24', 'Şirketimizde çalışacak bilgisayar mühendisi stajyer öğrenci arkadaşlarımızı bekliyoruz.										', 'tercihen bilgisayar mühendisliğinde okuyan öğrenciler.										', 'images/firmalar/695841190GU4CSqnb.png', 'Staj İlan'),
(2, 'QNB Finansbank', 7, 'lise', 'Boş', 'farketmez', 50, '8-5', 'MAltepe merkez', 'İstanbul', 'Yer Hizmetleri', 3000, 0, '2020-08-24', '2020-09-30', 'Yer hizmetlerinde çalışacak personel alımı mevcuttur. Tercihen avrupa yakasında oturan.										', '										', 'images/firmalar/695841190GU4CSqnb.png', 'Engelli İş İlanı'),
(6, 'EG Bilişim', 8, 'üniversite', 'Boş', 'farketmez', 30, '8-5', 'İstanbul(Asya)', 'İstanbul', 'Staj Programı', 2222, 0, '2020-08-28', '2020-09-30', 'Yeni mezun isen, W-Generation Staj Programımızda tam zamanlı olarak Merkez Ofis deki departmanlarımızda staj imkanı bulabilirsin. 									', 'İŞ TANIMI\r\nIT departmanının tüm süreçlerine destek vermek.										', 'images/firmalar/21448803580afa1778fd9fd894c9965694fbd2aea6.jpg', 'Acil İş İlanı'),
(6, 'EG Bilişim', 9, 'ortaokul', '+2 tecil', 'farketmez', 30, '8-5', 'İstanbul(Asya)', 'İstanbul', 'Staj', 0, 0, '2020-08-28', '2020-10-28', 'GENEL NİTELİKLER\r\n\r\nÜniversitelerin ilgili bölümlerinden mezun,\r\n6 ay boyunca, haftanın 5 günü ilgili ekibe destek olabilecek,\r\nMS Office programlarını etkin kullanabilen							', 'İŞ TANIMI\r\n\r\nKategori departmanının tüm süreçlerine destek vermek.										', 'images/firmalar/21448803580afa1778fd9fd894c9965694fbd2aea6.jpg', 'Acil İş İlanı'),
(1, 'Pepsico Bevera', 10, 'lise', 'Boş', 'farketmez', 35, '8-5', 'Ankara(Çankaya)', 'Ankara', 'Mağaza Satış Danışmanı', 3000, 2, '2020-08-28', '2020-10-22', 'ADAYLARDA ARANAN ÖZELLİKLER;\r\n\r\nEn az lise mezunu olmak,\r\nİletişim becerisi Yüksek Olmak\r\nFizik Görünüşüne özen gösteren bir yapıya sahip olmak,										', 'Mağaza Satış Danışmanı\r\nErkek ve Kadın giyiminde Dünyanın En İyilerinden olan BLU’ya Personel Alınacaktır										', 'images/firmalar/11271657977WJKRpepsico.jpg', 'Acil İş İlanı'),
(1, 'Pepsico Bevera', 11, 'lise', 'Boş', 'farketmez', 30, '8-5', 'İstanbul(Asya)(Ümraniye)', 'İstanbul', 'Satış Destek Raporlama ', 3000, 2, '2020-08-28', '2020-10-29', 'GENEL NİTELİKLER\r\n\r\n·         Üniversitelerin ilgili bölümlerinden mezun,\r\n\r\n·         İleri düzeyde MS Office programlarını kullanabilen ( özellikle excel, power point),\r\n 						', 'Ş TANIMI\r\n\r\n·         Satış etkinliğine yönelik her türlü raporlama ve analiz çalışmalarının yürütülmesi,\r\n\r\n·         Satış ERP ve diğer yazılımların etkin kullanılması,										', 'images/firmalar/11271657977WJKRpepsico.jpg', 'Acil İş İlanı'),
(1, 'Pepsico Bevera', 12, 'üniversite', 'askerliği bitirmiş', 'bay', 35, '8-5', 'İstanbul(Avr.)(Beşiktaş)', 'İstanbul', 'E-Ticaret Uzmanı', 3000, 2, '2020-08-28', '2020-09-30', ' E-Ticaret sitemizde ürünlerimizin tamamını detaylı bir şekilde girişlerinin yapılması,\r\nÜrün görsellerinin uygun hale getirilerek siteye eklenmesi, 						', 'Web satış konusunda deneyimli olmak,\r\n\r\n·       Sistematik çalışmaya yatkın olmak,\r\n\r\n 								', 'images/firmalar/11271657977WJKRpepsico.jpg', 'Normal İş İlanı'),
(3, 'Aras Kargo', 13, 'üniversite', 'Boş', 'farketmez', 35, '8-5', 'Ankara(Sincan, Etimesgut, Yenimahalle)', 'Ankara', 'İnsan Kaynakları Sorumlu', 3000, 2, '2020-08-28', '2020-10-29', 'Üniversitelerin İlgili Bölümlerinden Mezun,\r\n\r\nİnsan Kaynakları Alanında En Az 5 Yıl Deneyimli,\r\n\r\nİş Kanunu ve SGK Mevzuatına Hakim,										', 'Kalite Yönetim Sistemi Doğrultusunda Gerekli İnsan Kaynakları Süreçlerinin Kurulması ve Geliştirilmesi,\r\n\r\n·İş Sağlığı ve Güvenliği Süreçlerine Destek Verilmesi.										', 'images/firmalar/16572268941RMBUaras.jpg', 'Normal İş İlanı'),
(7, 'Toyota', 19, 'Lise', 'yok', 'farketmez', 33, '8-5', 'istanbul avrupa', 'istanbul', 'Kalite Kontrol', 2222, 3, '2020-8-28', '2020-09-28', 'Firmamizda calisacak kalite kontrolcusu aranmaktadir.', 'Tercihen 3 yil tecrube sahibi olunmasi gerekmektedir.', 'images/firmalar/114255790272JKZtoyota.jpg', 'Normal İş İlanı'),
(11, 'Orhan Dogan Spor Kulubu', 28, 'Lise', 'Bitimis', 'Farketmez', 50, 'sabah 10, aksam 12', 'Istanbul avrupa yakasi avcilar merkez', 'istanbul', 'Kisisel Fitnes Egitimcisi(Personel Training)', 2500, 0, '2020-8-30', '2020-09-30', 'Avcilarda bulunan fitness salonumuzddda tecrubeli fitness egitimcisi aramaktayiz. Minimum 2 yil tecrubesi olmasi on kosuldur. Esnek calisma saatlerimiz vardir. Sigorta + yemek biz tarafindan ', 'onceligimiz lise mezunu ve esnek calisma saatlerini karsilayacak kisiler.', 'images/firmalar/default.jpg', 'Normal İş İlanı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uygulamabilgi`
--

CREATE TABLE `uygulamabilgi` (
  `uygulamaid` int(11) NOT NULL,
  `webuygulamamuhendisi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mobiluygulamamuhendisi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `webuygulamaadi` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'Kariyer Web Uygulama v 1.00',
  `mobiluygulamaadi` varchar(200) COLLATE utf8_turkish_ci DEFAULT 'Kariyer Mobil Uygulama v 1.00',
  `kullaniciadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uygulamabilgi`
--

INSERT INTO `uygulamabilgi` (`uygulamaid`, `webuygulamamuhendisi`, `mobiluygulamamuhendisi`, `webuygulamaadi`, `mobiluygulamaadi`, `kullaniciadi`, `sifre`) VALUES
(1, 'Yılmaz ÖLMEZ', 'Mustafa ALTUNDAĞ', 'Kariyer Web Uygulama v 1.00', 'Kariyer Mobil Uygulama v 1.00', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uygulamalog`
--

CREATE TABLE `uygulamalog` (
  `loginno` int(11) NOT NULL,
  `loginkullaniciadi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `loginzamani` timestamp NULL DEFAULT current_timestamp(),
  `logoutzamani` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `tur` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uygulamalog`
--

INSERT INTO `uygulamalog` (`loginno`, `loginkullaniciadi`, `loginzamani`, `logoutzamani`, `id`, `tur`) VALUES
(1, 'Pepsico Beverages', '2020-08-20 16:54:37', '2020-08-20 19:56:55', 1, 'firma'),
(2, 'QNB Finansbank', '2020-08-20 16:59:18', '2020-08-20 20:00:48', 2, 'firma'),
(3, 'Aras Kargo', '2020-08-20 17:02:26', '2020-08-20 20:04:21', 3, 'firma'),
(4, 'Pegasus', '2020-08-20 17:06:03', '2020-08-20 20:07:58', 4, 'firma'),
(5, 'Vakıf Bank', '2020-08-20 17:45:21', '2020-08-20 20:46:31', 5, 'firma'),
(6, 'EG Bilişim', '2020-08-20 17:48:21', '2020-08-20 20:49:39', 6, 'firma'),
(7, 'Toyota', '2020-08-20 17:52:51', NULL, 7, 'firma'),
(8, 'Setur Servis Turistik A.Ş.', '2020-08-21 15:11:32', '2020-08-21 18:18:33', 8, 'firma'),
(9, 'Yılmaz  Ölmez', '2020-08-21 15:19:41', '2020-08-21 18:25:33', 1, 'uye'),
(10, 'Furkan Ceylan', '2020-08-21 15:26:47', '2020-08-21 18:28:02', 2, 'uye'),
(11, 'Yılmaz  Ölmez', '2020-08-21 15:28:08', '2020-08-21 18:28:15', 1, 'uye'),
(12, 'Doğuş Uz', '2020-08-21 15:37:04', '2020-08-21 18:38:53', 3, 'uye'),
(13, 'İlhan Durmuş', '2020-08-21 15:40:10', '2020-08-21 18:48:33', 4, 'uye'),
(14, 'Hamdiye Ölmez', '2020-08-21 15:49:32', '2020-08-21 18:50:35', 5, 'uye'),
(15, 'Gülizar demir', '2020-08-21 15:51:40', '2020-08-21 19:02:11', 6, 'uye'),
(16, 'Mert Atay', '2020-08-21 16:02:55', '2020-08-21 19:03:36', 7, 'uye'),
(17, 'Aslı Ataç', '2020-08-21 16:04:17', '2020-08-21 19:05:34', 8, 'uye'),
(18, 'Mert Atay', '2020-08-21 16:05:38', '2020-08-21 19:06:36', 7, 'uye'),
(19, 'EG Bilişim', '2020-08-21 16:06:39', '2020-08-21 20:21:53', 6, 'firma'),
(20, 'Yılmaz  Ölmez', '2020-08-21 17:45:29', '2020-08-21 20:47:00', 1, 'uye'),
(21, 'Hamdiye Ölmez', '2020-08-21 17:47:03', '2020-08-21 20:47:50', 5, 'uye'),
(22, 'Yılmaz  Ölmez', '2020-08-21 17:47:54', '2020-08-21 21:00:31', 1, 'uye'),
(23, 'Yılmaz  Ölmez', '2020-08-21 18:00:35', '2020-08-21 21:00:38', 1, 'uye'),
(24, 'Pegasus', '2020-08-21 18:00:46', '2020-08-21 21:01:08', 4, 'firma'),
(25, 'Yılmaz  Ölmez', '2020-08-21 18:01:11', '2020-08-21 21:02:16', 1, 'uye'),
(26, 'Pegasus', '2020-08-21 18:02:21', '2020-08-21 21:02:44', 4, 'firma'),
(27, 'Yılmaz  Ölmez', '2020-08-21 18:02:47', '2020-08-21 21:03:07', 1, 'uye'),
(28, 'Pegasus', '2020-08-21 18:03:18', '2020-08-21 21:05:24', 4, 'firma'),
(29, 'Yılmaz  Ölmez', '2020-08-21 18:05:28', '2020-08-21 23:21:39', 1, 'uye'),
(30, 'Yılmaz  Ölmez', '2020-08-23 17:45:23', '2020-08-23 20:46:35', 1, 'uye'),
(31, 'Toyota', '2020-08-23 17:46:40', '2020-08-23 20:46:45', 7, 'firma'),
(32, 'Toyota', '2020-08-23 20:18:21', '2020-08-23 23:22:09', 7, 'firma'),
(33, 'Pegasus', '2020-08-23 20:22:24', '2020-08-24 12:30:01', 4, 'firma'),
(34, 'QNB Finansbank', '2020-08-24 09:30:32', '2020-08-25 00:27:29', 2, 'firma'),
(35, 'Yılmaz  Ölmez', '2020-08-25 08:41:35', NULL, 1, 'uye'),
(36, 'EG Bilişim', '2020-08-28 09:15:13', '2020-08-28 12:22:42', 6, 'firma'),
(37, 'Pepsico Bevera', '2020-08-28 09:22:47', '2020-08-28 12:26:53', 1, 'firma'),
(38, 'Aras Kargo', '2020-08-28 09:27:10', '2020-08-28 12:29:57', 3, 'firma'),
(39, 'Yılmaz  Ölmez', '2020-08-28 18:46:00', '2020-08-28 21:49:08', 1, 'uye'),
(40, 'Toyota', '2020-08-28 18:49:12', '2020-08-28 21:50:20', 7, 'firma'),
(41, 'Yılmaz  Ölmez', '2020-08-28 18:50:32', '2020-08-28 22:22:51', 1, 'uye'),
(42, 'Toyota', '2020-08-28 19:22:57', '2020-08-29 00:15:19', 7, 'firma'),
(43, 'Yılmaz  Ölmez', '2020-08-29 19:06:26', '2020-08-29 22:32:52', 1, 'uye'),
(44, 'Toyota', '2020-08-30 12:59:04', '2020-08-30 22:47:29', 7, 'firma'),
(45, 'Aras Kargo', '2020-08-31 14:12:22', '2020-08-31 18:53:32', 3, 'firma'),
(46, 'Yılmaz  Ölmez', '2020-08-31 15:53:35', '2020-08-31 18:53:45', 1, 'uye'),
(47, 'Yılmaz  Ölmez', '2020-08-31 15:56:29', NULL, 1, 'uye'),
(48, 'Yılmaz  Ölmez', '2020-08-31 21:52:56', '2020-09-01 00:54:35', 1, 'uye'),
(49, 'Yılmaz  Ölmez', '2020-08-31 22:18:22', '2020-09-01 01:18:30', 1, 'uye'),
(50, 'Avcilar Orhan Dogan Spor Kulubu ve Fitness', '2020-08-31 22:18:39', '2020-09-01 01:19:12', 11, 'firma'),
(51, 'Yılmaz  Ölmez', '2020-08-31 22:19:15', '2020-09-01 01:19:46', 1, 'uye'),
(52, 'Yılmaz  Ölmez', '2020-08-31 22:34:10', '2020-09-01 01:34:17', 1, 'uye'),
(53, 'Yılmaz  Ölmez', '2020-09-01 14:11:33', '2020-09-01 17:11:43', 1, 'uye'),
(54, 'Toyota', '2020-09-01 14:11:50', '2020-09-01 18:18:41', 7, 'firma'),
(55, 'Yılmaz  Ölmez', '2020-09-01 15:35:51', '2020-09-01 23:26:20', 1, 'uye'),
(56, 'Yılmaz  Ölmez', '2020-09-01 21:25:49', '2020-09-02 00:34:16', 1, 'uye'),
(57, 'Toyota', '2020-09-01 21:34:20', '2020-09-02 00:39:29', 7, 'firma'),
(58, 'Yılmaz  Ölmez', '2020-09-01 21:39:33', '2020-09-02 00:51:13', 1, 'uye'),
(59, 'Toyota', '2020-09-01 21:51:21', '2020-09-02 00:52:42', 7, 'firma'),
(60, 'Yılmaz  Ölmez', '2020-09-03 22:28:12', '2020-09-04 01:29:40', 1, 'uye'),
(61, 'Yılmaz  Ölmez', '2020-09-04 08:39:35', '2020-09-04 15:39:47', 1, 'uye'),
(62, 'Toyota', '2020-09-04 12:44:07', '2020-09-04 17:10:54', 7, 'firma'),
(63, 'Toyota', '2020-09-04 14:20:12', '2020-09-04 17:44:43', 7, 'firma'),
(64, 'Hamdiye Ölmez', '2020-09-04 14:44:47', '2020-09-04 17:45:04', 5, 'uye'),
(65, 'Toyota', '2020-09-04 14:45:07', '2020-09-04 17:57:24', 7, 'firma'),
(66, 'can ölmez', '2020-09-06 12:23:11', '2020-09-06 15:31:42', 31, 'uye'),
(67, 'Toyota', '2020-09-06 12:37:16', '2020-09-06 15:38:20', 7, 'firma'),
(68, 'Orhan Dogan Spor Kulubu', '2020-09-06 12:38:58', '2020-09-06 15:41:28', 11, 'firma'),
(69, 'Toyota', '2020-09-06 12:41:39', '2020-09-06 15:45:17', 7, 'firma'),
(70, 'Toyota', '2020-09-06 12:46:40', '2020-09-06 15:47:06', 7, 'firma'),
(71, 'Yılmaz  Ölmez', '2020-09-06 12:47:48', '2020-09-06 15:47:57', 1, 'uye');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyecvbilgi`
--
ALTER TABLE `uyecvbilgi`
  ADD PRIMARY KEY (`uyecvno`),
  ADD UNIQUE KEY `uyeeposta` (`uyecveposta`);

--
-- Tablo için indeksler `uyefirmabilgi`
--
ALTER TABLE `uyefirmabilgi`
  ADD PRIMARY KEY (`uyefirmano`),
  ADD KEY `uyefirmaunvani` (`uyefirmaunvani`);

--
-- Tablo için indeksler `uyefirmaisilanbasvurubilgi`
--
ALTER TABLE `uyefirmaisilanbasvurubilgi`
  ADD PRIMARY KEY (`isilanbasvuruno`),
  ADD KEY `isilanno` (`isilanno`),
  ADD KEY `uyefirmaunvani` (`uyefirmaunvani`),
  ADD KEY `isaciklamasi` (`isaciklamasi`),
  ADD KEY `uyefirmano` (`uyefirmano`);

--
-- Tablo için indeksler `uyefirmaisilanbilgi`
--
ALTER TABLE `uyefirmaisilanbilgi`
  ADD PRIMARY KEY (`isilanno`),
  ADD KEY `uyefirmano` (`uyefirmano`),
  ADD KEY `uyefirmaunvani` (`uyefirmaunvani`),
  ADD KEY `isaciklamasi` (`isaciklamasi`);

--
-- Tablo için indeksler `uygulamabilgi`
--
ALTER TABLE `uygulamabilgi`
  ADD PRIMARY KEY (`uygulamaid`);

--
-- Tablo için indeksler `uygulamalog`
--
ALTER TABLE `uygulamalog`
  ADD PRIMARY KEY (`loginno`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyecvbilgi`
--
ALTER TABLE `uyecvbilgi`
  MODIFY `uyecvno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `uyefirmabilgi`
--
ALTER TABLE `uyefirmabilgi`
  MODIFY `uyefirmano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `uyefirmaisilanbasvurubilgi`
--
ALTER TABLE `uyefirmaisilanbasvurubilgi`
  MODIFY `isilanbasvuruno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `uyefirmaisilanbilgi`
--
ALTER TABLE `uyefirmaisilanbilgi`
  MODIFY `isilanno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `uygulamabilgi`
--
ALTER TABLE `uygulamabilgi`
  MODIFY `uygulamaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `uygulamalog`
--
ALTER TABLE `uygulamalog`
  MODIFY `loginno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `uyefirmaisilanbasvurubilgi`
--
ALTER TABLE `uyefirmaisilanbasvurubilgi`
  ADD CONSTRAINT `uyefirmaisilanbasvurubilgi_ibfk_1` FOREIGN KEY (`isilanno`) REFERENCES `uyefirmaisilanbilgi` (`isilanno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uyefirmaisilanbasvurubilgi_ibfk_2` FOREIGN KEY (`uyefirmaunvani`) REFERENCES `uyefirmaisilanbilgi` (`uyefirmaunvani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uyefirmaisilanbasvurubilgi_ibfk_3` FOREIGN KEY (`isaciklamasi`) REFERENCES `uyefirmaisilanbilgi` (`isaciklamasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uyefirmaisilanbasvurubilgi_ibfk_4` FOREIGN KEY (`uyefirmano`) REFERENCES `uyefirmaisilanbilgi` (`uyefirmano`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `uyefirmaisilanbilgi`
--
ALTER TABLE `uyefirmaisilanbilgi`
  ADD CONSTRAINT `uyefirmaisilanbilgi_ibfk_1` FOREIGN KEY (`uyefirmano`) REFERENCES `uyefirmabilgi` (`uyefirmano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uyefirmaisilanbilgi_ibfk_2` FOREIGN KEY (`uyefirmaunvani`) REFERENCES `uyefirmabilgi` (`uyefirmaunvani`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
