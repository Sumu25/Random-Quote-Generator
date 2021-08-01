<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {background-color: #a2b9bc;}
</style>
    <meta charset="UTF-8">
    <title>Random Quote Generator</title>
    <link rel="stylesheet" href= "style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style=" background color : #a2b9bc; ">
        <div id="container">
            <h2>Random Quote Generator<h2>

            <div id="buttonContainer"  class="btn btn-success">
                <button type="button" id="quotebutton">Generate Quote</button>
            </div> <!-- buttoncontainer-->
                <div id="quoteContainer"></div>
                <p></p>
                <p id="quoteAuthor"></p>
        </div> <!--container-->
</body>
</html>

<script type="text/javascript">

    $(document).ready(function(){
        $("button").click(function(){
            $.ajax({
                type:'POST',
                data:({tag:'life'}),
                url:'get-quote.php',
                success: function(data){
                    var obj = JSON.parse(data);
                    $("#quoteContainer").html(obj.quote);
                    $("#quoteAuthor").html(obj.author);

                }
            });
        });
    });


</script>