@extends('layouts.admin.default')
@section('content')
    <div class="card border-primary mb-3">
        <div class="card-header">office management</div>
        <div class="container">
          <div class="card-body">
            <h5 class="card-title text-primary">Message de {{$contact->nomination}}</h5>
              <b>Couriel:</b> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a> <br>
              <b>Contact:</b> <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
            <p class="card-text">
                {{ nl2br($contact->message) }}
            </p>
        </div>
        </div>
    </div>
@endsection
