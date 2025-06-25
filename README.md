# Magický portál do Bradavic 🧙‍♂️

Fanouškovská stránka inspirovaná světem Harryho Pottera. Najdeš zde přehled knih, filmů a her včetně popisů a zajímavostí, dále historii kouzelnického světa a také zábavné kvízy.

## 🔮 Funkce

- Přehled knih, filmů a her ze světa Harryho Pottera
- Zajímavosti o postavách, místech a historii kouzelnického světa
- Interaktivní kvízy
- Možnost přihlášení (demo účet)
- Databázové připojení pro plnou funkčnost

## 📽️ Videoukázka

![Ukázka stránky](readme-assets/Animace.gif)

## 💻 Použité technologie

- **PHP**
- **MySQL**
- **HTML / CSS / JavaScript**

## 🧪 Demo účet

Pro testování můžeš použít demo přihlašovací údaje:

- **Uživatelské jméno:** `demo@hogwarts@demo`  
- **Heslo:** `demo`

## ⚙️ Instalace a spuštění

1. Naklonuj repozitář:
   ```bash
   git clone https://github.com/marek-kulhavy/HP-stranky.git

2. Databáze:
- V kořenovém adresáři projektu najdeš soubor database.sql.
- Přihlas se do svého MySQL nástroje (např. phpMyAdmin, Adminer nebo příkazový řádek).
- Vytvoř novou databázi (např. hogwarts_portal) a importuj do ní soubor database.sql.
- V phpMyAdmin: vyber databázi → Import → Vybrat soubor → database.sql → Spustit

3. Konfigurace připojení k databázi:
- V projektu je soubor config.sample.php, který obsahuje ukázkovou konfiguraci.
- Tento soubor si zkopíruj a přejmenuj na config.php.

4. Spuštění projektu:
- Ujisti se, že máš běžící server (např. Apache nebo XAMPP/LAMP/WAMP) s podporou PHP a MySQL.
- Nahraj projekt do htdocs (pokud používáš XAMPP) nebo do root adresáře webserveru.
- V prohlížeči otevři: http://localhost/HP-stranky
- Přihlas se demo účtem (viz výše), ověř funkčnost.
