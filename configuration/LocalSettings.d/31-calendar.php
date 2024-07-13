<?php
wfLoadExtension( 'ICalCalendar' );

# iCalCalendar
$wgCalendarSources = [
	"Room schedule" => ["url" => "https://outlook.office365.com/owa/calendar/727a18c97b91469aac237ebbff544a1d@staedelschule.de/7da8f137cad9496cbf3082ffc7f819b01756099346954354531/calendar.ics"],
	"Key dates" => ["url" => "https://outlook.office365.com/owa/calendar/b7ccba0bfb8e4ff5b466da50e95aed29@staedelschule.de/314ea77036c2420cac19a041beadc35f961139855260364948/calendar.ics"],
	"Curriculum" => ["url" => "https://outlook.office365.com/owa/calendar/727a18c97b91469aac237ebbff544a1d@staedelschule.de/8c3c934379734d8a9966efb31f609a5611409373009346833497/calendar.ics"],
	"Lectures" => ["url" => "https://outlook.office365.com/owa/calendar/727a18c97b91469aac237ebbff544a1d@staedelschule.de/b4d8e82f7e0143788180c1e8f759911c2099200344579365393/calendar.ics"],
	"Rundgang" => ["url" => "https://outlook.office365.com/owa/calendar/0e957504e45248048e80b59b70ed176e@staedelschule.de/24ae4353e3e94d64b3ab047ca44e1f764402766081730869909/calendar.ics"]
];
$wgUrlProtocols[] = "webcal";