@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
  <div class="title-3">
    <h1>Insertion d'un nouveau chat</h1>
  </div>
  <div class="formulaire">
    {!! Form::open(['url' => '/cat/insert']) !!}
      <div class="flex-group">
        {{{ Form::label('Nom :') }}}
        {{{ Form::text('name') }}}
      </div>
      <div class="flex-group">
        {{{ Form::label('Taille (en cm) :') }}}
        {{{ Form::number('size') }}}
      </div>
      <div class="flex-group">
        {{{ Form::label('Poids (en kg) :') }}}
        {{{ Form::number('weight') }}}
      </div>
      <div class="flex-group">
        {{{ Form::label('Âge (en mois) :') }}}
        {{{ Form::number('age') }}}
      </div>
      <div class="flex-group">
        {{{ Form::label('Sexe :') }}}
        {{{ Form::select('gender', $genders) }}}
      </div>
      <div class="flex-group">
        {{{ Form::label('Couleur :') }}}
        {{{ Form::select('color[]', $colors, 0, ['multiple' => true]) }}}
      </div>
      <div class="flex-group">
        {{{ Form::submit('Insérer un chat') }}}
      </div>
    {!! Form::close() !!}
  </div>
    <div class="background">
    </div>
    <div class="image">
      <img src="/image/garfield-172.png" alt="cat">
    </div>
@endsection
