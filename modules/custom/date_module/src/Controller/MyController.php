<?php
 /**
  * @file
  * Contains \Drupal\date_module\Controller\MyController.
  */

  namespace Drupal\date_module\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class MyController extends ControllerBase {

/**
  * {@inheritdoc}
  */

  public function content() {
    $format = $this->getFormat();
    return array(
      '#type' => 'markup',
      '#markup' => date($format),
      '#cache' =>[
        'max-age' => 0,
      ],
    );
  }

  /**Legt ein config-Obj. an 
   * liest Standart-Format-Wert aus 
   * */

  private function getFormat(){
    $config = \Drupal::config('date_module.settings');
    $format = $config->get('format');
    return $format;
  }
  }

