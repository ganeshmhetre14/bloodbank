<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation Registration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      background-color: #dc3545;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    
    .card-header h4 {
      margin-bottom: 0;
    }
    
    .form-label {
      font-weight: bold;
    }
    
    .form-select {
      border: 1px solid #ced4da;
      border-radius: 5px;
    }
    
    .form-control:focus {
      border-color: #dc3545;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }
    
    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
      border-radius: 5px;
    }
    
    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-white">
          <h4 class="mb-0">Blood Donation Registration</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="bloodGroup" class="form-label">Blood Group</label>
              <select class="form-select" id="bloodGroup" required>
                <option value="" disabled selected>Select your blood group</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phoneNumber" required>
            </div>
            <div class="mb-3">
              <label for="donationDate" class="form-label">Preferred Donation Date</label>
              <input type="date" class="form-control" id="donationDate" required>
            </div>
            <button type="submit" class="btn btn-danger">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
