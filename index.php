<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>OOP PHP PDO CRUD AJAX</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mt-5">OOP PHP PDO CRUD AJAX</h1>
            <hr style="height: 1px; color: black; background: black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <form action="" id="form">
                <div id="result"></div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="description" cols="" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="update" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1">
            <div id="info"></div>
            <div id="fetch"></div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Single data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="read_data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="edit_data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"-->
<!--        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"-->
<!--        crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>

    $(document).on('click', '#submit', function (e) {
        e.preventDefault();

        let title = $("#title").val();
        let description = $("#description").val();
        let submit = $("#submit").val();

        $("#form")[0].reset();

        $.ajax({
            url: "insert.php",
            method: "post",
            data: {
                title: title,
                description: description,
                submit: submit
            },
            success: function (data) {
                fetch();
                $("#result").html(data);
            }
        });

    });

    // Fetch notes

    function fetch() {

        $.ajax({
            url: "fetch.php",
            type: "post",
            success: function (data) {
                $("#fetch").html(data);
            }
        });

    }

    fetch();

    // Delete note

    $(document).on("click", ".delete", function () {

        if (window.confirm("this note delete ?")) {
            let id = $(this).attr('value');

            $.ajax({
                url: "delete.php",
                type: "post",
                data: {
                    id: id
                },
                success: function (data) {
                    fetch();
                    $("#info").html(data);
                }
            });
        } else {
            return false;
        }
    });

    // mote read
    $(document).on("click", ".read", function (e) {
        e.preventDefault();

        let id = $(this).attr("value");

        $.ajax({
            url: "read.php",
            type: "post",
            data: {
                id: id
            },
            success: function (data) {
                $("#read_data").html(data);
            }
        });

    });

    // note edit
    $(document).on("click", ".edit", function (e) {
        e.preventDefault();

        let id = $(this).attr("value");

        $.ajax({
            url: "edit.php",
            type: "post",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                $("#edit_data").html(data);
            }
        });

    });

</script>


</body>
</html>
