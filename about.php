<?php /*
        Template Name: About
*/ ?>

<?php get_header(); ?>
    
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script>
function initialize() {
  var myLatlng = new google.maps.LatLng(40.383806,-79.995339);
  var mapOptions = {
    zoom: 14,
    center: myLatlng,
    /* disableDefaultUI: true, */
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                                
  var contentString = '<div class="about-address">'+
        '<address>'+
          '<strong>Find us at:</strong><br>'+
            '2415 Saw Mill Run Blvd,<br>'+
            'Pittsburgh, PA 15234<br>'+
        '</address>'+
        '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
   
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
  
google.maps.event.addListener(marker,'click', function(evt) {
      infowindow.open(map, marker);
    });
    
    google.maps.event.addListenerOnce(map,'idle',function() {
      google.maps.event.trigger(marker,'click');
    });  
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
    
	<div id="primary" class="content-area about" >
		
		  <main id="main" class="site-main" role="main">
      
		  	<?php while ( have_posts() ) : the_post(); ?>
      
		  		<?php get_template_part( 'content', 'page' ); ?>
      
		  	<?php endwhile; // end of the loop. ?>
      
		  </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
