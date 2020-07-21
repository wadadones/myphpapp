<!-- 埋め込む側にyield、埋め込まれる側にextendsを使う -->
@extends('book/layout')
@section('content')
<!-- ここでテンプレートに値を渡す -->
@include("book/form", ["target" => "update"])
@endsection
