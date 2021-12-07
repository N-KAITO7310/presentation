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
                        <label for="t_name" class="col-md-4 col-form-label text-md-right">名前(本名)</label>
                        <input id="t_name" type="text" class="form-control @error('t_name') is-invalid @enderror" name="t_name" value="{{ old('t_name') }}" required autocomplete="t_name" autofocus>

                        @error('t_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- 名前(本名)の入力-end -->

                        <!-- ニックネームの入力-Start -->
                        <label for="name" class="col-md-4 col-form-label text-md-right">ニックネーム</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- ニックネームの入力-end -->

                        <!-- 学籍番号の入力-Start -->
                        <label for="t_student_number" class="col-md-4 col-form-label text-md-right">{{ __('学籍番号') }}</label>
                        <input id="t_student_number" type="t_student_number" class="form-control @error('t_student_number') is-invalid @enderror" name="t_student_number" value="{{ old('t_student_number') }}" required autocomplete="t_student_number">

                        @error('t_student_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- 学籍番号の入力-end -->

                        <!-- パスワードの入力-Start -->
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- パスワードの入力-end -->

                        <!-- パスワードの再入力-Start -->
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('もう一度パスワードを入力してください') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <!-- パスワードの再入力-end -->

                        <!-- 登録ボタン - start -->
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                        <!-- 登録ボタン - end -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
