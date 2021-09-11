@extends('layouts.default')
<style>
  .content{
    margin-left: 50px;
  }
  .tag,
  .tag-idea{
    width: 20vw;
    margin-left: 30px;
  }
  .tag span,
  .tag-idea span{
    color: red;
  }
  .name-input{
    width: 25vw;
    height: 30px;
  }

  .table{
    border-collapse: separate;
    border-spacing: 8px 8px;
  }
  .example{
    color: gray;
  }
  
  .mail-input,
  .address-input,
  .building-input{
    width: 51vw;
    height: 30px;
  }
  .post-input{
    width: 49vw;
    height: 30px;
  }
  .idea-input{
    width: 51vw;
  }
  td{
    height: 70px;
  }
  .tag-idea{
    vertical-align: top;
  }
  .input-buttun{
    margin: 40px 35vw;
    width: 120px;
    height: 40px;
    background-color: black;
    color: white;
  }

</style>


@section('title', 'お問い合わせ')

@section('content')

@if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
@endif

<form action="/add" method="POST">
<table class="table">
  @csrf
  <tr>
    <td class="tag">お名前<span>※</span></td>
    <td>
      <input type="text" class="name-input" name="name">
      <input type="text" class="name-input" name="name2">
      <p class="example">&ensp;例）山田&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;例）太郎</p>
    </td>
  </tr>
  <tr>
    <td class="tag">性別<span>※</span></td>
    <td>
      <input type="radio" name="sex" value="1" checked>男性
      <input type="radio" name="sex" value="2">女性
    </td>
  </tr>
  <tr>
    <td class="tag">メールアドレス<span>※</span></td>
    <td>
      <input type="text" class="mail-input" name="mail">
      <p class="example">&ensp;例）test@example.com</p>
    </td>
  </tr>
  <tr>
    <td class="tag">郵便番号<span>※</span></td>
    <td>
      <span class="post-mark">〒</span>
      <input type="text" class="post-input" name="postcode">
      <p class="example">&ensp;&ensp;&ensp;&ensp;&ensp;例）123-4567</p>
    </td>
  </tr>
  <tr>
    <td class="tag">住所<span>※</span></td>
    <td>
      <input type="text" class="address-input" name="address">
      <p class="example">&ensp;例）東京都渋谷区千駄ヶ谷1-2-3</p>
    </td>
  </tr>
  <tr>
    <td class="tag">建物名</td>
    <td>
      <input type="text" class="building-input" name="building">
      <p class="example">&ensp;例）千駄ヶ谷マンション101</p>
    </td>
  </tr>
  <tr>
    <td class="tag-idea">ご意見<span>※</span></td>
    <td>
      <textarea name="idea" class="idea-input" cols="30" rows="4"></textarea>
    </td>
  </tr>
</table>

<input type="submit" class="input-buttun" value="確認">

</form>
@endsection