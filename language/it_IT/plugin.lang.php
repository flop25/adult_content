<?php
$lang['ac_title_menu'] = 'Attenzione';
$lang['ac_title_menu_statut'] ='Information';
$lang['ac_text'] = 'Questa galleria contiene delle immagini destinati ad un pubbilico adulto';
$lang['ac_lien'] = 'togliere la protezzione';
$lang['ac_identif'] = 'o identificarsi';
$lang['ac_fermer'] = 'o non più visualizzare';

$lang['ac_title_fermer'] = 'contenuto filtrato';

$lang['ac_user_text_18'] = 'Avete più di 18 anni';
$lang['ac_user_text_16'] = 'Avete 16 o 17 anni';
$lang['ac_logout'] = 'o allora cliccare qui';

$lang['ac_user_no'] = "non avete desiderato attivare questo tipo di contenuti";
$lang['ac_user_no_s'] = "Filtro attivato";
$lang['ac_statut'] ='Vostro statuto :';

$lang['ac_button_activ_18'] = 'Attivare il contenuto pornografico';
$lang['ac_button_activ_16'] = 'Attivare il contenuto erotico';
$lang['ac_text_charte'] = "State entrando in un sito nel quale i contenuti a carattere erotico e/o pornografico sono destinati ad un pubblico adulto. Questo sito è di fatto destinato ad un pubblico maggiorenne. Il presente sito non può essere tenuto responsabile del uso che verra fatto dei contenuti e servizzi del suddetto sito. Accettando d'entrare in questo sito destinato ad un pubblico adulto, assumete di fatto tutte le conseguezze legate alla sua consultazzione. </p>
<p> Se vado al incontro di quanto dichiarato o in caso di falza dichiarazione, potrei essere in violazione con le leggi del mio paese, e <B>ne assumo l'intera reponsabilità</B>. Dichiaro essere stato correttamente informato dei contenuti proposti e rinunciare a tutti i procedimenti nei confronti del provaider e del/degli autore/i di questo sito. Ho letto attentamente i paragrafi qui sopra e firmo elettronicamente il mio accordo con ciò che precede cliccando sul pulsante corrispondente alla mia età.";
$lang['ac_text_activ_18'] = "  <u>... e certifico sul\'onore che </u>: <br>
- <B>ho più di 18 anni e che sono maggiorenne </B> secondo le leggi in vigore nel mio paese. <br>
- sono al corrente che il sito propone delle immagini a carattere pornografico e/o erotico. <br>
- Le leggi del mio paese m'autorizzono ad accedere a questo sito.";
$lang['ac_text_activ_16'] = "<u> ... e certifico sul\'onore che </u>: <br>
        - <B>ho 16 o 17 anni.</B> <br>
- sono al corrente che il sito propone delle immagini a carattere erotico. <br>
- Le leggi del mio paese m'autorizzono ad accedere a questo sito.";
$lang['ac_retour'] = 'Non desidero attivare questo genere di contenuti e desitero ritornare alla pagina precedente';
$lang['ac_retour_b'] = 'Non desidero attivare questo genere di contenuti';
$lang['ac_retour_c'] = 'Desitero ritornare alla pagina precedente';

$lang['ac_charte_user_not'] = 'Selezionare l\'età !';
$lang['ac_charte_user_def'] = 'cambiare il vostro statuto';
$lang['ac_not_def'] = 'Questa operazione è indispensabile ma, in seguito, non vi sarà più richiesta';
$lang['ac_def'] = 'Volete cambiare statuto ?';

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