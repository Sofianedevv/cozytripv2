# Rapport d'analyse de performance CozyTrip 
## Date du test: 16/01/2025 19:00:12,29 
 
## Résumé des tests 
 
Requests      [total, rate, throughput]         150, 5.03, 3.65
Duration      [total, attack, wait]             33.974s, 29.797s, 4.177s
Latencies     [min, mean, 50, 90, 95, 99, max]  1.367s, 3.65s, 3.357s, 4.383s, 4.407s, 4.481s, 4.525s
Bytes In      [total, mean]                     7308517, 48723.45
Bytes Out     [total, mean]                     0, 0.00
Success       [ratio]                           82.67%
Status Codes  [code:count]                      200:124  500:26  
Error Set:
500 Internal Server Error
 
## Charge moyenne 
Requests      [total, rate, throughput]         600, 20.04, 3.86
Duration      [total, attack, wait]             40.139s, 29.939s, 10.2s
Latencies     [min, mean, 50, 90, 95, 99, max]  288.518ms, 5.592s, 1.205s, 17.353s, 20.074s, 20.968s, 21.205s
Bytes In      [total, mean]                     15591531, 25985.88
Bytes Out     [total, mean]                     0, 0.00
Success       [ratio]                           25.83%
Status Codes  [code:count]                      200:155  500:31  502:414  
Error Set:
500 Internal Server Error
502 Bad Gateway
 
## Charge intensive 
Requests      [total, rate, throughput]         1500, 50.03, 1.52
Duration      [total, attack, wait]             54.778s, 29.98s, 24.799s
Latencies     [min, mean, 50, 90, 95, 99, max]  557.228ms, 3.727s, 604.982ms, 16.692s, 30.009s, 30.014s, 30.026s
Bytes In      [total, mean]                     25770892, 17180.59
Bytes Out     [total, mean]                     0, 0.00
Success       [ratio]                           5.53%
Status Codes  [code:count]                      0:108  200:83  500:18  502:1291  
Error Set:
500 Internal Server Error
502 Bad Gateway
Get "https://localhost:8000/contact": net/http: request canceled (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/mention": context deadline exceeded (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/hebergement_1": net/http: request canceled (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/hebergement/categorie/villa": context deadline exceeded (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/": net/http: request canceled (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/hebergements": context deadline exceeded
Get "https://localhost:8000/mention": net/http: request canceled (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/hebergement/categorie/villa": context deadline exceeded
Get "https://localhost:8000/": context deadline exceeded
Get "https://localhost:8000/hebergements": net/http: request canceled (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/hebergement_1": context deadline exceeded
Get "https://localhost:8000/hebergement/categorie/villa": net/http: request canceled (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/mention": context deadline exceeded
Get "https://localhost:8000/contact": context deadline exceeded (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/": context deadline exceeded (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/hebergements": context deadline exceeded (Client.Timeout exceeded while awaiting headers)
Get "https://localhost:8000/contact": context deadline exceeded
Get "https://localhost:8000/hebergement_1": context deadline exceeded (Client.Timeout exceeded while awaiting headers)
