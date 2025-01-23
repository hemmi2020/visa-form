$(document).ready(function() {
    $('#submit-btn').on('click', function(event) {
        event.preventDefault();  // Prevent form submission

        // Creating the JSON object from the form data
        var formData = {
            person_1: {
                first_name: $("input[name='first_name']").val(),
                last_name: $("input[name='last_name']").val(),
                nationality: $("input[name='nationality']").val(),
                entry_type: $("select[name='entry_type']").val(),
                state: $("input[name='state']").val(),
                city: $("input[name='city']").val(),
                country_code: $("select[name='country_code']").val(),
                contact_no: $("input[name='contact_no']").val(),
                whatsapp_country_code: $("select[name='whatsapp_country_code']").val(),
                whatsapp_contact_number: $("input[name='whatsapp_contact_number']").val(),
                dob: $("input[name='dob']").val(),
                email: $("input[name='email']").val(),
                passport_number: $("input[name='passport_number']").val(),
                passport_expiry_date: $("input[name='passport_expiry_date']").val(),
                arrival_date: $("input[name='arrival_date']").val(),
                scanned_documents: [
                    "Front and last pages of passport",
                    "Passport size photograph",
                    "Visa page with exit stamp",
                    "Confirm return flight tickets",
                    "Front and back of national id card"
                ]
            }
        };

        // Send the JSON data to your PHP script
        $.ajax({
            url: '/visa-form/sendmail.php',  // Your PHP handler path
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            success: function(response) {
                console.log('Response:', response);
            },
            error: function(xhr, status, error) {
                console.log('Error:', error);
            }
        });
    });
});
