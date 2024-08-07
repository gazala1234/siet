<div class="marquee-container">
    <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        Admissions are open for the academic year 2024-2025. To enroll
        <button type="button" class="btn" data-toggle="modal" data-target="#enquiryModal">Click here</button>
    </marquee>
</div>

<!-- Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="../img/home/secablogo.jpg" alt='No images' class="img-fluid" style="width:20%;height:35px;">
                    <h6 class="mt-2">SECAB INSTITUTE OF ENGINEERING & TECHNOLOGY, VIJAYAPUR.</h6>
                    <h6 class="mt-3 mb-4" style="text-decoration: underline;">Enquiry Form</h6>
                </div>
                <div>
                    <h6 style="text-align:right">Date: <?php echo date("d/m/y"); ?></h6>
                    <div class="form-group">
                        <label for="ename">Name Of candidate</label>
                        <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter candidate name" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="emob1">Mobile 1</label>
                            <input type="number" class="form-control" name="emob1" id="emob1" placeholder="Enter Mobile No 1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emob2">Alternate Mobile 2</label>
                            <input type="number" class="form-control" name="emob2" id="emob2" placeholder="Enter Mobile No 2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch Interested</label>
                        <select class="form-control" name="branch" id="branch" required>
                            <option value="">Select your branch</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="Electrical and Electronics Engineering">Electrical & Electronics Engineering</option>
                            <option value="Electronics and Communication Engineering">Electronics & Communication Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="Wastewater Management, Health and Safety Engineering">Wastewater Management Health and Safety Engineering</option>
                            <option value="Computer Network Engineering">Computer Network Engineering</option>
                            <option value="Structural Engineering">Structural Engineering</option>
                            <option value="Machine Design">Machine Design</option>
                            <option value="Digital Electronics">Digital Electronics</option>
                            <option value="Highway Technology">Highway Technology</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn mt-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>