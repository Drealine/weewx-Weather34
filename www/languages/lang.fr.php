<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: French
Translation By :  pncatte@free.fr
Developed By: Lightmaster/Brian Underdown/Erik M Madsen
May 15th 2016
Revised: 2019
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day        = date("l");
$day2       = date("l", time() + 86400);
$daynum     = date("j");
$monthtrans = date("F");
$year       = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "fr_FR.UTF-8");
$lang                           = array();
// Menu
$lang['Settings']               = 'Paramètres';
$lang['Layout']                 = 'Disposition';
$lang['Light Theme']            = 'Thème clair';
$lang['Darktheme']              = 'Thème foncé';
$lang['Nonmetric']              = 'Affichage température en (F) ';
$lang['Metric']                 = 'Affichage température en (C)';
$lang['UKmetric']               = 'Affichage du vent en MPH ';
$lang['Scandinavia']            = 'Affichage du vent en M/S';
$lang['Worldwideearthquakes']   = 'Tremblement de terre';
$lang['Toggle']                 = 'Basculer en plein écran ';
$lang['Contactinfo']            = 'Informations de contact';
$lang['Templateinfo']           = 'Contributeurs';
$lang['language']               = 'Choisir la langue';
$lang['Weatherstationinfo']     = 'Info de la station';
$lang['Webdesigninfo']          = 'Template Info';
$lang['Contact']                = 'Contact';
//days
$lang['Monday']                  = 'Lundi';
$lang['Tuesday']                 = 'Mardi';
$lang['Wednesday']               = 'Mercredi';
$lang['Thursday']                = 'Jeudi';
$lang['Friday']                  = 'Vendredi';
$lang['Saturday']                = 'Samedi';
$lang['Sunday']                  = 'Dimanche';
//months
$lang['January']                 = 'Janvier';
$lang['Febuary']                 = 'Février';
$lang['March']                   = 'Mars';
$lang['April']                   = 'Avril';
$lang['May']                     = 'Mai';
$lang['June']                    = 'Juin';
$lang['July']                    = 'Juillet';
$lang['August']                  = 'Août';
$lang['September']               = 'Septembre';
$lang['October']                 = 'Octobre';
$lang['November']                = 'Novembre';
$lang['December']                = 'Décembre';
//temperature
$lang['Temperature']            = 'Température';
$lang['Feelslike']              = 'Ressenti';
$lang['Humidity']               = 'Humidité';
$lang['Dewpoint']               = 'Point de rosée';
$lang['Heatindex']              = 'Indice de chaleur';
$lang['Windchill']              = 'Refroidissement éolien';
$lang['Tempfactors']            = 'Facteur temp.';
$lang['Nocautions']             = 'Aucune alerte';
$lang['Wetbulb']                = 'Humidex';
$lang['dry']                    = '& Sec';
$lang['verydry']                = '& Très Sec';
//new feature temperature feels
$lang['FreezingCold']           = 'Ressenti froid glacial';
$lang['FeelingVeryCold']        = 'Ressenti très froid';
$lang['FeelingCold']            = 'Ressenti froid';
$lang['FeelingCool']            = 'Ressenti chaud';
$lang['FeelingComfortable']     = 'Ressenti agréable';
$lang['FeelingWarm']            = 'Ressenti tiède';
$lang['FeelingHot']             = 'Ressenti chaud ';
$lang['FeelingUncomfortable']   = 'Ressenti inconfortable';
$lang['FeelingVeryHot']         = 'Ressenti très chaud';
$lang['FeelingExtremelyHot']    = 'Ressenti extrèmement chaud';
//wind
$lang['WindSpeed']              = 'Vitesse du vent';
$lang['Gust']                   = 'Rafale';
$lang['Direction']              = 'Direction';
$lang['Gusting']                = 'Rafale de';
$lang['Blowing']                = 'Souffler à';
$lang['Wind']                   = 'Vent';
$lang['WindRun']                = 'Course vent';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Calme';
$lang['LightAir']               = 'Calme';
$lang['LightBreeze']            = 'Légère brise ';
$lang['GentelBreeze']           = 'Petite Brise';
$lang['ModerateBreeze']         = 'Jolie brise';
$lang['FreshBreeze']            = 'Bonne brise ';
$lang['StrongBreeze']           = 'Forte brise';
$lang['NearBale']               = 'Tempête proche';
$lang['GaleForce']              = 'Force du Vent';
$lang['StrongGale']             = 'Forte tempête';
$lang['Storm']                  = 'Orage';
$lang['ViolentStorm']           = 'Orage violent';
$lang['Hurricane']              = 'Ouragan';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']         = 'Condition calme';
$lang['LightBreezeattimes']     = 'Légère brise par moment';
$lang['MildBreezeattimes']      = 'Légère brise à certains moment';
$lang['ModerateBreezeattimes']  = 'Brise modérée par moment';
$lang['FreshBreezeattimes']     = 'Fraiche brise par moment';
$lang['StrongBreezeattimes']    = 'Forte brise par momemt';
$lang['NearGaleattimes']        = 'Coup de vent par moment';
$lang['GaleForceattimes']       = 'Fort coup de vent par moment';
$lang['StrongGaleattimes']      = 'Vent fort par moment';
$lang['StormConditions']        = 'Conditions météorologiques violentes';
$lang['ViolentStormConditions'] = 'Conditions de violente tempête';
$lang['HurricaneConditions']    = 'Conditions pour un ouragan';
//$lang['Avg']                    = '<span2> Moy. : </span2>';
//wind direction compass
$lang['Northdir']               = 'Dir <span>Nord<br></span>';
$lang['NNEdir']                 = 'Nord Nord <br><span>Est</span>';
$lang['NEdir']                  = 'Nord <span> Est<br></span>';
$lang['ENEdir']                 = 'Est Nord<br><span>Est</span>';
$lang['Eastdir']                = "Dir <span> Est<br></span>";
$lang['ESEdir']                 = 'Est Sud<br><span>Est</span>';
$lang['SEdir']                  = 'Sud <span> Est</span>';
$lang['SSEdir']                 = 'Sud Sud<br><span>Est</span>';
$lang['Southdir']               = 'Dir <span> Sud</span>';
$lang['SSWdir']                 = 'Sud Sud<br><span>Ouest</span>';
$lang['SWdir']                  = 'Sud <span> Ouest</span>';
$lang['WSWdir']                 = 'Ouest Sud<br><span>Ouest</span>';
$lang['Westdir']                = 'Dir <span> Ouest</span>';
$lang['WNWdir']                 = 'Ouest Nord<br><span>Ouest</span>';
$lang['NWdir']                  = 'Nord <span> Ouest</span>';
$lang['NWNdir']                 = 'Nord Nord<br><span>Ouest</span>';
//wind direction avg
$lang['North']                  = 'Nord';
$lang['NNE']                    = 'NNE';
$lang['NE']                     = 'NE';
$lang['ENE']                    = 'ENE';
$lang['East']                   = 'Est ';
$lang['ESE']                    = 'ESE';
$lang['SE']                     = 'SE';
$lang['SSE']                    = 'SSE';
$lang['South']                  = 'Sud';
$lang['SSW']                    = 'SSO';
$lang['SW']                     = 'SO';
$lang['WSW']                    = 'OSO';
$lang['West']                   = 'Ouest';
$lang['WNW']                    = 'ONO';
$lang['NW']                     = 'NO';
$lang['NWN']                    = 'NNO';
//rain
$lang['raintoday']              = 'Précipitations';
$lang['Rate']                   = 'Taux';
$lang['Rainfall']               = 'Précipitations';
$lang['Precip']                 = 'précip'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                   = 'Pluie';
$lang['Heavyrain']              = 'Faible pluie';
$lang['Flooding']               = 'Inondation possible';
$lang['Rainbow']                = 'Arc en ciel';
$lang['Windy']                  = 'Venteux';
//sun -moon-daylight-darkness
$lang['Sun']                    = 'Soleil';
$lang['Moon']                   = 'Lune';
$lang['Sunrise']                = 'Lever du soleil';
$lang['Sunset']                 = 'Coucher du soleil';
$lang['Moonrise']               = 'Lever de lune ';
$lang['Moonset']                = 'Coucher de lune';
$lang['Night']                  = 'Nuit ';
$lang['Day']                    = 'Le Jour';
$lang['Nextnewmoon']            = 'Nouvelle lune';
$lang['Nextfullmoon']           = 'Pleine lune';
$lang['Luminance']              = 'Luminance';
$lang['Moonphase']              = 'Ephémérides :';
$lang['Estimated']              = 'Luminosité';
$lang['Darkness']               = 'Obscurité';
$lang['Daysold']                = 'Jours précedents';
$lang['Belowhorizon']           = 'Sous l horizon';
$lang['Mintill']                = '<br>Jusqu à min:';
$lang['Till']                   = 'à ';
$lang['Minago']                 = ' Il y a min:';
$lang['Hrs']                    = ' Hrs';
$lang['Min']                    = ' Min';
$lang['TotalDarkness']          = 'Obscurité <br>totale';
$lang['TotalDaylight']          = 'Lumière <br>totale';
$lang['Below']                  = "est sous l'horizon";
$lang['Newmoon']                = 'Nouvelle lune';
$lang['Waxingcrescent']         = 'Montante';
$lang['Firstquarter']           = 'Premier quarter';
$lang['Waxinggibbous']          = 'Gibbeuse';
$lang['Fullmoon']               = 'Pleine lune';
$lang['Waninggibbous']          = 'Gibbeuse Décroissante';
$lang['quarter']            = 'Dernier quartier';
$lang['Waningcrescent']         = 'Descendante';
//trends
$lang['Falling']                = 'Baisse';
$lang['Rising']                 = 'Hausse';
$lang['Rapidly']                = 'Rapidement';
$lang['Temp']                   = 'Temp.';
//Solar-UV
//uv
$lang['Nocaution']              = 'Faible<color> risque</color> à etre exposé ';
$lang['Wearsunglasses']         = 'Porter des <color> lunettes de soleil</color> ';
$lang['Stayinshade']            = 'Protéger vous <color> du </color> soleil';
$lang['Reducetime']             = 'Réduire son exposition au <color> soleil</color> entre 10H et 16H ';
$lang['Minimize']               = '<color>Vous pouvez vous</color> exposer entre 10H et 16 H ';
$lang['Trytoavoid']             = 'Eviter de vous <color> exposer</color> entre 10H et 16 H ';
//solar
$lang['Poor']                   = 'Radiations<color><br>Faibles</color>';
$lang['Low']                    = 'Radiations<color><br>Modérées<color>';
$lang['Moderate']               = 'Radiations<color><br>Fortes <br></color>';
$lang['Good']                   = 'Radiations<color><br>Extrème <br></color>';
$lang['Solarradiation']         = 'Radiations solaire';
//current sky
$lang['Currentsky']             = 'Conditions Actuelles';
$lang['Currently']              = 'Actu';
$lang['Cloudcover']             = 'Couverture nuageuse';
//Notifications
$lang['Nocurrentalert']         = 'Aucune Alerte météo ';
$lang['Windalert']              = 'Rafales de vent à';
$lang['Tempalert']              = 'Température maxi.';
$lang['Heatindexalert']         = 'Indice de chaleur elevé  ';
$lang['Windchillalert']         = 'Refroidissement éolien elevé ';
$lang['Dewpointalert']          = 'Humidité Inconfortable';
$lang['Dewpointcolderalert']    = 'Point de rosée bas';
$lang['Feelslikecolderalert']   = 'Ressenti plus froid';
$lang['Feelslikewarmeralert']   = 'Ressenti plus chaud';
$lang['Rainratealert']          = 'par/hr<span> Chute de pluie ';
//Earthquake Notifications
$lang['Regional']               = 'Tremblement de terre régionaux';
$lang['Significant']            = 'Tremblements de terre importants';
$lang['Nosignificant']          = 'Pas de tremblement de terre important';
//Main page
$lang['Barometer']              = 'Pression';
$lang['UVSOLAR']                = 'UV | Solaires';
$lang['Earthquake']             = 'TREMBLEMENTS DE TERRE ';
$lang['Daynight']               = 'Ephémérides';
$lang['SunPosition']            = 'Position du soleil';
$lang['Location']               = 'Emplacement';
$lang['Hardware']               = 'Matériel';
$lang['Rainfalltoday']          = 'Précipitations';
$lang['Speed']                  = 'Vitesse';
$lang['Winddirection']          = 'Direction du vent';
$lang['Measured']               = 'Mesuré ce jour';
$lang['Forecast']               = 'Prévisions';
$lang['Forecastahead']          = 'Prévisions à 10 jours ';
$lang['Forecastsummary']        = 'Prévisions à 2 jours';
$lang['WindGust']               = 'Rafale de vent';
$lang['Hourlyforecast']         = 'Prévisions horaires ';
$lang['Significantearthquake']  = 'Tremblements de terre importants';
$lang['Regionalearthquake']     = 'Tremblements de terre régionaux';
$lang['Average']                = 'Moyenne';
$lang['Notifications']          = 'Notifications des alertes';
$lang['Indoor']                 = 'Intérieur';
$lang['Today']                  = 'Du jour';
$lang['Tonight']                = 'Du soir';
$lang['Tomorrow']               = 'Demain';
$lang['Tomorrownight']          = 'Demain soir';
$lang['Updated']                = 'Mise à jour';
$lang['Meteor']                 = 'Pluie de météorites';
$lang['Firerisk']               = 'Risque de feux de forêts';
$lang['Localtime']              = 'Heure locale';
$lang['Nometeor']               = 'Pas de pluies de météorites';
$lang['Online']                 = 'En ligne';
$lang['Offline']                = 'Hors ligne';
$lang['Weatherstation']         = 'Station méteo';
$lang['Cloudbase']              = 'Base des nuages';
$lang['uvalert']                = 'Caution UVINDEX Fort';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Micro Earthquake';
$lang['MinorE']                 = 'Tremblement de terre mineur';
$lang['LightE']                  = 'Light Earthquake';
$lang['ModerateE']              = 'Tremblement de terre modéré';
$lang['StrongE']                = 'Tremblement de terre fort';
$lang['MajorE']                  = 'Tremblement de terre majeur';
$lang['GreatE']                  = 'Tremblement de terre extrème';
$lang['RegionalE']              = 'Regionale';
$lang['Conditions']             = 'Conditions';
$lang['Cloudbase Height']       = 'Base des nuages';
$lang['Station']                = 'Station';
$lang['Detailed Forecast']      = "Prévisions détaillées";
$lang['Summary Outlook']        = 'Sommaire';
//Air Quality
$lang['Hazordous']              = 'Conditions hasardeuses';
$lang['VeryUnhealthy']          = 'Malsain';
$lang['Unhealthy']              = "Qualité de l'air malsaine";
$lang['UnhealthyFS']            = 'Malsaine pour certains';
$lang['Moderate']               = "Qualité de l'air modéré";
$lang['Good']                   = "Bonne qualité de l'air";
#notification additions
$lang['notifyTitle']             = 'Notifications';
$lang['notifyAlert']             = "Alertes";
$lang['notifyLowBatteryAlert']   = "Alerte batterie faible";
$lang['notifyConsoleLowBattery'] = "Batterie de la console faible";
$lang['notifyStationLowBattery'] = "Batterie de la station faible";
$lang['notifyUVIndex']           = "Attention Indice UV";
$lang['notifyUVExposure']        = "Réduisez l'exposition au soleil";
$lang['notifyHeatExaustion']     = "Fortes expositions";
$lang['notifyExtremeWind']       = "Avertissement : Vent tempétueux";
$lang['notifyGustUpTo']          = "Rafales jusqu'à";
$lang['notifySeekShelter']       = "Chercher un abri <notifyred><b>immdétiatement</b></notifyred>";
$lang['notifyHighWindWarning']   = "Alerte : Vent fort";
$lang['notifySustainedAvg']      = "Vent moyen";
$lang['notifyWindAdvisory']      = "Avis de tempète";
$lang['notifyFreezing']          = "Gel";




$lang['Almanac']                 = "Almanach";
$lang['Yearly']                  = "Année";
$lang['Daily']                   = "Jour";
$lang['Monthly']                 = 'Mois';
$lang['HomeWeatherStation']      = "Station Météo";
$lang['Feels']                   = "Res";
$lang['Hum']                     = "Hum";

$lang['MoonInfo']                = "Info Lune";
$lang['MeteorShowers']           = "Pluie Météorite";
$lang['Aurora']           	     = "Aurores";

$lang['AlmanacTemp']             = "Almanach des températures";
$lang['YearlyTemp']              = "Température de l'année";
$lang['YearlyFeelsTemp']         = "Ressenti de l'année";
$lang['YearlyHumidityTemp']      = "Humidité de l'année";
$lang['DailyFeelsTemp']          = "Ressenti du jour";
$lang['DailyHumidityTemp']       = "Humidité du jour";
$lang['DailyTemp']               = "Température du jour";


$lang['AlmanacBarometer']        = "Almanach des pressions";
$lang['YearlyBarometer']         = "Pression de l'année";
$lang['DailyBarometer']          = "Pression du jour";

$lang['AlmanacRain']        	 = "Almanach des précips";
$lang['YearlyRain']         	 = "Précips de l'année";
$lang['MonthlyRain']         	 = "Précips du mois";
$lang['DailyRain']          	 = "Précips du jour";

$lang['DailyForcast']          	 = "Previ J.";
$lang['LastHour']          	     = "1 H";
$lang['Last24Hour']          	 = "24 H";

$lang['Last24Hour']          	 = "24 H";
$lang['Last60Min']          	 = "60 min";
$lang['Last10Min']          	 = "10 min";
$lang['Trend']                   = 'Tend';
$lang['Steady']                  = 'Stable';

$lang['OfDay']                   = 'du jour';
$lang['AvgOfDay']                = 'Moy';

$lang['IndoorGuide']             = 'Intérieur';
$lang['WebCam']                  = 'Webcam';
$lang['LiveWebCam']              = 'Webcam en direct';

$lang['TillSunrise']          	 = "Jusqu'au levé";
$lang['TillSunset']          	 = "Jusqu'au couché";
$lang['SunElevation']          	 = "Elevation soleil";

$lang['Daylight']                = 'Plein jour';
$lang['FirstLight']              = '1er lumière';
$lang['LastLight']               = 'Der. lumière';

$lang['ClearConditions']         = 'Ciel dégagé';
$lang['Clear']                   = 'Clair';
$lang['Clouds']                   = 'Nuages';
// Wind

$lang['AlmanacWind']             = "Almanach des vents";
$lang['YearlyWind']              = "Vent de l'année";
$lang['TodayWindDirection']      = "Direction du jour";
$lang['DailyWind']               = "Vent du jour";
$lang['WindGustBar']             = "Direction";
$lang['WindRose']          	     = "Rose vents";

$lang['NearbyMetar']          	 = "Metar + proche";
$lang['Radar']          	     = "Radar";
$lang['WindMap']          	     = "Carte des vents";

$lang['RadarWindy']          	 = "Radar Windy.com";
$lang['WindMapWindy']          	 = "Carte des vents de Windy.com";

$lang['Rainfall_CC']             = 'Precips';
$lang['ForTheLastHour']          = 'de la dernière heure';

$lang['RainShowers']             = 'Averses de pluie';
$lang['ThunderStorms']           = 'Orages';
$lang['SnowShowers']             = 'Neiges';
$lang['RedAlert']                = 'Alerte Rouge';
$lang['ThisWeekAdvisory']        = 'cette semaine';
$lang['ExpectAdvisory']          = 'Attendu :';

$lang['YellowAlert']             = 'Alerte Jaune';
$lang['AmberAlert']              = 'Alerte Orange';
$lang['RedAlert']                = 'Alerte Rouge';

$lang['TemperatureAlamanac'] = "Almanach des températures";
$lang['TemperatureToday_Almanac'] = "Température Aujourd'hui";
$lang['TemperatureUYesterday_Almanac'] = "Température Hier";
$lang['TemperatureAllTime_Almanac'] = "Température tout temps";
$lang['DewpointAllTime_Almanac'] = "Point de rosée tout temps";

$lang['WindSpeedAlmanac'] = "Almanach des vents";
$lang['WindSpeedMaxToday'] = "Max d'aujourd'hui";
$lang['WindSpeedMaxYesterday'] = "Max d'hier";
$lang['WindSpeedMaxAllTime'] = "Max tout temps";
$lang['WindSpeedMaxRecorded'] = "Max enregistré";

$lang['RainFallAlmanac'] = "Almanach des précips";
$lang['RainFallMaxToday'] = "Précips d'aujourd'hui";
$lang['RainFallMaxYesterday'] = "Précips d'hier";
$lang['RainFallAlmanac2'] = "Précips";
$lang['RainFallAllTime'] = "Précips tout temps";
$lang['RainFallLastHour'] = "Dernière H";
$lang['RainFallLast24H'] = "Dernières 24H";
$lang['RainFallLast'] = "Dernières precips";
$lang['RainFallSince'] = "Depuis";

$lang['BarometerAlmanac'] = "Almanach des pressions";
$lang['BarometerAlmanac2'] = "Pressions";
$lang['BarometerMaxToday'] = "Pressions d'aujourd'hui";
$lang['BarometerMaxYesterday'] = "Pressions d'hier";
$lang['BarometerMaxAllTime'] = "Pressions tout temps";

$lang['MoonPhaseInformation'] = "Informations sur la phase de la Lune";
$lang['CurrentMoonPhase'] = "Phase de lune actu";
$lang['MoonInformation'] = "Lever/Coucher de la Lune";
$lang['MoonFacts'] = "Faits sur la Lune :";
$lang['DidYouKnow'] = "Le saviez-vous ?";
$lang['MoonPhotographyGuide'] = "Guide photographique de la Lune";
$lang['MoonRiseInfo']               = 'Lever de lune :';
$lang['MoonSetInfo']               = 'Coucher de lune :';
$lang['NextFullMoonInfo']           = 'Prochaine pleine lune :';
$lang['NextNewMoonInfo']           = 'Prochaine nouvelle lune :';
$lang['CurrentlMoonCycleIsInfo']           = 'Cycle de la lune actu est de';
$lang['DaysOldMoonInfo']           = 'jours';


$lang['UseATripod']           = 'Utilisez un trépied';
$lang['UseAZoomLens']           = 'Utilisez un objectif pour le zoom';
$lang['MeasureTheExposure']           = "Mesurer l'exposition";
$lang['AvoidAmbientNearbyLighting']           = "Évitez l'éclairage ambiant à proximité";
$lang['UseAShutterRemoteRelease']           = "Utilisez un déclencheur à distance";
$lang['AlwaysShootInRAWForPostProcessing']           = "Tirez toujours en RAW pour le post-traitement";

$lang['KnowledgeRadioHam']           = "également connu sous le nom de Moon Bounce, est une technique de radiocommunication qui repose sur la propagation des ondes radio d'un émetteur terrestre dirigé via la réflexion de la surface de la Lune vers un récepteur basé sur la Terre utilisant des bandes de radio amateur VHF et UHF.";

$lang['KnowledgeMoon1']           = "
La Lune s'est formée il y a environ 4,5 milliards d'années.";
$lang['KnowledgeMoon2']           = "
Les marées hautes et basses sont causées par l'attraction gravitationnelle dela lune.";
$lang['KnowledgeMoon3']           = "
La Lune tourne autour de la Terre tous les 27,3 jours environ.";
$lang['KnowledgeMoon4']           = "
Lorsque la lumière du soleil frappe la surface de la lune, les températures peuvent atteindre 127 ° C (260 ° F).";
$lang['KnowledgeMoon5']           = "
Du côté obscur de la lune, les températures peuvent chuter à -173 ° C (-280 ° F).";


$lang['ShowerCurrentlyVisible']           = "Météorites Visible";

$lang['RadarForWindy']           = "Radar pour";
$lang['WindMapForWindy']           = "Radar pour";
$lang['RadarMapProvidedBy']           = "Radar/Map fourni par Windy.com";


$lang['DewMin'] = "Rosée Min";
$lang['DewMax'] = "Rosée Max";

$lang['HumMin'] = "Hum Min";
$lang['HumMax'] = "Hum Max";

$lang['Northdir_Metar']               = 'Dir Nord<br>';
$lang['NNEdir_Metar']                 = 'Nord Nord <br>Est';
$lang['NEdir_Metar']                  = 'Nord Est<br>';
$lang['ENEdir_Metar']                 = 'Est Nord<br>Est';
$lang['Eastdir_Metar']                = "Dir Est";
$lang['ESEdir_Metar']                 = 'Est Sud<br>Est';
$lang['SEdir_Metar']                  = 'Sud Est';
$lang['SSEdir_Metar']                 = 'Sud Sud<br>Est';
$lang['Southdir_Metar']               = 'Dir Sud';
$lang['SSWdir_Metar']                 = 'Sud Sud<br>Ouest';
$lang['SWdir_Metar']                  = 'Sud Ouest';
$lang['WSWdir_Metar']                 = 'Ouest Sud<br>Ouest';
$lang['Westdir_Metar']                = 'Dir Ouest';
$lang['WNWdir_Metar']                 = 'Ouest Nord<br>Ouest';
$lang['NWdir_Metar']                  = 'Nord Ouest';
$lang['NWNdir_Metar']                 = 'Nord Nord<br>Ouest';
$lang['CurrentConditions_Metar']      = 'Conditions actu';
$lang['Pressure_Metar']      = 'Pression';
$lang['Visibility_Metar']      = 'Visibilité';
$lang['Temperature_Metar']      = 'Température';
$lang['WindSpeed_Metar']      = 'Vitesse du vent';
$lang['Humidity_Metar']      = 'Humidité';
$lang['DewPoint_Metar']      = 'Pnt Rosée';
$lang['WindDirection_Metar']      = 'Direction du vent';
$lang['Location_Metar']      = 'Localisation :';
$lang['RawMetarInfo']      = 'Infos Metar';
$lang['KnowledgeMetar']      = "
Le METAR est le format le plus courant au monde pour la transmission de données météorologiques d'observation. Il est hautement normalisé par l'Organisation de l'aviation civile internationale (OACI), ce qui lui permet d'être compris dans la plupart des régions du monde.";
$lang['APIInfoMetar']      = 'API Info';
$lang['DataProvidedByMetar']      = 'Données issues de :';
$lang['NearbyAirportConditions']      = 'Conditions Metar la plus proche';


$lang['TodayLightning']      = "24H";
$lang['Strikes']      = "Foudres";
$lang['StrikesRecorded']      = "Foudres enregistrées";
$lang['LastStrikeDetected']      = "Dernière foudre détectée";
$lang['TotalLightning']      = "Total";
$lang['NowLightning']      = "Maintenant";
$lang['AgoLightning']      = "secondes";


$lang['Jan']                 	 = 'Jan';
$lang['Feb']                 	 = 'Fév';
$lang['Mar']                     = 'Mar';
$lang['Apr']                     = 'Avr';
$lang['May']                     = 'Mai';
$lang['Jun']                     = 'Juin';
$lang['Jul']                     = 'Juil';
$lang['Aug']                  	 = 'Août';
$lang['Sep']               		 = 'Sept';
$lang['Oct']                 	 = 'Oct';
$lang['Nov']                	 = 'Nov';
$lang['Dec']                	 = 'Déc';

$lang['From']                	 = 'Depuis';
$lang['To']                	 	 = 'A';

$lang['Avg']                	 = 'Moy';
$lang['Averages']                = 'Moyennes';
$lang['Barb']                	 = 'Barbules';
$lang['WindBarb']                = 'Vent (Barb)';
$lang['and']                	 = 'et';
$lang['with']                	 = 'avec';
$lang['Week']                	 = 'Sem';
$lang['Month']                	 = 'Mois';
$lang['Year']                	 = 'Ann';
$lang['RainFall']                = 'Précips';
$lang['RainRate']                = 'Intensité';
$lang['Range']                   = 'Ecart';
$lang['Ranges']                  = 'Ecarts';
$lang['HeatIndex']               = 'Indice de chaleur';
$lang['7d']                      = '7j';



?>





