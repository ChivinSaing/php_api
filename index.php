<?php include('function.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-dark p-3 float-end">
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Data
        </button>
    </div>
    <!-- <table border="" class="table table-dark table-hover align-middle" style="table-layout: fixed; text-align: center;">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
    </table> -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="p-3 rounded-3"
                        style="background: linear-gradient(lightblue,lightgreen,lightpink);">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Full Name*" class="form-control">
                        <label for="">Gender</label>
                        <select name="gender" id="" class="form-select">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="">Position</label>
                        <input type="text" name="position" placeholder="Position*" class="form-control">
                        <label for="">Salary</label>
                        <input type="text" name="salary" placeholder="Salary*" class="form-control">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-success mt-2" name="btn_submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>