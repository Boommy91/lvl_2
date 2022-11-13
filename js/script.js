// $.getJSON( "./api/v1/storage.json", function( data ) {
//     data.items.forEach(element=>{
//             t+=element['text'] + "\n"});
// });
$.getJSON('./api/v1/getItem.php', {}, function(data) {
    $.each(data, function(index, element) {
        $('body').append($('<div>', {
            text: element.name
        }));
    });
});


$("#btn").click(function () {

    // var txt = $("#textarea").val();
    // if (txt !== "") {
    //     $("#textarea").fadeIn("slow", function () {
    //         $('#txt').prepend(txt + "<p>");
    //     })
    // }

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




