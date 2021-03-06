
<!DOCTYPE html>
<html>
<head>
	<title>map</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="libs/leaflet/leaflet.css" />
	<script src="libs/leaflet/leaflet.js"></script>
	<script src="libs/leaflet/Google.js"></script>
	<script type="text/javascript" src="data/countries.geojson"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/blog.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="css/leaflet-sidebar.css">
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="data/uniport.geojson"></script>
	<script src="js/leaflet-sidebar.js"></script>
	<link href="https://cdn.osmbuildings.org/4.0.0/OSMBuildings.css" rel="stylesheet">
  	<script src="https://cdn.osmbuildings.org/4.0.0/OSMBuildings.js"></script>
	<style type="text/css">
		 body {
            padding: 0;
            margin: 0;
        }

        html, body, #map {
            height: 100%;
            font: 10pt "Helvetica Neue", Arial, Helvetica, sans-serif;
        }

        .lorem {
            font-style: italic;
            text-align: justify;
            color: #AAA;
        }
	</style>
	
</head>
<body>
	<header>
		<div>
			<div class="row">
				<div class="col-lg-2 logo">
					<img src="UNIPORT.png" height="80px" width="80px" style="margin-left:110px">
				</div>
				<div  class="logo">
    				<a href="/" title="University of Port Harcourt">
    					<span class="uni">
    						<h2>UNIVERSITY </h2>
    						<u>
    							<h4>OF PORT HARCOURT</h4>
    						</u>
    						<em><h6>Enlightment for Self Reliance</h6></em>
    					</span>
    				</a>
				</div>
				
			</div>		
		</div>
		<div class="blog-masthead">
	      <div class="container">
	        <nav class="blog-nav">
	          <a class="blog-nav-item " href="#">Home</a>
	          <a class="blog-nav-item" href="#">New features</a>
	          <a class="blog-nav-item" href="#">Press</a>
	          <a class="blog-nav-item" href="#">New hires</a>
	          <a class="blog-nav-item active" href="map.php">Map of Uniport</a>
	        </nav>
	      </div>
	    </div>
	</header>


    <div id="map"></div>

    <a href="https://github.com/nickpeihl/leaflet-sidebar-v2/"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 1000;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>

    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
        integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
        crossorigin=""></script>
    <script src="../js/leaflet-sidebar.js"></script>

	

						
		
			 <script>



			 	var map = L.map('map').setView([6.9226, 4.8981],13);
			 	var uniportLayer = L.geoJson(uniport).addTo(map);
			 	map.fitBounds(uniportLayer.getBounds());

				
              	 var blueIcon = new L.Icon({
				  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
				  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
				  iconSize: [25, 41],
				  iconAnchor: [12, 41],
				  popupAnchor: [1, -34],
				  shadowSize: [41, 41]
				});
			 	var myMarker =L.marker([4.9038,6.9115], {icon: blueIcon}).addTo(map);
				myMarker.bindPopup(
			 		'<b>UNIVERSITY OF PORT HARCOURT</b> <div> <img src="libs/leaflet/images/uniport-logo.jpg" style="width:100%"/></div>', 
			 		{
			 			minWidth : 150
			 		}
			 		);



			 			var greenIcon = new L.Icon({
				  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
				  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
				  iconSize: [25, 41],
				  iconAnchor: [12, 41],
				  popupAnchor: [1, -34],
				  shadowSize: [41, 41]
				});

				
					function onEachFeature(feature, layer) {
					  layer.bindPopup(feature.properties.name );
					}

					function soffParkingFilter(feature, layer) {
					  if(feature.properties.building === "yes") return true;
					}

					L.geoJson(uniport, {
					  pointToLayer: function (feature, latlng) {
					            return L.marker(latlng, {icon: greenIcon});
					    },
					  filter: soffParkingFilter,
					  onEachFeature: onEachFeature
					}).addTo(map);

				L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			            maxZoom: 18,
			            attribution: 'Map data &copy; OpenStreetMap contributors'
			        }).addTo(map);

				var featuresLayer = new L.geoJson(uniport, {
						style: function(feature) {
							return {color: feature.properties.color };
						},
						onEachFeature: function(feature, marker) {
							marker.bindPopup('<h4 style="color:'+feature.properties.color+'">'+ feature.properties.name +'</h4>');
						}
					});

				map.addLayer(featuresLayer);

					

					var searchControl = new L.Control.Search({
						layer: featuresLayer,
						propertyName: 'name',
						marker: false,
						moveToLocation: function(latlng, title, map) {
							//map.fitBounds( latlng.layer.getBounds() );
							var zoom = map.getBoundsZoom(latlng.layer.getBounds());
				  			map.setView(latlng, zoom); // access the zoom
						}
					});

					searchControl.on('search:locationfound', function(e) {
						
						//console.log('search:locationfound', );

						//map.removeLayer(this._markerSearch)

						e.layer.setStyle({fillColor: '#3f0', color: '#0f0'});
						if(e.layer._popup)
							e.layer.openPopup();

					}).on('search:collapsed', function(e) {

						featuresLayer.eachLayer(function(layer) {	//restore feature color
							featuresLayer.resetStyle(layer);
						});	
					});
					
					map.addControl( searchControl );  //inizialize search control


				///////

				L.geoJson(uniport, {
				    onEachFeature: function(feature, layer) {
				        var p = layer.feature.properties;
				        p.index = p.name + " | " + p.address + " | " + p.;
				    }
				}).addTo(map);
				
							
	</script>


</body>
</html>