<?php
   function connectdb() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=ct275_project', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            $error_messege = 'Không thể kết nối đến CSDL';
            $reason = $e->getMessage();
            echo $reason;
            exit();
        }
   }
    