<?php
$lang['ac_title_menu'] = 'Warning';
$lang['ac_title_menu_statut'] ='Information';
$lang['ac_text'] = 'This gallery contains images for mature persons and\or adults.';
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
$lang['ac_charte_user_def'] = 'or otherwise click here';
$lang['ac_not_def'] = 'This stage is essential but not will be asked to you anymore';
$lang['ac_def'] = 'Do you want to change your status ?';

$lang['ad_c_menublock_for_guest'] = 'Allow unregistered users to select their age?';
$lang['ad_c_block_on_index'] = 'View a flyer on the homepage? (Requires plugin PWG_Stuffs)';
$lang['ad_c_block_on_index_error_2'] = 'The minimum PWG_Stuffs version required is 2.1.l';
$lang['ad_c_block_on_index_error'] = 'Not available for now';
$lang['ad_c_manage_what'] = 'Select the type of content the plugin should manage :';
$lang['ad_c_manage_eroticonly'] = 'erotic content only';
$lang['ad_c_manage_pornonly'] = 'pornographic content only';
$lang['ad_c_manage_both'] = 'erotic and pornographic content';


$lang['ad_c_send'] = 'Save Changes';
$lang['ad_c_msg_admin_1'] = 'Plugin configuration updated successfully!';
$lang['ad_c_howitworks'] = "The principle of the plugin is to help in the management of mature content (it can also be

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
$lang['ad_c_linktolang']="Go to the language file of Adult Content (need LocalFiles Editor enabled)"
?>