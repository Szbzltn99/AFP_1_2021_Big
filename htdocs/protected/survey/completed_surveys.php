<?php

    $query = "SELECT s.sname, t.name FROM survey s, topic t, user_survey u, 
    (SELECT t.sid FROM (SELECT us.sid,us.uid,COUNT(us.questionid) q_db FROM user_survey us GROUP BY us.sid,us.uid) t 
    WHERE q_db = (SELECT COUNT(sq.qid) FROM survey_question sq WHERE sq.sid = t.sid)) mok 
    WHERE u.uid=" . $_SESSION["uid"] . "
    AND s.sid=mok.sid
    GROUP BY s.sname"; //nagyon vad lekérdezés
    $result = classList($query);
    $n=0;
?>
<?php if($result === NULL || empty($result)): ?>
    <p>Nincs rekord</p>
    <?php else: ?>
<html>
    <head>
    <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">
    </head>
    <body>
        <div class = "usersDiv">
            <h2>Kitöltött kérdőívek</h2>
            <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>Kérdőív</th>
                <th>Téma</th>
                <th>Kérdőív módosításai</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row): $n=$n+1?>
                <tr>
                <td><?=$n?></td>
                <td><?=$row['sname']?></td>
                <td><?=$row['name']?></td>
                <td>
                    <button name="del">Válaszok törlése</button>
                    <button>Módosítás</button>
                </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>
        </div>
    </body>
</html>
<?php endif; ?>