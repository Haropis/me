<html>
<body>
    <?php
    //define variables and set to empty values
    $name = $email = $comment = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = striplashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
</body>
</html>