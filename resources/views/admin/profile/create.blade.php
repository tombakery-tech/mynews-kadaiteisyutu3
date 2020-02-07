<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <title>MyNews</title>
   </head>
   <body>
       <h1>プロフィール作成画面</h1>
   </body>
</html>

@extends('layouts.admin')
@section('title', 'プロフィールの新規作成')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-8 mx-auto">
         <h2>プロフィール新規作成</h2>
          <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
            
         @if (count($errors) > 0)
         <ul>
            @foreach($errors->all() as $e)
            <il>{{ $e  }}</il>
            @endforeach
         </ul>
         @endif
         <div class="form-group row">
            <label class="col-md-2">氏名</label>
           <div class="col-md-10">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
           </div>
         </div>
         <div class="form-group row">
            <label class="col-md-2">性別</label>
               <input type="radio" name="gender" value= "man"><b>男性</b>
               <input type="radio" name="gender" value= "woman"><b>女性</b>
            </div>
         <div class="form-group row">
            <label class="col-md-2">趣味</label>
            <div class="col-md-10">
               <input type="text" class="form-control" name="hobby" value="{{ old ('hobby') }}">
               </div>
            </div>
          <div class="form-group row">
            <label class="col-md-2">自己紹介欄</label>
            <div class="col-md-10">
               <textarea class="form-control" name="introduction" rows="20">{{ old ('introduction') }}</textarea>
            </div>
         </div>  
               {{ csrf_field() }}
               <input type="submit" class="btn btn-primary" value="送信">
         </form>
      </div>
   </div>
</div>
@endsection
