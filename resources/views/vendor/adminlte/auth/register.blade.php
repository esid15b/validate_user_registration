<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Toyota Mobility Solutions (BETA)</div>
                    <div class="card-body">
                        <form id="registrationForm">
                            <h3>Personal Information</h3>
                            <p>(All fields are required)</p>
                                <div class="row col-12">
                                    <div class="form-group col-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ex. John" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ex. Doe" required>
                                    </div>
                                </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ex. john.doe@doeindustry.com" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile_number">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Ex. 09088178888" required>
                            </div>
                            <h3>Business Information</h3>
                            <p>(All fields are required)</p>
                                <div class="row col-12">
                                    <div class="form-group col-6">
                                        <label for="business_name">Business Name</label>
                                        <input type="text" class="form-control" id="business_name" name="business_name" placeholder="Ex. Doe Machinary" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="industry_type">Industry Type</label>
                                        <select class="form-control" id="industry_type" name="industry_type" required>
                                            <option value="">Please Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            
                            <div class="form-group">
                                <label for="address_line">Address Line</label>
                                <input type="text" class="form-control" id="address_line" name="address_line" placeholder="Ex. 123 Katapangan St. Corner Kalualhatian" required>
                            </div>

                            <div class="row col-12">
                                <div class="form-group col-4">
                                    <label for="province">Province</label>
                                    <input type="text" class="form-control" id="province" name="province" placeholder="Ex. BULACAN" required>
                                </div>
                                <div class="form-group col-4">
                                    <label for="municipality_city">Municipality/City</label>
                                    <input type="text" class="form-control" id="municipality_city" name="municipality_city" placeholder="Ex. CARMEN" required>
                                </div>
                                <div class="form-group col-4">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Ex. 41968" required>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                                    <label class="form-check-label" for="privacy_policy">I agree with the Privacy Policy</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="terms_conditions" name="terms_conditions" required>
                                    <label class="form-check-label" for="terms_conditions">I agree with the Terms and Conditions</label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Validate mobile number length
            var mobileNumber = document.getElementById('mobile_number').value;
            if (mobileNumber.length !== 11 || isNaN(mobileNumber)) {
                alert('Mobile number must be exactly 11 digits.');
                return;
            }
            
            // If validation passes, display success message and redirect
            alert('Registration successful! Redirecting to the login page.');
            window.location.href = '/login'; // Update this URL as per your routing configuration
        });
    </script>

</body>
</html>
