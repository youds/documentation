<?php

/**
 * Data file for Indian/Maldives timezone, compiled from the olson data.
 *
 * Auto-generated by the phing olson task on 02/14/2009 18:36:26
 *
 * @package    agavi
 * @subpackage translation
 *
 * @copyright  Authors
 * @copyright  The Agavi Project
 *
 * @since      0.11.0
 *
 * @version    $Id: Indian_47_Maldives.php 3838 2009-02-14 18:42:45Z david $
 */

return array (
  'types' => 
  array (
    0 => 
    array (
      'rawOffset' => 17640,
      'dstOffset' => 0,
      'name' => 'MMT',
    ),
    1 => 
    array (
      'rawOffset' => 18000,
      'dstOffset' => 0,
      'name' => 'MVT',
    ),
  ),
  'rules' => 
  array (
    0 => 
    array (
      'time' => -2840158440,
      'type' => 0,
    ),
    1 => 
    array (
      'time' => -315636840,
      'type' => 1,
    ),
  ),
  'finalRule' => 
  array (
    'type' => 'static',
    'name' => 'MVT',
    'offset' => 18000,
    'startYear' => 1960,
  ),
  'name' => 'Indian/Maldives',
);

?>