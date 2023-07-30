<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>  <!-- Core -->
                            <a class="nav-link" href="/sige/index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house" style="color: #c7c7c7;"></i></div>
                                Home
                            </a>

                            <div class="sb-sidenav-menu-heading">ADMIN</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users-gear"></i></div>
                                Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/sige/src/pages/admin/students.php"><i class="fa-solid fa-circle-dollar-to-slot"></i>Money's collection</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-file-invoice"></i></i>Certificate center</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-repeat"></i>In and expenses</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-file-invoice-dollar"></i>Billing center</a> 
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-users-between-lines"></i>User´s data</a> 

                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Interface</div>   
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-school-circle-check"></i></div>
                                Academic
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/sige/src/pages/admin/students.php"> <i class="fa-solid fa-user-pen"></i> Student´s score</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"> <i class="fa-solid fa-calendar-check"></i></i>Attendents register</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-file-contract"></i></i>Academic report</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-file-signature"></i>disciplinary report</a>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-cloud-arrow-up"></i></i></div>
                                File upload zone
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/sige/events/auth/login.html">Login</a>
                                            <a class="nav-link" href="/sige/events/auth/password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/sige/events/error/401.html">401 Page</a>
                                            <a class="nav-link" href="/sige/events/error/404.html">404 Page</a>
                                            <a class="nav-link" href="/sige/events/error/500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            

                            <div class="sb-sidenav-menu-heading"></div>
                            </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in:</div>
                        Full Name School
                    </div>
                </nav>
            </div>