
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
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/blog.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	
<script type="text/javascript" src="data/uniport.geojson"></script>
<style type="text/css">
#map{
			height: 400px;
		}
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
	var map = L.map('map').setView([4.8982, 6.9226],13);
	var UniportLayer = L.geoJson(uniport).addToMap(map);
</script>
	
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
	          <a class="blog-nav-item active" href="#">Home</a>
	          <a class="blog-nav-item" href="#">New features</a>
	          <a class="blog-nav-item" href="#">Press</a>
	          <a class="blog-nav-item" href="#">New hires</a>
	          <a class="blog-nav-item" href="map.php">Uniport map</a>
	        </nav>
	      </div>
	    </div>
	</header>
		<div class='popup'>
			<div class='cnt223'>
				<h1>Do you know</h1>
				<p>
				you can see the map of your school by clicking on the uniport map tag?.
					<br/>
					<br/>
					<a href='' class='close'>Close</a>
				</p>
			</div>
		</div>
		<div class="map"></div>
	</body>
	</html>