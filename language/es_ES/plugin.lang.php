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