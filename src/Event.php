<?php 
namespace KO\Fullcalendar;

/**
 * Class Event
 *
 * @package KO\Fullcalendar
 */
class Event
{
    /**
     * @var string|int|null
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var bool
     */
    public $allDay;

    /**
     * @var Carbon
     */
    public $start;

    /**
     * @var Carbon
     */
    public $end;

    /**
     * @var array
     */
    private $options;

    // these fields get converted to carbon dates
    private $dates = [
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
            if( property_exists($this, $key) ){
                if( in_array($key, $this->dates) ){
                    $this->$key = ( $value instanceof \Carbon\Carbon ) ? $value : new \Carbon\Carbon($value);
                }else{
                    $this->$key = $value;
                }
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
}