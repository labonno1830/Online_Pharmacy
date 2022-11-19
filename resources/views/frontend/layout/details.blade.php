@extends('Frontend.master')
@section('content')
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
body {
  overflow: scroll; /* Show scrollbars */
}
</style>
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
                        <span>
                        Quantity
                        </span>
                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="1" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />

                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- <a class="btn btn-outline-light  bg-success  text-light" href="">In stock</a> -->
                <a class="btn btn-outline-light  bg-secondary  text-light" href="{{route('addtocart',$medicine->id)}}">Add to cart</a>
            </div>
            <h3><strong>Medicine Specifications</strong></h3>
            <div>{{$medicine->specification}}</div>
        </div>

        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, debitis reiciendis aliquam laboriosam dolores a quasi sunt porro temporibus. Dolore, tempora? Deleniti accusantium nisi, rerum id doloribus eligendi tempora aliquid, dolore tempore quas temporibus ipsam similique mollitia necessitatibus placeat eaque ab. Cum suscipit, officia exercitationem dignissimos incidunt esse. Velit fuga sed porro aliquam sequi perferendis, id vel aspernatur, culpa quidem, quibusdam quos laboriosam. Libero quis, quam repellendus harum nihil accusantium atque quisquam eveniet architecto modi explicabo iusto consectetur et consequatur placeat iste accusamus quibusdam autem totam impedit natus, molestiae porro repudiandae quo. Nisi numquam, consectetur et, magnam amet a rem, alias facere incidunt quod cumque porro dolor vel unde minima voluptatem iure suscipit perspiciatis debitis non. Impedit explicabo consequatur labore molestiae eligendi aliquid aperiam alias. Vitae esse facere cupiditate tempore amet aliquam quasi aliquid, ipsa voluptate, quibusdam sapiente dolor inventore. Praesentium porro, odio consequatur facere velit sapiente. Hic eius dolorum ut repudiandae aliquam explicabo est expedita non qui quam laborum mollitia, ea temporibus nostrum molestiae earum et dolore veritatis beatae commodi accusantium. Qui aliquid, voluptatem porro quasi amet veniam in alias consequatur ab! Blanditiis quia perferendis dolorum laboriosam sint hic velit ducimus delectus aliquid, et magni, quisquam similique? Recusandae, amet.
        </div>

    
</div>

</div>
@endsection