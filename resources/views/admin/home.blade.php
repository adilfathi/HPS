@extends('layouts.app')

@section('content')
<h2>Dashboard Admin</h2>
<p>Selamat datang di dashboard admin, {{ Auth::user()->nama }}.</p>
@endsection