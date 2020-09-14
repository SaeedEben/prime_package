<?php


namespace vicgonvt\prime;


class MarkDownParser
{
	public static function parse($string)
	{
		return \Parsedown::instance()->text($string);
	}
}