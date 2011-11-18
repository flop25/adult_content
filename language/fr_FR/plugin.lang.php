<?php
$lang['ac_title_menu'] = 'Attention';
$lang['ac_title_menu_statut'] ='Information';
$lang['ac_text'] = 'Cette galerie contient des images s\'addressant à des personnes matures et/ou majeurs';
$lang['ac_lien'] = 'enlever la protection';
$lang['ac_identif'] = 'ou s\'identifier';
$lang['ac_fermer'] = 'ou ne plus afficher';

$lang['ac_title_fermer'] = 'contenu filtré';

$lang['ac_user_text_18'] = 'Vous avez plus de 18 ans';
$lang['ac_user_text_16'] = 'Vous avez 16 ou 17 ans';
$lang['ac_logout'] = 'ou sinon cliquez ici';

$lang['ac_user_no'] = "vous n'avez pas souhaité activer ce genre de contenu";
$lang['ac_user_no_s'] = "Filtre activé";
$lang['ac_statut'] ='Votre statut :';

$lang['ac_button_activ_18'] = 'Activer le contenu pornographique';
$lang['ac_button_activ_16'] = 'Activer le contenu érotique';
$lang['ac_text_charte'] = "Vous entrez sur un site dont le contenu visuel à caractère érotique et pornographique est destiné exclusivement à un public averti et peut présenter des contenus à caractère &eacute;rotique. Ce site s'adresse aux personnes majeures et consentantes. Ce présent site décline toute responsabilité quant à l'utilisation qui sera faite des contenus et services de ce site par toute personne mineure ou majeure susceptible d'être choquée par celle-ci. Toute personne acceptant d'entrer au sein de ce site strictement réservé &agrave; un public averti décharge ce présent site de toutes les conséquences de sa consultation. </p>
<p> Si je viole l'un de ces engagements ou en cas de fausses déclaration, je pourrai être en violation avec les lois de mon pays, et <B>assumerai l'entière responsabilité de mes actes</B>. Je déclare avoir été pleinement informé du contenu proposé et renonce à toutes poursuites judiciaires contre le fournisseur d'accès et les éditeurs de ce site. J'ai lu attentivement les paragraphes ci-dessus et signe électroniquement mon accord avec ce qui précède en cliquant sur le bouton correspondant à mon âge.";
$lang['ac_text_activ_18'] = "  <u>... et je certifie sur l'honneur que </u>: <br>
- <B>J'ai plus de 18 ans et suis majeur</B> selon la loi en vigueur dans mon pays. <br>
- Je suis averti que le programme propose des images à caractère pornographique et érotique. <br>
- Les lois de mon pays m'autorisent à accéder à ce site.";
$lang['ac_text_activ_16'] = "<u> ... et je certifie sur l'honneur que </u>: <br>
        - <B>J'ai  16 ou 17 ans.</B> <br>
- Je suis averti que ce site propose des images à caractère érotique. <br>
- Les lois de mon pays m'autorisent à accéder à ce site.";
$lang['ac_retour'] = 'Je ne souhaite pas activer ce genre de contenu et je retourne sur la page précédente';
$lang['ac_retour_b'] = 'Je ne souhaite pas activer ce genre de contenu';
$lang['ac_retour_c'] = 'Je retourne sur la page précédente';

$lang['ac_charte_user_not'] = 'Veuillez sélectionner votre âge !';
$lang['ac_charte_user_def'] = 'changer votre statut';
$lang['ac_not_def'] = 'Cette étape est indispensable mais ne vous sera plus demandé par la suite';
$lang['ac_def'] = 'Voulez-vous changez votre statut ?';

$lang['ad_c_menublock_for_guest'] = 'Permettre aux visiteurs non-enregistrés de sélectionner leur âge ?';
$lang['ad_c_block_on_index'] = 'Afficher un encart sur la page d\'accueil ? (Nécessite le plugin PWG Stuffs)';
$lang['ad_c_block_on_index_error_2'] = 'PWG Stuffs dans une version supérieure à 2.1.l est nécessaire';
$lang['ad_c_block_on_index_error'] = 'fonction non disponible pour l\'instant';

$lang['ad_c_manage_what'] = 'Le plugin gère le contenu';
$lang['ad_c_manage_eroticonly'] = 'érotique seulement';
$lang['ad_c_manage_pornonly'] = 'pornographique seulement';
$lang['ad_c_manage_both'] = 'érotique et pornographique';

$lang['ad_c_send'] = 'Enregistrer les changements';
$lang['ad_c_msg_admin_1'] = 'Configuration du plugin mise à jour avec succès !';
$lang['ad_c_howitworks'] = 'Le principe du plugin est d\'aider à la gestion de contenus matures (il peut être adapté pour du contenu violent). Pour se faire, le plugin gère les visiteurs et/ou les utilisateurs (au choix selon votre paramétrage du plugin).<br />
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
Si l\'utilisateur est déjà enregistré à l\'activation du plugin, le plugin affiche un bloc menu indiquant qu\'il doit sélectionner son âge. S\'il clique dessus, la page contenant le message d\'avertissement et le choix de l\'âge (charte_user.php).<br />
Si un visiteur s\'enregistre, il est redirigé vers la page de choix de l\'âge (charte_user.php), directement après son enregistrement.<br />
<br />
En pratique, le plugin place l\'utilisateur dans les des 3 groupes, "+18" "16-17" et "nothing", selon son choix d\'âge. Un utilisateur peut à tout moment changer son âge via le bloc menu d\'adult_content sauf si celui est désactivé via l\'administration de piwigo (attention le lien direct vers charte_user.php continue de fonctionner tout de même) : si vous souhaiter qu\'un utilisateur ne puisse pas changer son âge alors ce plugin ne sert à rien, utiliser directement la gestion des droits au niveau des groupes et/ou des images.<br />
<br />
2.2 - La gestion des visiteurs<br />
<br />
Si l\'option "Permettre aux visiteurs non-enregistrés de sélectionner leur âge ?" est activée, alors le plugin gérera les visiteurs.<br />
Il affiche un bloc menu, indiquant que la galerie est "filtrée" et que s\'il souhaite désactiver le filtre, il doit sélectionner son âge. Il est alors redirigé vers la page de choix de l\'âge pour visiteur (charte.php).<br />
<br />
En pratique, le visiteur est alors enregistré sous un des 2 utilisateurs créé par le plugin : "18" appartenant au groupe "+18", et "16" du groupe "16-17". Ces 2 comptes utilisateurs ne peuvent être modifié par eux-mêmes, mais uniquement par l\'administrateur lui-même. Vous pouvez ainsi choisir de changer le thème selon l\'âge du visteur via ces 2 comptes utilisateurs.<br />
<br />
2.3 - Adaptations possibles<br />
<br />
Vous pouvez adapter ce plugin pour du contenu violent, simplement en changeant les fichiers langues du plugin (utilisez le plugin LocalFiles Editor pour plus de facilité).<br />
Les âges limites peuvent aussi être changés de cette façon.<br />
';
$lang['ad_c_linktolang']="Lien vers le fichier langue d'Adult Content (Nécessite localFiles Editor)"
?>