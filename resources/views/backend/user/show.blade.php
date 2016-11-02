@extends('backend/layout/layout')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Хэрэглэгч
        <small> | Дэлгэрэнгүй</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.user.index') !!}"><i class="fa fa-user"></i> Хэрэглэгч</a></li>
        <li class="active">Дэлгэрэнгүй</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    <div class="col-lg-10">
        <div class="pull-left">
            <div class="btn-toolbar">
                <a href="{!! langRoute('admin.user.index') !!}"
                   class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp; Буцах </a>
            </div>
        </div>
        <br> <br> <br>
        <table class="table table-striped">
            <tbody>
            <tr>
                <td><strong>Зураг</strong></td>
                <td><img src="{!! gravatarUrl($user->email) !!}" alt="{!! $user->email !!}"/></td>
            </tr>
            <tr>
                <td><strong>Нэр</strong></td>
                <td>{!! $user->first_name !!}</td>
            </tr>
            <tr>
                <td><strong>Овог</strong></td>
                <td>{!! $user->last_name !!}</td>
            </tr>
            <tr>
                <td><strong>Емайл</strong></td>
                <td>{!! $user->email !!}</td>
            </tr>
            <tr>
                <td><strong>Үүсгэсэн огноо</strong></td>
                <td>{!! $user->created_at !!}</td>
            </tr>
            <tr>
                <td><strong>Сүүлд нэвтэрсэн</strong></td>
                <td>{!! $user->last_login !!}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@stop