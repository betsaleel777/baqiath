@extends('layouts.admin.default')
@section('content')
    @php
    $rang = [0,1,2,3,4,5] ;
    @endphp
    <div class="card border-primary mb-3">
        <div style="padding: 25px" class="container-fluid">
            <div class="card mb-3">
                @empty($maisons->where('rang', $rang[0])->first())
                    <img src="{{ asset('web/images/dark.jpg') }}" width="500" height="400" class="card-img-top" alt="maison 1">
                @else
                    <img src="{{ asset('web/images/' . $maisons->where('rang', $rang[0])->first()->image_presentation) }}"
                        width="500" height="400" class="card-img-top" alt="maison 1">
                @endempty
                <div class="card-body">
                    @empty($maisons->where('rang', $rang[0])->first())
                        <h5 class="card-title">Titre vide</h5>
                    @else
                        <h5 class="card-title">{{ $maisons->where('rang', $rang[0])->first()->intitule }}</h5>
                    @endempty
                    <p class="card-text">
                        @empty($maisons->where('rang', $rang[0])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{ $maisons->where('rang', $rang[0])->first()->lieu }} <br>
                            <b>Nombre de chambre:</b>{{ $maisons->where('rang', $rang[0])->first()->chambre }} <br>
                            <b>Nombre de salons:</b>{{ $maisons->where('rang', $rang[0])->first()->salon }} <br>
                            <b>Superficie:</b>{{ $maisons->where('rang', $rang[0])->first()->superficie }} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang', $rang[0])->first())
                            <a href="{{ route('maisons_add', $rang[0]) }}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{ route('maisons_edit', $rang[0]) }}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                @empty($maisons->where('rang', $rang[1])->first())
                    <img src="{{ asset('web/images/dark.jpg') }}" width="500" height="400" class="card-img-top" alt="maison 2">
                @else
                    <img src="{{ asset('web/images/' . $maisons->where('rang', $rang[1])->first()->image_presentation) }}"
                        width="500" height="400" class="card-img-top" alt="maison 2">
                @endempty
                <div class="card-body">
                    @empty($maisons->where('rang', $rang[1])->first())
                        <h5 class="card-title">Titre vide</h5>
                    @else
                        <h5 class="card-title">{{ $maisons->where('rang', $rang[1])->first()->intitule }}</h5>
                    @endempty
                    <p class="card-text">
                        @empty($maisons->where('rang', $rang[1])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{ $maisons->where('rang', $rang[1])->first()->lieu }} <br>
                            <b>Nombre de chambre:</b>{{ $maisons->where('rang', $rang[1])->first()->chambre }} <br>
                            <b>Nombre de salons:</b>{{ $maisons->where('rang', $rang[1])->first()->salon }} <br>
                            <b>Superficie:</b>{{ $maisons->where('rang', $rang[1])->first()->superficie }} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang', $rang[1])->first())
                            <a href="{{ route('maisons_add', $rang[1]) }}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{ route('maisons_edit', $rang[1]) }}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            {{-- faire la meme chose pour tout les autres --}}
            <div class="card mb-3">
                @empty($maisons->where('rang', $rang[2])->first())
                    <img src="{{ asset('web/images/dark.jpg') }}" width="500" height="400" class="card-img-top" alt="maison 3">
                @else
                    <img src="{{ asset('web/images/' . $maisons->where('rang', $rang[2])->first()->image_presentation) }}"
                        width="500" height="400" class="card-img-top" alt="maison 3">
                @endempty
                <div class="card-body">
                    @empty($maisons->where('rang', $rang[2])->first())
                        <h5 class="card-title">Titre vide</h5>
                    @else
                        <h5 class="card-title">{{ $maisons->where('rang', $rang[2])->first()->intitule }}</h5>
                    @endempty
                    <p class="card-text">
                        @empty($maisons->where('rang', $rang[2])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{ $maisons->where('rang', $rang[2])->first()->lieu }} <br>
                            <b>Nombre de chambre:</b>{{ $maisons->where('rang', $rang[2])->first()->chambre }} <br>
                            <b>Nombre de salons:</b>{{ $maisons->where('rang', $rang[2])->first()->salon }} <br>
                            <b>Superficie:</b>{{ $maisons->where('rang', $rang[2])->first()->superficie }} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang', $rang[2])->first())
                            <a href="{{ route('maisons_add', $rang[2]) }}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{ route('maisons_edit', $rang[2]) }}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                @empty($maisons->where('rang', $rang[3])->first())
                    <img src="{{ asset('web/images/dark.jpg') }}" width="500" height="400" class="card-img-top" alt="maison 4">
                @else
                    <img src="{{ asset('web/images/' . $maisons->where('rang', $rang[3])->first()->image_presentation) }}"
                        width="500" height="400" class="card-img-top" alt="maison 4">
                @endempty
                <div class="card-body">
                    @empty($maisons->where('rang', $rang[3])->first())
                        <h5 class="card-title">Titre vide</h5>
                    @else
                        <h5 class="card-title">{{ $maisons->where('rang', $rang[3])->first()->intitule }}</h5>
                    @endempty
                    <p class="card-text">
                        @empty($maisons->where('rang', $rang[3])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{ $maisons->where('rang', $rang[3])->first()->lieu }} <br>
                            <b>Nombre de chambre:</b>{{ $maisons->where('rang', $rang[3])->first()->chambre }} <br>
                            <b>Nombre de salons:</b>{{ $maisons->where('rang', $rang[3])->first()->salon }} <br>
                            <b>Superficie:</b>{{ $maisons->where('rang', $rang[3])->first()->superficie }} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang', $rang[3])->first())
                            <a href="{{ route('maisons_add', $rang[3]) }}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{ route('maisons_edit', $rang[3]) }}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                @empty($maisons->where('rang', $rang[4])->first())
                    <img src="{{ asset('web/images/dark.jpg') }}" width="500" height="400" class="card-img-top" alt="maison 4">
                @else
                    <img src="{{ asset('web/images/' . $maisons->where('rang', $rang[4])->first()->image_presentation) }}"
                        width="500" height="400" class="card-img-top" alt="maison 4">
                @endempty
                <div class="card-body">
                    @empty($maisons->where('rang', $rang[4])->first())
                        <h5 class="card-title">Titre vide</h5>
                    @else
                        <h5 class="card-title">{{ $maisons->where('rang', $rang[4])->first()->intitule }}</h5>
                    @endempty
                    <p class="card-text">
                        @empty($maisons->where('rang', $rang[4])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{ $maisons->where('rang', $rang[4])->first()->lieu }} <br>
                            <b>Nombre de chambre:</b>{{ $maisons->where('rang', $rang[4])->first()->chambre }} <br>
                            <b>Nombre de salons:</b>{{ $maisons->where('rang', $rang[4])->first()->salon }} <br>
                            <b>Superficie:</b>{{ $maisons->where('rang', $rang[4])->first()->superficie }} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang', $rang[4])->first())
                            <a href="{{ route('maisons_add', $rang[4]) }}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{ route('maisons_edit', $rang[4]) }}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                @empty($maisons->where('rang', $rang[5])->first())
                    <img src="{{ asset('web/images/dark.jpg') }}" width="500" height="400" class="card-img-top" alt="maison 4">
                @else
                    <img src="{{ asset('web/images/' . $maisons->where('rang', $rang[5])->first()->image_presentation) }}"
                        width="500" height="400" class="card-img-top" alt="maison 4">
                @endempty
                <div class="card-body">
                    @empty($maisons->where('rang', $rang[5])->first())
                        <h5 class="card-title">Titre vide</h5>
                    @else
                        <h5 class="card-title">{{ $maisons->where('rang', $rang[5])->first()->intitule }}</h5>
                    @endempty
                    <p class="card-text">
                        @empty($maisons->where('rang', $rang[5])->first())
                            vide
                        @else
                            <b>Lieu:</b>{{ $maisons->where('rang', $rang[5])->first()->lieu }} <br>
                            <b>Nombre de chambre:</b>{{ $maisons->where('rang', $rang[5])->first()->chambre }} <br>
                            <b>Nombre de salons:</b>{{ $maisons->where('rang', $rang[5])->first()->salon }} <br>
                            <b>Superficie:</b>{{ $maisons->where('rang', $rang[5])->first()->superficie }} <br>
                        @endempty
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <div style="text-align: right">
                        @empty($maisons->where('rang', $rang[5])->first())
                            <a href="{{ route('maisons_add', $rang[5]) }}" class="btn btn-primary">ajouter</a>
                        @else
                            <a href="{{ route('maisons_edit', $rang[5]) }}" class="btn btn-primary">modifier</a>
                        @endempty
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
