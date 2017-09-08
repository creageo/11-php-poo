<?php

	class Validator {

		static function isString($text) {
			return (is_string($text))? true: false;
		}

		static function isInteger($text) {
			return (is_int($text))? true: false;
		}

		static function isFloat($text) {
			return (is_float($text))? true: false;
		}
		
	}

?>