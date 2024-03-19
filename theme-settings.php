<?php declare(strict_types = 1);

/**
 * @file
 * Theme settings form for lb_enhancement theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function lb_enhancement_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['lb_enhancement'] = [
    '#type' => 'details',
    '#title' => t('lb_enhancement'),
    '#open' => TRUE,
  ];

  $form['lb_enhancement']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
