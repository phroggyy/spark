@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
       'heading' => 'This is your receipt',
       'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

    <table align="center">
        <tr>
            <td class="date">{{ $receipt->created_at->format('Y-m-d H:i') }} | [[ Card ]] ****{{ $receipt->last4 }}</td>
        </tr>
    </table>

    <style>
        td, th {
            font-size: 14px;
            line-height: 1.4em;
        }
        th {
            text-align: left;
        }
        .line {
            border-top: 1px solid #bebebe;
        }
        .line td {
            height: 5px;
        }
        .date,
        .receipt-number {
            text-align: center;
            color: #a7a7a7;
            font-size: 12px;
        }
    </style>

    <table>
        <tr>
            <td height="30"></td>
        </tr>
    </table>

    <table width="90%" align="center">
        <tr>
            <td width="50%">
                BUYER<br><br>

                @if ($company)
                    <strong>{{ $company->name }}</strong><br>
                @endif

                {{ $person->name }}
                <br>

                {{ $orderAddress->line1 }}<br>

                @if ($orderAddress->line2)
                    {{ $orderAddress->line2 }}<br>
                @endif

                {{ $orderAddress->zip }} {{ $orderAddress->city }}<br>
                {{ $orderAddress->country }}
            </td>
            <td width="50%" style="text-align: right">
                SELLER<br><br>

                <strong>{{ $company->name }}</strong><br>
                @if ($company->vat_id)
                    {{ $company->vat_id }}<br>
                @endif

                {{ $company->address_line1 }}<br>

                @if ($company->address_line2)
                    {{ $company->address_line2 }}<br>
                @endif

                {{ $company->zip }} {{ $company->city }}<br>
                {{ $company->country }}

            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td height="25"></td>
        </tr>
    </table>

    <table style="width: 90%; background: #fbfbfb" align="center">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>

                            <table width="100%" align="center">
                                @foreach ($invoiceItems as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td align="right">${{ $item->price }}</td>
                                    </tr>
                                @endforeach
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <table width="100%">
                                <tr>
                                    <td height="5"></td>
                                </tr>
                            </table>
                            <table width="100%" class="line">
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <table width="100%" align="center">
                                <tr>
                                    <th>Total</th>
                                    <td align="right">${{ $order->price_with_tax }}</td>
                                </tr>
                                @if ($order->tax_amount > 0)
                                    <tr>
                                        <th>Includes {{ $company->country->vat }}% VAT</th>
                                        <td align="right">$ {{ $order->tax_amount }}</td>
                                    </tr>
                                @endif
                            </table>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td height="15"></td>
        </tr>
    </table>

    <p class="receipt-number">
        Receipt ID {{ $receipt->public_id }} | {{ $company->email }} | {{ $company->phone }}
    </p>

    @include('beautymail::templates.sunny.contentEnd')


@stop