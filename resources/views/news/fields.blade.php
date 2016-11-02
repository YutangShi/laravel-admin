

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', '標題:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', '內文:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', '狀態:') !!}
    {{ Form::select('age', [
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
<div class="form-group col-sm-12">
    {!! Form::submit('儲存', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('news.index') !!}" class="btn btn-default">取消</a>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'content', {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
  });
</script> 