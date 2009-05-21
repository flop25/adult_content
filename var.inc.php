<?php
	$msg_closed = '<dl id="mbMenu">
 <dt><a href="'.$this->get_link_icon(duplicate_index_url(), 'open').'"> {|@translateac_title_fermer}</a></dt>
</dl>
';
	$msg_opened = '<dl id="mbMenu">
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
';
	$msg_18 = '<dl id="mbIdentification">
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
';
	$msg_16 = '<dl id="mbIdentification">
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
';

$begin_ident = '<dl id="mbIdentification">';
$end_ident = '<!-- END quickconnect -->

  </dd>
</dl>
';
?>