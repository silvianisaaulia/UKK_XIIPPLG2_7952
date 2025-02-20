<h1 class="mt-4">ToDoList</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">My ToDoList</li>
</ol>


<div class="row">
        <div class="col-xl-12 col-md-10">
            <div class="card text-white mb-4"  style="background-color:rgb(44, 68, 134);">
                <div class="card-body">
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM categories"));
                    ?>
                    Total Category</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=categories">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-10">
            <div class="card text-white mb-4"  style="background-color:rgb(44, 68, 134);">
                <div class="card-body">
                Tasks</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=tasks">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        </div>
</div>