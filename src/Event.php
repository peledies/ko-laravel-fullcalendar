<?php 
namespace KO\Fullcalendar;

/**
 * Class Event
 *
 * @package KO\Fullcalendar
 */
class Event extends \Illuminate\Database\Eloquent\Model
{

    // these fields get converted to carbon dates
    protected $dates = [
          'start'
        , 'end'
    ];

    public function __construct(array $data = null)
    {
        if($data){
            $this->build( $data );
        }
    }

    public function build( $data )
    {
        foreach ($data as $key => $value) {
            if( in_array($key, $this->dates) ){
                $this->$key = ( $value instanceof \Carbon\Carbon ) ? $value : new \Carbon\Carbon($value);
            }else{
                $this->$key = $value;
            }
        }
    }

    /**
     * Get a class property by name
     *
     * @return int
     */
    public function get( $property )
    {
        return $this->$property;
    }

    public function convert()
    {
        $event = new \stdClass();
        $event->id = $this->id;
        $event->title = $this->title;
        $event->start = ($this->start) ? $this->start->format('Y-m-d\TH:i:s') : null;
        $event->end = ($this->end) ? $this->end->format('Y-m-d\TH:i:s') : null;
        return $event;
    }
}