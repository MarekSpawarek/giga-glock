let hours = 0;
let minutes = 0;
let seconds = 0;

let countTime = false;
let executed = false;

$("#stopwatchBoxHours").html(hours);
$("#stopwatchBoxMinutes").html(minutes);
$("#stopwatchBoxSeconds").html(seconds);

// console.log(hours);
// console.log(minutes);
// console.log(seconds);

function timeStart()
{    
    $("#pausedDiv").remove();
    executed = false;

    // if (countTime == false)
    // {
        countTime = true;
        counter();
    // }
    // else
    // {
        // counter();
    // }
}

function timeStop()
{
    countTime = false;
    createDivOnce();
}

function timeReset()
{
    hours = 0;
    minutes = 0;
    seconds = 0;
    countTime = false;

    $("#stopwatchBoxHours").html(hours);
    $("#stopwatchBoxMinutes").html(minutes);
    $("#stopwatchBoxSeconds").html(seconds);

    // console.log(hours);
    // console.log(minutes);
    // console.log(seconds);

    $("#pausedDiv").remove();
}

function counter()
{
    if (countTime == true)
    {
        seconds++;
        $("#stopwatchBoxSeconds").html(seconds);

        if (seconds == 59)
        {
            minutes++;
            $("#stopwatchBoxMinutes").html(minutes);
            seconds = 0;
        }

        if (minutes == 59)
        {
            hours++;
            $("#stopwatchBoxHours").html(hours);
            minutes = 0;
        }
    }
}

setInterval(counter, 1000);

let createDivOnce =
(
    function()
    {
        return function()
        {
            if (executed == false)
            {
                executed = true;
                
                const paused = document.createElement("p");
                paused.id = "pausedDiv";
                $(paused).addClass("font-open-sans");
                $(paused).addClass("mt-5");
                $(paused).addClass("h5");
                $(paused).css("text-align", "center");
                document.querySelector("body").appendChild(paused).innerHTML = "Time stopped.";
            }
        };
    }
)();

$("form").on("submit", function(e)
{
    var dataString = $(this).serialize();
    // alert(dataString); return false;

    $.ajax
    ({
        type: "GET",
        url: "stopwatch.php",
        data: dataString,
        // success: function()
        // {
        //     $("#contact_form").html("<div id='message'></div>");
        //     $("#message").html("<h2>Contact Form Submitted!</h2>").append("<p>We will be in touch soon.</p>").hide().fadeIn(1500, function()
        //     {
        //         $("#message");
        //     });
        // }
    });

    e.preventDefault();
});