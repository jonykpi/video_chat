
@extends('layouts.app')
@section('content')

    <home :user="{{ $user }}" :others="{{ $others }}" pusher-key="{{ config('broadcasting.connections.pusher.key') }}"
                pusher-cluster="{{ config('broadcasting.connections.pusher.options.cluster') }}"></home>

@endsection
