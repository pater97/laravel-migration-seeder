@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row g-4">
            @foreach ($travels as $travel)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$travel->destination}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">departure: {{$travel->date}}</h6>
                          <p class="card-text">{{$travel->hotel}}</p>
                          <span href="#" class="card-link">{{$travel->treatment}}</span>
                          <span href="#" class="card-link">{{$travel->price}}€</span>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection