<?php
/**
 * Written by Nair, 1/1/19 8:59 PM
 * Decided to use PHP 7.*'s strict typing for this particular task
 */

class Calculate
{

    private $commission_rate = 17;

    /**
     * Doing Date time conditions
     */
    public function __construct()
    {
        $time = date("H");
        $day = date("D");
        $this->rate = 11;

        if ($day == "Fri" && $time >= 15 && $time <= 20) {
            $this->rate = 13;
        }
    }


    /**
     * @param $estimated_car_value
     * @param $tax_percentage
     * @param $instalments
     * @return string
     * For calculating the required fields
     */
    public function calculatePremium($estimated_car_value, $tax_percentage, $instalments): string
    {
        $result = "";
        try {
            $base_premium = $estimated_car_value * ($this->rate / 100); // Calculating by the premium percentage
            $commission = $base_premium * ($this->commission_rate / 100);
            $total_tax = $base_premium * ($tax_percentage / 100);
            $total_cost = ($base_premium + $commission + $total_tax);
            $result = $this->createHtml($base_premium, $commission, $total_tax, $total_cost, $instalments, $estimated_car_value, $tax_percentage);
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
        return $result;
    }


    /**
     * @param float $base_premium
     * @param float $commission
     * @param float $total_tax
     * @param float $total_cost
     * @param float $instalments
     * @param float $estimated_car_value
     * @param float $tax_percentage
     * @return string
     *Creating the html template with the dynamic variables
     */
    private function createHtml(float $base_premium, float $commission, float $total_tax, float $total_cost, float $instalments, float $estimated_car_value, float $tax_percentage): string
    {
        $html = '';
        try {
            $html = '<table style="width:100%"> <tr> <th></th><th>Policy</th>';
            for ($i = 0; $i < $instalments; $i++) {
                $html .= "<th>Installment #" . ($i + 1) . "</th>";
            }
            $html .= "  </tr> <tr>";
            $html .= "<td>Value </td ><td>" . $this->roundOff($estimated_car_value) . " </td > ";
            for ($i = 0; $i < $instalments; $i++) {
                $html .= "<td></td>";
            }
            $html .= "</tr>";

            $html .= "<td>Base Premium (" . ($this->rate) . " %)  </td ><td>" . $this->roundOff($base_premium) . " </td > ";
            for ($i = 0; $i < $instalments; $i++) {
                $html .= "<td>" . ($this->roundOff($base_premium / $instalments)) . "</td>";
            }
            $html .= "</tr>";

            $html .= "<td>Commission (17 %)  </td ><td>" . $this->roundOff($commission) . " </td > ";
            for ($i = 0; $i < $instalments; $i++) {
                $html .= "<td>" . ($this->roundOff($commission / $instalments)) . "</td>";
            }
            $html .= "</tr>";

            $html .= "<td>Tax (" . ($tax_percentage) . ") % </td ><td>" . $this->roundOff($total_tax) . " </td > ";
            for ($i = 0; $i < $instalments; $i++) {
                $html .= "<td>" . ($this->roundOff($total_tax / $instalments)) . "</td>";
            }
            $html .= "</tr>";

            $html .= "<td><b>Total Cost</b> </td ><td><b>" . $this->roundOff($total_cost) . "</b> </td > ";
            for ($i = 0; $i < $instalments; $i++) {
                $html .= "<td>" . ($this->roundOff($total_cost / $instalments)) . "</td>";
            }
            $html .= "</tr>";
            $html .= "</table > ";
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }

        return $html;
    }


    /**
     * @param $number
     * @return string
     * Rounding off the number to precision
     */
    public function roundOff($number)
    {
        $result = number_format((float)$number, 2, '.', '');
        return $result;
    }

}


