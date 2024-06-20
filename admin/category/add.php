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
                            <h2>Add New Category</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Categories</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
                            <a href="index.php?act=list_category" class="btn btn-light">Back to Category</a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="index.php?act=add_category" method="POST" class="row" enctype="multipart/form-data">
                <div class="col-lg-12 col-12">
                    <!-- card -->
                    <div class="card mb-6 shadow border-0">
                        <!-- card body -->
                        <div class="card-body p-6">
                            <h4 class="mb-4 h5 mt-5">Category Information</h4>

                            <div class="row">
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id" placeholder="ID" required disabled/>
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Category Name" required />
                                </div>
                                <div>
                                    <div class="mb-3 col-lg-12 mt-5">
                                        <!-- heading -->
                                        <h4 class="mb-3 h5">Category Images</h4>

                                        <!-- input -->
									    <input type="file" name="image" id="">
                                    </div>
                                </div>

                                <!-- button -->
                                <div class="col-lg-12">
                                    <button name="submit" type="submit" href="#" class="btn btn-primary">Create Category</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
                </div>
                
            </form>
        </div>
    </main>