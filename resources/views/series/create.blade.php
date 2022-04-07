@extends('layouts.app')

@section('template_title')
    Create Series
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Series</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('series.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('series.form')

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </section>
@endsection
