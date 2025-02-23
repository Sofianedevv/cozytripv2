@echo off
echo === Test OWASP ZAP - CozyTrip ===
echo Date du test: %date% %time%

REM Configuration
set ZAP_PATH="C:\Program Files\ZAP\Zed Attack Proxy"
set TARGET_URL=http://localhost:8000
set REPORT_PATH=%~dp0rapports

REM Création du dossier rapports si n'existe pas
if not exist "%REPORT_PATH%" mkdir "%REPORT_PATH%"

REM Vérification de l'existence de ZAP
if not exist %ZAP_PATH%\zap.bat (
    echo Erreur: ZAP n'est pas trouvé dans %ZAP_PATH%
    echo Veuillez vérifier le chemin d'installation
    pause
    exit /b 1
)

REM Démarrage des tests
echo Configuration du test...
echo # Points testés > "%REPORT_PATH%\owasp_config.txt"
echo - URL: %TARGET_URL% >> "%REPORT_PATH%\owasp_config.txt"
echo - Date: %date% >> "%REPORT_PATH%\owasp_config.txt"

REM Lancement de ZAP
echo Démarrage de ZAP...
cd /d %ZAP_PATH%

REM Premier scan avec sortie HTML
start /wait zap.bat -cmd ^
    -quickurl %TARGET_URL% ^
    -quickprogress ^
    -quickout "%REPORT_PATH%\rapport_owasp.html" ^
    -config api.key=12345 ^
    -config scanner.attackOnStart=true ^
    -config view.mode=attack

REM Deuxième scan avec sortie Markdown
start /wait zap.bat -cmd ^
    -quickurl %TARGET_URL% ^
    -quickprogress ^
    -quickout "%REPORT_PATH%\rapport_owasp.md" ^
    -config api.key=12345 ^
    -config scanner.attackOnStart=true ^
    -config view.mode=attack

echo Test terminé. Consultez les rapports dans le dossier 'rapports'.
pause 

