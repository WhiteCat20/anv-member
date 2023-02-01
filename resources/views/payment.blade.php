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
@endsection
