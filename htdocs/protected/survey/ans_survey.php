<?php
if (isset($_POST["selectedSurvey"])) 
{
    
} else {
    if (isUserLoggedIn()) {
        $userId = isUserLoggedIn();
        $topics = "select * from topic, (SELECT * FROM survey s WHERE s.sid NOT IN (SELECT u.sid FROM user_survey u WHERE u.sid = $userId )) need where topic = topic.tid ";
    } else {
        $userId = -1;
        $topics = "select * from topic where 1";
    }
    $result = classList($topics);
    //echo "Lekérdezem a témákat: " . $topics . "<br><br>";
    $topics = array();
    $topicName = array();
    $couter = 0;
    foreach ($result as $row) {
        if (!in_array($row["tid"], $topics)) {
            $topics[$couter] = $row["tid"];
            if (count($topicName) == 0) {
                $topicName[$couter] = $row["name"];
            } else {
                $topicName[count($topicName) + 1] = $row["name"];
            }
        }
        $couter++;
    }
    $couter = 0;
    echo '<div class="usersDiv" id=\'questionsDiv\' class="container">';
    echo "<h1>Témák és kérdőívei: </h1>";
    foreach ($topics as $topicsrow) {
        $sql = "select sid, sname from topic, (SELECT * FROM survey s WHERE s.sid NOT IN (SELECT u.sid FROM user_survey u WHERE u.sid = $userId )) need where topic =" . $topicsrow . " and topic = tid";
        $topicNameNow = $topicName[$couter];
        echo "<h2>$topicNameNow</h2>";
        $result2 = classList($sql);
        echo "<table class = 'table'>";
        foreach ($result2 as $result2row) {
            $id = $result2row["sid"];
            $name = $result2row["sname"];
            echo "<tr>  <td> <form method='post' action=''> <input type = 'submit' value = 'Kitöltés: $name'> <input name = 'selectedSurvey' hidden type = 'text' value = '$id'> </form></td> </tr>";
            $couter++;
        }
        echo "</table>";
    }
    echo "</div>";
}







?>
<html>

<head>

</head>

<body>



</body>

</html>