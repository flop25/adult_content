<?php
$lang['ac_title_menu'] = 'Varování';
$lang['ac_title_menu_statut'] ='Informace';
$lang['ac_text'] = 'Tato galerie má obsah vhodný pouze pro dospělé.';
$lang['ac_lien'] = 'zrušit tuto ochranu';
$lang['ac_identif'] = 'nebo se přihlásit';
$lang['ac_fermer'] = 'nebo konec';

$lang['ac_title_fermer'] = 'obsah je filtrován';

$lang['ac_user_text_18'] = 'Jste starší 18-ti let';
$lang['ac_user_text_16'] = 'je Vám mezi 16 a 17 roky';
$lang['ac_logout'] = 'jinak klikněte zde';

$lang['ac_user_no'] = "nechcete procházet tento druh obsahu";
$lang['ac_user_no_s'] = "Obsah je filtrován";
$lang['ac_statut'] = 'Vaše rozhodnutí:';

$lang['ac_button_activ_18'] = 'pornografický obsah povolen';
$lang['ac_button_activ_16'] = 'erotický obsah povolen';
$lang['ac_text_charte'] = 'Vstupujete na místo s vizuálním obsahem erotického a pornografického charakteru, který je určen výhradně pro plnoleté. 
Provozovatel se zříká veškeré zodpovědnosti za využití tohoto obsahu. Každý musí před vstupem souhlasit se vstupem na toto místo a prohlásit, že je plnoletý a vstupem na toto místo neporušuje zákony své země. Timto přebírá veškerou zodpovědnost. </p><p>Deklaruji, že jsem byl kompletně informován o obsahu a zříkám se jakýchkoliv akcí vůči poskytovateli a administrátorům tohoto místa. Přečetl jsem pozorně odstavce výše a elektronicky potvrzuji můj souhlas stikem tlačítka odpovídajícímu mému věku.';
$lang['ac_text_activ_18'] = "  <u>... a čestně prohlašuji, že </u>: <br>
- <B>jsem starší než 18 let a jsem plnoletý </B> podle zákonů v mé vlasti. <br>
- byl jsem varován že tato galerie obsahuje pornografický a erotický obsah. <br>
- zákony v mé zemi mi umožňují prohlížet takovýto obsah.";
$lang['ac_text_activ_16'] = "<u> ... a čestně prohlašuji, že  </u>: <br>
        - <B> je mi mezi 16 a 17 roky.</B> <br>
- byl jsem varován že tato galerie obsahuje pornografický a erotický obsah. <br>
- zákony v mé zemi mi umožňují prohlížet takovýto obsah.";
$lang['ac_retour'] = 'Nechci otevírat takovýto druh obsahu a proto se vracím na předcházející stránku';
$lang['ac_retour_b'] = 'Nechci tento druh obsahu';
$lang['ac_retour_c'] = 'Vracím se na předchozí stránku';

$lang['ac_charte_user_not'] = 'Prosím zvolte svůj věk!';
$lang['ac_charte_user_def'] = 'jinak klikněte zde';
$lang['ac_not_def'] = 'Tato část je důležitá ale již nebudete znovu tázán.';
$lang['ac_def'] = 'Chcete změnit svůj stav?';

$lang['ad_c_linktolang'] = 'Jděte do jazykového souboru Adult Content (nutno mít povolený LocalFiles Editor)';
$lang['ad_c_manage_both'] = 'erotický a pornografický obsah';
$lang['ad_c_manage_eroticonly'] = 'pouze erotický obsah';
$lang['ad_c_manage_pornonly'] = 'pouze pornografický obsah';
$lang['ad_c_manage_what'] = 'Zvolte jaký druh obsahu má plugin spravovat:';
$lang['ad_c_menublock_for_guest'] = 'Povolit neregistrovaným uživatelům zvolit si věk?';
$lang['ad_c_msg_admin_1'] = 'Nastavení pluginu bylo úspěšně aktualizováno!';
$lang['ad_c_send'] = 'Uložit změny';
$lang['ad_c_howitworks'] = 'Princip tohoto pluginu je v jeho pomoc při zacházením s obsahem pro dospělé (může být taktéž využit pro obsah týkající se násilí). Plugin spravuje návštěvníky a/nebo uživatele dle vašeho přání, dle parametrů, které nastavíte.<br />
<br />
1 - Jako admin musíte umístit nevhodný obsah do privátní galerie, nebo alba (plugin neumožňuje spravovat jednotlivé fotografie, aspoň zatím ne). Pak přiřaďte galerii nebo album do jedné ze dvou skupin \'18\' nebo \'16-17\' (vytvořených pluginem) takto:<br />
<br />
- uživatelé ze skupiny \'18\' mají dovoleno zobrazit nevhodný obsah určemý pro starší 18-ti let a nezávadný obsah (ten ale obecně bývá veřejný)
<br /><br />
- uživatelé ze skupiny \'16-17\' mají dovoleno zobrazit nevhodný obsah určemý pro starší 16-ti a mladší 18-ti let a nezávadný obsah (ten ale obecně bývá veřejný)
<br /><br />
- uživatelé ze skupiny \'nic\' mají dovoleno zobrazovat pouze nezávadný obsah (ten ale obecně bývá veřejný)

<br /><br />

2 - Funkce pluginu<br />
2.1 - Správa uživatelů
<br />
<br />
Pokud je již uživatel zaznamenán v administraci pluginu, plugin ukáže jen malé políčko poukazující na to, že uživatel musí zadat svůj věk. Jakmile klikne, zobrazí se stránka, která upozorní, že jde o nevhodný obsah s možností zadat uživatelův věk (Charte_user.php).

Jakmile u6ivatel zadá svůj věk, je přesměrován zpět (Charte_user.php).

Jednoduše plugin přiřadí uživatele do jedné ze tří skupin \'18\', \'16-17\', \'nic\' podle zadaného věku. Uživatel může kdykoliv změnit svůj zadaný věk v blokovém menu Adult_Content, pokud to není zakázáno v administrační části Piwigo (pozor, přímý link na charte_user.php zůstává stále funkční): pokud si přejete, aby uživatel nemohl měnit svůj věk, potom je tento plugin nevhodný a použijte správu práv na úrovni skupin, nebo samotných fotek.
<br/>
<br/>
2.2 - Správa návštěvníků<br/>
<br/>
Pokud je aktivní volba \'Povolit neregistrovaným uživatelům zvolit si věk?\', pak plugin bude spravovat i neregistrované návštěvníky. * Zobrazuje blokové menu indikující, že obsah galerie je \'filtrovaný\' a pokud chce zrušit tento filtr musí zadat svůj věk.
Následně je přesměrován na stránku pro zadání věku (chartre.php).

Návštěvník je pak zapsán jako jeden ze dvou uživatelů vytvořených pluginem: \'18\' patřící do skupiny \'18\' a nebo \'16\' ze skupiny \'16-17\'. Tyto dva uživatelské účty mohou být modifikovány pouze administrátorem, nikoliv uživatelem.

Skrze tyto dva účty závislé na věku návštěvníků můžete ovlivnit co se komu zobrazí.
<br />
<br />

2.3 - Možné adaptace<br/>
<br/>
Tento plugin může být adaptován pro zobrazování obsahu obsahujícího násilí tak, že změníte jazykové soubory tohoto pluginu (použijte plugin Local Files Editor pro větší jednoduchost). Věkové limity mohou taktéž být změněny touto cestou.';
$lang['Disclaimer for the guest, with the ability to choose its age to unlock the adult content'] = 'Upozornění pro uživatele s možností zvolit si svůj věk';
?>