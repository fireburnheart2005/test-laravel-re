<div class="step-title">Chi tiết</div>
<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      {{ Form::label('description', 'Mô tả *') }}
      {{ Form::textarea('description', null, [
        'class' => 'form-control',
        'id' => 'description',
        'rows' => 7,
        'required' => true,
      ])}}
    </div>
  </div>
</div>
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
      {{ Form::label('legal_document', 'Pháp lý *') }}
      {{ Form::select('legal_document', array(
        null=>'Chọn',
        'Sổ đỏ/Sổ hồng' => 'Sổ đỏ/Sổ hồng',
        'Giấy tờ hợp lệ' => 'Giấy tờ hợp lệ',
        'GP Xây dựng' => 'GP Xây dựng',
        'GP Kinh doanh' => 'GP Kinh doanh'), null, array(
        'class' => 'form-control',
        'id' => 'legal_document',
        'required' => true,
        'placeholder' => ''))}}
    </div>
  </div>
  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('square', 'Diện tích (m2) *') }}
      {{ Form::text('square', null, array(
            'class' => 'form-control',
            'id' => 'square',
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
      {{ Form::label('floors', 'Số tầng') }}
      {{ Form::text('floors', null, array(
            'class' => 'form-control',
            'id' => 'floors',
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
            'placeholder' => ''))}}
    </div>
  </div>

  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('bathrooms', 'Phòng tắm') }}
      {{ Form::text('bathrooms', null, array(
            'class' => 'form-control',
            'id' => 'bathrooms',
            'placeholder' => ''))}}
    </div>
  </div>
</div>
