<?php

namespace Drupal\search_forms\Controller;

use Drupal\Core\Controller\ControllerBase;

class SearchFormsController extends ControllerBase {
  /**
   * Renders the search forms page with a custom design.
   */
  public function content() {
    $forms = [
      [
        'title' => 'Registration Form',
        'keywords' => 'registration form',
        'image' => 'https://via.placeholder.com/300x120',
      ],
      [
        'title' => 'Feedback Form',
        'keywords' => 'feedback form',
        'image' => 'https://via.placeholder.com/300x120',
      ],
      [
        'title' => 'Contact Form',
        'keywords' => 'contact form',
        'image' => 'https://via.placeholder.com/300x120',
      ],
      [
        'title' => 'Survey Form',
        'keywords' => 'survey form',
        'image' => 'https://via.placeholder.com/300x120',
      ],
      [
        'title' => 'Application Form',
        'keywords' => 'application form',
        'image' => 'https://via.placeholder.com/300x120',
      ],
    ];

    $build = [
      '#type' => 'page',
      '#title' => 'Search Forms',
      '#attributes' => [
        'class' => ['search-forms-page'],
      ],
      'content' => [
        '#theme' => 'search_forms',
        '#forms' => $forms,
        '#attached' => [
          'library' => [
            'search_forms/search_forms_assets',
          ],
        ],
      ],
    ];

    // Disregard the theme wrapper.
    $build['#theme_wrappers'] = [];

    return $build;
  }
}
