<table class="table table-responsive" id="courses-table">
    <thead>
        <th>編號 id</th>
        <th>標題 title</th>
        <th>內文Content</th>
        
        <th>狀態Status</th>
        <th>排序Rank</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr>
            <td>{!! $course->id !!}</td>
            <td>{!! $course->title !!}</td>
            <td>{!! $course->content !!}</td>
            
            <td>{!! $course->status !!}</td>
            <td>{!! $course->rank !!}</td>
            <td>
                {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courses.show', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> 檢視</a>
                    <a href="{!! route('courses.edit', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> 編輯</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>