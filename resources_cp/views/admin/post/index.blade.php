@extends ('layouts.backEnd.app')
@section('title', 'Post::Home')
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
                            <a href="{{ route('admin.post.create') }}" class="btn btn-danger waves-effect">
                                <i class="material-icons">add</i> ADD POST</a>

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



                            @if (count($posts) > 0 )
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Posted By </th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th><i class="material-icons">visibility</i></th>
                                        <th>Status</th>
                                        <th>Approved?</th>
                                        <th>Updated</th>
                                        <th class="text-center">Actions </th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Posted By </th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th><i class="material-icons">visibility</i></th>
                                        <th>Status</th>
                                        <th>Approved?</th>
                                        <th>Updated</th>
                                        <th class="text-center">Actions </th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($posts as $key => $post_list)

                                        <tr>
                                            <td>{{ $key + 1  }}</td>
                                            <td>

                                                @if($post_list->user->id == 1)
                                                    <span class="badge bg-blue">Admin</span>
                                                @else
                                                    <span class="badge bg-red">Author</span>
                                                @endif

                                            </td>

                                            <td>{{ str_limit($post_list->title,'10') }}</td>

                                            <td><img height="80" width="80" src="{{ asset('storage/post/'.$post_list->image) }}" alt=""></td>
                                            <td>{{ $post_list->view_count }}</td>
                                            <td>
                                                @if($post_list->status == true)
                                                    <span class="badge bg-blue">Published</span>
                                                @else
                                                    <span class="badge bg-pink">Pending</span>
                                                @endif

                                            </td>
                                            <td>
                                                @if($post_list->is_approved == true)
                                                    <span class="badge bg-blue">Approved</span>
                                                @else
                                                    <span class="badge bg-pink">Pending</span>
                                                @endif

                                            </td>
                                            <td>{{ $post_list->updated_at->diffForHumans() }}</td>

                                            <td>
                                                <a href="{{ route('admin.post.show', $post_list->id) }}" class="btn btn-primary"><i class="material-icons">visibility</i></a>
                                                <a href="{{ route('admin.post.edit', $post_list->id) }}" class="btn btn-primary waves-effect">
                                                    <i class="material-icons">edit</i></a>


                                                <form method="POST" id="delete-form-{{$post_list->id }}" action="{{ route('admin.post.destroy',$post_list->id) }}" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}

                                                </form>

                                                <button onclick="if(confirm('Are you Sure, You went to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $post_list->id }}').submit();
                                                        }else{
                                                        event.preventDefault();
                                                        }" class="btn btn-raised btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-danger">No Post found here</p>
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



