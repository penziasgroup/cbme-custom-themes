<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "dsi" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "dsi".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function dsi_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.

  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function dsi_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */

function dsi_preprocess_page(&$vars) {
    drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' . file_create_url(path_to_theme()) . '" });', 'inline'); 
    
    $alias = drupal_get_path_alias();
    if(isset($alias)){
        $alias = explode('/', $alias);
    }
    
    if(isset($vars['node']) && ($vars['node']->type == 'event' || $vars['node']->type == 'news')){
       drupal_set_title('');
    }
}
/* -- Delete this line if you want to use these functions
function dsi_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */

function dsi_preprocess_node(&$vars) {
    if($vars['type'] == 'event' && ($vars['view_mode'] == 'default' || $vars['view_mode'] == 'full')){
        if(empty($vars['field_event_image'])){
            $vars['classes_array'][] = t('no-image');
        }
    }
    $no_titles = array(
        'cta',
        'event',
        'news',
        'facilities',
        'centers_initiatives'
    );
    if ((in_array($vars['type'],$no_titles)) && ($vars['view_mode'] == 'teaser' || $vars['view_mode'] == 'feature_card')){
        $vars['title']='';
    }
    if($vars['view_mode'] == 'full' && ($vars['type'] == 'news')){
        if(!empty($vars['content']['field_news_video']) || !empty($vars['content']['field_news_slide_show'])){
            unset($vars['elements']['#fieldgroups']['group_featured_image']);
            hide($vars['content']['field_news_featured_image']);
            hide($vars['content']['field_news_featured_caption']);
        }
    }
    
}

function dsi_form_alter(&$form, &$form_state, $form_id){
    switch($form_id){
        case 'search_block_form':
            $form['search_block_form']['#attributes']['placeholder'] = t('Search CBME');
            $form['actions']['submit'] = array(
                '#type' => 'image_button',
                '#value' => t('Search'),
                '#src'  => drupal_get_path('theme','DSI').'/css/images/search-glass.png');
        break;
    }
}

/* -- Delete this line if you want to use these functions
function dsi_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function dsi_preprocess_comment(&$vars) {
}
function dsi_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function dsi_preprocess_block(&$vars) {
}
function dsi_process_block(&$vars) {
}
// */
