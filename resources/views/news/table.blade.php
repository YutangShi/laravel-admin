<table class="table table-responsive" id="news-table">
    <thead>
        <th>編號</th>
        <th>標題</th>
        <th>狀態</th>
        <th>排序</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($news as $news)
        <tr>
            <td>{!! $news->id !!}</td>
            <td>{!! $news->title !!}</td>
            <td>{!! $news->status !!}</td>
            <td>{!! $news->rank !!}</td>
            <td>
                {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('news.show', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> 檢視</a>
                    <a href="{!! route('news.edit', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> 編輯</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> 刪除', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('你確定刪除嗎?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>