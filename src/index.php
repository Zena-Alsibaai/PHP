<?php
// === Exercise 1 ===
echo "Exercise 1 starts here:";
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
// === Exercise 2 ===
new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

// === Exercise 3 ===
new_exercise(3);
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 20);

// === Exercise 4 ===
new_exercise(4);
foreach($week as &$day) {
    $day = substr($day, 0,strlen($day)-3);
}
print_r($week);

// === Exercise 5 ===
new_exercise(5);
$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if( $letter == 'z' ){
        break;
}
}
print_r($arr);

// === Exercise 6 ===
new_exercise(6);
$arr = [];


function combineNames($str1 = "",  $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    //implode — Join array elements with a string
    echo implode( " - ", $params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes))-1][rand(0, 10)];

    echo $randname;
}

echo "Here is the name: " . combineNames();

// === Exercise 7 ===
new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));

// === Exercise 8 ===
new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        echo 'Welcome John';
        echo ' Smith ! ';
    }else
    return 'No access ! '; 
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

// === Exercise 9 ===
new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    
    return 'Acceptable<br />';
    
}


//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com'); // strops retourn un nombre et il commence à 0
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

// === Exercise 10 ===
new_exercise(10);

$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
$arr_length = count($areTheseFruits)-1;

for($i=0; $i <= $arr_length; $i++) {

    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
        
        
    }
}
 var_dump($areTheseFruits);
 // https://www.php.net/manual/en/function.count.php
 // Good approach

// $arr_length = count($some_arr);
// for($i=0;$i<$arr_length;$i++)
// {
//     // calculations
// }
 