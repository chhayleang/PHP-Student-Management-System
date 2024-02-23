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

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Enroll date</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>23235</td>
                <td>Sok</td>
                <td>Sakda</td>
                <td>03-05-2023</td>
                <td>
                    <div class="btn btn-sm btn-secondary">Edit</div>
                    <div class="btn btn-sm btn-danger">Delete</div>
                </td>
            </tr>
            <tr>
                <td>23235</td>
                <td>Sok</td>
                <td>Sakda</td>
                <td>03-05-2023</td>
                <td>
                    <div class="btn btn-sm btn-secondary">Edit</div>
                    <div class="btn btn-sm btn-danger">Delete</div>
                </td>
            </tr>
            <tr>
                <td>23235</td>
                <td>Sok</td>
                <td>Sakda</td>
                <td>03-05-2023</td>
                <td>
                    <div class="btn btn-sm btn-secondary">Edit</div>
                    <div class="btn btn-sm btn-danger">Delete</div>
                </td>
            </tr>

        </tbody>
    </table>
</div>


<?php include('includes/footer.php'); ?>