@extends('layouts.app')


@section('content')


@foreach($pro as $ct)

{{$ct->title}}
{{$ct->decription}}
{{$ct->price}}

@endforeach

@endsection