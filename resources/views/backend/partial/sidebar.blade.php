<nav id="sidebar" class="sidebar">
    <div class="sidebar-content">

        <a class="sidebar-toggle mr-2">
            <i class="fas fa-bars"></i>
        </a>

        <div class="company-logo">
            <a href="/">
                <img src="/images/logo.png" class="logo1" alt="company-logo" width="100%"/>
                <img src="/images/logo-2.png" class="logo2" alt="company-logo-2" width="100%"/>
            </a>
            <div class="company-name">
                Company Name
            </div>
        </div>


        <ul class="sidebar-nav">
            
            <li class="sidebar-item">
                <a href="/dashboard" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">DASHBOARD</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                HOSPITAL MANAGEMENT
            </li>
            <li class="sidebar-item">
                <a href="#patientmanagement" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">PATIENT</span>
                    </span>
                </a>
                <ul id="patientmanagement" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">PATIENT MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/patients">PATIENTS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/set_appointment">APPOINTMENT SCHEDULE</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#staffmanagement" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-user-md"></i> <span class="align-middle">STAFF</span>
                    </span>
                </a>
                <ul id="staffmanagement" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">STAFF MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/doctors">DOCTORS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/set_appointment">NURSES</a></li>
                </ul>
            </li>


            <li class="sidebar-header">
                TRANSACTION
            </li>

            <li class="sidebar-item">
                <a href="#admission" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">ADMISSION</span>
                    </span>
                </a>
                <ul id="admission" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">ADMISSION</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">INPATIENTS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">EMERGENCIES</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">OUTPATIENTS</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#supplies_transaction" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-boxes"></i> <span class="align-middle">SUPPLIES INVENTORY</span>
                    </span>
                </a>
                <ul id="supplies_transaction" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">SUPPLIES INVENTORY</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/inventory">CREATE INVENTORY</a></li>
                </ul>
            </li>


            <!-- <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-bed"></i> <span class="align-middle">FACILITY</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#ehr" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-file-invoice"></i> <span class="align-middle">EHR</span>
                    </span>
                </a>
                <ul id="ehr" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">ADMISSION</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ehr/health_information">REFERRAL</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ehr/vital_signs">VITAL SIGN</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">E-PRESCRIPTION</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ehr/specialized_notes">SPECIALIZE NOTE</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ehr/video_conference">VIDEO CONFERENCE</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/dashboard">DATA TRENDS</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#billing_and_payment" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-money-check-alt"></i> <span class="align-middle">BILLING</span>
                    </span>
                </a>
                <ul id="billing_and_payment" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">BILLING AND PAYMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/billing">BILLING AND PAYMENT</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">REPORTS</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-user-nurse"></i> <span class="align-middle">NURSE STATION</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#inventory" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-boxes"></i> <span class="align-middle">INVENTORY</span>
                    </span>
                </a>
                <ul id="inventory" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">SUPPLIES INVENTORY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/inventory">CREATE INVENTORY</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#pharmacy" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-prescription-bottle-alt"></i> <span class="align-middle">PHARMACY</span>
                    </span>
                </a>
                <ul id="pharmacy" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHARMACY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/pharmacy">INVENTORY</a></li>

                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#radiology" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-x-ray"></i> <span class="align-middle">RADIOLOGY</span>
                    </span>
                </a>
                <ul id="radiology" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHARMACY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/radiology_procedure">RADIOLOGY PROCEDURE</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/radiology_result">RADIOLOGY RESULT</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="##" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-flask"></i> <span class="align-middle">LABORATORY</span>
                    </span>
                </a>
                <ul id="#" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHARMACY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/billing">BILLING</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/payment">PAYMENT</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tint"></i> <span class="align-middle">BLOOD BANK</span>
                    </span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tshirt"></i> <span class="align-middle">LINEN AND LAUNDRY</span>
                    </span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-warehouse"></i> <span class="align-middle">MORTUARY MANAGEMENT</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="##" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-briefcase-medical"></i> <span class="align-middle">MEDICAL EQUIPMENT</span>
                    </span>
                </a>
                <ul id="#" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHARMACY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/billing">BILLING</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/payment">PAYMENT</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="##" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-sort-numeric-up-alt"></i> <span class="align-middle">QUEUE MANAGEMENT</span>
                    </span>
                </a>
                <ul id="#" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHARMACY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/billing">BILLING</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/payment">PAYMENT</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#philhealth" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-heartbeat"></i> <span class="align-middle">PHILHEALTH ECLAIMS</span>
                    </span>
                </a>
                <ul id="philhealth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHILHEALTH ECLAIMS</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/philhealth_claims">FILE A CLAIM</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tablets"></i> <span class="align-middle">PHARMACY MANAGEMENT</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-desktop"></i> <span class="align-middle">PACS</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-folder"></i> <span class="align-middle">REPORTS</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="##" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-comments"></i> <span class="align-middle">FEEDBACK</span>
                    </span>
                </a>
                <ul id="#" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PHARMACY MANAGEMENT</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/billing">BILLING</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/hms/payment">PAYMENT</a></li>
                </ul>
            </li> -->

            <li class="sidebar-header">
                MAINTENANCE
            </li>

            <li class="sidebar-item">
                <a href="#supplies_maintenance" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-boxes"></i> <span class="align-middle">SUPPLIES INVENTORY</span>
                    </span>
                </a>
                <ul id="supplies_maintenance" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">SUPPLIES INVENTORY</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/supplies_inventory/maintenance/suppliers">SUPPLIERS</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                SETUP
            </li>
            <li class="sidebar-item">
                <a href="#payroll_setup" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">USER</span>
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
