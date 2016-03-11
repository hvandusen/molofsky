<?php get_header(); ?>
    <div id="map" class="map"></div>
    <script type="text/javascript">
// Map views always need a projection.  Here we just want to map image
      // coordinates directly to map coordinates, so we create a projection that uses
      // the image extent in pixels.
      var extent = [0, 0, 1024, 968];
      var projection = new ol.proj.Projection({
        code: 'xkcd-image',
        units: 'pixels',
        extent: extent
      });

      var map = new ol.Map({
	      controls: [],
	      interactions: ol.interaction.defaults({mouseWheelZoom:false,
		      doubleClickZoom: false
	      }),
        layers: [
          new ol.layer.Image({
            source: new ol.source.ImageStatic({
              url: '<?php bloginfo('template_directory'); ?>/images/bigpng.jpg',
              projection: projection,
              imageExtent: extent
            })
          })
        ],
        target: 'map',
        view: new ol.View({
          projection: projection,
          center: ol.extent.getCenter(extent),
          zoom: 4,
          maxZoom: 8
        })
      });
    </script>
<?php get_footer(); ?>