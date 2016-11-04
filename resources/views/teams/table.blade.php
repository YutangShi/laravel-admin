<table class="table table-responsive" id="teams-table">
    <thead>
        <th>標題</th>
        <th width="500">內文</th> 
        <th colspan="3"></th>
    </thead>
    <tbody>
    @foreach($teams as $team)
        <tr>
            
            <td>{!! $team->title !!}</td>
            <td>{!! $team->content !!}</td>
            <td>
                {!! Form::open(['route' => ['team.destroy', $team->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('team.edit', [$team->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> 編輯</a>
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>