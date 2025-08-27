# Moje Notatki

Aplikacja webowa do zarządzania notatkami napisana w PHP w architekturze MVC.  
Pozwala na tworzenie, edytowanie, usuwanie i przeglądanie notatek.

---

## 📂 Struktura projektu

/config
config.php # konfiguracja bazy danych
/public
style.css # style CSS dla całej aplikacji
/src
/Controller
AbstractController.php
NoteController.php
/Exception
AppException.php
ConfigurationException.php
NotFoundException.php
StorageException.php
/Utils
debug.php
Database.php
Request.php
View.php
/templates
/pages
create.php
delete.php
edit.php
list.php
show.php
layout.php
index.php # punkt wejścia aplikacji

---

## ⚙️ Technologie

- PHP 8+
- MySQL
- HTML5, CSS3
- MVC (Model-View-Controller)
- Obsługa wyjątków i błędów
- Prosta warstwa widoków z layoutem

---

## 📝 Funkcjonalności

- **Tworzenie notatki** – wypełnij formularz tytułu i treści.
- **Lista notatek** – wyświetla wszystkie notatki w tabeli z opcjami podglądu, edycji i usunięcia.
- **Podgląd notatki** – szczegóły wybranej notatki.
- **Edycja notatki** – zmiana tytułu i treści notatki.
- **Usuwanie notatki** – potwierdzenie przed usunięciem.
- **Obsługa błędów** – brak notatki, niepoprawne ID, problemy z bazą danych.
- **Debugowanie** – funkcja `dump()` do wyświetlania danych w formacie czytelnym dla programisty.

---

## 🚀 Uruchomienie projektu lokalnie

1. Sklonuj repozytorium:
```bash
git clone https://github.com/AWADONN/nazwa-repozytorium.git

