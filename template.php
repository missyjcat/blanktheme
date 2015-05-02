<?php
/*
  Preprocess
*/

/*
  Update all the preprocess magic to fix 404 error page handling
*/
function blanktheme_preprocess(&$vars, $hook) {
    //custom 403/404
    $headers = drupal_get_http_header();
    if(theme_get_setting('mothership_404') AND isset($headers['status']) ){
      if($headers['status'] == '404 Not Found'){
        $vars['theme_hook_suggestions'][] = 'html__404';
      }
    }
    //custom 404/404
    $headers = drupal_get_http_header();
    if (isset($headers['status'])) {
      if($headers['status'] == '404 Not Found'){
        unset($vars['theme_hook_suggestions']);
      }
    }
}

/*
function NEWTHEME_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_preprocess_page(&$vars,$hook) {
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');
  
  //googlefont 
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');
 
}
*/
/*
function NEWTHEME_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =  
   $vars['elements']['#block']->region .'-'. 
   $vars['elements']['#block']->module .'-'. 
   $vars['elements']['#block']->delta;
   
  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:
    
    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/
/*
function NEWTHEME_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);

  // add a nodeblock 
  // in .info define a region : regions[block_in_a_node] = block_in_a_node 
  // in node.tpl  <?php if($noderegion){ ?> <?php print render($noderegion); ?><?php } ?>
  //$vars['block_in_a_node'] = block_get_blocks_by_region('block_in_a_node');
}
*/
/*
function NEWTHEME_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';    
    default:
      break;
  }

}
*/
/*
function NEWTHEME_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/
