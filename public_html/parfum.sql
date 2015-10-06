create Database parfum;

use parfum;

create Table produktHE (ID int(10), Name char (20), Art char(20), grosse char(5), Preis float(10,2));

insert into produktHE (ID, Name, Art, grosse, preis) values(1,"Hugo Boss", "Eau de Toilette", "100ml", 55.99);
insert into produktHE (ID, Name, Art, grosse, preis) values(2,"Boss Orange", "Eau de Toilette", "50ml", 80.49);
insert into produktHE (ID, Name, Art, grosse, preis) values(3,"Armani", "Eau de Toilette", "200ml", 125.97);
insert into produktHE (ID, Name, Art, grosse, preis) values(4,"Gentleman", "Eau de Parfum", "30ml", 80.89);
insert into produktHE (ID, Name, Art, grosse, preis) values(5,"Givenchy", "Eau de Toilette", "100ml", 56.99);
insert into produktHE (ID, Name, Art, grosse, preis) values(6,"James Bond", "Eau de Toilette", "150ml", 75.99);
insert into produktHE (ID, Name, Art, grosse, preis) values(7,"Davidoff", "Eau de Toilette", "100ml", 52.22);
insert into produktHE (ID, Name, Art, grosse, preis) values(8,"JOOP", "Eau de Parfum", "100ml", 95.77);
insert into produktHE (ID, Name, Art, grosse, preis) values(8,"Jon", "Eau de Parfum", "100ml", 55.77);
insert into produktHE (ID, Name, Art, grosse, preis) values(8,"DIGGI-MOCH-MACH-MO", "Eau de Parfum", "100ml", 95.77);


create Table produktDA (ID int(10), Name char (20), Art char(20), grosse char(5), Preis float(10,2));


insert into produktDA (ID, Name, Art, grosse, preis) values(1,"Angel", "Eau de Toilette", "100ml", 86.99);
insert into produktDA (ID, Name, Art, grosse, preis) values(2,"Giorgio Armani", "Eau de Toilette", "50ml", 30.49);
insert into produktDA (ID, Name, Art, grosse, preis) values(3,"Chloé", "Eau de Toilette", "200ml", 115.45);
insert into produktDA (ID, Name, Art, grosse, preis) values(4,"Michael Kors", "Eau de Parfum", "30ml", 60.84);
insert into produktDA (ID, Name, Art, grosse, preis) values(5,"Tommy Hilfiger", "Eau de Toilette", "100ml", 56.99);
insert into produktDA (ID, Name, Art, grosse, preis) values(6,"Thierry Mugler", "Eau de Parfum", "150ml", 95.99);
insert into produktDA (ID, Name, Art, grosse, preis) values(7,"Narciso Rodriguez", "Eau de Toilette", "100ml", 52.22);
insert into produktDA (ID, Name, Art, grosse, preis) values(8,"Yves Saint Laurent", "Eau de Parfum", "100ml", 95.77);
insert into produktDA (ID, Name, Art, grosse, preis) values(8,"Girly", "Eau de Parfum", "100ml", 95.77);
insert into produktDA (ID, Name, Art, grosse, preis) values(8,"RFH-DUFT", "Eau de RFH", "500ml", 10.77);


create Table user(ID int(5), Name char(20), Nachname char(20), username char(20), Passwort char(50), Email char(20), Geschlecht char(10));

insert into user (ID, Name, Nachname, username, Passwort, Email, Geschlecht) values (1,"Muhammed","Dagtekin","MochMoch",SHA1('muhammed'),"muhammed.dag@gmx.de", "Maenlich");
insert into user (ID, Name, Nachname, username, Passwort, Email, Geschlecht) values (2,"Muhammet","Celal","MOCEL",SHA1('muhammet'),"celal.MO@gmx.de", "Maenlich");
insert into user (ID, Name, Nachname, username, Passwort, Email, Geschlecht) values (3,"Mahmut","Kiroh","Mahmma",SHA1('mahmut'),"Mahm.Kiros@gmx.de", "Maenlich");
insert into user (ID, Name, Nachname, username, Passwort, Email, Geschlecht) values (4,"Diggi","DI CArlo","Delta",SHA1('DICARLO885'),"YEAJ.aaa@gmx.de", "Maenlich");
