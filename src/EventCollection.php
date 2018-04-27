<?php
namespace KO\Fullcalendar;

class EventCollection
{

    /**
     * @var Collection
     */
    protected $events;

    public function __construct()
    {
        $this->events = collect([]);
    }

    public function push(Event $event)
    {
        $this->events->push( $event );
    }

    public function toJson()
    {
        return $this->events->toJson();
    }

    public function toArray()
    {
        return $this->events->toArray();
    }

}