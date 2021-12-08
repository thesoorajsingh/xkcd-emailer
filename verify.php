<?php
$email = $_POST['email'];
$name = $_POST['name'];
?>

<!-- php program to verify email address -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="welcome.php" method="post">
        <h1>Welcome <?php echo $_POST["name"] ?> </h1>
    </form>

    <h2 id="demo">This is weather data</h2>

    <h2 id="btc">The current price of bitcoin is: loading...</h2>

    <h2 id="bored">If you are bored, then........</h2>
</body>

<script>
    // function to display weather data from api
    document.getElementById("demo").innerHTML = "Fetching Random Cat Fact";

    async function get_cat_fact() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                document.getElementById("demo").innerHTML = response['fact'];
            }
        };
        xhttp.open("GET", "https://catfact.ninja/fact", true);
        xhttp.send();
    }

    async function get_btc_price() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                document.getElementById("btc").innerHTML = "The current price of bitcoin is: $" + response['bpi']['USD']['rate'];
            }
        };
        xhttp.open("GET", "https://api.coindesk.com/v1/bpi/currentprice.json", true);
        xhttp.send();
    }

    async function get_bored() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                document.getElementById("bored").innerHTML = "If you are bored, then " + response['activity'];
            }
        };
        xhttp.open("GET", "https://www.boredapi.com/api/activity", true);
        xhttp.send();
    }

    get_cat_fact();
    get_btc_price();
    get_bored();
</script>

</html>