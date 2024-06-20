<div class="main-wrapper">
    <!-- navbar vertical -->
    <!-- navbar -->
    <?php include 'box_left.php'; ?>
    <main class="main-content-wrapper">
        <div class="container">
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                        <div>
                            <h2>Users</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
                            <a href="index.php?act=add_user" class="btn btn-primary">Add New User</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <div class="card h-100 card-lg">
                        <div class="p-6">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-12">
                                    <form class="d-flex" role="search">
                                        <input class="form-control" type="search" placeholder="Search Users" aria-label="Search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Role</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($listUser as $value) {
                                                extract($value);
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userOne" />
                                                    <label class="form-check-label" for="userOne"></label>
                                                </div>
                                            </td>

                                            <td><?= $id ?></td>
                                            <td><?= $user ?></td>

                                            <td><?= $pass ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $role ?></td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a onclick="return confirm('Bạn có chắc xóa không')" class="dropdown-item" href="index.php?act=delete_user&id=<?= $id ?>">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user&id=<?= $id ?>">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        ?>

                                        <!-- <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userTwo" />
                                                    <label class="form-check-label" for="userTwo"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Judy Nelson</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>judynelson@gmail.com</td>

                                            <td>27 April, 2023 at 2:47pm</td>
                                            <td>435-239-6436</td>
                                            <td>$490.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userThree" />
                                                    <label class="form-check-label" for="userThree"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">John Mattox</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>johnmattox@gmail.com</td>

                                            <td>27 April, 2023 at 2:47pm</td>
                                            <td>347-424-9526</td>
                                            <td>$29.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userFour" />
                                                    <label class="form-check-label" for="userFour"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-4.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Wayne Rossman</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>waynerossman@gmail.com</td>

                                            <td>27 April, 2023 at 2:47pm</td>
                                            <td>-</td>
                                            <td>$39.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userFive" />
                                                    <label class="form-check-label" for="userFive"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-5.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Rhonda Pinson</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>rhondapinson@gmail.com</td>

                                            <td>18 March, 2023 at 2:47pm</td>
                                            <td>304-471-8451</td>
                                            <td>$213.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userSix" />
                                                    <label class="form-check-label" for="userSix"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-6.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">John Mattox</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>johnmattox@gmail.com</td>

                                            <td>18 March, 2023 at 2:47pm</td>
                                            <td>410-636-2682</td>
                                            <td>$490.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userSeven" />
                                                    <label class="form-check-label" for="userSeven"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-7.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Wayne Rossman</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>waynerossman@gmail.com</td>

                                            <td>18 March, 2023 at 2:47pm</td>
                                            <td>845-294-6681</td>
                                            <td>$39.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userEight" />
                                                    <label class="form-check-label" for="userEight"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-8.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Richard Shelton</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>richarddhelton@jourrapide.com</td>

                                            <td>12 March, 2023 at 9:47am</td>
                                            <td>313-887-8495</td>
                                            <td>$19.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userNine" />
                                                    <label class="form-check-label" for="userNine"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-9.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Stephanie Morales</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>stephaniemorales@gmail.com</td>

                                            <td>22 Feb, 2023 at 9:47pm</td>
                                            <td>812-682-1588</td>
                                            <td>$250.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userTen" />
                                                    <label class="form-check-label" for="userTen"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-10.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Stephanie Morales</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>stephaniemorales@gmail.com</td>

                                            <td>22 Feb, 2023 at 9:47pm</td>
                                            <td>812-682-1588</td>
                                            <td>$250.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="userEleven" />
                                                    <label class="form-check-label" for="userEleven"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/avatar/avatar-11.jpg" alt="" class="avatar avatar-xs rounded-circle" />
                                                    <div class="ms-2">
                                                        <a href="#" class="text-inherit">Pasquale Kidd</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>pasqualekidd@rhyta.com</td>

                                            <td>22 Feb, 2023 at 9:47pm</td>
                                            <td>336-396-0658</td>
                                            <td>$159.00</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="index.php?act=edit_user">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>