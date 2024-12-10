<?php

namespace Drupal\search_forms\Controller;

use Drupal\Core\Controller\ControllerBase;

class SearchFormsController extends ControllerBase {
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

    return [
      '#theme' => 'search_forms',
      '#forms' => $forms,
      '#attached' => [
        'library' => [
          'search_forms/search_forms_assets',
        ],
      ],
    ];
  }
}
