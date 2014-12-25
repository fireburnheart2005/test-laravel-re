<div class="panel panel-default">
  <div class="panel-heading">Thông tin bất động sản</div>
  <div class="panel-body">
    <div class='form-group'>
      {{ Form::label('title', 'Tiêu đề *', array('class' => 'col-xs-2 control-label')) }}
      <div class="col-xs-10">
        {{ Form::text('title', null, array(
              'class' => 'form-control',
              'id' => 'title',
              'required' => true,
              'placeholder' => ''))}}
      </div>
    </div>
    <div class='form-group'>
      {{ Form::label('description', 'Mô tả *', array('class' => 'col-xs-2 control-label')) }}
      <div class="col-xs-10">
        {{ Form::textarea('description', null, array(
              'class' => 'form-control',
              'id' => 'description',
              'required' => true,
              'placeholder' => ''))}}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('images', 'Chọn file ảnh', array('class'=> 'col-xs-2 control-label'))}}
      <div class="col-xs-10">
        <div><span class="fa fa-cloud-upload fa-lg text-primary"></span></div>
        <div class="row img-preview"></div>
      </div>
      {{ Form::file('hidden-file-upload-input', array(
        'class' => 'form-control hidden',
        'required' => true,
      ))}}
    </div>
  </div>
</div>
<script type="text/javascript">
  var imgNum = 0;
  // trigger upload image
  $('.fa-cloud-upload').click(function (e) {
    if (imgNum == 6) {
      return;
    }
    $('input[name="hidden-file-upload-input"]').trigger('click');
    imgNum++;
  });
  // read and preview image
  function readImgURL(input) {
    var that = input;
    $clonedEl = $(that).clone(); // clone hidden input
    $clonedEl.attr('name', 'images[]'); // change the name of cloned el
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $el = $('<div class="col-xs-2"><div class="thumbnail"><img class="img-responsive" src="'
          + e.target.result + '"></div>'
          + '<div class="text-center"><span class="fa fa-rotate-right fa-lg"></span>&nbsp;&nbsp;<span class="fa fa-trash fa-lg"></span></div>'
          + '</div>');
        $('.img-preview').append($el).find('.col-xs-2').append($clonedEl);
        $(that).val(''); // reset hidden input value
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  // upload image handler
  $('input[name="hidden-file-upload-input"]').change(function(){
    readImgURL(this);
    if (imgNum == 6) {
      $('.fa-cloud-upload').removeClass('text-primary').addClass('text-danger');
    }
  });
  // trigger update image
  $('body').on('click', '.fa-rotate-right', function (e) {
    $(this).parent().parent().find('input').trigger('click');
    e.preventDefault();
  });
  // update image handler
  $('body').on('change', 'input[name="images[]"]', function (e) {
    updateImgURL(this);
  });
  // read and preview image
  function updateImgURL(input) {
    var that = input;
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        var src = e.target.result;
        $(that).parent().find('img').attr('src', src);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  // delete image
  $('body').on('click', '.fa-trash', function (e) {
    $isConfirmed = confirm('Bạn chắc chắn là muốn xóa ảnh?');
    if ($isConfirmed) {
      $(this).parent().parent().remove();
      imgNum--;
    }
    e.preventDefault();
  })
</script>
<style type="text/css">
  .fa-cloud-upload {
    margin-top: 12px;
    margin-bottom: 12px;
  }
  .fa-cloud-upload:hover, .fa-rotate-right:hover, .fa-trash:hover {
    cursor: pointer;
  }
  .thumbnail {
    margin-bottom: 5px;
  }
</style>