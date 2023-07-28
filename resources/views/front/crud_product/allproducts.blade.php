@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>All Products</h2>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Breadcrumbs -->
  <br>
  <div class="container" data-aos="fade-up">
    <a href="{{route('allproducts.create')}}">create product</a>
    <br>
  </div>
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
            <h3><a>{{$product->name}}</a></h3>
            <p>{{$product->price}} $</p>
            <p>{{$product->description}}</p>
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="text-center">
                    <!-- <button type="submit" class="btn btn-info">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button> -->
                    <a class="btn btn-info me-3" href="{{route('allproducts.edit', $product->id) }}">edit</a>
                    <br>
                    <form action="{{ route('allproducts.destroy',$product->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger me-3">Delete</button>
                    </form>
                  </div>
                  <br>
                </div>
              </div>
            </div>
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