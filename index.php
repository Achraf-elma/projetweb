<!DOCTYPE html>
<html>
    <head>
    <title>Recherchez une ville</title>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
    <script type="text/javascript">
		function initialize() {


       var defaultBounds = new google.maps.LatLngBounds(
         new google.maps.LatLng(-33.8902, 151.1759),
         new google.maps.LatLng(-33.8474, 151.2631));

       var input = document.getElementById('searchTextField');

       var options = {
         types: ['geocode'],
         componentRestrictions: {country: 'fr'}
       };

       autocomplete = new google.maps.places.Autocomplete(input, options);

    }
    google.maps.event.addDomListener(window, 'load', initialize)



    </script>

    </head>
    <body>
       <div>
            <input id="recherche-ville" type="text" placeholder="Entrez une ville" autocomplete="on">
       </div>
    </body>
</html>
