@extends("layout.app")

@section("title")
Chi siamo
@endsection


@section("main")

<div class="container">
    <h1 class="py-5">Conosci il nostro team di esperti</h1>
    <div class="row">
        @foreach($workers as $worker)
      <div class="col-lg-4 my-4">
        <figure class="text-center">
            <img class="rounded-circle" src="{{$worker['img']}}"alt="Generic placeholder image" width="140" height="140">
        </figure>
        <h2 class="text-center">{{$worker["name"]}}</h2>
        <h4 class="text-center text-secondary" >{{$worker["job"]}}</h4>
        <p>{{$worker["details"]}}</p>
      </div><!-- /.col-lg-4 -->
        @endforeach
    </div>
    <!-- /row -->
</div>


@endsection

@push("style")

@endpush