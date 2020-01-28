<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $invitation->user_id }}</p>
</div>

<!-- Sender Contact Field -->
<div class="form-group">
    {!! Form::label('sender_contact', 'Sender Contact:') !!}
    <p>{{ $invitation->sender_contact }}</p>
</div>

<!-- Receiver User Id Field -->
<div class="form-group">
    {!! Form::label('receiver_user_id', 'Receiver User Id:') !!}
    <p>{{ $invitation->receiver_user_id }}</p>
</div>

<!-- Organization Id Field -->
<div class="form-group">
    {!! Form::label('organization_id', 'Organization Id:') !!}
    <p>{{ $invitation->organization_id }}</p>
</div>

<!-- Job Id Field -->
<div class="form-group">
    {!! Form::label('job_id', 'Job Id:') !!}
    <p>{{ $invitation->job_id }}</p>
</div>

<!-- Interview Status Field -->
<div class="form-group">
    {!! Form::label('interview_status', 'Interview Status:') !!}
    <p>{{ $invitation->interview_status }}</p>
</div>

<!-- Date Of Interview Field -->
<div class="form-group">
    {!! Form::label('date_of_interview', 'Date Of Interview:') !!}
    <p>{{ $invitation->date_of_interview }}</p>
</div>

<!-- Invitation Note Field -->
<div class="form-group">
    {!! Form::label('invitation_note', 'Invitation Note:') !!}
    <p>{{ $invitation->invitation_note }}</p>
</div>

<!-- Employer Interview Note Field -->
<div class="form-group">
    {!! Form::label('employer_interview_note', 'Employer Interview Note:') !!}
    <p>{{ $invitation->employer_interview_note }}</p>
</div>

<!-- Jobseeker Post Interview Review Field -->
<div class="form-group">
    {!! Form::label('jobseeker_post_interview_review', 'Jobseeker Post Interview Review:') !!}
    <p>{{ $invitation->jobseeker_post_interview_review }}</p>
</div>

