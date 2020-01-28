<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $organization->user_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $organization->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $organization->description }}</p>
</div>

<!-- Contact Details Field -->
<div class="form-group">
    {!! Form::label('contact_details', 'Contact Details:') !!}
    <p>{{ $organization->contact_details }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{{ $organization->city }}</p>
</div>

<!-- State Field -->
<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    <p>{{ $organization->state }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $organization->country }}</p>
</div>

<!-- Country Id Field -->
<div class="form-group">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>{{ $organization->country_id }}</p>
</div>

