<nav id="sidebar" class="sidebar">
    <div class="sidebar-content">

        <a class="sidebar-toggle mr-2">
            <i class="fas fa-bars"></i>
        </a>

        <div class="company-logo">
            <img src="/images/logo.png" class="logo1" alt="company-logo" width="100%"/>
            <img src="/images/logo-2.png" class="logo2" alt="company-logo-2" width="100%"/>
            <div class="company-name">
                Company Name
            </div>
        </div>


        <ul class="sidebar-nav">
            <li class="sidebar-header">
                HOSPITAL MANAGEMENT
            </li>
            <li class="sidebar-item">   
                <a href="#masterfiles" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">MASTERFILES</span>
                    </span>
                </a>
                <ul id="masterfiles" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">MASTERFILES</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/patients">PATIENTS</a></li>
                </ul>
            </li>
            <li class="sidebar-item">   
                <a href="#transactions" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">TRANSACTIONS</span>
                    </span>
                </a>
                <ul id="transactions" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">TRANSACTIONS</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">EMERGENCIES</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">OUTPATIENTS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">INPATIENTS</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                SETUP
            </li>
            <li class="sidebar-item">
                <a href="#payroll_setup" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">PAYROLL</span>
                    </span>
                </a>
                <ul id="payroll_setup" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PAYROLL SETUP</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/work_assignments">WORK ASSIGNMENTS</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>