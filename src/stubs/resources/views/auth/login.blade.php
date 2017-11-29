@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <span class="card-header-title">
                            Login
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
                            <label class="label" for="password">Passwort</label>
                            <div class="control">
                                <input type="password"
                                       id="password"
                                       name="password"
                                       placeholder="password"
                                       class="input"
                                       value="{{ old('password') }}"
                                >
                            </div>
                        </div>

                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                enable permanent login?
                            </label>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="card-footer-item" style="justify-content: left;">
                            <button class="button is-primary">
                                <i class="fa fa-sign-in"></i>&nbsp;Login
                            </button>
                            &nbsp;
                            <a class="button is-link" href="{{ route('password.request') }}" style="">
                                <i class="fa fa-unlock"></i>&nbsp;Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
