<?php

/**
 * Data file for Pacific/Kwajalein timezone, compiled from the olson data.
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
 * @version    $Id: Pacific_47_Kwajalein.php 3838 2009-02-14 18:42:45Z david $
 */

return array (
  'types' => 
  array (
    0 => 
    array (
      'rawOffset' => 39600,
      'dstOffset' => 0,
      'name' => 'MHT',
    ),
    1 => 
    array (
      'rawOffset' => -43200,
      'dstOffset' => 0,
      'name' => 'KWAT',
    ),
    2 => 
    array (
      'rawOffset' => 43200,
      'dstOffset' => 0,
      'name' => 'MHT',
    ),
  ),
  'rules' => 
  array (
    0 => 
    array (
      'time' => -2177492960,
      'type' => 0,
    ),
    1 => 
    array (
      'time' => -7988400,
      'type' => 1,
    ),
    2 => 
    array (
      'time' => 745848000,
      'type' => 2,
    ),
  ),
  'finalRule' => 
  array (
    'type' => 'static',
    'name' => 'MHT',
    'offset' => 43200,
    'startYear' => 1994,
  ),
  'name' => 'Pacific/Kwajalein',
);

?>