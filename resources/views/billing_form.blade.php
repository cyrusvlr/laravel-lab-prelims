<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meralco Billing Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .text-purple {
      color: #6f42c1;
    }

    .border-purple {
      border-color: #6f42c1;
    }

    .btn-purple {
      background-color: #6f42c1;
      color: white;
    }

    .bg-light-purple {
      background-color: #f8f9fa;
    }

    .text-dark-purple {
      color: #4b0082;
    }

    .border-dark-purple {
      border-color: #4b0082;
    }

    .bg-purple {
      background-color: #6f42c1;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-purple text-white text-center">
        <h2>Meralco Billing Form</h2>
      </div>
      <div class="card-body">
        @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

        <form action="{{ route('billing.store') }}" method="POST">
          @csrf
          <!-- Customer Information -->
          <div class="form-row">
            <div class="col">
              <label class="text-purple">First Name</label>
              <input type="text" name="Firstname" class="form-control border-purple" required>
            </div>
            <div class="col">
              <label class="text-purple">Last Name</label>
              <input type="text" name="Lastname" class="form-control border-purple" required>
            </div>
            <div class="col">
              <label class="text-purple">Middle Initial</label>
              <input type="text" name="Middle_Initial" class="form-control border-purple" maxlength="1" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <label class="text-purple">Email</label>
            <input type="email" name="Email" class="form-control border-purple" required>
          </div>

          <div class="form-group">
            <label class="text-purple">Contact Number</label>
            <input type="text" name="Contact_No" class="form-control border-purple" required>
          </div>

          <div class="form-group">
            <label class="text-purple">Address</label>
            <input type="text" name="Street" class="form-control border-purple" required>
          </div>

          <div class="form-row">
            <div class="col">
              <label class="text-purple">City</label>
              <input type="text" name="City" class="form-control border-purple" required>
            </div>
            <div class="col">
              <label class="text-purple">Province</label>
              <input type="text" name="Province" class="form-control border-purple" required>
            </div>
            <div class="col">
              <label class="text-purple">Country</label>
              <input type="text" name="Country" class="form-control border-purple" required>
            </div>
            <div class="col">
              <label class="text-purple">ZIP</label>
              <input type="text" name="ZIP" class="form-control border-purple" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <label class="text-purple">No. of Kilowatts</label>
            <input type="number" name="No_of_watts" class="form-control border-purple" required>
          </div>

          <!-- Subscription Type -->
          <div class="form-group">
            <label class="text-purple">Subscription Type</label>
            <select name="Sub_Type" class="form-control border-purple" required>
              <option value="Residential">Residential (Php 2.75 per KW)</option>
              <option value="Industrial">Industrial (Php 3.75 per KW)</option>
              <option value="Commercial">Commercial (Php 4.25 per KW)</option>
            </select>
          </div>

          <!-- Other Charges -->
          <div class="form-group">
            <label class="text-purple">Other Charges</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Disconnection" id="disconnection">
              <label class="form-check-label text-purple" for="disconnection">Disconnection (Php 500.00)</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Late_Payment" id="latePayment">
              <label class="form-check-label text-purple" for="latePayment">Late Payment (30% of the Energy
                Charge)</label>
            </div>
          </div>

          <!-- Compute Button -->
          <button type="submit" class="btn btn-purple btn-block">Compute</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>