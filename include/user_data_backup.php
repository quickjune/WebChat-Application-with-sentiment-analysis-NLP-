<?php
$con = mysqli_connect("localhost", "root", "", "mychat");
$user = "SELECT * FROM users";
$run_user = mysqli_query($con, $user);

while ($row_user = mysqli_fetch_array($run_user)) {
    $user_id = $row_user['user_id'];
    $user_name = $row_user['user_name'];
    $user_profile = $row_user['user_profile'];
    $login = $row_user['log_in'];

    echo "
    <li>
        <div class='chat-right-img'>";
    if ($status == "Positive") {
        echo "<img src='C:\\xampp\\htdocs\\MyChat\\images\\positive.jpg' alt='+ve' width='10' height='10'>";
    } elseif ($status == "Negative") {
        echo "<img src='C:\\xampp\\htdocs\\MyChat\\images\\negative.jpg' alt='-ve' width='10' height='10'>";
    } else {
        echo "<img src='C:\\xampp\\htdocs\\MyChat\\images\\neautral.jpg' alt='+ve' width='10' height='10'>";
    }

    echo "</div>
        <div class='chat-left-img'>
            <img src='$user_profile'>
        </div>
        <div class='chat-left-detail'>
            <p><a href='home.php?user_name=$user_name'>$user_name</a></p>";

    if ($login == 'Online') {
        echo "<span><i class='fa fa-circle' aria-hidden='true'></i> online</span>";
    } else {
        echo "<span><i class='fa fa-circle-o' aria-hidden='true'></i> Offline</span>";
    }

    echo "
        </div>
    </li>";
}
?>
