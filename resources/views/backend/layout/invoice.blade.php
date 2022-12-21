@extends('backend.master')
@section('content')

<div class="listbody">
    <div class="container mt-5">
        <div class="row invoice row-printable">
            <div class="col-md-10">
                <!-- col-lg-12 start here -->
                <div class="panel panel-default plain" id="dash_0">
                    <!-- Start .panel -->
                    <div class="panel-body p30">
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <i class="fa-solid fa-2x fa-suitcase-medical"></i>
                                <strong>OMOS</strong>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-from">
                                    <ul class="list-unstyled text-right">
                                        <li> 01810-117100 <i class="fa fa-phone"></i></li>
                                        <li>info@omos.com.bd <i class="fa fa-envelope-o"></i></li>
                                        <li>Bangladesh <i class="fa fa-location-arrow"></i></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-12">
                                
                                <div class="invoice-to mt25">
                                    <ul class="list-unstyled">
                                        <div class="col-md-4">
                                            <div class="receipt-left">
                                                <h3>INVOICE # {{$order->invoice_id}}</h3>
                                            </div>
                                        </div>
                                        <li><strong>Invoiced To</strong></li>
                                        <li>Customer Name : {{$order->name}} </li>
                                        <li>Mobile : {{$order->phone}}</li>
                                        <li>Address : {{$order->address}}</li>

                                    </ul>
                                </div>
                                <div class="invoice-items">
                                    <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="per70 text-right">Product</th>
                                                    <th class="per25 text-right">Quantity</th>
                                                    <th class="per25 text-right">Price</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($sub_orders as $key => $sub_order)
                                                <tr>
                                                    <td>{{$sub_order->med_name}}</td>
                                                    <td>{{$sub_order->quantity}}</td>
                                                    <td>{{$sub_order->price}} ৳</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>

                                                <tr>
                                                    <th colspan="2" class="text-right">Sub Total:</th>
                                                    <th class=>{{$sub_order->sub_total}} ৳</th>
                                                </tr>
                                               
                                                <tr>
                                                    <th colspan="2" class="text-right">Total:</th>
                                                    <th class=>{{$order->total}}     (Delivery Charge 50৳ Added)</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-footer mt25">
                                    <p class="text-center">Thank you for your purchase</p>
                                </div>
                            </div>
                            <!-- col-lg-12 end here -->
                        </div>
                        <!-- End .row -->
                    </div>
                </div>
                <!-- End .panel -->
            </div>
            <!-- col-lg-12 end here -->
        </div>
    </div>
    </div>
</div>
</div>
@endsection