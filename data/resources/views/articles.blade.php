@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Liste des articles du magasin</div>
        <div class="panel-body">
          @foreach ($articles as $article)
            <p>{{ $article['marque'] }} :
              @foreach ($article['marque'] as $marque)
                {{ $marque }}
              @endforeach
            </p>
            {{ Form::open(['url' => '/delete/articles']) }}
            {{ Form::hidden('id', $article['id']) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
            {{ Form::open(['url' => '/update/articles']) }}
            {{ Form::hidden('id', $article['id']) }}
            {{ Form::submit('Update') }}
            {{ Form::close() }}
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
