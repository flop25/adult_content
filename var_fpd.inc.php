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
  <dl id="mbAdult_content">
 <dt><a href="'.$this->get_link_icon(duplicate_index_url(), 'open').'"> {|@translateac_title_fermer}</a></dt>
<dd>
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
		<dl id="mbAdult_content">
<dt>{|@translateac_title_menu}</dt>
<dd>
        <ul>
		<li>
		{|@translateac_text}
		</li>
		<li>
		<a href="'.get_root_url().'plugins/'.$this->plugin_name.'/charte.php">{|@translateac_lien}</a>
		</li>
		<li>
		<a href="{F_IDENTIFY}">{|@translateac_identif}</a>
		</li> 
		<li>
		<a href="'.$this->get_link_icon(duplicate_index_url(), 'closed').'">{|@translateac_fermer}</a>
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
  <dl id="mbAdult_content">
<dt>Adult content</dt>
<dd>
  <form method="post" action="{F_IDENTIFY}" class="filter" id="quickconnect">
     <fieldset>
        <label>
		{|@translateac_user_text_18} <a href="{U_LOGOUT}">{|@translateac_logout}</a>
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
  <dl id="mbAdult_content">
<dt>Adult content</dt>
<dd>
  <form method="post" action="{F_IDENTIFY}" class="filter" id="quickconnect">
     <fieldset>
        <label>
		{|@translateac_user_text_16} <a href="{U_LOGOUT}">{|@translateac_logout}</a>
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

$begin_ident = '<table id="table_menu" cellspacing="0" cellpadding="0">
 <tr>  <td id="content_up_left">&nbsp;</td>
  <td id="content_up">&nbsp;</td>
  <td id="content_up_right">&nbsp;</td>
</tr>
 <tr>
  <td id="content_left">&nbsp;</td>
  <td id="content_in">
<dl id="mbIdentification">';
$end_ident = '<!-- END quickconnect -->

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