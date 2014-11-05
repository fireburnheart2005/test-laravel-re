<div class="panel panel-default">
  <div class="panel-heading">Thông tin bất động sản</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('type', 'Loại BĐS *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('type', array(
                    null=>'Chọn', 'home' => 'Nhà', 'apartment' => 'Căn hộ',
                    'land'=> 'Đất', 'com' =>'Mặt bằng', 'office' => 'Văn Phòng',
                    'warehouse' => 'Kho xưởng', 'bus' => 'Cửa hàng/shop'
                  ), null, array(
                  'class' => 'form-control',
                  'id' => 'type',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          {{ Form::label('subtype', 'Kiểu BĐS', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('subtype', array(), null, array(
                  'class' => 'form-control',
                  'id' => 'subtype',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          {{ Form::label('price', 'Giá *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('price', null, array(
                  'class' => 'form-control',
                  'id' => 'price',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          <div class="checkbox col-xs-8 col-xs-offset-4" style="margin-top: -10px; margin-bottom: 20px;">
            <label>
              {{ Form::checkbox('hide-price', 0)}}
              Không hiển thị giá
            </label>
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <!-- <div class='form-group'>
          {{ Form::label('transaction_type', 'Loại giao dịch *') }}
          {{ Form::select('transaction_type', array(null=>'Chọn', 'sale' => 'Bán', 'rent' => 'Cho thuê'), null, array(
                'class' => 'form-control',
                'id' => 'transaction_type',
                'required' => true,
                'placeholder' => ''))}}
        </div> -->
        <div class='form-group'>
          {{ Form::label('area', 'Diện tích (m2) *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('area', null, array(
                  'class' => 'form-control',
                  'id' => 'area',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          {{ Form::label('legal_document', 'Pháp lý', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('legal_document', array(
              null=>'Chọn',
              '1' => 'Sổ đỏ/Sổ hồng',
              '2' => 'Giấy tờ hợp lệ',
              '3' => 'GP Xây dựng',
              '4' => 'GP Kinh doanh'), null, array(
              'class' => 'form-control',
              'id' => 'legal_document',
              'required' => true,
              'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          {{ Form::label('total_floor', 'Số tầng', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('total_floor', null, array(
                  'class' => 'form-control',
                  'id' => 'total_floor',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('bedrooms', 'Phòng ngủ', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('bedrooms', null, array(
                  'class' => 'form-control',
                  'id' => 'bedrooms',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
      </div>

      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('area', 'Phòng tắm', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('bathrooms', null, array(
                  'class' => 'form-control',
                  'id' => 'bathrooms',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
