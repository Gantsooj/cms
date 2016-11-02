@extends('backend/layout/layout')
@section('content')
    {!! HTML::style('ckeditor/contents.css') !!}
    {!! HTML::script('assets/js/jquery.lazyload.min.js') !!}
    <script type="text/javascript">
        $(function () {
            $("img.lazy").lazyload({
                effect: "fadeIn"
            });
        });
    </script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Зургийн цомог 
            <small>| Дэлгэрэнгүй</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! langRoute('admin.photo-gallery.index') !!}"><i class="fa fa-desktop"></i> Зургийн цомог</a>
            </li>
            <li class="active">Дэлгэрэнгүй</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">
        <div class="col-lg-10">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!! langRoute('admin.photo-gallery.index') !!}"
                       class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Буцах </a>
                </div>
            </div>
            <br> <br> <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Гарчиг</strong></td>
                    <td>{!! $photo_gallery->title !!}</td>
                </tr>
                <tr>
                    <td><strong>Мэдээлэл</strong></td>
                    <td>{!! $photo_gallery->content !!}</td>
                </tr>
                <tr>
                    <td><strong>Үүсгэсэн огноо</strong></td>
                    <td>{!! $photo_gallery->created_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Шинэчилсэн огноо</strong></td>
                    <td>{!! $photo_gallery->updated_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Зураг</strong></td>
                    <td>
                        @if($photo_gallery->photos->count())
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach($photo_gallery->photos as $photo)
                                        <img style="border-radius: 20px;" class="lazy left" data-original="{!! url('uploads/dropzone/thumb_' . $photo->file_name) !!}"/>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop