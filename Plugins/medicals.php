
<?php

$query   = new WC_Order_Query();
$orders  = $query->get_orders();

foreach ( $orders as $order_id ) {

  $order  = wc_get_order( $order_id );

  foreach ( $order->get_items() as $item ){

    $order_ids = $item->get_order_id();
    $product_name = $item->get_name();
    $product_price = wc_price($item->get_total());
    $product_quantity = $item->get_quantity();
    $product_completion_date = $order->get_date_created()->date_i18n('j F, Y');

    if( $product_name == "Finger printing service" ) {
      echo '<p>';
      echo __('Product ID:     ') . $item->get_product_id() . '<br>';
      echo __('Order ID:       ') . $order_ids . '<br>';
      echo __('Product Name:   ') . $product_name . '<br>';
      echo __('Product Price:          ') . $product_price . '<br>';
      echo __('Product Quantity:     ') . $product_quantity . '<br>';
      echo __('Completion Date:    ') . $product_completion_date . '</p>';
    }
  }
}

?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date',  'Qantity'],
          ['29 September, 2022', 3 ],
          <?php

            $query   = new WC_Order_Query();
            $orders  = $query->get_orders();

            foreach ( $orders as $order_id ) {

              $order  = wc_get_order( $order_id );

              foreach ( $order->get_items() as $item ){

                $product_name = $item->get_name();
                $product_quantity = $item->get_quantity();
                $product_completion_date = $order->get_date_created()->date_i18n('j F, Y');

                if( $product_name == "Finger printing service" ) {
                  ?>
                [' <?php echo $product_completion_date; ?>',  <?php echo $product_quantity; ?> ],
                <?php
                }
              }
            }
          ?>
        ]);
        
        var options = {
          chart: {
            title: 'Finger printing service',
            subtitle: 'Price & Quantity: By Date',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };
        
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
      </script>
     </head>
   <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div> 
  </body>
</html>