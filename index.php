<?php
$line="<br>";
//les fonctions

function f_comparaison ($a,$b)
{
    $line="<br>";   
    if ($a>$b)
        {
            echo "$a est superieur a $b";
        }
    else
        {
            echo "$b est inferieur a $a";
        }

    $c=$a;
    $a=$b;
    $b=$c;
    echo "$line";

    if ($a<$b)      
        {          
            echo "$a est inferieur a $b";      
        }  
    else      
        {          
            echo "$b est superieur a $a";      
        }   
}

function f_addition ($a,$b)
{
    $c=$a+$b;
    echo "le resultat de l'addition $a+$b  est $c";
}

function f_soust ($a,$b)
{
    $c=$a-$b;
    echo "le resultat de la soustraction $a-$b  est $c";
}

function f_remember ($var1, $var2)
{
	if (is_numeric($var1) and is_numeric($var2))
	{
	    $res='la somme des '.$var1.'et '.$var2. ' est ' .($var1+$var2);
	}
	else
	{
	    $res= 'la phrase est ' .$var1.' '.$var2;
        }
        return $res;        
}


echo f_remember ('Bonjour','Mino');
