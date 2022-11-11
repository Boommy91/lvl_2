$("#btn").click(function () {
    var txt = $("#textarea").val();
    if (txt !== "") {
        $('#txt').text(txt);
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

$.getJSON('./api/v1/storage.json', function (data) {
    console.log(data.items);
});



