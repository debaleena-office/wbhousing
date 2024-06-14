<?php
function estate_treasury_mapping_edit_form($form, &$form_state, $en_id = 0){
  $form = array();

  $query1 = db_select('housing_treasury_estate_mapping', 'he')->fields('he', array())->condition('housing_treasury_estate_mapping_id',$en_id )->execute();
  $result = $query1->fetchAssoc();
  if(!empty($result)){

    $form['estate_edit_dropdown'] = array(
      '#type' => 'select',
      '#title' => 'Select housing estate',
      '#options' => getEstateList(),
      '#default_value' => getEstateList($result['estate_id']),
      '#prefix' => '<div id="dropdown-wrapper">',
      '#suffix' => '</div>',
      '#required' => TRUE,
    );
  
    $form['treasury_edit_dropdown'] = array(
      '#type' => 'select',
      '#title' => 'Select respective treasury',
      '#prefix' => '<div id="dropdown-wrapper">',
      '#suffix' => '</div>',
      '#options' => getTresaryList(),
      '#default_value' => getTresaryList($result['treasury_id']),
      '#required' => TRUE,
    );
  
    $form['edit_is_active_button'] = array(
      '#type' => 'radios',
      '#title' => t('Select Activation Status'),
      '#options' => array(1 => t('Active'),0 => t('Inactive')),
      '#default_value' => $result['is_active']
    );
  
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Edit Mapping'),
      '#submit' => array('estate_treasury_edit_submit')
    );
  }
  

  return $form;
}

function estate_treasury_edit_submit($form, &$form_state) {
  $estate_id = $form_state['values']['estate_edit_dropdown'];
  $treasury_id = $form_state['values']['treasury_edit_dropdown'];
  $is_active_status = $form_state['values']['edit_is_active_button'];

  db_insert('housing_treasury_estate_mapping')
    ->fields(array(
      'estate_id' => $estate_id,
      'treasury_id' => $treasury_id,
      'is_active' => $is_active_status,
    ))
    ->execute();

  drupal_set_message('Data edited successfully.');
  drupal_goto('estate-treasury-selection');
}