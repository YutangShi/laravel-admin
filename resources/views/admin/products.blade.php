@extends('backend/layout') 

      
@extends('backend/header') 
@extends('backend/left_nav') 

      @section('content')
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>產品明細</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-hover data_table">
                    <caption>
                      <form action="" method="post">
                        <a class="btn btn-success btn-sm" href="/backend/product/create" data-toggle="tooltip" title="" data-original-title="新增">建立產品</a>
                        
                        <button type="submit" class="btn btn-sm btn-primary">查詢</button>
                      </form>
                    </caption>
                    <thead>
                      <tr>
                        <th>序號</th>
                        <th>排序</th>
                        <th>品名</th>
                        <th>時間</th>
                        <th>狀態</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
@foreach($products as $product)
<tr>
  <td>{{$product->id}}</td>
  <td><input type="text" name="ranking" class="ranking" size="4"/></td>
  <td>
      {{$product->title}}<br/>
      <img src="/img/products/{{$product->image_original}}" width="180"/>
  </td>
  <td>{{$product->created_at}}</td>
  <td>
    <select id="{{$product->id}}" class="status" name="status">
        <option>請選擇</option>
        <option value="1">上架</option>
        <option value="0">下架</option>
    </select>
  </td>
  <td>
    <a class="btn btn-default btn-sm" href="/backend/product/{{$product->id}}/edit" data-toggle="tooltip" title="" data-original-title="修改">
      <i class="fa fa-pencil"></i>
    </a>
    
  </td>
  <td>
    <button type="button" class="btn btn-sm btn-default">刪除</button>
  </td>
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
<script>
$(function($){
  $('.status').change(function(e){
    var id=$(this).attr("id");
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var status_value = e.target.value;

          $.ajax({
              url: '/backend/product/update',
              type: 'PUT',
              data:{
                  _token: CSRF_TOKEN,
                  status:status_value,
                  id:id
              },
              dataType: 'JSON',
              success: function (data) {
                  console.log(data);
              }
          });    
      });
  });

  
</script>
      @stop

      @extends('backend/footer') 

      @extends('backend/sidebar') 
      

@extends('backend/script') 