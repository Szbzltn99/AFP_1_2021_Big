<br>
        <div class="container">
            <h2>Kérdés hozzáadása</h2>
            <form action="" method="POST" accept-charset="UTF-8">
                <span id = "alertText"></span>
                <div class="form-group">
                    <label for="nev">Kérdés: </label>
                    <input type="text" class="form-control" name="nev" id="nev" maxlength="45"/> <br/>
                </div>
                <div class="form-group">
                    <label for="answ1">Válasz érték 1 : </label>
                    <input type="text" class="form-control" name="answ1" id="answ1"/> <br/>
                </div>
                <div class="form-group">
                    <label for="answ2">Válasz érték 2 : </label>
                    <input type="text" class="form-control" name="answ2" id="answ2"/> <br/>
                </div>
                <div class="form-group">
                    <label for="answ3">Válasz érték 3 : </label>
                    <input type="text" class="form-control" name="answ3" id="answ3"/> <br/>
                </div>
                <button id="submit" type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Mentés </button>
            </form>
        </div>

        <?php 


if(isset($_POST["submit"]))
{
    if($_POST["nev"] == null) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'You did not enter any question!',
                    'warning'
                )
            </script>
        <?php
    }
    else if($_POST["nev"]> 45){
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'The question you entered is too long! (more than 45 charaters)',
                    'warning'
                )
            </script>
        <?php
    }
    else if($_POST["answ1"] == null) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'You did not enter any answer for option one!',
                    'warning'
                )
            </script>
        <?php
        
    }
    else if($_POST["answ1"].is_string($_POST["answ1"]) == true) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'The option value one is an integer!',
                    'warning'
                )
            </script>
        <?php
    }
    
}
?>       