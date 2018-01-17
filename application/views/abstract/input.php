<body>
	<label>Abstract Submition</label>
	<div class="white-box">
	<form class="form-horizontal form-material" method="post" action="input">
		<div class="form-group">
            <label class="col-md-12">Tittle</label>
            <div class="col-md-5">
                <input type="text" placeholder="Judul" class="form-control form-control-line" name="judul" required=""> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Keyword</label>
            <div class="col-md-5">
                <input type="text" placeholder="Keyword" class="form-control form-control-line" name="keyword"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Topic</label>
            <div class="col-md-5">
                <select name="topic" size="1"  required="" class="form-control form-control-line">
                    <option value="-">Choose Topic </option>
                    <option value="-">--------------------------------------------------</option>
                    <option value="Collaboration in education: university-school-industry">Collaboration in education: university-school-industry</option>
                    <option value="Curriculum design, development & implementation">Curriculum design, development & implementation</option>
                    <option value="Evaluation & assessment">Evaluation & assessment</option>
                    <option value="Teacher quality">Teacher quality</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Abstract</label>
            <div class="col-md-5">
                <textarea class="form-control form-control-line" name="abstract" cols="70" rows="6"></textarea><p>*max 300 words </p> </div>
        </div>
        <input type="hidden" name="tanggal" value="<?php echo $now ?>">
        <input type="hidden" name="status" value="2">
        <input type="hidden" name="status_recv" value="1">
        <input type="hidden" name="id_user" value="<?php echo $_SESSION['sesId']; ?>">
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success" name="add">Submit</button>
            </div>
        </div>
	</form>
	</div>
</body>