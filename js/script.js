$("#btn").click(function () {

    var txt = $("#textarea").val();
    if (txt !== "") {
            $('#txt').prepend(txt + "<br>");
    }

    $.ajax({
        url: './api/v1/addItem.php',
        type: 'POST',
        data: {'text': txt}
    })
});

var input = document.getElementById("textarea");
input.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("btn").click();
        input.dataset
    }
});

$(document).ready(function () {

    // FETCHING DATA FROM JSON FILE
    $.getJSON("api/v1/storage.json",
        function (data) {
            // ITERATING THROUGH OBJECTS
            $.each(data['items'], function (key, value) {
 $('#txt').prepend(value['text']+"<br>");
            });
            //INSERTING ROWS INTO TABLE

        });

});

