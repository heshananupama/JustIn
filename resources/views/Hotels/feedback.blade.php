@extends('Hotels/index')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">

                <div class="jumbotron jumbotron-xs"
                     style="height: 40px; background-color:#339966;margin-top:2%;color:white;">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <h1 class="h2" style="margin-top:-2.5%;font-size: 40px;text-align: left">
                                Complains & Reviews
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3><u>Hotel Reviews</u></h3><br><br>

                </div>
                <div class="col-sm-6">

                </div>
            </div>
            <div class="row">

                @foreach($reviewItems as $reviewItem)
                    @if($reviewItem->feedbackType=='Review')

                        <div class="container">

                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">
                                <div class="thumbnail">
                                    <img class="img-responsive user-photo" src="/images/user.png">
                                </div><!-- /thumbnail -->
                            </div><!-- /col-sm-1 -->

                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <strong>{{$reviewItem->name}}</strong> <span
                                                class="text-muted">Purchased on {{ $reviewItem->created_at}}</span>
                                    </div>
                                    <div class="panel-body">
                                        {{$reviewItem->description}}

                                    </div>
                                    <div>
                                        <div style="margin: 0px;" class="stars starrr"
                                             data-rating="{{$reviewItem->rating}}"></div>
                                    </div>
                                </div>
                                <!-- /panel-body -->
                            </div><!-- /panel panel-default -->


                            <div class="col-sm-3">

                            </div>


                        </div><!-- /row -->
                    @endif
                @endforeach
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><u>Hotel Complains</u></h3><br><br>

                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-7">
                        <div class="table-responsive ">
                            <table class="table table-bordered  table-inverse" id="spareTable">


                                <tr>
                                    <th>Complain Id</th>
                                    <th>Date</th>
                                    <th>Complain</th>
                                    <th>Customer Name</th>
                                    <th>Complain Image</th>


                                </tr>
                                <tbody id="tableModel">

                                @foreach($reviewItems as $reviewItem)
                                    @if($reviewItem->feedbackType=='Complain')
                                        <tr>
                                            <td>{{$reviewItem->id}}</td>
                                            <td>{{$reviewItem->created_at}}</td>
                                            <td>{{$reviewItem->description}}</td>
                                            <td>{{$reviewItem->name}}</td>

                                            <td>
                                                <div class="image">
                                                    <a href="{{ asset("Images/bathroom.jpg") }}"><img
                                                                style="width: 50px;height: 50px;"
                                                                src='{{ asset("Images/bathroom.jpg") }}'></a>
                                                </div>
                                            </td>


                                        </tr>

                                    @endif
                                @endforeach
                                </tbody>


                            </table>

                        </div>

                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection