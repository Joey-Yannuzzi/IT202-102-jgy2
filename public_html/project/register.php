<?php
    require(__DIR__ . "/../../partials/nav.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for = "username">Username</label>
        <input type = "text" name = "username" required maxlength = "30"/>
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
    if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]))
    {
        $email = se($_POST, "email", "", false);
        $password = se($_POST, "password", "", false);
        $confirm = se($_POST, "confirm", "", false);
        $username = se($_POST, "username", "", false);

        $hasError = false;
        if (empty($email))
        {
            flash("Email must not be empty");
            $hasError = true;
        }

        //old way
        /*$email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "Invalid email address";
            $hasError = true;
        }*/

        $email = sanitize_email($email);
        if (!is_valid_email($email))
        {
            flash("Invalid email address");
            $hasError = true;
        }

        if (empty($password))
        {
            flash("Password must not be empty");
            $hasError = true;
        }
        if (empty($confirm))
        {
            flash("Confirm password must not be empty");
            $hasError = true;
        }
        if (strlen($password) < 8)
        {
            flash("Password too short");
            $hasError = true;
        }
        if (strlen($password) > 0 && $password != $confirm)
        {
            flash("Passwords must match");
            $hasError = true;
        }
        if (!preg_match('/^[a-z0-9_-]{3,30}$/', $username))
        {
            flash("Username must be lowercase, alphanumberical, and contain only contain _ or -", "warning");
            $hasError = true;
        }

        if (!$hasError)
        {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO Users(email, password, username) VALUES (:email, :password, :username)");

            try
            {
                $r = $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
                flash("Successfully Registered", "success");
            }
            catch (Exception $e)
            {
                users_check_duplicate($e->errorInfo);
            }
        }
    }

    require(__DIR__ . "/../../partials/flash.php");
?>