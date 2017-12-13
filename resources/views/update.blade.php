@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
  <div class="title-3">
    <h1>Modification des infos sur le chat</h1>
  </div>
    <div class="formulaire">
      {!! Form::open(['url' => '/cat/update']) !!}
        {{{ Form::hidden('id', $cat->id)}}}
        <div class="flex-group">
          {{{ Form::label('Nom :') }}}
          {{{ Form::text('name', $cat->name) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Taille (en cm) :') }}}
          {{{ Form::number('size', $cat->size) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Poids (en kg) :') }}}
          {{{ Form::number('weight', $cat->weight) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Âge (en mois) :') }}}
          {{{ Form::number('age', $cat->Age) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Sexe :') }}}
          {{{ Form::select('gender', $genders, $cat->gender->id) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Couleur :') }}}
          {{{ Form::select('color[]', $colors, $cat->colors, ['multiple' => true]) }}}
        </div>
        <div class="flex-group">
          {{{ Form::submit('Modifiez les infos du chat') }}}
        </div>
      {!! Form::close() !!}
    </div>
    <div class="background">
    </div>
    <div class="image">
      <img src="/image/garfield-172.png" alt="cat">
    </div>
@endsection
