<?php

function provjera_prosjecne_temperature($UlazniMjesec,$UlazniSat,$UlaznaTemperatura)
{
	$Mjesec=$UlazniMjesec;
	$Sati=$UlazniSat;
	$Temperatura=$UlaznaTemperatura

	$Doba;

	$Ispis;

	if ($Sati>=20)
		$Doba="noc";
	else if ($Sati<6)
		$Doba="noc";
	else if ($Sati>=6 && $Sati<12)
		$Doba="jutro";
	else if ($Sati>=12 && $Sati<20)
		$Doba="dan";
		
	if ($Mjesec==1)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=-4.8;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=-1.1;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=-8.5;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
	}

	else if ($Mjesec==2)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=8.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=-0.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
	}

	else if ($Mjesec==3)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=9.3;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=15.9;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=2.6;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
	}

	else if ($Mjesec==4)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=10.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=16.2;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=4.6;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==5)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=15.8;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=22;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=9.5;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==6)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=20.7;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=26.9;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=14.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==7)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=21.8;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=28.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=15.1;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==8)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=21.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=28;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=14.7;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		
	}

	else if ($Mjesec==9)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=14.2;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=18.5;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=4.8;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==10)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=11,7;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=18.5;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=4.8;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==11)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=5.6;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=10;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=1.2;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	else if ($Mjesec==12)
	{
		if ($Doba=="jutro")
		{
			$ProsjecnaTemperatura=2.4;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="dan")
		{
			$ProsjecnaTemperatura=7.3;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}
		else if ($Doba=="noc")
		{
			$ProsjecnaTemperatura=-2.6;
			$Ispis=provjera_temperature($Temperatura,$ProsjecnaTemperatura);
		}		
	}

	return $Ispis;
}

function provjera_temperature($Temperatura,$ProsjecnaTemperatura){

	$Ispis;

	if ($Temperatura>$ProsjecnaTemperatura)
	{
		$Ispis="Temperatura je veca od prosjeka za ovo doba dana u mjesecu.";
	}
	else if ($Temperatura < $ProsjecnaTemperatura)
	{
		$Ispis = "Temperatura je manja od prosjeka za ovo doba dana u mjesecu."
	}
	else
	{
		$Ispis = "Temperatura je prosjecna za ovo doba dana u mjesecu."
	}
	
	return=$Ispis;
}

?>

