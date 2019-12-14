$(document).ready(function () {

    function fetchNotes() {

        let url = document.location.href;
        let url_arr = url.split("=");
        let view = url_arr[1];

        if (!view) {
            view = "index";
        }

        $.ajax({
            url: "resources/server/" + view + "/index.php",
            success: function (data) {
                console.log(view);
                $("#" + view).html(data);
            }
        });

    }

    fetchNotes();

    $(document).on("click", "#contact-save", function (e) {
        e.preventDefault();

        let firstName = $("#contact-firstName").val();
        let lastName = $("#contact-lastName").val();
        let email = $("#contact-email").val();
        let mobile = $("#contact-mobile").val();
        let tel = $("#contact-tel").val();
        let address = $("#contact-address").val();
        let info = $("#contact-info").val();
        let contactSave = $("#contact-save").val();


        $.ajax({
            // url: "resources/server/contacts/insert.php",
            url: "resources/server/contacts/insert.php",
            type: "post",
            data: {
                firstName: firstName,
                lastName: lastName,
                email: email,
                mobile: mobile,
                tel: tel,
                address: address,
                info: info,
                contactSave: contactSave,
            },
            success: function (data) {
                fetchNotes();
                console.log(data);
            }
        });

    });

    $(document).on("click", ".contact-edit", function (e) {
        e.preventDefault();

        let firstName = $("#contact-firstName").val();
        let lastName = $("#contact-lastName").val();
        let email = $("#contact-email").val();
        let mobile = $("#contact-mobile").val();
        let tel = $("#contact-tel").val();
        let address = $("#contact-address").val();
        let info = $("#contact-info").val();
        let contactSave = $("#contact-save").val();

        $.ajax({
            url: "resources/server/contacts/edit.php",
            type: "post",
            data: {
                firstName: firstName,
                lastName: lastName,
                email: email,
                mobile: mobile,
                tel: tel,
                address: address,
                info: info,
                contactSave: contactSave,
            },
            success: function (data) {
                $("#contactEdit").html(data);
            }
        });

    });

    $(document).on("click", ".contact-delete", function (e) {
        e.preventDefault();
        let id = $(this).attr("value");
        $.ajax({
            url: "resources/server/contacts/delete.php",
            type: "post",
            data: {
                id: id
            },
            success: function (data) {

                if (data == true) {
                    console.log(data);
                    alert("deleted");
                } else {
                    alert("not deleted");
                }
                fetchNotes();
            }
        });
    });

    $(document).on("click", ".note-delete", function (e) {
        e.preventDefault();
        let id = $(this).attr("value");
        $.ajax({
            url: "resources/server/notes/delete.php",
            type: "post",
            data: {
                id: id
            },
            success: function (data) {

                if (data == true) {
                    console.log(data);
                    // $('.info').html(data);
                    alert("deleted");
                } else {
                    alert("not deleted");
                }
                fetchNotes();
            }
        });
    });

});