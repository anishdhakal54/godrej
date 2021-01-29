@extends('backend.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Product Categories
            {{-- <small>({{ $categoriesCount }})</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Categories</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @include('backend.partials.message-success')
                @include('backend.partials.message-error')
            </div>
            <div class="col-md-4">
                {!! Form::open(['route' => 'dashboard.categories.store', 'files' => true, 'class' => '']) !!}
                @include('backend.categories.form-create', ['submitButtonText' => 'Save'])
                {!! Form::close() !!}
            </div>
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Categories</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Parent</th>
                                    <th>Created at</th>
                                    <th class="sorting-false">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allCategories as $category)
                                
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $category->name }}</td>
                                   <td>
                                       @php
                                           
                                           if($category->parent_id!=null){
                                  $parent_cat=   App\Models\Category::where('id',$category->parent_id)->first();
echo $parent_cat->name;
                                }
                                       @endphp
                                   </td>
                                
                                
                                    <td>{{ $category->created_at }}</td>

                                </tr>
                                @endforeach
                              

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th class="sorting-false">Parent</th>
                                    <th>Created at</th>
                                    <th class="sorting-false">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
