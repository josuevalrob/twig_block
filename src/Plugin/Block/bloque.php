<?php

namespace Drupal\twig_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "acquia_block",
 *   admin_label = @Translation("bloques de bloque"),
 *	 category = @Translation("twig_block") * )
 */

class bloque extends BlockBase {

    public function build() {
        return array(
            '#theme' => 'bloque',
            '#title' => 'My custom block',
            '#description' => ''
        );
   }

}


