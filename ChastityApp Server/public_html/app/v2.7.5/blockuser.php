<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

try {
    include "../../../includes/app.php";
    
    $JSON = array();
    
    $username = "";
     // Status 0 = Pending, 1 = Accepted, 2 = Declined, 3 = Blocked
    if ($userID1 == $userID2) {
        $query = $pdo->prepare("select id from UserIDs_V2 where user_id = :userID");
        $query->execute(array('userID' => $userID1));
        if ($query->rowCount() == 1) {
            foreach ($query as $row) {
                $userOneID = $row["id"];
            }
        }
        $userTwoID = $_POST['profileID'];
        $query = $pdo->prepare("select id, status from Relations where user_one_id = :userOneID and user_two_id = :userTwoID");
        $query->execute(array('userOneID' => $userOneID, 'userTwoID' => $userTwoID));
        if ($query->rowCount() == 1) {
            $query = $pdo->prepare("update Relations set status = 3 where user_one_id = :userOneID and user_two_id = :userTwoID");
            $result = $query->execute(array('userOneID' => $userOneID, 'userTwoID' => $userTwoID));
            if ($result == 1) { echo "Successfully Blocked"; }
        } else {
            $query = $pdo->prepare("insert into Relations (id, user_one_id, user_two_id, status) values ('', :userOneID, :userTwoID, :status)");
            $result = $query->execute(array('userOneID' => $userOneID, 'userTwoID' => $userTwoID, 'status' => 3));
            if ($result == 1) { echo "Successfully Blocked"; }
        }
    }
    $query = null;
    $pdo = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>