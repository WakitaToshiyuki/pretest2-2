@extends('layouts.app') 
@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
@endsection 

@section('content')
<div class="layout">
    <h2>プロフィール設定</h2>
    <table>
        <form action="" method="POST">
        @csrf
            <tr class="">
                <div class="">
                    <img src="" 
                    alt="プロフィール画像" 
                    class="{{ empty($profile->image) ? 'placeholder' : '' }}" 
                    src="{{ !empty($profile->image) ? asset('storage/' . $profile->image) : '' }}" >
                    <input type="file" name="image" value="{{ $profile->image ?? '' }}">
                </div>
            </tr>
            <tr class="">
                <h4>ユーザー名</h4>
            </tr>
            <tr class="">
                <input type="text" name="name" value="{{ $profile->name ?? '' }}">
            </tr>
            <tr class="">
                <h4>郵便番号</h4>
            </tr>
            <tr class="">
                <input type="text" name="post_number" value="{{ $profile->post_number ?? '' }}">
            </tr>
            <tr class="">
                <h4>住所</h4>
            </tr>
            <tr class="">
                <input type="text" name="address" value="{{ $profile->address ?? '' }}">
            </tr>
            <tr class="">
                <h4>建物名</h4>
            </tr>
            <tr class="">
                <input type="text" name="building" value="{{ $profile->building ?? '' }}">
            </tr>
            <tr class="">
                <button type="submit">更新する</button>
            </tr>
        </form>
    </table>
</div>

@endsection