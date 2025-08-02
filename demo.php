<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Dikhana</title>
    <style>
        .details {
            display: none; /* Pehle details chhupi rahengi */
            margin-top: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
    <script>
        function showDetails() {
            var details = document.getElementById('details');
            var button = document.getElementById('toggleButton');
            var sentence = document.getElementById('sentence');

            if (details.style.display === 'none') {
                details.style.display = 'block'; // Details dikhana
                sentence.style.marginTop = '10px'; // Sentence ko neeche karna
            } else {
                details.style.display = 'none'; // Details chhupana
                sentence.style.marginTop = '0'; // Sentence ka margin wapas karna
            }
        }
    </script>
</head>
<body>

    <h1>Details Dikhane ke liye Click Karo</h1>
    <button id="toggleButton" onclick="showDetails()">Details Dikhaiye</button>

    <div id="details" class="details">
        <h2>Details:</h2>
        <p>Yeh details hai jo tumne click kiya uske baare mein.</p>
        <p>Yahaan par tum aur information daal sakte ho.</p>
    </div>

    <p id="sentence" style="margin-top: 0;">Yeh sentence button ke niche hai.</p>
    <p>asdasda asd asd asd </p>

</body>
</html>