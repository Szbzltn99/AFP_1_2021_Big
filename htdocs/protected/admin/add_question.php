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
    else if(!is_numeric($_POST["answ1"]) or strpos($_POST["answ1"],".")) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'Option one is an integer!',
                    'warning'
                )
            </script>
        <?php
        
    }
    
    else if($_POST["answ2"] == null) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'You did not enter any answer for option two!',
                    'warning'
                )
            </script>
        <?php
        
    }

    else if(!is_numeric($_POST["answ2"]) or strpos($_POST["answ2"],".")) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'Option two is an integer!',
                    'warning'
                )
            </script>
        <?php
        
    }

    else if($_POST["answ3"] == null) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'You did not enter any answer for option three!',
                    'warning'
                )
            </script>
        <?php
        
    }

    else if(!is_numeric($_POST["answ3"]) or strpos($_POST["answ3"],".")) {
        ?>
        <script>
                Swal.fire(
                    'Error!',
                    'Option three is an integer!',
                    'warning'
                )
            </script>
        <?php
        
    }

    else{
        $question = $_POST["nev"];
        $answer1 = $_POST["answ1"];
        $answer2 = $_POST["answ2"];
        $answer3 = $_POST["answ3"];

        $add_question_query = "INSERT INTO questions(question, answer1, answer2, answer3) 
            VALUES('".$question."','".$answer1."','".$answer2."','".$answer3."')";
        executeQuery($add_question_query);
        ?>
        <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Question succesfully added!',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    window.setTimeout(function() {
                    window.location.href = 'index.php?P=addNewQuestion';
                    }, 1500);
                </script>
                <?php
    }
}
?>       