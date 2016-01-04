<?php

if(isset($argv[1])) {
	echo "\n-------------------------------\nInitiating Label Generator v1.0\n-------------------------------\n\n";

	$prefixBar = $argv[1];
	$barValue = $argv[2];
	$determine = $barValue + 71;
	echo "Prefix Args: \033[31m".$prefixBar."\033[0m  --> SET.OK\n";
	echo "Barcode Start Args: \033[31m".$barValue."\033[0m -->SET.OK\n";
	echo "Barcode End Calculated: \033[31m".$determine."\033[0m -->DETERMINED.OK\n";	

		for($i=0; $i <= 71; $i++) {
			$valArray[$i] = $barValue++;
			}
			
		if(isset($valArray[0]) && isset($valArray[71]) ) {
			echo "\nGenerating TeX File .... \n";

			 $texFile = fopen("pdf.tex", "w"); 

				include("texData.php");
			
				if(isset($texData)) {			

				if(fwrite($texFile, $texData)) {
				
					echo "TeX File for Label Code from ".$prefixBar.$valArray[0]." till ".$prefixBar.$valArray[71]." Created.\n";

					echo "\n->Executing LaTeX...Script Sleeping for few Seconds\n\n";
					$output = shell_exec('latex pdf.tex'); // FILE NAME IS pdf.tex - LATEX COMMAND HERE
					echo "\n$output\n";
					sleep(1); // ADDING WAIT FOR LATEX COMPILE 

					echo "\n->Executing Dvips...Script Sleeping for few Seconds\n\n";
					$output = shell_exec('dvips pdf.dvi'); // DVIPS COMMAND HERE
					echo "\n$output\n";
					sleep(1); // ADDING WAIT FOR LATEX COMPILE 

					echo "\n->Executing ps2pdf...Script Sleeping for few Seconds\n\n";
					$output = shell_exec('ps2pdf pdf.ps final.pdf'); // PS2PDF COMMAND HERE
					echo "\n$output\n";

					$logFile = fopen("log.txt", "a");
					$logEntry = "TeX File for Label Code from ".$prefixBar.$valArray[0]." till ".$prefixBar.$valArray[71]." Created.\n";
					if(fwrite($logFile, $logEntry)){ 
						echo "Data Logged! Check log.txt";
					} else {
						 echo "Failed to Log."; 
					}		
			
				} else {
					echo "\n\nFailed! \n--> Error: Failed to Write file. Check My Permissions";
				}

				} else {
					echo "Failed!. \n----> Error: Some problem with texData.php"; 
				}


		} else {
			echo "Failed to Generate TeX File.\n---> Error: Error in Input Value";
		}

} else {

	echo "Failed to start. \n----> Error: Parameter 1 not set or is invalid.";
}
?>


