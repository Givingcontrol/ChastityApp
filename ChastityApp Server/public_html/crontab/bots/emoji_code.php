<?php
// SET EMOJI
if ($skipIfLines == 0) {
	$chanceRoll = mt_rand(1, 1000000);
	if ($keyholderEmoji == 0 || ($keyholderEmoji > 0 && $chanceRoll <= 50000 && time() - $timestampLastChangedEmoji >= mt_rand(86400, 354600))) {
		if ($userEmoji == 0) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 1, 1, 1, 1, 1, 1, 27, 27, 27, 27, 27, 17, 17, 17, 17, 4, 4, 4, 16, 16, 12); }
		if ($userEmoji == 1) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 6, 0, 6, 6, 6, 6, 6, 6, 0, 1, 1, 1, 1, 1, 1, 17, 17, 17, 17, 17, 19, 19, 19, 19, 4, 4, 4, 24, 24, 10); }
		if ($userEmoji == 2) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 24, 24, 24, 24, 24, 24, 19, 19, 19, 19, 19, 25, 25, 25, 25, 12, 12, 12, 5, 5, 3); }
		if ($userEmoji == 3) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 19, 19, 19, 19, 19, 19, 5, 5, 5, 5, 5, 17, 17, 17, 17, 7, 7, 7, 6, 6, 27); }
		if ($userEmoji == 4) { array_push($emoji , 0, 23, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 31, 31, 31, 31, 31, 31, 13, 13, 13, 13, 13, 30, 30, 30, 30, 1, 1, 1, 72, 72, 16); }
		if ($userEmoji == 5) { array_push($emoji , 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 5, 5, 5, 5, 5, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 19, 19, 19, 19, 19, 19, 24, 24, 24, 24, 24, 10, 10, 10, 10, 20, 20, 20, 11, 11, 16); }
		if ($userEmoji == 6) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 5, 0, 5, 0, 5, 0, 5, 5, 5, 5, 5, 5, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 10, 10, 10, 10, 10, 10, 4, 4, 4, 4, 4, 6, 6, 6, 6, 27, 27, 27, 19, 19, 7); }
		if ($userEmoji == 7) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 10, 10, 10, 10, 27, 27, 27, 19, 19, 1); }
		if ($userEmoji == 8) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 5, 0, 5, 0, 5, 0, 5, 5, 5, 5, 5, 5, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 19, 19, 19, 19, 19, 19, 18, 18, 18, 18, 18, 8, 8, 8, 8, 74, 74, 74, 1, 1, 30); }
		if ($userEmoji == 9) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 27, 0, 27, 27, 27, 27, 27, 27, 0, 12, 12, 12, 12, 12, 12, 5, 5, 5, 5, 5, 1, 1, 1, 1, 24, 24, 24, 33, 33, 17); }
		if ($userEmoji == 10) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 5, 0, 5, 0, 5, 5, 5, 5, 5, 5, 0, 10, 0, 10, 10, 10, 10, 10, 10, 0, 17, 17, 17, 17, 17, 17, 16, 16, 16, 16, 16, 19, 19, 19, 19, 4, 4, 4, 23, 23, 30); }
		if ($userEmoji == 11) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 16, 16, 16, 16, 16, 16, 4, 4, 4, 4, 4, 24, 24, 24, 24, 31, 31, 31, 30, 30, 36); }
		if ($userEmoji == 12) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 17, 0, 17, 17, 17, 17, 17, 17, 0, 8, 8, 8, 8, 8, 8, 10, 10, 10, 10, 10, 16, 16, 16, 16, 24, 24, 24, 3, 3, 23); }
		if ($userEmoji == 13) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 13, 13, 13, 13, 13, 13, 4, 4, 4, 4, 4, 23, 23, 23, 23, 24, 24, 24, 27, 27, 2); }
		if ($userEmoji == 14) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 17, 17, 17, 17, 17, 17, 23, 23, 23, 23, 23, 24, 24, 24, 24, 30, 30, 30, 11, 11, 16); }
		if ($userEmoji == 15) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 27, 0, 27, 0, 27, 27, 27, 27, 27, 27, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 12, 12, 12, 12, 12, 12, 4, 4, 4, 4, 4, 72, 72, 72, 72, 19, 19, 19, 13, 13, 15); }
		if ($userEmoji == 16) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 1, 1, 1, 1, 1, 1, 19, 19, 19, 19, 19, 17, 17, 17, 17, 10, 10, 10, 4, 4, 16); }
		if ($userEmoji == 17) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 6, 0, 6, 6, 6, 6, 6, 6, 0, 12, 12, 12, 12, 12, 12, 17, 17, 17, 17, 17, 8, 8, 8, 8, 27, 27, 27, 3, 3, 18); }
		if ($userEmoji == 18) { array_push($emoji , 0, 23, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 10, 0, 10, 0, 10, 10, 10, 10, 10, 10, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 17, 17, 17, 17, 17, 17, 27, 27, 27, 27, 27, 13, 13, 13, 13, 5, 5, 5, 19, 19, 18); }
		if ($userEmoji == 19) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 24, 24, 24, 24, 24, 33, 33, 33, 33, 33, 16, 16, 16, 16, 4, 4, 4, 8, 8, 27); }
		if ($userEmoji == 20) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 27, 27, 27, 27, 27, 27, 16, 16, 16, 16, 16, 23, 23, 23, 23, 1, 1, 1, 4, 4, 13); }
		if ($userEmoji == 21) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 0, 16, 0, 16, 0, 16, 0, 16, 16, 16, 16, 16, 0, 5, 0, 5, 0, 5, 5, 5, 5, 5, 0, 11, 0, 11, 11, 11, 11, 11, 0, 29, 29, 29, 29, 29, 17, 17, 17, 17, 22, 22, 22, 9, 9, 55); }
		if ($userEmoji == 22) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 16, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 6, 6, 6, 6, 6, 6, 7, 7, 7, 7, 7, 22, 22, 22, 22, 11, 11, 11, 31, 31, 45); }
		if ($userEmoji == 23) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 16, 0, 16, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 17, 0, 17, 17, 17, 17, 17, 17, 0, 30, 30, 30, 30, 30, 30, 27, 27, 27, 27, 27, 1, 1, 1, 1, 4, 4, 4, 24, 24, 23); }
		if ($userEmoji == 24) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 16, 0, 16, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 9, 9, 9, 9, 9, 11, 11, 11, 11, 11, 17, 17, 17, 17, 1, 1, 1, 6, 6, 26); }
		if ($userEmoji == 25) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 12, 0, 12, 0, 12, 12, 12, 12, 12, 12, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 4, 4, 4, 4, 4, 4, 24, 24, 24, 24, 24, 27, 27, 27, 27, 19, 19, 19, 23, 23, 30); }
		if ($userEmoji == 26) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 6, 6, 6, 6, 6, 6, 18, 18, 18, 18, 18, 33, 33, 33, 33, 10, 10, 10, 4, 4, 24); }
		if ($userEmoji == 27) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 30, 30, 30, 30, 30, 30, 24, 24, 24, 24, 24, 8, 8, 8, 8, 10, 10, 10, 12, 12, 1); }
		if ($userEmoji == 28) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 30, 0, 30, 30, 30, 30, 30, 30, 0, 24, 24, 24, 24, 24, 24, 28, 28, 28, 28, 28, 33, 33, 33, 33, 5, 5, 5, 75, 75, 23); }
		if ($userEmoji == 29) { array_push($emoji , 0, 15, 0, 15, 0, 15, 0, 15, 0, 15, 15, 15, 15, 15, 15, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 30, 0, 30, 0, 30, 30, 30, 30, 30, 30, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 16, 16, 16, 16, 16, 16, 72, 72, 72, 72, 72, 9, 9, 9, 9, 40, 40, 40, 10, 10, 27); }
		if ($userEmoji == 30) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 10, 0, 10, 10, 10, 10, 10, 10, 0, 20, 20, 20, 20, 20, 20, 17, 17, 17, 17, 17, 16, 16, 16, 16, 25, 25, 25, 27, 27, 1); }
		if ($userEmoji == 31) { array_push($emoji , 0, 27, 0, 27, 0, 27, 0, 27, 0, 27, 27, 27, 27, 27, 27, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 17, 17, 17, 17, 17, 17, 25, 25, 25, 25, 25, 32, 32, 32, 32, 23, 23, 23, 10, 10, 30); }
		if ($userEmoji == 32) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 33, 0, 33, 33, 33, 33, 33, 33, 0, 4, 4, 4, 4, 4, 4, 27, 27, 27, 27, 27, 10, 10, 10, 10, 24, 24, 24, 17, 17, 32); }
		if ($userEmoji == 33) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 31, 0, 31, 0, 31, 31, 31, 31, 31, 31, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 16, 16, 16, 16, 16, 16, 1, 1, 1, 1, 1, 17, 17, 17, 17, 32, 32, 32, 4, 4, 8); }
		if ($userEmoji == 34) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 3, 0, 3, 3, 3, 3, 3, 3, 0, 24, 24, 24, 24, 24, 24, 19, 19, 19, 19, 19, 4, 4, 4, 4, 46, 46, 46, 30, 30, 75); }
		if ($userEmoji == 35) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 27, 0, 27, 27, 27, 27, 27, 27, 0, 12, 12, 12, 12, 12, 12, 16, 16, 16, 16, 16, 10, 10, 10, 10, 19, 19, 19, 1, 1, 23); }
		if ($userEmoji == 36) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 33, 33, 33, 33, 33, 33, 17, 17, 17, 17, 17, 16, 16, 16, 16, 19, 19, 19, 22, 22, 12); }
		if ($userEmoji == 37) { array_push($emoji , 0, 20, 0, 20, 0, 20, 20, 20, 20, 0, 43, 0, 43, 43, 43, 43, 0, 16, 16, 16, 16, 12, 12, 12, 15, 15, 46); }
		if ($userEmoji == 38) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 12, 0, 12, 12, 12, 12, 12, 12, 0, 70, 70, 70, 70, 70, 70, 31, 31, 31, 31, 31, 73, 73, 73, 73, 5, 5, 5, 8, 8, 15); }
		if ($userEmoji == 39) { array_push($emoji , 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 32, 32, 32, 32, 32, 32, 31, 31, 31, 31, 31, 75, 75, 75, 75, 16, 16, 16, 11, 11, 13); }
		if ($userEmoji == 40) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 16, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 24, 24, 24, 24, 24, 24, 19, 19, 19, 19, 19, 23, 23, 23, 23, 33, 33, 33, 8, 8, 10); }
		if ($userEmoji == 41) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 12, 12, 12, 12, 12, 12, 16, 16, 16, 16, 16, 5, 5, 5, 5, 17, 17, 17, 23, 23, 30); }
		if ($userEmoji == 42) { array_push($emoji , 0, 24, 0, 24, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 30, 0, 30, 30, 30, 30, 30, 30, 0, 72, 72, 72, 72, 72, 72, 3, 3, 3, 3, 3, 32, 32, 32, 32, 8, 8, 8, 9, 9, 26); }
		if ($userEmoji == 43) { array_push($emoji , 0, 20, 0, 20, 0, 20, 20, 20, 20, 0, 9, 0, 9, 9, 9, 9, 0, 3, 3, 3, 3, 23, 23, 23, 36, 36, 45); }
		if ($userEmoji == 44) { array_push($emoji , 0, 24, 0, 24, 0, 24, 24, 24, 0, 33, 0, 33, 33, 33, 0, 3, 3, 3, 78, 78, 46); }
		if ($userEmoji == 45) { array_push($emoji , 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 31, 0, 31, 0, 31, 31, 31, 31, 0, 24, 0, 24, 24, 24, 24, 0, 7, 7, 7, 7, 33, 33, 33, 30, 30, 10); }
		if ($userEmoji == 46) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 29, 0, 29, 0, 29, 29, 29, 29, 29, 29, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 23, 23, 23, 23, 23, 23, 33, 33, 33, 33, 33, 16, 16, 16, 16, 4, 4, 4, 5, 5, 32); }
		if ($userEmoji == 47) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 3, 0, 3, 3, 3, 3, 3, 3, 0, 24, 24, 24, 24, 24, 24, 72, 72, 72, 72, 72, 27, 27, 27, 27, 30, 30, 30, 5, 5, 76); }
		if ($userEmoji == 48) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 30, 30, 30, 30, 30, 30, 19, 19, 19, 19, 19, 38, 38, 38, 38, 5, 5, 5, 36, 36, 16); }
		if ($userEmoji == 49) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 45, 0, 45, 0, 45, 45, 45, 45, 45, 45, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 33, 33, 33, 33, 33, 33, 20, 20, 20, 20, 20, 59, 59, 59, 59, 28, 28, 28, 27, 27, 5); }
		if ($userEmoji == 50) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 23, 23, 23, 23, 23, 23, 6, 6, 6, 6, 6, 18, 18, 18, 18, 17, 17, 17, 76, 76, 10); }
		if ($userEmoji == 51) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 12, 0, 12, 12, 12, 12, 12, 12, 0, 19, 19, 19, 19, 19, 19, 9, 9, 9, 9, 9, 16, 16, 16, 16, 24, 24, 24, 10, 10, 3); }
		if ($userEmoji == 52) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 10, 0, 10, 10, 10, 10, 10, 10, 0, 75, 75, 75, 75, 75, 75, 9, 9, 9, 9, 9, 45, 45, 45, 45, 4, 4, 4, 14, 14, 13); }
		if ($userEmoji == 53) { array_push($emoji , 0, 23, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 8, 0, 8, 0, 8, 0, 8, 8, 8, 8, 8, 8, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 34, 0, 34, 34, 34, 34, 34, 34, 0, 21, 21, 21, 21, 21, 21, 43, 43, 43, 43, 43, 59, 59, 59, 59, 3, 3, 3, 31, 31, 24); }
		if ($userEmoji == 54) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 5, 0, 5, 5, 5, 5, 5, 5, 0, 31, 31, 31, 31, 31, 31, 1, 1, 1, 1, 1, 4, 4, 4, 4, 17, 17, 17, 11, 11, 16); }
		if ($userEmoji == 55) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 12, 0, 12, 12, 12, 12, 12, 12, 0, 42, 42, 42, 42, 42, 42, 24, 24, 24, 24, 24, 16, 16, 16, 16, 23, 23, 23, 17, 17, 5); }
		if ($userEmoji == 56) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 72, 72, 72, 72, 72, 72, 31, 31, 31, 31, 31, 45, 45, 45, 45, 3, 3, 3, 16, 16, 18); }
		if ($userEmoji == 57) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 27, 0, 27, 27, 27, 27, 27, 27, 0, 3, 3, 3, 3, 3, 3, 31, 31, 31, 31, 31, 16, 16, 16, 16, 7, 7, 7, 18, 18, 15); }
		if ($userEmoji == 58) { array_push($emoji , 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 24, 24, 24, 24, 24, 24, 17, 17, 17, 17, 17, 10, 10, 10, 10, 14, 14, 14, 19, 19, 1); }
		if ($userEmoji == 59) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 24, 24, 24, 24, 24, 24, 30, 30, 30, 30, 30, 7, 7, 7, 7, 17, 17, 17, 6, 6, 2); }
		if ($userEmoji == 60) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 24, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 3, 0, 3, 0, 3, 3, 3, 3, 3, 3, 0, 16, 0, 16, 16, 16, 16, 16, 16, 0, 27, 27, 27, 27, 27, 27, 19, 19, 19, 19, 19, 23, 23, 23, 23, 20, 20, 20, 6, 6, 75); }
		if ($userEmoji == 61) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 0, 26, 0, 26, 26, 26, 26, 26, 0, 7, 7, 7, 7, 7, 12, 12, 12, 12, 32, 32, 32, 4, 4, 10); }
		if ($userEmoji == 62) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 23, 23, 23, 0, 9, 0, 9, 9, 9, 9, 0, 3, 3, 3, 3, 32, 32, 32, 8, 8, 5); }
		if ($userEmoji == 63) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 23, 0, 23, 0, 23, 0, 23, 23, 23, 23, 23, 23, 0, 3, 0, 3, 0, 3, 3, 3, 3, 3, 3, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 69, 69, 69, 69, 69, 69, 5, 5, 5, 5, 5, 40, 40, 40, 40, 32, 32, 32, 45, 45, 13); }
		if ($userEmoji == 64) { array_push($emoji , 0, 10, 0, 10, 0, 10, 10, 10, 0, 23, 0, 23, 23, 23, 0, 9, 9, 9, 15, 15, 4); }
		if ($userEmoji == 65) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 32, 0, 32, 32, 32, 32, 32, 32, 0, 16, 16, 16, 16, 16, 16, 10, 10, 10, 10, 10, 5, 5, 5, 5, 24, 24, 24, 4, 4, 17); }
		if ($userEmoji == 66) { array_push($emoji , 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 19, 0, 19, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 23, 23, 23, 23, 23, 23, 9, 9, 9, 9, 9, 17, 17, 17, 17, 30, 30, 30, 3, 3, 27); }
		if ($userEmoji == 67) { array_push($emoji , 0, 24, 0, 24, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 8, 0, 8, 0, 8, 0, 8, 8, 8, 8, 8, 8, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 4, 4, 4, 4, 4, 4, 13, 13, 13, 13, 13, 22, 22, 22, 22, 31, 31, 31, 3, 3, 69); }
		if ($userEmoji == 68) { array_push($emoji , 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 68, 0, 68, 0, 68, 0, 68, 68, 68, 68, 68, 68, 0, 45, 0, 45, 0, 45, 45, 45, 45, 45, 45, 0, 22, 0, 22, 22, 22, 22, 22, 22, 0, 6, 6, 6, 6, 6, 6, 75, 75, 75, 75, 75, 32, 32, 32, 32, 23, 23, 23, 28, 28, 30); }
		if ($userEmoji == 69) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 6, 0, 6, 6, 6, 6, 6, 6, 0, 11, 11, 11, 11, 11, 11, 23, 23, 23, 23, 23, 33, 33, 33, 33, 16, 16, 16, 14, 14, 10); }
		if ($userEmoji == 70) { array_push($emoji , 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 24, 0, 24, 0, 24, 24, 24, 24, 24, 24, 0, 19, 0, 19, 19, 19, 19, 19, 19, 0, 23, 23, 23, 23, 23, 23, 17, 17, 17, 17, 17, 27, 27, 27, 27, 6, 6, 6, 43, 43, 12); }
		if ($userEmoji == 71) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 0, 23, 0, 23, 0, 23, 23, 23, 23, 0, 36, 0, 36, 36, 36, 36, 0, 33, 33, 33, 33, 19, 19, 19, 24, 24, 3); }
		if ($userEmoji == 72) { array_push($emoji , 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 0, 9, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 9, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 20, 0, 8, 0, 8, 8, 8, 8, 8, 8, 0, 17, 17, 17, 17, 17, 17, 72, 72, 72, 72, 72, 23, 23, 23, 23, 3, 3, 3, 19, 19, 70); }
		if ($userEmoji == 73) { array_push($emoji , 0, 20, 0, 20, 0, 20, 20, 20, 20, 0, 3, 0, 3, 3, 3, 3, 0, 36, 36, 36, 36, 28, 28, 28, 24, 24, 19); }
		if ($userEmoji == 74) { array_push($emoji , 0, 9); }
		if ($userEmoji == 75) { array_push($emoji , 0, 24, 24, 25); }
		if ($userEmoji == 76) { array_push($emoji , 0, 20, 0, 20, 0, 20, 20, 20, 20, 0, 8, 0, 8, 8, 8, 8, 0, 32, 32, 32, 32, 19, 19, 19, 75, 75, 9); }
		if ($userEmoji == 77) { array_push($emoji , 0, 20); }
		if ($userEmoji == 78) { array_push($emoji , 0, 20, 0, 20, 0, 20, 0, 20, 20, 20, 20, 20, 0, 9, 0, 9, 0, 9, 9, 9, 9, 9, 0, 11, 0, 11, 11, 11, 11, 11, 0, 14, 14, 14, 14, 14, 19, 19, 19, 19, 24, 24, 24, 78, 78, 76); }
		if (count($emoji) > 0) { $newKeyholderEmoji = $emoji[mt_rand(0, count($emoji) - 1)]; }
		if ($build < 166 && $newKeyholderEmoji > 0 && $newKeyholderEmoji <= 72) { $keyholderEmoji = $newKeyholderEmoji; }
		if ($build >= 166 && $newKeyholderEmoji > 0 && $newKeyholderEmoji <= 78) { $keyholderEmoji = $newKeyholderEmoji; }
	}
}
?>