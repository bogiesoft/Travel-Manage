<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time', 'Time:') !!}
    {!! Form::text('time', null, ['class' => 'form-control']) !!}
</div>

<!-- Describe Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('describe', 'Describe:') !!}
    {!! Form::textarea('describe', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('times.index') !!}" class="btn btn-default">Cancel</a>
</div>
