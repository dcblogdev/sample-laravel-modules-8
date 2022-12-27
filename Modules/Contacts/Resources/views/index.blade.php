@extends('contacts::layouts.master')

@section('content')
    <h1>Hello World</h1>

    {{ __('Hello World') }}

    <p>
        This view is loaded from module: {!! config('contacts.name') !!}
    </p>
@endsection
