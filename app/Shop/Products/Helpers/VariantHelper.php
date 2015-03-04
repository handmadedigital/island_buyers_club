<?php namespace TGL\Shop\Products\Helpers;

class VariantHelper
{
    /**
     * @param $product
     */
    public function generateVariationCombinations($product)
    {

        $count = 0;

        $option_value_names = [];
        $option_value_ids = [];

        foreach($product->options as $option)
        {
            foreach($option->values as $value)
            {
                $option_value_names[$count][] = $value->name;
                $option_value_ids[$count][] = $value->id;
            }

            $count++;
        }

        $name_combinations = $this->create_combinations($option_value_names);
        $id_combinations = $this->create_combinations($option_value_ids);

        $combinations = count($name_combinations);

        for($i = 0; $i < $combinations; $i++)
        {
            $test =
                '<div class="form-group">
                    <div class="options">
                         <div class="form-group">
                            <label for="exampleInputAmount">'.$this->getOptionNames($name_combinations[$i]).'</label>
                            <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input type="hidden" name="option_ids[]" value="'.$this->getOptionIds($id_combinations[$i]).'">
                              <input type="text" name="price[]"  class="form-control" id="exampleInputAmount" placeholder="Amount">
                              <div class="input-group-addon">.00</div>
                            </div>
                          </div>
                    </div>
                </div>';

            echo $test;
        }
    }

    /**
     * Generate all the possible variations. if something is
     * has the option of color:red,blue,green and size:large,small
     * then one of the combinations would be red,large this function
     * generates all the possible combinations
     *
     *
     *
     * @param $arrays
     * @param int $i
     * @return array
     */
    public function create_combinations($arrays, $i = 0)
    {
        if (!isset($arrays[$i]))
        {
            return array();
        }
        if ($i == count($arrays) - 1)
        {
            return $arrays[$i];
        }

        // get combinations from subsequent arrays
        $tmp = $this->create_combinations($arrays, $i + 1);

        $result = array();

        // concat each array from tmp with each element from $arrays[$i]
        foreach ($arrays[$i] as $v)
        {
            foreach ($tmp as $t)
            {
                $result[] = is_array($t) ? array_merge(array($v), $t) : array($v, $t);
            }
        }

        return (array) $result;
    }

    public function getOptionNames($names)
    {
        foreach($names as $name)
        {
            echo "$name ";
        }
    }

    public function getOptionIds($ids)
    {
        $value = "";

        $last_key = end($ids);

        foreach($ids as $id)
        {
            if($id === $last_key)
            {
                $value .= $id;
            }
            else
            {
                $value .= $id. " ";
            }
        }

        return $value;
    }
}