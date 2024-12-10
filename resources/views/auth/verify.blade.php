@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow-lg" style="background-color: #f9f9fb; border-radius: 10px;">
                <div class="card-header text-white text-center" style="background-color: #4CAF50; font-size: 1.2rem; font-weight: bold;">
                    {{ __('Verifikasi Email Anda') }}
                </div>

                <div class="card-body py-3 px-5">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Kode verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    <p class="text-center">{{ __('Silakan masukkan kode verifikasi yang dikirimkan ke email Anda.') }}</p>

                    <form method="POST" action="{{ route('verification.verify') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="verification_code" class="form-label">{{ __('Kode Verifikasi') }}</label>
                            <input id="verification_code" type="text" class="form-control @error('verification_code') is-invalid @enderror" name="verification_code" required autofocus>
                            @error('verification_code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-block" style="background-color: #4CAF50; border: none; font-weight: bold;">
                                {{ __('Verifikasi') }}
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <form method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link text-success">{{ __('Kirim Ulang Kode Verifikasi') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
