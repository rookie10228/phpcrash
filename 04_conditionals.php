<?php 
    /* ----------------- Operators --------------- */

    /*
        < Less than
        > Greater than
        <= Less than or equal to
        >= Greater than or equal to
        === Identical to
        != Not equal to
        !== Not identical to
    */
/*
$age = 20;

if($age >= 18){
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
}*/
// $t = date("H");// F = month, j = day, H = hours, m = minutes, s = seconds

// if($t <12){
//     echo "Good morning!";
// }
// elseif($t<17) {
//     echo "Good afternoon!!";
// }
// else{
//     echo "Good evening!";
// }
$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }
//echo !empty($posts)? $posts[0]: 'No Posts';
//$firstPost = !empty($posts)? $posts[0]: 'No Posts';
//$firstPost = !empty($posts)? $posts[0]: null;
// line 41 = line 43
//$firstPost = $posts[0]?? null;
//echo $firstPost;

$favcolor = 'blue';

switch($favcolor){
    case 'red':
    case 'blue':
    case 'green':
        echo "Your favorite color is {$favcolor}";
        break;
    default:
        echo "Your favorite color is not red, green or blue";
    break;
}