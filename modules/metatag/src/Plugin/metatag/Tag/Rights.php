<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\Rights.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The basic "Rights" meta tag.
 *
 * @MetatagTag(
 *   id = "rights",
 *   label = @Translation("Rights"),
 *   description = @Translation("Details about intellectual property, such as copyright or trademarks; does not automatically protect the site's content or intellectual property."),
 *   name = "rights",
 *   group = "advanced",
 *   weight = 5
 * )
 */
class Rights extends MetaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
