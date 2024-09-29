<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <h1 class="text-center my-4 text-bg-primary py-2">Add New Teacher</h1>

        <a href="index.php" class="btn btn-primary mb-2">All Teacher List</a>

        <div class="row">
            <div class="col-md-6 offset-md-3">

                <form action="save-teacher.php" class="mb-5" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Teacher Full Name:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="tname">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Teacher ID:</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"  name="tid">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name="tphone">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Blood Group:</label>
                        <select class="form-select form-select-lg mb-3" name="tbg">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"  name="temail">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="taddress"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Add Teacher">
                </form>

            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>