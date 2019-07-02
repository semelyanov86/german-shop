<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <title>New order notification! </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <style type="text/css">
        body{
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }
        ul{
            margin:0;
            padding: 0;
        }
        li{
            display: inline-block;
            text-decoration: unset;
        }
        a{
            text-decoration: none;
        }
        p{
            margin: 15px 0;
        }

        h5{
            color:#444;
            text-align:left;
            font-weight:400;
        }
        .text-center{
            text-align: center
        }
        .main-bg-light{
            background-color: #fafafa;
        }
        .title{
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }
        table{
            margin-top:30px
        }
        table.top-0{
            margin-top:0;
        }
        table.order-detail , .order-detail th , .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
        .order-detail th{
            font-size:16px;
            padding:15px;
            text-align:center;
        }
        .footer-social-icon tr td img{
            margin-left:5px;
            margin-right:5px;
        }
    </style>
</head>
<body style="margin: 20px auto;">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" >
                <tr>
                    <td>
                        <img src="{{asset('assets/images/email-temp/delivery.png')}}" alt="" style=";margin-bottom: 30px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('assets/images/email-temp/success.png')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 class="title">Vielen Dank!</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Sie haben die neue Bestellung!</p>
                        <p>{{trans('app.email')}}: {{$order->email}}</p>
                        <p>{{trans('app.kuddennr')}}: {{$order->kuddennr}}</p>
                        <p>{{trans('app.info')}}: {{$order->info}}</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <div style="border-top:1px solid #777;height:1px;margin-top: 30px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('assets/images/email-temp/order-success.png')}}" alt="" style="margin-top: 30px;">
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" >
                <tr>
                    <td>
                        <h2 class="title">BUCHUNG INFO</h2>
                    </td>
                </tr>
            </table>
            <table class="order-detail" border="0" cellpadding="0" cellspacing="0"  align="left">
                <tr align="left">
                    <th>{{trans('app.products')}}</th>
                    <th style="padding-left: 15px;">DESCRIPTION</th>
                    <th>{{trans('app.quantity')}}</th>
                    <th>{{trans('app.price')}} </th>
                </tr>
                @foreach($order->products as $product)
                <tr>
                    <td>
                        <img src="/storage/{{$product->image}}" alt="" width="70">
                    </td>
                    <td valign="top" style="padding-left: 15px;">
                        <h5 style="margin-top: 15px;">{{$product->name}} </h5>
                    </td>
                    <td valign="top" style="padding-left: 15px;">
                        <h5 style="font-size: 14px; color:#444;margin-top: 10px;"><span>{{$product->pivot->quantity}}</span></h5>
                    </td>
                    <td valign="top" style="padding-left: 15px;">
                        <h5 style="font-size: 14px; color:#444;margin-top:15px"><b>{{$product->presentPrice($product->pivot->type)}}</b></h5>
                    </td>
                </tr>
                @endforeach

                <tr>
                    <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">{{trans('app.netto')}}:</td>
                    <td colspan="3" class="price" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b>{{$order->presentTotal($total)}}</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">{{ trans('app.discount') }} :</td>
                    <td colspan="3" class="price" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b>{{$order->presentTotal($order->discount)}}</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="line-height: 49px;font-family: Arial;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">{{trans('app.tax')}}: </td>
                    <td colspan="3" class="price" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b>{{$order->presentTotal($order->tax)}}</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;
                                    padding-left: 20px;text-align:left;border-right: unset;">{{trans('app.total')}} :</td>
                    <td colspan="3" class="price" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b>{{$order->presentTotal($order->final_total)}}</b></td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 30px;    margin-bottom: 30px;">
                <tbody><tr>
                    <td width="57" height="25" class="user-info"><img src="assets/images/email-temp/space.jpg" alt=" " height="25" width="57"></td>
                    <td class="user-info" style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;">
                        <h5 style="font-size: 16px;font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">{{trans('app.shipping-address')}}</h5>
                        @if($order->other_address)
                        <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">{{$order->name}},<br> {{$order->street}} <br>{{$order->city}}, {{$order->postindex}}</p>
                            @else
                            <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">The same</p>
                            @endif
                    </td>
                </tr>
                </tbody></table>


        </td>
    </tr>
    </tbody>
</table>
<table class="main-bg-light text-center top-0"  align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 30px;">
            <div>
                <h4 class="title" style="margin:0;text-align: center;">Follow us</h4>
            </div>
            <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon" align="center" class="text-center" style="margin-top:20px;">
                <tr>
                    <td>
                        <a href="#"><img src="assets/images/email-temp/facebook.png" alt=""></a>
                    </td>
                    <td>
                        <a href="#"><img src="assets/images/email-temp/youtube.png" alt=""></a>
                    </td>
                    <td>
                        <a href="#"><img src="assets/images/email-temp/twitter.png" alt=""></a>
                    </td>
                    <td>
                        <a href="#"><img src="assets/images/email-temp/gplus.png" alt=""></a>
                    </td>
                    <td>
                        <a href="#"><img src="assets/images/email-temp/linkedin.png" alt=""></a>
                    </td>
                    <td>
                        <a href="#"><img src="assets/images/email-temp/pinterest.png" alt=""></a>
                    </td>
                </tr>
            </table>
            <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
{{--            <table  border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;" >
                <tr>
                    <td>
                        <a href="#" style="font-size:13px">Want to change how you receive these emails?</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="font-size:13px; margin:0;">2019 Copyright BaRo GmbH</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" style="font-size:13px; margin:0;text-decoration: underline;">Unsubscribe</a>
                    </td>
                </tr>
            </table>--}}
        </td>
    </tr>
</table>
</body>
</html>