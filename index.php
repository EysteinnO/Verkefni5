<?php
/**
 * Created by PhpStorm.
 * User: 0807932279
 * Date: 27.2.2017
 * Time: 14:04
 */
?>

1. 1% Útskýrðu eftirfarandi request verbs:
a) POST
b) GET
c) PUT
d) DELETE

POST býr til nýtt resource. Það venjulega ber með sér pakka sem skilgreinir gögnin fyrir nýju staðsetninguna
GET sækir gögn sem eru þegar til. URL'inn inniheldur allar þær upplýsingar sem skilgreinir gögnin fyrir nýju staðsetninguna
PUT uppfærir gögn sem eru þegar til. Pakkinn inniheldur þá uppfærðu gögnin fyrir nýja staðsetningu.
DELETE hendir gögnum sem þegar eru til.

2. 1% Hvað er status code og hvað þýða eftirfarandi status codes?
a) 200
b) 301
c) 400
d) 404
e) 500

200 er þegar serverinn lætur clientinn vita að requestið fór í gegn vandræðalaust.
301 lætur vita að gögnin séu nú staðsett á öðrum URL.
400 lætur vita að beiðnin var gölluð.
404 lætur vita að gögnin séu invalid og ekki til staðar á serverinum.
500 lætur vita að eitthvað sé að server side.