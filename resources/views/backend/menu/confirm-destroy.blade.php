@extends('backend/layout/layout')
@section('content')

<section class="content-header">
    <h1> Цэс <small> | Цэс устгах</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url(getLang(). '/admin/menu') !!}">Цэс</a></li>
        <li class="active">Цэс устгах</li>
    </ol>
</section>
<br>
<br>
<div class="col-lg-10">
    {!! Form::open( array( 'route' => array( getLang() . '.admin.menu.destroy', $menu->id ) ) ) !!}
    {!! Form::hidden( '_method', 'DELETE' ) !!}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Болгоомжтой!</b> Устгахдаа итгэлтэй байна уу <b>{!! $menu->title !!} </b> ?
        </div>
        <div class="pull-right">
            {!! Form::submit( 'Тийм', array( 'class' => 'btn btn-danger' ) ) !!}
            {!! link_to( URL::previous(), 'Үгүй', array( 'class' => 'btn btn-primary' ) ) !!}
        </div>
        <div class="clearfix"></div>
    </div>
    {!! Form::close() !!}
</div>
@stop
