<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $organizationUser->user_id }}</p>
</div>

<!-- Organization Id Field -->
<div class="form-group">
    {!! Form::label('organization_id', 'Organization Id:') !!}
    <p>{{ $organizationUser->organization_id }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $organizationUser->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $organizationUser->end_date }}</p>
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $organizationUser->role }}</p>
</div>

