<?php 
$title = "Lightstream | Creative Digital Agency | Web Design Company | Lancashire | Manchester | UK";
$keywords = "seo, marketing, digital, agency, web, design, creative, blackpool, preston, manchester, development, interactive,lancashire uk";
$description = "Lightstream is a Creative Web Design and Digital Agency based in Blackpool, Lancashire, UK. Our services include Bespoke Web Design and Interactive Marketing.";
?>
<?php include 'inc/headerInc.php'; ?>
<?php include 'inc/nav.php'; ?>
<div class="container" >
<div class="row-fluid panelGradBlank"> </div>
<?php if ($device == "tablet" || $device == "desktop") { ?>
<div class="row-fluid center">

  <div class="span12" ></div>
  

  

 <!-- <div class="span12" style="height: 400px;">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASoE-83zMu3Uo8JJvJaz0IXlyWWfJsqk8&sensor=false&extension=.js"></script> 
<script> google.maps.event.addDomListener(window, 'load', init);

var map;

function init() {
    var mapOptions = {
        center: new google.maps.LatLng(53.472805,-2.227772),
        zoom: 17,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
        },
        disableDoubleClickZoom: true,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        },
        scaleControl: false,
        scrollwheel: true,
        streetViewControl: false,
        draggable : true,
        overviewMapControl: true,
        overviewMapControlOptions: {
            opened: false,
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: [
	{
		featureType: 'water',
		stylers: [{color:'#46bcec'},{visibility:'on'}]
	},{
		featureType: 'landscape',
		stylers: [{color:'#f2f2f2'}]
	},{
		featureType: 'road',
		stylers: [{saturation: -100},{lightness: 45}]
	},{
		featureType: 'road.highway',
		stylers: [{visibility: 'simplified'}]
	},{
		featureType: 'road.arterial',
		elementType: 'labels.icon',
		stylers: [{visibility: 'off'}]
	},{
		featureType: 'administrative',
		elementType: 'labels.text.fill',
		stylers: [{color: '#444444'}]
	},{
		featureType: 'transit',
		stylers: [{visibility: 'off'}]
	},{
		featureType: 'poi',
		stylers: [{visibility: 'off'}]
	}
],
    
    }

    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var locations = [
        ['M12 6HS', 53.4726037, -2.2268465],['Manchester', 53.479324, -2.2484851],['Progress Centre', 53.4726037, -2.2268465],['Charlton Place', 33.73092889999999, -84.719397]
    ];

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            icon: '',
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
    }
}
</script> 


<style> 
#map{
    width:100%;
    height:400px;
}
</style> 

  
  
 
  </div>-->

  
  
</div>
<?php } ?>
<div class="row-fluid panelGradBlack">
  <div class="padded">
    <div class="span7">
      <form action="sendmail.php" method="post" id="sendmail">
        <h3 style="color: #FFF; left: 0px; top: 0px; bottom: 4px; position: relative;">Have a Project? Please fill in our quick form and one of our represenatives will contact you. </h3>
        <label>
          <input name="Name" type="text" id="Name" placeholder="* Full Name" class=" rounded span11 clearfix " data-validation="required" data-validation-error-msg="Please provide Full Name">
        </label>
        <label>
          <input name="Email" type="text" id="Email" placeholder="* Email"  class=" rounded span11 clearfix " data-validation="email" data-validation-error-msg="Please provide Email"/>
        </label>
        <label>
          <input name="Budget" type="text" id="Budget" placeholder="Budget" class=" rounded span11 clearfix"/>
        </label>
        <label>
          <input name="Phone" type="text" id="Phone" placeholder="Phone" class=" rounded span11 clearfix" />
        </label>
        <label>
          <textarea name="Details"  id="Details" placeholder="Details" class="rounded  clearfix span11 "></textarea>
        </label>
        <label>
        <input name="Send" type="submit" class="clearfix roundedmore " id="Send"  value="SEND DETAILS" />
        <label>
      </form>
    </div>
    <div class="span5"> 
      
      <!--<div class="callButtonPink" style="float: left; margin: 10px 10px 0 0;"><a href="mailto:info@lightstreaminteractive.com" >Get in touch</a></div>
        <div class="callButtonBlue"  style="float: left;  margin: 10px 0 0 0;"><a href="mailto:info@lightstreaminteractive.com" >Online quote</a></div>-->
      
      <h3>Contact us</h3>
      <p class="telephone">Tel: <span>0845 519 7209</span></p>
      <p class="telephone">Email: <span><a href="mailto:hi@lightstream-i.com">hi@lightstream-i.com</a></span></p>
      <p> Lightstream Interactive Ltd <br/>
        Progress Centre<br/>
        Charlton Place<br/>
        Manchester<br/>
        M12 6HS</p>
      <br/>
    </div>
  </div>
</div>

<!-- /container -->
<?php include 'inc/footer.php'; ?>
<?php include 'inc/footerInc.php'; ?>