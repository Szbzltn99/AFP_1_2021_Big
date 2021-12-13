<?php
function get_g()
{
    if (!filter_has_var(INPUT_GET, 'G')) {
        die('Helytelen paraméter!');
    }
    $id = filter_input(INPUT_GET, 'G', FILTER_VALIDATE_INT);
    if ($id === false) {
        die('Helytelen paraméter!');
    }
    if ($id <= 0) {
        die('Az id legalább 1!');
    }
    return $id;
}
$id = get_g();
?>
<?php
$query = "SELECT * FROM questions INNER JOIN survey_question ON survey_question.qid = questions.qid AND survey_question.sid = $id";
$listQuestionResults = classList($query);
?>
<div class="container" class="usersDiv">
    <?php if ($listQuestionResults === NULL || empty($listQuestionResults)) : ?>
        <h2>Nincs egyetlen kérdés sem a kérdőívben!</h2>
    <?php else : ?>
        <h1>Az <?= $id ?>. azonosítójú kérdőívhez tartozó kérdések</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azonosító</th>
                    <th scope="col">Kérdés</th>
                    <th scope="col">Átlag válasz</th>
                </tr>
            </thead>
            <tbody>
                <form method="post">
                    <?php foreach ($listQuestionResults as $row) : ?>
                        <tr scope="row" class="list">
                            <td scope="row"><?= $row['qid'] ?> </td>
                            <td scope="row"><?= $row['question'] ?></td>
                            <td scope="row"><?= $row['topic'] ?></td>

                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    </form>
</div>