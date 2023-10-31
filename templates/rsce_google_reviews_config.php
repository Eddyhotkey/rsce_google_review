<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'de' => array('Google-Modul: Vorlage für die Google Bewertung', ''),
  ),
  'types' => array('module'),
  'moduleCategory' => 'RSCE Module',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array('cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(

    ### group ###
    'google_group' => array(
      'label' => array('Google API Key / Place ID ', 'Hier können Sie  API Key/Place ID eingeben'),
      'inputType' => 'group',
    ),

    ### txt ###
    'api_key' => array(
      'label' => array(
        'de' => array('API Key', 'Hier können Sie  API Key eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### txt ###
    'place_id' => array(
      'label' => array(
        'de' => array('Place ID', 'Hier können Sie  Place ID eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### group ###
    'image_group' => array(
      'label' => array('Bilder ', 'Hier können Sie das Bild hinzufügen'),
      'inputType' => 'group',
    ),

    'image' => array(
      'label' => array(
        'de' => array('Bild ', 'Hier können Sie das Bild auswählen'),
      ),
      'inputType' => 'fileTree',
      'eval' => array(
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'jpg,jpeg,png,gif,svg',
        'tl_class'=>'clr',
        'mandatory' => true,
      ),
    ),

    ### image alt ###
    'image_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image title ###
    'image_title' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);