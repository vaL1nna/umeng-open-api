<?php

namespace moyi\client\serialize;

interface Serializer
{
	public function supportedContentType();
	public function serialize($serializer);
}
