<?php

namespace App\Traits;

trait HomeHelpersTrait
{
  /**
   * @param array $items
   * @param string $total
   * @return string
   */
    function renderItemsTable($items, $total)
    {

        $output = '<div class="table-responsive">
            <table class="table table-striped table-sm items--table">
              <thead>
                <tr class="header-line">
                  <th>#</th>
                  <th>Item</th>
                  <th>Price</th>
                  <th>Extras</th>
                </tr>
              </thead>
              <tbody>';

        $sequence = 0;
        
        foreach ($items as $item) {
            $sequence++;

            $output .= '<tr>
              <td>' . $sequence . '</td>
              <td class="item--column">'. ucwords($item->getType()) .'</td>
              <td class="price--column">$'. $item->getPrice().'</td>';

            if ($item->hasExtras()) {
                $output .= "<td><ul>";

                foreach ($item->getExtras() as $extra) {
                    $type = (new \ReflectionClass(get_class($extra)))->getShortName();
                    $output .= "<li>" . $type;

                    if ($type === 'Controller') {
                        if ($extra->isWired()) {
                          $output .= ' (Wired)';
                        } else {
                          $output .= ' (Remote)';
                        }
                    }
                }

                $output .= '</ul></td></tr>';
            } else {
                $output .= '<td>(No extras)</td></tr>';
            }
        }

        $output .= '<tr class="total-line">
          <td>Total</td>
          <td></td>
          <td class="price--column"><strong>$'. $total . '</strong></td>
          <td></td>
          </tr></tbody></table></div>';

        return $output;
    }
}