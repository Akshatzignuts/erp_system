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
           
    <div class="table-container" id= "table-container">
        <h2>Expense Management</h2>
        <table id="table-expense" style="border: 1;">
            <thead>
                <tr>
                    <th>Expense Id</th>
                    <th>Expense Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            

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
<!-- SweetAlert2 CDN -->

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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
    // $('#edit').on(cli)

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
                    modal.style.display = "none";
                    Swal.fire({
                    title: 'Role Edited'
                    , text: 'Expense Added successfully.'
                    , icon: 'success'
                    , timer: 1000 // show the popup for 1 seconds
                    , showConfirmButton: false // don't require user confirmation
                });
                    $('#expenseForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                    title: 'Error'
                    , text: 'There was an error in adding Expense.'
                    , icon: 'error'
                    , timer: 1000, // show the popup for 1 seconds
                    showConfirmButton: false // don't require user confirmation
                });
                }
            });
        });
        $(document).ready(function() {
            var table = $('#table-expense').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("expense") }}', 
            columns: [
                { data: 'name', name: 'name' },
                { data: 'type', name: 'type' },
                { data: 'description', name: 'description' }, 
                {data: 'amount' , name: 'amount'},
                {data: 'date', name: 'date'},
                {data: 'action', name: 'action'},
            ]
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
#table-expense td {
   
    border: 1px solid #ddd; /* Add a border to the data cells */
}

th, td {
  
    text-align: center;
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

.edit-btn {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
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
