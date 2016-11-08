<table class="table table-responsive" id="aboutuses-table">
    <thead>
        <th>編號</th>
        <th>標題</th>
        <th>內容</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($aboutuses as $aboutus)
        <tr>
            <td>{!! $aboutus->id !!}</td>
            <td>{!! $aboutus->title !!}</td>
            <td>{!! $aboutus->content !!}</td>
            
            <td>{!! $aboutus->status !!}</td>
            <td>
                {!! Form::open(['route' => ['aboutuses.destroy', $aboutus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('aboutuses.show', [$aboutus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> 檢視</a>
                    <a href="{!! route('aboutuses.edit', [$aboutus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> 編輯</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> 刪除', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>