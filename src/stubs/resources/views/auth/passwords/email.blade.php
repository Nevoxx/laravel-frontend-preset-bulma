@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <span class="card-header-title">
                            Reset your password
                        </span>
                    </div>
                    <div class="card-content">
                        @include('partials.form-errors')

                        @if (session('status'))
                            <div class="notification is-success">
                                <button type="button" class="delete"></button>
                                <ul>
                                    <li>{{ session('status') }}</li>
                                </ul>
                            </div>
                        @endif

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
                    </div>

                    <div class="card-footer">
                        <div class="card-footer-item" style="justify-content: left;">
                            <button class="button is-primary">
                                <i class="fa fa-envelope"></i>&nbsp;Send Confirmation Mail
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
