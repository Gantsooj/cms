@extends('backend/layout/layout')
@section('content')
<section class="content-header">
    <h1> Зургийн цомог 
        <small> | Устгах</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.photo-gallery.index') !!}"><i class="fa fa-desktop"></i> Зургийн цомог</a></li>
        <li class="active">Устгах</li>
    </ol>
</section>
<br>
<br>
<br>
<div class="col-lg-10">
    {!! Form::open( array(  'route' => array(getLang(). '.admin.photo-gallery.destroy', $photo_gallery->id ) ) ) !!}
    {!! Form::hidden('_method', 'DELETE') !!}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Болгоомжтой!</b> Та устгахдаа итгэлтэй байна уу? <b>{!! $photo_gallery->title !!} </b> ?
        </div>
        <div class="pull-right">
            {!! Form::submit('Тийм', array('class' => 'btn btn-danger')) !!}
            {!! link_to( URL::previous(), 'Үгүй', array( 'class' => 'btn btn-primary' ) ) !!}
        </div>
        <div class="clearfix"></div>
    </div>
    {!! Form::close() !!}
</div>
@stop