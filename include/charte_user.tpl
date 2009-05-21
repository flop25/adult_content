<link rel="stylesheet" type="text/css" href="{$pwg_root}plugins/{$PLUGIN_NAME}/include/charte.css">

<div id="content">
<div class="titrePage">
      <ul class="categoryActions">
      <li><a href="{$U_HOME}" title="{'return to homepage'|@translate}"><img src="{$themeconf.icon_dir}/home.png" class="button" alt="{'home'|@translate}"/></a></li>
    </ul>
  <h2>Adult content config</h2>
</div>
<div id="autre_content">
<p>{$EXPLIC}</p>
<p>{$MAIN}</p>
<fieldset>
<form method="post" action="{$pwg_root}charte_user.php" >
    <input type="hidden" name="groupe" value="+18"/>
    <input type="hidden" name="etat" value="{$ETAT}"/>
    <input class="submit" type="submit" name="login" value="{'ac_button_activ_18'|@translate}"/>
    {'ac_text_activ_18'|@translate}

</form>
</fieldset>
<fieldset>
<form method="post" action="{$pwg_root}charte_user.php">
    <input type="hidden" name="groupe" value="16-17"/>
    <input type="hidden" name="etat" value="{$ETAT}"/>
    <input class="submit" type="submit" name="login" value="{'ac_button_activ_16'|@translate}"/>
         {'ac_text_activ_16'|@translate}         
</form>
</fieldset>
<fieldset>
<form method="post" action="{$pwg_root}charte_user.php">
    <input type="hidden" name="groupe" value="nothing"/>
    <input type="hidden" name="etat" value="{$ETAT}"/>
          <input class="submit" type="submit" name="Annuler" value="{'ac_retour_b'|@translate}"/>
</form>
</fieldset>
</div>
</div>