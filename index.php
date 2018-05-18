<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <title>Searche engine</title>
</head>
<body>
    <h1> GO faster than google</h1>
    <div id="wrapper"> 
        <div id="serach_box">
            <form method="post">
                <input type="text" id="search_term" name="search_term" placeholder="Enter Search">
                <input type="submit" name="search" value="search">
            </form>
        </div>
        <div id="auto_div"></div>
        <div id="result_div"></div>

    </div>
    
    <script id="template" type="text/template">
        <table>
            {{#data}}  
                <tr>
                    <td>{{id}}</td>
                    <td>{{firstname}}</td>
                    <td>{{lastname}}</td>
                    <td>{{job}}</td>
                    <td>{{country}}</td>
                    <td>{{age}}</td>
                    <td>{{gender}}</td>
                        
                </tr>

            {{/data}}
        </table>

    </script>
    <script type="text/javascript" src="functions.js"></script>
</body>
</html>



