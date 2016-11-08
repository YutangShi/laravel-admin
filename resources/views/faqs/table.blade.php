<table class="table table-responsive" id="faqs-table">
    <thead>
        <th>編號</th>
        <th>標題</th>
        <th width="200">內容</th>
        <th>排序</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($faqs as $faq)
        <tr>
            
            <td>{!! $faq->id !!}</td>
            <td>{!! $faq->title !!}</td>
            <td>{!! $faq->content !!}</td>
            <td>{!! $faq->status !!}</td>
            <td>
                {!! Form::open(['route' => ['faqs.destroy', $faq->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('faqs.show', [$faq->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> 檢視</a>
                    <a href="{!! route('faqs.edit', [$faq->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> 編輯</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> 刪除', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>