<div class="box box-info padding-1">
    <div class="box-body">
        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
        <div class="form-group mt-2">
            {{ Form::label('name') }}
            {{ Form::text('name', $series->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('session') }}
            {{ Form::number('session', $series->session, ['class' => 'form-control' . ($errors->has('session') ? ' is-invalid' : ''), 'placeholder' => 'Session']) }}
            {!! $errors->first('session', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('episode') }}
            {{ Form::number('episode', $series->episode, ['class' => 'form-control' . ($errors->has('episode') ? ' is-invalid' : ''), 'placeholder' => 'Episode']) }}
            {!! $errors->first('episode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('date_last_episode') }}
            {{ Form::date('date_last_episode', $series->date_last_episode, ['class' => 'form-control' . ($errors->has('date_last_episode') ? ' is-invalid' : ''), 'placeholder' => 'Date Last Episode']) }}
            {!! $errors->first('date_last_episode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            <div class="row">
                <div class="col-6 text-center">
                    {{ Form::label('is_ended') }}
                    {{ Form::checkbox('is_ended', $series->is_ended, $series->is_ended==1 ? true : false) }}
                    {!! $errors->first('is_ended', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-6 text-center">
                    {{ Form::label('session_ended') }}
                    {{ Form::checkbox('session_ended', $series->session_ended, $series->session_ended==1 ? true : false) }}
                    {!! $errors->first('session_ended', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <hr>
        </div>
        <div class="form-group">
            {{ Form::label('notes') }}
            {{ Form::textarea('notes', $series->notes, ['class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''), 'rows' => 4, 'placeholder' => 'Notes']) }}
            {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('series.index')}}" class="btn btn-secondary">Cancel</a>
    </div>
</div>