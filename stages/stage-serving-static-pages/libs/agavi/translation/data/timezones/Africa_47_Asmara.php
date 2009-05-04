<?php

/**
 * Data file for Africa/Asmara timezone, compiled from the olson data.
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
 * @version    $Id: Africa_47_Asmara.php 3838 2009-02-14 18:42:45Z david $
 */

return array (
  'types' => 
  array (
    0 => 
    array (
      'rawOffset' => 9332,
      'dstOffset' => 0,
      'name' => 'AMT',
    ),
    1 => 
    array (
      'rawOffset' => 9320,
      'dstOffset' => 0,
      'name' => 'ADMT',
    ),
    2 => 
    array (
      'rawOffset' => 10800,
      'dstOffset' => 0,
      'name' => 'EAT',
    ),
  ),
  'rules' => 
  array (
    0 => 
    array (
      'time' => -3155682932,
      'type' => 0,
    ),
    1 => 
    array (
      'time' => -2524530932,
      'type' => 1,
    ),
    2 => 
    array (
      'time' => -1062210920,
      'type' => 2,
    ),
  ),
  'finalRule' => 
  array (
    'type' => 'static',
    'name' => 'EAT',
    'offset' => 10800,
    'startYear' => 1937,
  ),
  'name' => 'Africa/Asmara',
);

?>