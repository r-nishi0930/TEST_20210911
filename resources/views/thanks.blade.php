@extends('layouts.default')
<style>
  .content{
    margin-left: 50px;
  }
  .message{
    text-align: center;
    margin-top: 40vw;
  }
  .input-buttun{
    margin: 40px 40vw;
    width: 120px;
    height: 40px;
    background-color: black;
    color: white;
  }

</style>



@section('content')

<h2 class="message">
  ご意見いただきありがとうございました。
</h2>

<input type="submit" class="input-buttun" value="トップページへ">

</form>
@endsection