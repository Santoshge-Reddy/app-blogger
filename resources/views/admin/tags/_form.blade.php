<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    </div>
</div>


<div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Color', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::color('color', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('color') }}</strong>
        </span>
    </div>
</div>