@extends('layouts.default')
<style>
  .content{
    margin-left: 50px;
  }
  .tag{
    width: 10vw;
    margin-left: 30px;
    font-size: 13px;
  }

  .name-input{
    width: 25vw;
    height: 30px;
  }

  .table{
    border-collapse: separate;
    border-spacing: 8px 8px;
  }
  
  .mail-input{
    width: 25vw;
    height: 30px;
  }
  td{
    height: 70px;
  }
  .input-buttun{
    margin: 20px 30vw;
    width: 120px;
    height: 40px;
    background-color: black;
    color: white;
  }

  .search{
    margin-right: 10vw;
    border: solid 1px black;
    padding: 20px;
  }

  .result-table-id{
    width: 80px;
    text-align: center;

  }
  .result-table-name{
    width: 80px;
    text-align: left;
  }
  .result-table-sex{
    width: 150px;
    text-align: center;
  }
  .result-table-mail{
    width: 250px;
    text-align: left;
  }
  .result-table-idea{
    width: 300px;
    text-align: left;
  }
  .result-table-buttun{
    width: 80px;
    background-color: black;
    color: white;
  }
  .result-table{
    margin-top: 30px;
  }
  .result-table-contents{
    line-height: 50px;
    border-bottom: solid 1px black;
  }
  .result-table-item{
    line-height: 50px;
  }
</style>


@section('title', '管理システム')

@section('content')
<form action="/add" method="POST">
<div class="search">

  <table class="table">
    @csrf
    <tr>
      <td class="tag">お名前</td>
      <td>
        <input type="text" class="name-input" name="name">
      </td>
      <td class="tag">性別</td>
      <td>
        <input type="radio" name="sex" value="1 or 2" checked>全て
        <input type="radio" name="sex" value="1">男性
        <input type="radio" name="sex" value="2">女性
      </td>
    </tr>
    <tr>
      <td class="tag">登録日</td>
      <td>
        <input type="date" class="date-input" name="date_start">～
        <input type="date" class="date-input" name="date_end">
      </td>
    </tr>
    <tr>
      <td class="tag">メールアドレス</td>
      <td>
        <input type="text" class="mail-input" name="mail">
      </td>
    </tr>
  </table>
  
  <input type="submit" class="input-buttun" value="検索">
</div>

<div class="result">
  <table class="result-table">
    <tr class="result-table-contents">
      <th class="result-table-id">ID</th>
      <th class="result-table-name">お名前</th>
      <th class="result-table-sex">性別</th>
      <th class="result-table-mail">メールアドレス</th>
      <th class="result-table-idea">ご意見</th>
    </tr>
    @foreach($items as $item)
    <tr class="result-table-item">
      <td class="result-table-id">{{$item->id}}</td>
      <td class="result-table-name">{{$item->name}}</td>
      <td class="result-table-sex">{{$item->sex}}</td>
      <td class="result-table-mail">{{$item->mail}}</td>
      <td class="result-table-idea">{{$item->idea}}</td>
      <td><button class="result-table-buttun">削除</button></td>
    </tr>
    @endforeach
  </table>
</div>

</form>
@endsection