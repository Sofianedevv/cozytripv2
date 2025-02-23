@echo off
echo === Test SQLMap CozyTrip ===

REM Configuration
set SQLMAP_PATH=chemin\vers\sqlmap-dev
set TARGET_URL=http://localhost:8000

REM Test des points d'entrée sensibles
echo Test des points d'entrée en cours...

REM Test de la page hébergements
python %SQLMAP_PATH%\sqlmap.py -u "%TARGET_URL%/hebergements" --batch --random-agent --level=3 --risk=2 > rapport_sqlmap_hebergements.txt

REM Test du formulaire de contact
python %SQLMAP_PATH%\sqlmap.py -u "%TARGET_URL%/contact" --forms --batch > rapport_sqlmap_contact.txt

REM Test des URLs avec paramètres
python %SQLMAP_PATH%\sqlmap.py -u "%TARGET_URL%/hebergement/1" --batch > rapport_sqlmap_detail.txt

echo Test terminé. Consultez les rapports générés.
pause 