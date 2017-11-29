@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <span class="card-header-title">
                            Register
                        </span>
                    </div>
                    <div class="card-content">
                        @include('partials.form-errors')

                        <div class="field">
                            <label class="label" for="name">Username</label>
                            <div class="control">
                                <input id="name"
                                       name="name"
                                       placeholder="Username"
                                       class="input"
                                       value="{{ old('name') }}"
                                       autofocus
                                >
                            </div>
                        </div>

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
                                <i class="fa fa-user"></i>&nbsp;Create Account
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
