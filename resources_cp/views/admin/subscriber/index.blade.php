@extends ('layouts.backEnd.app')
@section('title', 'Subscribers')
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
                            All Subscribers
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">

                            @if (count($subscrs) > 0 )
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Email</th>
                                        <th>Created </th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Email</th>
                                        <th>Created </th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($subscrs as $key => $subscriber)
                                        <tr>
                                            <td> {{ $key + 1  }}</td>
                                            <td>{{ $subscriber->email  }}</td>


                                            <td>{{ $subscriber->created_at->diffForHumans() }}</td>




                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            @else
                                <p class="text-danger">No Subscriber found here</p>
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



