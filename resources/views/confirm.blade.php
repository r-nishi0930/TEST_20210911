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


@section('title', '内容確認')

@section('content')
<form action="/insert" method="POST">
<table class="table">
  @csrf
  <tr>
    <td class="tag">お名前</td>
    <td>
      {{$param['name']}}
    </td>
  </tr>
  <tr>
    <td class="tag">性別</td>
    <td>
      {{$param['sex']}}
    </td>
  </tr>
  <tr>
    <td class="tag">メールアドレス</td>
    <td>
      {{$param['mail']}}
    </td>
  </tr>
  <tr>
    <td class="tag">郵便番号</td>
    <td>
      {{$param['postcode']}}
    </td>
  </tr>
  <tr>
    <td class="tag">住所</td>
    <td>
      {{$param['address']}}
    </td>
  </tr>
  <tr>
    <td class="tag">建物名</td>
    <td>
      {{$param['building']}}
    </td>
  </tr>
  <tr>
    <td class="tag-idea">ご意見</td>
    <td>
      {{$param['idea']}}
    </td>
  </tr>
</table>

<input type="submit" class="input-buttun" value="送信">

<input type="hidden" name="name" value="{{$param['name']}}">
<input type="hidden" name="sex" value="{{$param['sex']}}">
<input type="hidden" name="mail" value="{{$param['mail']}}">
<input type="hidden" name="postcode" value="{{$param['postcode']}}">
<input type="hidden" name="address" value="{{$param['address']}}">
<input type="hidden" name="building" value="{{$param['building']}}">
<input type="hidden" name="idea" value="{{$param['idea']}}">


</form>
@endsection