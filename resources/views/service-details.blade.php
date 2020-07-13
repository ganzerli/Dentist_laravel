@extends("layout.app")

@section("main")

<div class="container">
  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Dettagli
    <small>del servizion selezionato</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row py-5">

    <div class="col-md-8">
      <img class="img-fluid" src="{{$service['img']}}" alt="">
      <h3 class="my-3">Prezzo</h3>
      <p class="lead">{{$service["price"]}} €</p>
    </div>

    <div class="col-md-4">
      <h3 class="my-3">{{$service["title"]}}</h3>
      <p class="lead">{{$service["description"]}}</p>
      <h3 class="my-3">Piú dettagli</h3>
      <p>{{$service["details"]}}</p>
    </div>

  </div>
  <!-- /.row -->

</div>


@endsection