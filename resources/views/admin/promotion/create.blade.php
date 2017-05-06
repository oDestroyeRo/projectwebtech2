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
            <form method="post" action="/promotion/insert"  enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="form-control"><?php  $promotion_id = \App\Promotion::max('promotion_id'); echo $promotion_id+1; ?></label>
              </div>
              <div class="form-group">
                <input type="file" class="form-control" name="promotionImg" id="promotionImg" placeholder="img">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="promotionDes" id="promotionDes" placeholder="Description">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="promotionDis" id="promotionDis" placeholder="Discount">
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
