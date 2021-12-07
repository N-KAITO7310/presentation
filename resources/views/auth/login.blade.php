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

                        <!-- 学籍番号の入力-Start -->
                        <label for="t_student_number" class="col-md-4 col-form-label text-md-right">学籍番号</label>
                        <input id="t_student_number" type="t_student_number" class="form-control @error('t_student_number') is-invalid @enderror" name="t_student_number" value="{{ old('t_student_number') }}" required autocomplete="t_student_number" autofocus>

                        @error('t_student_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- 学籍番号の入力-end -->

                        <!-- パスワードの入力-Start -->
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <!-- パスワードの入力-end -->

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- ログインボタン - start -->
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        <!-- ログインボタン - end -->

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
