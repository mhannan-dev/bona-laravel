@extends ('layouts.backEnd.app')
@section('title', 'Tag')
@push('stylesheet')
<!-- JQuery DataTable Css -->
<link href="{{ asset('assets/backEnd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}} " rel="stylesheet">
@endpush


@section('content')
    <div class="container-fluid">

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>

                            <a href="{{ route('admin.tag.create') }}" class="btn btn-danger waves-effect"><i class="material-icons">add</i> ADD TAG</a>
                        </h2>
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif


                    </div>
                    <div class="body">
                        <div class="table-responsive">



                            @if (count($all_tags) > 0 )
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Name</th>
                                        <th>Slug</th>

                                        <th>Created </th>


                                        <th>Actions </th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Name</th>
                                        <th>Slug</th>

                                        <th>Created </th>


                                        <th>Actions </th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($all_tags as $key => $tag_list)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $tag_list->name }}</td>
                                            <td>{{ $tag_list->slug }}</td>

                                            <td>{{ $tag_list->created_at->diffForHumans() }}</td>


                                            <td>
                                                <a href="{{ route('admin.tag.edit', $tag_list->id) }}" class="btn btn-primary waves-effect">
                                                    <i class="material-icons">edit</i></a>


                                                <form method="POST" id="delete-form-{{$tag_list->id }}" action="{{ route('admin.tag.destroy',$tag_list->id) }}" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}

                                                </form>

                                                <button onclick="if(confirm('Are you Sure, You went to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $tag_list->id }}').submit();
                                                        }else{
                                                        event.preventDefault();
                                                        }" class="btn btn-raised btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                            </td>

                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
@endsection


@push('scripts')



@endpush



