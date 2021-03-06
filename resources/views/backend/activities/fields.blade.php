<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<!-- Images Field -->
<div class="col-lg-12">
    <div class="form-group">
        {{ Form::file('image[]',['class' => 'control','id' => 'files', 'multiple' => 'multiple']) }}
    </div>
    <div id="selectedFiles"></div> 
</div>

<!-- Types Field-->
<div class="form-group col-sm-6">	
    {!! Form::label('types_id', 'Types') !!}
    <select name="types" class="form-control">
    	@foreach($types as $type)
    	<option value="{!! $type->id !!}">{!! $type->name !!}</option>
    	@endforeach
    </select>	
</div>

<!-- Descibe Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('describe', 'Descibe:') !!}
    {{ Form::textarea('describe', null, ['class' => 'form-control']) }}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'activities-textarea']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('activities.index') !!}" class="btn btn-default">Cancel</a>
</div>
