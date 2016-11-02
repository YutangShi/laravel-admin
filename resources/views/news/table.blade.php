<table class="table table-responsive" id="news-table">
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
    @foreach($news as $news)
        <tr>
            <td>{!! $news->typeid !!}</td>
            <td>{!! $news->title !!}</td>
            <td>{!! $news->filedata !!}</td>
            <td>{!! $news->content !!}</td>
            <td>{!! $news->cn_title !!}</td>
            <td>{!! $news->cn_content !!}</td>
            <td>{!! $news->eng_title !!}</td>
            <td>{!! $news->eng_content !!}</td>
            <td>{!! $news->status !!}</td>
            <td>{!! $news->rank !!}</td>
            <td>
                {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('news.show', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('news.edit', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>