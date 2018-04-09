<?php


namespace Drupal\block_title\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Title' Block.
 *
 * @Block(
 *   id = "title_block",
 *   admin_label = @Translation("title block"),
 *   category = @Translation("title World"),
 * )
 */
 class TitleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */

   public function build(){
     return array(
       '#markup' => $this-t('block de titulo'),
     );
   }

 }
