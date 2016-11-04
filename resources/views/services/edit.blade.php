@extends('admin.layout') 
@extends('admin.header') 
@extends('admin.left_nav') 

@section('content')
    <section class="content-header">
        <h1>服務介紹</h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'patch']) !!}

                        @include('services.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@extends('admin.footer') 
@extends('admin.sidebar') 
@extends('admin.script')