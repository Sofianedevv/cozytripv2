@echo off
echo === Test de Sécurité CozyTrip ===

REM Définir les URLs à tester
set BASE_URL=http://localhost:8000

REM Test SQLMap
echo Test SQLMap en cours...
sqlmap -u "%BASE_URL%/hebergements" --batch --random-agent --level=5 --risk=3 > rapport_sqlmap.txt

REM Test des formulaires
sqlmap -u "%BASE_URL%/contact" --forms --batch --random-agent > rapport_sqlmap_forms.txt

REM Test XSS avec XSStrike
echo Test XSS en cours...
python XSStrike/xsstrike.py -u "%BASE_URL%/hebergements" --params > rapport_xss.txt

echo Test terminé. Génération du rapport d'analyse...

REM Création du rapport de sécurité
echo # Rapport de Sécurité CozyTrip > rapport_securite.md
echo ## Date du test: %date% %time% >> rapport_securite.md
echo. >> rapport_securite.md

echo ## Points d'entrée testés >> rapport_securite.md
echo - /hebergements >> rapport_securite.md
echo - /contact >> rapport_securite.md
echo - /hebergement/{id} >> rapport_securite.md
echo. >> rapport_securite.md

echo ## Résultats SQLMap >> rapport_securite.md
type rapport_sqlmap.txt >> rapport_securite.md
echo. >> rapport_securite.md

echo ## Résultats XSS >> rapport_securite.md
type rapport_xss.txt >> rapport_securite.md

echo Test de sécurité terminé. Consultez rapport_securite.md pour les résultats.
pause 