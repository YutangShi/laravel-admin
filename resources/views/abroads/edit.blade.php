@extends('admin.layout') 
@extends('admin.header') 
@extends('admin.left_nav') 

@section('content')
    <section class="content-header">
        <h1>
            Abroad 遊學資訊
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($abroad, ['route' => ['abroads.update', $abroad->id], 'method' => 'patch']) !!}

                        @include('abroads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@extends('admin.footer') 
@extends('admin.sidebar') 
@extends('admin.script')