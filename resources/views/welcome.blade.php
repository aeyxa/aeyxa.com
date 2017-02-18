<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aeyxa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Khula"
    rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body
        {
            background-color: #FFF;
            color: #1C1C1C;
            height: 100vh;
            margin: 0;
            font-family: 'Khula', sans-serif;
        }
        .full-height
        {
            height: 100vh;
        }
        .flex-center
        {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref
        {
            position: relative;
        }
        .content
        {
            display: flex;
            flex-direction: row;
            text-align: center;
            font-weight: bold;
        }
        .aeyxa-lg
        {
            font-size: 102px;
            font-weight: bold;
            letter-spacing: 4rem;
            margin-right: -4rem;
            color: #FFF;
            font-family: 'PT Sans Caption', sans-serif;
        }
        .aeyxa-xs
        {
            font-size: 51px;
            font-weight: bold;
            letter-spacing: 1rem;
            margin-right: -1rem;
            color: #FFF;
            font-family: 'PT Sans Caption', sans-serif;
        }
        a
        {
            color: #FFF;
            padding: 0 25px;
            font-size: 12px;
            text-decoration: none;
            letter-spacing: .1rem;
            text-transform: uppercase;
        }
        a:hover
        {
            color: #CCC;
            padding: 0 25px;
            font-size: 12px;
            text-decoration: underline;
        }
        .links
        {
            margin-right: 10px;
        }
        .info-box
        {
            margin-top: 1rem;
            margin-bottom: 1rem;
            padding: 15px;
            font-size: 12px;
            color: #FFF;
            display: inline;
            width: 50%;
            float: left;
        }
    </style>

</head>

<body>
    <div id="app">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="front-page">
                    <span id="aeyxa-lg" class="aeyxa-lg hidden-xs">
                        AEYXA
                    </span>
                    <span id="aeyxa-xs" class="aeyxa-xs visible-xs">
                        AEYXA
                    </span>

                    <div id="links" class="links">

                        <div class="info-box">
                            <a href="https://github.com/aeyxa" target="_blank">
                                <span id="github">
                                    github
                                </span>
                            </a>
                        </div>

                        <div class="info-box">
                            <a href="/cards/select" target="_blank">
                                <span id="notecards">
                                    note cards
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
    </script>
</body>

</html>
