<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/boxicons-2.1.4/css/boxicons.min.css">
</head>

<body class="d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mbModal"> Register</button>


    <!-- The Modal -->
    <div class="modal" id="mbModal">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header ">
                    <h5 class="text-secondary" style="text-align: center;">ការចុះឈ្មោះសុំចូលរៀនរបស់និស្សិត</h5>
                </div>

                <!-- Modal body -->
                <div class="modal-body ">
                    <form id="validators">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="id" class="col-lg-12 control-label">លេខអត្តសញ្ញាណ</label>
                                <input type="number" class="form-control form-control-sm mb-1" name="id" id="id" required>

                                <label for="gender" class="col-lg-12 control-label">ភេទ</label>
                                <select class="form-select form-select-sm mb-1" name="gender" id="gender" required>
                                    <option value="male">ប្រុស</option>
                                    <option value="female">ស្រី</option>
                                    <option value="other">ផ្សេងៗ</option>
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for="name" class="col-lg-12 control-label">ឈ្មោះ</label>
                                <input class="form-control form-control-sm mb-1" name="name" id="name" required>

                                <label type="text" for="name" class="col-lg-12 control-label">អាយុ</label>
                                <input type="number" class="form-control form-control-sm mb-1" name="name" id="name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="col-lg-12 control-label">អីម៉ែល</label>
                                <input type="email" class="form-control form-control-sm mb-1" name="name" id="name" required>

                                <label for="name" class="col-lg-12 control-label">ថ្ងៃខែឆ្នាំកំណើត</label>
                                <input type="date" class="form-control form-control-sm mb-1" name="name" id="name" required>
                            </div>

                            <div class="col-lg-6">
                                <label for="name" class="col-lg-12 control-label">លេខទូរស័ព្ទ</label>
                                <input type="number" class="form-control form-control-sm mb-1" name="name" id="name" required>

                                <label for="name" class="col-lg-12 control-label ">ជំនាញ</label>
                                <select class="form-select  form-select-sm mb-1" required>
                                    <option value="male">a</option>
                                    <option value="female">b</option>
                                    <option value="other">c</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="col-lg-12 control-label">ទីកន្លែងកំណើត</label>
                                <textarea class="form-control form-control-sm mb-1" rows="1" id="comment" name="text" required></textarea>

                                <label for="name" class="col-lg-12 control-label">អាស័យដ្ឋានបច្ចុប្បន្ន</label>
                                <textarea class="form-control form-control-sm mb-1" rows="1" id="comment" name="text" required></textarea>
                            </div>

                            <div class="col-lg-6">
                                <label for="name" class="col-lg-12 control-label">ថ្នាក់</label>
                                <select class="form-select  form-select-sm mb-1" required>
                                    <option value="male">a</option>
                                    <option value="female">b</option>
                                    <option value="other">c</option>
                                </select>
                                <label for="name" class="col-lg-12 control-label">វេន</label>

                                <select class="form-select  form-select-sm mb-1" required>
                                    <option value="male">a</option>
                                    <option value="female">b</option>
                                    <option value="other">c</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm" style="display: flex; gap: 5px;">
                        <i class='bx bx-save' style='font-size: 20px;'></i>
                        Save
                    </button>

                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal" style="display: flex; gap: 5px;">
                        <i class='bx bx-x' style='font-size: 20px;'></i>
                        Close
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
<script src="assets/bootstrap/js/jquery3.6.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>