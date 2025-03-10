@extends('layouts.app')

@section('content')
@php
$role=Auth::user()->role;
@endphp

@if($role=='Admin')
    @include('admin.dashboard')
@elseif($role=='Pastor')
    @include('branch_admin.dashboard')
@elseif($role=='Member')
    @include('member.dashboard')


@endif
@endsection