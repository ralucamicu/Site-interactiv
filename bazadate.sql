-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";

CREATE TABLE tabel_categorii (id_cat int(2) NOT NULL PRIMARY KEY , nume_cat varchar(30),imagine text );

INSERT INTO tabel_categorii VALUES(1,'Textile'),(2,'Evenimente'),(3,'Stiker'),(4,'Lemn'),(5,'Plexiglas'),(6,'Polistiren');

CREATE TABLE tabel_produse (id_cat int(2) NOT NULL ,
  id_produs int(7) NOT NULL PRIMARY KEY, 
  nume_produs varchar(30),
   imagine text NOT NULL,
    id_descriere int(6) ,
     pret float(5));

INSERT INTO tabel_produse VALUES(1,'1101001','Tricou ren','Tricou_8(1101001).jpg','101',45.99),
(1,'1201002','Set tricou petrecere burlacie','Set_tricou_4(1201002).jpg','101',50),
(1, '1203001', 'Echipament sportiv', 'Echipamente_sportive_1(1203001).jpg', '101', 150),
(1, '1201003', 'Set tricou viitori parinti', 'Tricou_1(1201003).jpg', '101', 50),
(1, '1101004', 'Tricou pentru mama', 'Tricou_10(1101004).jpg', '101', 50),
(1, '1101005', 'Tricou pentru Chef', 'Tricou_6(1101005).jpg', '101', 50),
(2, '2201001', 'Invitatie botez', 'Invitatie_botez_1(2201001).jpg', '201', 0.50),
(2, '2201002', 'Invitatie nunta', 'Invitatie_nunta_1(2201002).jpg', '201', 0.50),
(2, '2102001', 'Casuta pentru bani', 'Casuta_pentru_bani_1(2102001).jpg', '202001', 100),
(2, '2103001', 'Topper pentru tort', 'Topper_1(2103001).jpg', '203001', 10),
(2, '2102002', 'Casuta pentru verighete', 'Casuta_pentru_verighete_1(2102002).jpg', '202002', 100),
(3, '3101001', 'Stiker auto cu pisica', 'Stiker_auto_2(3101001).jpg', '301001', 50),
(3, '3101002', 'Stiker auto BABY ON BOARD', 'Stiker_auto_3(3101002).jpg', '301002', 30),
(3, '3103001', 'Stiker frizerie canina', 'Stiker_frizerie_1(3103001).jpg', '303001', 300),
(3, '3104001', 'Stiker pentru scari', 'Stiker_scari_1(3104001).jpg', '304001', 500),
(3, '3104002', 'Stiker pentru scari', 'Stiker_scari_2(3104002).jpg', '304001', 500),
(4, '4106001', 'Decorațiune Crăciun', 'Decoratiu_Craciun_1(4106001).jpg', '406001', 15),
(4,'4102001', 'Ramă foto', 'Rama_foto_1(4102001).jpg','402001', 15),
(4, '4104001', 'Cutie din lemn pentru băuturi', 'Cutie_vin(4104001).jpg', '404001', 30),
(4, '2103001', 'Topper pentru tort', 'Topper_1(2103001).jpg', '203001', 10),
(4, '4103001', 'Fotogravură in forma de inima', 'Fotogravura1(4103001).jpg', '403001', 50),
(4, '4201001', 'Globuri','Globuri_1(4201001).jpg ', '401', 10),
(4, '4201002', 'Globuri','Globuri_2(4201002).jpg ', '401', 10),
(6, '6101001', 'Masă candybar', 'Masa_polistiren_candybar_1(6101001).jpg', '601', 500),
(6, '6101002', 'Masă candybar', 'Masa_polistiren_candybar_2(6101002).jpg', '601', 500);



CREATE TABLE tabel_descriere (id_descriere int(6)NOT NULL PRIMARY KEY ,
 dimensiuni text NOT NULL,
 material text not null);

 CREATE TABLE tabel_stoc (id_produs varchar(5),
 stoc varchar(13),
 marime varchar(4));

CREATE TABLE tabel_culoare (cod_culoare varchar(7));
CREATE TABLE tabel_marime (cod_marime varchar(4));

INSERT INTO tabel_descriere VALUES('101','Marimi disponibile: XS, S, M, L, XL, XXL','Material: 100% BUMBAC'),
('201','Lungime: 15 cm, latime: 10 cm','Material: Hartie cartonata'),
('202001','Lungime: 30 cm, latime: 20 cm, inaltime: 20 cm','Material: lemn'),
('203001','Lungime: 25 cm, latime: 20 cm, grosime: 0.5 cm','Material: lemn'),
('202002','Lungime: 10 cm, latime: 10 cm, inaltime: 5 cm','Material: lemn'),
('301001','Lungime: 10 cm, latime: 10 cm','Material: lemn'),
('301002','Lungime: 10 cm, latime: 10 cm','Material: Folie Oracal'),
('304001','Lungime: 300 cm, latime: 150 cm','Material: Folie Oracal'),
('303001','Lungime: 150 cm, latime: 150 cm','Material: Folie Oracal'),
('406001','Lungime: 5 cm, latime: 2 cm, inaltime: 10 cm','Material: lemn'),
('402001','Lungime: 15 cm, latime: 10 cm','Material: lemn'),
('404001','Lungime: 10 cm, latime: 10 cm, inaltime: 30 cm','Material: lemn'),
('403001','Lungime: 12 cm, latime: 10 cm','Material: lemn'),
('401','Diametru: 10 cm','Material: lemn'),
('601','Lungime: 220 cm, latime: 50 cm, inaltime: 80 cm','Material: polistiren');

INSERT INTO tabel_culoare VALUES('#FFFFFF'),('#000000'),('#0000FF'),('#FF0000'),('#FFFF00'),('#00FF00'),('#ff6600'),('#9900ff');

INSERT INTO tabel_marime VALUES('XS'),('S'),('M'),('L'),('XL'),('XXL');

CREATE TABLE tabel_produse_personalizare (id_cat int(2) NOT NULL ,
  id_produs int(7) NOT NULL PRIMARY KEY, 
  nume_produs varchar(30),
   imagine text NOT NULL,
    id_descriere int(6) ,
     pret float(5));

INSERT INTO tabel_produse_personalizare VALUES(1,'1101001','Tricou','Tricou(1101001).jpg','101',45.99),
(2, '2201002', 'Invitatie nunta', 'Invitatie_nunta_1(2201002).jpg', '201', 0.50),
(3, '3101001', 'Stiker auto', 'Stiker_auto_2(3101001).jpg', '301001', 50),
(4, '4103001', 'Fotogravură in forma de inima', 'Fotogravura1(4103001).jpg', '403001', 50),
(4, '4201001', 'Globuri','Glob(4201001).jpg ', '401', 10);

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
);
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

  CREATE TABLE `comenzi` (
  `order_id` int(10) NOT NULL,
  `nume_client` int(10) NOT NULL,
  `prenume_client` int(100) NOT NULL,
  `adresa` int(100) NOT NULL,
  `judet` text NOT NULL,
  `localitate` text NOT NULL,
  `cod_postal` text NOT NULL,
  `order_date` date NOT NULL,
  `total` float NOT NULL,
  `order_status` text NOT NULL
);

ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`order_id`);

  CREATE TABLE `produse_comandate` (
  `order_id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `nume_produs` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `subtotal` float NOT NULL,
  `order_status` text NOT NULL,
  `telefon` text NOT NULL
);
ALTER TABLE `produse_comandate`
  ADD PRIMARY KEY (`order_id`);

CREATE TABLE `comenzi_personalizate` (
  `nr.crt` int(5) NOT NULL,
  `id_produs` int(7) NOT NULL,
  `nume` text NOT NULL,
  `prenume` text NOT NULL,
  `email` text NOT NULL,
  `telefon` text NOT NULL,
  `adresa` text NOT NULL,
  `judet` text NOT NULL,
  `localitate` text NOT NULL,
  `cod_postal` text NOT NULL,
  `mesaj` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `pret` float NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
);
ALTER TABLE `comenzi_personalizate`
  ADD PRIMARY KEY (`nr.crt`);

  ALTER TABLE `comenzi_personalizate`
  MODIFY `nr.crt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;