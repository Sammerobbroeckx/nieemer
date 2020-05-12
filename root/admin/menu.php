<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="../css/default.css">
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

        Huidige menu:
        <button type="button" class="collapsible">Drinken</button>
            <div class="content">
              <?php
                  loopDishAdmin("drinks");
              ?>
            </div>
        <button type="button" class="collapsible">Voorgerecht</button>
            <div class="content">
              <?php
                  loopDishAdmin("appetizer");
              ?>
            </div>
        <button type="button" class="collapsible">Hoofdgerecht</button>
            <div class="content">
              <?php
                  loopDishAdmin("main_course");
              ?>
            </div>
        <button type="button" class="collapsible">Dessert</button>
            <div class="content">
              <?php
                  loopDishAdmin("dessert");
              ?>
            </div>












        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
        </script>
    </body>
</html>