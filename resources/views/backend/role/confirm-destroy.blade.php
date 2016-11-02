@extends('backend/layout/layout')
@section('content')
<section class="content-header">
    <h1> Эрх
        <small> | Устгах</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.role.index') !!}"><i class="fa fa-user"></i> Эрх</a></li>
        <li class="active">Устгах</li>
    </ol>
</section>
<br>
<br>
<br>
<div class="col-lg-10">
    {!! Form::open( array(  'route' => array(getLang(). '.admin.role.destroy', $role->id ) ) ) !!}
    {!! Form::hidden( '_method', 'DELETE' ) !!}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Болгоомжтой!</b> Та устгахдаа итгэлтэй байнна уу? <b> {!! $role->name !!} </b> ?
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