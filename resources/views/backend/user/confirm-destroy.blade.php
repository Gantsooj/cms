@extends('backend/layout/layout')
@section('content')
<section class="content-header">
    <h1> Хэрэглэгч
        <small> | Хэрэглэгч устгах</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.user.index') !!}"><i class="fa fa-user"></i> Хэрэглэгч</a></li>
        <li class="active">Хэрэглэгч устгах</li>
    </ol>
</section>
<br>
<br>
<br>
<div class="col-lg-10">
    {!! Form::open( array(  'route' => array(getLang(). '.admin.user.destroy', $user->id ) ) ) !!}
    {!! Form::hidden( '_method', 'DELETE' ) !!}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Болгоомжтой!</b> Та устгахдаа итгэлтэй байна уу? <b>{!! $user->username !!} </b> ?
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