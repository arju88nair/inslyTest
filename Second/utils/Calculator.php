<?php
/**
 * Written by Nair, 1/1/19 8:59 PM
 */

class Calculate
{

    private $commissionRate = 0.17;


    /**
     * Calculate constructor.
     * @param int $estimated_car_value
     * @param int $instalments
     * @param int $tax_percentage
     * * Calculate constructor.
     * Doing Date time conditions
     */


    public function __construct(int $estimated_car_value, int $instalments, int $tax_percentage)
    {
        $time = date("H");
        $day = date("D");

        if ($day == "Fri" && $time >= 15 && $time <= 20) {
            $premiumRate = 13;
            $basePremium = $estimated_car_value * ($premiumRate / 100);
        } else {
            $premiumRate = 11;
            $basePremium = $estimated_car_value * ($premiumRate / 100);
        }

        try {
            $this->calculatePremium($basePremium, $instalments, $tax_percentage);

        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }

    }


    /**
     * @param $basePremium
     * @param $estimated_car_value
     * @param $tax_percentage
     *
     * Method doing the calculations of the required data
     */
    public function calculatePremium($basePremium, $estimated_car_value, $tax_percentage)
    {

    }


}


?>