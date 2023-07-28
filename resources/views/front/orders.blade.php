@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Orders</h2>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Breadcrumbs -->
  <br>
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Your Orders</span>
        <h2>Your Orders</h2>

      </div>

      <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">product name</th>
        <th scope="col">product image</th>
        <th scope="col">categroy name</th>
        <th scope="col">price</th>
        <!-- <th scope="col">edit</th> -->
        <th scope="col">delete</th>

      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$order->product->name}}</td>
        <td><div class="card-img">
              <img src="{{asset('front/uploads/'.$order->product->image)}}" style="width:50px; height:50px;" alt="" class="img-fluid">
            </div></td>
        <td>{{$order->product->category->name}}</td>
        <td>{{$order->product->price}}</td>
        <!-- <td><a class="btn btn-info me-3" href="">edit</a></td> -->
        <td>
          <form action="{{route('order.destroy',$order->id) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger me-3">delete
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    </div>
  </section>
  <br>
  @if(session('success')!= null)
  <div class="alert alert-success">{{session('success')}}</div>
  <br>
  @endif

</main>




@endsection