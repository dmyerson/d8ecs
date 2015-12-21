<?php
/**
 * @file
 * Contains \Drupal\facilities_map_custom\Controller\FacilitiesMapController.
 */

namespace Drupal\facilities_map_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

class FacilitiesMapController extends ControllerBase {
  public function content() {
    $browser = 'Chrome';
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
    $hidden = '';
    $output = '<div id="map-wrapper">';
    $output .= '<img class="location-map" src="'.$i_map.'" />';	// Map wrapper class needs to be relative. Markers are absolute and will utilize X, Y coordinates
    //foreach($nids AS $vid => $nid) {
      $node = entity_load('node', $nid);
      $uri = $node->field_facility_image->entity->getFileUri();
      if($uri) {
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
      $markerX = $markerXY[0]."px";
      $markerY = $markerXY[1]."px";

      // Add the markers the map
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
    //}
    //.$node->field_location_marker->value
    print $output.$hidden;
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
}
?>