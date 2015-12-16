jQuery(document).ready(function () {
  
  var markers = [];
  var circ;
  var map;

  var date = new Date();
  var today = date.getDay();
  var isGeolocated = false;
  
  var weekday = new Array(7);
  weekday[0] =  today == 0 ? 'current-day' : ''; // Sunday
  weekday[1] =  today == 1 ? 'current-day' : ''; // Monday
  weekday[2] =  today == 2 ? 'current-day' : '';
  weekday[3] =  today == 3 ? 'current-day' : '';
  weekday[4] =  today == 4 ? 'current-day' : '';
  weekday[5] =  today == 5 ? 'current-day' : '';
  weekday[6] =  today == 6 ? 'current-day' : '';
  
  var storeIcon = {
    url: storeIconPath,
    size: new google.maps.Size(23, 36),
    scaledSize: new google.maps.Size(23, 36)
  };
  
  var positionIcon = {
    url: positionIconPath,
    size: new google.maps.Size(23, 36),
    scaledSize: new google.maps.Size(23, 36)
  };
  
  var dropboxIcon = {
    url: dropboxIconPath,
    size: new google.maps.Size(23, 36),
    scaledSize: new google.maps.Size(23, 36)
  };
  
  function resizeMap() {
    var newHeight = (jQuery(window).height() - jQuery("#header").outerHeight() - jQuery("#map-search").outerHeight());
    
    if (newHeight < 400) {
      newHeight = '400px';
      map.map.setOptions({draggable: true});
    } else {
      newHeight = newHeight + 'px';
      map.map.setOptions({draggable: true});
    }

    jQuery("#map").css("height", newHeight);

  }
    

  
  jQuery(window).resize(resizeMap);
  
  function introFadeOut() {
    jQuery('#map-intro').fadeOut(500);
  }
  
  jQuery('#map-intro-btn').click(function() {
    introFadeOut();
  });

  jQuery('#map-search-input').focus(function() {
    introFadeOut();
    mapGeolocate();
  });
  
  var lat = 32.4608333;
  var lng = -84.9877778;
  map = new GMaps({
    div: '#map',
    lat: lat,
    lng: lng,
    zoom: 12,
    scrollwheel: false,
    zoomControlOptions: {
      position: google.maps.ControlPosition.RIGHT_TOP
    },
    streetViewControlOptions: {
      position: google.maps.ControlPosition.RIGHT_TOP
    }
  });
  
  map.map.controls[google.maps.ControlPosition.LEFT_TOP].push(document.getElementById('map-legend'));
  
  mapInitMarkers();
  resizeMap();
  
  var legend = document.getElementById('map-legend');
  var div = document.createElement('div');
  div.innerHTML = '<img src="' + storeIconPath + '"> Store';
  legend.appendChild(div);
  var div = document.createElement('div');
  div.innerHTML = '<img src="' + dropboxIconPath + '"> Dropbox';
  legend.appendChild(div);
  
  var currentPosition = map.addMarker({
    lat: lat,
    lng: lng,
    title: 'My position',
    icon: positionIcon,
  });
  
  mapShowRadius();

  
  jQuery('#map-search-select').change(function() {
  
  });


  
  function mapGeolocate() {

    if (!isGeolocated && navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var geolocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        map.setCenter(geolocation);
        currentPosition.setPosition(geolocation);
        mapShowRadius();
      });
      isGeolocated = true;
    }
    
  }
  
  jQuery('#map-search-form').submit(function(e) {
    e.preventDefault();
    hideAllMessage();
    mapSearchAddress(jQuery('#map-search-input').val());
  });

  var infowindow = new google.maps.InfoWindow({
    content: "",
    maxWidth: 550,
  });
  
  function mapInitMarkers()
  {

    for (i = 0; i < gmapDropboxData.length; ++i) {
      var dropbox = gmapDropboxData[i];
      var lat = dropbox['lat'];
      var lng = dropbox['lng'];
      
      markers[markers.length] = map.addMarker({
        lat: lat,
        lng: lng,
        sunday: 'Closed',
        title: dropbox['name'],
        data: gmapDropboxData[i],
        icon: dropboxIcon,
      });
      


      
      var marker = markers[markers.length - 1];
      
      google.maps.event.addListener(marker, 'click', function() {
        drawRoute(this.getPosition().lat(), this.getPosition().lng());
        infowindow.setContent(getDropboxContent(this.data));
        infowindow.open(map.map, this);
      });
    }
      
    for (i = 0; i < gmapStoreData.length; ++i) {
      var store = gmapStoreData[i];
      var lat = store['lat'];
      var lng = store['lng'];
      
      markers[markers.length] = map.addMarker({
        lat: lat,
        lng: lng,
        title: store['name'],
        data: gmapStoreData[i],
        icon: storeIcon,
        zIndex: i + 10000,
      });
      


      
      var marker = markers[markers.length - 1];
      
      google.maps.event.addListener(marker, 'click', function() {
        drawRoute(this.getPosition().lat(), this.getPosition().lng());
        infowindow.setContent(getStoreContent(this.data));
        infowindow.open(map.map, this);
      });
    }

  }


  function getStoreContent(data)
  {
    var html = '<div class="map-infowindow">';
    
    html += '<div class="tabs-container">' +
        '<ul class="nav nav-tabs">' +
            '<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Information</a></li>' +
            '<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Directions</a></li>' +
        '</ul>' +
        '<div class="tab-content">' +
            '<div id="tab-1" class="tab-pane active">';
            
    html += '<h4 class="map-title-store">' + data['name'] + '</h4>';
    
                html += '<div class="row">';
    
    html += '<div class="col-sm-6">';
    html += '<dl class="opening-hours dl-horizontal">';
    
    html += '<dt class="'+weekday[0]+'">Sunday</dt><dd>' + data['sunday'] + '</dd>';
    html += '<dt class="'+weekday[1]+'">Monday</dt><dd>' + data['monday'] + '</dd>';
    html += '<dt class="'+weekday[2]+'">Tuesday</dt><dd>' + data['tuesday'] + '</dd>';
    html += '<dt class="'+weekday[3]+'">Wednesday</dt><dd>' + data['wednesday'] + '</dd>';
    html += '<dt class="'+weekday[4]+'">Thursday</dt><dd>' + data['thursday'] + '</dd>';
    html += '<dt class="'+weekday[5]+'">Friday</dt><dd>' + data['friday'] + '</dd>';
    html += '<dt class="'+weekday[6]+'">Saturday</dt><dd>' + data['saturday'] + '</dd>';
    
    html += '</dl>';

    html += '</div>';
    html += '<div class="col-sm-6">';
    
    html += '<strong><i class="fa fa-map-marker"></i> Address:</strong><br>';
    html += data['address'] + ', ' + data['city'] + ', ' +  data['state'] + ' ' + data['zip'];
    
    html += '<br><strong><i class="fa fa-phone"></i> Phone Number:</strong><br>';
    html += data['phone'];
    
    html += '<br><strong><i class="fa fa-envelope"></i> Email Address:</strong><br>';
    html += '<a href="mailto:' + data['email'] + '">'+ data['email'] +'</a>';
    
    html += '</div>';
    
    if (data['note']) {
      html += '<p>' + data['note'] + '</p>';
    }
    html += '</div>';
    


    
            
            html += '</div>';
            html += '<div id="tab-2" class="tab-pane">';
    html += '<ul id="map-directions"></ul>';

            html += '</div>';
        html += '</div>' +
    '</div>';
                    
    html += '</div>';
    return html;
  }
  
  function getDropboxContent(data)
  {
    var html = '<div class="map-infowindow">';
    
    html += '<h4 class="map-title-dropbox">Dropbox Location</h4>';
    
    html += data['address'];
    
    if (data['address2']) {
      html += '<br>' + data['address2']; 
    }
    
    if (data['city']) {
      html += '<br>' + data['city'] + ' ';
    }
    
    if (data['zip']) {
      html += data['zip']; 
    }   
    
    html += '<ul id="map-directions"></ul>';
    html += '</div>';
    
    return html;
  }
    
  
  
  function mapShowRadius()
  {
    var lat = currentPosition.getPosition().lat();
    var lng = currentPosition.getPosition().lng();
    circ = new google.maps.Circle();
    circ.setRadius(25 * 1609.344);
    circ.setCenter({ lat: lat, lng: lng });
    map.setCenter({ lat: lat, lng: lng });
    map.fitBounds(circ.getBounds());
    /*if (map.getZoom() < 12) {
      map.setZoom(12);
    }*/
    findLocation();
  }
  
  function drawRoute(lat, lng)
  {
    cleanRoute();
    map.travelRoute({
      origin: [currentPosition.getPosition().lat(), currentPosition.getPosition().lng()],
      destination: [lat, lng],
      travelMode: 'driving',
      step: function(e) {
        pushInstruction(e.instructions);
        map.drawPolyline({
          path: e.path,
          strokeColor: '#131540',
          strokeOpacity: 0.6,
          strokeWeight: 6
        });

      }
    });
  }
  
  
  
  function pushInstruction(instructions)
  {
    jQuery('#map-directions').append('<li>' + instructions + '</li>');
  }
  function cleanRoute()
  {
    map.cleanRoute();
  }
  
  
  function mapSearchAddress(address)
  {
    GMaps.geocode({
      address: address,
      callback: function(results, status) {
        if (status == 'OK') {
          var latlng = results[0].geometry.location;
          map.setCenter(latlng.lat(), latlng.lng());
          currentPosition.setPosition({
            lat: latlng.lat(),
            lng: latlng.lng()
          });
          mapShowRadius();
        } else {
          addressNotFound();
        }
      }
    });
  }
  
  function findLocation()
  {
    var bounds = circ.getBounds();
    var count = 0;
    
    for(i=0; i<markers.length; ++i) {
     
      if (bounds.contains(markers[i].getPosition())) {
        ++count;
      }
    
    }
    
    if (count == 0) {
      noLocationFound();
    }

  }
  
  function hideAllMessage()
  {
    jQuery('#map-not-found').hide('fast');
    jQuery('#map-no-location').hide('fast');
  }
  
  function addressNotFound()
  {
    jQuery('#map-not-found').fadeIn('fast');
  }
  
  function noLocationFound()
  {
    jQuery('#map-no-location').fadeIn('fast');
  }
  
});



