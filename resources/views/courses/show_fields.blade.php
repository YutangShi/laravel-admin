
<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', '標題:') !!}
    <p>{!! $course->title !!}</p>
</div>


<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', '內容:') !!}
    <p>{!! $course->content !!}</p>
</div>

<!-- Cn Title Field -->
<div class="form-group">
    {!! Form::label('cn_title', 'Cn Title:') !!}
    <p>{!! $course->cn_title !!}</p>
</div>

<!-- Cn Content Field -->
<div class="form-group">
    {!! Form::label('cn_content', 'Cn Content:') !!}
    <p>{!! $course->cn_content !!}</p>
</div>

<!-- Eng Title Field -->
<div class="form-group">
    {!! Form::label('eng_title', 'Eng Title:') !!}
    <p>{!! $course->eng_title !!}</p>
</div>

<!-- Eng Content Field -->
<div class="form-group">
    {!! Form::label('eng_content', 'Eng Content:') !!}
    <p>{!! $course->eng_content !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $course->status !!}</p>
</div>

<!-- Rank Field -->
<div class="form-group">
    {!! Form::label('rank', 'Rank:') !!}
    <p>{!! $course->rank !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $course->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $course->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $course->deleted_at !!}</p>
</div>

