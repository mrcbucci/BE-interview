
<li class="nav-item">
    <a href="{{ route('companies.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded {{ Request::is('companies*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Companies</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded {{ Request::is('employees*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Employees</p>
    </a>
</li>
