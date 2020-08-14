@extends('layouts.admin.default')
@section('style')
{{--    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="card border-primary mb-3">
        <div class="card-header">office management</div>
        <div class="container">
            <div class="card-body text-primary">
                <h5 class="card-title">{{$titre}}</h5>
                <p class="card-text">
                <table class="table" id="contacts">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Courriel</th>
                        <th scope="col">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $key => $contact)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$contact->nomination}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->email}}</td>
                            <td>
                                <a href="{{route('contacts_show',$contact)}}" type="button" class="btn btn-outline-warning">voir message</a>
                                <a href="{{route('contacts_delete',$contact)}}" type="button" class="btn btn-outline-danger">supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </p>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#contacts').DataTable();
        });
    </script>
@endsection
