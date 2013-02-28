<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['ac_button_activ_16'] = 'Erotik içeriği etkinleştir';
$lang['ac_button_activ_18'] = 'Pornografik içeriği etkinleştir';
$lang['ac_charte_user_def'] = 'veya diğer durumda buraya tıkla';
$lang['ac_charte_user_not'] = 'Lütfen yaşınızı seçin!';
$lang['ac_def'] = 'Durumunuzu değiştirmek istiyor musunuz ?';
$lang['ac_fermer'] = 'veya kapat';
$lang['ac_identif'] = 'veya giriş yap';
$lang['ac_lien'] = 'bu korumayı kaldır';
$lang['ac_logout'] = 'veya ayrıca buraya tıkla';
$lang['ac_not_def'] = 'Bu adım gereklidir ancak bir daha size sorulmayacaktır';
$lang['ac_retour_b'] = 'Bu tip içeriği görmek istemiyorum';
$lang['ac_retour_c'] = 'Önceki sayfaya geri döndüm';
$lang['ac_retour'] = 'Bu tip içeriği etkinleştirmeden önceki sayfaya dönmek istiyorum';
$lang['ac_statut'] = 'Tüzüğünüz :';
$lang['ac_text'] = 'Bu galeri yetişkinler için görüntüler içerir.';
$lang['ac_title_fermer'] = 'içerik filtrelendi';
$lang['ac_title_menu_statut'] = 'Bilgi';
$lang['ac_title_menu'] = 'Uyarı';
$lang['ac_user_no_s'] = 'İçerik filtrelendi';
$lang['ac_user_no'] = 'bu tip içeriği etkinleştirmek istemediniz';
$lang['ac_user_text_16'] = 'Yaşınız 16 veya 17 dir';
$lang['ac_user_text_18'] = 'Yaşınız 18 \'den büyük';
$lang['ad_c_linktolang'] = 'Adult Content eklentisi dil dosyasına gidiniz (LocalFiles düzenleyicisinin etkin olması gerekir)';
$lang['ad_c_manage_both'] = 'erotik ve pornografik içerik';
$lang['ad_c_manage_eroticonly'] = 'sadece erotik içerik';
$lang['ad_c_manage_pornonly'] = 'sadece pornografik içerik';
$lang['ad_c_manage_what'] = 'Eklentinin yöneteceği içerik tipini seçin:';
$lang['ad_c_menublock_for_guest'] = 'Kayıtlı olmayan kullanıcıların yaşlarını seçmelerine izin ver?';
$lang['ad_c_msg_admin_1'] = 'Eklenti yapılandırması başarıyla kaydedildi!';
$lang['ad_c_send'] = 'Değişiklikleri Kaydet';
$lang['ac_text_activ_16'] = '<u> ... ve ben şerefim üzerine yemin ederim ki </u>: <br>
        - <B>16 yada 17 yaşındayım</B> <br>
- Bu sitenin pornografik ve erotik karakterler içeren resimleri yayınladığı konusunda uyarıldım.<br>
- Ülkemdeki kanunlar bana bu siteye erişim hakkı vermektedir.';
$lang['ac_text_activ_18'] = '  <u>... ve ben şerefim üzerine yemin ederim ki </u>: <br>
- Ülkemdeki mevcut kanunlara göre <B>ben 18 yaşından büyüğüm ve  yetişkinim </B><br>
- Bu sitenin pornografik ve erotik karakterler içeren resimleri yayınladığı konusunda uyarıldım.<br>
- Ülkemdeki kanunlar bana bu siteye erişim hakkı vermektedir.';
$lang['ac_text_charte'] = 'Bu site kendi rızası ile erişim yapacak yetişkinlere yöneliktir.
(translation to be continued...)';
$lang['ad_c_howitworks'] = 'The principle of the plugin is to help in the management of mature content (it can also be

adapted for violent content). To do this, the plugin manages the visitors and/or the users

as you wish according to your definition of parameters of the plugin.<br />
<br />
1 - As administrator you must put your adult content in a private gallery or album (the

plugin does not manage the rights to the level of images itself, at least not yet). Then

assign the gallery or album to the two groups \'18\' and \' 16-17\' (created by the plugin)

like this:<br /><br />

-allow the group \'18\' to see the adult content, reserved for users over the of age of 18

and normal content (but generally the normal content is often public)
<br /><br />
-allow the group \' 16-17\' to see the adult content reserved for users over the age of 16

and normal content (generally the normal content is often public)
<br /><br />
- the \'nothing\' group will see the normal content (but generally the normal content is

often public)
<br />

<br />
2 - Functioning of the plugin<br />
2.1 - The management of the users<br />
<br />
If the user is already recorded in the activation of the plugin, the plugin shows a small
block pointing out that he must choose his age. Once he clicks, the page containing the message of \'adult content\' will appear and the choice of choosing their age (Charte_user.php).

Once a visitor chooses his age, it is re-aimed to the page of choice of age (Charte_user.php), directly after its recording.

In practice, the plugin places the user in the 3 groups, \' 18\' \' 16-17\' and \'nothing\',

according to his choice of age. A user may at any time change his age via the block menu of

adult_content except if it is disabled via the administration of piwigo (attention the

direct link to charte_user.php continues to function all the same) : if you wish that a

user cannot change his age then this plugin is useless and use directly the management of

rights at the level of groups and/or images.<br />
<br />
2.2 - Visitor management<br />
<br />
If the option \'Allow visitors to non-registered to select their age ?\' is enabled, then the

plugin will manage the visitors. * It displays a block menu, indicating the gallery is

\'filtered\' and that if he wishes to disable the filter, he must select his age.
It is then redirected to the page of choice of the age for visitor (chartre.php).

In practice, the visitor is then recorded under one of the 2 users created by the plugin: \'

18\' belonging to the group \' 18 \', and \' 16\' from the group \' 16-17 \'.  These 2 user

accounts may not be modified by users, only by the administrator.
You open and choose to change the theme according to the age of the vistor via these 2 user

accounts.<br />
<br />
2.3 - Possible adaptations<br />
<br />
You can adapt this plugin for the violent content, simply by changing the files languages

of the plugin (use the plugin Local Files Editor for more ease).  The age limits may also

be changed in this way.';
$lang['No options. Just check "Allow unregistered users to select their age?" on the Adult Content administration page'] = 'Hiç bir seçenek belirtilmemiş. Adult Content yönetim sayfasında "Kayıtlı kullanıcıların kendi yaşlarını seçebilmelerine izin verilsin mi?" seçili olsun.';
$lang['NEW! Check the Plugin PWG Stuffs to add the disclaimer on the index/album pages'] = 'YENİ! Dizin/albüm sayfalarına feragatname eklemek için PWG Stuffs eklentisini kontrol edin';
$lang['Disclaimer for the guest, with the ability to choose its age to unlock the adult content'] = 'Misafiler için yaş seçme olanağı bulunan feragatname';
?>