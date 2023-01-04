let typeMinutes;
let typeSeconds;

function autoRefreshTime()
{
    const getTime = new Date();

    twoPlacesTime();

    let time = getTime.getHours() + ":" + typeMinutes + ":" + typeSeconds;
    $(".clock").html(time);
    // console.log(time);
}

autoRefreshTime();
setInterval(autoRefreshTime, 1000);

function twoPlacesTime()
{
    let getTime = new Date();
    
    let getMinutes = getTime.getMinutes();
    let getSeconds = getTime.getSeconds();

    switch (getMinutes)
    {
        case 0:
            typeMinutes = "00";
            break;
        case 1:
            typeMinutes = "01";
            break;
        case 2:
            typeMinutes = "02";
            break;
        case 3:
            typeMinutes = "03";
            break;
        case 4:
            typeMinutes = "04";
            break;
        case 5:
            typeMinutes = "05";
            break;
        case 6:
            typeMinutes = "06";
            break;
        case 7:
            typeMinutes = "07";
            break;
        case 8:
            typeMinutes = "08";
            break;
        case 9:
            typeMinutes = "09";
            break;
        default:
            typeMinutes = getMinutes;
    }

    switch (getSeconds)
    {
        case 0:
            typeSeconds = "00";
            break;
        case 1:
            typeSeconds = "01";
            break;
        case 2:
            typeSeconds = "02";
            break;
        case 3:
            typeSeconds = "03";
            break;
        case 4:
            typeSeconds = "04";
            break;
        case 5:
            typeSeconds = "05";
            break;
        case 6:
            typeSeconds = "06";
            break;
        case 7:
            typeSeconds = "07";
            break;
        case 8:
            typeSeconds = "08";
            break;
        case 9:
            typeSeconds = "09";
            break;
        default:
            typeSeconds = getSeconds;
    }
}


let typeMonth;

function autoRefreshDate()
{
    const getTime = new Date();

    twoPlacesDate();

    let date = getTime.getDate() + "." + typeMonth + "." + getTime.getFullYear();
    $(".date").html(date);
}

autoRefreshDate();
setInterval(autoRefreshDate, 1000);

function twoPlacesDate()
{
    const getTime = new Date();
    const getMonth = getTime.getMonth() + 1;
    
    for (let i=1; i<10; i++)
    {
        // if (getMonth == i)
        // {
        //     typeMonth = "0" + i;
        // }

        switch (getMonth)
        {
            case i:
                typeMonth = "0" + i;
                break;
        }
    }

    if (getMonth > 9)
    {
        typeMonth = getMonth;
    }
}