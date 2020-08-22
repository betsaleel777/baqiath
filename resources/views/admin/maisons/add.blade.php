@extends('layouts.admin.default')
@section('content')
    <div class="card border-primary mb-3">
        <div style="padding: 25px" class="container">
            <form method="post" action="{{route('maisons_store')}}" enctype="multipart/form-data">
                @csrf
                <input hidden type="text" name="rang" value="{{$rank}}">
                <div class="form-group">
                    <input class="form-control" name="intitule" type="text" placeholder="intitulé">
                    @error('intitule')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="lieu" type="text" placeholder="lieu">
                    @error('lieu')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="superficie" type="text" placeholder="superficie">
                    @error('superficie')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="chambre" type="text" placeholder="chambre">
                    @error('chambre')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" name="salon" type="text" placeholder="salon">
                    @error('salon')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="statut" class="form-control">
                        <option selected value="">choix du statut</option>
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
                            <small class="text-muted">Largeur:801, Longueur:449 </small>
                        @else
                            <small class="text-muted">Largeur:400, Longueur:449 </small>
                        @endif
                    </label>
                    <input name="image_presentation" type="file" class="form-control-file" id="image">
                    @error('image_presentation')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">enregistrer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
