@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Saldo Anda : {{ Auth::user()->balance }}</h1>
    <h1>Beli Pulsa</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <form action="{{ route('beli-pulsa') }}" method="post">
        @csrf
        <select name="pulsa" id="pulsa">
            <option value="0" disabled selected>Pilih Pulsa</option>
            <option value="5000">5000</option>
            <option value="10000">10000</option>
            <option value="20000">20000</option>
            <option value="25000">25000</option>
            <option value="50000">50000</option>
        </select>
        <input type="submit" value="Beli">
    </form>


</div>
@endsection