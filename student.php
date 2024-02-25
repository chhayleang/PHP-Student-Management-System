<?php include('includes/header.php'); ?>

<!-- sidebar -->
<?php include('includes/sidebar.php'); ?>
<!-- end sidebar -->
<div class="container-fluid content">
    <?php include('includes/top_header.php'); ?>

    <!-- student content -->
    <div class="container-fluid py-3 d-flex justify-content-between ">
        <form class="d-flex " role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="d-flex justify-content-end">
            <div class="btn btn-success mx-4" data-bs-toggle="modal" data-bs-target="#addStuModalDialog"> <i
                    class="bi bi-plus-lg me-1"></i>Add Student </div>
            <!-- add student modal dialog -->

            <div class="modal fade" id="addStuModalDialog" tabindex="-1" aria-labelledby="studentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="studentModalLabel">Add Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="submit">
                                <div class="mb-3">
                                    <label for="#fName">First name</label>
                                    <input type="text" class="form-control" id="fName">
                                </div>
                                <div class="mb-3">
                                    <label for="#lName">Last name</label>
                                    <input type="text" class="form-control" id="lName">
                                </div>
                                <div class="mb-3">
                                    <label for="#gender">Gender</label>
                                    <select class="form-select form-select-md mb-3" aria-label="Large select example">
                                        <option selected>Select gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal dialog -->
            <div class="btn  btn-outline-primary">Generate Report</div>
        </div>
    </div>

    <table class="table table-striped text-center ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Enroll date</th>
                <th>Action</th>
                <!-- <th>Action</th> -->
            </tr>

        </thead>
        <tbody>

            <?php
            $students = [42, 3, 4, 5, 5, 6, 6, 6, 35, 34, 345, 345, 34, 344, 4, 4, 4, 4];
            foreach ($students as $student): ?>
                <tr>
                    <td>
                        <?= $student ?>
                    </td>
                    <!-- problem here make it position centered -->
                    <td>
                        <div class="rounded-circle bg-secondary " style="width: 30px; height: 30px; ">
                        </div>
                    </td>
                    <td>Sok</td>
                    <td>Sakda</td>
                    <td>Male</td>
                    <td>03-05-4023 </td>
                    <td>
                        <div class="dropdown ">
                            <button class="btn  " type="button" id="action-dropdown" data-bs-toggle="dropdown">
                                <!--  three dot vertical -->
                                <i class="bi bi-three-dots-vertical"></i>

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="action-dropdown">
                                <li>
                                    <a class="dropdown-item d-flex justify-content-center" href="#">
                                        Edit
                                        <i class="bi bi-pencil ms-3"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-center" href="#">
                                        Delete
                                        <i class="bi bi-trash ms-3"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </td>


                </tr>

            <?php endforeach; ?>


        </tbody>
    </table>
</div>



<?php include('includes/footer.php'); ?>