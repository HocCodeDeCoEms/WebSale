<?php
    function checkuser($user, $pass){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM users WHERE user='".$user."' and pass='".$pass."'");
        $stmt->execute();
        $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        if(count($kq)>0) return $kq[0]['role'];
        else return -1;
    }
    function getuserinfo($user, $pass){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM users WHERE user='".$user."' and pass='".$pass."'");
        // $query="SELECT * FROM users WHERE user='".$user."' and pass='".$pass."'";
        // $sth = $pdo->query($query);
        $stmt->execute();
        $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }
?>