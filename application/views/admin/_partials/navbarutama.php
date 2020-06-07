<nav class="navbar navbar-expand navbar-dark bg-warning static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        
    </form>
    <a class="btn btn-success" href="<?php echo site_url('admin/login')?>" type="submit" name="" value="Login">LOGIN</a>
    <!--<input href="<?php echo site_url('admin/login_page') ?>" class="btn btn-success" type="submit" name="" value="Login" /> !-->
    </ul>


</nav>