<?php
namespace Google\Protobuf\Meta;

use Google\Protobuf\SourceCodeInfo;
use Google\Protobuf\SourceCodeInfo\Meta\LocationMeta;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\Protobuf\Binary;
use Skrz\Meta\Protobuf\ProtobufException;
use Skrz\Meta\Protobuf\ProtobufMetaInterface;

/**
 * Meta class for \Google\Protobuf\SourceCodeInfo
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class SourceCodeInfoMeta extends SourceCodeInfo implements MetaInterface, ProtobufMetaInterface
{
	const LOCATION_PROTOBUF_FIELD = 1;

	/** @var SourceCodeInfoMeta */
	private static $instance;


	/**
	 * Constructor
	 */
	private function __construct()
	{
		self::$instance = $this; // avoids cyclic dependency stack overflow
	}


	/**
	 * Returns instance of this meta class
	 *
	 * @return SourceCodeInfoMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \Google\Protobuf\SourceCodeInfo
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return SourceCodeInfo
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new SourceCodeInfo();
			case 1:
				return new SourceCodeInfo(func_get_arg(0));
			case 2:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1));
			case 3:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new SourceCodeInfo(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \Google\Protobuf\SourceCodeInfo to default values
	 *
	 *
	 * @param SourceCodeInfo $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof SourceCodeInfo)) {
			throw new \InvalidArgumentException('You have to pass object of class Google\Protobuf\SourceCodeInfo.');
		}
		$object->location = NULL;
	}


	/**
	 * Computes hash of \Google\Protobuf\SourceCodeInfo
	 *
	 * @param object $object
	 * @param string|resource $algoOrCtx
	 * @param bool $raw
	 *
	 * @return string|void
	 */
	public static function hash($object, $algoOrCtx = 'md5', $raw = FALSE)
	{
		if (is_string($algoOrCtx)) {
			$ctx = hash_init($algoOrCtx);
		} else {
			$ctx = $algoOrCtx;
		}

		if (isset($object->location)) {
			hash_update($ctx, 'location');
			foreach ($object->location instanceof \Traversable ? $object->location : (array)$object->location as $v0) {
				LocationMeta::hash($v0, $ctx);
			}
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \Google\Protobuf\SourceCodeInfo object from serialized Protocol Buffers message.
	 *
	 * @param string $input
	 * @param SourceCodeInfo $object
	 * @param int $start
	 * @param int $end
	 *
	 * @throws \Exception
	 *
	 * @return SourceCodeInfo
	 */
	public static function fromProtobuf($input, $object = NULL, &$start = 0, $end = NULL)
	{
		if ($object === null) {
			$object = new SourceCodeInfo();
		}

		if ($end === null) {
			$end = strlen($input);
		}

		while ($start < $end) {
			$tag = Binary::decodeVarint($input, $start);
			$wireType = $tag & 0x7;
			$number = $tag >> 3;
			switch ($number) {
				case 1:
					if ($wireType !== 2) {
						throw new ProtobufException('Unexpected wire type ' . $wireType . ', expected 2.', $number);
					}
					if (!(isset($object->location) && is_array($object->location))) {
						$object->location = array();
					}
					$length = Binary::decodeVarint($input, $start);
					$expectedStart = $start + $length;
					if ($expectedStart > $end) {
						throw new ProtobufException('Not enough data.');
					}
					$object->location[] = LocationMeta::fromProtobuf($input, null, $start, $start + $length);
					if ($start !== $expectedStart) {
						throw new ProtobufException('Unexpected start. Expected ' . $expectedStart . ', got ' . $start . '.', $number);
					}
					break;
				default:
					switch ($wireType) {
						case 0:
							Binary::decodeVarint($input, $start);
							break;
						case 1:
							$start += 8;
							break;
						case 2:
							$start += Binary::decodeVarint($input, $start);
							break;
						case 5:
							$start += 4;
							break;
						default:
							throw new ProtobufException('Unexpected wire type ' . $wireType . '.', $number);
					}
			}
		}

		return $object;
	}


	/**
	 * Serialized \Google\Protobuf\SourceCodeInfo to Protocol Buffers message.
	 *
	 * @param SourceCodeInfo $object
	 * @param array $filter
	 *
	 * @throws \Exception
	 *
	 * @return string
	 */
	public static function toProtobuf($object, $filter = NULL)
	{
		$output = '';

		if (isset($object->location) && ($filter === null || isset($filter['location']))) {
			foreach ($object->location instanceof \Traversable ? $object->location : (array)$object->location as $k => $v) {
				$output .= "\x0a";
				$buffer = LocationMeta::toProtobuf($v, $filter === null ? null : $filter['location']);
				$output .= Binary::encodeVarint(strlen($buffer));
				$output .= $buffer;
			}
		}

		return $output;
	}

}
