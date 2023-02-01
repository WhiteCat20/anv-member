@extends('layout.main')
@section('content')
    <h3 class="text-center mt-3 abstract-submit-header">INFORMATION</h3>
    <div>
        <table class="table table-bordered" id="payment-table">
            <thead style="background-color: #ffcc6c">
                <tr>
                    <th colspan="7" rowspan="2">Categories</th>
                    <th colspan="4">Registration Fee</th>
                </tr>
                <tr>
                    <th colspan="4">Late</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" rowspan="2">International Participant</td>
                    <td colspan="3">Student</td>
                    <td colspan="4">$100.00 (USD)</td>
                </tr>
                <tr>
                    <td colspan="3">Regular</td>
                    <td colspan="4">$175.00 (USD)</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2">Local Participant (affiliated with Indonesian Institution)</td>
                    <td colspan="3">Student</td>
                    <td colspan="4">IDR 1,000,000</td>
                </tr>
                <tr>
                    <td colspan="3">Regular</td>
                    <td colspan="4">IDR 1,750,000</td>
                </tr>
                <tr style="background-color: #ffcc6c                ">
                    <td colspan="7">Additional Paper</td>
                    <td colspan="4">$60 or IDR 600,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container" style="height: 1.5px; background-color: rgb(182, 179, 179)"></div>
    <section class="cancelation container">
        <h3 class="text-center mt-3">CANCELATION AND REFUND</h3>
        <p>Conference registration cancellation before 18 October, we will refund 50% of the total of your registration
            fees. For additional paper we will refund 100% your registration fees. The refund will be made after the
            conference.</p>
    </section>
    <div class="container" style="height: 1.5px; background-color: rgb(182, 179, 179)"></div>
    <section>
        <h3 class="text-center mt-3">PAYMENT</h3>
        <div style="background-color: #403c3c; margin: 0;">
            <p style="color: #fff;  padding: 10px 30px">Payment Summary</p>
        </div>
        <table id="payment-summary" class="table table-bordered">
            <tbody>
                <tr>
                    <th colspan="2">Categories</th>
                    <td colspan="5">Regular Student</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th colspan="2">Additional Paper</th>
                    <td colspan="5">1 ($60 (USD) Each)</td>
                </tr>
                <tr>
                    <th colspan="2">Amount Must Be Paid</th>
                    <td colspan="5">$160.00</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <button style="background-color: #98b43c">PAY</button>
        </div>
    </section>
@endsection
