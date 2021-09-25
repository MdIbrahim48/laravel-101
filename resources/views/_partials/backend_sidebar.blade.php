
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                        class="hide-menu">System Setting </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('categories.index')}}" class="sidebar-link"><i
                            class="mdi mdi-note-outline"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('categories.create')}}" class="sidebar-link"><i
                            class="mdi mdi-note-outline"></i><span class="hide-menu">Add Category</span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Tables</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                            class="hide-menu">Full Width</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                            class="hide-menu">Forms </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic
                                </span></a></li>
                        <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                            class="hide-menu">Elements</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                            class="hide-menu">Authentication </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a>
                        </li>
                        <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item p-3">
                    <a href="https://github.com/wrappixel/matrix-admin-bt5" target="_blank" class="w-100 btn btn-cyan d-flex align-items-center text-white"><i class="mdi mdi-cloud-download font-20 me-2"></i>Download Free</a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>