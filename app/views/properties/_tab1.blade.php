<div class="step-title">Thông tin bất động sản</div>
<div class="row">
  <div class="col-xs-8">
    <div class='form-group'>
      {{ Form::label('name', 'Tiêu đề *') }}
      {{ Form::text('name', null, array(
            'class' => 'form-control',
            'id' => 'name',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group'>
      {{ Form::label('category_id', 'Loại BĐS *') }}
      {{ Form::select('category_id', $categories, null, array(
            'class' => 'form-control',
            'id' => 'category_id',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group subcategory-wrapper hidden'>
      {{ Form::label('subcategory_id', 'Kiểu BĐS') }}
      {{ Form::select('subcategory_id', array(), null, array(
            'class' => 'form-control',
            'id' => 'subcategory_id',
            'required' => true,
            'placeholder' => ''))}}
    </div>
  </div>
</div>
<!-- Location -->
<div class="step-title">Vị trí</div>
<div class="row">
    <div class="col-xs-8">
      <div class='form-group'>
        {{ Form::label('city_id', 'Tỉnh/ thành phố *') }}
        {{ Form::select('city_id', $cities, null, array(
            'class' => 'form-control',
            'id' => 'city_id',
            'required' => true,
            'multiple' => true,
            'size' => 5,
            'placeholder' => ''))}}
      </div>

      <div class='form-group district-wrapper hidden'>
        {{ Form::label('district_id', 'Quận/ huyện *') }}
        {{ Form::select('district_id', array(), null, array(
          'class' => 'form-control',
          'id' => 'district_id',
          'required' => true,
          'multiple' => true,
          'size' => 5,
          'placeholder' => ''))}}
      </div>

      <div class='form-group ward-wrapper hidden'>
        {{ Form::label('ward_id', 'Phường/ xã *') }}
        {{ Form::select('ward_id', array(), null, array(
            'class' => 'form-control',
            'id' => 'ward_id',
            'required' => true,
            'multiple' => true,
            'size' => 5,
            'placeholder' => ''))}}
      </div>

      <div class='form-group address-wrapper hidden'>
        {{ Form::label('address', 'Địa chỉ') }}
        {{ Form::text('address', null, array(
          'class' => 'form-control',
          'id' => 'address',
          'placeholder' => ''))}}
      </div>
  </div>
</div>
<script type="text/javascript">
  $(function (e) {
    // Category change
    $('#category_id').change(function (e) {
      var that = this;
      if ($(this).val() == 0) {
        $('.subcategory-wrapper').addClass('hidden');
        // reset ward selection field
        $('#subcategory_id').html('<option value>---Chọn---</option>');
        return;
      }
      $('.subcategory-wrapper').removeClass('hidden');
      $.ajax({
        url: '/categories/' + $(that).val() + '/subcategories'
      }).done(function (data) {
        // create options for districts
        el = '<option value>---Chọn---</option>';
        for (var i = 0; i < data.length; i++) {
          el += '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
        $('#subcategory_id').html($(el));
      });
    });
    // City change
    $('#city_id').change(function (e) {
      var that = this;
      if ($(this).val() == 0) {
        $('.district-wrapper').addClass('hidden');
        $('.ward-wrapper').addClass('hidden');
        $('.address-wrapper').addClass('hidden');
        // reset ward selection field
        $('#ward_id').html('<option value>---Chọn---</option>');
        return;
      }
      $('.district-wrapper').removeClass('hidden');
      $.ajax({
        url: '/cities/' + $(that).val() + '/districts'
      }).done(function (data) {
        // create options for districts
        el = '<option value>---Chọn---</option>';
        for (var i = 0; i < data.length; i++) {
          el += '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
        $('#district_id').html($(el));
      });
    });
    // District change
    $('body').on('change', '#district_id', function (e) {
      var that = this;
      if ($(that).val() == 0) {
        $('.ward-wrapper').addClass('hidden');
        $('.address-wrapper').addClass('hidden');
        return;
      }
      $('.ward-wrapper').removeClass('hidden');
      $.ajax({
        url: '/districts/' + $(that).val() + '/wards'
      }).done(function (data) {
        // create options for districts
        el = '<option value>---Chọn---</option>';
        for (var i = 0; i < data.length; i++) {
          el += '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
        $('#ward_id').html($(el));
      });
    });
    // Ward change
    $('body').on('change', '#ward_id', function (e) {
      var that = this;
      if ($(that).val() == 0) {
        $('.address-wrapper').addClass('hidden');
        return;
      }
      $('.address-wrapper').removeClass('hidden');
    });
  });
</script>
<style type="text/css">
  .fa-cloud-upload {
    font-size: 1.5em;
    margin-bottom: 12px;
    margin-left: 5px;
  }
  .fa-cloud-upload:hover, .fa-rotate-right:hover, .fa-trash:hover {
    cursor: pointer;
  }
  .thumbnail {
    margin-bottom: 5px;
  }
  .glyphicon-remove {
    font-size: 10px;
    top: -1px;
    color: #333;
  }
</style>