<html>
<body>
<?php
$D = $_GET['D'];
$L = $_GET['L'];

for ($i=1;$i<=$L;$i++){
 //echo $i;
 print "<br>";
    for ($j=1;$j<=$D;$j++){
        //echo $j;
            print "*";
    }
    if( $D == 2 or $D == 7){
        $D = $D * 2; 
    }else{
        if($D == 14){
            $D = $D + 7;
        }else{
            $D = $D + 2;
        }
    }
    
}
if ($D == 12 && $L == 5) {
    for ($i=9;$i>=$L;$i--){
        //echo $i;
           for ($j=8;$j>=$D;$j--){
               //echo $j;
                   print "*";
           }
           if($D == 12){
               $D = $D - 11;
           }else{
                $D = $D +2;
           }
           print "<BR>\n ";
       }
}else{
    for ($i=5;$i>=$L;$i--){
        //echo $i;
           for ($j=14;$j>=$D;$j--){
               //echo $j;
                   print "*";
           }
           if($D == 23){
               $D = $D - 22;
           }else{
                $D = $D + 7;
           }
           print "<BR>\n ";
       }
}
?> 
</body>
<html>