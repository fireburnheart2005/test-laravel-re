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
      {{ Form::label('category', 'Loại BĐS *') }}
      {{ Form::select('category', $categories, null, array(
            'class' => 'form-control',
            'id' => 'category',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group subcategory-wrapper hidden'>
      {{ Form::label('subcategory', 'Kiểu BĐS') }}
      {{ Form::select('subcategory', array(), null, array(
            'class' => 'form-control',
            'id' => 'subcategory',
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
        {{ Form::label('city', 'Tỉnh/ thành phố *') }}
        {{ Form::select('city', $cities, null, array(
            'class' => 'form-control',
            'id' => 'city',
            'required' => true,
            'multiple' => true,
            'size' => 5,
            'placeholder' => ''))}}
      </div>

      <div class='form-group district-wrapper hidden'>
        {{ Form::label('district', 'Quận/ huyện *') }}
        {{ Form::select('district', array(), null, array(
          'class' => 'form-control',
          'id' => 'district',
          'required' => true,
          'multiple' => true,
          'size' => 5,
          'placeholder' => ''))}}
      </div>

      <div class='form-group ward-wrapper hidden'>
        {{ Form::label('ward', 'Phường/ xã *') }}
        {{ Form::select('ward', array(), null, array(
            'class' => 'form-control',
            'id' => 'ward',
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
    $('#category').change(function (e) {
      var that = this;
      if ($(this).val() == 0) {
        $('.subcategory-wrapper').addClass('hidden');
        // reset ward selection field
        $('#subcategory').html('<option value>---Chọn---</option>');
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
        $('#subcategory').html($(el));
      });
    });
    // City change
    $('#city').change(function (e) {
      var that = this;
      if ($(this).val() == 0) {
        $('.district-wrapper').addClass('hidden');
        $('.ward-wrapper').addClass('hidden');
        $('.address-wrapper').addClass('hidden');
        // reset ward selection field
        $('#ward').html('<option value>---Chọn---</option>');
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
        $('#district').html($(el));
      });
    });
    // District change
    $('body').on('change', '#district', function (e) {
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
        $('#ward').html($(el));
      });
    });
    // Ward change
    $('body').on('change', '#ward', function (e) {
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