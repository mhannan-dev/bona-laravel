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
                        <h2>EDIT TAG</h2>

                    </div>
                    <div class="body">

                        {!! Form::model($tags, array('route'=>array('admin.tag.update', $tags->id), 'method'=>'PUT')) !!}

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="{{ $tags->name }}" type="text" class="form-control" name="name" required>
                                    <label class="form-label">Category Name</label>
                                </div>
                            </div>


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




    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/backEnd/js/admin.js') }}"></script>
    <script src="{{ asset('assets/backEnd/js/pages/tables/jquery-datatable.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('assets/backEnd/js/demo.js') }}"></script>

@endpush