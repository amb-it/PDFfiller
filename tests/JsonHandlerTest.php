<?php
use PHPUnit\Framework\TestCase;

class JsonEncodeTest extends TestCase
{
	public function testCustomJsonEncode()
	{
		$json_handler = new JsonHandler;

		$array = [
			'k1' => 'v1',
			'k2' => 'v2',
			'k3' => [
				'k11' => 'v11',
				'k22' => 'v22',
				'k33' => [
					'k111' => 'v111'
				]
			],
			'k4' => 'v4',
			'k5' => 5
		];

        $this->assertEquals(
            $json_handler->customJsonEncode($array),
            '{"k1":"v1","k2":"v2","k3":{"k11":"v11","k22":"v22","k33":{"k111":"v111"}},"k4":"v4","k5":5}'
        );
	}
}