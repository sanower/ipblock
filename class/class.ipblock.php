<?php
class Ipblock{
    function __construct() {
        
    }
    
    public function add($ip,$sid){
        $query_test = "SELECT * FROM iptable WHERE sid='$sid'";
        $result_test = mysql_query($query_test);
        if(mysql_num_rows($result_test)>0){
            exit;
        }
        else {
            $query_test2 = "SELECT * FROM iptable WHERE ip='$ip'";
            $result_test2 = mysql_query($query_test2);
            if(mysql_num_rows($result_test2)<2){
                $query = "INSERT INTO iptable(ip,sid) VALUES('$ip','$sid')";
                mysql_query($query);
            }
            else {
                header("Location: http://www.google.com");
            }
        }
    }
    
}
?>