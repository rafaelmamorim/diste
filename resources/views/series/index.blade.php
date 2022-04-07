@extends('layouts.app')

@section('template_title')
    Series
@endsection

@section('content')
<script>
$(document).ready(function(){

    $('.seriesinfo').click(function(){
console.log("aqui");
        var serieid = $(this).data('id');
console.log(serieid);
        // AJAX request
        $.ajax({
            url: 'http://diste.rafaelamorim.com.br/series/'+serieid,
            type: 'GET',
            success: function(response){
                // Add response in Modal body
                $('.modal-body').html(response);

                // Display Modal
                $('#empModal').modal('show');
            }
        });
    });
});
</script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card rounded">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Series') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('series.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Name</th>
										<th>Session</th>
										<th>Episode</th>
										<th class="d-none d-lg-table-cell">Date Last Episode</th>
                                        <th class="d-none d-lg-table-cell">Session Ended?</th>
										<th class="d-none d-lg-table-cell">Is Ended?</th>
                                        <th class="d-none d-lg-table-cell">Notes</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($series as $serie)

                                        @php ($background = '')
                                        @if ($serie->is_ended==1)
                                            @php ($background = 'class=bg-success style=--bs-bg-opacity:.5;')
                                        @else
                                            @if ($serie->session_ended)
                                                @php ($background = 'class=bg-info style=--bs-bg-opacity:.5;')
                                            @endif
                                        @endif
                                        <tr {{ $background }}>
											<td>{{ $serie->name }}</td>
											<td>{{ $serie->session }}</td>
											<td>{{ $serie->episode }}</td>
											<td>{{ \Carbon\Carbon::parse($serie->date_last_episode)->format('d/m/Y')}} </td>
                                            <td class="d-none d-lg-table-cell">{{ $serie->session_ended ? 'Yes' : 'No' }}</td>
											<td class="d-none d-lg-table-cell">{{ $serie->is_ended ? 'Yes' : 'No' }}</td>
                                            <td class="d-none d-lg-table-cell">{{ Str::of($serie->notes)->limit(20); }}</td>
                                            <td>
                                                <form action="{{ route('series.destroy',$serie->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary seriesinfo" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $serie->id }}"><i class="fa fa-fw fa-eye"></i> <span class="d-none d-lg-inline">Show</span></a>
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('series.show',$serie->id) }}"><i class="fa fa-fw fa-eye"></i> <span class="d-none d-lg-inline">Show</span></a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('series.edit',$serie->id) }}"><i class="fa fa-fw fa-edit"></i> <span class="d-none d-lg-inline">Edit</span></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <span class="d-none d-lg-inline">Delete</span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" d-flex justify-content-center">
                    {!! $series->links() !!}
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
    <div class="modal fade" id="empModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Series Info</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
