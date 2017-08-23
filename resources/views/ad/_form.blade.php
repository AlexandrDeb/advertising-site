{!! Form::hidden('user_id', 1) !!}

<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('author_name') !!}
    {!! Form::text('author_name', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('created_at_datetime') !!}
    {!! Form::input('date', 'created_at_datetime', date('Y-m-d'), ['class'=>'form-control'] ) !!}
    </div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
</div>