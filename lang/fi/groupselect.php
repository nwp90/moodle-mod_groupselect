<?php

$string['action'] = 'Toiminto';
$string['assigngroup'] = 'Jaa assistentit ryhmiin';
$string['assigngroup_help'] = 'Jos päällä, opettajalle näkyy päänäkymässä painike, joka jakaa assistentit (kurssilla olevat opettajat'
        . 'ilman muokkausoikeutta -roolin omaavat käyttäjät) ryhmiin. Assistentit eivät ole ryhmien jäseniä, mutta näkyvät viedyssä csv-'
        . 'tiedostossa ja päänäkymässä (jos asetettu).';
$string['assignedteacher'] = 'Ryhmän assistentti';
$string['cannotselectclosed'] = 'Et voi enää liittyä ryhmään.';
$string['cannotselectmaxed'] = 'Et voi liittyä ryhmään {$a} - ryhmä on täynnä.';
$string['cannotselectnocap'] = 'Sinulla ei ole oikeutta valita ryhmää.';
$string['cannotselectnoenrol'] = 'Sinun täytyy olla kirjautuneena kurssille voidaksesi liittyä ryhmään.';
$string['creategroup'] = 'Luo uusi ryhmä';
$string['cannotunselectclosed'] = 'Et voi enää lähteä ryhmästä';
$string['deleteemptygroups'] = 'Poista ryhmä viimeisen jäsenen poistuessa';
$string['deleteemptygroups_help'] = 'Jos päällä, poistaa ryhmän automaattisesti viimeisen jäsenen poistuessa';
$string['description'] = 'Ryhmän kuvaus';
$string['edittooltip'] = 'Klikkaa muokataksesi';
$string['export'] = 'Luo CSV-tiedoston latauslinkki';
$string['export_download'] = 'Lataa CSV-tiedosto';
$string['fromallgroups'] = 'Kaikki ryhmät';
$string['globalpassword_help'] = 'Aseta yleinen salasana ryhmään liittymiselle. Korvaa mahdollisen ryhmäkohtaisen salasanan.';
$string['groupid'] = 'Ryhmätunniste';
$string['groupselect:addinstance'] = 'Luo uusi ryhmävalinta';
$string['groupselect:assign'] = 'Salli assistenttien jakaminen ryhmiin';
$string['groupselect:create'] = 'Salli ryhmän luonti';
$string['groupselect:select'] = 'Salli ryhmään liittyminen';
$string['groupselect:unselect'] = 'Salli ryhmästä lähteminen';
$string['hidefullgroups'] = 'Piilota täynnä olevat ryhmät';
$string['hidefullgroups_help'] = 'Piilottaa täynnä olevat ryhmät listanäkymästä (poislukien käyttäjän mahdollisen'
        . 'oman ryhmän). Voi olla hyödyllinen, jos ryhmiä on paljon.';
$string['incorrectpassword'] = 'Virheellinen salasana';
$string['managegroups'] = 'Hallinnoi ryhmiä';
$string['maxcharlenreached'] = 'Merkkien enimmäismäärä saavutettu';
$string['maxlimitreached'] = 'Suurin sallittu määrä saavutettu';
$string['maxmembers'] = 'Ryhmän jäsenten enimmäismäärä';
$string['maxmembers_help'] = 'Ryhmän jäsenten enimmäismäärä, 0 jos rajoittamaton.';
$string['member'] = 'Jäsen';
$string['membercount'] = 'Lukumäärä';
$string['membershidden'] = 'Jäsenlista ei nähtävissä';
$string['memberslist'] = 'Jäsenet';
$string['minmembers'] = 'Ryhmän jäsenten vähimmäismäärä';
$string['minmembers_help'] = 'Ryhmän jäsenten vähimmäismäärä. Jos päällä, näyttää vähimmäismäärän alittaville ryhmille huomautuksen. Oletusarvo 0 (pois käytöstä)';
$string['minmembers_icon'] = 'Ryhmässä on liian vähän jäseniä';
$string['minmembers_notification'] = 'Ryhmässäsi on liian vähän jäseniä! Vähimmäismäärä on {$a}.';
$string['modulename'] = 'Ryhmänmuodostus';
$string['modulename_help'] = <<<'END_OF_HELP'
<p>Antaa opiskelijoiden itse muodostaa ryhmät. Ominaisuudet:
</p>

<ul>
<li>Opiskelija voi luoda ryhmän, antaa sille kuvauksen ja salasanan</li>
<li>Opiskelijat voivat liittyä ryhmiin</li>
<li>Assistenttien jakaminen ryhmiin/li>
<li>Opettaja voi ladata listan ryhmistä csv-tiedostona </li>
<li>Yhteensopiva Moodlen ryhmien kanssa: ryhmiä voi tarvittaessa luoda käyttäjähallinnan kautta,
    voi tehdä ryhmäpalautuksia jne.</li>
</ul>

<p>Alpha-versio, kaikki palaute on tervetullutta! (pirkka.pyykkonen@tut.fi)</p>
END_OF_HELP;
$string['modulenameplural'] = 'Ryhmänmuodostukset';
$string['nogroups'] = 'Ei luotuja ryhmiä.';
$string['notavailableanymore'] = 'Ryhmävalinta sulkeutunut {$a}.';
$string['notavailableyet'] = 'Ryhmävalinta aukeaa {$a}.';
$string['ok'] = 'OK';
$string['password'] = 'Vaatii salasanan';
$string['pluginadministration'] = 'Moduulinhallinta';
$string['pluginname'] = 'Ryhmänmuodostus';
$string['saving'] = 'Tallennetaan';
$string['selectconfirm'] = 'Haluatko todella liittyä ryhmään <em>{$a}</em>?';
$string['showassignedteacher'] = 'Näytä jaetut assistentit';
$string['showassignedteacher_help'] = 'Jos asetettu, ryhmälle jaettu assistentti näkyy päänäkymän jäsenlistassa. Hyödyllinen, jos opiskelijoiden on'
        . 'tarpeen tietää ryhmänsä assistentti.';
$string['studentcancreate'] = 'Opiskelijat voivat luoda ryhmiä';
$string['studentcancreate_help'] = 'Salli ryhmättömien opiskelijoiden (valitussa ryhmittelyssä) luoda ryhmiä';
$string['studentcansetdesc'] = 'Opiskelijat voivat asettaa ryhmälleen kuvauksen tai muokata sitä';
$string['studentcansetdesc_help'] = 'Salli opiskelijan asettaa ryhmälleen kuvaus ryhmänluonnin yhteydessä ja ryhmän jäsenten muokata sitä';
$string['unselectconfirm'] = 'Haluatko todella lähteä ryhmästä <em>{$a}</em>?';
$string['unselect'] = 'Lähde ryhmästä {$a}';
$string['select'] = 'Liity ryhmään {$a}';
$string['targetgrouping'] = 'Käytä ryhmittelyä';
$string['timeavailable'] = 'Avautuu';
$string['timedue'] = 'Sulkeutuu';
