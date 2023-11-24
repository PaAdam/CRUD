<?php
    // connection
                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM projet";
                $result = $connection->query($sql);
                if (!$result){
                    die ("Invalid query:" . $connection->error);
                }
