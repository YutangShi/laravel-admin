<table class="table table-responsive" id="managers-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Usertype</th>
        <th>Remember Token</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($managers as $manager)
        <tr>
            <td>{!! $manager->name !!}</td>
            <td>{!! $manager->email !!}</td>
            <td>{!! $manager->password !!}</td>
            <td>{!! $manager->usertype !!}</td>
            <td>{!! $manager->remember_token !!}</td>
            <td>
                {!! Form::open(['route' => ['managers.destroy', $manager->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('managers.show', [$manager->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('managers.edit', [$manager->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>