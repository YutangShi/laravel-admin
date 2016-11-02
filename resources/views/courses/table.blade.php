<table class="table table-responsive" id="courses-table">
    <thead>
        <th>Typeid</th>
        <th>Title</th>
        <th>Filedata</th>
        <th>Content</th>
        <th>Cn Title</th>
        <th>Cn Content</th>
        <th>Eng Title</th>
        <th>Eng Content</th>
        <th>Status</th>
        <th>Rank</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr>
            <td>{!! $course->typeid !!}</td>
            <td>{!! $course->title !!}</td>
            <td>{!! $course->filedata !!}</td>
            <td>{!! $course->content !!}</td>
            <td>{!! $course->cn_title !!}</td>
            <td>{!! $course->cn_content !!}</td>
            <td>{!! $course->eng_title !!}</td>
            <td>{!! $course->eng_content !!}</td>
            <td>{!! $course->status !!}</td>
            <td>{!! $course->rank !!}</td>
            <td>
                {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courses.show', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courses.edit', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>