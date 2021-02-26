/* eslint-disable */

const loadGoogleMapsApi = require('load-google-maps-api')
import mapStyle from '../util/mapStyle';

const CONFIG = {
    ELEM: '[google-map2]',
};

const Gmap = {
    init() {
        const { ELEM } = CONFIG;

        this.elem = document.querySelector(ELEM);

        if (this.elem) {
            this.pins = JSON.parse(this.elem.dataset.pins);
            console.log('Init Google Map: ', this.pins);
            this.initMap();
        }
    },

    initMap() {
        const elem = this.elem;
        const pins = this.pins;

        loadGoogleMapsApi(
            { 'key': 'AIzaSyDqX_hqXzx0uZS2NcENrA2fkutTyXOHpMo', }
        ).then(function (googleMaps) {

            let map2;

                map2 = new googleMaps.Map(elem, {
                    center: {
                        // lat: pins[0]['pin']['lat'],
                        // lng: pins[0]['pin']['lng'],
                        lat:53.853231,
                        lng: 21.2889702,

                    },
                    zoom: 8,
                    keyboardShortcuts: false,
                    styles: mapStyle,
                });


            pins.forEach(element => {
                const infoWindow = new google.maps.InfoWindow({
                    content: `<div class="map__tooltip">${element.content}</div>`
                });

                const image = element.icon;

                const pin = new googleMaps.Marker({
                    position: {
                        lat: Number(element.pin.lat),
                        lng: Number(element.pin.lng),
                    },
                    map: map2,
                    title: element.title,
                    icon: image,
                });

                googleMaps.event.addListener(pin, 'click', function () {
                    infoWindow.open(map2, pin);
                });

                 console.log(pin);
            });

        }).catch(function (error) {
            console.error(error)
        });
    },
}

export default Gmap;
