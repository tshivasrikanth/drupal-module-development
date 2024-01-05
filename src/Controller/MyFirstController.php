<?php

/** 
 * @file
 * This file prints simple output using my_module.routing.yml
 */

namespace Drupal\my_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyFirstController extends ControllerBase {
  
  public function simpleContent() {
    return [
      '#type' => 'markup',
      '#markup' => t('This is my first controller sample content.'),
    ];
  }
}