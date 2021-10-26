<?php
declare(strict_types=1);

/**
 * Class Transaction
 */
class Transaction
{

    private float $amount;
    private  string $description;

    /**
     * Transaction constructor.
     * @param float $amount
     * @param string $description
     */
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;

    }

    /**
     * @param float $rate
     */
    public function addTax (float $rate) : Transaction
    {
        $this->amount += ($this->amount * $rate) / 100;
        return $this;
    }

    /**
     * @param float $discountAmount
     */
    public function applyDiscount (float $discountAmount) : Transaction
    {
        $this->amount -= ($this->amount * $discountAmount) / 100;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'Destruct ' .$this->description . '<br/>';
    }



//fffff

}