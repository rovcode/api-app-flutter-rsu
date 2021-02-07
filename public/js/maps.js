(function ($) {
    "use strict";






    var markerIcon = {
        anchor: new google.maps.Point(22, 16),
        url: 'images/marker.png',
    }
    var markerIconUser = {
        anchor: new google.maps.Point(22, 16),
        url: 'images/markerU.png',
    }
    //Obtenemos GPS del usuarios
     //mi code
           
  

//en mi code
    //end GPS
    function mainMap(lu, longu) {
        function locationData(locationURL, locationCategory, locationImg, locationTitle, locationAddress, locationPhone, locationStarRating, locationRevievsCounter) {
            return ('<div class="map-popup-wrap"><div class="map-popup"><div class="infoBox-close"><i class="fa fa-times"></i></div><div class="map-popup-category">' + locationCategory + '</div><a href="' + locationURL + '" class="listing-img-content fl-wrap"><img src="' + locationImg + '" alt=""></a> <div class="listing-content fl-wrap"><div class="card-popup-raining map-card-rainting" data-staRrating="' + locationStarRating + '"><span class="map-popup-reviews-count">( ' + locationRevievsCounter + ' reviews )</span></div><div class="listing-title fl-wrap"><h4><a href=' + locationURL + '>' + locationTitle + '</a></h4><span class="map-popup-location-info"><i class="fa fa-map-marker"></i>' + locationAddress + '</span><span class="map-popup-location-phone"><i class="fa fa-phone"></i>' + locationPhone + '</span></div></div></div></div>')
        }
        localStorage.setItem("data", JSON.stringify(data));
        var bodega = JSON.parse(localStorage.getItem("data"));
        var locations = [];
        for (let index = 0; index < bodega.data.length; index++) {
            locations.push(
                [locationData('https://delifazil.com/', '' + bodega.data[index].name + '', 'https://static.mercadonegro.pe/wp-content/uploads/2020/04/22203358/Bodegas-Per%C3%BA-1.jpg', '' + bodega.data[index].name + '', '' + bodega.data[index].direccion + '', '' + bodega.data[index].phone + '', "5", "27"), bodega.data[index].log, bodega.data[index].lat, 0, markerIcon],

            );
        }
        var myLatlng = new google.maps.LatLng(lu,longu);
        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hola, Australia!"
        });
        locations.push(
            [locationData('', 'Aquí estás', 'https://static.mercadonegro.pe/wp-content/uploads/2020/04/22203358/Bodegas-Per%C3%BA-1.jpg', 'Usuario', 'GPS', '9808', "5", "27"), lu, longu, 0, marker],

        );
         // var locations = [
        //     [locationData('https://delifazil.com/', 'Bodega Juanita', 'https://static.mercadonegro.pe/wp-content/uploads/2020/04/22203358/Bodegas-Per%C3%BA-1.jpg', 'Bodega 1', "Talara 135", "980866911", "5", "27"), -12.0285877, -77.0161032, 0, markerIcon],
        //     [locationData('https://delifazil.com/', 'Bodega El Rey', 'https://cloudfront-us-east-1.images.arcpublishing.com/elcomercio/PLLNGGZRBRBA3EZVL4JEFYKABA.jpg', 'Bodega 2', "Talara 139", "980866911", "4", "5"), -12.0291677, -77.0165942, 1, markerIcon],
        //     [locationData('https://delifazil.com/', 'Mi Bodeguita', 'https://cloudfront-us-east-1.images.arcpublishing.com/elcomercio/PLLNGGZRBRBA3EZVL4JEFYKABA.jpg', 'Bodega 3', "El bosque 1030", "980866911", "4", "5"), -12.0280997, -77.0169802, 2, markerIcon],
        //     [locationData('https://delifazil.com/', 'Bodega Perú', 'https://static.mercadonegro.pe/wp-content/uploads/2020/04/22203358/Bodegas-Per%C3%BA-1.jpg', 'Bodega 4', "Talara 1365", "980866911", "4", "127"), -12.0260507, -77.0178732, 3, markerIcon],
        //     [locationData('https://delifazil.com/', 'Bodega Delifazil', 'https://cloudfront-us-east-1.images.arcpublishing.com/elcomercio/PLLNGGZRBRBA3EZVL4JEFYKABA.jpg', 'Bodega 5', "Calle 356", "980866911", "5", "43"), -12.0268667, -77.0178892, 4, markerIcon],
        //     // [locationData('listing-single.html', 'Hotels', '', 'El Fanático', "70 Bright St, Jersey City, NJ", "+38099231212", "4", "7"), lu, longu, 5, markerIconUser],
        //     [locationData('https://delifazil.com/', 'Mi tiendita', 'https://static.mercadonegro.pe/wp-content/uploads/2020/04/22203358/Bodegas-Per%C3%BA-1.jpg', 'Bodega 6', "123 Calle nueva", "980866911", "3", "4"), -12.0286187, -77.0164489, 6, markerIcon],
        //     // [locationData('listing-single2.html', 'Hotels', 'images/all/22.jpg', 'Fancy Hotel', "Mt Carmel Pl, New York, NY", "+38099231212", "5", "3"), 40.58423508, -73.96099091, 7, markerIcon],
        //     // [locationData('listing-single2.html', 'Hotels', 'images/all/7.jpg', 'Luxary Hotel-Spa', "1-30 Hunters Point Ave, Long Island City, NY", "+38099231212", "5", "12"), 40.58110616, -73.97678375, 8, markerIcon],
        //     // [locationData('listing-single3.html', 'Conference and Events', 'images/all/16.jpg', 'Web Design Event ', "726-1728 2nd Ave, New York, NY", "+38099231212", "5", "17"), 40.73112881, -74.07897948, 9, markerIcon],
        //     // [locationData('listing-single3.html', 'Gym - Fitness', 'images/all/3.jpg', 'Gym in the Center', "9443 Fairview Ave, North Bergen, NJ", "+38099231212", "4", "11"), 40.67386831, -74.10438536, 10, markerIcon],
        // ];
        
        navigator.geolocation.getCurrentPosition(function(position){ 
            // moveToLocation(position.coords.latitude, position.coords.longitude);
            var l=position.coords.latitude;
            var lo= position.coords.longitude;
            //  myLatlng2['lat'] = l;
            //  myLatlng2['lng'] = lo;
             mainMap(l,lo);
            // myLatlng2 = {nom:l};
            // console.log(myLatlng2.nom);
        });
         
         const myLatlng2 = {lat : lu,lng:longu };
        
  
         // Añadir el marcador al mapa con una llamada a setMap();
         marker.setMap(map);
        //  const myLatlng = {lat: -12.0287106, lng: -77.01610529999999}; 
        //  console.log(myLatlng2);
        //  console.log(myLatlng);
        //marcador
         // a este marcador le añadimos un icono personalizado
      
        var map = new google.maps.Map(document.getElementById('map-main'), {           
            zoom: 19,
            scrollwheel: false,
            center:myLatlng2,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            fullscreenControl: true,
            navigationControl: false,
            streetViewControl: false,
            animation: google.maps.Animation.BOUNCE,
            gestureHandling: 'cooperative',
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#444444"
                }]
            }]
        });
        

        var boxText = document.createElement("div");
        boxText.className = 'map-box'
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: true,
            alignBottom: true,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-145, -45),
            zIndex: null,
            boxStyle: {
                width: "260px"
            },
            closeBoxMargin: "0",
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };
        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];


        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: locations[i][4],
                id: i
            });
            allMarkers.push(marker);
            var ib = new InfoBox();
            google.maps.event.addListener(ib, "domready", function () {
                cardRaining()
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    ib.setOptions(boxOptions);
                    boxText.innerHTML = locations[i][0];
                    ib.close();
                    ib.open(map, marker);
                    currentInfobox = marker.id;
                    var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                    map.panTo(latLng);
                    map.panBy(0, -180);
                    google.maps.event.addListener(ib, 'domready', function () {
                        $('.infoBox-close').click(function (e) {
                            e.preventDefault();
                            ib.close();
                        });
                    });
                }
            })(marker, i));
        }
        var options = {
            imagePath: 'images/',
            styles: clusterStyles,
            minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options);
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });

        $('.nextmap-nav').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            if (index + 1 < allMarkers.length) {
                google.maps.event.trigger(allMarkers[index + 1], 'click');
            } else {
                google.maps.event.trigger(allMarkers[0], 'click');
            }
        });
        $('.prevmap-nav').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            if (typeof (currentInfobox) == "undefined") {
                google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
            } else {
                var index = currentInfobox;
                if (index - 1 < 0) {
                    google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
                } else {
                    google.maps.event.trigger(allMarkers[index - 1], 'click');
                }
            }
        });
        $('.map-item').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
            google.maps.event.trigger(allMarkers[marker_index], "click");
            if ($(this).hasClass("scroll-top-map")) {
                $('html, body').animate({
                    scrollTop: $(".map-container").offset().top + "-80px"
                }, 500)
            }
            else if ($(window).width() < 1064) {
                $('html, body').animate({
                    scrollTop: $(".map-container").offset().top + "-80px"
                }, 500)
            }
        });
        // Scroll enabling button
        var scrollEnabling = $('.scrollContorl');

        $(scrollEnabling).click(function (e) {
            e.preventDefault();
            $(this).toggleClass("enabledsroll");

            if ($(this).is(".enabledsroll")) {
                map.setOptions({ 'scrollwheel': true });
            } else {
                map.setOptions({ 'scrollwheel': false });
            }
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);

        function ZoomControl(controlDiv, map) {
            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                map.setZoom(map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                map.setZoom(map.getZoom() - 1);
            });
        }


    }
    var map = document.getElementById('map-main');
    if (typeof (map) != 'undefined' && map != null) {
        google.maps.event.addDomListener(window, 'load', mainMap);
    }

    function singleMap() {
       
        var myLatLng = {
            lng: $('#singleMap').data('longitude'),
            lat: $('#singleMap').data('latitude'),
        };
        var single_map = new google.maps.Map(document.getElementById('singleMap'), {
            zoom: 14,
            center: myLatLng,
            scrollwheel: false,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            navigationControl: false,
            streetViewControl: false,
            styles: [{
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#f2f2f2"
                }]
            }]
        });
        var markerIcon2 = {
            url: 'images/marker.png',
        }
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: single_map,
            icon: markerIcon2,
            title: 'Our Location'
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, single_map);

        function ZoomControl(controlDiv, single_map) {
            zoomControlDiv.index = 1;
            single_map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                single_map.setZoom(single_map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                single_map.setZoom(single_map.getZoom() - 1);
            });
        }
    }
    var single_map = document.getElementById('singleMap');
    if (typeof (single_map) != 'undefined' && single_map != null) {
        google.maps.event.addDomListener(window, 'load', singleMap);
    }
})(this.jQuery);