<!DOCTYPE html>
<html>
	<head>
		<title>Map of local effective altruism groups</title>
		<!-- Same version of jQuery as used on EA Hub, in case add jQuery: -->
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<link type="text/css" rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" media="all" />
<link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.Default.css" media="all" />
<link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" media="all" />
<link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.0/leaflet.awesome-markers.css" media="all" />
		<style type="text/css">
			/*
			body {overflow: hidden; }
			#noscroll.wrap {height:100%; overflow:hidden;}
			*/
			body {margin: 0px;}
		</style>
		<base target="_parent" />
	</head>
	<body>
		<div id="noscroll">
<!--
          start pasted map block
-->

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/leaflet.markercluster.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.0/leaflet.awesome-markers.js"></script>
        
        
	<div id="map" style="
	position: relative;
	max-width: 1000px;
	width: 940px;
	height: 570px;
	"></div>
    <!-- 
    ==SMALL VERSION==
    <div id="map" style="
    position: relative;
    width: 480px;
    height: 280px
    "></div>

        ==LARGE VERSION==
	<div id="map" style="
	width: 100%;
	position: relative;
	margin: 4em auto;
	max-width: 1000px;
	width: 1000px;
	height: 570px;
	"></div>
     -->

    <script>
     //<![CDATA[
     window.markerData = <?php include 'group-locations.json';?>;
     //]]>
    </script>

    <script>

     var map = L.map('map', {
       
       
       center: [25,13],
       zoom: 2
       
       /* VARIANT SETTINGS
       
       ==Small map==
       center: [5, 5],
       zoom: 1
       
       // with html:
    <div id="map" style="
    position: relative;
    
    width: 480px;
    height: 280px
    "></div>
       ============
       
       ==Large map==
       center: [25,13],
       zoom: 2
       
       // with html:
	<div id="map" style="
	width: 100%;
	position: relative;
	margin: 4em auto;
	max-width: 1000px;
	width: 1000px;
	height: 570px;
	"></div>
       */
       
     });


     L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
       maxZoom: 18,
       attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
		 '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		 'Imagery © <a href="http://mapbox.com">Mapbox</a>',
       id: 'examples.map-i875mjb7'
     }).addTo(map);


     var markerData = window.markerData;
     var markers = new L.MarkerClusterGroup();
     for(var i = 0; i < markerData.length; i++) {
       var currentMarkerData = markerData[i];
       var latlng = currentMarkerData.latlng;
       var popup = currentMarkerData.popup;
       var marker = new L.marker(latlng, {icon: L.AwesomeMarkers.icon({icon: 'users', markerColor: 'orange', prefix: 'fa', iconColor: 'black'}) }).bindPopup(popup);
       //marker.addTo(map);
       markers.addLayer(marker);
     }
     map.addLayer(markers);

    </script>

<!--
          end pasted map block
-->
		</div>
	</body>
</html>