<div class="table-responsive">
    <table class="table" id="organizations-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Contact Details</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Country Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($organizations as $organization)
            <tr>
                <td>{{ $organization->user_id }}</td>
            <td>{{ $organization->name }}</td>
            <td>{{ $organization->description }}</td>
            <td>{{ $organization->contact_details }}</td>
            <td>{{ $organization->city }}</td>
            <td>{{ $organization->state }}</td>
            <td>{{ $organization->country }}</td>
            <td>{{ $organization->country_id }}</td>
                <td>
                    {!! Form::open(['route' => ['organizations.destroy', $organization->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('organizations.show', [$organization->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('organizations.edit', [$organization->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
