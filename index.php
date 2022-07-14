<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Test</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var settings = {
                "url": "https://testapi2447.azurewebsites.net/TestService.asmx/TestAPI",
                "method": "POST",
                "dataType": "json",
                "timeout": 0,
            };
            $.ajax(settings).done(function(data) {
                if (data.state == 'ok') {
                    $(".result").html(data.state);
                    let len = Object.keys(data.result).length; // len資料長度
                    let result = data.result; // data
                    
                    console.table(result);
                    console.log(data);
                    for (var i = 0; i < len; i++) {
                        $("#body").append("<tr>");
                        $("#body").append("<td>" + result[i].item1 + "</td>");
                        $("#body").append("<td>" + result[i].item2 + "</td>");
                        $("#body").append("<td>" + result[i].item3 + "</td>");
                        $("#body").append("<td>" + result[i].item4 + "</td>");
                        $("#body").append("<td>" + result[i].item5 + "</td>");
                        $("#body").append("</tr>");
                    }

                }



            });
        });
    </script>
</head>

<body>
    <h2>鐘子傑</h2>
    <h2 class="result"></h2>
    <table class="table table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th>item1</th>
                <th>item2</th>
                <th>item3</th>
                <th>item4</th>
                <th>item5</th>
            </tr>
        </thead>
        <tbody class="body" id="body">

        </tbody>
    </table>

</body>


</html>