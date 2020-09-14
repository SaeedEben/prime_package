<?php


namespace vicgonvt\prime\tests;


use Orchestra\Testbench\TestCase;
use Parsedown;
use vicgonvt\prime\MarkDownParser;

class markDownTest extends TestCase
{
	/**    @test */
	public function simple_markdown_is_parsed()
	{
		$this->assertEquals('<h1>Heading</h1>', MarkDownParser::parse('# Heading'));
	}
}