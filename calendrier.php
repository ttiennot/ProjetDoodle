<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendrier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Calendrier hebdomadaire</h1>
    <h2>Semaine n°</h2>
    <table>
        <tr>
            <th>DOODLE</th>
            <th>lun</th>
            <th>mar</th>
            <th>mer</th>
            <th>jeu</th>
            <th>ven</th>
            <th>sam</th>
            <th>dim</th>
        </tr>
        <tr>
            <td>matin</td>
            <td class="calendrier_case" id="1">cliquez</td>
            <td class="calendrier_case" id="2">cliquez</td>
            <td class="calendrier_case" id="3">cliquez</td>
            <td class="calendrier_case" id="4">cliquez</td>
            <td class="calendrier_case" id="5">cliquez</td>
            <td class="calendrier_case" id="6">cliquez</td>
            <td class="calendrier_case" id="7">cliquez</td>
        </tr>
        <tr>
            <td>midi</td>
            <td class="calendrier_case" id="8">cliquez</td>
            <td class="calendrier_case" id="9">cliquez</td>
            <td class="calendrier_case" id="10">cliquez</td>
            <td class="calendrier_case" id="11">cliquez</td>
            <td class="calendrier_case" id="12">cliquez</td>
            <td class="calendrier_case" id="13">cliquez</td>
            <td class="calendrier_case" id="14">cliquez</td>
        </tr>
        <tr>
            <td>après-midi</td>
            <td class="calendrier_case" id="15">cliquez</td>
            <td class="calendrier_case" id="16">cliquez</td>
            <td class="calendrier_case" id="17">cliquez</td>
            <td class="calendrier_case" id="18">cliquez</td>
            <td class="calendrier_case" id="19">cliquez</td>
            <td class="calendrier_case" id="20">cliquez</td>
            <td class="calendrier_case" id="21">cliquez</td>
        </tr>
        <tr>
            <td>soir</td>
            <td class="calendrier_case" id="22">cliquez</td>
            <td class="calendrier_case" id="23">cliquez</td>
            <td class="calendrier_case" id="24">cliquez</td>
            <td class="calendrier_case" id="25">cliquez</td>
            <td class="calendrier_case" id="26">cliquez</td>
            <td class="calendrier_case" id="27">cliquez</td>
            <td class="calendrier_case" id="28">cliquez</td>
        </tr>
    </table>
    <br>

    <input type="submit" name="soumettre" value="soumettre" onclick="RecupCases()">
</body>
<script src="main.js">$</script>

</html>