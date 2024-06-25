<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Register here!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>
                </div>
            <div class="modal-body">
                <div class="modal-body">
                    <form action = "/code_solutions/signup.php" method="post">
                        <div class="form-group">
                            <label for="uname">User Name</label>
                            <input type="text" class="form-control" id="uname" name="uname" aria-describedby="emailHelp"
                                placeholder="user name">
                            <small id="emailHelp" class="form-text text-muted">user name must be unique.</small>
                        </div>
                        <div class="form-group">
                            <label for="paswd">Password</label>
                            <input type="password" class="form-control" id="paswd" name="paswd" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="cpaswd">Confirm Password</label>
                            <input type="password" class="form-control" id="cpaswd" name="cpaswd" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
               
                
            </div>
        </div>
    </div>