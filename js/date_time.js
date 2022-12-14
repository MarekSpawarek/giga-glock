$(document).ready(function() {
    setInterval(time, 1000);
});

function time() {
    $.ajax({
        url: 'http://localhost/piotrus/gettime.php',
        success: function(data) {
            $('.clock').html(data);
        },
    });
}