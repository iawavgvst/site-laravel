<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Users
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Posts
                </p>
                <span class="badge badge-info right"></span>
            </a>
        </li>
    </ul>
</nav>
