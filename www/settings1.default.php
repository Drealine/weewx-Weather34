<?php
$apikey = "YOURDARKSKYKEY";
$wuapikey = "YOURWEATHERUNDERGROUNDTOKEN";
$weatherflowID = "";
$weatherflowoption   = "no";
$weatherflowlightning = "";
$weatherflowmapzoom   = "";
$id = "IBUCKING64";
$purpleairID = "1200";
$purpleairhardware   = "yes";
$metarapikey ="YOURMETARKEY";
$TZ = "Europe/London";
$UTC = "0";
$lon = -0.987;
$lat = 51.94;
$darkskyunit   = "uk2";
$wuapiunit   = "h";
$stationlocation = "SOMEWHERE, UK";
$stationName = "SOMEWHERE";
$moonadj = "";
$unit = "english";
$metric = true;
$elevation = "82m";
$uk = false;
$usa = false;
$scandinavia = true;
$restoftheworld = false;
$windunit = "mph";
$distanceunit = "mi";
$tempunit = "C";
$rainunit  = "mm";
$rainrate = "/h";
$pressureunit  = "hPa";
$livedataFormat = "WeeWX-W34";
$livedata   = "/var/www/html/mbridge/MBrealtimeupload.txt";
$chartsource   = "w34charts";
$extralinks   = "yes";
$languages   = "yes";
$dateFormat   = "d-m-Y";
$timeFormat    = "H:i:s";
$timeFormatShort    = "H:i";
$clockformat    = "24";
$showDate = false;
$temperaturemodule   = "temperaturein.php";
$position1   = "weather34clock.php";
$position2   = "windgustyear.php";
$position3   = "rainfallf-year-month.php";
$position4   = "advisory.php";
$position1title   = "Station <ored> Time";
$position2title   = "Wind <orange> Gust</orange>";
$position3title   = "Rainfall<oblue> Rate";
$position4title   = "Weather <ored>Advisory</orange> ";
$position6title   = "Forecast";
$position6   = "forecast3wularge.php";
$position12title   = "Solar | UV | Lux";
$position12   = "weather34uvsolar.php";
$positionlastmoduletitle   = "Moonphase";
$positionlastmodule   = "moonphase.php";
$webcamurl   = "";
$videoWeatherCamURL  = "";
$email    = "someone@gmail.com";
$twitter   = "somebody";
$theme1   = "light";
$since    = "2012";
$weatherhardware   = "Fine Offset WH2650A-WIFI1930A";
$mbplatform   = "";
$davis   = "No";
$sunoption = "sun3.php";
$hemisphere   = "0";
$metar   = "yes";
$icao1   = "EGTK";
$airport1   = "Oxford, UK";
$airport1dist   = "26";
$defaultlanguage   = "en";
$language    = "en";
$password    = "";
$flag   = "en";
$dshourly   = "yes";
$manifestShortName = "MYWX";
$notifications = "yes";
$notifyWind = "yes";
$notifyEarthquake = "yes";
$notifyMagnitude = 3;
$linkWU = "yes";
$linkWUNew = "yes";
$linkCWOPID = "";
$linkFindUID = "";
$linkNOAA = "no";
$linkMADIS = "no";
$linkMesoWest = "no";
$linkWeatherCloudID = "";
$linkWindyID = "";
$linkAWEKASID = "";
$linkAmbientWeatherID = "";
$linkPWSWeatherID = "";
$linkMetOfficeID = "";
$linkCustom1Title = "";
$linkCustom1URL = "";
$linkCustom2Title = "";
$linkCustom2URL = "";
$USAWeatherFinder = "";
$extraLinkTitle = "";
$extraLinkColor = "";
$extraLinkURL = "";
$jsondatapath = "/var/www/weewx/weather34/jsondata";
$aqitoken = "YOURAQITOKEN";
$ds_url = "https://api.forecast.io/forecast/$apikey/$lat,$lon?lang=$language&units=$darkskyunit";
$ds_interval = "300";
$ds_filename = "$jsondatapath/darksky.txt";
$wu_url = "https://api.weather.com/v3/wx/forecast/daily/5day?geocode=$lat,$lon&language=$language&format=json&units=$wuapiunit&apiKey=$wuapikey";
$wu_interval = "300";
$wu_filename = "$jsondatapath/wuforecast.txt";
$eq_url = "https://earthquake-report.com/feeds/recent-eq?json";
$eq_interval = "300";
$eq_filename = "$jsondatapath/eqnotification.txt";
$ki_url = "https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json";
$ki_interval = "43200";
$ki_filename = "$jsondatapath/kindex.txt";
$me_url = "https://api.checkwx.com/metar/$icao1/decoded";
$me_header = "X-API-Key:$metarapikey";
$me_interval = "300";
$me_filename = "$jsondatapath/metar34.txt";
$aq_url = "https://api.waqi.info/feed/geo:$lat;$lon/?token=$aqitoken";
$aq_interval = "900";
$aq_filename = "$jsondatapath/aqi.txt";
$pu_url = "https://www.purpleair.com/json?show=$purpleairID";
$pu_interval = "3600";
$pu_filename = "purpleair.txt";
$services = "ds.me.eq.ki.wu.aq";
?>
