<?php

/**
 * @file
 * Contains \Drupal\facilities_map_custom\Plugin\Block\FacilitiesMap.
 */

namespace Drupal\facilities_map_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a custom Facilities map Block
 *
 * @Block(
 *   id = "facilities_map_custom",
 *   admin_label = @Translation("Facilities Map"),
 * )
 */
class FacilitiesMap extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $browser = 'Chrome';
    $style = '<style>';
    $i_map = '/map/images/static_map.jpg';
    $i_mapLegend = '/map/images/map_legend.jpg';
    $i_defaultLocationImage = '/map/images/default.jpg';
    if ($browser == "Chrome" || $browser == "MSIE") {
      $cbWidth = 390;
      $cbHeight = 310;
    } 
    else {
      $cbWidth = 380;
      $cbHeight = 320;
    }
    // Query all ACTIVE locations and get data including nid
    $query = \Drupal::entityQuery('node')
              ->condition('status', 1)
              ->condition('type', 'facility');
    $nids = $query->execute();
    $count = count($nids);
    $keys = array_keys($nids);
    $nid = $nids[$keys[0]];
  //var_dump($nids);
    $hidden = '';
    $output = '<div id="map-wrapper">';
    $output .= '<img class="location-map" src="'.$i_map.'" />';	// Map wrapper class needs to be relative. Markers are absolute and will utilize X, Y coordinates
    $i = 0;
    //foreach($nids AS $vid => $nid) {
    $nopics = array(103,119,120,124,125,126);
    while($i < count($nids)) {
      $nid = $nids[$keys[$i++]];
      $node = entity_load('node', $nid);
      if(in_array($nid, $nopics)) {
        //var_dump($node);
        $locationImage = $i_defaultLocationImage;
      }
      else if(isset($node->field_facility_image)) {
        $uri = $node->field_facility_image->entity->getFileUri();
      //if($uri) {
        $locationImage = file_create_url($uri);
      }
      else {
        $locationImage = $i_defaultLocationImage;
      }
      $markerFilepath="/map/images/";
      switch ($node->field_location_marker->value) {
        case "ASP System":
          $markerFilename = "RED_marker.png";
	  break;
        case "ASP System and Mixer":
          $markerFilename = "RED_BLK_marker.png";
          break;
        case "Control System":
          $markerFilename = "BLUE_marker.png";
          break;
        case "In-Vessel System":
          $markerFilename = "GOLD_marker.png";
          break;
        case "In-Vessel System and Mixer":
          $markerFilename = "GOLD_BLD_marker.png";
          break;
        case "Mixer":
          $markerFilename = "BLK_marker.png";
          break;
        case "Pilot":
          $markerFilename = "GREEN_marker.png";
          break;
        default:
          $markerFilename = "default_marker.png";
          break;
      }
		
      $markerURL = $markerFilepath.$markerFilename;
      $markerXY = explode(',', $node->field_location_xy->value);
      $markerX = ($markerXY[0]-24)."px";
      $markerY = ($markerXY[1]+34)."px";

      // Add the markers the map
      $style .= '
      img.marker-'.$nid.' { position: absolute; top:'.$markerY.'; left:'.$markerX.' }';
      $output .= '<a class="colorbox-inline" href="?width='.$cbWidth.'&height='.$cbHeight.'&inline=true#marker-'.$nid.'">
                   <img class="marker-'.$nid.' icon" src="'.$markerURL.'" style="top:'.$markerY.'; left:'.$markerX.'" border="0" />
                  </a>';

      // create the hidden elements to show on hover
      $hidden.='<div class="marker-box">';
      $hidden.='<div id="marker-'.$nid.'">';
      $hidden.='<img class="location-image" src="'.$locationImage.'" />';
      $hidden.='<div class="location-data">';
      $hidden.='<span class="location-title">'.$node->title->value.'</span>';
      //$hidden.='<span class="location-system">'.$system.'</span>';
      $hidden.='<span class="location-system">'.$node->field_location_technology->value.'</span>';
      $hidden.='<span class="location-volume">'.$node->field_volume_feedstock->value.'</span>';
      $hidden.='</div>'; // location-data
      $hidden.='</div>'; // marker-$nid
      $hidden.='</div>'; // hiding div
      //var_dump($hidden);
    }
    //.$node->field_location_marker->value
    $style .= '</style>';
    return array(
      '#markup' => $style.$hidden.$output,
      '#allowed_tags' => ['style','div','span','a','img'],
    );
  }
}
?>