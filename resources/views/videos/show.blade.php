@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Terima Kasih Sudah Menonton kembali ke <a href="{{ route('video.index') }}">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
