<!DOCTYPE html>
<html>
    <head>
      <?php include '../php/admin.php'; ?>
    </head>
    <body>
        Nieuw toevoegen

        <form action="" method="POST">
                <select id="category" name="category">
                  <option value="drinks">Drank</option>
                  <option value="appetizer">Voorgerecht</option>
                  <option value="main_course">Hoofdgerecht</option>
                  <option value="dessert">Dessert</option>
                </select><br>
                Naam: <input type="text" name="name" required/><br>
                Prijs: <input type="text" name="price" required/><br>

                <input type="submit" name="addNewMenuItem" value="Toevoegen"/>
        </form>
    </body>
</html>