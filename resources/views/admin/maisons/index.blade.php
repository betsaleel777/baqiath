@extends('layouts.admin.default')
@section('content')
    <div class="card border-primary mb-3">
        <div style="padding: 25px" class="container-fluid">
            <div class="card mb-3">
                @php
                    $rang = [1,2,3,4] ;
                @endphp
                <img src="{{asset('web/images/dark.jpg')}}" width="500" height="400" class="card-img-top" alt="maison 1">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        <b>Lieu:</b> <br>
                        <b>Nombre de chambre:</b> <br>
                        <b>Nombre de salons:</b> <br>
                        <b>Superficie:</b> <br>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang',$rang[0])->first())
                            <a href="{{route('maisons_add',$rang[0])}}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{route('maisons_edit',$rang[0])}}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <img src="{{asset('web/images/dark.jpg')}}" width="500" height="400" class="card-img-top" alt="maison 2">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        <b>Lieu:</b> <br>
                        <b>Nombre de chambre:</b> <br>
                        <b>Nombre de salons:</b> <br>
                        <b>Superficie:</b> <br>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang',$rang[1])->first())
                            <a href="{{route('maisons_add',$rang[1])}}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{route('maisons_edit',$rang[1])}}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
{{--            faire la meme chose pour tout les autres --}}
            <div class="card mb-3">
                @empty($maisons->where('rang',$rang[2])->first())
                    <img src="{{asset('web/images/dark.jpg')}}" width="500" height="400" class="card-img-top" alt="maison 3">
                @else
                    <img src="{{asset('web/images/'.$maisons->where('rang',$rang[2])->first()->image_presentation)}}" width="500" height="400" class="card-img-top" alt="maison 3">
                @endempty
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        @empty($maisons->where('rang',$rang[2])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{$maisons->where('rang',$rang[2])->first()->lieu}} <br>
                            <b>Nombre de chambre:</b>{{$maisons->where('rang',$rang[2])->first()->chambre}} <br>
                            <b>Nombre de salons:</b>{{$maisons->where('rang',$rang[2])->first()->salon}} <br>
                            <b>Superficie:</b>{{$maisons->where('rang',$rang[2])->first()->superficie}} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang',$rang[2])->first())
                            <a href="{{route('maisons_add',$rang[2])}}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{route('maisons_edit',$rang[2])}}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <img src="{{asset('web/images/dark.jpg')}}" width="500" height="400" class="card-img-top" alt="maison 4">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        <b>Lieu:</b> <br>
                        <b>Nombre de chambre:</b> <br>
                        <b>Nombre de salons:</b> <br>
                        <b>Superficie:</b> <br>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang',$rang[3])->first())
                            <a href="{{route('maisons_add',$rang[3])}}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{route('maisons_edit',$rang[3])}}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
