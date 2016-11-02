@extends('backend/layout/layout')
@section('content')
<section class="content-header">
    <h1> Хуудас <small> | Хуудас устгах</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.page.index') !!}"><i class="fa fa-bookmark"></i> Удирдах хэсэг</a></li>
        <li class="active">Хуудас устгах</li>
    </ol>
</section>
<br>
<br>
<br>
<div class="col-lg-10">
    {!! Form::open( array(  'route' => array(getLang(). '.admin.page.destroy', $page->id ) ) ) !!}
    {!! Form::hidden('_method', 'DELETE') !!}
     <div class="alert alert-danger">
            There might be a link given to this page, <a href="{!! langRoute('admin.menu.index') !!}">Check it</a>
        </div>
    <div class="alert alert-warning">
        <div class="pull-left"><b> Болгоомжтой!</b> Устгахдаа итгэлтэй байна уу <b>{!! $page->title !!} </b> ?
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
