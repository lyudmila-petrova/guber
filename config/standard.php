<?php
/**
 * @file
 * Install, update and uninstall functions for the standard install profile.
 */

/**
 * Implements hook_install().
 *
 * Perform actions to set up the site for this profile.
 *
 * @see system_install()
 */
function tmp_install() {

/* 

  // Create a default vocabulary named "Tags", enabled for the 'article' content type.
  $description = st('Use tags to group articles on similar topics into categories.');
  $help = st('Enter a comma-separated list of words to describe your content.');
  $vocabulary = (object) array(
    'name' => st('Tags'),
    'description' => $description,
    'machine_name' => 'tags',
    'help' => $help,

  );
  taxonomy_vocabulary_save($vocabulary);

  $field = array(
    'field_name' => 'field_' . $vocabulary->machine_name,
    'type' => 'taxonomy_term_reference',
    // Set cardinality to unlimited for tagging.
    'cardinality' => FIELD_CARDINALITY_UNLIMITED,
    'settings' => array(
      'allowed_values' => array(
        array(
          'vocabulary' => $vocabulary->machine_name,
          'parent' => 0,
        ),
      ),
    ),
  );
  field_create_field($field);

  $instance = array(
    'field_name' => 'field_' . $vocabulary->machine_name,
    'entity_type' => 'node',
    'label' => 'Tags',
    'bundle' => 'article',
    'description' => $vocabulary->help,
    'widget' => array(
      'type' => 'taxonomy_autocomplete',
      'weight' => -4,
    ),
    'display' => array(
      'default' => array(
        'type' => 'taxonomy_term_reference_link',
        'weight' => 10,
      ),
      'teaser' => array(
        'type' => 'taxonomy_term_reference_link',
        'weight' => 10,
      ),
    ),
  );
  field_create_instance($instance);


  // Create an image field named "Image", enabled for the 'article' content type.
  // Many of the following values will be defaulted, they're included here as an illustrative examples.
  // See http://api.drupal.org/api/function/field_create_field/7

  $field = array(
    'field_name' => 'field_image',
    'type' => 'image',
    'cardinality' => 1,
    'locked' => FALSE,
    'indexes' => array('fid' => array('fid')),
    'settings' => array(
      'uri_scheme' => 'public',
      'default_image' => FALSE,
    ),
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
    ),
  );
  field_create_field($field);


  // Many of the following values will be defaulted, they're included here as an illustrative examples.
  // See http://api.drupal.org/api/function/field_create_instance/7
  $instance = array(
    'field_name' => 'field_image',
    'entity_type' => 'node',
    'label' => 'Image',
    'bundle' => 'article',
    'description' => st('Upload an image to go with this article.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/image',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'alt_field' => TRUE,
      'title_field' => '',
    ),

    'widget' => array(
      'type' => 'image_image',
      'settings' => array(
        'progress_indicator' => 'throbber',
        'preview_image_style' => 'thumbnail',
      ),
      'weight' => -1,
    ),

    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'large', 'image_link' => ''),
        'weight' => -1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
        'weight' => -1,
      ),
    ),
  );
  field_create_instance($instance);

  

  // Create a Home link in the main menu.
  $item = array(
    'link_title' => st('Home'),
    'link_path' => '<front>',
    'menu_name' => 'main-menu',
  );
  menu_link_save($item);

  // Update the menu router information.
  menu_rebuild();
  
  */

 
}