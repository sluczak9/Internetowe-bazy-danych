
# Tytuł projektu

Projekt HelpDesk

Projekt jest systemem zarządzania pomocy technicznej typu Help Desk, opierającym się o integrację z bazą danych w celu przetrzymywania Ticketów (zgłoszeń) rejestrowanych przez klientów.
System będzie wspomagał firmę, której to pracownicy (klienci) mogą logować się do systemu i zgłaszać problemy techniczne dot. sprzętu i oprogramowania.
Użytkownik będzie miał możliwość utworzenia konta w systemie, dzięki któremu otrzyma możliwość zgłaszania usterek.
Zgłaszając usterkę w systemie Pracownik Help Desk’u będzie mógł przyjrzeć się opisanemu problemowi, odczytać lokalizację dodania zgłoszenia, kto dodał zgłoszenie, 
oraz godzinę o której zgłoszenie zostało zarejestrowane.
System nadzoruje Administrator, który ma możliwość sprawdzenia wszystkich wysłanych zgłoszeń, czy edycji danych pracowników.

## Wymagania systemowe
Apache 2.4.41
PHP 7.4.3
MySQL 8.0.21

## Instalacja

INSTALACJA Apache, PHP, MySQL
----------- 
1. Aktualizacja repozytoriów
Korzystając z konta z uprawnieniami administratora wykonujemy polecenia:

sudo apt update

1. Instalacja serwera WWW Apache
Korzystając z konta z uprawnieniami administratora wykonujemy polecenia:

sudo apt install -y apache2

2. Instalacja PHP
Korzystając z konta z uprawnieniami administratora wykonujemy polecenia:

sudo apt install -y php libapache2-mod-php

Po jej ukończeniu restartujemy usługę Apache komendą:
sudo systemctl restart apache2

3. Instalacja serwer baz danych MySQL
Korzystając z konta z uprawnieniami administratora wykonujemy polecenia:

sudo apt install -y mysql-server

Jeśli po ukończeniu instalacji Narzędzie Zabezpieczeń nie uruchomi się automatycznie wprowadzamy komendę:

sudo mysql_secure_installation utility

Konfigurujemy serwer MySQL.
Po zakończeniu konfiguracji uruchamiamy usługę przy pomocy komendy:

sudo systemctl start mysql

---------

4. Instalacja phpMyAdmin
Korzystając z konta z uprawnieniami administratora wykonujemy polecenia:

sudo apt-get install -y phpmyadmin

Podczas instalacji wybieramy instalację opartą o Apache2

Po zakończeniu instalacji restartujemy usługę Apache przy pomocy komendy:

sudo systemctl restart apache2

Następnie należy skonfigurować dostęp użytkownika root do bazy MySQL.
#Domyślnie podczas instalacji MySQL wersji 5.7 (i nowszej) użytkownik root używa autoryzacji sposobem
# "auth_socket" niż hasłem. Pozwala to utrzymać większy poziom bezpieczeństwa, lecz tworzy problemy podczas gdy zewnętrzna aplikacja (taka jak phpmyadmin) rząda dostępu do użytkownika.
Zmieniamy metodę autoryzacji użytkownika root z "auth_socket" na "mysql_native_password"

sudo mysql

SELECT user,authentication_string,plugin,host FROM mysql.user;

Sprawdzamy czy root nie posiada autentication_string oraz jego plugin to auth_socket.
Zmieniamy metodę autoryzacji na mysql_native_password i ustawiamy hasło

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'TU_WPROWADZ_HASLO';

Na koniec odświeżamy tabelę uprawnień komendą:

FLUSH PRIVILEGES;

5. Zaimportowanie bazy danych
Otwieramy przeglądarkę i wprowadzamy adres 127.0.0.1/phpmyadmin
Logujemy się do bazy danych użytkownikiem root i hasłem ustawionym w poprzednim kroku.
Przechodzimy na zakładkę Import, wybieramy plik z wyeksportowaną bazą danych i czekamy na ukończenie procesu.

6. Umieszczenie plików serwisu WWW w katalogu Apache 
Korzystając z konta z uprawnieniami administratora nadajemy uprawnienia do domyślnego folderu "html" usługi Apache:

sudo chmod 775 /var/www/html/

Po przekopiowaniu plików wchodzimy do powyższego katalogu i edytujemy plik conf.ig.php, zmieniamy
- Login do bazy danych (np. root)
- Hasło do bazy danych (ustawione w poprzednich krokach)
- dbname (Nazwa bazy danych (O ile zmienialismy po imporcie))

Po zapisaniu pliku konfiguracyjnego i odwiedzeniu adresu 127.0.0.1 w przeglądarce strona powinna wyświetlić nam się na ekranie.



## Autor

* **Patryk Smuklerz, Sebastian Łuczak, Krzysztof Koplin** 
* *nr  album: 380947, 376271, 380963*
* * smuga1, sluczak9, kkoplin*

## Wykorzystane zewnętrzne biblioteki

* bootstrap (4.3.1)
* jquery (v3.4.1)