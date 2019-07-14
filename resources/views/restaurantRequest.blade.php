@extends('layouts.app')

@section('content')
<?php $a=0?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#236A62;color:rgb(161, 182, 181)">{{ __('Register') }}</div>
                <div class="card-body">
                    <?php $UI=Crypt::decrypt($UI) ?>
                    <form method="POST" action="{{ route('restaurantRequest',['UI'=>$UI]) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="company_rut" class="col-md-4 col-form-label text-md-right">{{ __('Company Rut') }}</label>
                            <div class="col-md-6">
                                <input id="company_rut" type="text" class="form-control @error('company_rut') is-invalid @enderror" name="company_rut" value="{{ old('company_rut') }}" required autocomplete="company_rut" autofocus>

                                @error('company_rut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cod_sis" class="col-md-4 col-form-label text-md-right">{{ __('Code Sis') }}</label>

                            <div class="col-md-6">
                                <input id="cod_sis" type="text" class="form-control @error('cod_sis') is-invalid @enderror" name="cod_sis" value="{{ old('cod_sis') }}" required autocomplete="cod_sis" autofocus>

                                @error('cod_sis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner_name" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name') }}</label>

                            <div class="col-md-6">
                                <input id="owner_name" type="text" class="form-control @error('owner_name') is-invalid @enderror" name="owner_name" value="{{ old('owner_name') }}" required autocomplete="owner_name">

                                @error('owner_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
