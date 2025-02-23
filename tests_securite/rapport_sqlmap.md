# Rapport de Test SQLMap - CozyTrip 
## Date: 17/01/2025  0:09:40,58 
 
### Test 1: Page Hébergements 
        ___
       __H__
 ___ ___[,]_____ ___ ___  {1.9.1.2#dev}
|_ -| . [,]     | .'| . |
|___|_  [,]_|_|_|__,|  _|
      |_|V...       |_|   https://sqlmap.org

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting @ 00:09:41 /2025-01-17/

[00:09:41] [WARNING] using 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap_results' as the output directory
[00:09:42] [INFO] fetched random HTTP User-Agent header value 'Mozilla/4.0 (compatible; MSIE 4.5; Windows NT 5.1; .NET CLR 2.0.40607)' from file 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap\data\txt\user-agents.txt'
[00:09:42] [INFO] testing connection to the target URL
got a 307 redirect to 'https://localhost:8000/hebergements'. Do you want to follow? [Y/n] Y
[00:09:46] [INFO] searching for forms
[00:09:47] [CRITICAL] there were no forms found at the given target URL

[*] ending @ 00:09:47 /2025-01-17/

### Test 2: Formulaire de Contact 
        ___
       __H__
 ___ ___[(]_____ ___ ___  {1.9.1.2#dev}
|_ -| . [']     | .'| . |
|___|_  [)]_|_|_|__,|  _|
      |_|V...       |_|   https://sqlmap.org

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting @ 00:09:48 /2025-01-17/

[00:09:48] [WARNING] using 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap_results' as the output directory
[00:09:48] [INFO] fetched random HTTP User-Agent header value 'Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14' from file 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap\data\txt\user-agents.txt'
[00:09:48] [INFO] testing connection to the target URL
got a 307 redirect to 'https://localhost:8000/contact'. Do you want to follow? [Y/n] Y
you have not declared cookie(s), while server wants to set its own ('PHPSESSID=kun61ighttj...p23muh1c4i'). Do you want to use those [Y/n] Y
[00:09:49] [INFO] searching for forms
[1/1] Form:
POST https://localhost:8000/contact
POST data: contact%5Bvotre_email%5D=&contact%5Bmessage%5D=&contact%5Benvoyer%5D=&contact%5B_token%5D=e5.oUupORxXpCDX0Ih3Wm-pCzUQCmuGdj4s9ip5xszEoTw.9D-dDnshzU3l4vwZbAjTZmBWRAPMTgtpvkYM8ZiO02vDJZ59URyXa6Lj-w
do you want to test this form? [Y/n/q] 
> Y
Edit POST data [default: contact%5Bvotre_email%5D=&contact%5Bmessage%5D=&contact%5Benvoyer%5D=&contact%5B_token%5D=e5.oUupORxXpCDX0Ih3Wm-pCzUQCmuGdj4s9ip5xszEoTw.9D-dDnshzU3l4vwZbAjTZmBWRAPMTgtpvkYM8ZiO02vDJZ59URyXa6Lj-w] (Warning: blank fields detected): contact[votre_email]=&contact[message]=&contact[envoyer]=&contact[_token]=e5.oUupORxXpCDX0Ih3Wm-pCzUQCmuGdj4s9ip5xszEoTw.9D-dDnshzU3l4vwZbAjTZmBWRAPMTgtpvkYM8ZiO02vDJZ59URyXa6Lj-w
do you want to fill blank fields with random values? [Y/n] Y
POST parameter 'contact[_token]' appears to hold anti-CSRF token. Do you want sqlmap to automatically update it in further requests? [y/N] N
[00:09:50] [INFO] using 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap_results\results-01172025_1209am.csv' as the CSV results file in multiple targets mode
[00:09:50] [INFO] checking if the target is protected by some kind of WAF/IPS
[00:09:51] [INFO] testing if the target URL content is stable
[00:09:51] [WARNING] target URL content is not stable (i.e. content differs). sqlmap will base the page comparison on a sequence matcher. If no dynamic nor injectable parameters are detected, or in case of junk results, refer to user's manual paragraph 'Page comparison'
how do you want to proceed? [(C)ontinue/(s)tring/(r)egex/(q)uit] C
[00:09:51] [INFO] testing if POST parameter 'contact[votre_email]' is dynamic
[00:09:51] [WARNING] POST parameter 'contact[votre_email]' does not appear to be dynamic
[00:09:52] [WARNING] heuristic (basic) test shows that POST parameter 'contact[votre_email]' might not be injectable
[00:09:52] [INFO] testing for SQL injection on POST parameter 'contact[votre_email]'
[00:09:52] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:09:53] [WARNING] reflective value(s) found and filtering out
[00:10:17] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (subquery - comment)'
[00:10:30] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (comment)'
[00:10:39] [INFO] testing 'Boolean-based blind - Parameter replace (original value)'
[00:10:40] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL)'
[00:10:40] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL - original value)'
[00:10:41] [INFO] testing 'Boolean-based blind - Parameter replace (CASE)'
[00:10:42] [INFO] testing 'Boolean-based blind - Parameter replace (CASE - original value)'
[00:10:42] [INFO] testing 'HAVING boolean-based blind - WHERE, GROUP BY clause'
[00:10:59] [INFO] testing 'Generic inline queries'
[00:10:59] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (MySQL comment)'
[00:11:07] [INFO] testing 'MySQL RLIKE boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause'
[00:11:22] [INFO] testing 'MySQL AND boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause (MAKE_SET)'
[00:11:40] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:11:42] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause (original value)'
[00:11:43] [INFO] testing 'MySQL < 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:11:43] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:11:52] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[00:12:01] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[00:12:08] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:12:15] [INFO] testing 'MySQL >= 5.1 error-based - PROCEDURE ANALYSE (EXTRACTVALUE)'
[00:12:23] [INFO] testing 'MySQL >= 5.0 error-based - Parameter replace (FLOOR)'
[00:12:23] [INFO] testing 'MySQL >= 5.1 error-based - Parameter replace (EXTRACTVALUE)'
[00:12:23] [INFO] testing 'MySQL >= 5.1 error-based - ORDER BY, GROUP BY clause (EXTRACTVALUE)'
[00:12:24] [INFO] testing 'MySQL >= 4.1 error-based - ORDER BY, GROUP BY clause (FLOOR)'
[00:12:25] [INFO] testing 'MySQL inline queries'
[00:12:25] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[00:12:30] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[00:12:38] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[00:12:42] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[00:12:49] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP)'
[00:12:58] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP - comment)'
[00:13:02] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP - comment)'
[00:13:06] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind'
[00:13:14] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind (query SLEEP)'
[00:13:23] [INFO] testing 'MySQL AND time-based blind (ELT)'
[00:13:32] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace'
[00:13:32] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace (substraction)'
[00:13:33] [INFO] testing 'MySQL >= 5.0.12 time-based blind - ORDER BY, GROUP BY clause'
it is recommended to perform only basic UNION tests if there is not at least one other (potential) technique found. Do you want to reduce the number of requests? [Y/n] Y
[00:13:33] [INFO] testing 'Generic UNION query (NULL) - 1 to 10 columns'
[00:13:41] [INFO] testing 'Generic UNION query (random number) - 1 to 10 columns'
[00:13:48] [INFO] testing 'MySQL UNION query (NULL) - 1 to 10 columns'
[00:13:57] [INFO] testing 'MySQL UNION query (random number) - 1 to 10 columns'
[00:14:05] [WARNING] POST parameter 'contact[votre_email]' does not seem to be injectable
[00:14:05] [INFO] testing if POST parameter 'contact[message]' is dynamic
[00:14:06] [INFO] POST parameter 'contact[message]' appears to be dynamic
[00:14:06] [WARNING] heuristic (basic) test shows that POST parameter 'contact[message]' might not be injectable
[00:14:06] [INFO] testing for SQL injection on POST parameter 'contact[message]'
[00:14:06] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:14:16] [WARNING] user aborted during detection phase
how do you want to proceed? [ne(X)t target/(s)kip current test/(e)nd detection phase/(n)ext parameter/(c)hange verbosity/(q)uit] 
[00:14:16] [WARNING] HTTP error codes detected during run:
502 (Bad Gateway) - 1 times
[00:14:16] [INFO] you can find results of scanning in multiple targets mode inside the CSV file 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap_results\results-01172025_1209am.csv'

[*] ending @ 00:14:16 /2025-01-17/

### Test 3: Détail Hébergement 
        ___
       __H__
 ___ ___[(]_____ ___ ___  {1.9.1.2#dev}
|_ -| . [,]     | .'| . |
|___|_  [']_|_|_|__,|  _|
      |_|V...       |_|   https://sqlmap.org

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting @ 00:14:20 /2025-01-17/

[00:14:20] [WARNING] using 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap_results' as the output directory
[00:14:20] [INFO] fetched random HTTP User-Agent header value 'Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2' from file 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap\data\txt\user-agents.txt'
[00:14:21] [WARNING] you've provided target URL without any GET parameters (e.g. 'http://www.site.com/article.php?id=1') and without providing any POST parameters through option '--data'
do you want to try URI injections in the target URL itself? [Y/n/q] Y
[00:14:21] [INFO] testing connection to the target URL
got a 307 redirect to 'https://localhost:8000/hebergement/1'. Do you want to follow? [Y/n] Y
[00:14:21] [INFO] testing if the target URL content is stable
[00:14:22] [WARNING] URI parameter '#1*' does not appear to be dynamic
[00:14:22] [WARNING] heuristic (basic) test shows that URI parameter '#1*' might not be injectable
[00:14:23] [INFO] testing for SQL injection on URI parameter '#1*'
[00:14:23] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:14:24] [WARNING] reflective value(s) found and filtering out
[00:14:37] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (subquery - comment)'
[00:14:42] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (comment)'
[00:14:49] [INFO] testing 'Boolean-based blind - Parameter replace (original value)'
[00:14:49] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL)'
[00:14:50] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL - original value)'
[00:14:50] [INFO] testing 'Boolean-based blind - Parameter replace (CASE)'
[00:14:50] [INFO] testing 'Boolean-based blind - Parameter replace (CASE - original value)'
[00:14:50] [INFO] testing 'HAVING boolean-based blind - WHERE, GROUP BY clause'
[00:15:05] [INFO] testing 'Generic inline queries'
[00:15:05] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (MySQL comment)'
[00:15:12] [INFO] testing 'MySQL RLIKE boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause'
[00:15:24] [INFO] testing 'MySQL AND boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause (MAKE_SET)'
[00:15:35] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:15:37] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause (original value)'
[00:15:37] [INFO] testing 'MySQL < 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:15:37] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:15:41] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[00:15:46] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[00:15:51] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:15:56] [INFO] testing 'MySQL >= 5.1 error-based - PROCEDURE ANALYSE (EXTRACTVALUE)'
[00:16:01] [INFO] testing 'MySQL >= 5.0 error-based - Parameter replace (FLOOR)'
[00:16:01] [INFO] testing 'MySQL >= 5.1 error-based - Parameter replace (EXTRACTVALUE)'
[00:16:02] [INFO] testing 'MySQL >= 5.1 error-based - ORDER BY, GROUP BY clause (EXTRACTVALUE)'
[00:16:02] [INFO] testing 'MySQL >= 4.1 error-based - ORDER BY, GROUP BY clause (FLOOR)'
[00:16:03] [INFO] testing 'MySQL inline queries'
[00:16:03] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[00:16:06] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[00:16:10] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[00:16:13] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[00:16:17] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP)'
[00:16:21] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP - comment)'
[00:16:23] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP - comment)'
[00:16:26] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind'
[00:16:31] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind (query SLEEP)'
[00:16:34] [INFO] testing 'MySQL AND time-based blind (ELT)'
[00:16:38] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace'
[00:16:38] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace (substraction)'
[00:16:39] [INFO] testing 'MySQL >= 5.0.12 time-based blind - ORDER BY, GROUP BY clause'
it is recommended to perform only basic UNION tests if there is not at least one other (potential) technique found. Do you want to reduce the number of requests? [Y/n] Y
[00:16:39] [INFO] testing 'Generic UNION query (NULL) - 1 to 10 columns'
[00:16:49] [INFO] testing 'Generic UNION query (random number) - 1 to 10 columns'
[00:17:00] [INFO] testing 'MySQL UNION query (NULL) - 1 to 10 columns'
[00:17:10] [INFO] testing 'MySQL UNION query (random number) - 1 to 10 columns'
[00:17:21] [WARNING] URI parameter '#1*' does not seem to be injectable
other non-custom parameters found. Do you want to process them too? [Y/n/q] Y
[00:17:21] [WARNING] parameter 'User-Agent' does not appear to be dynamic
[00:17:21] [WARNING] heuristic (basic) test shows that parameter 'User-Agent' might not be injectable
[00:17:21] [INFO] testing for SQL injection on parameter 'User-Agent'
[00:17:21] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:17:27] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (subquery - comment)'
[00:17:30] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (comment)'
[00:17:33] [INFO] testing 'Boolean-based blind - Parameter replace (original value)'
[00:17:33] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL)'
[00:17:33] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL - original value)'
[00:17:34] [INFO] testing 'Boolean-based blind - Parameter replace (CASE)'
[00:17:34] [INFO] testing 'Boolean-based blind - Parameter replace (CASE - original value)'
[00:17:34] [INFO] testing 'HAVING boolean-based blind - WHERE, GROUP BY clause'
[00:17:40] [INFO] testing 'Generic inline queries'
[00:17:40] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (MySQL comment)'
[00:17:43] [INFO] testing 'MySQL RLIKE boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause'
[00:17:48] [INFO] testing 'MySQL AND boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause (MAKE_SET)'
[00:17:54] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:17:54] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause (original value)'
[00:17:55] [INFO] testing 'MySQL < 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:17:55] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:17:59] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[00:18:03] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[00:18:07] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:18:11] [INFO] testing 'MySQL >= 5.1 error-based - PROCEDURE ANALYSE (EXTRACTVALUE)'
[00:18:15] [INFO] testing 'MySQL >= 5.0 error-based - Parameter replace (FLOOR)'
[00:18:15] [INFO] testing 'MySQL >= 5.1 error-based - Parameter replace (EXTRACTVALUE)'
[00:18:16] [INFO] testing 'MySQL >= 5.1 error-based - ORDER BY, GROUP BY clause (EXTRACTVALUE)'
[00:18:16] [INFO] testing 'MySQL >= 4.1 error-based - ORDER BY, GROUP BY clause (FLOOR)'
[00:18:16] [INFO] testing 'MySQL inline queries'
[00:18:17] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[00:18:19] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[00:18:23] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[00:18:25] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[00:18:29] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP)'
[00:18:32] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP - comment)'
[00:18:34] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP - comment)'
[00:18:36] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind'
[00:18:40] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind (query SLEEP)'
[00:18:44] [INFO] testing 'MySQL AND time-based blind (ELT)'
[00:18:48] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace'
[00:18:48] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace (substraction)'
[00:18:48] [INFO] testing 'MySQL >= 5.0.12 time-based blind - ORDER BY, GROUP BY clause'
[00:18:49] [INFO] testing 'Generic UNION query (NULL) - 1 to 10 columns'
[00:18:59] [INFO] testing 'Generic UNION query (random number) - 1 to 10 columns'
[00:19:08] [INFO] testing 'MySQL UNION query (NULL) - 1 to 10 columns'
[00:19:15] [WARNING] user aborted during detection phase
how do you want to proceed? [(S)kip current test/(e)nd detection phase/(n)ext parameter/(c)hange verbosity/(q)uit] 
[00:19:17] [WARNING] HTTP error codes detected during run:
404 (Not Found) - 566 times

[*] ending @ 00:19:17 /2025-01-17/

### Test 4: Recherche Catégorie 
        ___
       __H__
 ___ ___[.]_____ ___ ___  {1.9.1.2#dev}
|_ -| . [)]     | .'| . |
|___|_  [)]_|_|_|__,|  _|
      |_|V...       |_|   https://sqlmap.org

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting @ 00:19:21 /2025-01-17/

[00:19:21] [WARNING] using 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap_results' as the output directory
[00:19:21] [INFO] fetched random HTTP User-Agent header value 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15 (.NET CLR 3.5.30729; .NET4.0C) FirePHP/0.5' from file 'C:\Users\Sofia\Downloads\Cozytrip-master\tests_securite\sqlmap\data\txt\user-agents.txt'
[00:19:21] [WARNING] you've provided target URL without any GET parameters (e.g. 'http://www.site.com/article.php?id=1') and without providing any POST parameters through option '--data'
do you want to try URI injections in the target URL itself? [Y/n/q] Y
[00:19:21] [INFO] testing connection to the target URL
got a 307 redirect to 'https://localhost:8000/hebergement/categorie/villa'. Do you want to follow? [Y/n] Y
[00:19:22] [INFO] checking if the target is protected by some kind of WAF/IPS
[00:19:22] [INFO] testing if the target URL content is stable
[00:19:23] [WARNING] URI parameter '#1*' does not appear to be dynamic
[00:19:24] [WARNING] heuristic (basic) test shows that URI parameter '#1*' might not be injectable
[00:19:25] [INFO] testing for SQL injection on URI parameter '#1*'
[00:19:25] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:19:25] [WARNING] reflective value(s) found and filtering out
[00:19:41] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (subquery - comment)'
[00:19:47] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (comment)'
[00:19:54] [INFO] testing 'Boolean-based blind - Parameter replace (original value)'
[00:19:54] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL)'
[00:19:55] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL - original value)'
[00:19:56] [INFO] testing 'Boolean-based blind - Parameter replace (CASE)'
[00:19:56] [INFO] testing 'Boolean-based blind - Parameter replace (CASE - original value)'
[00:19:57] [INFO] testing 'HAVING boolean-based blind - WHERE, GROUP BY clause'
[00:20:09] [INFO] testing 'Generic inline queries'
[00:20:10] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (MySQL comment)'
[00:20:16] [INFO] testing 'MySQL RLIKE boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause'
[00:20:28] [INFO] testing 'MySQL AND boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause (MAKE_SET)'
[00:20:39] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:20:40] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause (original value)'
[00:20:41] [INFO] testing 'MySQL < 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:20:41] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:20:46] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[00:20:52] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[00:20:58] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:21:05] [INFO] testing 'MySQL >= 5.1 error-based - PROCEDURE ANALYSE (EXTRACTVALUE)'
[00:21:10] [INFO] testing 'MySQL >= 5.0 error-based - Parameter replace (FLOOR)'
[00:21:10] [INFO] testing 'MySQL >= 5.1 error-based - Parameter replace (EXTRACTVALUE)'
[00:21:11] [INFO] testing 'MySQL >= 5.1 error-based - ORDER BY, GROUP BY clause (EXTRACTVALUE)'
[00:21:11] [INFO] testing 'MySQL >= 4.1 error-based - ORDER BY, GROUP BY clause (FLOOR)'
[00:21:12] [INFO] testing 'MySQL inline queries'
[00:21:12] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[00:21:15] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[00:21:20] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[00:21:24] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[00:21:30] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP)'
[00:21:35] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP - comment)'
[00:21:38] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP - comment)'
[00:21:40] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind'
[00:21:46] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind (query SLEEP)'
[00:21:52] [INFO] testing 'MySQL AND time-based blind (ELT)'
[00:21:58] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace'
[00:21:58] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace (substraction)'
[00:21:59] [INFO] testing 'MySQL >= 5.0.12 time-based blind - ORDER BY, GROUP BY clause'
it is recommended to perform only basic UNION tests if there is not at least one other (potential) technique found. Do you want to reduce the number of requests? [Y/n] Y
[00:21:59] [INFO] testing 'Generic UNION query (NULL) - 1 to 10 columns'
[00:22:04] [INFO] testing 'Generic UNION query (random number) - 1 to 10 columns'
[00:22:10] [INFO] testing 'MySQL UNION query (NULL) - 1 to 10 columns'
[00:22:15] [INFO] testing 'MySQL UNION query (random number) - 1 to 10 columns'
[00:22:20] [WARNING] URI parameter '#1*' does not seem to be injectable
other non-custom parameters found. Do you want to process them too? [Y/n/q] Y
[00:22:20] [WARNING] parameter 'User-Agent' does not appear to be dynamic
[00:22:21] [WARNING] heuristic (basic) test shows that parameter 'User-Agent' might not be injectable
[00:22:21] [INFO] testing for SQL injection on parameter 'User-Agent'
[00:22:21] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:22:40] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (subquery - comment)'
[00:22:50] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (comment)'
[00:23:01] [INFO] testing 'Boolean-based blind - Parameter replace (original value)'
[00:23:02] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL)'
[00:23:03] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL - original value)'
[00:23:04] [INFO] testing 'Boolean-based blind - Parameter replace (CASE)'
[00:23:05] [INFO] testing 'Boolean-based blind - Parameter replace (CASE - original value)'
[00:23:05] [INFO] testing 'HAVING boolean-based blind - WHERE, GROUP BY clause'
[00:23:26] [INFO] testing 'Generic inline queries'
[00:23:27] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (MySQL comment)'
[00:23:37] [INFO] testing 'MySQL RLIKE boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause'
[00:23:57] [INFO] testing 'MySQL AND boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause (MAKE_SET)'
[00:24:16] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:24:18] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause (original value)'
[00:24:20] [INFO] testing 'MySQL < 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:24:20] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:24:27] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[00:24:33] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[00:24:40] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:24:46] [INFO] testing 'MySQL >= 5.1 error-based - PROCEDURE ANALYSE (EXTRACTVALUE)'
[00:24:53] [INFO] testing 'MySQL >= 5.0 error-based - Parameter replace (FLOOR)'
[00:24:53] [INFO] testing 'MySQL >= 5.1 error-based - Parameter replace (EXTRACTVALUE)'
[00:24:53] [INFO] testing 'MySQL >= 5.1 error-based - ORDER BY, GROUP BY clause (EXTRACTVALUE)'
[00:24:54] [INFO] testing 'MySQL >= 4.1 error-based - ORDER BY, GROUP BY clause (FLOOR)'
[00:24:54] [INFO] testing 'MySQL inline queries'
[00:24:55] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[00:24:58] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[00:25:05] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[00:25:08] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[00:25:14] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP)'
[00:25:20] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP - comment)'
[00:25:23] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP - comment)'
[00:25:26] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind'
[00:25:33] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind (query SLEEP)'
[00:25:39] [INFO] testing 'MySQL AND time-based blind (ELT)'
[00:25:46] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace'
[00:25:46] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace (substraction)'
[00:25:46] [INFO] testing 'MySQL >= 5.0.12 time-based blind - ORDER BY, GROUP BY clause'
[00:25:47] [INFO] testing 'Generic UNION query (NULL) - 1 to 10 columns'
[00:26:00] [INFO] testing 'Generic UNION query (random number) - 1 to 10 columns'
[00:26:12] [INFO] testing 'MySQL UNION query (NULL) - 1 to 10 columns'
[00:26:25] [INFO] testing 'MySQL UNION query (random number) - 1 to 10 columns'
[00:26:37] [WARNING] parameter 'User-Agent' does not seem to be injectable
[00:26:37] [WARNING] parameter 'Referer' does not appear to be dynamic
[00:26:37] [WARNING] heuristic (basic) test shows that parameter 'Referer' might not be injectable
[00:26:37] [INFO] testing for SQL injection on parameter 'Referer'
[00:26:37] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[00:26:57] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (subquery - comment)'
[00:27:08] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (comment)'
[00:27:19] [INFO] testing 'Boolean-based blind - Parameter replace (original value)'
[00:27:19] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL)'
[00:27:20] [INFO] testing 'Boolean-based blind - Parameter replace (DUAL - original value)'
[00:27:21] [INFO] testing 'Boolean-based blind - Parameter replace (CASE)'
[00:27:22] [INFO] testing 'Boolean-based blind - Parameter replace (CASE - original value)'
[00:27:23] [INFO] testing 'HAVING boolean-based blind - WHERE, GROUP BY clause'
[00:27:42] [INFO] testing 'Generic inline queries'
[00:27:42] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause (MySQL comment)'
[00:27:51] [INFO] testing 'MySQL RLIKE boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause'
[00:28:12] [INFO] testing 'MySQL AND boolean-based blind - WHERE, HAVING, ORDER BY or GROUP BY clause (MAKE_SET)'
[00:28:32] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:28:34] [INFO] testing 'MySQL >= 5.0 boolean-based blind - ORDER BY, GROUP BY clause (original value)'
[00:28:36] [INFO] testing 'MySQL < 5.0 boolean-based blind - ORDER BY, GROUP BY clause'
[00:28:36] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:28:42] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[00:28:48] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[00:28:55] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[00:29:02] [INFO] testing 'MySQL >= 5.1 error-based - PROCEDURE ANALYSE (EXTRACTVALUE)'
[00:29:08] [INFO] testing 'MySQL >= 5.0 error-based - Parameter replace (FLOOR)'
[00:29:08] [INFO] testing 'MySQL >= 5.1 error-based - Parameter replace (EXTRACTVALUE)'
[00:29:08] [INFO] testing 'MySQL >= 5.1 error-based - ORDER BY, GROUP BY clause (EXTRACTVALUE)'
[00:29:09] [INFO] testing 'MySQL >= 4.1 error-based - ORDER BY, GROUP BY clause (FLOOR)'
[00:29:10] [INFO] testing 'MySQL inline queries'
[00:29:10] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[00:29:13] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[00:29:19] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[00:29:22] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[00:29:29] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP)'
[00:29:36] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (SLEEP - comment)'
[00:29:40] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP - comment)'
[00:29:43] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind'
[00:29:49] [INFO] testing 'MySQL >= 5.0.12 RLIKE time-based blind (query SLEEP)'
[00:29:56] [INFO] testing 'MySQL AND time-based blind (ELT)'
[00:30:03] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace'
[00:30:03] [INFO] testing 'MySQL >= 5.0.12 time-based blind - Parameter replace (substraction)'
[00:30:04] [INFO] testing 'MySQL >= 5.0.12 time-based blind - ORDER BY, GROUP BY clause'
[00:30:04] [INFO] testing 'Generic UNION query (NULL) - 1 to 10 columns'
[00:30:16] [INFO] testing 'Generic UNION query (random number) - 1 to 10 columns'
[00:30:28] [INFO] testing 'MySQL UNION query (NULL) - 1 to 10 columns'
[00:30:41] [INFO] testing 'MySQL UNION query (random number) - 1 to 10 columns'
[00:30:54] [WARNING] parameter 'Referer' does not seem to be injectable
[00:30:54] [CRITICAL] all tested parameters do not appear to be injectable. Try to increase values for '--level'/'--risk' options if you wish to perform more tests. If you suspect that there is some kind of protection mechanism involved (e.g. WAF) maybe you could try to use option '--tamper' (e.g. '--tamper=space2comment')

[*] ending @ 00:30:54 /2025-01-17/

