<table class="table table-responsive" id="prices-table">
    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Content</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($prices as $price)
        <tr>
            <td>{!! $price->name !!}</td>
            <td>{!! $price->price !!}</td>
            <td>{!! $price->content !!}</td>
            <td style="width:80px;">
                {!! Form::open(['route' => ['prices.destroy', $price->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prices.show', [$price->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prices.edit', [$price->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>