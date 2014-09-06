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
$lang['ac_button_activ_16'] = 'activeer de erotische inhoud';
$lang['ac_button_activ_18'] = 'activeer de pornografische inhoud';
$lang['ac_charte_user_def'] = 'of klik hier';
$lang['ac_charte_user_not'] = 'selecteer uw leeftijd';
$lang['ac_def'] = 'wilt u uw status aanpassen?';
$lang['ac_fermer'] = 'of sluiten';
$lang['ac_identif'] = 'of inloggen';
$lang['ac_lien'] = 'verwijder deze bescherming';
$lang['ac_logout'] = 'of klik hier';
$lang['ac_not_def'] = 'deze fase is essentieel maar zal niet meer aan u gevraagd worden';
$lang['ac_retour'] = 'ik wil deze inhoud niet inschakelen en wil naar de vorige pagina terugkeren';
$lang['ac_retour_b'] = 'ik wil deze soort inhoud niet zien';
$lang['ac_retour_c'] = 'ik keer terug naar de vorige pagina';
$lang['ac_statut'] = 'uw status:';
$lang['ac_text'] = 'deze galerij bevat afbeeldingen voor volwassen personen en/of volwassenen';
$lang['ac_text_activ_16'] = '<u>...en ik garandeer op mijn eer dat</u>:<br>
 - <B>Ik 16 of 17 jaar oud ben</B><br>
- Ik gewaarschuwd ben dat deze site pornografische of erotische inhoud kan bevatten.
- De wetten in mijn land me toestaan om deze site te bezoeken.';
$lang['NEW! Check the Plugin PWG Stuffs to add the disclaimer on the index/album pages'] = 'NIEUW! Bekijk de PWG Stuff plugin om de disclaimer op de index.album pagina\'s te plaatsen';
$lang['Disclaimer for the guest, with the ability to choose its age to unlock the adult content'] = 'Disclaimer voor de gast, met de mogelijkheid om leeftijd te kieen';
$lang['ac_title_menu'] = 'Waarschuwing';
$lang['ac_title_menu_statut'] = 'Informatie';
$lang['ac_user_no'] = 'Je wilde deze inhoud niet activeren';
$lang['ac_user_text_16'] = 'Je bent 16 of 17 jaar oud';
$lang['ac_user_text_18'] = 'Je bent minstens 18 jaar oud';
$lang['ad_c_manage_both'] = 'erotische en pornografische inhoud';
$lang['ad_c_manage_eroticonly'] = 'alleen erotische inhoud';
$lang['ad_c_manage_pornonly'] = 'alleen pornografische inhoud';
$lang['ad_c_manage_what'] = 'Geef aan welke inhoud de plugin moet beheren:';
$lang['ad_c_msg_admin_1'] = 'Plugin configuratie succes bijgewerkt';
$lang['ad_c_send'] = 'Aanpassingen opslaan';
$lang['ac_title_fermer'] = 'gefilterde inhoud';
$lang['ac_user_no_s'] = 'Gefilterde inhoud';
$lang['ad_c_linktolang'] = 'Ga naar het taalbestand van 18+ inhoud (zorg ervoor dat Localfiles Editor ingeschakeld is)';
$lang['ad_c_menublock_for_guest'] = 'Toestaan dat niet-geregistreerde gebruikers hun leeftijd kunnen selecteren?';
$lang['No options. Just check "Allow unregistered users to select their age?" on the Adult Content administration page'] = 'Geen mogelijkheden. Check alleen "Niet-geregistreerde gebruikers toestaan hun leeftijd te selecteren?" op de Volwassen Inhoud beheerpagina.';
$lang['ad_c_howitworks'] = 'Het doel van deze plugin is om te helpen inhoud voor volwassenen te beheren (het kan ook aangepast worden voor geweldadige inhoud). De plugin beheert de bezoekers en/of gebruikers volgens de door jou gekozen parameters van de plugin. <br/>
</br>
1- Als administrator dien je de inhoud voor volwassenen in een private galerij of album plaatsen (de plugin beheert niet de rechten tot de afbeeldingen zelf, althans nog niet). Daarna kan je de galerij of album toewijzen aan de 2 groepen \'18\' en \'16-17\' (aangemaakt door de plugin), zoals volgt:<br /><br />
- geeft de groep \'18\' toegang tot de inhoud voor volwassenen, dit is voor gebruikers die ten minste 18 jaar zijn, en geeft ook toegang tot de algemene inhoud (maar in de meeste gevallen zal de algemene inhoud sowieso publiek zijn)
<br /><br />
- geeft de groep \'16-17\' toegang tot de inhoud voor volwassenen, dit is voor gebruikers die ten minste 16 jaar zijn, en geeft ook toegang tot de algemene inhoud (maar in de meeste gevallen zal de algemene inhoud sowieso publiek zijn)
<br />

<br />
2 - Werking van de plugin<br/>
2.1 - Het beheer van de gebruikers<br />
<br />
Als de gebruiker al gekend is bij de activatie van de plugin, dan zal de plugin een kleine blok tonen waarin aangetoond wordt dat de gebruiker een leeftijd moet kiezen. Eens hij op een leeftijd geklikt heeft, zal de pagina met de informatie over de \'inhoud voor volwassenen\' tevoorschijn komen met de keuze om een leeftijd te kiezen(Charte_user.php).

Eens een bezoeker zijn leeftijd gekozen heeft, wordt hij, onmiddellijk naar de vastlegging van zijn keuze, teruggebracht naar de pagina waarop hij zijn keuze gemaakt heeft (Charte_user.php).

In de praktijk, de plugin plaatst de gebruiker in 3 groepen, \'18\' \' 16-17\' en \'niets\', naargelang zijn leeftijdskeuze. Een gebruiker kan op ieder moment zijn leeftijd via het keuzeblok in de menu van \'volwassenen inhoud\' aanpassen, behalve als het uitgeschakeld is via het beheerspaneel van piwigo (opgelet, de rechtstreekse link naar charte_user.php blijft werken) : als je wil dat een gebruiker zijn leeftijd niet kan aanpassen, dan is deze plugin niet geschikt en kan je het rechtstreeks beheer van rechten op het niveau van groepen en/of afbeeldingen gebruiken.<br />
<br />

2.2 - Bezoekers beheer<br />
<br />
Als de optie \'Sta niet-geregistreerde bezoekers toe om hun leeftijd te kiezen\' aan staat, dan zal de plugin de bezoekers beheren * Het zal een blok menu tonen dat zal aanduiden dat de galerij \'gefilterd\' is, en dat als hij wenst om de filter uit te schakelen, hij een leeftijd moet kiezen.
Dan zal hij doorgestuurd worden naar de pagina van keuze, naargelang de leeftijd die gekozen werd door de bezoeker (chartre.php).

In de praktijk, de bezoeker wordt bewaard onder 1 van de 2 gebruikers die aangemaakt wordt door de plugin: \'

18\' behorend tot de groep \' 18 \', en \' 16\' van de groep \' 16-17 \'.  Deze 2 gebruikersaccounts kunnen niet aangepast worden door gebruikers, alleen door de administrator.
Je opent en kiest om een thema aan te passen naargelang de leeftijd van de bezoeker via deze 2 gebruikersaccounts.<br />
<br />

2.3 - Mogelijke aanpassingen<br />
<br />
Je kan deze plugin aanpassen voor geweldadige inhoud, simpel door de taalbestanden van de plugin te veranderen (gebruik de plugin Local Files Editor voor gebruiksgemak).  Ook de leeftijdslimieten kunnen op deze manier aangepast worden.';
$lang['ac_text_activ_18'] = '<u>...en ik garandeer op mijn eer dat</u>:<br>
 - <B>Ik minstens 18 jaar oud ben en dat ik aanzien word als volwassene </B> volgens de wetten van mijn land. 
- Ik op de hoogte ben gesteld dat deze website foto\'s van erotische en pornografische aard bevat. 
- De wetten van mijn land mij toelaten deze inhoud te bekijken.';
$lang['ac_text_charte'] = 'U bezoekt een site met een visuele inhoud van erotisch en pornografisch karakter, die uitsluitend bedoeld zijn voor een gewaarschuwd publiek en kan inhoud van erotische karakter tonen. Deze site kan niet verantwoordelijk worden geacht voor het bekijken van inhoud die door elke minderjarige of meerderjarige persoon als choquerend kan aanzien worden. Elke persoon die instemt om deze site, strikt voorbehouden aan een gewaarschuwd publiek, te bezoeken verlost deze site van alle gevolgen van de consultatie. </p>
<p>Als ik één van deze verplichtingen overtreedt door middel van een valse verklaring, kan ik in strijd zijn met de wetten van mijn land,<B> en zal ik de gehele verantwoordelijkheid van mijn daden nemen.</B> Ik verklaar volledig te zijn geïnformeerd over de voorgestelde inhoud en zal geen enkele juridische procedure tegen de access provider en de administrators van deze site opstarten. Ik heb aandachtig de punten hier boven gelezen en teken elektrisch mijn verklaring met wat voorafgaat op de knop die overeenkomt met mijn leeftijd.';