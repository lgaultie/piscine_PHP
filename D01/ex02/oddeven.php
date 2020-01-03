#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$number = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		echo "\n";
		exit();
	}
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "le chiffre $number est Pair\n";
		else
			echo "le chiffre $number est Impair\n";
	}
	else
		echo "'$number' n'est pas un chiffre\n";
}
?>
