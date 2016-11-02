@extends('backend/layout/layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Эрх
        <small> | Дэлгэрэнгүй</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.role.index') !!}"><i class="fa fa-user"></i> Эрх</a></li>
        <li class="active">Дэлгэрэнгүй</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    <div class="pull-left">
        <div class="btn-toolbar">
            <a href="{!! langRoute('admin.role.index') !!}"
               class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left"></span>&nbsp; Буцах
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <table class="table table-striped">
        <tbody>
        <tr>
            <td><strong>Эрх</strong></td>
            <td>{!! $role->name !!}</td>
        </tr>
        </tbody>
    </table>
</div>
@stop