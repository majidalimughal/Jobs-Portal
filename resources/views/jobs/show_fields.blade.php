<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $job->user_id }}</p>
</div>

<!-- Organization Id Field -->
<div class="form-group">
    {!! Form::label('organization_id', 'Organization Id:') !!}
    <p>{{ $job->organization_id }}</p>
</div>

<!-- Country Id Field -->
<div class="form-group">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>{{ $job->country_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $job->title }}</p>
</div>

<!-- Skills Required Field -->
<div class="form-group">
    {!! Form::label('skills_required', 'Skills Required:') !!}
    <p>{{ $job->skills_required }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $job->Description }}</p>
</div>

<!-- Work Type Field -->
<div class="form-group">
    {!! Form::label('work_type', 'Work Type:') !!}
    <p>{{ $job->work_type }}</p>
</div>

<!-- Job Type Field -->
<div class="form-group">
    {!! Form::label('job_type', 'Job Type:') !!}
    <p>{{ $job->job_type }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $job->status }}</p>
</div>

