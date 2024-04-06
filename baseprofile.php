<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Profile</title>
    <link rel="stylesheet" href="editprofile.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-box">
        <h2>My Profile</h2>
        <div class="MyImg">
          <img src="images/img2.png" alt="" id="myProfilePic" />
        </div>
        <div class="details">
          <div class="input-box2">
            <p id="Username"><?php echo $_SESSION['username']; ?></p>
            <img
              src="data:image/png;base64,    iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34    AAAAAXNSR0IArs4c6QAAAa9JREFUSEvFk79LHEEYht93    Z3dnO5UkhaVIKhvBtMEyTQJCAtrYpLNJkailjSAEgiEE    /    BMkTcgv0uQfiCAhRUhlsFQCxsIEbmdvd1654Il33u3KX    o5MN/PN9zzfN8xHDHlxyHxcSaBmc7bwfoPAVKsgSd    +MMauMos9VBVYKcucWCGwDl4rxkubCJPlQJikVSBr1Wb    YPYKwP5DCI40mSjX6SUkHu3ByBN2UVeulOlCSfagmKNH    0C8lnpO0uPTZI8ryXI0/    QeyfdlAkl3wyT5WEsgacQ79wPk9Z4A8mcQRTdJ/    q4laCXlzs0TeNUD4AXcD619W/    sXtRPVbN4uvH96NgeFpO8mCFYYxzsDz0EVoCpeOWhVgK    p4X4GkGz7LlknOSJoGcK0L9ovkV0m7QRxvkjzqJespyL    NskdJLACNVFZ7FjwU8DK19133/    kqBI00cgX1wR3HFNwIPQ2tcXDzsEajQmfBDsATB1BAD    +BHE8cfG5OgRFmm6BXKoJb6etGWvX25tOgXMHAMYHFHw    x1t7qJ8gARAMKToy155+juwMNCP+bbqw95/6/    QfsXnbQYQ+/gFA28jBlyC6zeAAAAAElFTkSuQmCC"
            />
          </div>
          <div class="input-box2">
            <p id="Email-Address"><?php echo $_SESSION['email']; ?></p>
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAa1JREFUSEvdlT9IHEEYxd+b9Xb2sLBKIYGAWORSpLexu1IIXK5NwC5gJVyhTThSJRBIFUgX0FZNI1Z2aay10CpoCKRIZSF3s3c7T/fYDae5u9wfrrltBma+7/vNe9/sDDHlj1OujxkCtJ17QeA9gNKEtp1Lqs1F0VFa569FiXO/ADyesHie/iOwdvkhQOmEAZ7R2otxQHKu5IHzNDewtrP5bgUdAIAbAa/nrD0YBdJ2rkJgB8D8/wB53Y8mDLdIJoNAkgIfx2nvat1xfRWIXKf0BYCV9D2w9iXJP70gkh4lzu2TXAXgRL6h9HWggpQs55574BDAEwC/DVlhGJ50QxTHK15KbVwE8NMAa7T2LHGuY3VfBfmCpAW1WnuSygBakDaDKPqcJifN5gbITwAKJI9ZKFRJXnfWhgWkwZLo47gO4G22+91sfJWNdROG70jmB2Q0QG5Jq9ksG3IPwEI2d+2laiGKjh/2ZiQF9zxvNJa8Md/u1HjjfYXF4mWvxo8NGPafmG3AVXbuh3VjUNxlYO3Svbsou64/AHg6IeFU0vY/1/WERfumz9CTOS2LbgEyCtcZhBvmpAAAAABJRU5ErkJggg=="
            />
          </div>
          <div class="input-box2">
            <p id="PhoneNumber"><?php echo $_SESSION['phone']; ?></p>
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjNJREFUSEu1lU+ITWEYxn+PUqKoaSQWdjIRRcyCZqEMUTZWFqRsTIgFRYnNTCSxM+wkRdjIRrIizWaIlIU/C2QnGyJ/e5z39t3p3M85uufWfHXr3nu+7/293/u873PENC9Nc3waA2zPAD4Bb4BHwG1JD+oS/QdgO/47BiwBDkn6Uj6cAH+ygE+AEUmPc1AHwPZc4CawOW2cADZI+plBFgDLgTXAEWA+8AvYJelGeW8OeA6syLK4A2yXlGfd2mZ7HnAJ2AF8A1ZJetWOkQNcU8vLkva0n9n+DLyP+gOjkn7YvlrosjN0kTRUB/gKzK6BHJd0KmVdTuQZsBaYCbxL5RqSFA3Q2UW2XxQaLKsB3JW0NQH6k05ngYVF/Vtw22PxHThfNMfhKsD1VMuc8bK4+kZJHzKxo+5xplUW2+tT605KGqwCjAAXs+hPgWFJ0fsdy3bc5GPMhaT+/HcVYHGqYznQgKS4QU+ratCiLbeVop2UNNpT9FzkJGAMz2Qp4PcYKEnRAFPLdoh7Drgn6UpdApVeZPsCsK906C2wSdLrlERM7kNgIO0ZKwbxRBWkDjCrsIgwsFYnpBUzcrqwiFvpszILOA4ckNQxrLVumjoihmVpg/pfA3ZL+t0+81+7Tj4TGQ83gIxL2t8VINU7kjgIhE3U2UiZf0ZS2H1rdf3CKYQPYY+G7wNzam50H9hSdt6uAe2AtvuAvcA6YDWwKD2LYRyUFE47tRoDGmjRrERNAzfWoFfAX4wfuxnjzgBjAAAAAElFTkSuQmCC"
            />
          </div>
        </div>
        <button class="btn" onclick="window.location.href='editprofile.php';">
          Edit Profile
        </button>
      </div>
    </div>
  </body>
</html>

