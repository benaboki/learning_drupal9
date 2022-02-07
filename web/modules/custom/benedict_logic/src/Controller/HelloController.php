<?php

/**
 * @file
 * Provides basic hello world message functionality.
 */

namespace Drupal\benedict_logic\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldController.
 *
 * @package Drupal\benedict_logic\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Say Hello.
   *
   * @return array
   *   Markup.
   */
  public function benedict() {
    return ['#markup' => $this->t("Hello Benedict!")];
  }

}