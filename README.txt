POKRETANJE APLIKACIJE:

1.) instalirati XAMPP (https://www.apachefriends.org/xampp-files/7.4.4/xampp-windows-x64-7.4.4-1-VC15-installer.exe)
2.) otvoriti XAMPP i pokrenuti Apache server (klikom na gumb Start)
3.) dokument aplikacija.php kopirati u folder C:\xampp\htdocs
4.) otvoriti preglednik i upisati http://localhost/aplikacija.php


O aplikaciji:

Aplikacija služi za upis novih članova u planinarsko društvo. 
Svi koji se žele učlaniti u planinarsko društvo ispune formu, čiji se odgovor (ispunjena forma) pohranjuje u XML formatu koje prima planinarsko društvo.
Kako bi se razlikovale prijavnice od korisnika do korisnika, u zapisu naziva pojedine prijavnice je datum i vrijeme kada je isti i ispunjen. 
XML dokument je generiran, odnosno zapisan putem php-a, a kako bi forma bila oku primamljivija koristila sam Bootstrap. 

U zip-u se još nalazi i primjer generiranog xml-a.


Link na github: https://github.com/dzugec/XMLprogramiranje---projekt