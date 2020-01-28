<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Organization Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organization_id', 'Organization Id:') !!}
    {!! Form::number('organization_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Skills Required Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skills_required', 'Skills Required:') !!}
    {!! Form::number('skills_required', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Work Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('work_type', 'Work Type:') !!}
    {!! Form::text('work_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_type', 'Job Type:') !!}
    {!! Form::text('job_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('jobs.index') }}" class="btn btn-default">Cancel</a>
</div>
