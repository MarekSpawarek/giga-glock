let typeMonth;

function autoRefreshDate()
{
    const getTime = new Date();

    twoPlacesDate();

    let datex = getTime.getDate() + "." + typeMonth + "." + getTime.getFullYear();
    $(".date").html(datex);
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