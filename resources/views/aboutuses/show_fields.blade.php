

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', '標題:') !!}
    <p>{!! $aboutus->title !!}</p>
</div>


<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', '內容:') !!}
    <p>{!! $aboutus->content !!}</p>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', '狀態:') !!}
    {{ Form::select('status', [
       '1' => '開啟',
       '0' => '關閉',
       ]
    ) }}
</div>

