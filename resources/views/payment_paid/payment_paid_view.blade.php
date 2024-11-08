<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Dashboard Webpage</title>
    <link href="{{  asset('assets/css/style.css')  }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="container">
        @include('common.sidebar')     
        <main>
            <h1>Payment Paid</h1>
            <div class="header-container">
                <div >
                    <input type="date" id="date" class = "date" name="date" value="{{ now()->format('Y-m-d') }}">
                </div>
                <div class="button-container">
                    <button id="add" class="btn btn-primary">Add</button>
                </div> 
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span id="close" class="close">&times;</span>
                    <h2>Add Expense</h2>
                    <form id="expenseForm"  >
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" placeholder="Enter Expense Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Expense Type:</label>
                            <select id="type" name="type" required>
                                <option value="">Select Expense type</option>
                                <option value="Food">Food</option>
                                <option value="Transport">Transport</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" id="description" placeholder="Enter description" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" id="amount" placeholder="Enter amount" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" id="expenseDate" required>
                        </div>
                        <button type="submit" class="from_add btn btn-primary">Add Expense</button>
                    </form>
                </div>
            </div>
    <div class="table-container">
        <h2>Expense Management</h2>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Expense Name</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Office Supplies</td>
                    <td>Office</td>
                    <td>$150</td>
                    <td><span class="status approved">Approved</span></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Software License</td>
                    <td>IT</td>
                    <td>$200</td>
                    <td><span class="status pending">Pending</span></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Marketing Campaign</td>
                    <td>Marketing</td>
                    <td>$500</td>
                    <td><span class="status rejected">Rejected</span></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>

        </main>  
        {{-- <div class="right">
            @include('common.header')
        </div> --}}
    </div>
    @include('common.footer')
    <script src="{{ asset('assets/script/script.js')  }}"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("add");
    var span = document.getElementById("close"); 

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    $('#expenseForm').submit(function(e) {
            e.preventDefault(); 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           
            var formData = {
                name: $('#name').val(),
                type: $('#type').val(),
                description: $('#description').val(),
                amount: $('#amount').val(),
                date: $('#expenseDate').val()
            };
           
            // Validate form fields
            if (!formData.name || !formData.type || !formData.description || !formData.amount || !formData.date) {
                alert("Please fill name field.");
                return false;
            }
           

            // Send AJAX request
            $.ajax({
                url: '{{ url("/add/expense") }}',  // Your endpoint to handle the form submission
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle successful form submission (e.g., update the table, show success message)
                    alert("Expense added successfully!");

                    // Close the modal
                    modal.style.display = "none";

                    // Optionally, update the table dynamically or reload the page
                    // For example, you can use JavaScript to append a new row to the table.

                    // Reset the form
                    $('#expenseForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    // Handle errors if AJAX request fails
                    alert("An error occurred: " + error);
                }
            });
        });
</script>
<style>
form {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
}
input:not(.date),
textarea,select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  width: 100%;
}

textarea {
  resize: vertical;
}
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
    background-color: #fefefe;
    margin: 7% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}
.close {            
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Button Styles */
.btn {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.header-container {
  display: flex;
  justify-content: space-between; /* Aligns content to the edges */
  align-items: center;
  /* Aligns items to the top */
}
.button-container {
  display: flex;
  justify-content: flex-end; /* Aligns the button to the right */
  align-items: center; /* Centers the button vertically */
  height: 100%; /* Ensures the button-container takes the full height of the parent */
} 

.btn {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.btn-primary {
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
}

.btn-primary:hover {
  background-color: #0056b3;
}


.table-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 35px;
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007bff;
    color: white;
}

tr:hover {
    background-color: #f1f1f1;
}

.status {
    padding: 5px 10px;
    border-radius: 4px;
    color: white;
}

.approved {
    background-color: #28a745;
}

.pending {
    background-color: #ffc107;
}

.rejected {
    background-color: #dc3545;
}

.delete-btn {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.delete-btn:hover {
    background-color: #c82333;
}

</style>
