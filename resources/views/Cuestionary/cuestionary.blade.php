@extends('Cuestionary.partials.app-cuestionary')
@section('main-content')
<div>
PREGUNTAS
</div>
<form action="login" method="GET">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary btn-block">Comenzar</button>
</form>
</div>
@endsection