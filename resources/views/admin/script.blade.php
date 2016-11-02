@section('script')
    <!-- SlimScroll -->
    <script src="{{ asset('/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/AdminLTE/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/AdminLTE/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/AdminLTE/dist/js/demo.js') }}"></script>
    
    <!-- DataTables -->
    <script src="{{ asset('/AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>

    <!-- page script -->
    <script>
      $(function () {

        $(".data_table").DataTable({"language": {
            "lengthMenu": "每頁顯示 _MENU_ 筆資料",
            "zeroRecords": "未查詢到資料 - 抱歉",
            "info": "顯示  _PAGE_ / _PAGES_",
            "infoEmpty": "沒有任何資料",
            "infoFiltered": "(filtered from _MAX_ total records)",
                paginate: {
                first:      "第一頁",
                previous:   "前一頁",
                next:       "下一頁",
                last:       "最後頁"
            },
            "bStateSave":true,
        }});
      });
    </script>
@stop