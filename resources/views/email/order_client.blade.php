<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <title>Vielen Dank für Ihre Bestellung! </title>
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
        table.order-detail {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
        /*table.order-detail tr:nth-child(even) {
            border-top:1px solid #ddd;
            border-bottom:1px solid #ddd;
        }
        table.order-detail tr:nth-child(odd) {
            border-bottom:1px solid #ddd;
        }*/
        .pad-left-right-space{
            border: unset !important;
        }
        .pad-left-right-space td{
            padding: 5px 15px;
        }
        .pad-left-right-space td p{
            margin: 0;
        }
        .pad-left-right-space td b{
            font-size:15px;
            font-family: 'Roboto', sans-serif;
        }
        .order-detail th{
            font-size:16px;
            padding:15px;
            text-align:center;
            background: #fafafa;
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
            <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left;" width="100%">
                <tr>
                    <td style="text-align: center;">
                        <img src="{{asset('assets/images/email-temp/delivery-2.png')}}" alt="" style=";margin-bottom: 30px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="font-size: 14px;"><b>Guten Tag {{$order->name}},</b></p>
                        <p style="font-size: 14px;">{{trans('app.order-processed')}},</p>
                        <p style="font-size: 14px;">{{trans('app.order')}} Nr. : {{$order->id}},</p>
                        <p style="font-size: 14px;">{{trans('app.kuddennr')}} : {{$order->kuddennr}},</p>
                        <p style="font-size: 14px;">{{trans('app.info')}} : {{$order->info}}</p>
                    </td>
                </tr>
            </table>


 {{--           <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 10px;    margin-bottom: 10px;">
                <tbody>
                <tr>
                    <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                        <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">Ihre Lieferadresse</h5>
                        <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">268 Cambridge Lane New Albany,<br> IN 47150268 Cambridge Lane <br>New Albany, IN 47150</p>
                    </td>
                    <td><img src="assets/images/email-temp/space.jpg" alt=" " height="25" width="30"></td>
                    <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                        <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">Ihre Rechnungsadresse:</h5>
                        <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">268 Cambridge Lane New Albany,<br> IN 47150268 Cambridge Lane <br>New Albany, IN 47150</p>
                    </td>
                </tr>
                </tbody>
            </table>--}}
            <table border="0" cellpadding="0" cellspacing="0" >
                <tr>
                    <td>
                        <h2 class="title">{{trans('app.order-details')}}</h2>
                    </td>
                </tr>
            </table>
            <table class="order-detail" border="0" cellpadding="0" cellspacing="0"  align="left" style="width: 100%;    margin-bottom: 50px;">
                <tr align="center">
                    <th>{{trans('app.products')}}</th>
                    <th>Details</th>
                    <th>{{trans('app.quantity')}}</th>
                    <th>Preis </th>
                </tr>
                @foreach($order->products as $product)
                <tr align="center">
                    <td valign="top">
                        <h5 style="margin-top: 15px;">{{$product->firma}}</h5>
                        {{--                        <img src="{{asset('storage/' . $product->image)}}" alt="" width="80">--}}
                    </td>
                    <td valign="top">
                        <h5 style="margin-top: 15px;">{{$product->name}}</h5>
                    </td>
                    <td valign="top">
                        <h5 style="font-size: 14px; color:#444;margin-top: 10px;"><span>{{$product->pivot->quantity}}</span></h5>
                    </td>
                    <td valign="top">
                        <h5 style="font-size: 14px; color:#444;margin-top:15px"><b>{{$product->presentPrice($product->pivot->type)}}</b></h5>
                    </td>
                </tr>
                @endforeach
                <tr style="border-top:1px solid #ddd;" align="right">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="m-t-5">
                        <p style="font-size: 14px; padding-right:5%">Zwischensumme : </p>
                    </td>
                    <td class="m-t-5" align="center">
                        <b style>{{$order->presentTotal($total)}}</b>
                    </td>
                <tr align="right">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <p style="font-size: 14px; padding-right:5%">{{trans('app.tax')}} :</p>
                    </td>
                    <td align="center">
                        <b>{{$order->presentTotal($order->tax)}}</b>
                    </td>
                </tr>
                <tr align="right">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <p style="font-size: 14px; padding-right:5%">Rabatt :</p>
                    </td>
                    <td align="center">
                        <b> {{$order->presentTotal($order->discount)}}</b>
                    </td>
                </tr>
                <tr align="right">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="m-b-5">
                        <p style="font-size: 14px; padding-right:5%">{{trans('app.total')}} :</p>
                    </td>
                    <td class="m-b-5" align="center">
                        <b>{{$order->presentTotal($order->final_total)}}</b>
                    </td>
                </tr>

            </table>

        </td>
    </tr>
    </tbody>
</table>
<!--<table class="main-bg-light text-center top-0"  align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 30px;">
            <div>
                <h4 class="title" style="margin:0;text-align: center;">Folgen Sie uns</h4>
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
        </td>
    </tr>
</table>//-->
</body>
</html>