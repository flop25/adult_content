{combine_css path="plugins/$PLUGIN_NAME/include/charte.css"}
<div class="content" id="ac_content">
  <table id="table_content" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td id="section_up_left">&nbsp;</td>
      <td id="section_up"><div class="titrePage">
          <h2>Adult content</h2>
        </div></td>
      <td id="section_up_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_left">&nbsp;</td>
      <td id="section_in"><div id="autre_content"> {'ac_text_charte'|@translate}
          <fieldset>
            <form method="post" action="{$ROOT_URL}identification.php" >
              <input type="hidden" name="username" size="15" value="18"/>
              <input type="hidden" name="password" size="15" value="adult_content"/>
              <input class="submit" type="submit" name="login" value="{'ac_button_activ_18'|@translate}"/>
              {'ac_text_activ_18'|@translate}
            </form>
          </fieldset>
          <fieldset>
            <form method="post" action="{$ROOT_URL}identification.php" id="quickconnect">
              <input type="hidden" name="username" size="15" value="16"/>
              <input type="hidden" name="password" size="15" value="adult_content"/>
              <input class="submit" type="submit" name="login" value="{'ac_button_activ_16'|@translate}"/>
              {'ac_text_activ_16'|@translate}
            </form>
          </fieldset>
          <fieldset>
            <div align="center">
              <input type="button" name="Annuler" value="{'ac_retour'|@translate}" OnClick="history.back()"/>
            </div>
          </fieldset>
        </div></td>
      <td id="section_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_bottom_left">&nbsp;</td>
      <td id="section_bottom" >&nbsp;</td>
      <td id="section_bottom_right" >&nbsp;</td>
    </tr>
  </table>
</div>
<!-- content -->

</div>
