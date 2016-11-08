<table class="table table-responsive" id="abroads-table">
    <thead>
        <th>編號</th>
        <th>標題</th>
        <th>內容</th>
        <th>排序</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($abroads as $abroad)
        <tr>
            <td>{!! $abroad->id !!}</td>
            <td>{!! $abroad->title !!}</td>
            <td>{!! $abroad->content !!}</td>
            
            <td>{!! $abroad->status !!}</td>
            <td>
                {!! Form::open(['route' => ['abroads.destroy', $abroad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('abroads.show', [$abroad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> 檢視</a>
                    <a href="{!! route('abroads.edit', [$abroad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> 編輯</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> 刪除', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>