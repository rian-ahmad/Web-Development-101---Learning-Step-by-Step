<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Utama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script type="text/javascript">
        var url = "http://localhost:8000/";
    </script>

    <script src="js/item-list.js"></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between mt-3">
                    <div class="pull-left">
                        <h2>Daftar Article</h2>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create-item">Create Item</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <ul id="pagination" class="pagination-sm"></ul>

        <!-- Create Item Modal -->
        <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Article</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <!-- <h4 class="modal-title" id="myModalLabel">Create Item</h4> -->
                    </div>
                    <form data-toggle="validator" action="api/create.php" method="POST">

                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label" for="title">Title:</label>
                                <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="title">Description:</label>
                                <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn crud-submit btn-success">Submit</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <!-- Edit Item Modal -->
        <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form data-toggle="validator" action="api/update.php" method="put">

                        <div class="modal-body">

                            <input type="hidden" name="id" class="edit-id">

                            <div class="form-group">
                                <label class="control-label" for="title">Title:</label>
                                <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="title">Description:</label>
                                <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success crud-submit-edit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>



</body>