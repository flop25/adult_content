<?php
	$msg_closed = '<table id="table_menu" cellspacing="0" cellpadding="0">
 <tr>
  <td id="content_up_left">&nbsp;</td>
  <td id="content_up">&nbsp;</td>
  <td id="content_up_right">&nbsp;</td>
 </tr>
 <tr>
  <td id="content_left">&nbsp;</td>
  <td id="content_in">
  <dl id="mbIdentification">
<dd>
 <dt><a href="'.$this->get_link_icon(duplicate_index_url(), 'open').'"> {lang:ac_title_fermer}</a></dt>
</dd>
</dl>
</td>
  <td id="content_right">&nbsp;</td>
 </tr>
     <tr>
      <td id="content_bottom_left">&nbsp;</td>
      <td id="content_bottom">&nbsp;</td>
      <td id="content_bottom_right">&nbsp;</td>
    </tr>
</table>';
	$msg_opened = '<table id="table_menu" cellspacing="0" cellpadding="0">
 <tr>
  <td id="content_up_left">&nbsp;</td>
  <td id="content_up">&nbsp;</td>
  <td id="content_up_right">&nbsp;</td>
 </tr>
 <tr>
  <td id="content_left">&nbsp;</td>
  <td id="content_in">
		<dl id="mbIdentification">
<dd>
<dt>{lang:ac_title_menu}</dt>
        <ul>
		<li>
		{lang:ac_text}
		</li>
		<li>
		<a href="'.get_root_url().'plugins/'.$this->plugin_name.'/charte.php">{lang:ac_lien}</a>
		</li>
		<li>
		<a href="{F_IDENTIFY}">{lang:ac_identif}</a>
		</li> 
		<li>
		<a href="'.$this->get_link_icon(duplicate_index_url(), 'closed').'">{lang:ac_fermer}</a>
		</li> 
        </ul>
</dd>
</dl>
</td>
  <td id="content_right">&nbsp;</td>
 </tr>
     <tr>
      <td id="content_bottom_left">&nbsp;</td>
      <td id="content_bottom">&nbsp;</td>
      <td id="content_bottom_right">&nbsp;</td>
    </tr>
</table>';

$msg_18 = '<table id="table_menu" cellspacing="0" cellpadding="0">
 <tr>
  <td id="content_up_left">&nbsp;</td>
  <td id="content_up">&nbsp;</td>
  <td id="content_up_right">&nbsp;</td>
 </tr>
 <tr>
  <td id="content_left">&nbsp;</td>
  <td id="content_in">
  <dl id="mbIdentification">
<dt>Adult content</dt>
<dd>
  <form method="post" action="{F_IDENTIFY}" class="filter" id="quickconnect">
     <fieldset>
        <label>
		{lang:ac_user_text_18} <a href="{U_LOGOUT}">{lang:ac_logout}</a>
		</label>
    </fieldset>
    </form>
 </dd>
</dl>
</td>
  <td id="content_right">&nbsp;</td>
 </tr>
     <tr>
      <td id="content_bottom_left">&nbsp;</td>
      <td id="content_bottom">&nbsp;</td>
      <td id="content_bottom_right">&nbsp;</td>
    </tr>
</table>';

$msg_16 = '<table id="table_menu" cellspacing="0" cellpadding="0">
 <tr>
  <td id="content_up_left">&nbsp;</td>
  <td id="content_up">&nbsp;</td>
  <td id="content_up_right">&nbsp;</td>
 </tr>
 <tr>
  <td id="content_left">&nbsp;</td>
  <td id="content_in">
  <dl id="mbIdentification">
<dt>Adult content</dt>
<dd>
  <form method="post" action="{F_IDENTIFY}" class="filter" id="quickconnect">
     <fieldset>
        <label>
		{lang:ac_user_text_16} <a href="{U_LOGOUT}">{lang:ac_logout}</a>
		</label>
    </fieldset>
    </form>
 </dd>
</dl>
</td>
  <td id="content_right">&nbsp;</td>
 </tr>
     <tr>
      <td id="content_bottom_left">&nbsp;</td>
      <td id="content_bottom">&nbsp;</td>
      <td id="content_bottom_right">&nbsp;</td>
    </tr>
</table>';
?>