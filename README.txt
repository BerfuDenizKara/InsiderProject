****************************************
Berfu Deniz Kara
****************************************

****************Frontend****************
1) index.php üzerinden html ile ödevde sunduğunuza benzer bir 
önyüz oluşturmaya çalıştım.
2) Zamanım yetseydi SQL verilerini de tablolara dağıtmaya 
çalışacaktım.

*****************Backend****************
1) Web sitesi için Xammp kullandım.
2) Dil olarak PHP seçtim.
3) SQL tablosunu PhpMyAdmin kullanarak oluşturdum.
4) Queryleri monteCarlo.php dosyası üzerinden yazdım.
5) OOP temellerine uygun hale getirmek için
MVC sistemine geçmeye çalışacaktım ama zamanım yetmedi.
6) OOP temelli olması için database connection için PDO kullandım.
7) Team verilerini tutan objeler üzerinden çalıştım.


******************SQL*******************
1) Database için PhpMyAdmin kullandım.
2) team adında bir tablo yarattım.
	id : primary key
	name 
	points : O zamana kadar ki toplam puanı
	played : O zamana kadar ki oynadığı maç sayısı
	win    : O zamana kadar ki kazandığı maç sayısı
	drawn  : O zamana kadar ki berabere kaldığı maç sayısı
	lost   : O zamana kadar ki kaybettiği maç sayısı
	goaldif: O zamana kadar ki attığı gol - yediği gol

3) 4 Takım ekledim; Chelsa, Arsenal, Liverpool ve Everton


****************Algoritma****************
1) Premiere league kurallarını öğrendim;
	-> her takımın (proje için) 7 özelliği var
	   (name, points, played, win, drawn, lost, goalDifference)
	-> Kazanan takım 3 puan alır
	-> Berabere kalan takımlar 1 puan alır
	-> Kaybeden takım 0 puan alır

2) Monte Carlo simülasyonunu araştırdım;
	-> Simülasyon kontrollü random verilerle gerçekleştiriliyor
	-> Simülasyon defalarca kez gerçekleştiriliyor
	-> Bu sayı ne kadar artarsa simülasyon o kadar gerçekçi oluyor

3) Algoritma planım şu şekildeydi;
	-> 4 takım var
	-> Her takım birbiriyle 2 şer kez maç yapacak
	-> Totalde 12 maç gerçekleşecek
	-> Haftada 2 maçtan lig 6 hafta sürecek
	-> Takımların maç şekli: 2*(1-2, 1-3, 1-4, 2-3, 2-4, 3-4)  
	   
	-> O haftanın maça çıkacak takımlarını simülasyona koyucam
	-> Simülasyon 1000 kere gerçekleşicek
	-> Simülasyon bulunan haftadan 6.haftanın sonuna kadar sürecek
	-> Bir arraye 0 ile 10 arasında değer koyucam
	-> 0dan 11 tane, 1den 10 tane, ...,10dan 1 tane koyucam
	-> Maça çıkacak 2 takım adına bu arrayden random indexteki 
	   2 sayıyı attıkları gol sayısı olarak alıcam
	-> Çıkan sonuca göre takımların değerleri yenilenicek
	-> Takımların toplam puanlarını yüzdelik değer üzerinden sıralıcam
	   ve buna göre kazanma yüzdeleri belirlenicek
