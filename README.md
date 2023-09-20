# Task-1
**Car Accessories Installation Request Form - Documentation**

**Introduction:**
This documentation provides a comprehensive guide on how to set up and run the web-based Car Accessories Installation Request Form. The form is designed to capture customer information and accessory preferences for Audi A3 car owners, store the data in a database, and send email notifications to the company.

**Table of Contents:**
1. **Form Creation**
2. **Database Integration**
3. **Processing the Form Submission**
4. **Email Notification**
5. **User Experience**
6. **Submission**
7. **Conclusion**

**1. Form Creation:**
   - The HTML form consists of the following fields:
     - Customer Name
     - Phone Number
     - Email
     - Address
     - Car Model Name
     - Checkbox options for 6 Accessories
     - Radio buttons for Car Variant (Petrol or Diesel)
   - Appropriate HTML tags and input elements are used for each field.
   - Form validation is implemented to ensure required fields are filled, and email/phone number formats are valid.

**2. Database Integration:**
   - A MySQL database is used to store submitted data.
   - A table named `car_accessory_requests` is created to store customer information, accessory selections, and car variant.
   - Database connection is established within the PHP script.

**3. Processing the Form Submission:**
   - A PHP script, `process_form.php`, handles form submissions.
   - Data submitted through the form is retrieved and sanitized to prevent SQL injection.
   - Customer information, selected accessories, and car variant are inserted into the database.

**4. Email Notification:**
   - Email settings within `process_form.php` are configured to send notifications to a specified email address when a new request is submitted.
   - The email contains relevant customer details, accessory choices, and car variant.

**5. User Experience:**
   - The form and user interface are designed to be user-friendly and responsive.
   - Proper input field labeling and placeholders are used for clarity.
   - CSS is applied for styling to enhance the user experience.

**6. Submission:**
   - The web-based form can be accessed using a web server that supports PHP and MySQL.
   - To test the form, fill out the fields, select accessories, and choose the car variant.
   - Upon submission, the data should be stored in the database, and an email notification is sent.
   - Ensure the web server environment is properly configured to execute PHP scripts and connect to the database.

**7. Conclusion:**
   - This documentation provides an overview of the Car Accessories Installation Request Form, including form creation, database integration, processing form submissions, email notifications, user experience, and how to access and test the form.
   - Follow the instructions carefully to set up and run the application successfully.

Please note that this application requires web development skills and the use of HTML, PHP, JavaScript, and CSS. React.js is not used in this project.
