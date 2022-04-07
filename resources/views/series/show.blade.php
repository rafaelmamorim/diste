@extends('layouts.modal')

@section('template_title')
    {{ $series->name ?? 'Show Series' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body {{ $series->is_ended ?? ' bg-success'}}">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $series->name }}
                        </div>
                        <div class="form-group">
                            <strong>Session:</strong>
                            {{ $series->session }}
                        </div>
                        <div class="form-group">
                            <strong>Episode:</strong>
                            {{ $series->episode }}
                        </div>
                        <div class="form-group">
                            <strong>Date Last Episode:</strong>
                            {{ $series->date_last_episode }}
                        </div>
                        <div class="form-group">
                            <strong>Session Ended:</strong>
                            {{ $series->session_ended ? 'Yes' : 'No' }}
                        </div>
                        <div class="form-group">
                            <strong>Is Ended:</strong>
                            {{ $series->is_ended ? 'Yes' : 'No' }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $series->notes; }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
