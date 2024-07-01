<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>You Can Share Your Recipe</h5>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo base_url('MenuController/update/' . $menu_detail->id); ?>" method="POST">
                            <div class="form-group">
                                <label for="">Menu Name</label>
                                <input type="text" name="menu_name" id="menu_name" value="<?php echo $menu_detail->menu_name ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Prep Time</label>
                                <input type="text" name="prep" id="prep" value="<?php echo $menu_detail->prep ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Cook Time</label>
                                <input type="text" name="cook" id="cook" value="<?php echo $menu_detail->cook ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Submitted By</label>
                                <input type="text" name="author" id="author" value="<?php echo $menu_detail->author ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>