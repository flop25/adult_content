<dt>
	<img class="button" alt="{$AC_MSG}" src="{$ROOT_URL}{$themeconf.icon_dir}/lost_password.png" />{'ac_title_menu_statut'|@translate}
</dt>
<dd>
  <ul>
	{if isset($U_LOGOUT)}
		{$AC_MSG} <li><a href="{$U_LOGOUT}">{'ac_logout'|@translate}</a></li>
	{/if}
  </ul>
</dd>
