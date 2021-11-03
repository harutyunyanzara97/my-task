<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home() {
        return view('Make-order');
    }
    public function order(Request  $request) {


        $domain = 'https://superposuda.retailcrm.ru/';
        $key = 'QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb';

        $postData = http_build_query(array(
            'order' => json_encode(array(
                'order_status' => 'trouble',
                'order_type' => 'fizik',
                'shop' => 'test',
                'registration_method' => 'test',
                'order_number' => '4031997',
                'full_name' => $request->fullname,
                'client_comment' => 'https://github.com/harutyunyanzara97/my-task'

)),
    'apiKey' => $key,
));

$opts = array('http' =>
    array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postData
    )
);

$getOpts = array('http' =>
            array(
                'method' => 'GET',
                'header' => 'Content-type: application/x-www-form-urlencoded',
            )
        );

$newContext = stream_context_create($getOpts);

        $result = json_decode(
            file_get_contents(
                $domain . 'api/v5/orders/create?filter[properties][vendor_code]=$request->vendor_code&filter[properties][brand]=$request->brand',
                false,
                $newContext
            ),
            true);

    }
}
