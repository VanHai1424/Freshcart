<div class="main-wrapper">
    <!-- navbar vertical -->
    <!-- navbar -->
    <?php include 'box_left.php'; 
        if(is_array($user)) {
            extract($user);
        }
    ?>

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
                            <h2>Edit User</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
            <form action="index.php?act=update_user" method="POST" class="row">
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
                                    <input type="text" class="form-control" value="<?= $id ?>" required disabled />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?= $user ?>" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="pass" class="form-control" value="<?= $pass ?>" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?= $email ?>" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" name="role">
                                        <option>Role</option>
                                        <option <?= ($role == 0) ? 'selected' : '' ?> value="0">Admin</option>
                                        <option <?= ($role == 1) ? 'selected' : '' ?> value="1">User</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <!-- button -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Update User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>