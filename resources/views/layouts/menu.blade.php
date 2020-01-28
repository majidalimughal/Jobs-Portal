


<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{{ route('jobs.index') }}" class="text-bold"><span>My Jobs</span></a>
</li>

<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{{ route('jobs.index') }}" class="text-bold"><span>Open Jobs</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{{ route('skills.index') }}" class="text-bold"><span>My Skills</span></a>
</li>
<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.index') }}" class="text-bold"><span>My Account</span></a>
</li>


<li class="{{ Request::is('invitations*') ? 'active' : '' }}">
    <a href="{{ route('invitations.index') }}" class="text-bold"><span>My Invitations</span></a>
</li>



<li class="{{ Request::is('organizations*') ? 'active' : '' }}">
    <a href="{{ route('organizations.index') }}" class="text-bold"><span>My Organization</span></a>
</li>








<!--Admin Section -->
@if(Auth::user()->role_id<3)
<li class="header">Admin</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.index') }}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{{ route('skills.index') }}"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('organizations*') ? 'active' : '' }}">
    <a href="{{ route('organizations.index') }}"><i class="fa fa-edit"></i><span>Organizations</span></a>
</li>

<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{{ route('jobs.index') }}"><i class="fa fa-edit"></i><span>Jobs</span></a>
</li>

<!-- <li class="{{ Request::is('organizationUsers*') ? 'active' : '' }}">
    <a href="{{ route('organizationUsers.index') }}"><i class="fa fa-edit"></i><span>Organization Users</span></a>
</li> -->

<li class="{{ Request::is('invitations*') ? 'active' : '' }}">
    <a href="{{ route('invitations.index') }}"><i class="fa fa-edit"></i><span>Invitations</span></a>
</li>

<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{{ route('countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

@endif