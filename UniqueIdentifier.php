<?php
    $UniqueIdentifier = $_POST['UniqueIdentifier'];
    $code = $_POST['code'];

    $database = mysql_connect('ild1302.uhost.co.kr', 'soulone', 'minu9999') or die('Could not connect: ' . mysql_error());
    mysql_select_db("soulone",$database);
    
    if($code == 0) {
        
        $query = "SELECT * FROM Dinos_UniqueIdentifier where UniqueIdentifier = N'$UniqueIdentifier'";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        
        if (empty($row[0]))
            echo "empty";
        else
            echo "exist";
        
    } else if ($code == 1) {
        
        mysql_query("INSERT Dinos_UniqueIdentifier SET UniqueIdentifier = '$UniqueIdentifier'");
        
        echo "insert";
        
    }
    
    /*
    if($code == 0)
    {
        $database = mysql_connect('ild1302.uhost.co.kr', 'soulone', 'minu9999') or die('Could not connect: ' . mysql_error());
        mysql_select_db("soulone",$database);
        
        $query = "SELECT * FROM Wolf2_SV where FIND = 'cc'";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        
        $today1 = date("Y-m-d");//Y년 n월 j일 (요일 : D)");
        $str_now = strtotime($today1);
        $str_target = strtotime($row[2]);
        
        if($str_now > $str_target) {
            
            mysql_query("UPDATE Wolf2_SV SET day = '$today1', SV = '$sv' WHERE FIND = 'cc'");
            echo $sv;
            //echo "비교할 시간이 현재 시간보다 이전입니다.".$row[2]."s".$str_target;
            
        }
        else
        {
            echo $row[1];
            // echo "비교할 시간이 현재시간보다 이후입니다.";
            
        }
        
    }
    else
    {
        echo "QwQ";
    }
    */
    
    ?>
