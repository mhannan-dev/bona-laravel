@extends ('layouts.backEnd.app')
@section('title', 'Edit Category')
@push('stylesheet')
<!-- JQuery DataTable Css -->
<link href="{{ asset('assets/backEnd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}} " rel="stylesheet">
@endpush


@section('content')
    <div class="container-fluid">

        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>EDIT CATEGORY</h2>

                    </div>
                    <div class="body">

                        {!! Form::model($category, array('route'=>array('admin.category.update', $category->id), 'method'=>'PUT' ,'enctype'=>'multipart/form-data')) !!}

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="{{ $category->name }}" type="text" class="form-control" name="name" required>
                                    <label class="form-label">Category Name</label>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">File input</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <a  class="btn btn-danger waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                        {!! Form::submit('SUBMIT', array('class'=>'btn btn-primary waves-effect')); !!}
                        {{Form::close()}}

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Validation -->


    </div>
@endsection


@push('scripts')



@endpush