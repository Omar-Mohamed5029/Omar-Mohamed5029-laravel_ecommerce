@extends('front.layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Messages</h2>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Breadcrumbs -->
       <br>
  <br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User Name</th>
        <th scope="col">User Email</th>
        <th scope="col">Message Subject</th>
        <th scope="col">The Message</th>
        <th scope="col">Message status</th>
        <!-- <th scope="col">Delete Message</th> -->

      </tr>
    </thead>
    <tbody>
      @foreach($mymessages as $mymessage)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$mymessage->name}}</td>
        <td>{{$mymessage->email}}</td>
        <td>{{$mymessage->subject}}</td>
        <td>{{$mymessage->message}}</td>
        <td>{{$mymessage->status}}</td>
        <!-- <td>
          <form action="" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger me-3">delete
            </button>
          </form>
        </td> -->
      </tr>
      @endforeach
    </tbody>
  </table>
  @if(session('success')!= null)
                    <div class="alert alert-success">{{session('success')}}</div>
                  @endif



</main>


@endsection