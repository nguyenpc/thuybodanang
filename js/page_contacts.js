var ContactPage = function () {

    return {

        //Basic Map
        initMap: function () {
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    div: '#map',
                    scrollwheel: false,
                    lat: 16.045959,
                    lng: 108.184373,
                    zoom: 16,
                });
                var marker = map.addMarker({
                    lat: 16.045959,
                    lng: 108.184373,
                    title: 'Dịch Vụ Tiệc Thủy Bộ Đà Nẵng.'
                });
            });
        },

        //Panorama Map
        initPanorama: function () {
            var panorama;
            $(document).ready(function () {
                panorama = GMaps.createPanorama({
                    el: '#panorama',
                    lat: 16.045959,
                    lng: 108.184373,
                });
            });
        }
    };
}();
