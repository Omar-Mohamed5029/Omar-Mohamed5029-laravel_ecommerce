@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>All Users</h2>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Breadcrumbs -->
  <br>
  <!-- <div class="container" data-aos="fade-up">
    <a href="{{route('allcategories.create')}}">Admin Control</a>
    <br>
  </div> -->
  <br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user name</th>
        <th scope="col">user email</th>
        <th scope="col">user Status</th>
        <th scope="col">edit user</th>
        <th scope="col">delete user</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      @if($user->type != 'superadmin')
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->type}}</td>
        @if($user->type=='user')
        <td>
          <form action="{{route('user.update', $user->id)}}" method="post">
          @csrf
          @method('put')
          <button type="submit" class="btn btn-primary">make admin</button>
          </form>
        </td>
        @else
        <td>
          <form action="{{route('user.update', $user->id)}}" method="post">
          @csrf
          @method('put')
          <button type="submit" class="btn btn-primary">make user</button>
          </form>
              </td>
        @endif
        <td>
          <form action="" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger me-3">delete
            </button>
          </form>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  @if(session('success')!= null)
  <div class="alert alert-success">{{session('success')}}</div>
  @endif



</main>


@endsection