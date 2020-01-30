<li class="{{ Request::is('patients*') ? 'active' : '' }}">
    <a href="3"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('patients*') ? 'active' : '' }}">
    <a href="{{ route('patients.index') }}"><i class="fa fa-heartbeat"></i><span>Patients</span></a>
</li>

<li class="{{ Request::is('staff*') ? 'active' : '' }}">
    <a href="{{ route('staff.index') }}"><i class="fa fa-users"></i><span>Staff</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{{ route('departments.index') }}"><i class="fa fa-building-o"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-user-o"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('notifications*') ? 'active' : '' }}">
    <a href="{{ route('notifications.index') }}"><i class="fa fa-bell"></i><span>Notifications</span></a>
</li>

<li class="{{ Request::is('appointments*') ? 'active' : '' }}">
    <a href="{{ route('appointments.index') }}"><i class="fa fa-calendar"></i><span>Appointments</span></a>
</li>

{{-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li> --}}

