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
$lang['ac_statut'] ='Vaše rozhodnutí  :';

$lang['ac_button_activ_18'] = 'pornografický obsah povolen';
$lang['ac_button_activ_16'] = 'erotický obsah povolen';
$lang['ac_text_charte'] = "Vstupujete na místo s vizuálním obsahem erotického a pornografického charakteru, který je určen výhradně pro plnoleté. 
Místo se zříká veškeré zodpovědnosti za využití tohoto obsahu. Každý musí před vstupem souhlasit se vstupem na toto místo a prohlásit, že je plnoletý a vstupem na toto místo neporušuje zákony své země. Timto přebírá veškerou zodpovědnost. </p><p>Deklaruji, že jsem byl kompletně informován o obsahu a zříkám se jakýchkoliv akcí vůči poskytovateli a administrátorům tohoto místa. Přečetl jsem pozorně odstavce výše a elektronicky potvrzuji můj souhlas stikem tlačítka odpovídajícímu mému věku.";
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
$lang['ac_charte_user_def'] = 'změňte svůj status';
$lang['ac_not_def'] = 'Tato část je důležitá ale již nebudete znovu tázán.';
$lang['ac_def'] = 'Chcete změnit svůj stav ?';

/*TODO*/$lang['ad_c_menublock_for_guest'] = 'Allow unregistered users to select their age?';
/*TODO*/$lang['ad_c_block_on_index'] = 'View a flyer on the homepage? (Requires plugin PWG_Stuffs)';
/*TODO*/$lang['ad_c_block_on_index_error_2'] = 'The minimum PWG_Stuffs version required is 2.1.l';
/*TODO*/$lang['ad_c_block_on_index_error'] = 'Not available for now';
/*TODO*/$lang['ad_c_manage_what'] = 'Select the type of content the plugin should manage :';
/*TODO*/$lang['ad_c_manage_eroticonly'] = 'erotic content only';
/*TODO*/$lang['ad_c_manage_pornonly'] = 'pornographic content only';
/*TODO*/$lang['ad_c_manage_both'] = 'erotic and pornographic content';

/*TODO*/$lang['ad_c_send'] = 'Save Changes';
/*TODO*/$lang['ad_c_msg_admin_1'] = 'Plugin configuration updated successfully!';
/*TODO*/$lang['ad_c_howitworks'] = "The principle of the plugin is to help in the management of mature content (it can also be

adapted for violent content). To do this, the plugin manages the visitors and/or the users

as you wish according to your definition of parameters of the plugin.<br />
<br />
1 - As administrator you must put your adult content in a private gallery or album (the

plugin does not manage the rights to the level of images itself, at least not yet). Then

assign the gallery or album to the two groups '18' and ' 16-17' (created by the plugin)

like this:<br /><br />

-allow the group '18' to see the adult content, reserved for users over the of age of 18

and normal content (but generally the normal content is often public)
<br /><br />
-allow the group ' 16-17' to see the adult content reserved for users over the age of 16

and normal content (generally the normal content is often public)
<br /><br />
- the 'nothing' group will see the normal content (but generally the normal content is

often public)
<br />

<br />
2 - Functioning of the plugin<br />
2.1 - The management of the users<br />
<br />
If the user is already recorded in the activation of the plugin, the plugin shows a small
block pointing out that he must choose his age. Once he clicks, the page containing the message of 'adult content' will appear and the choice of choosing their age (Charte_user.php).

Once a visitor chooses his age, it is re-aimed to the page of choice of age (Charte_user.php), directly after its recording.

In practice, the plugin places the user in the 3 groups, ' 18' ' 16-17' and 'nothing',

according to his choice of age. A user may at any time change his age via the block menu of

adult_content except if it is disabled via the administration of piwigo (attention the

direct link to charte_user.php continues to function all the same) : if you wish that a

user cannot change his age then this plugin is useless and use directly the management of

rights at the level of groups and/or images.<br />
<br />
2.2 - Visitor management<br />
<br />
If the option 'Allow visitors to non-registered to select their age ?' is enabled, then the

plugin will manage the visitors. * It displays a block menu, indicating the gallery is

'filtered' and that if he wishes to disable the filter, he must select his age.
It is then redirected to the page of choice of the age for visitor (chartre.php).

In practice, the visitor is then recorded under one of the 2 users created by the plugin: '

18' belonging to the group ' 18 ', and ' 16' from the group ' 16-17 '.  These 2 user

accounts may not be modified by users, only by the administrator.
You open and choose to change the theme according to the age of the vistor via these 2 user

accounts.<br />
<br />
2.3 - Possible adaptations<br />
<br />
You can adapt this plugin for the violent content, simply by changing the files languages

of the plugin (use the plugin Local Files Editor for more ease).  The age limits may also

be changed in this way.
";
?>