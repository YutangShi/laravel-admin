<!-- Typeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typeid', 'Typeid:') !!}
    {!! Form::number('typeid', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Filedata Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('filedata', 'Filedata:') !!}
    {!! Form::textarea('filedata', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Cn Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cn_title', 'Cn Title:') !!}
    {!! Form::text('cn_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Cn Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cn_content', 'Cn Content:') !!}
    {!! Form::textarea('cn_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Eng Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eng_title', 'Eng Title:') !!}
    {!! Form::text('eng_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Eng Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('eng_content', 'Eng Content:') !!}
    {!! Form::textarea('eng_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rank', 'Rank:') !!}
    {!! Form::number('rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('news.index') !!}" class="btn btn-default">Cancel</a>
</div>
