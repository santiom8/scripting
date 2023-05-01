@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table" id="table_id">
        <thead>
            <tr>
                <th>title</th>
                <th>location</th>
                <th>descrpcion</th>
                <th>url</th>
                <th>is_published</th>
                <th>Actiones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $item)
              <tr>
                  <td scope="row">{{$item->title}}</td>
                  <td>{{$item->location}}</td>
                  <td>{{$item->descrption}}</td>
                  <td>{{$item->url}}</td>
                  <td>{{$item->is_published}}</td>
                  <td>
                      <button type="button" class="btn btn-info">Publicar</button>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-danger">Elimina</button>
                  </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@push()
    <script>
        $(document).ready( function () {
        $('#Table_id').DataTable();
        } );
    </script>
@endpush

