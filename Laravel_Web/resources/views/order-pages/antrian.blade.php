@php
    foreach ($orders as $order) {
        $orders .= '<div class="col-md-4 mb-3">';
        $orders .= '<div class="card">';
        $orders .= '<div class="card-body">';
        $orders .= '<h5 class="card-title">' . $order->name . '</h5>';
        $orders .= '<p class="card-text">Antrian ' . $order->antrian . '</p>';
        $orders .= '</div>';
        $orders .= '</div>';
        $orders .= '</div>';
    }
@endphp
