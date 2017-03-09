var ContactPage = function() {

    return {

        //Basic Map
        initMap: function() {
            var map;
            $(document).ready(function() {
                map = new GMaps({
                    div: '#map',
                    scrollwheel: false,
                    lat: 16.0461356,
                    lng: 108.1842931
                });

                var marker = map.addMarker({
                    lat: 16.0461356,
                    lng: 108.1842931,
                    title: 'Dịch Vụ Tiệc Thủy Bộ.'
                });
            });
        },

        //Panorama Map
        initPanorama: function() {
            var panorama;
            $(document).ready(function() {
                panorama = GMaps.createPanorama({
                    el: '#panorama',
                    lat: 16.0461356,
                    lng: 108.1842931
                });
            });
        }

    };
} ();
