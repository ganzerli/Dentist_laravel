@extends("layout.app")

@section("title")
Contatti
@endsection


@section("main")

<!-- contact form -->
<section class="contacts py-5">
        <div class="container">
            <div class="row">
                <h2 class="col-12 text-center mb-4">Contattaci !</h2>
                <div class="col-12 col-md-4">
                    
                    <div class="row mb-5">
                        <img src="/img/dentist-2.jpg" class="img-fluid" alt="immagine contatti">
                    </div>
                    
                </div>

                <div class="col-12 col-md-7 pl-md-5">
                    <!-- TODO name inputs , action -->
                    <form action="{{route('submit')}}" method="POST" id="contact-form">
                        @csrf
                        <label for="basic-url">Nome e Cognome</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon3"><i class="fas fa-file-signature"></i></span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required name="name">
                        </div>
                    
                        <label for="basic-url">Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon3">@</span>
                            </div>
                            <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" required name="email">
                        </div>
                    
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-info text-white">Lasciaci un <br> messaggio</span>
                            </div>
                            <textarea class="form-control" rows="4" aria-label="With textarea" name="text"></textarea>
                        </div>

                        <div class="input-group py-3">
                            <button class="btn btn-success font-weight-bold px-5 float-right" type="submit">     Invia!
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form -->

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
</style>
@endpush