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
                                Gallery
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-sm-6" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            @foreach()
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-0">
                                    <img src="http://placehold.it/150x150&text=zero">
                                </a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                            </li>
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                            </li>
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                            </li>
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-xs-12" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-sm-12" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="http://placehold.it/470x480&text=zero"></div>

                                            <div class="item" data-slide-number="1">
                                                <img src="http://placehold.it/470x480&text=1"></div>

                                            <div class="item" data-slide-number="2">
                                                <img src="http://placehold.it/470x480&text=2"></div>

                                            <div class="item" data-slide-number="3">
                                                <img src="http://placehold.it/470x480&text=3"></div>

                                            <div class="item" data-slide-number="4">
                                                <img src="http://placehold.it/470x480&text=4"></div>

                                            <div class="item" data-slide-number="5">
                                                <img src="http://placehold.it/470x480&text=5"></div>

                                            <div class="item" data-slide-number="6">
                                                <img src="http://placehold.it/470x480&text=6"></div>

                                            <div class="item" data-slide-number="7">
                                                <img src="http://placehold.it/470x480&text=7"></div>

                                            <div class="item" data-slide-number="8">
                                                <img src="http://placehold.it/470x480&text=8"></div>

                                            <div class="item" data-slide-number="9">
                                                <img src="http://placehold.it/470x480&text=9"></div>

                                            <div class="item" data-slide-number="10">
                                                <img src="http://placehold.it/470x480&text=10"></div>

                                            <div class="item" data-slide-number="11">
                                                <img src="http://placehold.it/470x480&text=11"></div>

                                            <div class="item" data-slide-number="12">
                                                <img src="http://placehold.it/470x480&text=12"></div>

                                            <div class="item" data-slide-number="13">
                                                <img src="http://placehold.it/470x480&text=13"></div>

                                            <div class="item" data-slide-number="14">
                                                <img src="http://placehold.it/470x480&text=14"></div>

                                            <div class="item" data-slide-number="15">
                                                <img src="http://placehold.it/470x480&text=15"></div>
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Slider-->
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <form enctype="multipart/form-data" action="{{url('/hotels/gallery/image')}}"
                              method="post" >{{ csrf_field() }}
                            <label class="control-label">Select More Images to upload:</label>



                            <div class="text-center">
                                <input style="margin-left: 225px;" value="{{old('hotelImage')}}" type="file" name="hotelImage" id="image">
                                <button type="submit" class="btn btn-info btn-md" onclick="">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">

                    </div>

                </div>

            </div>
        </div>
        </div>
@endsection