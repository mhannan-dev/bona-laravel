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

                    <div class="body">
                        <div class="table-responsive">



                            @if (count($comments) > 0 )
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Commented By </th>
                                        <th>Post Title </th>
                                        <th>Comment</th>
                                        <th>Published</th>
                                        <th>Actions </th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Commented By </th>
                                        <th>Post Title </th>
                                        <th>Comment</th>
                                        <th>Published</th>
                                        <th>Actions </th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($comments as $key => $comment_list)

                                        <tr>
                                            <td> {{ $key + 1}}  </td>
                                            <td>{{ $comment_list->user->name }}</td>
                                            <th>{{ $comment_list->post->title }} </th>
                                            <td>{{ $comment_list->comment }}</td>
                                            <td>{{ $comment_list->created_at->format('d/m/Y') }}</td>

                                            <td>


                                                <form method="POST" id="delete-form-{{$comment_list->id }}" action="{{ route('admin.comment.destroy',$comment_list->id) }}" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}

                                                </form>

                                                <button onclick="if(confirm('Are you Sure, You went to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $comment_list->id }}').submit();
                                                        }else{
                                                        event.preventDefault();
                                                        }" class="btn btn-raised btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            @else
                                <p>No comments published</p>
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



