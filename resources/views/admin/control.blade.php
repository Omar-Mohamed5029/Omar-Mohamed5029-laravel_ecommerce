@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Controls</h2>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Breadcrumbs -->
       <br>
  <div class="container" data-aos="fade-up">
    <a href="{{url('admin/allcategories')}}"><h3> Categories control</h3></a>
    <br>
    <br>  
     <br>
    <a href="{{url('admin/allproducts')}}"><h3>  Products control</h3> </a>
    <br>
    <br>  
     <br>
    <a href="{{url('/admin/allmessages')}}"><h3> Message control</h3></a> 
    <br>  
    <br>
    <br>
    <a href="{{url('/admin/alloffers')}}"><h3> Offer control</h3></a> 
    <br> 
    <br>
    <br>
    <a href="{{url('/admin/allorders')}}"><h3> order control</h3></a> 
    <br> 
     
     @if(Auth::user()->type === 'superadmin')
     <br>
     <br>
     <a href="{{url('control/user')}}"> <h3>user control</h3></a> 
     <br>  
     <br>
     @endif
    
  </div>

  <br>


  @if(session('success')!= null)
                    <div class="alert alert-success">{{session('success')}}</div>
                  @endif



</main>


@endsection