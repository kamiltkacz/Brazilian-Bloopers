
<?

require_once('./dbconn.php');

$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$num = mysqli_num_rows($result);

while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $sql2 = "SELECT * FROM offeredAnswer WHERE questionId = '" . $r['id'] . "'";
    $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));


    $target = $r['targetWord'];


    $ex = explode($target, $r['question']);

    echo '<br>' . $ex[0];

    echo '<select>';

    while ($r2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {


        echo '<option>' . $r2['offeredAnswer'] . '</option>';
    }

    echo '</select>';

    echo $ex[1];
}

?>