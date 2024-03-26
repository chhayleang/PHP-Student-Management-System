<?php include ('includes/header.php'); ?>

<!-- sidebar -->
<?php include ('includes/sidebar.php'); ?>
<!--  include database connection -->
<?php include ('includes/db_connection.php'); ?>
<!-- end sidebar -->
<div class="container-fluid content">
    <?php include ('includes/top_header.php'); ?>

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
                            <form action="save_student.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="#fName">First name</label>
                                    <input type="text" class="form-control" id="fName" name="fName">
                                </div>
                                <div class="mb-3">
                                    <label for="#lName">Last name</label>
                                    <input type="text" class="form-control" id="lName" name="lName">
                                </div>
                                <div class="mb-3">
                                    <label for="#gender">Gender</label>
                                    <select name="gender-selection" class="form-select form-select-md mb-3"
                                        aria-label="Large select example">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="#enroll_date">Enroll date</label>
                                    <div class="container d-flex p-0">
                                        <input class="form-control" placeholder="dd-mmm-yyyy" name="enrollDate" />
                                        <button class="btn btn-outline-secondary bi bi-calendar3"
                                            type=" button"></button>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-3">

                                    <label for="imageSelect"
                                        class="d-flex my-3 align-items-center justify-content-center text-center selectedImage"
                                        style="width:100px;height:100px;border:1.5px solid gray ; border-radius:10px">
                                        <img id="selectedImage"
                                            style="width:100px;height:100px;border:1.5px solid gray ; border-radius:10px">
                                    </label>

                                    <input type="file" class="form-control-file" id="imageSelect" name="profile">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="save_student" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end modal dialog -->
            <div class="btn  btn-outline-primary">Generate Report</div>
        </div>
    </div>

    <table class="table table-striped text-center  ">
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
            $query = "SELECT * FROM `student`";
            $students = $conn->query($query);
            foreach ($students as $student): ?>
                <tr>
                    <td>
                        <?php echo $student["id"] ?>
                    </td>
                    <!-- problem here make it position centered -->

                    <td class="d-flex justify-content-center p-3 ">
                        <div class="rounded-circle bg-secondary" style="width: 35px; height: 35px; overflow: hidden;">
                            <?php echo '<img src="uploads/' . $student['profile'] . '" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;" alt="Image">'; ?>
                        </div>
                    </td>

                    <td>
                        <?php echo $student["first_name"] ?>
                    </td>
                    <td>
                        <?php echo $student["last_name"] ?>
                    </td>
                    <td>
                        <?php echo $student["gender"] ?>
                    </td>
                    <td>
                        <?php echo $student["enroll_date"] ?>
                    </td>
                    <td>
                        <div class="dropdown ">
                            <button class="btn  " type="button" id="action-dropdown" data-bs-toggle="dropdown">
                                <!--  three dot vertical -->
                                <i class="bi bi-three-dots-vertical"></i>

                            </button>
                            <ul class="dropdown-menu " aria-labelledby="action-dropdown">
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between " href="#">
                                        Edit
                                        <i class="bi bi-pencil ms-3 text-success"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between" href="#">
                                        Delete
                                        <i class="bi bi-trash ms-3 text-danger"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </td>


                </tr>

            <?php endforeach;
            $conn->close();
            ?>




        </tbody>
    </table>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>



<?php include ('includes/footer.php'); ?>