<?php $__env->startSection('title',"Attendence of 04-08-2018"); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                Attendence of a day
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">

                      <div class="col-lg-2 form-group">
                        <label for="day">Day</label>
                        <select class="form-control" name="day" required>
                          <option value="" selected disabled>Day</option>
                          <option value="1">01</option>
                          <option value="2">02</option>
                          <option value="3">03</option>
                          <option value="4">04</option>
                          <option value="5">05</option>
                        </select>
                      </div>

                      <div class="col-lg-2 form-group">
                        <label for="month">Month</label>
                        <select class="form-control" name="month" required>
                          <option value="" selected disabled>Month</option>
                          <option value="January">January</option>
                          <option value="february">February</option>
                          <option value="march">March</option>
                          <option value="april">April</option>
                          <option value="may">May</option>
                        </select>
                      </div>

                      <div class="col-lg-2 form-group">
                        <label for="class">Class</label>
                        <select name="class" class="form-control" required>
                          <option value="" selected disabled>Class</option>
                          <option value="all">All Class</option>
                          <option value="one">One</option>
                          <option value="two">Two</option>
                          <option value="three">Three</option>
                          <option value="four">Four</option>
                          <option value="five">Five</option>
                        </select>
                      </div>

                      <div class="col-lg-3 form-group">
                        <label for="section">Section</label>
                        <select name="section" class="form-control" required>
                          <option value="" selected disabled>Section</option>
                          <option value="no">No Section</option>
                          <option value="all">All Section</option>
                          <option value="a">A</option>
                          <option value="b">B</option>
                          <option value="c">C</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-3 ">
                        <label for="group">Group</label>
                        <select name="group" class="form-control" required>
                          <option value="" selected disabled>Group</option>
                          <option value="no">No Group</option>
                          <option value="all">All Group</option>
                          <option value="science">Science</option>
                          <option value="arts">Humanity</option>
                          <option value="commerce">Commerce</option>
                        </select>
                      </div>
                    </div> 
                    <input type="submit" class="btn btn-primary pull-right" value="Find Attendence">
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="d-flex">
              <div class="mr-auto p-2 card-title">
                  Attendence of 04-08-2018
              </div>

              <div class="p-2">
                <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-print"></i> Print</a>
              </div>

              <div class="p-2">
                <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
              </div>
              
            </div>
            <div class="card-body">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Class</th>
                      <th scope="col">Section</th>
                      <th scope="col">Group</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th scope="row">
                        <a href="#">112233</a>
                      </th>
                      <td>Four</td>
                      <td>A</td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <a href="#">112235</a>
                      </th>
                      <td>Nine</td>
                      <td>B</td>
                      <td>Science</td>
                      <td></td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <a href="#">112433</a>
                      </th>
                      <td>Five</td>
                      <td>B</td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <a href="#">114233</a>
                      </th>
                      <td>Seven</td>
                      <td>C</td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <a href="#">122233</a>
                      </th>
                      <td>Ten</td>
                      <td>A</td>
                      <td>Commerce</td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>