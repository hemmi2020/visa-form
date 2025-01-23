    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inquiry Form</title>
    <style>
        /* Optional styling for form layout
        .person-section {
            margin-bottom: 20px;
        }
        .button-container {
            margin-top: 10px;
        }
        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            display: none; /* Hide by default
        } */
            



        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: white;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .person-section {
            background: white;
            padding: 20px;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* max-width: 1111px; */
            /* width: 90%; */
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* 4 columns */
            gap: 15px;
            /* Space between inputs */
        }

        .form-grid div {
            display: flex;
            flex-direction: column;
        }

        .form-grid label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-grid input,
        .form-grid select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100;
        }

        .scanned-documents {
            margin-top: 20px;
            font-size: 14px;
            color: #333;
            word-wrap: break-word;
        }

        .scanned-documents h4 {
            margin-bottom: 10px;
            font-size: 16px;
            color: #0056b3;
        }

        .scanned-documents ul {
            margin: 0;
            padding-left: 20px;
        }

        .note {
            font-size: 12px;
            color: #555;
            margin-top: 10px;
        }

        .button-container {
            /* text-align: center; */
            margin-top: 20px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .delete-btn:hover {
            background-color: #b52b35;
        }

        .submit-btn {
            background-color: #28a745;
        }

        .submit-btn:hover {
            background-color: #1e7e34;
        }

        #add-more-person{
            border-radius: 20px;
        }

        #submit-btn {
            border-radius: 20px;
        }

                 /* Responsive Design */
    @media (max-width: 1024px) {
        .form-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
            
        }

        button {
            width: 100%;
            margin-top: 10px;
        }
    }

    @media (max-width: 480px) {
        .person-section {
            padding: 15px;

        }

        .form-grid {
            gap: 10px;
            grid-template-columns: 1fr;
        }

        h2 {
            font-size: 18px;
        }

        .scanned-documents h4 {
            font-size: 14px;
        }

        .note {
            font-size: 10px;
        }

        button {
            font-size: 0.9rem;
            width: 100%;
        }
    }

    </style>
</head>
<body>
    <h2>Dubai Visa Application Form</h2>
    <form action="sendmail.php" method="POST">
        <div id="forms-container">
            <!-- Initial person section -->
            <div class="person-section" id="person-1">
            <h3>Person 1</h3>
                <div class="form-grid">    
                    <div>
                        <label>First Name:</label>
                        <input type="text" name="first_name[1]" placeholder="First Name" required>
                    </div>
                    <div>
                        <label>Last Name:</label> 
                        <input type="text" name="last_name[1]" placeholder="Last Name" required>
                    </div>
                    <div>
                        <label>Nationality:</label>
                        <input type="text" name="nationality[1]" placeholder="Nationality" required>
                    </div>
                    <div>
                        <label>Entry Type:</label>
                        <select name="entry_type[1]" id="">
                            <option value="">14 Days Single Entry Application + Insurance</option>
                            <option value="">7 Days Single Entry Application + Insurance</option>
                        </select>
                    </div>
                    <div>
                        <label>State:</label>
                        <input type="text" name="state[1]" placeholder="State" required>
                    </div>
                    <div>
                        <label>City:</label>
                        <input type="text" name="city[1]" placeholder="City" required>
                    </div>
                    <div>
                        <label>Country Code:</label>
                        <select name="country_code[1]">
                            <option value="+1">United States (+1)</option>
                            <option value="+44">United Kingdom (+44)</option>
                            <option value="+91">India (+91)</option>
                            <option value="+971">United Arab Emirates (+971)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+81">Japan (+81)</option>
                            <option value="+86">China (+86)</option>
                            <option value="+49">Germany (+49)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+39">Italy (+39)</option>
                            <option value="+55">Brazil (+55)</option>
                            <option value="+7">Russia (+7)</option>
                            <option value="+27">South Africa (+27)</option>
                            <option value="+64">New Zealand (+64)</option>
                            <option value="+34">Spain (+34)</option>
                            <option value="+62">Indonesia (+62)</option>
                            <option value="+92">Pakistan (+92)</option>
                            <option value="+20">Egypt (+20)</option>
                            <option value="+66">Thailand (+66)</option>
                            <option value="+90">Turkey (+90)</option>
                            <option value="+82">South Korea (+82)</option>
                            <option value="+31">Netherlands (+31)</option>
                            <option value="+41">Switzerland (+41)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+358">Finland (+358)</option>
                            <option value="+45">Denmark (+45)</option>
                            <option value="+46">Sweden (+46)</option>
                            <option value="+47">Norway (+47)</option>
                            <option value="+380">Ukraine (+380)</option>
                            <option value="+234">Nigeria (+234)</option>
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+65">Singapore (+65)</option>
                            <option value="+60">Malaysia (+60)</option>
                            <option value="+84">Vietnam (+84)</option>
                            <option value="+375">Belarus (+375)</option>
                            <option value="+48">Poland (+48)</option>
                            <option value="+43">Austria (+43)</option>
                            <option value="+421">Slovakia (+421)</option>
                            <option value="+420">Czech Republic (+420)</option>
                            <option value="+972">Israel (+972)</option>
                            <option value="+213">Algeria (+213)</option>
                            <option value="+254">Kenya (+254)</option>
                            <option value="+212">Morocco (+212)</option>
                            <option value="+977">Nepal (+977)</option>
                            <option value="+63">Philippines (+63)</option>
                            <option value="+593">Ecuador (+593)</option>
                            <option value="+505">Nicaragua (+505)</option>
                            <option value="+505">Honduras (+504)</option>
                            <option value="+44-1481">Guernsey (+44-1481)</option>
                            <option value="+44-1624">Isle of Man (+44-1624)</option>
                            <option value="+44-1534">Jersey (+44-1534)</option>
                        </select>
                    </div>
                    <div>
                        <label> Contact No:</label>
                        <input type="tel" name="contact_no[1]" placeholder="Contact Number" required>
                    </div>
                    <div>
                        <label>WhatsApp Country Code:</label>
                        <select name="whatsapp_country_code[1]">
                            <option value="+1">United States (+1)</option>
                            <option value="+44">United Kingdom (+44)</option>
                            <option value="+91">India (+91)</option>        
                            <option value="+971">United Arab Emirates (+971)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+81">Japan (+81)</option>
                            <option value="+86">China (+86)</option>
                            <option value="+49">Germany (+49)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+39">Italy (+39)</option>
                            <option value="+55">Brazil (+55)</option>
                            <option value="+7">Russia (+7)</option>
                            <option value="+27">South Africa (+27)</option>
                            <option value="+64">New Zealand (+64)</option>
                            <option value="+34">Spain (+34)</option>
                            <option value="+62">Indonesia (+62)</option>
                            <option value="+92">Pakistan (+92)</option>
                            <option value="+20">Egypt (+20)</option>
                            <option value="+66">Thailand (+66)</option>
                            <option value="+90">Turkey (+90)</option>
                            <option value="+82">South Korea (+82)</option>
                            <option value="+31">Netherlands (+31)</option>
                            <option value="+41">Switzerland (+41)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+358">Finland (+358)</option>
                            <option value="+45">Denmark (+45)</option>
                            <option value="+46">Sweden (+46)</option>
                            <option value="+47">Norway (+47)</option>
                            <option value="+380">Ukraine (+380)</option>
                            <option value="+234">Nigeria (+234)</option>
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+65">Singapore (+65)</option>
                            <option value="+60">Malaysia (+60)</option>
                            <option value="+84">Vietnam (+84)</option>
                            <option value="+375">Belarus (+375)</option>
                            <option value="+48">Poland (+48)</option>
                            <option value="+43">Austria (+43)</option>
                            <option value="+421">Slovakia (+421)</option>
                            <option value="+420">Czech Republic (+420)</option>
                            <option value="+972">Israel (+972)</option>
                            <option value="+213">Algeria (+213)</option>
                            <option value="+254">Kenya (+254)</option>
                            <option value="+212">Morocco (+212)</option>
                            <option value="+977">Nepal (+977)</option>
                            <option value="+63">Philippines (+63)</option>
                            <option value="+593">Ecuador (+593)</option>
                            <option value="+505">Nicaragua (+505)</option>
                            <option value="+505">Honduras (+504)</option>
                            <option value="+44-1481">Guernsey (+44-1481)</option>
                            <option value="+44-1624">Isle of Man (+44-1624)</option>
                            <option value="+44-1534">Jersey (+44-1534)</option>
                        </select>
                    </div>
                    <div>
                        <label>WhatsApp Contact No:</label>
                        <input type="text" name="whatsapp_contact_number[1]" placeholder="WhatsApp Contact Number" required>
                    </div>  
                    <div>
                        <label>Date of Birth:</label>
                        <input type="date" name="dob[1]" placeholder="Date of Birth" required>
                    </div>
                    <div>
                        <label>Email Address:</label>
                        <input type="email" name="email[1]" placeholder="Email Address" required>
                    </div>
                    <div>
                        <label>Passport Number:</label>
                        <input type="text" name="passport_number[1]" placeholder="Passport Number" required>
                    </div>
                    <div>
                        <label>Passport Expiry Date:</label>
                        <input type="date" name="passport_expiry_date[1]" placeholder="Passport Expiry Date" required>
                    </div>  
                    <div>
                        <label>Arrival Date:</label>
                        <input type="date" name="arrival_date[1]" placeholder="Arrival Date" required>
                    </div>
                </div>
            </div>
            <!-- Scanned Document Section -->
        </div>
        <div class="scanned-documents"> 
            <h4>Here is the list of scanned documents that you need to send along with your application:</h4>
            <ul>
                <li>Front and last pages of passport.</li>
                <li>Passport size photograph.</li>
                <li>If you have visited Dubai/UAE before, you would share the visa page with the exit stamp.</li>
                <li>Confirm return flight tickets.</li>
                <li>Front and back of national id card.</li>
            </ul>
        </div>
        <div class="note">
            <p>
                Note: You can provide or upload the required documents via WhatsApp at <strong>+971 52 648 9800</strong>
                or Email them at <strong>info@peacelandtravel.com</strong>
            </p>

    
        </div>
        <div class="button-container">
            <button type="button" id="add-more-person">Add More Person</button>
            <button class="submit-btn" id="submit-btn">Submit<span id="spinner" style="display: none;">⏳</span></button>
        </div>
    </form>

    <script>

    


        let personCount = 1;

        document.getElementById('add-more-person').addEventListener('click', ()=> {
            personCount++;
            // Get the container where forms will be appended
            const formsContainer = document.getElementById('forms-container');

            // Get the current count of forms
            // let personCount = formsContainer.querySelectorAll('.person-section').length;

            // Clone the first person section
            // Create a new form container
            const newForm = document.createElement("div");
            newForm.classList.add("form-container");
            newForm.id = `person-${personCount}`;
            newForm.innerHTML = `<div class="person-section" id="person-1">
            <h3>Person ${personCount}</h3>
                <div class="form-grid">    
                    <div>
                        <label>First Name:</label>
                        <input type="text" name="first_name[${personCount}]" placeholder="First Name" required>
                    </div>
                    <div>
                        <label>Last Name:</label> 
                        <input type="text" name="last_name[${personCount}]" placeholder="Last Name" required>
                    </div>
                    <div>
                        <label>Nationality:</label>
                        <input type="text" name="nationality[${personCount}]" placeholder="Nationality" required>
                    </div>
                    <div>
                        <label>Entry Type:</label>
                        <select name="entry_type[${personCount}]" id="">
                            <option value="">14 Days Single Entry Application + Insurance</option>
                            <option value="">7 Days Single Entry Application + Insurance</option>
                        </select>
                    </div>
                    <div>
                        <label>State:</label>
                        <input type="text" name="state[${personCount}]" placeholder="State" required>
                    </div>
                    <div>
                        <label>City:</label>
                        <input type="text" name="city[${personCount}]" placeholder="City" required>
                    </div>
                    <div>
                        <label>Country Code:</label>
                        <select name="country_code[${personCount}]">
                            <option value="+1">United States (+1)</option>
                            <option value="+44">United Kingdom (+44)</option>
                            <option value="+91">India (+91)</option>
                            <option value="+971">United Arab Emirates (+971)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+81">Japan (+81)</option>
                            <option value="+86">China (+86)</option>
                            <option value="+49">Germany (+49)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+39">Italy (+39)</option>
                            <option value="+55">Brazil (+55)</option>
                            <option value="+7">Russia (+7)</option>
                            <option value="+27">South Africa (+27)</option>
                            <option value="+64">New Zealand (+64)</option>
                            <option value="+34">Spain (+34)</option>
                            <option value="+62">Indonesia (+62)</option>
                            <option value="+92">Pakistan (+92)</option>
                            <option value="+20">Egypt (+20)</option>
                            <option value="+66">Thailand (+66)</option>
                            <option value="+90">Turkey (+90)</option>
                            <option value="+82">South Korea (+82)</option>
                            <option value="+31">Netherlands (+31)</option>
                            <option value="+41">Switzerland (+41)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+358">Finland (+358)</option>
                            <option value="+45">Denmark (+45)</option>
                            <option value="+46">Sweden (+46)</option>
                            <option value="+47">Norway (+47)</option>
                            <option value="+380">Ukraine (+380)</option>
                            <option value="+234">Nigeria (+234)</option>
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+65">Singapore (+65)</option>
                            <option value="+60">Malaysia (+60)</option>
                            <option value="+84">Vietnam (+84)</option>
                            <option value="+375">Belarus (+375)</option>
                            <option value="+48">Poland (+48)</option>
                            <option value="+43">Austria (+43)</option>
                            <option value="+421">Slovakia (+421)</option>
                            <option value="+420">Czech Republic (+420)</option>
                            <option value="+972">Israel (+972)</option>
                            <option value="+213">Algeria (+213)</option>
                            <option value="+254">Kenya (+254)</option>
                            <option value="+212">Morocco (+212)</option>
                            <option value="+977">Nepal (+977)</option>
                            <option value="+63">Philippines (+63)</option>
                            <option value="+593">Ecuador (+593)</option>
                            <option value="+505">Nicaragua (+505)</option>
                            <option value="+505">Honduras (+504)</option>
                            <option value="+44-1481">Guernsey (+44-1481)</option>
                            <option value="+44-1624">Isle of Man (+44-1624)</option>
                            <option value="+44-1534">Jersey (+44-1534)</option>
                        </select>
                    </div>
                    <div>
                        <label> Contact No:</label>
                        <input type="tel" name="contact_no[${personCount}]" placeholder="Contact Number" required>
                    </div>
                    <div>
                        <label>WhatsApp Country Code:</label>
                        <select name="whatsapp_country_code[${personCount}]">
                            <option value="+1">United States (+1)</option>
                            <option value="+44">United Kingdom (+44)</option>
                            <option value="+91">India (+91)</option>        
                            <option value="+971">United Arab Emirates (+971)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+81">Japan (+81)</option>
                            <option value="+86">China (+86)</option>
                            <option value="+49">Germany (+49)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+39">Italy (+39)</option>
                            <option value="+55">Brazil (+55)</option>
                            <option value="+7">Russia (+7)</option>
                            <option value="+27">South Africa (+27)</option>
                            <option value="+64">New Zealand (+64)</option>
                            <option value="+34">Spain (+34)</option>
                            <option value="+62">Indonesia (+62)</option>
                            <option value="+92">Pakistan (+92)</option>
                            <option value="+20">Egypt (+20)</option>
                            <option value="+66">Thailand (+66)</option>
                            <option value="+90">Turkey (+90)</option>
                            <option value="+82">South Korea (+82)</option>
                            <option value="+31">Netherlands (+31)</option>
                            <option value="+41">Switzerland (+41)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+358">Finland (+358)</option>
                            <option value="+45">Denmark (+45)</option>
                            <option value="+46">Sweden (+46)</option>
                            <option value="+47">Norway (+47)</option>
                            <option value="+380">Ukraine (+380)</option>
                            <option value="+234">Nigeria (+234)</option>
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+65">Singapore (+65)</option>
                            <option value="+60">Malaysia (+60)</option>
                            <option value="+84">Vietnam (+84)</option>
                            <option value="+375">Belarus (+375)</option>
                            <option value="+48">Poland (+48)</option>
                            <option value="+43">Austria (+43)</option>
                            <option value="+421">Slovakia (+421)</option>
                            <option value="+420">Czech Republic (+420)</option>
                            <option value="+972">Israel (+972)</option>
                            <option value="+213">Algeria (+213)</option>
                            <option value="+254">Kenya (+254)</option>
                            <option value="+212">Morocco (+212)</option>
                            <option value="+977">Nepal (+977)</option>
                            <option value="+63">Philippines (+63)</option>
                            <option value="+593">Ecuador (+593)</option>
                            <option value="+505">Nicaragua (+505)</option>
                            <option value="+505">Honduras (+504)</option>
                            <option value="+44-1481">Guernsey (+44-1481)</option>
                            <option value="+44-1624">Isle of Man (+44-1624)</option>
                            <option value="+44-1534">Jersey (+44-1534)</option>
                        </select>
                    </div>
                    <div>
                        <label>WhatsApp Contact No:</label>
                        <input type="text" name="whatsapp_contact_number[${personCount}]" placeholder="WhatsApp Contact Number" required>
                    </div>  
                    <div>
                        <label>Date of Birth:</label>
                        <input type="date" name="dob[${personCount}]" placeholder="Date of Birth" required>
                    </div>
                    <div>
                        <label>Email Address:</label>
                        <input type="email" name="email[${personCount}]" placeholder="Email Address" required>
                    </div>
                    <div>
                        <label>Passport Number:</label>
                        <input type="text" name="passport_number[${personCount}]" placeholder="Passport Number" required>
                    </div>
                    <div>
                        <label>Passport Expiry Date:</label>
                        <input type="date" name="passport_expiry_date[${personCount}]" placeholder="Passport Expiry Date" required>
                    </div>  
                    <div>
                        <label>Arrival Date:</label>
                        <input type="date" name="arrival_date[${personCount}]" placeholder="Arrival Date" required>
                    </div>
                    <div class="button-container">
                        <button class="delete-btn" onclick="deleteForm(${personCount})">Delete</button>
                    </div>
                </div>  
                `;
        
                // Append the new form to the container
                formsContainer.appendChild(newForm);

            // Show the "Delete" button for the new section
            // clone.querySelector('.delete-btn').style.display = 'inline-block';

        });

        function deleteForm(id) {
            const formToDelete = document.getElementById(`person-${id}`);
            formToDelete.remove();
        }

        // Function to set minimum date for date inputs
function setMinDates() {
    const today = new Date();
    const todayString = today.toISOString().split('T')[0];
    
    // Get all date inputs within forms container
    const formsContainer = document.getElementById('forms-container');
    
    // Function to update date restrictions for a specific form
    function updateDateRestrictions(personNumber) {
        // Get date inputs for this person
        const arrivalDateInput = document.querySelector(`input[name="arrival_date[${personNumber}]"]`);
        const passportExpiryInput = document.querySelector(`input[name="passport_expiry_date[${personNumber}]"]`);
        const dobInput = document.querySelector(`input[name="dob[${personNumber}]"]`);
        
        if (arrivalDateInput) {
            // Set minimum date for arrival date to today
            arrivalDateInput.min = todayString;
            arrivalDateInput.addEventListener('input', function() {
                validateFutureDate(this, 'Arrival date must be a future date');
            });
        }
        
        if (passportExpiryInput) {
            // Set minimum date for passport expiry to today
            passportExpiryInput.min = todayString;
            passportExpiryInput.addEventListener('input', function() {
                validateFutureDate(this, 'Passport expiry date must be a future date');
            });
        }
        
        if (dobInput) {
            // Set maximum date for date of birth to today
            dobInput.max = todayString;
            dobInput.addEventListener('input', function() {
                validatePastDate(this, 'Date of birth must be in the past');
            });
        }
    }
    
    // Function to validate future dates
    function validateFutureDate(input, errorMessage) {
        const selectedDate = new Date(input.value);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (selectedDate < today) {
            input.setCustomValidity(errorMessage);
            input.reportValidity();
        } else {
            input.setCustomValidity('');
        }
    }
    
    // Function to validate past dates
    function validatePastDate(input, errorMessage) {
        const selectedDate = new Date(input.value);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (selectedDate > today) {
            input.setCustomValidity(errorMessage);
            input.reportValidity();
        } else {
            input.setCustomValidity('');
        }
    }
    
    // Set initial date restrictions for the first person
    updateDateRestrictions(1);
    
    // Modify your existing 'add-more-person' click event listener
    document.getElementById('add-more-person').addEventListener('click', () => {
        // Your existing code here
        personCount++;
        // ... (rest of your existing code for adding new person)
        
        // Add date restrictions to the new form
        updateDateRestrictions(personCount);
    });
}

// Call setMinDates when the document loads
document.addEventListener('DOMContentLoaded', setMinDates);

        // Submit button handler


        document.getElementById("submit-btn").addEventListener("click", (event) => {
        event.preventDefault();

        // Show spinner and hide button text
    const submitButton = document.getElementById("submit-btn");
    const spinner = document.getElementById("spinner");
    submitButton.disabled = true;  // Disable the button to prevent multiple submissions
    spinner.style.display = "inline";  // Show spinner


    // Get all person sections (forms)
    const allForms = document.querySelectorAll(".person-section");
    let isValid = true; // To track if all fields are valid

    allForms.forEach((form) => {
        // Get all required inputs and selects inside the form
        const inputs = form.querySelectorAll("input[required], select[required]");
        
        // Check if any required field is empty
        inputs.forEach((input) => {
            if (!input.value.trim()) {
                input.style.border = "2px solid red"; // Highlight invalid field
                isValid = false; // Set isValid to false if any field is invalid
            } else {
                input.style.border = "1px solid #ccc"; // Reset border if valid
            }
        });
    });

    if (!isValid) {
        // alert("Please fill in all the required fields before submitting.");
        submitButton.disabled = false;
        spinner.style.display = "none";
        return; // Stop the form submission if validation fails
    }

    // Collect all form data
    const formData = new FormData(document.querySelector('form'));

    // Send the form data to the PHP script
    fetch('sendmail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        console.log('Success:', result);
        // alert('Form submitted successfully');
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error submitting the form');
        submitButton.disabled = false;
        spinner.style.display = "none";
    });
});



    </script>
</body>
</html>
