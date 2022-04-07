@extends('layouts.app')

@section('template_title')
    About
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card rounded">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('About') }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <p>
                        This project is the result of my studies of the Laravel framework, 
                        which started in the last week of February 2022 and consuming a 
                        few hours of my weekends since then. The main goal is to 
                        understand how Laravel works, its connections with 
                        the database, authentication system, simple pages with some 
                        information, etc.
                    </p>
                    <p>
                        It's a lot of things to learn yet, but I will put this project 
                        on GitHub, to others can learn a little bit of this framework.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection