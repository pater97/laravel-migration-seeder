@extends('layouts.app')

@section('content')
<section class="welcome_main">
    <div class="container my-5">
      <div class="jumbotron text-center">
          <i class="fas fa-helicopter"></i>
      </div>
      <div class="vetrina">
          <h3 class="text-center py-3">
            OUR BEST PROPOSALS:
          </h3>
          <div class="row my-5 ">
          @foreach ($mainTravels as $travel)
              <div class="col-md-3">
                <div class="card p-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/150" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$travel->destination}}</h5>
                      <h6>departure from: {{$travel->departure_from}}</h6>
                      <p class="card-text">Your Hotel: {{$travel->hotel}}</p>
                      <a href="{{route('MainTravels',['travel' => $travel->id])}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              @endforeach
            </div>
      </div>
    </div>
</section>
@endsection