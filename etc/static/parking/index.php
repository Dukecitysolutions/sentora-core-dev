<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_SERVER['HTTP_HOST'] . " is parked...."; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="data:image/icon;base64,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">
        <style>
            html {
                height: 80%;
            }
            body {
                text-align:left;
                height:100%;
                background: #F3F3F3;
                font-size: 62.5%;
                font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif;
                margin-top:10px;
                margin-bottom:10px;
                margin-right:10px;
                margin-left:10px;
                padding:0px;
            }
            body,td,th {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 9pt;
                color: #333333;
            }
            h1,h2,h3,h4,h5,h6 {
                font-family: Geneva, Arial, Helvetica, sans-serif;
            }
            h1 {
                font-size: 28px;
                font-weight:bold;
                color: #336;
                text-shadow:3px 3px 5px #BBBBBB;
            }
            a:link,a:visited,a:hover,a:active {
                color: #336;
                text-decoration:none;
            }
            ol{
                color:#336;
                font-size: 24px;
                font-weight:bold;
                text-shadow:3px 3px 5px #BBBBBB;
            }
            ol p{
                color:#CCCCCC;
                font: normal 12pt Verdana, Arial, Helvetica, sans-serif;
                color: #333333;
            }
            .content{
                background:#F1F4F6;
                background: #F1F4F6 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAA6CAYAAAB4Q5OdAAAACXBIWXMAAAsTAAALEwEAmpwYAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABKklEQVR42mL8DwQMaAAggJgYsACAAMIqCBBAWAUBAgirIEAAYRUECCAWLJYzAAQQy38sKgECCKt2gADCKggQQFgFAQIIq0UAAYRVJUAAYRUECCCsggABhFUQIIBYsNjDABBAWFUCBBALAwOmUoAAwqoSIICwCgIEEFaLAAIIq0qAAMIqCBBAWAMEIICwqgQIIKyCAAGEVRAggLAKAgQQVkGAAMIqCBBAWJ0EEEBYVQIEEFZBgADCmmwAAgirSoAAwioIEEBYbQcIIKwqAQIIqyBAAGEVBAggrIIAAYQ14gACCKtKgADC6iSAAMKqEiCAsAoCBBBWQYAAwioIEEBYkyJAAGFVCRBAWAUBAgirjwACCGt0AAQQVu0AAYRVECCAsAoCBBDWAAEIMAAoCSZuy+v+UQAAAABJRU5ErkJggg==') repeat-x top;
                border:solid 1px #DFDFDF;
                margin: 10px 0;
                padding: 0 20px 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                min-height: 90%;
            }
            .header_logo {
                display:block;
                max-width:263px;
                max-height:70px;
            }
            .header_logo img {
                width:100%;
                height:100%;
            }
            .poweredbox {
                font-family: Geneva, Arial, Helvetica, sans-serif;
                color:#333333;
                padding-left: 15px;
            }
        </style>
    </head>
    <body>
        <a class="header_logo" href="http://www.sentora.org/" target="_blank">
            <img src="data:image/png;
                 base64,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"
                 width="263" height="70" alt="Sentora - The open-source web hosting control panel" border="0"></a>
        <div class="content">
            <h1><?php echo strtolower($_SERVER['HTTP_HOST']); ?></h1>
            <p>This domain is registered and is currently parked.... </p>
            <p>Thank you for using Sentora to manage your hosting!</p>
            <p><b>For more information and help using Sentora please visit:</b> <a href="http://www.sentora.org/" target="_blank">www.sentora.org</a>.</p>
            <p>Kind regards,<br>
                Your hosting company.</p>
        </div>
        <div class="poweredbox">
            <p><strong>Powered by <a href="http://www.sentora.org/" target="_blank">Sentora</a></strong> - The open-source web hosting control panel.</p>
        </div>
    </body>
</html>
