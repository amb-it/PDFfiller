<?php

class JsonHandler
{
	public function customJsonEncode($array)
	{
		$json = '{';

		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$json .= '"' . $key . '":{' . $this->customSubarrayJsonEncode($value) . '},';
			} elseif (is_integer($value) || is_float($value)) {
				$json .= '"' . $key . '"' . ':' . $value . ',';
			} else {
				$json .= '"' . $key . '"' . ':"' . $value . '",';
			}
		}

		return mb_substr($json, 0, -1) . '}';
	}

	private function customSubarrayJsonEncode(array $array)
	{
		$json = '';

		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$json .= '"' . $key .'":' . $this->customJsonEncode($value, true);
			} elseif (is_integer($value) || is_float($value)) {
				$json .= '"' . $key . '"' . ':' . $value . ',';
			} else {
				$json .= '"' . $key . '"' . ':"' . $value . '",';
			}
		}

		return $json;
	}
}