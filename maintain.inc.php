<?php

function plugin_install()
{
  global $conf;

////////////créer groupe////////////
  $query = '
INSERT INTO '.GROUPS_TABLE.'
  (name)
  VALUES
  (\'+18\')
;';
  pwg_query($query);
  $query = '
INSERT INTO '.GROUPS_TABLE.'
  (name)
  VALUES
  (\'16-17\')
;';
  pwg_query($query);
  $query = '
INSERT INTO '.GROUPS_TABLE.'
  (name)
  VALUES
  (\'nothing\')
;';
  pwg_query($query);
////////////créer user////////////
	include_once(PHPWG_ROOT_PATH.'include/functions_user.inc.php');
	register_user('18', 'adult_content', '');
	register_user('16', 'adult_content', '');

////////////placer dans group 16////////////
    $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'16-17\') ;');
    $data_group = pwg_db_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('16').'\', \''.$data_group['id'].'\' )' );

////////////placer dans group 18////////////
  $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'+18\') ;');
  $data_group = pwg_db_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('18').'\', \''.$data_group['id'].'\' )' );

////////////placer dans group nothing////////////
  $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'nothing\') ;');
  $data_group = pwg_db_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.$conf['guest_id'].'\', \''.$data_group['id'].'\' )' );

/////////////Config plugin
    $config_start=array('menublock_for_guest'=>true,'manage_what'=>'both');
    $q = '
INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
	VALUES
	("ad_c_plugin" , "'.pwg_db_real_escape_string(serialize($config_start)).'" , "Plugin adult_content : menublock_for_guest, manage_what");';
    pwg_query($q);

}



function plugin_activate()
{
  global $conf;
///user exist ?///
	$query = '
	SELECT COUNT(*) AS result FROM '.USERS_TABLE.'
	WHERE username IN (\'18\')
	;';
	$data_user = pwg_db_fetch_array(pwg_query($query));
	$exist = $data_user['result'];
	if ( $exist == 0 )
	{
		register_user('18', 'adult_content', '');
	}
	
	$query = '
	SELECT COUNT(*) AS result FROM '.USERS_TABLE.'
	WHERE username IN (\'16\')
	;';
	$data_user = pwg_db_fetch_array(pwg_query($query));
	$exist = $data_user['result'];
	if ( $exist == 0 )
	{
		register_user('16', 'adult_content', '');
	}
///groups///
  $query = 'INSERT IGNORE INTO '.GROUPS_TABLE.' (name) VALUES (\'+18\'),(\'16-17\'),(\'nothing\') ;';
	pwg_query($query);
////////////placer dans group 18////////////
  $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'+18\') ;');
  $data_group = pwg_db_fetch_array($result);
  pwg_query('INSERT IGNORE INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('18').'\', \''.$data_group['id'].'\' )' );
////////////placer dans group 16////////////
  $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'16-17\') ;');
  $data_group = pwg_db_fetch_array($result);
  pwg_query('INSERT IGNORE INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('16').'\', \''.$data_group['id'].'\' )' );
////////////placer dans group nothing////////////
  $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'nothing\') ;');
  $data_group = pwg_db_fetch_array($result);
  pwg_query('INSERT IGNORE INTO '.USER_GROUP_TABLE.' VALUES(\''.$conf['guest_id'].'\', \''.$data_group['id'].'\' )' );
	
	////////////mis en generic////////////
	$query = '
	UPDATE '.USER_INFOS_TABLE.'
	SET status=\'generic\'
	WHERE user_id IN (\''.get_userid('16').'\')
	;';
	pwg_query($query);
	
	$query = '
	UPDATE '.USER_INFOS_TABLE.'
	SET status=\'generic\'
	WHERE user_id IN (\''.get_userid('18').'\')
	;';
	pwg_query($query);
	
	//////////// Check Config
	$query = '
	SELECT COUNT(*) AS result FROM '.CONFIG_TABLE.'
	WHERE param IN (\'ad_c_plugin\')
	;';
	$data_table = pwg_db_fetch_array(pwg_query($query));
	$exist = $data_table['result'];
	if ( $exist == 0 )
	{
	  $config_start=array('menublock_for_guest'=>true,'manage_what'=>'both');
    $q = '
    INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
    VALUES
      ("ad_c_plugin" , "'.pwg_db_real_escape_string(serialize($config_start)).'" , "Plugin adult_content : menublock_for_guest, manage_what");';
    pwg_query($q);
	} 
	else {
		$query = '
    SELECT value FROM '.CONFIG_TABLE.'
    WHERE param IN (\'ad_c_plugin\')
    ;';
    $data_conf = pwg_db_fetch_array(pwg_query($query));
    $cf=@unserialize($data_conf);
    $nbr=@count($cf);
	
	  if ($nbr!=2)
	  {
      $config_start=array('menublock_for_guest'=>true,'manage_what'=>'both');
      $q = '
      UPDATE ' . CONFIG_TABLE . ' SET
      param="ad_c_plugin", value="'.pwg_db_real_escape_string(serialize($config_start)).'", comment="Plugin adult_content : menublock_for_guest, manage_what"
      WHERE param IN (\'ad_c_plugin\');';
      pwg_query($q);
    }
	}
	
}//fin active




function plugin_uninstall()
{
  include_once(PHPWG_ROOT_PATH.'include/functions_user.inc.php');
////////////suppr user////////////
  delete_user(get_userid('18'));
  delete_user(get_userid('16'));
  
////////////suppr assoc user all /groupe 16////////////
    $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'16-17\')
;';
    $data_group = pwg_db_fetch_array(pwg_query($query));
	  pwg_query('DELETE FROM '.USER_GROUP_TABLE.' WHERE group_id IN (\''.$data_group['id'].'\')' );
	  
////////////suppr assoc user all /groupe 18////////////
    $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'+18\')
;';
    $data_group = pwg_db_fetch_array(pwg_query($query));
	  pwg_query('DELETE FROM '.USER_GROUP_TABLE.' WHERE group_id IN (\''.$data_group['id'].'\')' );

////////////suppr assoc user all /groupe nothing////////////
    $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'nothing\')
;';
    $data_group = pwg_db_fetch_array(pwg_query($query));
	  pwg_query('DELETE FROM '.USER_GROUP_TABLE.' WHERE group_id IN (\''.$data_group['id'].'\')' );
  
  
////////////suppr groupe////////////
  $query = '
DELETE FROM '.GROUPS_TABLE.'
  WHERE name IN (\'+18\')
;';
  pwg_query($query);
  
  $query = '
DELETE FROM '.GROUPS_TABLE.'
  WHERE name IN (\'16-17\')
;';
  pwg_query($query);
  $query = '
DELETE FROM '.GROUPS_TABLE.'
  WHERE name IN (\'nothing\')
;';
  pwg_query($query);

//////////////// Delete config
  pwg_query('DELETE FROM '.CONFIG_TABLE.' WHERE param IN (\'ad_c_plugin\')');
}//fin uninstall


?>