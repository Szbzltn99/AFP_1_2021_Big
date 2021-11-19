<?php

    $query = "SELECT surv.sname, top.name, surv.sid FROM survey surv, topic top, 
    (SELECT s.sname, t.name, s.sid FROM survey s, topic t, 
    (SELECT t.sid, t.uid FROM 
    (
    SELECT us.sid,us.uid,COUNT(us.questionid) q_db FROM 
    user_survey us 
    GROUP BY us.sid,us.uid
    ) t 
    WHERE q_db = 
    (
    SELECT COUNT(sq.qid) FROM 
    survey_question sq 
    WHERE sq.sid = t.sid)
    ) mok 
    WHERE mok.uid=" . $_SESSION["uid"] . "
    AND s.sid=mok.sid 
    AND s.topic=t.tid) giga 
    WHERE surv.sid!=giga.sid 
    AND surv.topic=top.tid;";

    $result = classList($query);

    $query="SELECT s.sid FROM survey s
    WHERE s.sid NOT IN 
    (SELECT u.sid FROM user_survey u
    WHERE u.sid = " . $_SESSION["uid"] . "
    )";

    $newsurveys = classList($query);

    $n=0;

    if (isset($_POST["fill"]))
   {

       header("Refresh:0");      
   }

   if (isset($_POST["re"]))
   {
       
       header("Refresh:0");   //most még csak kitörli az eddigi válaszok, nem irányít át a kitöltő oldalra, ha meg akarjuk őrizni az eddigi kitöltéseket akkor másképp kell majd megoldani
   }
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
            <h2>Kérdőívek kitöltése</h2>
            <table class="table">
            <form method="post">
            <thead>
                <tr>
                <th>Azonosító</th>
                <th>Kérdőív</th>
                <th>Téma</th>
                <th>Kitöltés állapota</th>
                <th>Művelet</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row): ?>
                <tr>
                <td><?=$row['sid']?></td>
                <td><?=$row['sname']?></td>
                <td><?=$row['name']?></td>
                <?php if(in_array($row['sid'],$newsurveys[0])):?>
                <td>Nincs elkezdve</td>
                <?php else: ?>
                <td>El van kezdve</td>
                <?php endif; ?>
                <td>
                    <button name="fill" value =<?= $row['sid']?>>Kitöltés</button>
                    <button name="re" value =<?= $row['sid']?>>Folyatás</button>
                </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </form>
            </table>
        </div>
    </body>
</html>
<?php endif; ?>