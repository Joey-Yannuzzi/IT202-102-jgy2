<?php
    require_once(__DIR__ . "/../../../lib/functions.php");
    error_log("save_score received data: " . var_export($_REQUEST, true));

    $score = (int)se($_POST, "score", 0, false);

    $standalone_enabled = true;

    if ($score > 0 && $standalone_enabled)
    {
        save_score($score);
    }

    function save_score($score, $echo = true)
    {
        $response = ["status" => 400, "message" => "Unhandled error"];

        if (session_status() != PHP_SESSION_ACTIVE)
        {
            session_start();
        }

        if (is_logged_in())
        {
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO Score(user, score) VALUES(:user, :score)");

            try
            {
                $stmt->execute([":user" => get_username(), ":score" => $score]);
                $response["status"] = 200;
                $response["message"] = "Saved Score";
                http_response_code(200);
            }
            catch (PDOException $e)
            {
                error_log("Error saving score: " .var_export($e, true));
                //$response["message"] = var_export($e->errorinfo, true);
                http_response_code(400);
            }
        }
        else
        {
            $response["message"] = "Not logged in";
            http_response_code(403);
        }
        if ($echo)
        {
            echo json_encode($response);
            die();
        }
        return ($response);
    }
?>