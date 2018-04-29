<?php 
namespace KO\Fullcalendar;

/**
 * Class Event
 *
 * @package KO\Fullcalendar
 */
class Options
{
   
   public function __construct( array $options = null )
   {
    foreach ($options as $key => $value) {
      $this->$key = $value;
    }
   }
}