@extends ('layouts.backEnd.app')
@section('title', 'All Authors')
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



                    </div>
                    <div class="body">
                        <div class="table-responsive">



                            @if (count($authors) > 0 )
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Posts</th>
                                        <th>Comments</th>
                                        <th>Favorite Posts</th>
                                        <th>Updated</th>
                                        <th class="text-center">Actions </th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Posts</th>
                                        <th>Comments</th>
                                        <th>Favorite Posts</th>
                                        <th>Updated</th>
                                        <th class="text-center">Actions </th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($authors as $key => $catt)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $catt->username  }}</td>
                                            <td>{{ $catt->posts_count  }}</td>
                                            <td>{{ $catt->comments_count }}</td>

                                            <td>{{ $catt->favorite_posts_count }}</td>


                                            <td>{{ $catt->updated_at->diffForHumans() }}</td>

                                            <td class="text-center">



                                                <form method="POST" id="delete-form-{{$catt->id }}" action="{{ route('admin.author.destroy',$catt->id) }}" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}

                                                </form>

                                                <button onclick="if(confirm('Are you Sure, You went to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $catt->id }}').submit();
                                                        }else{
                                                        event.preventDefault();
                                                        }" class="btn btn-raised btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                            </td>

                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            @else
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-danger">No author found</p>
                                </div>

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



