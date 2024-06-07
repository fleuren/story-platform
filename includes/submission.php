        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $username = htmlspecialchars($_POST["auth_name"]);
                $story_input = htmlspecialchars($_POST["story_body"]);

                try {
                        require_once "dbh.inc.php";

                        $query = "INSERT INTO fsp_database (username, story_text) VALUES (:username, :story_text);";

                        $stnt = $pdo->prepare($query);
                        $stnt->bindParam(":username", $username);
                        $stnt->bindParam(":story_text", $story_input);
                        $stnt->execute();
                        $pdo = null;
                        $stnt = null;

                        header("Location: ../index.php");

                        die();
                    }
                    catch (PDOException $e) {
                    die("Query failed: " . $e->getMessage());
                    }

            }
            else
            {
                header("Location: ../index.php");
            }
        ?>