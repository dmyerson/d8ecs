<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\ContentLanguage.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\MetaHttpEquivBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The advanced "Content Language" meta tag.
 *
 * @MetatagTag(
 *   id = "content_language",
 *   label = @Translation("Content Language"),
 *   description = @Translation("A deprecated meta tag for defining this page's two-letter language code(s)."),
 *   name = "content-language",
 *   group = "advanced",
 *   weight = 1
 * )
 */
class ContentLanguage extends MetaHttpEquivBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
