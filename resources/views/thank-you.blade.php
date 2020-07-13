@extends("layout.app")

@section("main")
<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-12 col-md-6 offset-md-3">
        <h1 class ="margin-top-negative-5">grazie signor {{$name}} verrai contattato al piu presto</h1>
        <a href="{{route('index')}}"><-- Torna alla home</a>
        </div>
    </div>
</div>

@endsection

@push("style")
<style>
    body{
        height:100vh;
        position:relative;
    }
    footer{
        position:absolute;
        bottom:0;
        left:0;
        width:100%;
    }
    .margin-top-negative-5{
        margin-top:-10rem;
    }
</style>
@endpush