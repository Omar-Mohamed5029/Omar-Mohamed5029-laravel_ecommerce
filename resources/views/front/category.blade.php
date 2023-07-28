@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>{{$category_name}}</h2>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Breadcrumbs -->
  <br>
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Our Products</span>
        <h2>Our Products</h2>

      </div>

      <div class="row gy-4">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('front/uploads/'.$product->image)}}" alt="" class="img-fluid">
            </div>
            <h3><a href="{{url('showproduct',$product->id)}}">{{$product->name}}</a></h3>
            <p>{{$product->price}} $</p>
            <p>{{$product->description}}</p>
           
            <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" value="{{$product->id}}" name="product_id">
              @csrf
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">add to cart</button>
              </div>
            </form>

            <!-- <br>
            <br>
           
            <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" value="{{$product->id}}" name="product_id">
              @csrf
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Buy</button>
              </div>
            </form> -->
          </div>
        </div>
        <!-- End Card Item -->
        @endforeach

      </div>

    </div>
  </section>
  <br>
  @if(session('success')!= null)
  <div class="alert alert-success">{{session('success')}}</div>
  <br>
  @endif

</main>




@endsection