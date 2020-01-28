<div class="table-responsive">
    <table class="table" id="organizationUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Organization Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($organizationUsers as $organizationUser)
            <tr>
                <td>{{ $organizationUser->user_id }}</td>
            <td>{{ $organizationUser->organization_id }}</td>
            <td>{{ $organizationUser->start_date }}</td>
            <td>{{ $organizationUser->end_date }}</td>
            <td>{{ $organizationUser->role }}</td>
                <td>
                    {!! Form::open(['route' => ['organizationUsers.destroy', $organizationUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('organizationUsers.show', [$organizationUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('organizationUsers.edit', [$organizationUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
