@extends('layouts.master')
@section('title', 'Create Page')
@section('parentPageTitle', 'App')
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Bootstrap WYSIHTML5
                    <small>Simple and fast</small>
                </h3>
                <!-- tools box -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <form action="">


                    <div class="mb-3">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <textarea class="textarea" placeholder="Place some text here"
                            style="width: 500%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <p class="text-sm mb-0">
                    Editor <a href="https://github.com/summernote/summernote">Documentation and license
                        information.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

@endsection
@section('js')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@section('modal')
@endsection
@section('script')
<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
    })
</script>
@endsection