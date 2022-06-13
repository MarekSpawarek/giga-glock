let hours = 0;
let minutes = 0;
let seconds = 0;

let countTime = false;
let executed = false;

$(".hours-count").html(hours);
$(".minutes-count").html(minutes);
$(".seconds-count").html(seconds);

function timeStart()
{    
    $("#pausedDiv").remove();
    executed = false;

    if (countTime == false)
    {
        countTime = true;
        counter();
    }
    else
    {
        counter();
    }
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

    $(".hours-count").html(hours);
    $(".minutes-count").html(minutes);
    $(".seconds-count").html(seconds);

    $("#pausedDiv").remove();
}

function counter()
{
    if (countTime == true)
    {
        seconds++;
        $(".seconds-count").html(seconds);

        if (seconds > 59)
        {
            minutes++;
            $(".minutes-count").html(minutes);
            seconds = 0;
        }

        if (minutes > 59)
        {
            hours++;
            $(".hours-count").html(hours);
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
                document.querySelector("#stopwatchDiv").appendChild(paused).innerHTML = "Time stopped.";
            }
        };
    }
)();