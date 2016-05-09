<?php
function isValid(){

  	 if((preg_match("/^[A-Z][a-z]+$|^[ЙЦУКЕНГШЩЗХЭЖДЛОРПАВЫФЯЧСМИТЬБЮІЇЄ][йцукенгшщзхъэждлорпавыфячсмитьбюіїє]+$/",$_POST["surname"]))&&(preg_match("/^[A-Z][a-z]+$|^[ЙЦУКЕНГШЩЗХЭЖДЛОРПАВЫФЯЧСМИТЬБЮІЇЄ][йцукенгшщзхъэждлорпавыфячсмитьбюіїє]+$/",$_POST["name"])) && (preg_match("/^[A-Za-z.]+$|^[А-Яа-я.]+$/",$_POST["adress"])) && (preg_match("/^[1-9][0-9]+$/", $_POST["creditsum"])) && (preg_match("/^[0-9]+/", $_POST["number"]))) {
   		return true;
	}else{
		return false;
	}
	
}
?>