@extends('layouts.app')

@section('content')
    <section class="main">
        <div class="container">
            <h1 class="text-center my-5">
                ALL TRAVEL
            </h1>
            <div class="row">
                @foreach($travels as $travel)
                <div class="col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="{{$travel->img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$travel->destination}}</h5>
                          <h6>departure from: {{$travel->departure_from}}</h6>
                          <p class="card-text">Your Hotel: {{$travel->hotel}}</p>
                          <div class="more_info d-flex flex-column py-3">
                            <span>
                                price: {{$travel->price}}€
                            </span>
                            <span>
                                departure at: {{$travel->date}}
                            </span>
                          </div>
                          <a href="{{route('MainTravels',['travel' => $travel->id])}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection