{html_style}{literal}
#ac_stuff_block_charte {
  margin:5px 15px;
  text-align:justify;
}
#ac_stuff_block legend {
  font-variant:small-caps;
}
#ac_stuff_block .properties li {
  display:inline-block;
  float:left;
  clear:none;
  margin: 0.5em;
  padding: 0;
  text-align: center;
}

#ac_stuff_block .properties SPAN.property {
  width:auto;
  float:none;
}
{/literal}
{/html_style}
<div id="ac_stuff_block">
{if !isset($EXPLIC) }
  <div id="ac_stuff_block_charte">{'ac_text_charte'|@translate}</div>
  {if $block.AD_C_manage_what=="18" || $block.AD_C_manage_what=="both"}
  <fieldset>
  <form method="post" action="{$ROOT_URL}identification.php" >
      <input type="hidden" name="username" size="15" value="18"/>
      <input type="hidden" name="password" size="15" value="adult_content"/>
      <input class="submit" type="submit" name="login" value="{'ac_button_activ_18'|@translate}"/>
      {'ac_text_activ_18'|@translate}
  
  </form>
  </fieldset>
  {/if}
  {if $block.AD_C_manage_what=="16" || $block.AD_C_manage_what=="both"}
  <fieldset>
  <form method="post" action="{$ROOT_URL}identification.php" id="quickconnect">
      <input type="hidden" name="username" size="15" value="16"/>
      <input type="hidden" name="password" size="15" value="adult_content"/>
      <input class="submit" type="submit" name="login" value="{'ac_button_activ_16'|@translate}"/>
           {'ac_text_activ_16'|@translate}         
  </form>
  </fieldset>
  {/if}
  <form action="{$block.F_LOGIN_ACTION}" method="post" name="login_form" class="properties">
    <fieldset>
      <legend>{'ac_identif'|@translate}</legend>
  
      <ul>
        <li>
          <span class="property">
            <label for="username">{'Username'|@translate}</label>
          </span><br>
          <input tabindex="1" class="login" type="text" name="username" id="username" size="25" maxlength="40" />
        </li>
  
        <li>
          <span class="property">
            <label for="password">{'Password'|@translate}</label>
          </span><br>
          <input tabindex="2" class="login" type="password" name="password" id="password" size="25" maxlength="25" />
        </li>
  
        {if $block.authorize_remembering }
        <li>
          <span class="property">
            <label for="remember_me">{'Auto login'|@translate}</label>
          </span><br>
          <input tabindex="3" type="checkbox" name="remember_me" id="remember_me" value="1">
        </li>
        {/if}
        <li>
          <input class="submit" tabindex="4" type="submit" name="login" value="{'Submit'|@translate}">
          {if isset($block.U_REGISTER) }
        </li>
        <li>
          <a href="{$block.U_REGISTER}" title="{'Register'|@translate}" class="pwg-state-default pwg-button">
            <span class="pwg-icon pwg-icon-register">&nbsp;</span><span>{'Register'|@translate}</span>
          </a>
          {/if}
        </li>
        <li>
          <a href="{$block.U_LOST_PASSWORD}" title="{'Forgot your password?'|@translate}" class="pwg-state-default pwg-button">
            <span class="pwg-icon pwg-icon-lost-password">&nbsp;</span><span>{'Forgot your password?'|@translate}</span>
          </a>
        </li>
      </ul>
    </fieldset>
  
  </form>
{else}
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
{/if}
</div>