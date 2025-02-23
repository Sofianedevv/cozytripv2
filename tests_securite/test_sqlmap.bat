@echo off
echo === Test de Sécurité SQLMap - CozyTrip ===
echo Date du test: %date% %time%

REM Configuration des chemins
set PYTHON_PATH=C:\Users\Sofia\AppData\Local\Programs\Python\Python313\python.exe
set SQLMAP_PATH=%~dp0sqlmap\sqlmap.py
set TARGET_URL=http://localhost:8000

echo Création du rapport...
echo # Rapport de Test SQLMap - CozyTrip > rapport_sqlmap.md
echo ## Date: %date% %time% >> rapport_sqlmap.md
echo. >> rapport_sqlmap.md

REM Test 1: Page des hébergements
echo Test 1: Analyse de la page hébergements...
echo ### Test 1: Page Hébergements >> rapport_sqlmap.md
"%PYTHON_PATH%" "%SQLMAP_PATH%" -u "%TARGET_URL%/hebergements" ^
    --batch ^
    --random-agent ^
    --level=3 ^
    --risk=2 ^
    --threads=4 ^
    --dbms=mysql ^
    --output-dir=./sqlmap_results ^
    --forms >> rapport_sqlmap.md

REM Test 2: Formulaire de contact
echo Test 2: Analyse du formulaire de contact...
echo ### Test 2: Formulaire de Contact >> rapport_sqlmap.md
"%PYTHON_PATH%" "%SQLMAP_PATH%" -u "%TARGET_URL%/contact" ^
    --batch ^
    --random-agent ^
    --forms ^
    --dbms=mysql ^
    --output-dir=./sqlmap_results ^
    --level=3 >> rapport_sqlmap.md

REM Test 3: Page détail hébergement
echo Test 3: Analyse page détail hébergement...
echo ### Test 3: Détail Hébergement >> rapport_sqlmap.md
"%PYTHON_PATH%" "%SQLMAP_PATH%" -u "%TARGET_URL%/hebergement/1" ^
    --batch ^
    --random-agent ^
    --dbms=mysql ^
    --output-dir=./sqlmap_results ^
    --level=3 >> rapport_sqlmap.md

REM Test 4: Recherche par catégorie
echo Test 4: Analyse recherche par catégorie...
echo ### Test 4: Recherche Catégorie >> rapport_sqlmap.md
"%PYTHON_PATH%" "%SQLMAP_PATH%" -u "%TARGET_URL%/hebergement/categorie/villa" ^
    --batch ^
    --random-agent ^
    --dbms=mysql ^
    --output-dir=./sqlmap_results ^
    --level=3 >> rapport_sqlmap.md

echo Test terminé. Consultez rapport_sqlmap.md pour les résultats.
pause 