{combine_css path="plugins/$PLUGIN_NAME/include/charte.css"}
<div id="content">
<div class="titrePage">
  <h2>Adult content</h2>
</div>
<div id="autre_content">
{'ac_text_charte'|@translate}


{if $AD_C_manage_what=="18" || $AD_C_manage_what=="both"}
<fieldset>
<form method="post" action="{$ROOT_URL}identification.php" >
    <input type="hidden" name="username" size="15" value="18"/>
    <input type="hidden" name="password" size="15" value="adult_content"/>
    <input class="submit" type="submit" name="login" value="{'ac_button_activ_18'|@translate}"/>
    {'ac_text_activ_18'|@translate}

</form>
</fieldset>
{/if}
{if $AD_C_manage_what=="16" || $AD_C_manage_what=="both"}
<fieldset>
<form method="post" action="{$ROOT_URL}identification.php" id="quickconnect">
    <input type="hidden" name="username" size="15" value="16"/>
    <input type="hidden" name="password" size="15" value="adult_content"/>
    <input class="submit" type="submit" name="login" value="{'ac_button_activ_16'|@translate}"/>
         {'ac_text_activ_16'|@translate}         
</form>
</fieldset>
{/if}
<fieldset>
        <div align="center">
          <input type="button" name="Annuler" value="{'ac_retour'|@translate}" OnClick="history.back()"/>
        </div>
</fieldset>
</div>
</div>