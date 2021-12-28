<?php
session_start();
include 'admin_dash_header.php';
?>
<div class="title" style="font-size:40px; text-align:center">Add Placement Details</div><br>

<div class="form">
    <form action="add_placement_Connection.php" method="GET">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <br>
        <br>
        <br>
        <div class="form-group">
            <input type="text" name="fname" class="form-control item" id="fname" placeholder="First Name" required>
        </div>

        <div class="form-group">
            <input type="text" name="lname" class="form-control item" id="lname" placeholder="Last Name" required>
        </div>

        <div class="form-group">
            <input type="email" name="email_id" class="form-control item" id="email_id" placeholder="Email Id" required>
        </div>

        <div class="form-group">
            <input type="text" name="branch" class="form-control item" id="branch" placeholder="Branch" required>
        </div>

        <div class="form-group">
            <input type="text" name="batch" class="form-control item" id="batch" placeholder="Batch" required>
        </div>

        <div class="form-group">
            <input type="text" name="company_name" class="form-control item" id="company_name" placeholder="Company Name" required>
        </div>

        <div class="form-group">
            <input type="text" name="sal" class="form-control item" id="sal_lpa" placeholder="Salary in LPA" required>
        </div>

       

        <div class="submit" style=" width: 39%; margin-left: 40%;">
            <input style="width: 50%;" type="submit" name="save" class="btn btn-block create-account" value="Add Details">
        </div>
    </form>
</div>


<div class="table-responsive" style="margin-top: 5%; margin-bottom: 5%">
    <span id="message"></span>
    <form method="post" id="import_excel_form" enctype="multipart/form-data" action="import.php">
        <table class="table">
            <tr>
                <td width="25%" align="right">Select Excel File</td>
                <td width="50%"><input type="file" name="import_excel" /></td>
                <td width="25%"><input type="submit" name="import" id="import" class="btn btn-primary" value="Import" /></td>
            </tr>
        </table>
    </form>
    <br />

</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#import_excel_form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "import.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#import').attr('disabled', 'disabled');
                    $('#import').val('Importing...');
                },
                success: function(data) {
                    $('#message').html(data);
                    $('#import_excel_form')[0].reset();
                    $('#import').attr('disabled', false);
                    $('#import').val('Import');
                }
            })
        });
    });
</script>



<?php
include 'admin_dash_footer.php';
?>