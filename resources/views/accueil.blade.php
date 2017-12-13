@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
  <div class="title">
    <h1>Le Blog des Chats</h1>
  </div>
  <div class="title-2">
    <h3>Voici la liste des chats :</h3>
  </div>
  <div class="tableau">
    <table class="table table-bordered table-striped table-responsive">
      <thead class="head">
        <tr>
            <th>Nom</th>
            <th>Taille <small>(en cm)</small></th>
            <th>Poids <small>(en kg)</small></th>
            <th>Age <small>(en mois)</small></th>
            <th>Sexe <small>(Le N signifie Neutre)</small></th>
            <th>Couleur</th>
            <th>Suppression</th>
            <th>Mise à jour</th>
        </tr>
      </thead>
      <tbody class="background_body">
        @foreach ($cats as $cat)
          <tr>
              <td>{{ $cat->name }}</td>
              <td>{{ $cat->size }}</td>
              <td>{{ $cat->weight }}</td>
              <td>{{ $cat->age }}</td>
              @if ($cat->gender)
                <td>{{ $cat->gender->gender }}</td>
              @else
                <td>N</td>
              @endif
              @if ($cat->colors)
                <td>
                  @foreach ($cat->colors as $color)
                    {{ $color->color }}
                  @endforeach
                </td>
              @else
                <td>Transparent</td>
              @endif
              <td>
               <form class ="delete_form" action="/cat/delete/{{$cat->id}}" method="GET">
                 {{ csrf_field() }}
                  <button type="submit" class="btn btn-outline-danger">
                     <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </button>
               </form>
             </td>
             <td>
              <form class ="update_form" action="/cat/update/{{$cat->id}}" method="GET">
                {{ csrf_field() }}
                 <button type="submit" class="btn btn-outline-success">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                 </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="image-2">
    <img src="/image/ebbb53c9.png" alt="">
  </div>
@endsection
