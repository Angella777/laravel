<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Student Profile</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profilepage.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <div class="modal-dialog" id="editmodal">
            <div class="modal-content">
                <form action="{{ url('addstudentmodal') }}" method="POST" >
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Add Student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control"  required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text"  class="form-control" required>
                        </div>	
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Mark 1</label>
                            <input type="text"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Mark 2</label>
                            <input type="text"  class="form-control" required>
                        </div>	
                        <div class="form-group">
                            <label>Mark 3</label>
                            <input type="text"  class="form-control" required>
                        </div>	
                        <div class="form-group">
                            <label>Mark 4</label>
                            <input type="text"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Average</label>
                            <input type="text"  class="form-control" required>
                        </div>	
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text"  class="form-control" required>
                        </div>						
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>