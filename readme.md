[![Latest Stable Version](https://poser.pugx.org/ko/laravel-fullcalendar/v/stable)](https://packagist.org/packages/ko/laravel-fullcalendar) [![Latest Unstable Version](https://poser.pugx.org/ko/laravel-fullcalendar/v/unstable)](https://packagist.org/packages/ko/laravel-fullcalendar) [![Total Downloads](https://poser.pugx.org/ko/laravel-fullcalendar/downloads)](https://packagist.org/packages/ko/laravel-fullcalendar)




```
    @php
        $event = new \KO\Fullcalendar\Event();
        $event->build(['id'=>'asdf', 'start' => '03-03-1982']);

        $events = new \KO\Fullcalendar\EventCollection();
        $events->push( $event );

        $calendar = new \KO\Fullcalendar\Calendar();
        $calendar->addEvents( $events );
        $calendar->addEvent( $event );

        dump( $calendar );
    @endphp
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {!! $calendar->cdn('fullcalendar', 'css', '3.9.0') !!}

        <!-- Styles -->
        <style>

        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                {!! $calendar->html() !!}
            </div>
        </div>

        <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

        {!! $calendar->cdn('moment', 'js', '2.22.1') !!}
        {!! $calendar->cdn('fullcalendar', 'js', '3.9.0') !!}
        {!! $calendar->script() !!}
    </body>
</html>
```