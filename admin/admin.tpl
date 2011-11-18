 {html_head}
<link rel="stylesheet" type="text/css" href="./template/admin.css">
{/html_head}
<div class="titrePage">
  <h2>Adult Content</h2>
</div>
<fieldset>
  <form action="" method="post" name="option_plugin">
    {'ad_c_menublock_for_guest'|@translate}
    <input type="checkbox" name="menublock_for_guest" value="true" {$AD_C_menublock_for_guest} />
    <br />
    <br />
    {'ad_c_block_on_index'|@translate}
    <input type="checkbox" name="block_on_index" value="true" {$AD_C_block_on_index} {$AD_C_block_on_index_disabled}/>
    {'ad_c_block_on_index_error'|@translate} <br />
    <br />
    <span class="property">{'ad_c_manage_what'|@translate}</span>&nbsp;
    <select name="manage_what" style="min-width:150px;">
      <option value="16" {if ($AD_C_manage_what=="16")}selected{/if}>{'ad_c_manage_eroticonly'|@translate}</option>
      <option value="18" {if ($AD_C_manage_what=="18")}selected{/if}>{'ad_c_manage_pornonly'|@translate}</option>
      <option value="both" {if ($AD_C_manage_what=="both")}selected{/if}>{'ad_c_manage_both'|@translate}</option>
    </select>
    <br />
    <input type="submit" name="option_ad_c" id="button" value="{'ad_c_send'|@translate}" />
  </form>
</fieldset>
<hr />
<div style="text-align:left">
  {'ad_c_howitworks'|@translate}
  <br />
  <a href="{$ROOT_URL}plugins/LocalFilesEditor/show_default.php?file=plugins/adult_content/language/{$AD_C_LANG}/plugin.lang.php" target="_blank">{'ad_c_linktolang'|@translate} </a>
</div>