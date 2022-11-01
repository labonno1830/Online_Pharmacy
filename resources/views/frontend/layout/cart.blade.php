@extends('Frontend.master')
@section('content')
<section class="h-100 h-custom">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="h5">Cart</th>
                                <th scope="col">Item name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="backend/img/bandage.jpg" class="img-fluid rounded-3"
                                            style="width: 120px;" alt="Book">
                                        <div class="flex-column ms-4">
                                            <!-- <p class="mb-2">Thinking, Fast and Slow</p> -->
                                            <!-- <p class="mb-0">Daniel Kahneman</p> -->
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle">
                                    <p class="mb-0" style="font-weight: 500;">One Time Bandage</p>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-row">
                                        <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input id="form1" min="0" name="quantity" value="2" type="number"
                                            class="form-control form-control-sm" style="width: 50px;" />

                                        <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0" style="font-weight: 500;">৳76.00</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="border-bottom-0">
                                    <div class="d-flex align-items-center">
                                        <img src="backend/img/napa.jpg" class="img-fluid rounded-3"
                                            style="width: 120px;" alt="Book">
                                        <div class="flex-column ms-4">
                                            <!-- <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                      <p class="mb-0">Yuval Noah Harari</p> -->
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle border-bottom-0">
                                    <p class="mb-0" style="font-weight: 500;">Napa</p>
                                </td>
                                <td class="align-middle border-bottom-0">
                                    <div class="d-flex flex-row">
                                        <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input id="form1" min="0" name="quantity" value="1" type="number"
                                            class="form-control form-control-sm" style="width: 50px;" />

                                        <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="align-middle border-bottom-0">
                                    <p class="mb-0" style="font-weight: 500;">৳20</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                                <form>
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel1v" value="" aria-label="..." checked />
                                        </div>
                                        <div class="rounded border w-100 p-3">
                                            <p class="d-flex align-items-center mb-0">Cash on delivery</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel2v" value="" aria-label="..." />
                                        </div>
                                        <div class="rounded border w-100 p-3">
                                            <p class="d-flex align-items-center mb-0">bkash</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-6">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeName" class="form-control form-control-lg"
                                                siez="17" placeholder="" />
                                            <label class="form-label" for="typeName">Name</label>
                                        </div>

                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeExp" class="form-control form-control-lg"
                                                placeholder="" size="7" id="exp" minlength="7" maxlength="7" />
                                            <label class="form-label" for="typeExp">Expiration</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeText" class="form-control form-control-lg"
                                                siez="17" placeholder="01*********" minlength="19" maxlength="19" />
                                            <label class="form-label" for="typeText">bkash Number</label>
                                        </div>

                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="password" id="typeText" class="form-control form-control-lg"
                                                placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3"
                                                maxlength="3" />
                                            <label class="form-label" for="typeText">Cvv</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3">
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                    <p class="mb-2">Subtotal</p>
                                    <p class="mb-2">৳96.00</p>
                                </div>

                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                    <p class="mb-0">Shipping</p>
                                    <p class="mb-0">৳50.00</p>
                                </div>

                                <hr class="my-4">

                                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                    <p class="mb-2">Total</p>
                                    <p class="mb-2">৳146.00</p>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Checkout</button>
                                
                <!-- <a class="btn btn-primary btn-block btn-lg " href="{{route('invoice')}}">
                  <div class="d-flex justify-content-between">
                    <span>Checkout</span>
                    <span>৳146.00</span>
                  </div>
                </a> -->

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
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
                                                        <p><strong>Total Amount: </strong></p>
                                                        <p><strong>Delivery Fees: </strong></p>
                                                        <p><strong>Payable Amount: </strong></p>
                                                        <p><strong>Balance Due: </strong></p>
                                                      </td>
                                                      <td>
                                                        <p><strong><i class="fa fa-inr"></i>৳76.00</strong></p>
                                                        <p><strong><i class="fa fa-inr"></i>৳76.00</strong></p>
                                                        <p><strong><i class="fa fa-inr"></i>৳76.00</strong></p>
                                                        <p><strong><i class="fa fa-inr"></i>৳76.00</strong></p>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right">
                                                        <h2><strong>Total: </strong></h2>
                                                      </td>
                                                      <td class="text-left text-primary">
                                                        <h2><strong>৳76.00</strong></h2>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="row">
                                                <p><b>Date :</b> 15 Aug 2022</p>
                                                <h5 style="color: rgb(140, 140, 140);">Thanks for purchasing.!</h5>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <button type="button" class="btn btn-primary btn-block btn-lg">
                  <div class="d-flex justify-content-between">
                    <span>Checkout</span>
                    <span>৳146.00</span>
                  </div>
                </button> -->

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
</section>
@endsection