<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $SetSliderAmount = $_POST['SetSliderAmount'] ?? '';
    $SetSliderPeriod = $_POST['SetSliderPeriod'] ?? '';
    $revenue = $_POST['revenue'] ?? '';
    
    $Personal_loan = $_POST['Personal_loan'] ?? '';
    $Home_loan = $_POST['Home_loan'] ?? '';
    $Business_loan = $_POST['Business_loan'] ?? '';
    $Car_loan = $_POST['Car_loan'] ?? '';

    $loandetails01 = $_POST['loandetails01'] ?? '';
    $loandetails02 = $_POST['loandetails02'] ?? '';
    $loandetails03 = $_POST['loandetails03'] ?? '';

    $fName = $_POST['fName'] ?? '';
    $lName = $_POST['lName'] ?? '';
    $dob_day = $_POST['dob-d'] ?? '';
    $dob_month = $_POST['dob-m'] ?? '';
    $dob_year = $_POST['dob-y'] ?? '';
    $dob = "$dob_year-$dob_month-$dob_day";
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['pAddress'] ?? '';
    $state = $_POST['stateName'] ?? '';
    $city = $_POST['cityName'] ?? '';
    $zipCode = $_POST['zipCode'] ?? '';

    // Construct the email
    $to = "o.masaraure@gmail.com";
    $subject = "Loan Application Form Submission";
    $message = "How Much Do you Need?: $SetSliderAmount\nHow long have you been in business?: $SetSliderPeriod\nWhat is your monthly revenue?: $revenue\nPersonal_loan: $Personal_loan\nHome_loan: $Home_loan\nBusiness_loan: $Business_loan\nCar_loan: $Car_loan\nAre you NZ citizen or permanent resident?: $loandetails01\nAre you NZ citizen or permanent resident?: $loandetails02\nWhat Industry Are you in?: $loandetails03\nFirst Name: $fName\nLast Name: $lName\nDate of Birth: $dob\nemail: $email\nphone: $phone\nAddress: $address\nState: $state\nCity: $city\nZip Code: $zipCode";

    $headers = "From: no-reply@yourdomain.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully.";
    } else {
        echo "There was an error submitting the form.";
    }
} else {
    echo "Invalid request method.";
}
?>
