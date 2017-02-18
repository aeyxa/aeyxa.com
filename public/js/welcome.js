function sleep(ms)
{
    return new Promise(resolve => setTimeout(resolve,ms));
}

function changeColor(id)
{
    document.getElementById(id).style.color = "#CCC";
}

function applyShadow(shadow)
{
    lg = "2px -2px 10px ";
    xs = "2px -2px 7px ";

    document.getElementById("aeyxa-lg").style.textShadow = lg + shadow;
    document.getElementById("aeyxa-xs").style.textShadow = xs + shadow;
}

async function loadPage()
{
    codes =
    [
        "#FFF", "#EFF", "#EEF", "#DEE", "#DDE", "#CDD", "#CCD",
        "#BCC", "#BBC", "#ABB", "#AAB", "#9AA", "#99AAAA"
    ];

    links = [ "github", "notecards" ];

    z = [ codes, links ];

    for(i = 0; i < z.length; ++i)
    {
        for(j = 0; j < z[i].length; ++j)
        {
            x = 1000 / z[i].length;

            if(i)
            {
                await sleep(x).then(() => changeColor(z[i][j]));
            }
            else
            {
                await sleep(x).then(() => applyShadow(codes[j]));
            }
        }
    }
}

window.onload = sleep(500).then(() => loadPage());
