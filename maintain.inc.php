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
    $data_group = mysql_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('16').'\', \''.$data_group['id'].'\' )' );

////////////placer dans group 18////////////
  $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'+18\') ;');
  $data_group = mysql_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('18').'\', \''.$data_group['id'].'\' )' );

}



function plugin_activate()
{
    global $conf;
include_once(PHPWG_ROOT_PATH.'include/functions_user.inc.php');
   ///user exist ?///
   $query = '
SELECT COUNT(*) AS result FROM '.USERS_TABLE.'
  WHERE username IN (\'18\')
;';
   $data_user = mysql_fetch_array(pwg_query($query));
   $exist = $data_user['result'];
   if ( $exist == 0 )
   {
	register_user('18', 'adult_content', '');
   }
   
   $query = '
SELECT COUNT(*) AS result FROM '.USERS_TABLE.'
  WHERE username IN (\'16\')
;';
   $data_user = mysql_fetch_array(pwg_query($query));
   $exist = $data_user['result'];
   if ( $exist == 0 )
   {
	register_user('16', 'adult_content', '');
   }
   ///group exist ?///
   $query = '
SELECT COUNT(*) AS result FROM '.GROUPS_TABLE.'
  WHERE name IN (\'+18\')
;';
   $data_user = mysql_fetch_array(pwg_query($query));
   $exist = $data_user['result'];
   if ( $exist == 0 )
   {
      $query = '
INSERT INTO '.GROUPS_TABLE.'
  (name)
  VALUES
  (\'+18\')
;';
      pwg_query($query);
////////////placer dans group 18////////////
      $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'+18\') ;');
      $data_group = mysql_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('18').'\', \''.$data_group['id'].'\' )' );
   }
   
   $query = '
SELECT COUNT(*) AS result FROM '.GROUPS_TABLE.'
  WHERE name IN (\'16-17\')
;';
   $data_user = mysql_fetch_array(pwg_query($query));
   $exist = $data_user['result'];
   if ( $exist == 0 )
   {
      $query = '
INSERT INTO '.GROUPS_TABLE.'
  (name)
  VALUES
  (\'16-17\')
;';
      pwg_query($query);
////////////placer dans group 16////////////
      $result = pwg_query('SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'16-17\') ;');
      $data_group = mysql_fetch_array($result);
	  pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('16').'\', \''.$data_group['id'].'\' )' );
	  
   }
      //grp nothing
	  $query = '
SELECT COUNT(*) AS result FROM '.GROUPS_TABLE.'
  WHERE name IN (\'nothing\')
;';
   $data_user = mysql_fetch_array(pwg_query($query));
   $exist = $data_user['result'];
   if ( $exist == 0 )
   {
      $query = '
INSERT INTO '.GROUPS_TABLE.'
  (name)
  VALUES
  (\'nothing\')
;';
      pwg_query($query);
	}

   ///assoc user/group exist ?///
   
   $n_query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'16-17\')
;';
   $data_group = mysql_fetch_array(pwg_query($n_query));
   $query = '
SELECT COUNT(*) AS result FROM '.USER_GROUP_TABLE.'
  WHERE group_id IN (\''.$data_group['id'].'\') AND user_id IN (\''.get_userid('16').'\')
;';
   $data_user_group = mysql_fetch_array(pwg_query($query));
   $exist = $data_user_group['result'];
   if ( $exist == 0 )
   {
	    pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('16').'\', \''.$data_group['id'].'\' )' );
   }
   $n_query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'+18\')
;';
   $data_group = mysql_fetch_array(pwg_query($n_query));
   $query = '
SELECT COUNT(*) AS result FROM '.USER_GROUP_TABLE.'
  WHERE group_id IN (\''.$data_group['id'].'\') AND user_id IN (\''.get_userid('18').'\')
;';
   $data_user_group = mysql_fetch_array(pwg_query($query));
   $exist = $data_user_group['result'];
   if ( $exist == 0 )
   {
	    pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.get_userid('18').'\', \''.$data_group['id'].'\' )' );
   }

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
    $data_group = mysql_fetch_array(pwg_query($query));
	  pwg_query('DELETE FROM '.USER_GROUP_TABLE.' WHERE group_id IN (\''.$data_group['id'].'\')' );
	  
////////////suppr assoc user all /groupe 18////////////
    $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'+18\')
;';
    $data_group = mysql_fetch_array(pwg_query($query));
	  pwg_query('DELETE FROM '.USER_GROUP_TABLE.' WHERE group_id IN (\''.$data_group['id'].'\')' );

////////////suppr assoc user all /groupe nothing////////////
    $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'nothing\')
;';
    $data_group = mysql_fetch_array(pwg_query($query));
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

}//fin uninstall


?>