<!doctype html>
<html lang="de">
<head>
    <title>Rechner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <body>
        
                <form action ="calc.process.php" method ="POST">
                    <lable>Wählen Sie aus, was Sie berechnen möchten: </lable>
                    <select name = "dropdown">
                        <option></option>
                        <!--<option value = "Addition">Addition</option>
                        <option value = "Subtraktion">Subtraktion</option>
                        <option value = "Multiplikation">Multiplikation</option>
                        <option value = "Subtraktion">Subtraktion</option>
                        -->
                        <option value = "Addition">Addition</option>
                        <option value = "Pythagoras">Pythagoras</option>
                        <option value = "Sinus">Sinus</option>
                        <option value = "Cosinus">Kosinus</option>
                        <option value = "Tangenssatz">Tangenssatz</option>
</select><br><br>
Seite a: <input type ="number" name = "sideA" ><br><br>
Seite b: <input type ="number" name = "sideB" ><br><br>
Seite c: <input type ="number" name = "sideC" ><br><br>
<input type ="submit" value = "berechnen"/>
</form>
</body>
    </html>