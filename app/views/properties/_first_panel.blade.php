<div class="step-title">Thông tin bất động sản</div>
<div class="row">
  <div class="col-xs-8">
    <div class='form-group'>
      {{ Form::label('title', 'Tiêu đề *') }}
      {{ Form::text('title', null, array(
            'class' => 'form-control',
            'id' => 'title',
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
    <div class="form-group image-wrapper">
      <div><label>Upload ảnh *</label></div>
      <div class="row">
        <div class="col-xs-2 image-box">
          <div class="placeholder">
            <div class="add-image-wrapper">
              <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
              <img src="" alt="" class="img-responsive hidden">
              <div class="hidden">
                <input type="file" name="image[]">
              </div>
            </div>
          </div>
          <div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>
        </div>
        <div class="col-xs-2 image-box">
          <div class="placeholder">
            <div class="add-image-wrapper">
              <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
              <img src="" alt="" class="img-responsive hidden">
              <div class="hidden">
                <input type="file" name="image[]">
              </div>
            </div>
          </div>
          <div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>
        </div>
        <div class="col-xs-2 image-box">
          <div class="placeholder">
            <div class="add-image-wrapper">
              <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
              <img src="" alt="" class="img-responsive hidden">
              <div class="hidden">
                <input type="file" name="image[]">
              </div>
            </div>
          </div>
          <div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>
        </div>
        <div class="col-xs-2 image-box">
          <div class="placeholder">
            <div class="add-image-wrapper">
              <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
              <img src="" alt="" class="img-responsive hidden">
              <div class="hidden">
                <input type="file" name="image[]">
              </div>
            </div>
          </div>
          <div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>
        </div>
        <div class="col-xs-2 image-box">
          <div class="placeholder">
            <div class="add-image-wrapper">
              <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
              <img src="" alt="" class="img-responsive hidden">
              <div class="hidden">
                <input type="file" name="image[]">
              </div>
            </div>
          </div>
          <div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>
        </div>
      </div>
<!--       <div><label>Upload ảnh *</label> <span class="fa fa-cloud-upload fa-2x text-primary"></span></div>
      <div class="row img-preview"></div>
      {{ Form::file('hidden-file-upload-input', array(
        'class' => 'form-control hidden',
        'required' => true,
      ))}} -->
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
        {{ Form::label('address', 'Địa chỉ *') }}
        {{ Form::text('address', null, array(
          'class' => 'form-control',
          'id' => 'address',
          'required' => true,
          'placeholder' => ''))}}
      </div>
  </div>
</div>
<script type="text/javascript">
  // read and preview image
  function previewImage(input) {
    var that = input;
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        var src = e.target.result;
        // show preview image
        $(that).parent().parent().find('img').attr('src', src).removeClass('hidden');
        // hide add image link
        $(that).parent().parent().find('a.add-image-link').addClass('hidden');
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  // trigger input file click event
  $('.add-image-wrapper').click(function (e) {
    $(this).find('.hidden input').trigger('click');
    e.preventDefault();
  });
  // handle click event
  $('.add-image-wrapper .hidden input').click(function (e) {
    e.stopPropagation();
  }).change(function (e) {
    previewImage(this);
  });
  // read and preview image
  // function readImgURL(input) {
  //   var that = input;
  //   $clonedEl = $(that).clone(); // clone hidden input
  //   $clonedEl.attr('name', 'images[]'); // change the name of cloned el
  //   if (input.files && input.files[0]) {
  //     var reader = new FileReader();
  //     reader.onload = function (e) {
  //       $el = $('<div class="col-xs-2"><div class="thumbnail"><img class="img-responsive" src="'
  //         + e.target.result + '"></div>'
  //         + '<div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>'
  //         + '</div>');
  //       $('.img-preview').append($el).find('.col-xs-2').append($clonedEl);
  //       $(that).val(''); // reset hidden input value
  //     }
  //     reader.readAsDataURL(input.files[0]);
  //   }
  // }
  // // upload image handler
  // $('input[name="hidden-file-upload-input"]').change(function(){
  //   readImgURL(this);
  //   if (imgNum == 6) {
  //     $('.fa-cloud-upload').removeClass('text-primary').addClass('text-danger');
  //   }
  // });
  // // trigger update image
  // $('body').on('click', '.fa-rotate-right', function (e) {
  //   $(this).parent().parent().find('input').trigger('click');
  //   e.preventDefault();
  // });
  // // update image handler
  // // delete image
  // $('body').on('click', '.fa-trash', function (e) {
  //   $isConfirmed = confirm('Bạn chắc chắn là muốn xóa ảnh?');
  //   if ($isConfirmed) {
  //     $(this).parent().parent().remove();
  //     imgNum--;
  //   }
  //   e.preventDefault();
  // });
</script>
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
</style>