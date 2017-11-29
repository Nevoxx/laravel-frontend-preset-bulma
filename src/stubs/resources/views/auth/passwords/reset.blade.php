@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="card">
                    <div class="card-header">
                        <span class="card-header-title">
                            Reset Password
                        </span>
                    </div>

                    <div class="card-content">
                        @include('partials.form-errors')

                        <div class="field">
                            <label class="label" for="email">E-Mail</label>
                            <div class="control">
                                <input id="email"
                                       name="email"
                                       placeholder="E-Mail"
                                       class="input"
                                       value="{{ old('email') }}"
                                >
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="password">Password</label>
                            <div class="control">
                                <input type="password"
                                       id="password"
                                       name="password"
                                       placeholder="Password"
                                       class="input"
                                       value="{{ old('password') }}"
                                >
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="password_confirmation">Confirm Password</label>
                            <div class="control">
                                <input type="password"
                                       id="password_confirmation"
                                       name="password_confirmation"
                                       placeholder="Confirm Password"
                                       class="input"
                                       value="{{ old('password_confirmation') }}"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="card-footer-item" style="justify-content: left;">
                            <button class="button is-primary">
                                <i class="fa fa-save"></i>&nbsp;Reset Password
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
