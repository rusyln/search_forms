<?php

namespace Drupal\search_forms\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Search Forms routes.
 */
class SearchFormsController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
