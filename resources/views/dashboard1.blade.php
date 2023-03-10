<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MANLAB SATAS</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/image/logosatas.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles_landingpage.css" rel="stylesheet" />
    <link href="css/styles_table.css" rel="stylesheet" />
</head>

<body>
    <!-- Header-->
    <nav class="navbar navbar-light bg-dark static-top">
        <div class="container">
            <img src="/image/logosatas.png" alt="" width="60">
            <strong class="navbar-brand text-white" href="#!">&nbsp; &nbsp;MANLAB SATAS</strong>
        </div>

    </nav>

    <div class="container text-dark" style="margin-top: 30px">
        <h5>Jadwal Laboratorium SMAN 1 Tasikmalaya</h5>
        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
    </div>

    {{-- Table --}}

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Laboratorium TIK</h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Mata Pelajaran</th>
                            <th>Jam ke/Waktu</th>
                            <th>Kelas</th>
                            <th>Guru Pembimbing</th>
                            <th>Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Senin</td>
                            <td>TIK</td>
                            <td>1 & 2 / 07.00 - 08.30</td>
                            <td>XII MIPA 1</td>
                            <td>Cecep Riki, S.T., M.kom</td>
                            <td>Lab TIK</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Senin</td>
                            <td>Informatika</td>
                            <td>3 & 4 / 08.30 - 10.00</td>
                            <td>XII MIPA 3</td>
                            <td>Cecep Riki, S.T., M.kom</td>
                            <td>Lab Informatika</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rabu</td>
                            <td>Informatika</td>
                            <td>1 & 2 / 07.00 - 08.30</td>
                            <td>XII MIPA 3</td>
                            <td>Cecep Riki, S.T., M.kom</td>
                            <td>Lab Informatika</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rabu</td>
                            <td>TIK</td>
                            <td>7 & 8 / 12.30 - 14.00</td>
                            <td>XII IPS 3</td>
                            <td>Cecep Riki, S.T., M.kom</td>
                            <td>Lab TIK</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Kamis</td>
                            <td>Informatika</td>
                            <td>1 & 2 / 07.00 - 08.30</td>
                            <td>XII MIPA 4</td>
                            <td>Cecep Riki, S.T., M.kom</td>
                            <td>Lab Informatika</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Kamis</td>
                            <td>Informatika</td>
                            <td>3 & 4 / 08.30 - 10.00</td>
                            <td>XII MIPA 4</td>
                            <td>Cecep Riki, S.T., M.kom</td>
                            <td>Lab Informatika</td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>6</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Table --}}


    <!-- Footer -->
    <div class="container-fluid copyright py-3 bg-dark">
        <div class="container">
            <div class="row">
                <div class="text-center text-white">
                    <p>
                        SI-ITENAS All Right Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
</body>

</html>