@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- 名前(本名)の入力-Start -->
                        <div class="form-group row">
                            <label for="t_name" class="col-md-4 col-form-label text-md-right">{{ __('名前(本名)') }}</label>

                            <div class="col-md-6">
                                <input id="t_name" type="text" class="form-control @error('t_name') is-invalid @enderror" name="t_name" value="{{ old('t_name') }}" required autocomplete="t_name" autofocus>

                                @error('t_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- 名前(本名)の入力-end -->

                        <!-- 学籍番号の入力-Start -->
                        <div class="form-group row">
                            <label for="t_student_number" class="col-md-4 col-form-label text-md-right">{{ __('学籍番号') }}</label>

                            <div class="col-md-6">
                                <input id="t_student_number" type="t_student_number" class="form-control @error('t_student_number') is-invalid @enderror" name="t_student_number" value="{{ old('t_student_number') }}" required autocomplete="t_student_number">

                                @error('t_student_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- 学籍番号の入力-end -->

                        <!-- パスワードの入力-Start -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- パスワードの入力-end -->

                        <!-- パスワードの再入力-Start -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('もう一度パスワードを入力してください') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- パスワードの再入力-end -->

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
