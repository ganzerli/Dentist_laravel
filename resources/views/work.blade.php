@extends("layout.app")

@section("title")
Cosa facciamo
@endsection


@section("main")


<div class="container">

<!-- Page Heading -->
<h1 class="my-4">Page Heading
  <small>Secondary Text</small>
</h1>


    @foreach($services as $service)
    <!-- Project One -->
    <div class="row py-4">
      <div class="col-md-6">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0 m-auto" src="{{$service['img']}}" alt="">
        </a>
      </div>
      <div class="col-md-6 mt-3">
        <h3>{{$service["title"]}}</h3>
        <p class="lead">{{$service["description"]}}</p>
        <p class="lead">{{$service["price"]}} €</p>
        <a class="btn btn-primary" href="{{route('service-details',['title'=>$service['title']])}}">Vedi dettagli</a>
      </div>
    </div>
    <!-- /.row -->
    @endforeach


</div>
<!-- container -->
@endsection

@push("style")

@endpush