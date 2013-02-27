<?php
$lang['ac_title_menu'] = 'Brīdinājums';
$lang['ac_title_menu_statut'] ='Informācija';
$lang['ac_text'] = 'Šajā galerijā ir attēli domāti nobriedušām un/vai pieaugušām personām.';
$lang['ac_lien'] = 'noņemt šo aizsardzību';
$lang['ac_identif'] = 'vai ielogoties';
$lang['ac_fermer'] = 'vai aizvērt';

$lang['ac_title_fermer'] = 'saturs filtrēts';

$lang['ac_user_text_18'] = 'Jums ir vairāk par 18 gadiem';
$lang['ac_user_text_16'] = 'Jums ir 16 vai 17 gadu';
$lang['ac_logout'] = 'vai pretējā gadījumā klikšķiniet šeit';

$lang['ac_user_no'] = "jūs nevēlaties aktivēt šada veida saturu ";
$lang['ac_user_no_s'] = "Saturs filtrēts";
$lang['ac_statut'] ='Jūsu statuss :';

$lang['ac_button_activ_18'] = 'Aktivēt pornogrāfiska rakstura saturu';
$lang['ac_button_activ_16'] = 'Aktivēt erotiska rakstura saturu';
$lang['ac_text_charte'] = "Jūs esat iegājis vietnē, kuras vizuālais saturs ir pornogrāfiska un erotiska rakstura un domāts tikai par to brīdinātai auditorijai. Šī vietne adresēta personām, kas to vēlas. Šāda veida satura pārstāvētā vietne noņem no sevis jebkāda veida atbildību par to, ka tā ar savu saturu varētu šokēt kādu personu vai personu grupu. Ikviena persona, kas piekritusi ieiet šajā vietnē, domātai tikai brīdinātai publikai, ielādējot šīs vietnes saturu, nes pilnu atbildību saskaņā ar vietnes noteikumiem.</p>
<p>Gadījumā, ja es pārkāpšu kādu no vienošanās punktiem vai būšu devis nepatiesas ziņas, man par to būs jānes atbildība, kādu par to paredz manas valsts likumdošana un<B> jāuzņemas atbildība par visiem izdarītajiem pārkāpumiem</B>. Es apliecinu, ka esmu pilnībā informēts par vietnes piedāvāto saturu un neizvirzīšu pret piekļuves nodrošinātāju un šīs vietnes administrātoriem nekāda veida juridiskas prasības. Esmu uzmanīgi izlasījis visus augšminētos punktus un elektroniski parakstījis vienošanos, noklikšķinot attiecīgo pogu, kas atbilst manam vecumam.";
$lang['ac_text_activ_18'] = " <u>...un es, dodot goda vārdu, apliecinu, ka </u>:
<br> - <B>Man ir vairāk par 18 gadiem un es ievēroju </B> savas valsts likumdošanu.
<br> - Es esmu brīdināts, ka šī vietne piedāvā pornogrāfiska un erotiska rakstura saturu.
<br> - Manas valsts likumdošana atļauj man piekļūt šai vietnei.";
$lang['ac_text_activ_16'] = "<u> ... un es, dodot goda vārdu, apliecinu, ka </u>:
<br> - <B>Man ir 16 vai 17 gadu.</B>
<br> - Es esmu brīdināts, ka šī vietne piedāvā pornogrāfiska un erotiska rakstura saturu.
<br> - Manas valsts likumdošana atļauj man piekļūt šai vietnei.";
$lang['ac_retour'] = 'Es nevēlos aktivēt šāda veida saturu un atgriežos iepriekšējā lapā';
$lang['ac_retour_b'] = 'Nevēlos šāda veida saturu';
$lang['ac_retour_c'] = 'Atgriežos iepriekšējā lapā';


$lang['ac_charte_user_not'] = 'Lūdzu izvēlaties savu vecumu!';
$lang['ac_charte_user_def'] = 'izmainiet savu statusu';
$lang['ac_not_def'] = 'Šis posms ir svarīgs, bet turpmāk vairs jums netiks prasīts';
$lang['ac_def'] = 'Vai vēlaties izmainīt savu statusu ?';

$lang['ad_c_howitworks'] = 'Spraudņa uzdevums ir palīdzēt pieaugušajiem paredzētā satura pārvaldībā (to varētu pielāgot arī vardarbīga satura gadījumā). Lai to izdarītu, spraudnim jāpārvalda apmeklētājus un/vai lietotājus, pēc jūsu ieskatiem, balstoties uz jūsu definētiem spraudņa parametriem.<br/><br/>
1 - Kā Administratoram jums ir jāizvieto savs pieaugušajiem paredzētais saturs privātā galerijā vai albūmā (spraidnis pats par sevi nepārvalda attēlu līmeņu tiesības, vismaz pagaidām).
Tad piesaistiet galeriju vai albūmu divām grupām \'18\' un \' 16-17\' (spraudņa izveidoti), apmēram tā:<br/><br/>

-atļaut grupai \'18\' skatīties pieaugušiem domāto saturu, rezervēts lietotājiem vecākiem par 18, un normāla rakstura saturu (bet parasti normāla rakstura saturs pieejams publiski) 
<br/><br/>
-atļaut grupai \' 16-17\' skatīties pieaugušiem domāto saturu, rezervēts lietotājiem vecākiem par 16, un normāla rakstura saturu (parasti normāla rakstura saturs pieejams publiski) 
<br/><br/>
- grupa \'nekas\' redzēs normāla rakstura saturu bet parasti normāla rakstura saturs pieejams publiski) 
<br/><br/>
2 - Spraudņa darbība<br/>
2.1 - Lietotāju pārvaldība<br/>
<br/>
Ja lietotājs jau ir pierakstījies spraudņa aktivācijas laikā, spraudnis parāda mazu lodziņu, kur tiek prasīts uzrādīt lietotāja vecumu. Kad viņš tur uzklikšķina parādas lapa, kas satur ziņu \'pieaugušo saturs\', kur ir iespēja izvēlēties savu vecumu. (Charte_user.php).
Kad lietotājs ir izvēlējies savu vecumu, tas tiek pāradresēts uz vecuma uzvēles lapu(Charte_user.php), izreiz pēc tā ierakstīšanas.

Praksē spraudnis, pamatojoties uz lietotāja vecuma izvēles, var izvietot lietotāju 3 grupās:\' 18\' \' 16-17\' and \'nekas\'. Lietotājs, izmantojot adult_content blokizvēlni, jebkurā laikā var mainīt savu vecumu, izņemot gadījumu, kad to aizliedzis piwigo administrators (izmanību-tiešā saite uz charte_user.php turpina darboties kā parasti): ja vēlaties, lai lietotājs vairs nevar izmainīt savu vecumu, jums pa tiešo jāizmanto tiesību pārvaldnieks grupu un/vai attēlu līmenī, jo šis spraudnis to nedara.<br/><br/>

2.2 - Apmeklētāju pārvaldība<br/><br/>
Ja opcija \'Atļaut nereģistrētiem apmeklētājiem izvēlēties savu vecumu?\' ir iespējota, tad spraudnis parvaldīs apmeklētājus.*Tas parādīs blokizvēlni, norādot, ka galerija tiek \'filtrēta\' un, ja viņš vēlas atslēgt filtru, viņam jānorāda savs vecums. Tad tas tiek tiek pārsūtīts uz apmeklētāja vecuma izvēles lapu (chartre.php).
Praksē spraudnis šos apmeklētājus ieraksta vienā no divām grupām:
\'18\', kas pieder pie grupas \'18\', un \'16\', kas pieder pie grupas \'16-17\'. Šie divi lietotāju konti nevar tikt mainīti no lietotāju puses, to var tikai administrators.
Jūs atverat un izvēlaties mainīt tēmu, pamatojoties uz apmeklētāja vecuma, izejot no šiem diviem lietotāju kontiem.<br/><br/> 
 
2.3 - Iespējamā adaptācija<br/>
<br/>
Jūs varat pielāgot šo spraudni vardarbīga satura pārvaldīšanai, izmainot spraudņa valodu failus (ērtībai izmantojiet Lokālo Failu Redaktoru). Līdzīgā veidā iespējams pielāgot arī vecuma limitu.  ';
$lang['ad_c_manage_what'] = 'Atlasiet satura tipu, kas spraidnim būtu jāpārvalda';
$lang['ad_c_linktolang'] = 'Ejiet uz Saturs Pueaugušajiem valodas failu (jābūt iespējotam LocalFiles Redaktoram)';
$lang['ad_c_msg_admin_1'] = 'Spraudņa konfigurācija atjaunināta sekmīgi!';
$lang['ad_c_menublock_for_guest'] = 'Atļaut nereģistrētiem lietotājiem izvēlēties savu vecumu?';
$lang['ad_c_send'] = 'Saglabāt Izmaiņas';
$lang['ad_c_manage_both'] = 'erotiska un pornogrāfiska rakstura saturs';
$lang['ad_c_manage_pornonly'] = 'tikai pornogrāfiska rakstura saturs';
$lang['ad_c_manage_eroticonly'] = 'tikai erotiska rakstura saturs';
?>