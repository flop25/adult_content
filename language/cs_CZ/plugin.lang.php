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