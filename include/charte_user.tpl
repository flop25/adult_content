{combine_css path="plugins/$PLUGIN_NAME/include/charte.css"}
<div id="content">
  <div class="titrePage">
    <ul class="categoryActions">
      <li><a href="{$U_HOME}" title="{'Home'|@translate}" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-home">&nbsp;</span><span class="pwg-button-text">{'Home'|@translate}</span>
      </a></li>
    </ul>
    <h2>Adult content config</h2>
  </div>
  <div id="autre_content">
    <p>{$EXPLIC}</p>
    <p>{$MAIN}</p>
    {if $AD_C_manage_what=="18" || $AD_C_manage_what=="both"}
    <fieldset>
      <form method="post" action="{$pwg_root}charte_user.php" >
        <input type="hidden" name="groupe" value="+18"/>
        <input class="submit" type="submit" name="login" value="{'ac_button_activ_18'|@translate}"/>
        {'ac_text_activ_18'|@translate}
      </form>
    </fieldset>
    {/if}
    {if $AD_C_manage_what=="16" || $AD_C_manage_what=="both"}
    <fieldset>
      <form method="post" action="{$pwg_root}charte_user.php">
        <input type="hidden" name="groupe" value="16-17"/>
        <input class="submit" type="submit" name="login" value="{'ac_button_activ_16'|@translate}"/>
        {'ac_text_activ_16'|@translate}
      </form>
    </fieldset>
    {/if}
    <fieldset>
      <form method="post" action="{$pwg_root}charte_user.php">
        <input type="hidden" name="groupe" value="nothing"/>
        <input class="submit" type="submit" name="Annuler" value="{'ac_retour_b'|@translate}"/>
      </form>
    </fieldset>
  </div>
</div>
