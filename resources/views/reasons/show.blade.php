@extends('layouts.app')

@section('content')
    <pages-reasons-show :reason="{{$reason}}"></pages-reasons-show>
@endsection
