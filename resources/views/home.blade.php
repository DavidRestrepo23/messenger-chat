@extends('layouts.app')

@section('content')
    <messenger-component :user-id="{{auth()->user()->id}}"></messenger-component>
@endsection
