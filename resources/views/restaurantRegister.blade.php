@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#236A62;color:rgb(161, 182, 181)">{{ __('Restaurant Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('restaurantRegister') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('last name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber">

                                @error('phoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category">

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="kitchen" class="col-md-4 col-form-label text-md-right">{{ __('Kitchen type') }}</label>

                        <div class="col-md-6">
                            <input id="kitchen" type="text" class="form-control @error('kitchen') is-invalid @enderror" name="kitchen" value="{{ old('kitchen') }}" required autocomplete="kitchen">

                            @error('kitchen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                  <div class="form-group row">
                      <label for="opening" class="col-md-4 col-form-label text-md-right">{{ __('Opening Hour') }}</label>

                      <div class="col-md-6">
                          <input id="opening" type="text" class="form-control @error('opening') is-invalid @enderror" name="opening" value="{{ old('opening') }}" required autocomplete="opening">

                          @error('opening')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="closing" class="col-md-4 col-form-label text-md-right">{{ __('Closing Hour') }}</label>

                      <div class="col-md-6">
                          <input id="closing" type="text" class="form-control @error('closing') is-invalid @enderror" name="closing" value="{{ old('closing') }}" required autocomplete="closing">

                          @error('closing')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="personCost" class="col-md-4 col-form-label text-md-right">{{ __('Person Cost') }}</label>

                      <div class="col-md-6">
                          <input id="personCost" type="text" class="form-control @error('personCost') is-invalid @enderror" name="personCost" value="{{ old('personCost') }}" required autocomplete="personCost">

                          @error('personCost')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="waitTime" class="col-md-4 col-form-label text-md-right">{{ __('Wait time') }}</label>

                      <div class="col-md-6">
                          <input id="waitTime" type="text" class="form-control @error('waitTime') is-invalid @enderror" name="waitTime" value="{{ old('waitTime') }}" required autocomplete="waitTime">

                          @error('waitTime')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="direction" class="col-md-4 col-form-label text-md-right">{{ __('Direction') }}</label>

                      <div class="col-md-6">
                          <input id="direction" type="text" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ old('direction') }}" required autocomplete="direction">

                          @error('direction')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="redirect()" >
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
