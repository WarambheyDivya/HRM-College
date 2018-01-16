<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.css' />
        <link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.print.css' media='print' />
        <script type='text/javascript' src='../jquery/jquery-1.8.1.min.js'></script>
        <script type='text/javascript' src='../jquery/jquery-ui-1.8.23.custom.min.js'></script>
        <script type='text/javascript' src='../fullcalendar/fullcalendar.min.js'></script>
        <script type='text/javascript'>

            $(document).ready(function() {

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();

                $('#calendar').fullCalendar({
                    editable: true,
                    events: [
                        {
                            title: '<?php echo 35; ?>',
                            start: new Date(y, m, 1)
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m-1, 30),
                            end: new Date(y, m, d-2)
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: new Date(y, m, d-3, 14, 0),
                            allDay: false
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: new Date(y, m, d+4, 16, 0),
                            allDay: false
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d+1, 19, 0),
                            end: new Date(y, m, d+1, 22, 30),
                            allDay: false
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/'
                        }
                    ]
                });

            });

        </script>
        <style type='text/css'>

            body {
                margin-top: 40px;
                text-align: center;
                font-size: 14px;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            }

            #calendar {
                width: 900px;
                margin: 0 auto;
            }

        </style>
    </head>
    <body>
        <div id='calendar'></div>
    </body>
</html>
