@extends('layouts.admin.default')
@section('content')
    <div class="card border-primary mb-3">
        <div style="padding: 25px" class="container">
            <form action="{{route('maisons_update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input hidden type="text" name="rang" value="{{$rank}}">
                <div class="form-group">
                    <input class="form-control" name="intitule" value="{{$maison->intitule}}" type="text" placeholder="intitulé">
                    @error('intitule')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="lieu" value="{{$maison->lieu}}" type="text" placeholder="lieu">
                    @error('lieu')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="superficie" value="{{$maison->superficie}}" type="text" placeholder="superficie">
                    @error('superficie')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="chambre" value="{{$maison->chambre}}" type="text" placeholder="chambre">
                    @error('chambre')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="salon" value="{{$maison->salon}}" type="text" placeholder="salon">
                    @error('salon')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option name="statut" selected value="{{$maison->statut}}">choix du statut</option>
                        <option value="à vendre">à vendre</option>
                        <option value="à louer">à louer</option>
                    </select>
                    @error('statut')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">image de présentation
                        @if($rank === 1 or $rank === 2)
                            <small class="text-muted">Largeur:449, Longueur:801 </small>
                        @else
                            <small class="text-muted">Largeur:449, Longueur:400 </small>
                        @endif
                    </label>
                    <input name="image_presentation" type="file" class="form-control-file" id="image">
                    @error('image_presentation')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group" style="text-align: right">
                    <input class="btn btn-primary" type="submit" value="enregistrer">
                </div>
            </form>
        </div>
    </div>
@endsection
