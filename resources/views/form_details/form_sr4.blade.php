<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormSr4 Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }
        .card {
            width: 48%;
            border: 1px solid #ccc;
            background-color: whitesmoke;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>{{ $form_sr4->name_of_applicant }} details</h2>
            <div class="form-group">
                <label class="form-label">Application Category:</label>
                <span>{{ $form_sr4->type }}</span>
            </div>

            @if ($form_sr4->seed_board_registration_number)
            <div class="form-group">
                <label class="form-label">Seed board registration number:</label>
                <span>{{ $form_sr4->seed_board_registration_number }}</span>
            </div>
            @endif

            <div class="form-group">
                <label class="form-label">Name of applicant:</label>
                <span>{{ $form_sr4->name_of_applicant }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Address:</label>
                <span>{{ $form_sr4->address }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Phone number:</label>
                <span>{{ $form_sr4->phone_number }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Company initials:</label>
                <span>{{ $form_sr4->company_initials }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Premises location:</label>
                <span>{{ $form_sr4->premises_location }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Experience in:</label>
                <span>{{ $form_sr4->expirience_in }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Years of experience:</label>
                <span>{{ $form_sr4->years_of_expirience }} Years</span>
            </div>

            <div class="form-group">
                <label class="form-label">Dealers in:</label>
                <span>{{ $form_sr4->dealers_in == "Other" ? $form_sr4->dealers_in_other : $form_sr4->dealers_in }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Marketing of:</label>
                <span>{{ $form_sr4->marketing_of == "Other" ? $form_sr4->marketing_of_other : $form_sr4->marketing_of }}</span>
            </div>

            
        </div>

        <div class="card">
            <h2>Farm Details</h2>
            <div class="form-group">
                <label class="form-label">Have adequate land:</label>
                <span>{{ $form_sr4->have_adequate_land ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Have adequate storage:</label>
                <span>{{ $form_sr4->have_adequate_storage ? "Yes" : "No" }}</span>
            </div>

            @if ($form_sr4->land_size)
            <div class="form-group">
                <label class="form-label">Land size (In Acres):</label>
                <span>{{ $form_sr4->land_size }}</span>
            </div>
            @endif

            <div class="form-group">
                <label class="form-label">Have adequate equipment:</label>
                <span>{{ $form_sr4->have_adequate_equipment ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Have contractual agreement:</label>
                <span>{{ $form_sr4->have_contractual_agreement ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Have adequate field officers:</label>
                <span>{{ $form_sr4->have_adequate_field_officers ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Have conversant seed matters:</label>
                <span>{{ $form_sr4->have_conversant_seed_matters ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Source of seed:</label>
                <span>{{ $form_sr4->souce_of_seed }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Have adequate land for production:</label>
                <span>{{ $form_sr4->have_adequate_land_for_production ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Have internal quality program:</label>
                <span>{{ $form_sr4->have_internal_quality_program ? "Yes" : "No" }}</span>
            </div>

            <div class="form-group">
                <label class="form-label">Receipt:</label>
                <a href="{{ asset('uploads/files/download.png') }}">View Receipt</a>
            </div>

            <div class="form-group">
                <label class="form-label">Accepted declaration:</label>
                <span>{{ $form_sr4->accept_declaration ? "Yes" : "No" }}</span>
            </div>

            @if ($form_sr4->valid_from)
            <div class="form-group">
                <label class="form-label">Valid from:</label>
                <span>{{ $form_sr4->valid_from }}</span>
            </div>
            @endif

            @if ($form_sr4->valid_until)
            <div class="form-group">
                <label class="form-label">Valid until:</label>
                <span>{{ $form_sr4->valid_until }}</span>
            </div>
            @endif

            <div class="form-group">
                <label class="form-label">Status comment:</label>
                <span>{{ $form_sr4->status_comment ? $form_sr4->status_comment : "No comment" }}</span>
            </div>
        </div>
    </div>
</body>
</html>
