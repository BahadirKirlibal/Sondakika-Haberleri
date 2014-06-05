-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 05 Haz 2014, 19:15:52
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sondakika`
--
CREATE DATABASE IF NOT EXISTS `sondakika` DEFAULT CHARACTER SET latin5 COLLATE latin5_turkish_ci;
USE `sondakika`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE IF NOT EXISTS `haberler` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `haberbaslik` varchar(255) NOT NULL,
  `habericerik` text NOT NULL,
  `habereklenmetarihdamgasi` varchar(255) NOT NULL,
  `habereklenmetarihi` varchar(255) NOT NULL,
  `sondakikabitissuresidamgasi` varchar(255) NOT NULL,
  `sondakikabitissuresi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `haberbaslik`, `habericerik`, `habereklenmetarihdamgasi`, `habereklenmetarihi`, `sondakikabitissuresidamgasi`, `sondakikabitissuresi`) VALUES
(3, 'ANASAYFAKÜNYESİTENE EKLEİLETİŞİMTürkçeEnglishDeutschKurdîAZ&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;&#1575;&#1585;&#1583;&#1608; Timeturk: Haber, Timeturk Haber, HABER, Günün haberleri, yorum, spor, ekonomi, politika, sanat, sinema  DOLAR 2.18 EUR', 'AK Parti Genel Başkan Yardımcısı Süleyman Soylu bugün Türkiye''yi sarsan dinlemelerle ilgili önemli açıklamalarda bulundu. \r\n\r\n\r\nAK Parti Genel Başkan Yardımcısı Süleyman Soylu A Haber Ankara Temsilcisi Murat Akgün''ün sorularını yanıtladı.\r\nTürkiye gündemine bomba gibi düşen telekulak listesini değerlendiren Soylu, "Türkiye büyük bir operasyon ile karşı karşıya" diyerek; durumun milli güvenlik tehdidi olduğunu dile getirdi. Daha önce kendisinin de dinlendiğini belirten Soylu, konunun uluslararası boyutta olduğuna dikkat çekti.\r\n\r\nKARAR VERİCİLERİN DİNLENMESİ GÜVENLİK TEHDİDİ\r\n\r\nBunun yargı eli ile yapılabilmesi, bir ülke açısından en önemli tehlikelerden birisini teşkil eder. Bu ülke ve devlet içerisinde farklı bir yapının, farklı bir zihniyete çalıştığı ve farklı sonuçlara ulaşmak istediği temel tezi güçlendirir. Bu bir tehlikedir. İkincisi ise; yepyeni bir dünyadayız. Dış politika, güvenlik algılarının değiştiği, uluslararası rekabetlerin çok farklılaştığı bir dünyadayız.\r\nBir ülkede hangi alanda olursa olsun, vericilerinizle ilgili, böyle dinlemeler söz konusuysa ki söz konusu olduğu açıkça ortada, bunlar sizin önemli derecede altını çizdiğiniz insanlarsa burada bir problem vardır. Eğer bu uluslararası alandaki rakiplerinize sıçrarsa bu bir milli güvenlik tehdidi olarak karşınıza çıkar. Karar vericilerinizin veya siyaset adamlarınızın veya özel sektördeki kişilerin veya farklı insanların kişisel değerlendirmelerini özel konuşmalarının onların hareket kabiliyetlerinin, tarzlarının ipuçlarını verecek şekilde ortaya çıkarsa ülkenizin hareket alanını belirleyen insanları deşifre etmiş anlamına gelirsiniz ki bu bir ülke için milli güvenlik problemidir.', '1393276024', '24.02.2014 21:07:04', '1393276204', '24.02.2014 21:10:04'),
(4, 'Zuckerberg: WhatsApp tek başına 19 milyar dolar eder', 'nden ulaşabilirsiniz.\r\nzuckerbergMobile World Congresste sahne alan önemli isimlerden biri de Facebook CEOsu Mark Zuckerbergdi. David Kirkpatrickin yönettiği oturumda Zuckerberg, WhatsApp satın alması sonrasında ilk kez sahneye çıkmış oldu. Ve Kirkpatrickin ilk sorusu tabii ki WhatsApp satın alması oldu. 19 milyar dolarlık satın almayı iki şirketin birbirine uyan amaçlarına bağlayan Zuckerberg, insanları birbirine bağlamak misyonunu iki şirketin de benimsediğini paylaştı.\r\nWhatsAppın sağladığı hizmet sayesinde tek başına 19 milyar dolar edeceğini söyleyen Zuckerberg, şirketin iş modelinin Facebookun sahip olduğu dünyayı birleştirme misyonuna çok uygun olduğunu belirtti. Bugünkü konuşmasının internet.org merkezinde olacağını paylaşan Zuckerberg, tüm insanlığın internete ulaşımının ana amaçları olduğunu belirtti.\r\nBasit veri erişiminin bile olmadığı ülkeler olduğunu belirten Zuckerberg, 911 gibi acil erişim noktasının bu projede sağlanılmak istenen temel hizmetlerden biri olduğunu belirtti. Bu serviste kullanıcının ücretsiz veya çok ucuz bir şekilde yavaş hızda internete bağlanmasını sağlamak istediklerini dile getiren Zuckerberg, hava durumunu öğrenmeyi, Wikipediada bir sayfaya ulaşmayı, basit bir arama yapmayı veya sosyal ağlara bağlanmayı sağlamak istediklerini belirtti.\r\nGelişmekte olan ülkelerin bazılarında ISPlerle çeşitli anlaşmalar yaptıklarını belirten Zuckerberg, mobil operatörlerden temel veri erişimini ücretsiz olarak sunmak istediklerini belirterek, birçok operatörle özel ortaklıklar yaptıklarını ama bunların arasında birkaç tane dahil etmek istediklerini açıkladı.\r\nBildiğiniz gibi ülkemizde de operatörler bir dönem sosyal ağlara erişimi ücretsiz hale getirmişti, hatta bazılarının anlaşmaları halen devam ediyor olabilir. Buna göre mobil erişimde sosyal ağlarda harcanan veri miktarı kullanıcıların kotalarından düşülmüyor.\r\nBir milyar kişiyi birleştirdiklerini belirten Zuckerberg, önümüzdeki yıllarda 1.1  1.2 milyar gibi ufak büyümeler yerine daha hızlı büyüme rakamlarına ulaşmak istediklerini ve ekosistemi tüm dünyaya yaymanın ekonomi için çok faydalı olacağının altını çizdi. Zuckerberg, model başarılı şekilde çalışır ve operatörlerle ortaklıkları başarılı şekilde yürütülürse, 10 yıl gibi vadede 2.5  3 milyar kullanıcıya ulaşılabileceklerini ve bunun tüm internet şirketleri için iyi geri dönüşleri olacağını öne sürdü.\r\nDaha önce MWCde yer almayan Zuckerberg, neredeyse tüm konuşmasında mobil operatörlere ve yapabilecekleri ortaklıklara yönelik olarak konuştu. Buradaki konuşmayla belli bir kitleye ulaşmaya çalıştığı belli olan Zuckerbergin önümüzdeki günlerde bunun sonuçlarını alıp farklı ortaklıklar yapabileceğini tahmin ediyoruz.\r\nKonuşmanın bitmesinin ardından birkaç soruya cevap veren Zuckerberg, Snapchat tarafından reddedilen Facebook teklifi  ve tekrar deneyip denemeyeceği sorulduğunda; 16 milyar dolara bir şirket alınca biraz beklersin değil mi? diyerek cevap verd', '1393276602', '24.02.2014 21:16:42', '1393276782', '24.02.2014 21:19:42'),
(5, 'Zuckerberg: WhatsApp tek başına 19 milyar dolar eder', 'nden ulaşabilirsiniz.\r\nzuckerbergMobile World Congresste sahne alan önemli isimlerden biri de Facebook CEOsu Mark Zuckerbergdi. David Kirkpatrickin yönettiği oturumda Zuckerberg, WhatsApp satın alması sonrasında ilk kez sahneye çıkmış oldu. Ve Kirkpatrickin ilk sorusu tabii ki WhatsApp satın alması oldu. 19 milyar dolarlık satın almayı iki şirketin birbirine uyan amaçlarına bağlayan Zuckerberg, insanları birbirine bağlamak misyonunu iki şirketin de benimsediğini paylaştı.\r\nWhatsAppın sağladığı hizmet sayesinde tek başına 19 milyar dolar edeceğini söyleyen Zuckerberg, şirketin iş modelinin Facebookun sahip olduğu dünyayı birleştirme misyonuna çok uygun olduğunu belirtti. Bugünkü konuşmasının internet.org merkezinde olacağını paylaşan Zuckerberg, tüm insanlığın internete ulaşımının ana amaçları olduğunu belirtti.\r\nBasit veri erişiminin bile olmadığı ülkeler olduğunu belirten Zuckerberg, 911 gibi acil erişim noktasının bu projede sağlanılmak istenen temel hizmetlerden biri olduğunu belirtti. Bu serviste kullanıcının ücretsiz veya çok ucuz bir şekilde yavaş hızda internete bağlanmasını sağlamak istediklerini dile getiren Zuckerberg, hava durumunu öğrenmeyi, Wikipediada bir sayfaya ulaşmayı, basit bir arama yapmayı veya sosyal ağlara bağlanmayı sağlamak istediklerini belirtti.\r\nGelişmekte olan ülkelerin bazılarında ISPlerle çeşitli anlaşmalar yaptıklarını belirten Zuckerberg, mobil operatörlerden temel veri erişimini ücretsiz olarak sunmak istediklerini belirterek, birçok operatörle özel ortaklıklar yaptıklarını ama bunların arasında birkaç tane dahil etmek istediklerini açıkladı.\r\nBildiğiniz gibi ülkemizde de operatörler bir dönem sosyal ağlara erişimi ücretsiz hale getirmişti, hatta bazılarının anlaşmaları halen devam ediyor olabilir. Buna göre mobil erişimde sosyal ağlarda harcanan veri miktarı kullanıcıların kotalarından düşülmüyor.\r\nBir milyar kişiyi birleştirdiklerini belirten Zuckerberg, önümüzdeki yıllarda 1.1  1.2 milyar gibi ufak büyümeler yerine daha hızlı büyüme rakamlarına ulaşmak istediklerini ve ekosistemi tüm dünyaya yaymanın ekonomi için çok faydalı olacağının altını çizdi. Zuckerberg, model başarılı şekilde çalışır ve operatörlerle ortaklıkları başarılı şekilde yürütülürse, 10 yıl gibi vadede 2.5  3 milyar kullanıcıya ulaşılabileceklerini ve bunun tüm internet şirketleri için iyi geri dönüşleri olacağını öne sürdü.\r\nDaha önce MWCde yer almayan Zuckerberg, neredeyse tüm konuşmasında mobil operatörlere ve yapabilecekleri ortaklıklara yönelik olarak konuştu. Buradaki konuşmayla belli bir kitleye ulaşmaya çalıştığı belli olan Zuckerbergin önümüzdeki günlerde bunun sonuçlarını alıp farklı ortaklıklar yapabileceğini tahmin ediyoruz.\r\nKonuşmanın bitmesinin ardından birkaç soruya cevap veren Zuckerberg, Snapchat tarafından reddedilen Facebook teklifi  ve tekrar deneyip denemeyeceği sorulduğunda; 16 milyar dolara bir şirket alınca biraz beklersin değil mi? diyerek cevap verd', '1393284164', '24.02.2014 23:22:44', '1393284344', '24.02.2014 23:25:44'),
(6, 'deneme', 'sondaki mami bize geldi', '1393362711', '25.02.2014 21:11:51', '1393362771', '25.02.2014 21:12:51'),
(7, 'bahadir kirlibal ekibiyle yeni bir girisim baslatti', '', '', '', '', ''),
(8, 'bahadir kirlibal ekibiyle yeni bir girisim baslatti', '', '', '', '', ''),
(9, 'dsgdsgds', 'sdfdsdsfsdf', '1399974523', '13.05.2014 09:48:43', '1399974583', '13.05.2014 09:49:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
