@extends('admin.layout') 
@extends('admin.header') 
@extends('admin.left_nav') 
@section('content')
    <section class="content-header">
        <h1 class="pull-left">遊學Abroads</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('abroads.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('abroads.table')
            </div>
        </div>
    </div>
@endsection

@extends('admin.footer') 
@extends('admin.sidebar') 
@extends('admin.script')

