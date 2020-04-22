<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Jonas Morel">
        <link rel="stylesheet" type="text/css" href="../css/default.css">
        <?php include '../php/bediener.php'; ?>
    </head>
    <body>
        <!----------------------------------------------------------------------------------->
        <h1>Bediener</h1><button>Indienen</button>
        <form>
            Tafel nr.: <input type="number"><br>
            Naam klant: <input type="text"><br>

            <button type="button" class="collapsible">Drinken</button>
            <div class="content">
              <?php
                loopDish("drinks");
              ?>
            </div>
            <button type="button" class="collapsible">Voorgerecht</button>
            <div class="content">
              <?php
                loopDish("appetizer");
              ?>
            </div>
            <button type="button" class="collapsible">Hoofdgerecht</button>
            <div class="content">
              <?php
                loopDish("main_course");
              ?>
            </div>
            <button type="button" class="collapsible">Dessert</button>
            <div class="content">
              <?php
                loopDish("dessert");
              ?>
            </div>

        </form>
        <!----------------------------------------------------------------------------------->
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