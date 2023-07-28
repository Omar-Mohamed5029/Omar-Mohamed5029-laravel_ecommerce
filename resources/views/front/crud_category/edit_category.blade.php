@extends('front.layouts.app')
@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Edit Category</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><h1><a href="index.html">categroy name</a></h1></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
      
    <div class="container" data-aos="fade-up">

    <br>
    <form action="{{route('allcategories.update', $category->id)}}"  method="POST">
    @csrf
    @method('put')
  <div class="mb-3">
    <input type="name" class="form-control" name="name" value="{{$category->name}}" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
    </div>
    @if(session('success')!= null)
                    <div class="alert alert-success">{{session('success')}}</div>
                  @endif
   

   
  
  </main>
  <br>


@endsection

