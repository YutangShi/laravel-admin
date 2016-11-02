@extends('admin.layout') 
@extends('admin.header') 
@extends('admin.left_nav') 

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>管理者<small>名冊</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">管理者</a></li>
            <li class="active">管理者名單</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover data_table">
                    <caption>
                        <button type="button" class="btn btn-sm btn-success" onclick="location.href='/admin/managers/create'">建立管理者</button>
                    </caption>
                    <thead>
                      <tr>
                        <th>序號</th>
                        <th>姓名</th>
                        <th>Email</th>
                        <th>狀態</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($managers as $manager)
                      <tr>
                        <td>{!! $manager->id !!}</td>
                        <td>{!! $manager->name !!}</td>
                        <td>{!! $manager->email !!}</td>
                        <td>{!! $manager->status !!}</td>
                        <td><button type="button" class="btn btn-success" onclick="location.href='/admin/managers/{!! $manager->id !!}/edit'">編輯</button></td>
                        <td><button type="button" class="btn btn-default delete" id="{{$manager->id}}">刪除</button></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      <!-- /.content-wrapper -->
<script type="text/javascript">
$(function(){
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    $('.delete').click(function(){
        if(confirm("確認刪除此會員嗎")){
            let id=$(this).attr("id");
            $.ajax({
                url: '/backend/manager/'+id,
                type: 'DELETE',
                data:{
                }
            }).success(function(res){
                let data = jQuery.parseJSON(res);
                alert(data);
                if(data.status==200){
                    alert("已移除該管理者。");
                }else{
                    alert("刪除失敗");
                }
           });

        }else{
            return false;
        }
    })
})
</script>
@endsection

@extends('admin.footer') 
@extends('admin.sidebar') 
@extends('admin.script') 
