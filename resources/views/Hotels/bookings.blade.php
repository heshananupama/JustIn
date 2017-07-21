@extends('Hotels/index')

@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        <!-- Success messages -->
        <div class="alert alert-success alert-autocloseable-success" id="successMessage">
        </div>

    </div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong> {!! session('flash_message') !!} </strong>
                    </div>
                @endif
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <strong>There were some problems</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif

            </div>
            <h2><strong>Manage Bookings </strong></h2><br>

            <div class="table-responsive ">
                <table class=" table" id="spareTable">


                    <tr>
                        <th style="text-align: center">Booking Id</th>
                        <th style="text-align: center">CustomerName</th>
                        <th style="text-align: center">Telephone</th>
                        <th style="text-align: center">Checking date</th>
                        <th style="text-align: center">Checkout date</th>
                        <th style="text-align: center">RoomType</th>
                        <th style="text-align: center">NoofRooms</th>
                        <th style="text-align: center"> Booking Item Value</th>
                        <th style="text-align: center">Shipping Address</th>
                        <th style="text-align: center">Reservation Status</th>
                        <th>
                            <form enctype="multipart/form-data" action="{{url('/retailer/Bookings/search')}}"
                                  method="post"> {{ csrf_field() }}
                                <input type="text" class="form-control" name="search" placeholder="Search Bookings">
                            </form>
                        </th>

                    </tr>

                    <tbody id="tableModel">

                    @foreach($reservations as $resevation)


                        <tr>

                            <td>{{$resevation->id}} </td>
                            <td> {{$resevation->customerName}}</td>
                            <td>{{$resevation->telephone}} </td>
                            <td>{{$resevation->checkInDate}} </td>

                            <td>{{$resevation->checkOutDate}} </td>
                            <td>{{$resevation->roomType}} </td>
                            <td>{{$resevation->noOfRooms}} </td>
                            <td>{{$resevation->address}} </td>
                            <td>{{$resevation->reservationStatus}} </td>


                            <td>
                                <a style="margin-bottom: 5px;"  class=" btn btn-success btn-xs">Change Status </a>
                            </td>

                        </tr>

                        @endforeach

                     </tbody>


                </table>


            </div>




        </div>


    </div>
    <div class="modal fade bs-example-modal-lg" id="modalBookingItem" tabindex="-1" style="margin-top:130px;" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                    <div id="div-login-msg">
                        <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                        <span id="text-login-msg">Select Booking Item Status.</span>
                    </div>
                </div>
                <div class="modal-body">


                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-10 ">
                                <div class="form-group">

                                    <select  class="form-control" name="BookingItemStatus" id="BookingItemStatus">
                                        <option value="Purchased">Purchased</option>
                                        <option value="Shipped">Shipped</option>
                                        <option value="Delivered">Delivered</option>
                                    </select>
                                    <br>
                                    <input style="display: none" type="text" class="form-control" id="BookingItemId"
                                           value=""/>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-md" onclick="changeBookingStatus()">Save</button>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-1"></div>
                        </div>




                </div>


            </div>
        </div>
    </div>


@endsection