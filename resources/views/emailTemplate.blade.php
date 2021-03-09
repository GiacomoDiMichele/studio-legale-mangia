<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Contatti</title>
    </head>
    <body>
        <p>Name: {{ $dataReceived['name'] }}</p>
        <p>Email: {{ $dataReceived['email'] }}</p>
        <p>subject: {{ $dataReceived['subject'] }}</p>
        <br>
        <h2>Message</h2>
        <p>{{ $dataReceived['message'] }}</p>
    </body>
</html>
