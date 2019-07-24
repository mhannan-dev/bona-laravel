@extends ('layouts.backEnd.app')
@section('title', 'CATEGORY')
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
                        <h2>ADD NEW CATEGORY</h2>

                    </div>
                    <div class="body">

                        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name">
                                    <label class="form-label">Category Name</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="file" name="image">
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Validation -->


    </div>
@endsection


@push('scripts')


@endpush