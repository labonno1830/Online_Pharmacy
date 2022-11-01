@extends('Frontend.master')
@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-6">
            <div class="receipt-left">
                <img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
            </div>
        </div> -->
        <div class="col-md-6 text-right">
            <div class="receipt-right">
                <h5>Online Pharmacy</h5>
                <p>017######## <i class="fa fa-phone"></i></p>
                <p>epharma@gmail.com <i class="fa fa-envelope-o"></i></p>
                <p>Bangladesh <i class="fa fa-location-arrow"></i></p>
            </div>
        </div>
        <div class=" col-md-6 text-left">
            <div class="receipt-right">
                <h5>Customer Name </h5>
                <p><b>Mobile :</b> 01#########</p>
                <p><b>Email :</b> customer@gmail.com</p>
                <p><b>Address :</b> Dhaka, Bangladesh</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="receipt-left">
            <h3>INVOICE # 102</h3>
        </div>
    </div>
</div>
            <div>
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>napa</td>
                            <td><i class="fa fa-inr"></i> ৳76.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>fexo</td>
                            <td><i class="fa fa-inr"></i>৳76.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>adovas</td>
                            <td><i class="fa fa-inr"></i>৳76.00</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>Delivery Fees: </strong>
                            </p>
							<p>
                                <strong>Payable Amount: </strong>
                            </p>
							<p>
                                <strong>Balance Due: </strong>
                            </p>
							</td>
                            <td>
                            <p>
                                <strong><i class="fa fa-inr"></i> ৳76.00</strong>
                            </p>
                            <p>
                                <strong><i class="fa fa-inr"></i> ৳76.00</strong>
                            </p>
							<p>
                                <strong><i class="fa fa-inr"></i> ৳76.00</strong>
                            </p>
							<p>
                                <strong><i class="fa fa-inr"></i>৳76.00</strong>
                            </p>
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-primary"><h2><strong>৳76.00</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
			<div class="row">
                <p><b>Date :</b> 15 Aug 2022</p>
				<h5 style="color: rgb(140, 140, 140);">Thanks for purchasing.!</h5>
            </div>
</div>    
@endsection 