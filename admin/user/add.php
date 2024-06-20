<div class="main-wrapper">
    <!-- navbar vertical -->
    <!-- navbar -->
    <?php include 'box_left.php'; ?>

    <!-- main -->
    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <!-- page header -->
                        <div>
                            <h2>Add New User</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New User</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="index.php?act=list_user" class="btn btn-light">Back to User</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <form action="index.php?act=add_user" method="POST" class="row">
                <div class="col-lg-12 col-12">
                    <!-- card -->
                    <div class="card mb-6 shadow border-0">
                        <!-- card body -->
                        <div class="card-body p-6">
                            <h4 class="mb-4 h5 mt-5">User Information</h4>

                            <div class="row">
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">ID</label>
                                    <input type="text" class="form-control" placeholder="ID" required disabled />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">User Name</label>
                                    <input type="text" name="user" class="form-control" placeholder="User Name" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="pass" class="form-control" placeholder="Password" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" name="role">
                                        <option selected>Role</option>
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                </div>

                                <!-- button -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Create User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
                </div>
            </form>
        </div>
    </main>