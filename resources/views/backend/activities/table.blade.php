<?php use App\Components\Util; ?>
<table class="table table-responsive" id="activities-table">
    <thead>
        <th>Title</th>
        <th>Describe</th>
        <th>Content</th>
        <th>Types Name</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($activities as $activity)
        <tr>
            <td>{{ $activity->title }}</td>
            <td>{!! Util::theExcerpt($activity->describe) !!}</td>
            <td>{!! Util::theExcerpt($activity->content) !!}</td>
            <td>{!! $activity->types->name !!}</td>
            <td style="width: 80px;">
                {!! Form::open(['route' => ['activities.destroy', $activity->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('activities.show', [$activity->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('activities.edit', [$activity->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>