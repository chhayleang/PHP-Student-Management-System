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
            <div class="btn  btn-outline-primary">Generate Report</div>
        </div>
    </div>

    <table class="table table-striped text-center ">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Enroll date</th>
                <th>Action</th>
                <!-- <th>Action</th> -->
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>23235</td>
                <td>Sok</td>
                <td>Sakda</td>
                <td>Male</td>
                <td>03-05-2023 </td>
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

                <!-- <td>
                    <div class="btn btn-sm btn-secondary">Edit</div>
                    <div class="btn btn-sm btn-danger">Delete</div>
                </td> -->
            </tr>


        </tbody>
    </table>
</div>


<?php include('includes/footer.php'); ?>