<?php include 'includes/mainHeader.php' ?>

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5" data-aos="zoom-out">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white" data-aos="fade-up">Start-up</h3>
    </div>
</div>
<!-- Header End -->
<div class="container">
    <div class="row" style="margin: 100px 0;">
        <div class="col-1"></div>
        <div class="col-10 m-auto" style="border-radius: 10px;box-shadow: 0px 0 25px 0 rgb(0 0 0 / 10%);padding:50px">
            <form>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="startupname">Name</label>
                            <input type="text" class="form-control" id="startupname" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="startupemail">Email address</label>
                            <input type="email" class="form-control" id="startupemail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="startupnumber">Number</label>
                            <input type="text" class="form-control" id="startupnumber" placeholder="Enter number">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="startupsector">Sector</label>
                            <input type="text" class="form-control" id="startupsector" placeholder="Enter sector">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="startupincyear">Incorporation Year</label>
                            <input type="text" class="form-control" id="startupincyear" placeholder="Enter Incorporation Year">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="startupcinnumber">CIN Number</label>
                            <input type="text" class="form-control" id="startupcinnumber" placeholder="Enter CIN Number">
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div> -->
                </div>
                <button type="submit" id="submit_form" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $('#submit_form').on('click', function(e) {
            $('#feedback').text('Sending form')
            $.ajax({
                type: "POST",
                url: "https://demo.exits.in/muideas-backend/api/user/apistartup",
                data: {
                    name: $('#startupname').val(),
                    email: $('#startupemail').val(),
                    number: $('#startupnumber').val(),
                    sector: $('#startupsector').val(),
                    // pitchdeck: $('#pitchdeck').val(),
                    incorporation_year: $('#startupincyear').val(),
                    cin_number: $('#startupcinnumber').val(),
                },
                success: function(response) {
                    console.log(response, {
                        name: $('#name').val(),
                        number: $('#number').val(),
                        email: $('#email').val(),
                        sector: $('#sector').val(),
                        // pitchdeck: $('#pitchdeck').val(),
                        incorporation_year: $('#incorporation_year').val(),
                        cin_number: $('#cin_number').val(),
                    });
                    $('#name').val();
                    $('#number').val();
                    $('#email').val();
                    $('#sector').val();
                    //  $('#pitchdeck').val();
                    $('#incorporation_year').val();
                    $('#cin_number').val();
                }
            })
        });

    });
</script>
<?php include 'includes/mainFooter.php' ?>