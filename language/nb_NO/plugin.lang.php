<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
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
$lang['ad_c_linktolang'] = 'Gå til språkfilen for Voksen Innhold (trenger LocalFiles Editor aktivert)';
$lang['ad_c_manage_both'] = 'erotisk og pornografisk innhold';
$lang['ad_c_manage_eroticonly'] = 'kun erotisk innhold';
$lang['ad_c_manage_pornonly'] = 'kun pornografisk innhold';
$lang['ad_c_manage_what'] = 'Velg type innhold som programtillegget skal behandle:';
$lang['ad_c_menublock_for_guest'] = 'Tillat uregistrerte brukere å velge deres alder?';
$lang['ad_c_msg_admin_1'] = 'Programtillegg konfigurasjonen er oppdatert!';
$lang['ad_c_send'] = 'Lagre endringene';
$lang['ad_c_howitworks'] = 'Prinsippet til progamtillegget er å bidra i forvaltningen av voksent innhold (det kan også være tilpasset for voldelig innhold). For å gjøre dette, forvalter programtillegget besøkende og/eller brukerne som du ønsker i henhold til din definisjon av parametere i programtillegget.<br/><br/>
1 - Som administrator må du legge ditt voksent innhold i et privat galleri eller album (programtillegget klarer ikke å behandle rettighetene til nivået av bildene selv, i hvert fall ikke ennå). Deretter tildeles galleriet eller album til de to gruppene \'18\' ​​og \'16-17\' (laget av programtillegget)

som dette:<br/><br/>
-Tillat gruppen \'18 \' å se voksent innhold, reservert for brukere over av 18 år og vanlig innhold (men vanligvis er normalt innhold ofte offentlig)<br/><br/>
-Tillat gruppen \'16-17\' å se voksent innhold, reservert for brukere over av 16 år og vanlig innhold (men vanligvis er normalt innhold ofte offentlig)<br/><br/>
- Gruppen "ingenting"  vil kunne se det normale innhold (men vanligvis er normalt innhold ofte offentlig<br/><br/>
2 - Fungsjonen til programtillegget<br/>
2.1 - Administrasjonen av brukerne<br/><br/>
Hvis brukeren allerede er registrert i aktivering av programtillegget, viser programtillegget en liten boks og peker på at han må velge sin alder. Når han klikker, vil siden som inneholder meldingen av "voksent innhold" vises, og muligheten til å velge sin alder (Charte_user.php.

Når en besøkende velger sin alder, er den ufravikelig rettet til siden valg av alder (Charte_user.php), rett etter sin posting.

I praksis legger programtillegget brukeren i en av de tre gruppene, \'18 \'\' 16-17 \'og\' ingenting \', i henhold til hans valg av alder. En bruker kan når som helst endre hans alder via blokk menyen til voksen_innhold bortsett fra hvis den er deaktivert via administrasjonen av piwigo (oppmerksomhet direkte rette til linken charte_user.php fortsetter å fungere som den skal): Hvis du ønsker at en bruker ikke skal kunne endre sin alder da er dette programtillegget ubrukelig og bruker dermed direkte styring av rettigheter på nivå med grupper og/eller bilder.<br/><br/>
2.2 - Administrason av besøkende<br/><br/>
Hvis alternativet \'Tillat besøkende til ikke-registrert for å velge deres alder?\' er aktivert, da vil programtillegget behandle besøkende. * Det viser en blokk meny, noe som indikerer galleriet er \'filtrert \' og at hvis han ønsker å deaktivere filteret, må han velge hans alder. Det blir da omdirigert til den siden for valg av alder for besøkende (chartre.php).

I praksis er den besøkende dermed registrert under en av de to brukerne som er opprettet av programtillegget: \'18\'tilhører gruppen\'18\', og\'16\'fra gruppen \'16-17\'. Disse 2 bruker kontoer kan ikke endres av brukere, kun av administrator.
Du åpner og velger å endre tema i henhold til alder på besøkende via disse 2 bruker kontoer.<br/><br/>

2.3 - Mulige tilpasninger<br/><br/>

Du kan tilpasse dette programtillegget for voldelig innhold, bare ved å endre filene språk til programtillegget (bruk programtillegget lokale filer Editor for å gjøre dette lettere). Aldersgrensene kan også endres på denne måte.
';
$lang['ac_text_charte'] = 'Du kommer inn på et område der det visuelle innholdet er av erotisk og pornografisk karakter og er utelukkende ment for et voksent advart publikum og som kan presentere innhold av erotisk karakter. Dette nettstedet er av frivillig karater. Dette nåværende stedet fraskriver seg ethvert ansvar for bruken som vil bli gjort av innholdet og tjenestene til denne siden ved enhver liten eller stor person som er mottakelig for å bli sjokkert over dette. Enhver person som er enige om å gå inn på dette nettstedets som er strengt reservert for advart publikum. Personen fraskriver denne nåværende side for alle konsekvenser av sin konsultasjon. </p>
<p> Hvis jeg bryter en av disse forpliktelsene eller avgir falsk erklæring, kan jeg være i strid med loven i mitt eget land, og <B> skal derfor påta meg hele ansvaret for mine handlinger </B>. Jeg erklærer å ha blitt fullstendig informert om det foreslåtte innholdet og gir opp eventuelle søksmål mot aksessleverandør og administrator av dette nettstedet. Jeg har nøye lest avsnittene ovenfor og registrere elektronisk min avtale og dens innhold ved å klikke på knappen som tilsvarer min alder.';
$lang['ac_user_text_18'] = 'Du er mer enn 18 år gammel';
$lang['ac_user_text_16'] = 'Du er 16 eller 17 år gammel';
$lang['ac_user_no_s'] = 'Innhold filtrert';
$lang['ac_user_no'] = 'du ønsker ikke å aktivere denne type innhold';
$lang['ac_title_menu_statut'] = 'Informasjon';
$lang['ac_title_menu'] = 'Advarsel';
$lang['ac_title_fermer'] = 'innhold filtret';
$lang['Disclaimer for the guest, with the ability to choose its age to unlock the adult content'] = 'Betingelser for gjesten, med muligheten til å velge sin alder';
$lang['NEW! Check the Plugin PWG Stuffs to add the disclaimer on the index/album pages'] = 'NY! Sjekk programtillegget PWG Stuffs for å legge til betingelser på indeks/albumsider';
$lang['No options. Just check "Allow unregistered users to select their age?" on the Adult Content administration page'] = 'Ingen opsjoner. Bare sjekk "Tillat uregistrerte brukere å velge deres alder?" på administrasjonssiden for Voksent Innhold';
$lang['ac_button_activ_16'] = 'Aktiver erotisk innhold';
$lang['ac_button_activ_18'] = 'Aktiver pornografisk innhold';
$lang['ac_charte_user_def'] = 'eller klikk her';
$lang['ac_charte_user_not'] = 'Vennligst velg din alder!';
$lang['ac_def'] = 'Ønsker du å endre din status?';
$lang['ac_fermer'] = 'eller stenge';
$lang['ac_identif'] = 'eller logge-inn';
$lang['ac_lien'] = 'fjern denne beskyttelsen';
$lang['ac_logout'] = 'eller klikk her';
$lang['ac_not_def'] = 'Denne fasen er viktig, men vil ikke bli forespurt deg lenger';
$lang['ac_retour'] = 'Jeg ønsker ikke å aktivere denne typen innhold, og jeg retunerer til forrige side';
$lang['ac_retour_b'] = 'Jeg ønsker ikke å se den slags innhold';
$lang['ac_retour_c'] = 'Jeg kommer tilbake til forrige side';
$lang['ac_statut'] = 'Din status:';
$lang['ac_text'] = 'Dette galleriet inneholder bilder for modne personer og\eller voksne.';
$lang['ac_text_activ_16'] = '<u> ... og jeg garanterer på ære og sammvittighet at </u>: <br>
         -. <B>Jeg er 16 eller 17 år gammel </b>
- At jeg er advart om at dette området inneholder bilder med pornografisk og erotisk karakter. <br>
- Lovene i mitt land tilater meg å besøke dette nettstedet.';
$lang['ac_text_activ_18'] = '<u> ... og jeg garanterer på ære og sammvittighet at </u>: <br>
- <B> Jeg er mer enn 18 år gammel og jeg er gammel nok </B> i henhold til loven gjeldende i mitt land. <br>
- At jeg er advart om at dette området inneholder bilder med pornografisk og erotisk karakter. <br>
- Lovene i mitt land tilater meg å besøke dette nettstedet.';