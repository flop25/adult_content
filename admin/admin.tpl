
{html_head}<link rel="stylesheet" type="text/css" href="./template/admin.css">{/html_head}
<div class="titrePage">
  <h2>Adult Content</h2>
</div>
<form action="" method="post" name="option_plugin">
  {'ad_c_menublock_for_guest'|@translate}
  <input type="checkbox" name="menublock_for_guest" value="true" {$AD_C_menublock_for_guest} />
  <br />
  <br />
  {'ad_c_block_on_index'|@translate}
  <input type="checkbox" name="block_on_index" value="true" {$AD_C_block_on_index} {$AD_C_block_on_index_disabled}/>  	{'ad_c_block_on_index_error'|@translate}

  <br />
  <br />
  <input type="submit" name="option_ad_c" id="button" value="{'ad_c_send'|@translate}" />
</form>
</fieldset>
