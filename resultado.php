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
        $D = $D * 2; 
    
}
// print '<br>';
// echo $L;
// print '<br>';
// echo$D;
 print '<br>';
 $D = $D / 4 -1;
for ($i=$L;$i>=2;$i--){
     //echo $i;
    // print '<br>';
    // echo$D;
       for ($j=0;$j<=$D;$j++){
           //echo $j;
               print "*";
       }
        $D = $D / 2;
       print "<BR>\n ";
      // echo $D;
}
?> 
</body>
<html>