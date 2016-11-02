
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '姓名Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', '信箱Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', '密碼Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Usertype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usertype', 'Usertype:') !!}
    {!! Form::text('usertype', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('managers.index') !!}" class="btn btn-default">Cancel</a>
</div>
