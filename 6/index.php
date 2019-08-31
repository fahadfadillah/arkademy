<?php 
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy Bootcamp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <!-- <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            Arkademy Bootcamp
        </a>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-right">    
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Add
                    </a>
                </div>
                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Work</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $data = mysqli_query($koneksi, "SELECT n.name, w.name, k.salary FROM nama n INNER JOIN work w ON n.id_work = w.id INNER JOIN kategori k ON n.id_salary = k.id");
                            while($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $d[0] ?></th>
                                <td><?php echo $d['name'] ?></td>
                                <td>Rp <?php echo number_format($d[2], 0, ',', '.') ?></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>&nbsp;
                                    <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal">
                                        <i class="fa fa-edit"></i>
                                    </a>&nbsp;
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="alert alert-success d-none alert-delete" role="alert">
                    Data Rebecca telah berhasil dihapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Work">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Salary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" value="Rebecca">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="1" selected>Frontend Dev</option>
                                <option value="2">Backend Dev</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="1" selected>Rp 10.000.000</option>
                                <option value="2">Rp 12.000.000</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('.btn-delete').click(function () {
                $('.alert-delete').removeClass('d-none');
            });
        });
    </script>
</body>
</html>