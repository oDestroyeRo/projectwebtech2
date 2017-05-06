<div class="container">
  <!-- Button trigger modal -->
  <div class="form-group">
    <a href="#" class="btn btn-success btn-lg pull-right" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Add Promotion</a>
  </div>
  <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <br><br><br><br><br><br><br>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Promotion</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="/promotion/insert"  enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="id" class="col-md-3 control-label">ID</label>
                <div class="col-md-8">
                  <label for="id" class="form-control"><?php  $promotion_id = \App\Promotion::max('promotion_id'); echo $promotion_id+1; ?></label>
                </div>
              </div>
              <div class="form-group">
                <label for="img" class="col-md-3 control-label">BROWSE</label>
                <div class="col-md-8">
                  <input for="img" type="file" class="form-control" name="promotionImg" id="promotionImg" placeholder="img">
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-md-3 control-label">DESCRIPTION</label>
                <div class="col-md-8">
                  <input for="description" type="text" class="form-control" name="promotionDes" id="promotionDes" placeholder="Description">
                </div>
              </div>
              <div class="form-group">
                <label for="discount" class="col-md-3 control-label">DISCOUNT</label>
                <div class="col-md-8">
                  <input for="discount" type="text" class="form-control" name="promotionDis" id="promotionDis" placeholder="Discount">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
