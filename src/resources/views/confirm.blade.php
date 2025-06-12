@extends('layouts/app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section ('content')
    <form action="/thanks" method="post">
        @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
            </tr>

            <tr>
                <th>性別</th>
                <td>
                    @if ($contact['gender'] == 1)
                        男
                    @elseif ($contact['gender'] == 2)
                        女
                    @else
                        その他
                    @endif
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>{{$contact ['email']}}</td>
            </tr>

            <tr>
                <th>電話番号</th>
                <td>{{$contact ['tel']}}</td>
            </tr>

            <tr>
                <th>住所</th>
                <td>{{$contact ['address']}}</td>
            </tr>

            <tr>
                <th>建物名</th>
                <td>{{$contact ['building']}}</td>
            </tr>

            <tr>
                <th>お問い合わせの種類</th>
                <td>@php
                    $categories = [
                    1 => '商品のお届けについて',
                    2 => '商品の交換について',
                    3 => '商品トラブル',
                    4 => 'ショップへのお問い合わせ',
                    5 => 'その他',
                    ];
                    @endphp
                    {{ isset($contact['category_id']) && isset($categories[$contact['category_id']]) ? $categories[$contact['category_id']] : '未選択' }}</td>
                </td>
            </tr>

            <tr>
                <th>お問い合わせ内容</th>
                <td>{{ $contact['detail'] }}</td>
            </tr>

        </table>

        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
        <input type="hidden" name="gender" value="{{$contact ['gender']}}">
        <input type="hidden" name="email" value="{{$contact ['email']}}">
        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
        <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
        <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
        <input type="hidden" name="address" value="{{$contact ['address']}}">
        <input type="hidden" name="building" value="{{$contact ['building']}}">
        <input type="hidden" name="category_id" value="{{ $contact['category_id'] ?? '' }}">
        <input type="hidden" name="detail" value="{{$contact ['detail']}}">

        <div class="form-buttons">
            <button type="submit" class="btn-submit">送信</button>
            <a href="http://localhost/" class="btn-link">修正</a>
        </div>
    </form>
@endsection
