let seconds;

let countTime = false;
let executed = false;

$("#secondsRemaining").html(seconds);

function timeStart()
{    
    $("#pausedTime").remove();
    executed = false;
    seconds = $("#inputSeconds").val();

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

function timeReset()
{
    countTime = false;
    createDivOnce();
}

// function timeReset()
// {
//     seconds = 0;
//     countTime = false;
   
//     $("#secondsRemaining").html(seconds);

//     $("#pausedDiv").remove();
// }

function counter()
{
    if (countTime == true)
    {
        if (seconds > 0)
        {
            seconds--;
            $("#secondsRemaining").html(seconds);
            countdownStartedSound();
        }
        else
        {
            timeReset();
            countdownFinishedSound();
        }
        
        // Miał być do-while, ale mocno spowalniał stronę.
    }
}

setInterval(counter, 1000);

function countdownStartedSound()
{
    const soundStarted = new Howl
    ({
        src: ['audio/beep_short.mp3'],
        volume: 1.0,
    });
    
    soundStarted.play();
    soundStarted.loop(false);
    Howler.autoUnlock = true;
}

function countdownFinishedSound()
{
    const soundFinished = new Howl
    ({
        src: ['audio/crash.mp3'],
        volume: 1.0,
    });

    soundFinished.play();
    soundFinished.loop(false);
    Howler.autoUnlock = true;
}

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
                paused.id = "pausedTime";
                $(paused).addClass("font-open-sans");
                $(paused).addClass("mt-5");
                $(paused).addClass("h5");
                $(paused).css("text-align", "center");
                document.querySelector("#timerDiv").appendChild(paused).innerHTML = "Time stopped.";
            }
        };
    }
)();