<?php
namespace KO\Fullcalendar;

class EventCollection extends \Illuminate\Database\Eloquent\Collection
{
    public function convert()
    {
        $events = [];
        foreach($this as $thing){
            $events[] = $thing->convert();
        }
        return $events;
    }
}