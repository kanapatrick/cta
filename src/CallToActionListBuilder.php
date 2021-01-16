<?php

namespace Drupal\cta;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Call to Action entities.
 *
 * @ingroup cta
 */
class CallToActionListBuilder extends EntityListBuilder {
//  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Call to Action ID');
    $header['label'] = $this->t('Name');
    $header['operations'] = $this->t('Operations');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\cta\Entity\CallToAction */

    $row['id'] = $entity->id();
    $row['label'] =  $entity->label();
    $row['operations']['data'] = $this->buildOperations($entity);
    
    return $row ;
  }

}
