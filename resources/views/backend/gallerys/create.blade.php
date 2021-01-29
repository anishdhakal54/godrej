@extends('backend.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Photo</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('dashboard.gallerys.index') }}">Galleries</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                @include('backend.partials.message-success')
                @include('backend.partials.message-error')
            </div>

            {!! Form::open(['route'=>'dashboard.gallerys.store', 'files' => true, 'class' => '']) !!}
            @include('backend.gallerys.form', ['submitButtonText' => 'Submit'])
            {!! Form::close() !!}
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>
        jQuery(function () {
            CKEDITOR.replace('content');
        });
    </script>
@endpush