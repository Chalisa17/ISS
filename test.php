<?php
echo "EIEIEIEIEIEIEI";
function gcd ($a, $h)
{
    $temp;
    while (true)
    {
        $temp = $a % $h;
        if ($temp == 0){
            return $h;
        }
        $a = $h;
        $h = $temp;
    }
}
function randomNumber ($number){
    for ($i = $number; $i <= $number+100; $i++) {
        if($i % 2 != 1) {
            continue;
        }
        $d = 3;
        $x = sqrt($i);
        while ($i % $d != 0 && $d < $x) {
            $d += 2;
        }
        if ((($i % $d == 0 && $i != $d) * 1) == 0) {
            return $i;
        }
    }
}
    $p = randomNumber(rand(1,20));
    $q = randomNumber(rand(1,20));
    echo "P = ".$p."\n";
    echo "Q = ".$q."\n";
    // First part of public key:
    $n = $p*$q;
    echo "N = ".$n."\n";
    // Finding other part of public key.
    // e stands for encrypt
    $phi = (($p-1)*($q-1));
    echo "PHI = ".$phi."\n";
    $e = rand(1,5);
    do {
        $e =rand(1,20);
    }while($e >= $n);


    while ($e < $n && $e < $phi)
    {
        // e must be co-prime to phi and
        // smaller than phi.
        if ( gcd($e, $phi) == 1 ){
            break;
        } else{
            $e++;
        }
    }
    echo "E = ".$e."\n";
    $k = rand(1,5);
    echo "K = ".$k."\n";
    $d = $e*$k;
    while(fmod($d, $phi) != 1){
        if(fmod($d, $phi) == 1){
             $d = $k;
         }
           if(fmod($d, $phi)>=$phi && $d != $k){
                 $d--;
             }
             if(fmod($d, $phi) < $phi && $d != $k ){
                 $d++;
            }
    }
    $msg = 26;
    echo "D = ".$d."\n";
    echo ("Message data = ".$msg);
    $c = pow($msg, $e);
    $c = fmod($c, $n);
    echo("\nEncrypted data = ".$c);

    $m = pow($c, $k);
    $m = fmod($m, $n);
    echo("\nOriginal Message Sent = ".$m);



?>
