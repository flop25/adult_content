<?php
$lang['ac_title_menu'] = 'Figyelem';
$lang['ac_title_menu_statut'] ='Információ';
$lang['ac_text'] = 'A galéria felnőtteknek és/vagy érett személyeknek szóló képeket tartalmaz.';
$lang['ac_lien'] = 'védelem eltávolítása';
$lang['ac_identif'] = 'vagy belépés';
$lang['ac_fermer'] = 'vagy bezárás';

$lang['ac_title_fermer'] = 'tartalom szűrés';

$lang['ac_user_text_18'] = 'Ön elmúlt 18 éves';
$lang['ac_user_text_16'] = 'Ön elmúlt 16 vagy 17 éves';
$lang['ac_logout'] = 'vagy más módon, kattintson ide';

$lang['ac_user_no'] = "nem engedélyezem a tartalmat ";
$lang['ac_user_no_s'] = "Tartalom szűrés";
$lang['ac_statut'] ='Az Ön státusza  :';

$lang['ac_button_activ_18'] = 'Engedélyezem a pornográf tartalmat';
$lang['ac_button_activ_16'] = 'Engedélyezem az erotikus tartalmat';
$lang['ac_text_charte'] = "Az oldal felnőtteknek szóló pornográf ill. erotikus képeket, szövegeket, videokat és egyéb tartalmat jelenít meg. A tartalom megtekintése csak felnőtt felhasználóink számára engedélyezett. A továbbiakban az erre vonatkozó nyilatkozatot a megfelelő gombra történő kattintással teszi meg. A honlap üzemeltetője nem vállal felelősséget a valótlan nyilatkozatokból származó nemkívánatos tartalmak megtekintéséért. </p></p>
<p><B>Nyilatkozat:</B>";
$lang['ac_text_activ_18'] = "  <u>... és garantálom, hogy </u>: <br>
- <B>Elmúltam 18 éves és nagykorú vagyok </B> az országom törvényei szerint. <br>
- Megértettem a figyelmeztetést, hogy az oldalon pornográf és erotikus tartalom található. <br>
- Az országom törvényei engedélyezik, hogy megnézzem a tartalmat.";
$lang['ac_text_activ_16'] = "<u> ... és garantálom, hogy </u>: <br>
        - <B>Elmúltam 16 vagy 17 éves.</B> <br>
- Megértettem a figyelmeztetést, hogy az oldalon pornográf és erotikus tartalom található. <br>
- Az országom törvényei engedélyezik, hogy megnézzem a tartalmat.";
$lang['ac_retour'] = 'Nem engedélyezem a tartalmat - visszatérés az előző oldalra';
$lang['ac_retour_b'] = 'Nem engedélyezem a tartalmat';
$lang['ac_retour_c'] = 'Visszatérés az előző oldalra';

$lang['ac_charte_user_not'] = 'Kérem vállassza ki a kort!';
$lang['ac_charte_user_def'] = 'státusz megváltoztatása';
$lang['ac_not_def'] = 'Ez lényeges jog, többször nem kérdezi meg';
$lang['ac_def'] = 'Szeretné megváltoztatni a státuszát ?';

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