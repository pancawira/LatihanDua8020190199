@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="pengarang" class="col-md-4 col-form-label text-md-right">{{ __('Pengarang') }}</label>

                            <div class="col-md-6">
                                <input id="pengarang" type="pengarang" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{ old('pengarang') }}" required autocomplete="pengarang" autofocus>

                                @error('pengarang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            </div>
                        </div>

                        <div class="form-group row">

                        </div>

                        <div class="form-group row mb-0">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
