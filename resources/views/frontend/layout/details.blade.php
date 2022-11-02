@extends('Frontend.master')
@section('content')
<div class="Form my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card border-2 bg-light">
                    <div class="card body">
                        <img src="{{asset('/uploads/medicine/'.$medicine->upload)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h3>{{$medicine->medicine_name}}</h3>
                <h5>Price:৳{{$medicine->price}}</h5>
                <div class="product-quantity my-2">
                    <!-- <span>Quantity</span> -->
                    <div class="d-flex flex-row">
                        Quantity
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
                </div>
                <a class="btn btn-outline-light  bg-success  text-light" href="">In stock</a>
                <a class="btn btn-outline-light  bg-secondary  text-light" href="{{route('cart')}}">Add to cart</a>
            </div>
            <div>{{$medicine->specification}}</div>
        </div>

    <!-- <div class=" text-center px-2 py-2">
        <h1>Medicine Specifications</h1>
    </div> -->

<!-- <div class="specification">
    <div>
        <h3>Information about Napa 500mg 10pcs</h3>
    </div>
    <table class="table bg-light">
        <thead>
            <tr>
                <th scope="col">field</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Paracetamol is indicated in:</td>
                <td>
                    <ul>
                        <li>Fever,common cold and influenza.</li>
                        <li>Headache,toothache, earache, bodyache, myalgia, dysmenorrhoea, neuralgia and sprains.</li>
                        <li>Pain of colic, back pain, post-operative pain, postpartum pain, chronic pain of cancer,
                            inflammatory pain, and post-vaccination pain and fever of children.</li>
                        <li>Rheumatism and osteoarthritic pain & stiffness of joints in fingers, hips, knees wrists,
                            elbows, feet,ankles and top & bottom of the spine.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Dosage:</td>
                <td scope="row">
                    <ul>
                        <li>Adult:1-2 tablets every 4 to 6 hours up to a maximum of 4 gm (8
                            tablets)daily.</li>
                        <li>Children (6-12 years):½ to 1 tablet 3 to 4 times daily. For long term
                            treatment it is wise not to exceed the dose beyond 2.6 gm/day.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Extended Release Tablet</td>
                <td scope="row">
                    <ul>
                        <li>Adults & Children over 12 years:Two tablets, swallowed whole, every 6 to 8
                            hours(maximum of 6 tablets in any 24 hours).The tablet must not be crushed.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Side Effects:</td>
                <td scope="row">
                    <ul>
                      <li>Side effects of paracetamol are usually mild, though haematological reactions including
                            thrombocytopenia, leucopenia, pancytopenia, neutropenia, and agranulocytosis have been
                            reported.Pancreatitis,skin rashes, and other allergic reactions occur occasionally.</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table> -->
    <!-- <ul>
        <strong>Information about Napa 500mg 10pcs</strong>
        <li><strong>Paracetamol is indicated in:</strong></li>
        <ul>
            <li>Fever,common cold and influenza.</li>
            <li>Headache,toothache, earache, bodyache, myalgia, dysmenorrhoea, neuralgia and sprains.</li>
            <li>Pain of colic, back pain, post-operative pain, postpartum pain, chronic pain of cancer, inflammatory
                pain, and post-vaccination pain and fever of children.</li>
            <li>Rheumatism and osteoarthritic pain & stiffness of joints in fingers, hips, knees, wrists, elbows, feet,
                ankles and top & bottom of the spine.</li>
        </ul>
        <li><strong>Dosage:</strong></li>
        <ul>
            <li><strong>Adult:</strong>1-2 tablets every 4 to 6 hours up to a maximum of 4 gm (8 tablets) daily.</li>
            <li><strong>Children (6-12 years):</strong>½ to 1 tablet 3 to 4 times daily. For long term treatment it is
                wise not to exceed the dose beyond 2.6 gm/day.</li>
        </ul>
        <li><strong>Extended Release Tablet</strong></li>
        <ul>
            <li><strong>Adults & Children over 12 years:</strong>Two tablets, swallowed whole, every 6 to 8 hours
                (maximum of 6 tablets in any 24 hours).The tablet must not be crushed.</li>
        </ul>

        <li><strong>Side Effects:</strong>Side effects of paracetamol are usually mild, though haematological reactions
            including thrombocytopenia, leucopenia, pancytopenia, neutropenia, and agranulocytosis have been reported.
            Pancreatitis,skin rashes, and other allergic reactions occur occasionally.</li>

    </ul> -->
</div>

</div>
@endsection