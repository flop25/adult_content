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
/*TODO*/$lang['ad_c_send'] = 'Save Changes';
/*TODO*/$lang['ad_c_msg_admin_1'] = 'Plugin configuration updated successfully!';
/*TODO*/$lang['ad_c_howitworks'] = 'Le principe du plugin est d\'aider à la gestion de contenus matures (il peut être adapté pour du contenu violent). Pour se faire, le plugin gère les visiteurs et/ou les utilisateurs (au choix selon votre paramétrage du plugin).<br />
<br />
1 - Que devez-vous faire en tant qu\'admistrateur<br />
<br />
Vous devez juste mettre vos catégories litigieuse en privé (le plugin ne gère pas les droits au niveau des images elle-même, du moins pas encore).<br />
Ensuite attribuer ces galeries privées aux deux groupes "+18" et "16-17" (créés par le plugin) comme ceci :<br />
 - autoriser le groupe "+18" à voir le contenu pornographique ou autre, réservé aux plus de 18 ans ET le contenu érotique, réservé aux plus de 16 ans ET le contenu normal (mais normalement le contenu normal est public bien souvent)<br />
 - autoriser le groupe "16-17" à voir le contenu érotique, réservé aux plus de 16 ans ET le contenu normal (mais normalement le contenu normal est public bien souvent)<br />
 - autoriser le groupe "nothing" à voir le contenu normal (mais normalement le contenu normal est bien souvent public)<br />
<br />
Vous n\'avez rien d\'autre à faire.<br />
<br />
2 - Fonctionnement du plugin<br />
2.1 - La gestion des utilisateurs<br />
<br />
Si l\'utilisateur est déjà enregistré à l\'actication du plugin, le plugin affiche un bloc menu indiquant qu\'il doit sélectionner son âge. Si il clique dessus, la page contenant le message d\'avertissement et le choix de l\âge (charte_user.php).<br />
Si un visiteur s\'enregistre, il est redirigé vers la page de choix de l\'âge (charte_user.php), directement après son enregistrement.<br />
<br />
En pratique, le plugin place l\'utilisateur dans les des 3 groupes, "+18" "16-17" et "nothing", selon son choix d\'âge. Un utilisateur peut à tout moment changer son âge via le bloc menu d\'adult_content sauf si celui est désactivé via l\'administration de piwigo (attention le lien direct vers charte_user.php continue de fonctionner tout de même) : si vous souhaiter qu\'un utilisateur ne puisse pas changer son âge alors ce plugin ne sert à rien, utiliser directement la gestion des droits au niveau des groupes et/ou des images.<br />
<br />
2.2 - La gestion des visiteurs<br />
<br />
Si l\'option "Permettre aux visiteurs non-enregistrés de sélectionner leur âge ?" est activée, alors le plugin gérera les visiteurs.<br />
Il affiche un bloc menu, indiquant la galerie est "filtrée" et que s\'il souhaite désactiver le filtre, il doit sélectionner son âge. Il est alors redirigé vers la page de choix de l\'âge pour visiteur (chartre.php).<br />
<br />
En pratique, le visiteur est alors enregistré sous un des 2 utilisateurs créé par le plugin : "18" appartenant au groupe "+18", et "16" du groupe "16-17". Ces 2 comptes utilisateurs ne peuvent être modifié par eux-mêmes, mais uniquement par l\'administrateur lui-même. Vous ouvez ainsi choisir de changer le thème selon l\'âge du visteur via ces 2 comptes utilisateurs.<br />
<br />
2.3 - Adaptations possibles<br />
<br />
Vous pouvez adapter ce plugin pour du contenu violent, simplement en changeant les fichiers langues du plugin (utilisez le plugin LocalFiles Editor pour plus de facilité).<br />
Les âges limites peuvent aussi être changés de cette façon.<br />
';
?>