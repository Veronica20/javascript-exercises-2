<?php
include 'header.php';
?>
<div class="row mt-5">
    <input class="form-control col-md-6" id="input">
    <div class="col-md-6">
        <button class="btn btn-primary " onclick="seven(document.getElementById('input').value)"> OK</button>
    </div>
</div>

</body>
<script src="entranceArr.js"></script>

<script>
    function seven(value) {
        var entranceArr = entrance(value)[0];
        var arr = [];
        for (var i = 0; i < entranceArr; i++) {
            if (i < 2) {
                arr.push(i);
            }
            if (i == arr[arr.length - 1] + arr[arr.length - 2]) {
                arr.push(i);
            }
        }
        alert(arr)
    }
</script>
</html>

