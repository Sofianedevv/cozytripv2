@echo off
echo === Test de charge CozyTrip ===

REM Définir le chemin complet vers vegeta
set VEGETA="C:\Tools\vegeta\vegeta.exe"

REM Test 1: Charge légère (5 req/s pendant 30s)
echo Test 1: Charge légère...
%VEGETA% attack -targets=targets.txt -rate=5 -duration=30s | %VEGETA% encode > results_light.gob

REM Test 2: Charge moyenne (20 req/s pendant 30s)
echo Test 2: Charge moyenne...
%VEGETA% attack -targets=targets.txt -rate=20 -duration=30s | %VEGETA% encode > results_medium.gob

REM Test 3: Charge intensive (50 req/s pendant 30s)
echo Test 3: Charge intensive...
%VEGETA% attack -targets=targets.txt -rate=50 -duration=30s | %VEGETA% encode > results_heavy.gob

REM Génération des rapports
echo Génération des rapports...

REM Rapports charge légère
%VEGETA% report results_light.gob > rapport_light.txt
%VEGETA% plot results_light.gob > graph_light.html

REM Rapports charge moyenne
%VEGETA% report results_medium.gob > rapport_medium.txt
%VEGETA% plot results_medium.gob > graph_medium.html

REM Rapports charge intensive
%VEGETA% report results_heavy.gob > rapport_heavy.txt
%VEGETA% plot results_heavy.gob > graph_heavy.html

REM Rapport JSON complet
%VEGETA% report -type=json results_light.gob > rapport_light.json
%VEGETA% report -type=json results_medium.gob > rapport_medium.json
%VEGETA% report -type=json results_heavy.gob > rapport_heavy.json

echo Test terminé. Génération du rapport d'analyse...

REM Création du rapport d'analyse
echo # Rapport d'analyse de performance CozyTrip > rapport_analyse.md
echo ## Date du test: %date% %time% >> rapport_analyse.md
echo. >> rapport_analyse.md
echo ## Résumé des tests >> rapport_analyse.md
echo. >> rapport_analyse.md
type rapport_light.txt >> rapport_analyse.md
echo. >> rapport_analyse.md
echo ## Charge moyenne >> rapport_analyse.md
type rapport_medium.txt >> rapport_analyse.md
echo. >> rapport_analyse.md
echo ## Charge intensive >> rapport_analyse.md
type rapport_heavy.txt >> rapport_analyse.md

echo Test complet terminé. Consultez rapport_analyse.md pour les résultats.
pause 