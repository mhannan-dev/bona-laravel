@extends ('layouts.backEnd.app')
@section('title', 'Edit Tag')
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
                        <h2>ADD NEW TAG</h2>

                    </div>
                    <div class="body">
                        {{Form::open(array('route'=>'admin.tag.store','method'=>'post'))}}

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" required>
                                <label class="form-label">Tag Name</label>
                            </div>
                        </div>

                        {!! Form::submit('Back', array('class'=>'btn btn-danger waves-effect')); !!}
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

--}}

@endpush