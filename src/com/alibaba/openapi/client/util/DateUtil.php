<?php

namespace moyi\client\util;

class DateUtil
{
	public static function getDateFormatInServer()
	{
		return "yyyyMMddHHmmssSSSZ";
	}

	public static function getDateFormat()
	{
		return "YmdHisu";
	}

	public static function parseToString($dateTime)
	{
		if ($dateTime == null) {
			return null;
		} else {
			return date(DateUtil::getDateFormat(), $dateTime);
		}
	}
}
