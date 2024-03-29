<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $skill->name }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $skill->user_id }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $skill->start_date }}</p>
</div>

<!-- Skill Level Field -->
<div class="form-group">
    {!! Form::label('skill_level', 'Skill Level:') !!}
    <p>{{ $skill->skill_level }}</p>
</div>

<!-- Past Work History Field -->
<div class="form-group">
    {!! Form::label('past_work_history', 'Past Work History:') !!}
    <p>{{ $skill->past_work_history }}</p>
</div>

<!-- Any Other Information Field -->
<div class="form-group">
    {!! Form::label('any_other_information', 'Any Other Information:') !!}
    <p>{{ $skill->any_other_information }}</p>
</div>

<!-- Admin Interview Field -->
<div class="form-group">
    {!! Form::label('admin_interview', 'Admin Interview:') !!}
    <p>{{ $skill->admin_interview }}</p>
</div>

<!-- Admin User Id Field -->
<div class="form-group">
    {!! Form::label('admin_user_id', 'Admin User Id:') !!}
    <p>{{ $skill->admin_user_id }}</p>
</div>

<!-- Score Field -->
<div class="form-group">
    {!! Form::label('score', 'Score:') !!}
    <p>{{ $skill->score }}</p>
</div>

<!-- Interview Requested Field -->
<div class="form-group">
    {!! Form::label('interview_requested', 'Interview Requested:') !!}
    <p>{{ $skill->interview_requested }}</p>
</div>

<!-- Interview Amount Paid Field -->
<div class="form-group">
    {!! Form::label('interview_amount_paid', 'Interview Amount Paid:') !!}
    <p>{{ $skill->interview_amount_paid }}</p>
</div>

