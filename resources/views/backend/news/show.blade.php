@extends('backend/layout/layout')
@section('content')
{!! HTML::style('ckeditor/contents.css') !!}
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Мэдээ
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.news.index') !!}">Мэдээ</a></li>
        <li class="active">Мэдээ</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    <div class="col-lg-10">
        <div class="pull-left">
            <div class="btn-toolbar">
                <a href="{!! langRoute('admin.news.index') !!}"
                   class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Буцах </a>
            </div>
        </div>
        <br> <br> <br>
        <table class="table table-striped">
            <tbody>
            <tr>
                <td><strong>Гарчиг</strong></td>
                <td>{!! $news->title !!}</td>
            </tr>
            <tr>
                <td><strong>Линк</strong></td>
                <td>{!! $news->slug !!}</td>
            </tr>
            <tr>
                <td><strong>Нийтлэгдсэн</strong></td>
                <td>{!! $news->is_published !!}</td>
            </tr>
            <tr>
                <td><strong>Мэдээлэл</strong></td>
                <td>{!! $news->content !!}</td>
            </tr>
            <tr>
                <td><strong>Нэмсэн огноо</strong></td>
                <td>{!! $news->created_at !!}</td>
            </tr>
            <tr>
                <td><strong>Зассан огноо</strong></td>
                <td>{!! $news->updated_at !!}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
@stop