<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit|Profile</title>
    <link rel="stylesheet" href="editprofile.css"/>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Edit Profile</h2>
            
            <div class="input-box">
                <h1 style="color: white;"><?php echo $_SESSION['username']; ?></h1>
               
                <label for="">Username</label>
                <img src="data:image/png;base64,    iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34    AAAAAXNSR0IArs4c6QAAAa9JREFUSEvFk79LHEEYht93    Z3dnO5UkhaVIKhvBtMEyTQJCAtrYpLNJkailjSAEgiEE    /    BMkTcgv0uQfiCAhRUhlsFQCxsIEbmdvd1654Il33u3KX    o5MN/PN9zzfN8xHDHlxyHxcSaBmc7bwfoPAVKsgSd    +MMauMos9VBVYKcucWCGwDl4rxkubCJPlQJikVSBr1Wb    YPYKwP5DCI40mSjX6SUkHu3ByBN2UVeulOlCSfagmKNH    0C8lnpO0uPTZI8ryXI0/    QeyfdlAkl3wyT5WEsgacQ79wPk9Z4A8mcQRTdJ/    q4laCXlzs0TeNUD4AXcD619W/    sXtRPVbN4uvH96NgeFpO8mCFYYxzsDz0EVoCpeOWhVgK    p4X4GkGz7LlknOSJoGcK0L9ovkV0m7QRxvkjzqJespyL    NskdJLACNVFZ7FjwU8DK19133/    kqBI00cgX1wR3HFNwIPQ2tcXDzsEajQmfBDsATB1BAD    +BHE8cfG5OgRFmm6BXKoJb6etGWvX25tOgXMHAMYHFHw    x1t7qJ8gARAMKToy155+juwMNCP+bbqw95/6/    QfsXnbQYQ+/gFA28jBlyC6zeAAAAAElFTkSuQmCC"/>
            </div>
            <form action="edit.php" method="post">
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="Email Address"/>
                <label for="">Email</label>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAa1JREFUSEvdlT9IHEEYxd+b9Xb2sLBKIYGAWORSpLexu1IIXK5NwC5gJVyhTThSJRBIFUgX0FZNI1Z2aay10CpoCKRIZSF3s3c7T/fYDae5u9wfrrltBma+7/vNe9/sDDHlj1OujxkCtJ17QeA9gNKEtp1Lqs1F0VFa569FiXO/ADyesHie/iOwdvkhQOmEAZ7R2otxQHKu5IHzNDewtrP5bgUdAIAbAa/nrD0YBdJ2rkJgB8D8/wB53Y8mDLdIJoNAkgIfx2nvat1xfRWIXKf0BYCV9D2w9iXJP70gkh4lzu2TXAXgRL6h9HWggpQs55574BDAEwC/DVlhGJ50QxTHK15KbVwE8NMAa7T2LHGuY3VfBfmCpAW1WnuSygBakDaDKPqcJifN5gbITwAKJI9ZKFRJXnfWhgWkwZLo47gO4G22+91sfJWNdROG70jmB2Q0QG5Jq9ksG3IPwEI2d+2laiGKjh/2ZiQF9zxvNJa8Md/u1HjjfYXF4mWvxo8NGPafmG3AVXbuh3VjUNxlYO3Svbsou64/AHg6IeFU0vY/1/WERfumz9CTOS2LbgEyCtcZhBvmpAAAAABJRU5ErkJggg=="/>
            </div>
            <div class="input-box">
                <input type="phone" name="phone" id="phone" placeholder="Phone Number"/>
                <label for="">Phone No</label>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjNJREFUSEu1lU+ITWEYxn+PUqKoaSQWdjIRRcyCZqEMUTZWFqRsTIgFRYnNTCSxM+wkRdjIRrIizWaIlIU/C2QnGyJ/e5z39t3p3M85uufWfHXr3nu+7/293/u873PENC9Nc3waA2zPAD4Bb4BHwG1JD+oS/QdgO/47BiwBDkn6Uj6cAH+ygE+AEUmPc1AHwPZc4CawOW2cADZI+plBFgDLgTXAEWA+8AvYJelGeW8OeA6syLK4A2yXlGfd2mZ7HnAJ2AF8A1ZJetWOkQNcU8vLkva0n9n+DLyP+gOjkn7YvlrosjN0kTRUB/gKzK6BHJd0KmVdTuQZsBaYCbxL5RqSFA3Q2UW2XxQaLKsB3JW0NQH6k05ngYVF/Vtw22PxHThfNMfhKsD1VMuc8bK4+kZJHzKxo+5xplUW2+tT605KGqwCjAAXs+hPgWFJ0fsdy3bc5GPMhaT+/HcVYHGqYznQgKS4QU+ratCiLbeVop2UNNpT9FzkJGAMz2Qp4PcYKEnRAFPLdoh7Drgn6UpdApVeZPsCsK906C2wSdLrlERM7kNgIO0ZKwbxRBWkDjCrsIgwsFYnpBUzcrqwiFvpszILOA4ckNQxrLVumjoihmVpg/pfA3ZL+t0+81+7Tj4TGQ83gIxL2t8VINU7kjgIhE3U2UiZf0ZS2H1rdf3CKYQPYY+G7wNzam50H9hSdt6uAe2AtvuAvcA6YDWwKD2LYRyUFE47tRoDGmjRrERNAzfWoFfAX4wfuxnjzgBjAAAAAElFTkSuQmCC"/>
            </div>
            <ul>
            <li> <button class="btn" type="submit">Save Changes</button></li>
            <li> <button class="btn" id="deleteButton">Delete Account</button></li>
            </ul>
            </form>      
        
        </div>
        
    </div>
</body>
</html>
<script>
document.getElementById("deleteButton").addEventListener("click", function() {
    if (confirm("Are you sure you want to delete this user?")) {
        // Send AJAX request to delete_user.php
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_user.php");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = function() {
            if (xhr.status === 200) {
                window.location.href = "index.html";
            } else {
                alert('Request failed. Please try again later.');
            }
        };
        xhr.send();
    }
});
</script>
