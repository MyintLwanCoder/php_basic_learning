<?php
$sentence = "The rain in Myanmar falls mainly on the plain";
//retrieve located characters and thire corresponding frequency.
$char = count_chars($sentence, 1);
foreach($char as $letter=>$frequency)
{
    echo "Character " . chr($letter). " appears $frequency times<br><hr>";
}
echo"<hr><br>";

$pargraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae saepe, harum culpa, reprehenderit dolores adipisci deleniti nobis similique, quos obcaecati ea. Velit laborum voluptatibus ipsum porro quas exercitationem fugiat tenetur!";
//retrieve located characters and thire corresponding frequency.
$char = count_chars($pargraph, 1);
foreach($char as $write=>$frequency)
{
    echo "Character " . chr($write). " appears $frequency times<br><hr>";
}
