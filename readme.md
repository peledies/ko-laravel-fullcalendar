<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# ko-laravel-fullcalendar
This package is a composer installable helper for working with fullcalendar.io in a laravel app.


## Usage 

### Building an `Event`
```
$event = new \KO\Fullcalendar\Event();
$event->build(['id'=>'asdf', 'title' => 'test', 'start' => '20-04-2018']);
```

### Adding an `Event` to an `EventCollection`
``` 
$events = new \KO\Fullcalendar\EventCollection();
$events->push( $event );
```


### Custom options
```
$options = new \KO\Fullcalendar\Options([
    'header' => [
        'right' => 'prev,next today',
        'center' => 'title',
        'left' => 'month,agendaWeek,agendaDay',
    ],
    'eventLimit' => true,
]);
```

### Instantiate a new `Calendar`
```
$calendar = new \KO\Fullcalendar\Calendar();
$calendar->addEvents( $events );
$calendar->setOptions( $options );
```

### Draw the calendar
In your blade, add the following where you would like the calendar to be drawn.
```
  {!! $calendar->html() !!}
```

## CDN 
This package has a helper method for building the appropriate `style` and `javascript` assets from a CDN. Just add the following to your html to load the appropriate resources.

Fullcalendar css
```
{!! $calendar->cdn('fullcalendar', 'css', '3.9.0') !!}
```

Fullcalendar js
```
{!! $calendar->cdn('fullcalendar', 'js', '3.9.0') !!}
```

Moment js
```
{!! $calendar->cdn('moment', 'js', '2.22.1') !!}

```