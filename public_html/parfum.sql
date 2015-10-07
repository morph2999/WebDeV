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
insert into produktHE (Name, Art, grosse, preis) values("Jon", "Eau de Parfum", "100ml", 55.77);
insert into produktHE (Name, Art, grosse, preis) values("DIGGI-MOCH-MACH-MO", "Eau de Parfum", "100ml", 95.77);


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
