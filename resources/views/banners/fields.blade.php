<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('picture', '圖片檔案:') !!}
    {{ Form::file('picture',null, ['class' => 'form-control']) }}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', '標題:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', '圖片介紹:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
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

<!-- Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rank', '排序:') !!}
    {!! Form::number('rank', 1, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-6">
    {!! Form::submit('儲存', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('banners.index') !!}" class="btn btn-default">Cancel</a>
</div>
