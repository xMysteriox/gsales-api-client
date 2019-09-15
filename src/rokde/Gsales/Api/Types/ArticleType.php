<?php namespace Rokde\Gsales\Api\Types;

use DateTime;
use Rokde\Gsales\Api\Contracts\IdentifierInterface;
use Rokde\Gsales\Api\Types\Article\Base;

/**
 * Class ArticleType
 *
 * @package Rokde\Gsales\Api\Types
 */
class ArticleType extends Base implements IdentifierInterface
{
	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string date(Y-m-d H:i:s)
	 */
	protected $created;

	/**
	 * returns created
	 *
	 * @param bool $formatted
	 *
	 * @return string|DateTime
	 */
	public function getCreated($formatted = true)
	{
		if ($formatted)
			return DateTime::createFromFormat('Y-m-d H:i:s', $this->created);

		return $this->created;
	}

	/**
	 * returns Id
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	
	protected $artno;

	/**
	* @return mixed
	*/
	public function getArtNo()
	{
		return $this->artno;
	}

	/**
	* @param mixed $art_no
	*/
	public function setArtNo($artno): void
	{
		$this->artno = $artno;
	}
}
