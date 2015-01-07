<div class="step-title">Thông tin bất động sản</div>
<div class="row">
  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('price', 'Giá *') }}
      {{ Form::text('price', null, array(
            'class' => 'form-control',
            'id' => 'price',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group'>
      <label>
        {{ Form::checkbox('hide-price', 0)}}
        Không hiển thị giá
      </label>
    </div>
    <div class='form-group'>
      {{ Form::label('total_floor', 'Số tầng') }}
      {{ Form::text('total_floor', null, array(
            'class' => 'form-control',
            'id' => 'total_floor',
            'required' => true,
            'placeholder' => ''))}}
    </div>
  </div>
  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('area', 'Diện tích (m2) *') }}
      {{ Form::text('area', null, array(
            'class' => 'form-control',
            'id' => 'area',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group invisible'>
      <label>
        {{ Form::checkbox('fake-check-box', 0)}}
        Không hiển thị giá
      </label>
    </div>
    <div class='form-group'>
      {{ Form::label('legal_document', 'Pháp lý') }}
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
</div>

<div class="row">
  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('bedrooms', 'Phòng ngủ') }}
      {{ Form::text('bedrooms', null, array(
            'class' => 'form-control',
            'id' => 'bedrooms',
            'required' => true,
            'placeholder' => ''))}}
    </div>
  </div>

  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('area', 'Phòng tắm') }}
      {{ Form::text('bathrooms', null, array(
            'class' => 'form-control',
            'id' => 'bathrooms',
            'required' => true,
            'placeholder' => ''))}}
    </div>
  </div>
</div>
