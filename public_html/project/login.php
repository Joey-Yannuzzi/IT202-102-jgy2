<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <input type="submit" value="Login" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);

    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty");
        $hasError = true;
    }

    //old way
    /*//sanitize
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //validate
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        $hasError = true;
    }*/

    $email = sanitize_email($email);
    if (!is_valid_email($email))
    {
        flash("Invalid email address");
        $hasError = true;
    }

    if (empty($password)) {
        flash("password must not be empty");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password too short");
        $hasError = true;
    }
    if (!$hasError) {

        $db = getDB();
        $stmt = $db->prepare("SELECT id, email, username, password from Users where email = :email");

        try
        {
            $r = $stmt->execute([":email" => $email]);
            if ($r)
            {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user)
                {
                    $hash = $user["password"];
                    unset($user["password"]);
                    if (password_verify($password, $hash))
                    {
                        //flash("Weclome $email");
                        $_SESSION["user"] = $user;
                        die(header("Location: home.php"));
                    }
                    else
                    {
                        flash("invalid password");
                    }
                }
                else
                {
                    flash("Email not found");
                }
            }
        }
        catch (Exception $e)
        {
            echo "<pre>" . var_export($e, true) . "</pre>\n";
        }

    }
}

require(__DIR__ . "/../../partials/flash.php");
?>