<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                {{-- <div class="dropdown-divider"></div> --}}
                <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal"
                    data-bs-target="#changePasswordModal">
                    <i class="fas fa-lock mr-2"></i> Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.logout') }}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>

            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> --}}


    </ul>


</nav>
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.updatePassword') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Current Password:<span class="mandatory">*</span></label>
                            <input id="formBasicCurrent_password" type="password" name="current_password"
                                placeholder="Enter Current Password" autocomplete="off" class="form-control"
                                value="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="form-label">New Password:<span class="mandatory">*</span></label>
                            <input type="password" name="new_password" placeholder="Enter New Password"
                                autocomplete="off" class="form-control" value="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="form-label">Confirm Password:<span class="mandatory">*</span></label>
                            <input type="password" name="cnew_password" placeholder="Enter Confirm Password"
                                autocomplete="off" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <input type="button" class="btn btn-primary" data-bs-dismiss="modal" value="cancel">
                    <input type="submit" class="btn btn-primary" value="Save">

                </div>
            </form>
        </div>
    </div>
</div>
