<?php

namespace Craue\GeoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2022 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class GeoPostalCode {

	/**
	 * @var int
	 */
	protected int $id;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	protected string $country;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	protected string $postalCode;

	/**
	 * @var double
	 * @Assert\NotBlank
	 */
	protected float $lat;

	/**
	 * @var double
	 * @Assert\NotBlank
	 */
	protected float $lng;

	public function getId(): int
    {
		return $this->id;
	}

	public function setCountry($country): void
    {
		$this->country = $country;
	}

	public function getCountry(): string
    {
		return $this->country;
	}

	public function setPostalCode($postalCode): void
    {
		$this->postalCode = $postalCode;
	}

	public function getPostalCode(): string
    {
		return $this->postalCode;
	}

	public function setLat($lat): void
    {
		$this->lat = $lat;
	}

	public function getLat(): float
    {
		return $this->lat;
	}

	public function setLng($lng): void
    {
		$this->lng = $lng;
	}

	public function getLng(): float
    {
		return $this->lng;
	}

}
