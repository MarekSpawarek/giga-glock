let slideIndex = 1;
changeBackground();

$(".btn-previous").click(function()
{
    slideIndex--;
    changeBackground();
});

$(".btn-next").click(function()
{
    slideIndex++;
    changeBackground();
});

function changeBackground()
{
    switch (slideIndex)
    {
        case 0:
            slideIndex = 4;
            break;
        case 1:
            document.body.style.backgroundImage = "url('img/backgrounds/paprotka.jpg')";
            break;
        case 2:
            document.body.style.backgroundImage = "url('img/backgrounds/aya_tsuyuno.jpg')";
            break;
        case 3:
            document.body.style.backgroundImage = "url('img/backgrounds/drzewa.jpg')";
            break;
        case 4:
            document.body.style.backgroundImage = "url('img/backgrounds/laka.jpg')";
            break;
        case 5:
            slideIndex = 1;
            break;
    }
}

setInterval(changeBackground, 10);

function zoomBackground()
{
    $("body").toggleClass("state1");
    $("body").toggleClass("state2");
}

zoomBackground();
setInterval(zoomBackground, 5000);

/* muza */

let audioIndex = 1;

const sound = new Howl
({
    src: ['audio/audio.ogg'],
    sprite:
    {
        audio1: [0, 205000],
        audio2: [206000, 234000],
        audio3: [445000, 98000],
    },
    volume: 0.5,
    html5: true,
    loop: true,
    // preload: true,
    autoplay: true,
    onload: true
});

function playAudio()
{
    switch (audioIndex)
    {
        case 0:
            audioIndex = 3;
            playAudio();
            $("#playbackState").html("Playing");
            break;
        case 1:
            sound.stop();
            sound.play('audio1');
            $("#trackTitle").html("RUDE – Eternal Youth");
            $("#playbackState").html("Playing");
            break;
        case 2:
            sound.stop();
            sound.play('audio2');
            $("#trackTitle").html("Jean-Michel Jarre – Oxygene pt. 8");
            $("#playbackState").html("Playing");
            break;
        case 3:
            sound.stop();    
            sound.play('audio3');
            $("#trackTitle").html("Coldbrew – Lakeside Picnic");
            $("#playbackState").html("Playing");
            break;
        case 4:
            audioIndex = 1;
            playAudio();
            $("#playbackState").html("Playing");
            break;
    }
}

playAudio();

function unpauseAudio()
{
    sound.play();
    $("#playbackState").html("Playing");
}

function pauseAudio()
{
    sound.pause();
    $("#playbackState").html("Paused");
}

function rewindAudio()
{
    audioIndex--;
    playAudio();
}

function skipAudio()
{
    audioIndex++;
    playAudio();
}