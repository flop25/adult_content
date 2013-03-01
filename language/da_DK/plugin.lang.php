<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['ac_title_menu_statut'] = 'Oplysning';
$lang['ac_user_no'] = 'du ønskede ikke at aktivere sådant indhold';
$lang['ac_user_no_s'] = 'Indhold filtreret';
$lang['ac_user_text_16'] = 'Du er 16 eller 17 år gammel';
$lang['ac_user_text_18'] = 'Du er 18 år eller ældre';
$lang['ad_c_linktolang'] = 'Gå til Adult Contents sprogfil (kræver at LocalFiles Editor er aktiveret)';
$lang['ad_c_manage_both'] = 'erotisk og pornografisk indhold';
$lang['ad_c_manage_eroticonly'] = 'kun erotisk indhold';
$lang['ad_c_manage_pornonly'] = 'kun pornografisk indhold';
$lang['ad_c_manage_what'] = 'Vælg den form for indhold, som plugin\'en skal håndtere:';
$lang['ad_c_menublock_for_guest'] = 'Giv ikke-registrerede brugere mulighed for at vælge deres alder?';
$lang['ad_c_msg_admin_1'] = 'Plugin\'ens opsætning er opdateret!';
$lang['ad_c_send'] = 'Gem ændringer';
$lang['ac_button_activ_16'] = 'Aktiver det erotiske indhold';
$lang['ac_button_activ_18'] = 'Aktiver det pornografiske indhold';
$lang['ac_charte_user_def'] = 'ellers klik her';
$lang['ac_charte_user_not'] = 'Angiv din alder!';
$lang['ac_def'] = 'Ønsker du at ændre din status?';
$lang['ac_fermer'] = 'eller luk';
$lang['ac_identif'] = 'eller log på';
$lang['ac_lien'] = 'fjern denne beskyttelse';
$lang['ac_logout'] = 'ellers klik her';
$lang['ac_not_def'] = 'Dette trin er afgørende, men du vil ikke blive spurgt om det igen';
$lang['ac_retour'] = 'Jeg ønsker ikke at aktivere denne form for indhold og vender tilbage til den foregående side';
$lang['ac_retour_b'] = 'Jeg ønsker ikke at se den form for indhold';
$lang['ac_retour_c'] = 'Jeg vender tilbage til den foregående side';
$lang['ac_statut'] = 'Din status:';
$lang['ac_text'] = 'Dette galleri indeholder billeder for voksne.';
$lang['ac_text_activ_16'] = '<u> ... og jeg garanterer, at</u>: <br>
- <B>jeg er 16 eller 17 år gammel.</B> <br>
- jeg er blevet advaret om, at dette websted indeholder billeder af pornografisk eller erotisk natur. <br>
- lovene i mit land tillader, at jeg benytter dette websted.';
$lang['ac_text_activ_18'] = '<u>... og jeg garanterer, at</u>: <br>
- <B>jeg er ældre end 18 år og myndig</B> ifølge lovene i mit land. <br>
- jeg er advaret om, at dette websted indeholder billeder af pornografisk eller erotisk natur. <br>
- lovene i mit land tillader, at jeg benytter dette websted.';
$lang['ac_text_charte'] = 'Du bevæger dig ind på et websted, hvis visuelle indhold er af erotisk eller pornografisk natur, udelukkende rettet mod folk, der er indforstået hermed og må vise erotisk indhold. Webstedet er rettet mod myndige personer, som er interesserede i indholdet. Nærværende websted fralægger sit ethvert ansvar for hvordan indholdet anvendes og de følger det kan give personer, der er følsomme over for sådant indhold. Ved at bevæge dig ind på dette websted accepterer du konsekvenserne og nærværende websted fralægges ethvert ansvar.</p>
<p>Hvis du ikke overholder betingelserne eller afgiver falske oplysninger, overtræder du måske lovene i dit land. og <B>påtager dig det fulde ansvar for dine handlinger</B>. Jeg erklærer at være blevet udtømmende oplyst om det beskrevne indhold og frasiger retten til at lægge sag an mod webstedets indholdsleverandør eller administratorer.  Jeg har omhyggeligt læst ovennævnte afsnit og underskriver elektronisk min aftale, som træder i kraft, når jeg klikker på knappen svarende til min alder.';
$lang['ac_title_fermer'] = 'indhold filtreret';
$lang['ac_title_menu'] = 'Advarsel';
$lang['ad_c_howitworks'] = 'Formålet med plugin\'en er at hjælpe med at håndtere voksent indhold (den kan også tilpasses voldeligt indhold). Plugin\'en håndterer besøgende og/eller brugere jævnfør de opsætningsparametre, du har valgt.<br />
<br />
1 - Som administrator skal du placere dit voksenindhold i et privat galleri eller album (plugin\'en håndterer ikke tilladelser på billedniveau, eller i hvert fald endnu ikke). Dernæst tildeles galleriet eller albummet til to grupper \'18\' og \' 16-17\' (oprettes af plugin\'en) på denne måde:<br /><br />

- tillad gruppen \'18\' at se voksenindhold, kun for brugere over 18 år samt normalt indhold (men generelt er normalt indhold ofte offentligt)
<br /><br />
- tillad gruppen \'16-17\' at se voksenindhold for brugere over 16 år samt normalt indhold (men generelt er normalt indhold ofte offentligt)
<br /><br />
- gruppen \'nothing\' vil kun se normalt indhold (men generelt er normalt indhold ofte offentligt)
<br />
<br />
2 - Plugin\'ens virkemåde<br />
2.1 - Håndtering af brugere<br />
<br />
Hvis brugeren allerede findes når plugin\'en aktiveres, viser plugin\'en en lille blok, som fortæller at vedkommende skal oplyse sin alder.  Når vedkommende klikker vil siden indeholdende voksenindhold vise sig og der kan vælges en alder (Charte_user.php).

Når en besøgende har valgt sin alder, sendes vedkommende tilbage til siden med valg af alder (Charte_user.php), straks oplysningen er gemt.

I praksis placerer plugin\'en brugeren i en af de tre grupper, \'18\' \'16-17\' og \'nothing\', alt efter hvilken alder, der blev angivet.  En bruger kan på ethvert tidspunkt ændre sin alder via blokmenu i adult_content, bortset fra hvis den er deaktiveret Piwigos administration (bemærk at det direkte link til charte_user.php fortsat fungerer på samme måde): ønsker du, at en bruger ikke kan ændre sin alder, er denne plugin nytteløs, brug i stedet direkte håndtering af tilladelser på gruppe- og/eller billedniveau.<br />
<br />
2.2 - Håndtering af besøgende<br />
<br />
Hvis valgmuligheden \'Tillad ikke-registrerede besøgende at vælge deres alder?\' er aktiveret, vil plugin\'en håndtere de besøgende. 
* Den viser en blokmenu, som indikerer at galleriet er \'filtreret\' og hvis vedkommende ønsker at deaktivere filteret, skal denne vælge sin alder. Vedkommende sendes til siden for besøgende til valg af alder (chartre.php).

I praksis gemmer plugin\'en den besøgende i en af to brugere oprettet af plugin\'en: 
\'18\' hørende til gruppen \'18\', og \'16\' fra gruppen \'16-17\'.  Disse to brugerkonti må ikke ændres af brugerne, kun af administratoren.
Man åbner og vælger tema jævnfør den besøgendes alder via disse to brugerkonti.<br />
<br />
2.3 - Mulige tilpasninger<br />
<br />
Du kan tilpasse plugin\'en til voldeligt indhold ved simpelthen at ændre formuleringer i plugin\'ens filer (brug plugin\'en Local Files Editor for at lette arbejdet).  Aldersbegrænsingen kan ændres på samme måde.';
$lang['Disclaimer for the guest, with the ability to choose its age to unlock the adult content'] = 'Ansvarsfralæggelse til gæsten, med mulighed for at angive alder';
$lang['NEW! Check the Plugin PWG Stuffs to add the disclaimer on the index/album pages'] = 'NYT! Vælg plugin\'en PWG Stuffs for at kunne tilføje en ansvarsfraskivelse på indeks-/albumsider';
$lang['No options. Just check "Allow unregistered users to select their age?" on the Adult Content administration page'] = 'Ingen valgmuligheder. Vælg blot "Giv ikke-registrerede brugere mulighed for at vælge deres alder?" på Adult Contents administrationsside';
?>