jQuery(document).ready(function () {
  
  jQuery('#pickup-best-time').datetimepicker({
    format: 'LT',
  });
  
  
  jQuery('#pickup-best-day').datetimepicker({
    format: 'MM/DD/YYYY',
    minDate: moment()
  });
  jQuery('#pickup-best-day').val('');
  
  var placeSearch, autocomplete;
  var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
  };

  function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById('pickup-address')),
        {types: ['geocode']});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
  }

  function fillInAddress() {
    var place = autocomplete.getPlace();
    
    if (place.geometry) {
    
      var positionLat = parseFloat(place.geometry.location.lat());
      var positionLng = parseFloat(place.geometry.location.lng());
      var positionLatlng = new google.maps.LatLng(positionLat, positionLng);
      
      
      pickupCircle = new google.maps.Circle();
      pickupCircle.setRadius(25 * 1609.344);
      pickupCircle.setCenter(positionLatlng);
      
      var distance = 500000;
      var closestStore = false;
      
      for (i=0; i<gmapStoreData.length; ++i) {

        var store = gmapStoreData[i];
        var lat = store['lat'];
        var lng = store['lng'];
        
        var bounds = pickupCircle.getBounds();

        var latlng = new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
 
        if (bounds.contains(latlng)) {
          var storeDistance = google.maps.geometry.spherical.computeDistanceBetween(positionLatlng,latlng);
          
          if (storeDistance < distance) {
            closestStore = gmapStoreData[i];
          }
          
        }
        
      }
      
      // Store found
      if (closestStore != false) {
      
        jQuery('#pickup-store-email').val(closestStore['email']);
        jQuery('#pickup-errmsg').hide('fast');
        jQuery('#pickup-submit').prop('disabled', false);
      
      } else {
        jQuery('#pickup-store-email').val('');
        jQuery('#pickup-submit').prop('disabled', true);
        jQuery('#pickup-errmsg').html('I apologize but we do not have a store within 25 miles of you at this time').fadeIn('fast');
      }
    
    } else {
      jQuery('#pickup-store-email').val('');
      jQuery('#pickup-submit').prop('disabled', true);
      jQuery('#pickup-errmsg').hide('fast');
      jQuery('#pickup-errmsg').html('Sorry, address not found').fadeIn('fast');
    }
  }

  jQuery('#pickup-address').focus(geolocate);
  
  function geolocate() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var geolocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        var circle = new google.maps.Circle({
          center: geolocation,
          radius: position.coords.accuracy
        });
        autocomplete.setBounds(circle.getBounds());
      });
    }
  }
  
  initAutocomplete();
  
});