<body>
	<label>Registration of Attendance</label>
    <p>Please verify the name expected tobe in your certificate<p>
	<div class="white-box">
	<form class="form-horizontal form-material" method="post" action="inputAttend">
		<div class="form-group">
            <label class="col-md-12">First Name *</label>
            <div class="col-md-5">
                <input type="text" placeholder="Judul" class="form-control form-control-line" name="Fname" required=""> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Middle Name</label>
            <div class="col-md-5">
                <input type="text" placeholder="Keyword" class="form-control form-control-line" name="MName" > </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Last Name *</label>
            <div class="col-md-5">
                <input type="text" placeholder="Keyword" class="form-control form-control-line" name="LName" required=""> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Proof of Payment *</label>
            <div class="col-md-5">
                <input type="file" placeholder="Keyword" class="form-control form-control-line" name="payment" required=""> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Presentation</label>
            <div class="col-md-5">
                <input type="file" placeholder="Keyword" class="form-control form-control-line" name="presentaton"> </div>
        </div>
        <input type="hidden" name="tanggal" value="<?php echo $now ?>">
         <input type="hidden" name="status" value="2">
        <input type="hidden" name="id_user" value="<?php echo $_SESSION['sesId']; ?>">
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success" name="add">Register</button>
            </div>
        </div>
	</form>
	</div>
</body>