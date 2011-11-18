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
/*TODO*/$lang['ad_c_linktolang']="Go to the language file of Adult Content (need LocalFiles Editor enabled)"
?>