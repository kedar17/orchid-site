<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" style="height: 120px; padding: 20px 15px; min-height: 120px;">
        <div class="sidebar-brand-logo" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('img/orchid_logo_white.svg') }}" alt="Orchid Software" style="width: 95%; height: auto; max-width: 100%; object-fit: contain; filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.2));">
        </div>
    </a>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading">
        <br>Management
    </div>

    <!-- Start ========================================================= Project List -->
    <li class="nav-item">
        <a class="nav-link" href="/clients">
            <i class="fas fa-user"></i>
            <span>Client Management</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/users">
            <i class="fas fa-user"></i>
            <span>User Management</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/projects">
            <i class="fas fa-file"></i>
            <span>Project Management</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/task-management">
            <i class="fas fa-tasks"></i>
            <span>Task Management</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/materials">
            <i class="fas fa-archive"></i>
            <span>Material & Inventory</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExpense"
            aria-expanded="false" aria-controls="collapseExpense">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Expense Management</span>
            <i class="fas ms-2 fa-arrow-down"></i>
        </a>

        <div id="collapseExpense" class="bg-white py-2 collapse-inner rounded collapse"
            data-bs-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded">
                <a class="collapse-item" href="/budget-planning">Budget planning</a>
                <a class="collapse-item" href="/expense-track">Expense tracking</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Heading -->
    <div class="sidebar-heading">
        <br> <br>Activity
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/finance-billing">
            <i class="fas fa-money-bill"></i>
            <span>Finance & Billing</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/payment-settlement">
            <i class="fas fa-fw fa-table"></i>
            <span>Payment & settlement logs</span></a>
    </li>
    <!-- END ========================================================== Project List -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>