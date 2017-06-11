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
                            @if(!empty($images))
                            <?php $a=0?>
                            @foreach($images as $image)
                            <li class="col-sm-3">
                                <a href="{{ asset("Images/hotels/$image->imagePath") }}" class="thumbnail" id="carousel-selector-{{$a}}">
                                    <img  src="{{ asset("Images/hotels/$image->imagePath") }}">
                                </a>
                            </li>
                                @endforeach
@endif

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-xs-12" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-sm-12" id="carousel-bounding-box">
                                    <div style="height: 400px;width: 400px;" class="carousel slide" id="myCarousel">

                                        <!-- Carousel items -->
                                        <div style="height: 400px;width: 400px;" class="carousel-inner">

                                            <?php $a=0?>
                                            @foreach($images as $image)
                                                @if($a==0)
                                            <div class="active item" data-slide-number="{{$a}}">
                                                <img src="{{ asset("Images/hotels/$image->imagePath") }}"></div>
                                                    <?php $a++?>
                                                    @else
                                                        <div class="item" data-slide-number="{{$a}}">
                                                            <img src="{{ asset("Images/hotels/$image->imagePath") }}"></div>
                                                        <?php $a++?>

                                                    @endif
                                                @endforeach

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
                                <button type="submit" class="btn btn-success btn-md" onclick="">Save</button>
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