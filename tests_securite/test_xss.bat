@echo off
echo === Test XSS CozyTrip ===
echo Date du test: %date% %time%

REM Configuration
set PYTHON_PATH=C:\Users\Sofia\AppData\Local\Programs\Python\Python313\python.exe
set XSSTRIKE_PATH=%~dp0XSStrike\xsstrike.py
set TARGET_URL=http://localhost:8000

REM Installation des dépendances si nécessaire
echo Installation des dépendances...
cd XSStrike
%PYTHON_PATH% -m pip install -r requirements.txt
cd ..

echo Création du rapport...
echo # Rapport de Test XSS - CozyTrip > rapport_xss.md
echo ## Date: %date% %time% >> rapport_xss.md
echo. >> rapport_xss.md

REM Test 1: Page des hébergements
echo Test 1: Analyse de la page hébergements...
echo ### Test 1: Page Hébergements >> rapport_xss.md
%PYTHON_PATH% %XSSTRIKE_PATH% -u "%TARGET_URL%/hebergements" --crawl >> rapport_xss.md

REM Test 2: Formulaire de contact
echo Test 2: Analyse du formulaire de contact...
echo ### Test 2: Formulaire de Contact >> rapport_xss.md
%PYTHON_PATH% %XSSTRIKE_PATH% -u "%TARGET_URL%/contact" --data "contact[votre_email]=test@test.com&contact[message]=test" >> rapport_xss.md

REM Test 3: Commentaires hébergement
echo Test 3: Analyse des commentaires...
echo ### Test 3: Commentaires >> rapport_xss.md
%PYTHON_PATH% %XSSTRIKE_PATH% -u "%TARGET_URL%/hebergement/1" --crawl >> rapport_xss.md

REM Test 4: Recherche
echo Test 4: Analyse de la recherche...
echo ### Test 4: Recherche >> rapport_xss.md
%PYTHON_PATH% %XSSTRIKE_PATH% -u "%TARGET_URL%/hebergements?search=test" --fuzzer >> rapport_xss.md

echo Test terminé. Consultez rapport_xss.md pour les résultats.
pause 