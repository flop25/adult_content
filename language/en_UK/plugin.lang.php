<?php
$lang['ac_title_menu'] = 'Warning';
$lang['ac_title_menu_statut'] ='Information';
$lang['ac_text'] = 'This gallery contains images addressant to mature persons and\or adults.';
$lang['ac_lien'] = 'remove this protection';
$lang['ac_identif'] = 'or log-in';
$lang['ac_fermer'] = 'or close';

$lang['ac_title_fermer'] = 'content filtred';

$lang['ac_user_text_18'] = 'You are more than 18 years old';
$lang['ac_user_text_16'] = 'You are 16 or 17 years old';
$lang['ac_logout'] = 'or otherwise click here';

$lang['ac_user_no'] = "you did'nt wish to activate this kind of contents ";
$lang['ac_user_no_s'] = "Content filtred";
$lang['ac_statut'] ='Your statute  :';

$lang['ac_button_activ_18'] = 'Activate the pornographic contents';
$lang['ac_button_activ_16'] = 'Activate the erotic contents';
$lang['ac_text_charte'] = "You enter on a site the visual contents of which with erotic and pornographic character are exclusively intended for a warned public and can present contents to erotic character. This site addresses the major and willing persons. This present site declines any responsibility as for the use which will be made by the contents and the services of this site by every minor or major person susceptible to be shocked by this one. Every person agreeing to enter within this site strictly reserved for a warned public unloads this present site of all the consequences of its consultation. </p>
<p>If I violate one of these commitments or in case of false declaration, I can be in violation with the laws of my country, and<B> shall assume the whole responsibility of my acts</B>. I declare to have been completely informed about the proposed contents and give up any legal proceedings against the access provider and the admistrators of this site. I read attentively paragraphs above and sign electrically my agreement with what precedes by clicking the button corresponding to my age.";
$lang['ac_text_activ_18'] = "  <u>... and I guarantee on the honor that </u>: <br>
- <B>I am more than 18 years old and I am major </B> according to the law current in my country. <br>
- I am warned that this site proposes images with pornographic and erotic character. <br>
- The laws of my country authorize me to reach this site.";
$lang['ac_text_activ_16'] = "<u> ... and I guarantee on the honor that </u>: <br>
        - <B>I am 16 or 17 years old.</B> <br>
- I am warned that this site proposes images with pornographic and erotic character. <br>
- The laws of my country authorize me to reach this site.";
$lang['ac_retour'] = 'I do not wish to activate this kind of contents and I return on the previous page';
$lang['ac_retour_b'] = 'I don\'t want to see that kind of content';
$lang['ac_retour_c'] = 'I come back on the previous page';

$lang['ac_charte_user_not'] = 'Please select your age!';
$lang['ac_charte_user_def'] = 'change your status ';
$lang['ac_not_def'] = 'This stage is essential but not will be asked to you anymore';
$lang['ac_def'] = 'Do you want to change your status ?';

$lang['ad_c_menublock_for_guest'] = 'Allow unregistered users to select their age?';
$lang['ad_c_block_on_index'] = 'View a flyer on the homepage? (Requires plugin PWG_Stuffs)';
$lang['ad_c_block_on_index_error_2'] = 'The minimum PWG_Stuffs version required is 2.1.l';
$lang['ad_c_block_on_index_error'] = 'Not available for now';
$lang['ad_c_send'] = 'Save Changes';
$lang['ad_c_msg_admin_1'] = 'Plugin configuration updated successfully!';
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