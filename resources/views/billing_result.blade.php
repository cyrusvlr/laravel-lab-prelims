<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meralco Billing Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .text-purple {
            color: #6f42c1;
        }

        .btn-purple {
            background-color: #6f42c1;
            color: white;
        }

        .bg-purple {
            background-color: #6f42c1;
        }

        .bg-light-purple {
            background-color: #f8f9fa;
        }

        .card-header {
            background-color: #6f42c1;
            color: white;
        }

        .card-body {
            background-color: #f8f9fa;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .strong-text {
            font-weight: bold;
        }

        .result-item {
            margin-bottom: 0.75rem;
        }

        .card {
            border-radius: 10px;
        }

        .btn-block {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-purple text-white text-center">
                <h2>Meralco Billing Result</h2>
            </div>
            <div class="card-body">
                <!-- Customer Information -->
                <h5 class="text-purple">Customer Information</h5>
                <div class="result-item">
                    <p><span class="strong-text">Name:</span> {{ $bill->Firstname }} {{ $bill->Middle_Initial }}. {{ $bill->Lastname }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">Email:</span> {{ $bill->Email }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">Contact Number:</span> {{ $bill->Contact_No }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">Address:</span> {{ $bill->Street }}, {{ $bill->City }}, {{ $bill->Province }},
                        {{ $bill->Country }}, {{ $bill->ZIP }}</p>
                </div>

                <!-- Billing Details -->
                <h5 class="text-purple mt-4">Billing Details</h5>
                <div class="result-item">
                    <p><span class="strong-text">Subscription Type:</span> {{ $bill->Sub_Type }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">No. of Kilowatts:</span> {{ $bill->No_of_watts }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">Energy Charge:</span> Php {{ number_format($bill->Energy_charge, 2) }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">Disconnection Charge:</span> Php {{ number_format($bill->Disconnection, 2) }}</p>
                </div>
                <div class="result-item">
                    <p><span class="strong-text">Late Payment Charge:</span> Php {{ number_format($bill->Late_Payment, 2) }}</p>
                </div>
                <div class="result-item mb-4">
                    <p><span class="strong-text">Total Bill:</span> Php {{ number_format($bill->Total_Bill, 2) }}</p>
                </div>

                <!-- Go Back Button -->
                <a href="{{ url('/') }}" class="btn btn-purple btn-block mt-3">Go Back</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
