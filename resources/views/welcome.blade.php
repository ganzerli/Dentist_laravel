@extends("layout.app")

@section("title")
Home
@endsection


@section("main")

<header class="welcome-header">
    <div class="container pt-5 h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-lg-6 pt-2">
             <h1 class="pt-4 text-white">Studio dentistico Buondente</h1>
             <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor errort</p>
             <a href="{{route('contacts')}}" class="btn btn-danger">Contattaci!</a>
            </div>
            <div class="col-12 col-lg-6">
                <img src="/img/main-img.png" class="img-fluid" alt="Responsive  image">
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container py-4">
        <div class="row py-4">
            <!-- card 1 -->
            @foreach($services as $service)
          <div class="col-sm-6">
            <div class="card my-4">
              <div class="card-body">
                <h5 class="card-title">{{$service['title']}}</h5>
                <p class="card-text">{{$service['description']}}</p>
                <a href="{{route('service-details',['title'=>$service['title']])}}" class="btn btn-primary">Vedi dettagli</a>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
    </div>
</section>

<!--  -->
<section class="wavy-top">
    <div class="inner-wave py-5 bg-white">
        <div class="container py-5 h-100">
            <div class="row align-items-center h-100 flex-lg-row">
                <div class="col-12 col-md-6 pt-5">
                    <h2 class="pb-4">Speciale del nostro studio</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta quae reprehenderit non nostrum natus doloribus. Quae modi quidem nostrum voluptatum, dignissimos quasi nulla error impedit blanditiis veniam rerum. Aspernatur, at.Voluptates alias placeat velit in odio impedit sit blanditiis hic ab a voluptatem nisi minima cupiditate nulla veritatis animi deleniti, eveniet ipsum quisquam omnis, vero facere aliquid provident fuga. Dolorum?</p>

                </div>
                <div class="col-12 col-md-6 pt-4">
                <img src="/img/tooth.png" class="img-fluid" alt="dente">
                </div>
            </div>
        </div>
    </div>
    <svg class="svg-wave">
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
        </clipPath>
    </svg>
</section>

<!-- skew for previous section -->
<div class="skew-clip"></div>
<!-- /skew for previous section -->


<section class="testimonials">

    <div class="container py-5">
        <div class="row">
            <h2 class="subtitle col-12 col-md-12 py-4">Chiedi a chiunque ciconosca</h2>
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid mb-3" src="./img/feedback-1.png" alt="testimonial1">
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid mb-3" src="./img/feedback-2.png" alt="testimonial2">
            </div>
        </div>
    </div>

</section>

<!--  -->

@endsection

@push("style")
<style>

.welcome-header{
    height:80vh;
    background: -webkit-linear-gradient(to left top, #6dd5ed, #2193b0); /**chrome */
    background: linear-gradient(to left top, #6dd5ed, #2193b0);
}

@media screen and (max-width: 800px) {
    header img{
        margin-top:-4rem;
    }
}


.nav-height{
    height:0px;
}

.inner-wave {
  clip-path: url(#wave);
}

.svg-wave{
    height:0px;
}

.skew-clip {
    margin-top: -5rem;
    height: 5rem;
    clip-path: polygon(0 65%, 100% 0, 100% 100%, 0% 100%);
    background: var(--bg-color);
}


</style>
@endpush