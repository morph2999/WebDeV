create Database parfum;

use parfum;

create Table produktHE (ID int NOT NULL AUTO_INCREMENT, Name char (20), Art char(20), grosse char(5), Preis float(10,2), PRIMARY KEY(id));

insert into produktHE (Name, Art, grosse, preis) values("Hugo Boss", "Eau de Toilette", "100ml", 55.99);
insert into produktHE (Name, Art, grosse, preis) values("Boss Orange", "Eau de Toilette", "50ml", 80.49);
insert into produktHE (Name, Art, grosse, preis) values("Armani", "Eau de Toilette", "200ml", 125.97);
insert into produktHE (Name, Art, grosse, preis) values("Gentleman", "Eau de Parfum", "30ml", 80.89);
insert into produktHE (Name, Art, grosse, preis) values("Givenchy", "Eau de Toilette", "100ml", 56.99);
insert into produktHE (Name, Art, grosse, preis) values("James Bond", "Eau de Toilette", "150ml", 75.99);
insert into produktHE (Name, Art, grosse, preis) values("Davidoff", "Eau de Toilette", "100ml", 52.22);
insert into produktHE (Name, Art, grosse, preis) values("JOOP", "Eau de Parfum", "100ml", 95.77);
insert into produktHE (Name, Art, grosse, preis) values("Jean Paul", "Eau de Parfum", "100ml", 55.77);
insert into produktHE (Name, Art, grosse, preis) values("Chanel", "Eau de Parfum", "100ml", 95.77);

create Table produktDA (ID int NOT NULL AUTO_INCREMENT, Name char (20), Art char(20), grosse char(5), Preis float(10,2), PRIMARY KEY(id));

insert into produktDA (Name, Art, grosse, preis) values("Angel", "Eau de Toilette", "100ml", 86.99);
insert into produktDA (Name, Art, grosse, preis) values("Giorgio Armani", "Eau de Toilette", "50ml", 30.49);
insert into produktDA (Name, Art, grosse, preis) values("Chloé", "Eau de Toilette", "200ml", 115.45);
insert into produktDA (Name, Art, grosse, preis) values("Michael Kors", "Eau de Parfum", "30ml", 60.84);
insert into produktDA (Name, Art, grosse, preis) values("Tommy Hilfiger", "Eau de Toilette", "100ml", 56.99);
insert into produktDA (Name, Art, grosse, preis) values("Thierry Mugler", "Eau de Parfum", "150ml", 95.99);
insert into produktDA (Name, Art, grosse, preis) values("Narciso Rodriguez", "Eau de Toilette", "100ml", 52.22);
insert into produktDA (Name, Art, grosse, preis) values("Yves Saint Laurent", "Eau de Parfum", "100ml", 95.77);
insert into produktDA (Name, Art, grosse, preis) values("Girly", "Eau de Parfum", "100ml", 95.77);
insert into produktDA (Name, Art, grosse, preis) values("RFH-DUFT", "Eau de RFH", "500ml", 10.77);

create Table user(ID int NOT NULL AUTO_INCREMENT, Name char(20), Nachname char(20), username char(20), Passwort char(50), Email char(20), Geschlecht char(10), PRIMARY KEY(id));

insert into user (Name, Nachname, username, Passwort, Email, Geschlecht) values ("Muhammed","Dagtekin","MochMoch",SHA1('muhammed'),"muhammed.dag@gmx.de", "Maenlich");
insert into user (Name, Nachname, username, Passwort, Email, Geschlecht) values ("Muhammet","Celal","MOCEL",SHA1('muhammet'),"celal.MO@gmx.de", "Maenlich");
insert into user (Name, Nachname, username, Passwort, Email, Geschlecht) values ("Mahmut","Kiroh","Mahmma",SHA1('mahmut'),"Mahm.Kiros@gmx.de", "Maenlich");
insert into user (Name, Nachname, username, Passwort, Email, Geschlecht) values ("Diggi","DI CArlo","Delta",SHA1('DICARLO885'),"YEAJ.aaa@gmx.de", "Maenlich");

ALTER TABLE `produkthe` ADD `Bildurl` TEXT NOT NULL AFTER `Preis`;
ALTER TABLE `produktda` ADD `Bildurl` TEXT NOT NULL AFTER `Preis`;

UPDATE `parfum`.`produktda` SET `Bildurl` = "http://ecx.images-amazon.com/images/I/31gLPhLsW2L.jpg" Where `ID` = 1;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://cdn1.feelunique.com/img/products/53356/Michael_Kors_Sporty_Citrus_Eau_De_Parfum_30ml_1412702637_main.jpg" Where `ID` = 2;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://cdn.idealo.com/folder/Product/3333/7/3333733/s1_produktbild_mid/chloe-eau-de-parfum.jpg" Where `ID` = 3;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://cdn1.feelunique.com/img/products/53356/Michael_Kors_Sporty_Citrus_Eau_De_Parfum_30ml_1412702637_main.jpg" Where `ID` = 4;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://www.parfum24.de/media/catalog/product/cache/6/thumbnail/265x265/9df78eab33525d08d6e5fb8d27136e95/t/o/tommy-hilfiger-tommy-girl-edc-vapo-100ml.jpg" Where `ID` = 5;
UPDATE `parfum`.`produktda` SET `Bildurl` = "https://media.douglas.de/408504/900_0/Thierry_Mugler-Alien-Spray_nachfullbar.jpg" Where `ID` = 6;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://cdn01.flaconi.de/media/catalog/product/n/a/narciso-rodriguez-for-her-eau-de-toilette-100ml_8.jpg" Where `ID` = 7;
UPDATE `parfum`.`produktda` SET `Bildurl` = "https://media.douglas.de/473145/900_0/Yves_Saint_Laurent-Parisienne.jpg" Where `ID` = 8;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://www.world-discounter.com/pic/61100078a.jpg" Where `ID` = 9;
UPDATE `parfum`.`produktda` SET `Bildurl` = "http://www.positiv-magazin.de/wp-content/uploads/2011/07/Socken.jpg" Where `ID` = 10;

UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://i00.twenga.com/beauty-gesundheit/eau-de-toilette-men/hugo-boss-just-different-p_32710101vb.jpg" Where `ID` = 1;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://images.hugoboss.com/is/image/boss/20_hbeu58013651_999_21?$re_detail$" Where `ID` = 2;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://cdn.idealo.com/folder/Product/3304/7/3304791/s1_produktbild_mid/giorgio-armani-code-homme-eau-de-toilette.jpg" Where `ID` = 3;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://cdn.idealo.com/folder/Product/2227/8/2227835/s1_produktbild_mid/dolce-gabbana-d-g-the-one-gentleman-eau-de-toilette-30-ml.jpg" Where `ID` = 4;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://cdn.idealo.com/folder/Product/600/7/600735/s1_produktbild_mid/givenchy-gentleman-eau-de-toilette-100-ml.jpg" Where `ID` = 5;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://cdn.idealo.com/folder/Product/3512/4/3512450/s1_produktbild_mid/james-bond-007-eau-de-toilette.jpg" Where `ID` = 6;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://i.iparfumerie.de/view/5/davidoff/ddfcwmm_aedt10-01/davidoff-cool-water-man-eau-de-toilette-fur-herren___13.jpg" Where `ID` = 7;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://www.parfumerie-discounter.de/bilder/produkte/gross/JOOP-HOMME-Eau-De-Toilette-125-ml.jpg" Where `ID` = 8;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "https://bilder.baur.de/pool/formata/1574888.jpg" Where `ID` = 9;
UPDATE `parfum`.`produkthe` SET `Bildurl` = "http://cdn.idealo.com/folder/Product/4738/7/4738748/s1_produktbild_mid/chanel-bleu-de-chanel-eau-de-parfum-150-ml.jpg" Where `ID` = 10;