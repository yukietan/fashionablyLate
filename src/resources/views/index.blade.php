@extends('layouts/app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section ('content')
        <form action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <label>お名前 <span class="required">※</span></label>
                </div>
                <div class="form__group-content name-group">
                    <div class="form__input--text">
                        <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
                        <div class="form__error">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__input--text">
                        <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
                        <div class="form__error">
                            @error('first_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label>性別 <span class="required">※</span></label>
                </div>
                <div class="form__group-content">
                    <input type="radio" id="gender_male" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}>
                    <label for="gender_male">男性</label>

                    <input type="radio" id="gender_female" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
                    <label for="gender_female">女性</label>

                    <input type="radio" id="gender_others" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>
                    <label for="gender_others">その他</label>

                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label for="email">メールアドレス <span class="required">※</span></label>
                </div>
                <div class="form__group-content">
                    <input type="email" name="email" placeholder="例: test@example.com" id="email" autocomplete="off" value="{{ old('email') }}">
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label for="tel">電話番号 <span class="required">※</span></label>
                </div>
                <div class="form__group-content">
                    <input type="text" name="tel1" size="4" value="{{ old('tel1') }}"> -
                    <input type="text" name="tel2" size="4" value="{{ old('tel2') }}"> -
                    <input type="text" name="tel3" size="4" value="{{ old('tel3') }}">
                    <div class="form__error">
                        @error('tel1'){{ $message }}@enderror
                        @error('tel2'){{ $message }}@enderror
                        @error('tel3'){{ $message }}@enderror
                    </div>
                    <div class="form__error">
                        @error('tel'){{ $message }}@enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label for="address">住所 <span class="required">※</span></label>
                </div>
                <div class="form__group-content">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" id="address" value="{{ old('address') }}">
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label for="building">建物名</label>
                </div>
                <div class="form__group-content">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" id="building" value="{{ old('building') }}">
                    <div class="form__error">
                        @error('building')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label for="category_id">お問い合わせの種類 <span class="required">※</span></label>
                </div>
                <div class="form__group-content">
                    <select name="category_id" id="category_id">
                        <option value="">選択してください</option>
                        <option value="1" {{ old('category_id') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
                        <option value="2" {{ old('category_id') == '2' ? 'selected' : '' }}>商品の交換について</option>
                        <option value="3" {{ old('category_id') == '3' ? 'selected' : '' }}>商品トラブル</option>
                        <option value="4" {{ old('category_id') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                        <option value="5" {{ old('category_id') == '5' ? 'selected' : '' }}>その他</option>
                    </select>
                    <div class="form__error">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <label for="detail">お問い合わせ内容 <span class="required">※</span></label>
                </div>
                <div class="form__group-content">
                    <textarea name="detail" class="form-item-textarea" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit">確認画面</button>
        </form>
@endsection
