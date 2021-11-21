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
                    <input type="text" min=1 max=400 class="form-control" name="answ1" id="answ1" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="answ2">Válasz érték 2 : </label>
                    <input type="text" min=1 max=400 class="form-control" name="answ2" id="answ2" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="answ3">Válasz érték 3 : </label>
                    <input type="text" min=1 max=400 class="form-control" name="answ3" id="answ3" maxlength="255"/> <br/>
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
    
}
?>       