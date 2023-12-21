<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <h1 class="bg-dark text-light text-center py-2">Florasis</h1>
    <div class="container">
        <div class="row">
            <!--  form modal-->
            <div class="modal fade" id="usermodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="addform" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!--username-->
                                <div class="form-group">
                                    <label>Name:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text 
                                         bg-dark"><i class="fas fa-user-alt
                                        text-light"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter your username"
                                            autocomplete="off" required="required" id="username" name="username">
                                    </div>
                                </div>
                                <!--email-->
                                <div class="form-group">
                                    <label>Email:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text 
                                         bg-dark"><i class="fas fa-envelope-open
                                        text-light"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Enter your Email"
                                            autocomplete="off" required="required" id="email" name="email">
                                    </div>
                                </div>
                                <!--mobile-->
                                <div class="form-group">
                                    <label>Mobile:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text 
                                         bg-dark"><i class="fas fa-phone
                                        text-light"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter your mobile"
                                            autocomplete="off" required="required" id="mobile" name="mobile"
                                            maxlength="10" minlength="10">
                                    </div>
                                </div>
                                <!--photo-->
                                <div class="form-group">
                                    <label>Photo:</label>
                                    <div class="input-group">
                                        <label class="custom-file-label" for="userphoto"></label>
                                        <input type="file" class="custom-file-input" name="photo" id="userphoto">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark">Submit</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--input search and button section-->
            <div class="row mb-3">
                <div class="col-10">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text
                    bg-dark"><i class="fas fa-search
                    text-light"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
                        Add
                    </button>
                </div>
            </div>
        </div>

        <!--table-->
        <!-- <table class="table" id="usertable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Picture1</th>
                    <td>Mary</td>
                    <td>mary@gmail.com</td>
                    <td>4384943322</td>
                    <td>
                        <span>Edit</span>
                        <span>profile</span>
                        <span>Delete</span>
                    </td>
                </tr>
            </tbody>
        </table> -->

        <!--pagination-->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disable"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>




    <!--jQueary-->
    <script src=" https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!--bootstrap popper and js link-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>