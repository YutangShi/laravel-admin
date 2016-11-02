<table class="table table-responsive" id="banners-table">
    <thead>
        <th>Picture</th>
        <th>Title</th>
        <th>Content</th>
        <th>Status</th>
        <th>Rank</th>
        <th>Current At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($banners as $banner)
        <tr>
            <td>{!! $banner->picture !!}</td>
            <td>{!! $banner->title !!}</td>
            <td>{!! $banner->content !!}</td>
            <td>{!! $banner->status !!}</td>
            <td>{!! $banner->rank !!}</td>
            <td>{!! $banner->current_at !!}</td>
            <td>
                {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('banners.show', [$banner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('banners.edit', [$banner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>