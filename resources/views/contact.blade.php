<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div id='map'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiY2pzaW1lbmUiLCJhIjoiY2tmOGx5cjJiMDYzbTJ1bzV3MG55cXBuZyJ9.QLC-rGKpmSvdZd41KVXHIg';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v10',
        center: [-122.684545, 45.554323], // starting position
        zoom: 12
        });

        var bounds = [[-123.069003, 45.395273], [-122.303707, 45.612333]];
        map.setMaxBounds(bounds);

  
        var canvas = map.getCanvasContainer();


        var start = [-122.684545, 45.554323];


        function getRoute(end) {

        var start = [-122.662323, 45.523751];
        var url = 'https://api.mapbox.com/directions/v5/mapbox/cycling/-122.684545,45.554323;-122.450201,45.55382?geometries=geojson&access_token=pk.eyJ1IjoiY2pzaW1lbmUiLCJhIjoiY2tmOGx5cjJiMDYzbTJ1bzV3MG55cXBuZyJ9.QLC-rGKpmSvdZd41KVXHIg';  
        var req = new XMLHttpRequest();
        req.open('GET', url, true);
        req.onload = function() {
            var json = JSON.parse(req.response);
            var data = json.routes[0];
            var route = data.geometry.coordinates;
            var geojson = {
            type: 'Feature',
            properties: {},
            geometry: {
                type: 'LineString',
                coordinates: route
            }
            };

            if (map.getSource('route')) {
            map.getSource('route').setData(geojson);
            } else { 
            map.addLayer({
                id: 'route',
                type: 'line',
                source: {
                type: 'geojson',
                data: {
                    type: 'Feature',
                    properties: {},
                    geometry: {
                    type: 'LineString',
                    coordinates: geojson
                    }
                }
                },
                layout: {
                'line-join': 'round',
                'line-cap': 'round'
                },
                paint: {
                'line-color': '#3887be',
                'line-width': 5,
                'line-opacity': 0.75
                }
            });
            }
 
        };
        req.send();
        }

        map.on('load', function() {

        getRoute(start);


        map.addLayer({
            id: 'point',
            type: 'circle',
            source: {
            type: 'geojson',
            data: {
                type: 'FeatureCollection',
                features: [{
                type: 'Feature',
                properties: {},
                geometry: {
                    type: 'Point',
                    coordinates: start
                }
                }
                ]
            }
            },
            paint: {
            'circle-radius': 10,
            'circle-color': '#3887be'
            }
        });

        });

        map.on('click', function(e) {
        var coordsObj = e.lngLat;
        canvas.style.cursor = '';
        var coords = Object.keys(coordsObj).map(function(key) {
            return coordsObj[key];
        });
        var end = {
            type: 'FeatureCollection',
            features: [{
            type: 'Feature',
            properties: {},
            geometry: {
                type: 'Point',
                coordinates: coords
            }
            }
            ]
        };
        if (map.getLayer('end')) {
            map.getSource('end').setData(end);
        } else {
            map.addLayer({
            id: 'end',
            type: 'circle',
            source: {
                type: 'geojson',
                data: {
                type: 'FeatureCollection',
                features: [{
                    type: 'Feature',
                    properties: {},
                    geometry: {
                    type: 'Point',
                    coordinates: coords
                    }
                }]
                }
            },
            paint: {
                'circle-radius': 10,
                'circle-color': '#f30'
            }
            });
        }
        getRoute(coords);
        });
    </script>
  </body>
</html>