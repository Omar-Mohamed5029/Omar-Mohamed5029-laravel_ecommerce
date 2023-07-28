@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Categories</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
    </nav>
  </div><!-- End Breadcrumbs -->

  <div class="container" data-aos="fade-up">

  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">categroy name</th>
        <th scope="col">edit categroy</th>
        <th scope="col">delete categroy</th>

      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$category->name}}</td>
        <td><a class="btn btn-info me-3" href="{{ route('allcategories.edit', $category->id) }}">edit</a></td>
        <td>
          <form action="{{ route('allcategories.destroy',$category->id) }}" method="POST">
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
  @if(session('success')!= null)
                    <div class="alert alert-success">{{session('success')}}</div>
                  @endif



</main>


@endsection