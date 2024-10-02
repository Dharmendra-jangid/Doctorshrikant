<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"], input[type="tel"], input[type="email"], textarea, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-entry {
            margin-bottom: 15px;
            padding: 15px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            width: 100%;
        }

        button:hover {
            background-color: #4cae4c;
        }

        .response {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: red;
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<bod <div class="container">
        <h1>Billing Information</h1>
        @if(session('appointmentDetails'))
            <p>Your appointment is confirmed for {{ session('appointmentDetails.date') }} at {{ session('appointmentDetails.time') }}.</p>
        @else
            <p>No appointment details available.</p>
        @endif

        <form id="billingForm" method="POST">
            @csrf
            <div class="contact-entry">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>

                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="fee">Fee:</label>
                <input type="number" name="fee" id="fee" value="500" required min="0" step="0.01">

                <label for="info">Additional Information (optional):</label>
                <textarea name="info" id="info" rows="3"></textarea>

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">{{ $message }}</div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif

                <button type="button" id="payButton">Pay 500 INR</button>
            </div>
        </form>

        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            document.getElementById('payButton').onclick = function() {
                var options = {
                    "key": "rzp_test_5err0MGiB2NuNq",
                    "amount": "50000", // Amount in paise
                    "currency": "INR",
                    "name": "Programming Solutions",
                    "description": "Billing Payment",
                    "image": "https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png",
                    "handler": function(response) {
                        // Collect form data
                        var formData = {
                            name: document.getElementById('name').value,
                            phone: document.getElementById('phone').value,
                            email: document.getElementById('email').value,
                            fee: document.getElementById('fee').value,
                            info: document.getElementById('info').value,
                            payment_id: response.razorpay_payment_id,
                        };

                        // Send data to your server
                        fetch('/store-billing-info', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(formData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Payment successful and data stored in the database.');
              y>
                 } else {
                                alert('Error storing data: ' + data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    },
                    "theme": {
                        "color": "#F37254"
                    }
                };
                var rzp = new Razorpay(options);
                rzp.open();
            };
        </script>

        <div id="response" class="response"></div>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('payButton').onclick = function() {
            // Check if the appointment is booked
            const appointmentDetails = @json(session('appointmentDetails'));

            if (!appointmentDetails) {
                alert('No appointment is booked. Please book an appointment first.');
                return;
            }

            // Validate the form inputs
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const fee = document.getElementById('fee').value;

            if (!name || !phone || !email || !fee) {
                alert('Please fill in all required fields.');
                return;
            }

            // Proceed to Razorpay payment if validation passes
            var options = {
                "key": "rzp_test_5err0MGiB2NuNq",
                "amount": "50000", // Amount in paise
                "currency": "INR",
                "name": "Programming Solutions",
                "description": "Billing Payment",
                "image": "https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png",
                "handler": function(response) {
                    // Collect form data
                    var formData = {
                        name: name,
                        phone: phone,
                        email: email,
                        fee: fee,
                        info: document.getElementById('info').value,
                        payment_id: response.razorpay_payment_id,
                    };

                    // Send data to your server
                    fetch('/store-billing-info', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Payment successful and data stored in the database.');
                        } else {
                            alert('Error storing data: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
        };


    </script>


</body>
</html>
