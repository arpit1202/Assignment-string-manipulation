<?php
$spell = "   ABRACADABRA   ";
$trimmedSpell = trim($spell);
$cleanedSpell = strtolower($trimmedSpell);
$correctSpell = "abracadabra";
if ($cleanedSpell === $correctSpell) {
    echo "The spell is correct! The wizarding world is safe!";
} else {
    echo "The spell is incorrect! The wizarding world is still at risk!";
}
?>
