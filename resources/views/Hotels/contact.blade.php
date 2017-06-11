<style>
    #map-canvas {
        width: 460px;
        height: 250px;
    }
</style>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_H4G3KU6X_JByVcwMpiDYY9Mc7GKcJXY&libraries=places"
        type="text/javascript"></script>

@extends('Hotels/index')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">

                <div class="jumbotron jumbotron-xs"
                     style="height: 50px; background-color:#339966;margin-top:2%;color:white;">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <h1  class="h2" style="margin-top:-2.5%;font-size: 50px;text-align: left">
                                Profile
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if(!empty($contact))
                <form role="form" action="/hotels/contact/save" method="post">{{ csrf_field() }}
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="well">

                                <h3 style="line-height:20%;"><i class="fa fa-home fa-1x"
                                                                style="line-height:6%;color:#339966"></i> Address:</h3>
                                <input name="address" class="form-control" style="margin-top:6%;line-height:35%"
                                       value="{{$contact->address}}"
                                />
                                <br/>
                                <br/>
                                <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x"
                                                                style="line-height:6%;color:#339966"></i> E-Mail
                                    Address:</h3>
                                <input name="email" class="form-control" style="margin-top:6%;line-height:35%"
                                       value="{{$contact->email}}"/>
                                <br/>
                                <br/>
                                <h3 style="line-height:20%;"><i class="fa fa-user fa-1x"
                                                                style="line-height:6%;color:#339966"></i> Person in
                                    charge:</h3>
                                <input name="name" class="form-control" style="margin-top:6%;line-height:35%"
                                       value="{{$contact->personInCharge}}"/>
                                <br/>
                                <br/>
                                <h3 style="line-height:20%;"><i class="fa fa-phone fa-1x"
                                                                style="line-height:6%;color:#339966"></i> Telephone:
                                </h3>
                                <input name="tel" class="form-control" style="margin-top:6%;line-height:35%"
                                       value="{{$contact->telephone}}"/>
                                <br/>
                                <br/>
                                <h3 style="line-height:20%;"><i class="fa fa-globe fa-1x"
                                                                style="line-height:6%;color:#339966"></i> Website:</h3>
                                <input name="web" class="form-control" style="margin-top:6%;line-height:35%"
                                       value="{{$contact->website}}"/><br>


                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="">Map</label>
                                <input class="form-control" type="text" id="searchmap"><br>
                                <div id="map-canvas"></div>
                            </div>

                            <div class="form-group">
                                <label for="">Latitude</label>
                                <input type="text" class="form-control input-sm" name="lat" id="lat" value="{{$contact->latitude}}">
                            </div>

                            <div class="form-group">
                                <label for="">Longitude</label>
                                <input type="text" class="form-control input-sm" name="lng" id="lng"  value="{{$contact->longitude}}">
                            </div>

                            <button type="submit" class="btn btn-sm btn-danger col-sm-4 col-sm-offset-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            @elseif(empty($contact))
                     <form role="form" action="/hotels/contact/save" method="post">{{ csrf_field() }}
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="well">

                                    <h3 style="line-height:20%;"><i class="fa fa-home fa-1x"
                                                                    style="line-height:6%;color:#339966"></i> Address:</h3>
                                    <input name="address" class="form-control" style="margin-top:6%;line-height:35%"
                                           value=" "
                                    />
                                    <br/>
                                    <br/>
                                    <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x"
                                                                    style="line-height:6%;color:#339966"></i> E-Mail
                                        Address:</h3>
                                    <input name="email" class="form-control" style="margin-top:6%;line-height:35%"
                                           value=" "/>
                                    <br/>
                                    <br/>
                                    <h3 style="line-height:20%;"><i class="fa fa-user fa-1x"
                                                                    style="line-height:6%;color:#339966"></i> Person in
                                        charge:</h3>
                                    <input name="name" class="form-control" style="margin-top:6%;line-height:35%"
                                           value=" "/>
                                    <br/>
                                    <br/>
                                    <h3 style="line-height:20%;"><i class="fa fa-phone fa-1x"
                                                                    style="line-height:6%;color:#339966"></i> Telephone:
                                    </h3>
                                    <input name="tel" class="form-control" style="margin-top:6%;line-height:35%"
                                           value=" "/>
                                    <br/>
                                    <br/>
                                    <h3 style="line-height:20%;"><i class="fa fa-globe fa-1x"
                                                                    style="line-height:6%;color:#339966"></i> Website:</h3>
                                    <input name="web" class="form-control" style="margin-top:6%;line-height:35%"
                                           value=" "/><br>


                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">Map</label>
                                    <input class="form-control" type="text" id="searchmap"><br>
                                    <div id="map-canvas"></div>
                                </div>

                                <div class="form-group">
                                    <label for="">Latitude</label>
                                    <input type="text" class="form-control input-sm" name="lat" id="lat" value="">
                                </div>

                                <div class="form-group">
                                    <label for="">Longitude</label>
                                    <input type="text" class="form-control input-sm" name="lng" id="lng"  value=" ">
                                </div>

                                <button type="submit" class="btn btn-sm btn-danger col-sm-4 col-sm-offset-4">Save</button>
                            </div>
                        </div>
                    </form>
        </div>

@endif
        </div>


    <script>


        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: 6.927078600000002,
                lng: 79.86124300000006
            },
            zoom: 15
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 6.927078600000002,
                lng: 79.86124300000006
            },
            map: map,
            draggable: true
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox, 'places_changed', function () {

            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location); //set marker position new...
            }

            map.fitBounds(bounds);
            map.setZoom(15);

        });

        google.maps.event.addListener(marker, 'position_changed', function () {

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);

        });

    </script>
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Nav tabs -->
            <div class="card">


                <!-- Tab panes -->

            </div>
        </div>
    </div>
</div>