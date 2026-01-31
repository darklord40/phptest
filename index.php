<?php
 $money=440000;//เงินตั้งต้น
 $dok=0.055;//ดอกเบี้ย
 $send=18000;//จำนวนเงินที่ส่งเข้าหุ่นในเเต่ละเดือน
 $punpon3=0;

 
 $punpon1=$money*$dok;
 //echo $punpon1;
 
 for($i=11;$i>=1;$i--){
    $punpon2=$send*$dok*($i/12);
    $punpon3+=$punpon2;
    echo number_format($punpon2,2)."<BR>";
 }
 echo $punpon3+$punpon1;
?>
