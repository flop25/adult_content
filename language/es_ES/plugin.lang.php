<?php
$lang['ac_title_menu'] = 'Atención';
$lang['ac_title_menu_statut'] ='Información';
$lang['ac_text'] = 'Esta galería contiene imágenes reservadas a personas maduras y\o mayores';
$lang['ac_lien'] = 'Quitar la protección';
$lang['ac_identif'] = 'O identificarse';
$lang['ac_fermer'] = 'o no visualizar más';

$lang['ac_title_fermer'] = 'contenido filtrado';

$lang['ac_user_text_18'] = 'Usted tiene más de 18 años';
$lang['ac_user_text_16'] = 'Usted tiene 16 o 17 años';
$lang['ac_logout'] = 'O sino haga clic aquí';

$lang['ac_user_no'] = "Usted no deseó activar este género de contenido";
$lang['ac_user_no_s'] = "Filtro activado";
$lang['ac_statut'] ='Su estatuto :';

$lang['ac_button_activ_18'] = 'Activar el contenido pornográfico';
$lang['ac_button_activ_16'] = 'Activar el contenido erótico';
$lang['ac_text_charte'] = "Usted entra en una sitio cuyo contenido visual a carácter erótico y pornográfico es destinado exclusivamente a un público advertido y puede presentar contenidos a carácter erótico. Este sitio se dirige a las personas mayores. Este sitio presente declina toda responsabilidad en cuanto a la utilización de los contenidos y servicios de este sitio por parte de toda persona menor o mayor  susceptible de ser chocada por éste. Toda persona que acepta entrar en este sitio estrictamente reservada a un público advertido sera responsable de todas las consecuencias de su consulta. </p>
<p> Si violo uno de estos empeños o en caso de falsas declaración, podré estar en violación con las leyes de mi país , y <B>asumiré entera responsabilidad de mis actos</B>. Declaro plenamente haber sido informado sobre el contenido propuesto y renuncio a toda persecución judicial contra el provedor de acceso y los editores de este sitio. Leí atentamente los párrafos más arriba y firmo electrónicamente mi acuerdo con lo que precede haciendo clic en el botón correspondiente a mi edad.";
$lang['ac_text_activ_18'] = "  <u>... y certifico sobre el honor que </u>: <br>
- <B>Tengo más de 18 años y soy mayor</B> según la ley vigente en mi país. <br>
- Estoy advertido que el programa propone imágenes a carácter pornográfico y erótico. <br>
- Las leyes de mi país me autorizan a acceder a esta sitio.";
$lang['ac_text_activ_16'] = "<u> ... y certifico sobre el honor que </u>: <br>
        - <B>Tengo 16 o 17 años.</B> <br>
- Estoy advertido que este sitio propone imágenes a carácter erótico. <br>
- Las leyes de mi país me autorizan a acceder a esta sitio.";
$lang['ac_retour'] = 'No deseo activar este género de contenido y regreso sobre la página precedente';
$lang['ac_retour_b'] = 'No deseo activar este género de contenido';
$lang['ac_retour_c'] = 'Regreso a la página precedente';

$lang['ac_charte_user_not'] = 'Por favor, seleccione su edad !';
$lang['ac_charte_user_def'] = 'cambiar su estatuto';
$lang['ac_not_def'] = 'Esta etapa es indispensable pero no le será pedida más más tarde';
$lang['ac_def'] = 'Usted quiere cambiar su estatuto ?';

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