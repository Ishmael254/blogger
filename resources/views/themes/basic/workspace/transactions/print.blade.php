<!DOCTYPE html>
<html lang="{{ getLocale() }}" dir="{{ getDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ translate('Invoice #:number', ['number' => $trx->id]) }}</title>
    <link rel="icon" href="{{ asset($themeSettings->general->favicon) }}">
    @include('themes.basic.includes.styles')
</head>
<style>
    @media print {
        @page {
            size: auto;
            margin: 0;
        }

        .btn {
            display: none;
        }
    }
</style>

<body>
    <div class="invoice-container">
        <div class="invoice">
            <div class="row row-cols-auto justify-content-between align-items-center g-3 flex-nowrap">
                <div class="col">
                    <div class="logo logo-sm">
                        <img src="{{ asset($themeSettings->general->logo_dark) }}"
                            alt="{{ @$settings->general->site_name }}" />
                    </div>
                </div>
                <div class="col text-end">
                    <h4 class="text-uppercase">{{ translate('Invoice') }}</h4>
                    <p class="mb-0"><span class="text-muted">{{ translate('Number') }}:</span>
                        #{{ $trx->id }}</p>
                </div>
            </div>
            <div class="mt-4 pt-4 border-top">
                <div class="row row-cols-auto justify-content-between g-3">
                    <div class="col">
                        <h6 class="text-uppercase">{{ translate('Billed to') }}:</h6>
                        @php
                            $user = $trx->user;
                        @endphp
                        <p class="text-muted fw-light mb-0">{{ $user->getName() }}</p>
                        <p class="text-muted fw-light mb-0">{{ @$user->address->line_1 }}</p>
                        @if (@$user->address->line_2)
                            <p class="text-muted fw-light mb-0">{{ @$user->address->line_2 }}</p>
                        @endif
                        <p class="text-muted fw-light mb-0">{{ @$user->address->city }}</p>
                        <p class="text-muted fw-light mb-0">{{ @$user->address->state }}</p>
                        <p class="text-muted fw-light mb-0">{{ @$user->address->zip }}</p>
                        <p class="text-muted fw-light mb-0">{{ $user->getCountry() }}</p>
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="140px" height="140px"
                            viewBox="0.00 0.00 980.00 940.00">
                            <path fill="{{ $themeSettings->colors->primary_color }}" d="
                          M 821.66 554.94
                          Q 518.37 692.51 209.95 832.39
                          Q 207.79 833.37 204.19 833.80
                          Q 201.01 834.18 198.30 834.01
                          Q 187.81 833.32 179.45 825.30
                          Q 175.68 821.68 173.87 817.71
                          Q 98.67 652.14 20.99 480.93
                          C 18.16 474.69 16.37 471.27 16.47 465.72
                          Q 16.54 462.05 16.79 458.16
                          C 16.91 456.25 17.82 455.01 18.34 453.27
                          Q 18.51 452.70 18.93 452.28
                          C 19.78 451.44 19.48 450.29 20.18 449.18
                          Q 25.25 441.08 34.10 437.06
                          Q 395.19 273.21 770.31 103.05
                          Q 773.14 101.77 776.76 101.36
                          Q 789.58 99.90 799.67 108.05
                          C 803.65 111.26 805.56 115.55 807.62 120.09
                          Q 884.03 288.65 961.30 458.76
                          C 963.50 463.61 965.39 468.28 964.45 473.64
                          C 964.08 475.69 964.12 477.76 963.45 479.74
                          Q 960.63 488.07 954.80 493.16
                          Q 951.64 495.91 942.11 500.24
                          Q 882.83 527.19 821.66 554.94
                          Z
                          M 916.78 464.85
                          A 0.53 0.53 0.0 0 0 917.04 464.15
                          L 773.98 148.85
                          A 0.53 0.53 0.0 0 0 773.28 148.59
                          L 64.23 470.29
                          A 0.53 0.53 0.0 0 0 63.97 470.99
                          L 207.02 786.29
                          A 0.53 0.53 0.0 0 0 207.72 786.55
                          L 916.78 464.85
                          Z" />
                            <path fill="{{ $themeSettings->colors->primary_color }}" d="
                          M 632.52 323.05
                          Q 632.56 323.01 632.59 322.97
                          Q 632.65 322.90 632.75 322.88
                          Q 640.70 321.48 645.90 321.32
                          Q 647.50 321.28 649.10 321.14
                          Q 650.53 321.03 651.89 321.25
                          C 654.24 321.65 656.59 321.27 658.90 321.74
                          C 661.22 322.22 663.47 322.24 665.71 323.07
                          C 667.49 323.72 669.31 323.65 671.14 324.31
                          Q 684.81 329.28 694.57 337.85
                          Q 698.78 341.54 703.67 347.30
                          C 710.85 355.78 715.74 367.23 719.41 377.44
                          C 720.82 381.37 721.81 385.78 722.06 389.82
                          Q 722.26 393.12 722.83 396.24
                          Q 723.31 398.89 722.92 401.27
                          Q 722.31 404.86 722.25 408.32
                          Q 722.19 411.30 721.30 414.15
                          Q 720.61 416.39 720.15 418.60
                          Q 719.70 420.78 718.82 423.01
                          C 710.78 443.40 694.94 458.00 675.25 467.02
                          Q 651.28 478.00 626.11 489.36
                          Q 625.71 489.54 625.53 489.14
                          L 563.38 352.05
                          A 0.26 0.25 -25.0 0 1 563.51 351.72
                          Q 587.84 340.57 612.68 329.39
                          Q 622.39 325.03 632.24 323.20
                          Q 632.41 323.17 632.52 323.05
                          Z
                          M 643.05 453.11
                          Q 656.51 447.28 667.57 441.73
                          Q 681.15 434.91 688.82 420.71
                          Q 689.82 418.87 690.19 416.94
                          C 690.77 414.00 692.21 411.95 692.18 408.78
                          C 692.14 404.47 693.10 400.35 692.08 396.04
                          C 689.91 386.82 686.78 377.68 681.83 370.53
                          C 679.50 367.15 677.92 363.82 674.77 360.87
                          Q 670.54 356.93 666.09 354.16
                          C 653.33 346.24 637.47 346.79 623.59 352.81
                          Q 612.69 357.54 601.71 362.66
                          Q 601.28 362.86 601.47 363.29
                          L 642.04 452.72
                          A 0.77 0.77 0.0 0 0 643.05 453.11
                          Z" />
                            <path fill="{{ $themeSettings->colors->primary_color }}" d="
                          M 566.45 515.97
                          L 504.33 379.01
                          A 0.43 0.43 0.0 0 1 504.54 378.44
                          L 531.60 366.15
                          A 0.43 0.43 0.0 0 1 532.17 366.36
                          L 594.34 503.32
                          A 0.43 0.43 0.0 0 1 594.13 503.89
                          L 567.02 516.18
                          A 0.43 0.43 0.0 0 1 566.45 515.97
                          Z" />
                            <path fill="{{ $themeSettings->colors->primary_color }}" d="
                          M 494.47 517.60
                          A 0.20 0.20 0.0 0 0 494.22 517.53
                          L 440.20 542.04
                          A 0.70 0.70 0.0 0 0 439.79 542.72
                          Q 440.07 547.46 440.35 551.41
                          Q 440.63 555.35 441.29 559.97
                          Q 442.16 566.13 441.91 572.44
                          A 0.87 0.85 -11.2 0 1 441.40 573.19
                          L 413.85 585.65
                          Q 412.64 586.19 412.76 584.87
                          Q 413.17 580.49 412.49 575.85
                          Q 411.70 570.35 411.62 568.06
                          C 411.50 564.52 411.51 561.36 410.92 557.64
                          Q 410.04 552.10 410.16 546.34
                          C 410.20 544.18 409.42 542.42 409.28 540.40
                          Q 408.99 536.29 408.86 532.05
                          Q 408.73 527.99 408.09 523.87
                          Q 407.37 519.33 407.51 514.28
                          C 407.57 512.19 406.70 510.17 406.56 508.22
                          Q 406.26 504.02 406.31 500.43
                          Q 406.34 497.37 405.55 492.63
                          Q 404.70 487.53 404.93 481.25
                          Q 405.01 479.16 404.28 476.12
                          C 403.07 471.10 404.20 465.77 402.89 460.82
                          Q 402.53 459.49 402.50 458.12
                          C 402.41 453.39 402.45 448.81 401.66 444.09
                          Q 400.92 439.72 400.99 434.56
                          C 401.02 432.20 400.63 429.98 399.90 427.75
                          A 2.12 2.12 0.0 0 1 401.04 425.16
                          L 431.74 411.23
                          A 1.32 1.31 52.6 0 1 433.11 411.42
                          Q 435.17 413.14 436.65 415.23
                          C 439.34 419.07 443.43 421.66 446.43 425.29
                          C 450.14 429.80 454.69 433.59 458.61 437.80
                          Q 467.61 447.51 476.79 456.60
                          Q 480.08 459.85 483.18 463.36
                          C 485.84 466.37 489.02 468.86 491.70 472.02
                          C 495.49 476.51 500.11 480.38 504.31 485.06
                          C 508.25 489.46 512.76 493.44 516.62 497.72
                          C 519.49 500.91 522.77 503.68 525.57 506.89
                          C 529.62 511.54 534.62 515.51 538.65 520.51
                          Q 541.01 523.43 544.05 525.75
                          A 0.54 0.54 0.0 0 1 543.95 526.67
                          L 515.72 539.44
                          Q 515.31 539.63 514.96 539.34
                          Q 510.30 535.35 506.68 530.92
                          C 502.83 526.20 497.84 522.64 494.47 517.60
                          Z
                          M 431.24 451.06
                          Q 430.71 450.50 430.71 451.27
                          C 430.73 455.62 432.13 459.57 432.19 463.88
                          Q 432.25 469.36 433.15 474.41
                          C 434.14 479.93 433.61 485.38 434.64 491.04
                          C 435.65 496.64 435.01 502.77 436.17 508.36
                          Q 436.99 512.29 436.80 516.26
                          A 0.38 0.37 79.0 0 0 437.33 516.62
                          L 475.76 499.20
                          Q 476.51 498.86 475.94 498.25
                          L 431.24 451.06
                          Z" />
                            <path fill="{{ $themeSettings->colors->primary_color }}" d="
                          M 302.26 573.24
                          L 325.69 624.76
                          Q 326.03 625.50 325.28 625.84
                          L 298.35 638.09
                          A 0.61 0.61 0.0 0 1 297.54 637.78
                          L 235.70 501.46
                          Q 235.31 500.60 236.17 500.21
                          Q 261.49 488.71 286.95 477.17
                          Q 298.79 471.80 310.99 470.77
                          Q 322.46 469.80 333.41 474.50
                          Q 336.16 475.68 338.46 477.40
                          C 341.82 479.91 345.28 482.06 347.89 485.53
                          Q 356.58 497.07 359.41 511.30
                          Q 359.97 514.09 359.69 516.71
                          Q 359.38 519.72 359.21 522.62
                          Q 359.04 525.63 358.13 528.58
                          Q 354.43 540.49 345.15 549.27
                          Q 337.26 556.73 325.10 562.26
                          Q 313.80 567.41 302.54 572.49
                          A 0.57 0.56 -25.0 0 0 302.26 573.24
                          Z
                          M 273.90 510.82
                          L 291.78 550.06
                          A 0.33 0.33 0.0 0 0 292.22 550.22
                          L 316.43 539.19
                          A 21.28 19.93 -24.5 0 0 327.53 512.23
                          L 325.91 508.66
                          A 21.28 19.93 -24.5 0 0 298.28 499.35
                          L 274.06 510.38
                          A 0.33 0.33 0.0 0 0 273.90 510.82
                          Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="invoice-table-container mt-4">
                <table class="invoice-table">
                    @if ($trx->trxItems->count() > 0)
                        <thead>
                            <th>{{ translate('Item') }}</th>
                            <th class="text-center">{{ translate('Price') }}</th>
                            <th class="text-center">{{ translate('Quantity') }}</th>
                            <th class="text-end">{{ translate('Total') }}</th>
                        </thead>
                        <tbody>
                            @foreach ($trx->trxItems as $trxItem)
                                @php
                                    $item = $trxItem->item;
                                    $licenseType = $trxItem->isLicenseTypeRegular()
                                        ? translate('Regular License')
                                        : translate('Extended License');
                                @endphp
                                <tr>
                                    <td>
                                        <p class="mb-0">{{ $item->name }}</p>
                                        <p class="mb-0">({{ $licenseType }})</p>
                                    </td>
                                    <td class="text-center">{{ getAmount($trxItem->price) }}</td>
                                    <td class="text-center">{{ $trxItem->quantity }}</td>
                                    <td class="text-end">{{ getAmount($trxItem->total) }}</td>
                                </tr>
                            @endforeach
                    @endif
                    @if ($trx->hasTax())
                        <tr>
                            <td colspan="3">
                                <p class="mb-0">
                                    {{ translate(':tax_name (:tax_rate%)', [
                                        'tax_name' => $trx->tax->name,
                                        'tax_rate' => $trx->tax->rate,
                                    ]) }}
                                </p>
                            </td>
                            <td class="text-end">{{ getAmount($trx->tax->amount) }}</td>
                        </tr>
                    @endif
                    @if ($trx->hasFees())
                        <tr>
                            <td colspan="3">
                                <p class="mb-0">
                                    {{ translate(':payment_gateway Fees (:percentage%)', [
                                        'payment_gateway' => $trx->paymentGateway->name,
                                        'percentage' => $trx->paymentGateway->fees,
                                    ]) }}
                                </p>
                            </td>
                            <td class="text-end">{{ getAmount($trx->fees) }}</td>
                        </tr>
                    @endif
                    <tr class="invoice-table-bg">
                        <td colspan="3">
                            <p class="mb-0">{{ translate('Total') }}</p>
                        </td>
                        <td class="text-end">{{ getAmount($trx->total) }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="my-4">
                <p class="text-muted">
                    {{ translate('* This transaction was processed by :payment_method', [
                        'payment_method' => $trx->paymentGateway->name,
                    ]) }}
                </p>
            </div>
            <div class="mt-auto text-center print-actions">
                <button class="btn btn-primary btn-md fw-medium" onclick="window.print()">
                    <i class="fa-solid fa-print me-2"></i>
                    {{ translate('Print') }}
                </button>
            </div>
        </div>
    </div>
    @include('themes.basic.includes.scripts')
</body>

</html>
