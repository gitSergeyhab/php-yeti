<?

function renderTemplate($template, $second) {
    extract($second);
    ob_start();
    require $template;
    return ob_get_clean();
};

function good_price ($price) {
    $price = ceil($price);
    $price_end = " ₽";
    $price = (string)$price;
    while (strlen($price) > 3) {
        $price_end = " " . substr($price, strlen($price) - 3) . $price_end;
        $price = substr($price, 0, strlen($price) - 3);
    };
    return $price . $price_end;
};

function good_price2 ($price) {
    return number_format(ceil($price), 0, ".", " ") . " ₽";
};

function get_hours_minutes() {
    date_default_timezone_set('Europe/Moscow');
    $data_now = date('d.m.Y H:i');
    $day_in_second = 86400;
    $three_hours = 10800;
    $next_day = date('d.m.Y', strtotime(date('d.m.Y')) + $day_in_second);
    $result = strtotime($next_day) - strtotime($data_now) - $three_hours;
    return date('H:i', $result);
};
